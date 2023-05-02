<style>
    .radio_guiche{
        font-size: 25px;
        border-radius: 0px;
        margin-right: 25px;
    }
</style>


<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">SELECIONE O GUICHÊ PARA REALIZAR O ATENDIMENTO:</h3>
                </div>
                <div class="card-body">
                    <div class="btn-list text-center">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                            <label class="btn btn-outline-primary radio_guiche" for="btnradio1">GUICHÊ 1</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-primary radio_guiche" for="btnradio2">GUICHÊ 2</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                            <label class="btn btn-outline-primary radio_guiche" for="btnradio3">GUICHÊ 3</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                            <label class="btn btn-outline-primary radio_guiche" for="btnradio4">GUICHÊ 4</label>
                            
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                            <label class="btn btn-outline-primary radio_guiche" for="btnradio5">GUICHÊ FINANCEIRO</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header bg-info-transparent">
                    <h3 class="card-title">ATENDIMENTO NORMAL</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-left">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1" style="text-transform: uppercase;">PF: 45736 - Gustavo Rodrigues Cardoso</h5>
                                <small class="text-center">05:12 <br> aguardando</small>
                            </div>
                            <div class="d-flex w-100 justify-content-between mt-3">
                                <div class="">
                                    <p class="mb-1">SOLICITAÇÃO DE CÉDULA DE IDENTIDADE</p>
                                    <small>Agendado para 11:30 - Guichê 03.</small>
                                </div>
                                <div class="">
                                    <button data-bs-target="#modalConfirmarAtendimento" data-bs-toggle="modal" class="btn btn-danger">REALIZAR ATENDIMENTO</button>
                                </div>
                            </div>
                        </a>
                        
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-left">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1" style="text-transform: uppercase;">PF: 45736 - Gustavo Rodrigues Cardoso</h5>
                                <small class="text-center">07:12 <br> aguardando</small>
                            </div>
                            <div class="d-flex w-100 justify-content-between mt-3">
                                <div class="">
                                    <p class="mb-1">SOLICITAÇÃO DE CÉDULA DE IDENTIDADE</p>
                                    <small>Agendado para 12:30 - Guichê 03.</small>
                                </div>
                                <div class="">
                                    <button class="btn btn-danger">REALIZAR ATENDIMENTO</button>
                                </div>
                            </div>
                        </a>
                        
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-left">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1" style="text-transform: uppercase;">PF: 45736 - Gustavo Rodrigues Cardoso</h5>
                                <small class="text-center">-</small>
                            </div>
                            <div class="d-flex w-100 justify-content-between mt-3">
                                <div class="">
                                    <p class="mb-1">SOLICITAÇÃO DE CÉDULA DE IDENTIDADE</p>
                                    <small>Agendado para 13:30 - Guichê 03.</small>
                                </div>
                                <div class="">
                                <!--  <button class="btn btn-danger">REALIZAR ATENDIMENTO</button> -->
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header bg-danger-transparent">
                    <h3 class="card-title">ATENDIMENTO PRIORITÁRIO</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        - NENHUM ATENDIMENTO CADASTRADO - 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-success-transparent">
                    <h3 class="card-title">ATENDIMENTOS REALIZADOS (<?=date('d/m/Y')?>)</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">

                        <a href="javascript:void(0);" class=" bg-info-transparent list-group-item list-group-item-action flex-column align-items-left">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1" style="text-transform: uppercase;">PF: 45736 - Gustavo Rodrigues Cardoso</h5>
                                <small class="text-center">ATENDIDO<br>GUICHE 4</small>
                            </div>
                            <div class="d-flex w-100 justify-content-between mt-3">
                                <div class="">
                                    <p class="mb-1">SOLICITAÇÃO DE CÉDULA DE IDENTIDADE</p>
                                    <small>Agendado às 12:30 - Guichê 03.</small>
                                    <br>
                                    <small>Atendido às 12:27 - Guichê 03.</small>
                                    <br>
                                    <small>Compareceu à recepção às 11:27 - 01:00:00 de espera na recepção</small>

                                </div>
                                <div class="">
                                    <button class="btn btn-primary">EXIBIR NO PAINEL</button>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalConfirmarAtendimento">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h6>Why We Use Electoral College, Not Popular Vote</h6>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="enviarMensagem()" type="button">Save changes</button> 
                <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    var ws = new WebSocket(`ws://<?=HOST_WEBSOCKET?>:<?=PORT_WEBSOCKET?>`);
    ws.onopen = function() {
        console.log('Conectado!');
    };
    ws.onmessage = function(event) {
        console.log('Mensagem recebida: ' + event.data);
    };
    ws.onclose = function() {
        console.log('Desconectado!');
    };
    ws.onerror = function(event) {
        console.log('Erro: ' + event.data);
    };
    function enviarMensagem() {
        var mensagem = 'TESTE DE ENVIO COM NOME LAYOUT';

        var obj = {
            origem: 'GUICHE',
            destino: 'TV',
            dados: {
                    id:1, 
                    mensagem: mensagem,
            },
        }
        ws.send( JSON.stringify(obj) );
    }
</script> 