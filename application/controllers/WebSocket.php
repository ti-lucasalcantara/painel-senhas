<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class WebSocket extends CI_Controller implements MessageComponentInterface {

    private $clients;

    public function __construct() {
        parent::__construct();
        $this->clients = new \SplObjectStorage;
    }

    public function index() {
        echo "websocket iniciado\n";

        $server = \Ratchet\Server\IoServer::factory(
            new \Ratchet\Http\HttpServer(
                new \Ratchet\WebSocket\WsServer($this)
            ),
            PORT_WEBSOCKET
        );
        $server->run();
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
        echo "Nova conexão! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $numRecv = count($this->clients) - 1;
        echo sprintf('Conexão %d enviou uma mensagem "%s" para %d outras conexões' . "\n",
            $from->resourceId, $msg, $numRecv);

        foreach ($this->clients as $client) {
            if ($from !== $client) {
                // A mensagem recebida de $from deve ser enviada para todos os outros clientes,
                // exceto para $from
                $client->send($msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        $this->clients->detach($conn);
        echo "Conexão fechada! ({$conn->resourceId})\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "Ocorreu um erro: {$e->getMessage()}\n";
        $conn->close();
    }

}
