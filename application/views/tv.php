<style>
body {
  overflow: hidden;
}

#chamadaPainel{
    position: absolute;
    top: 0; 
    left: 0; 
    background-color: #FFF; 
    padding:10px 0px;
    width: 100%;
    height: 100%;
    font-size: 48px;
    display: flex;
    align-items: center;
    align-self: center;
    align-content: center;
    justify-content: center;
    text-align:center;
    animation: blink 2s infinite;
}

@keyframes blink {
  50% {
    background-color: #f76565;
  }
}



</style>

<div style="position: relative;">
    <video autoplay controls loop width="100%" height="100%" id="bg_video">
        <source src="<?=base_url()?>assets/videos/video1.mp4" type="video/mp4">
    </video>
    <marquee style="position: absolute; bottom: 0px; left: 0px; background-color: white; padding:10px 0px;">
        <span style="font-size: 48px;">
        Últimos Chamados: Lucas Alcantara (Guichê 2); Maria Eduarda (Guichê 1); 
        </span>
    </marquee>

    <div id="chamadaPainel" style="display:none;">
        <span>
        <div id="nomeChamada"></div>
            <br>
            <div id="guicheChamada"></div>

        </span>
    </div>

</div>

<audio id="alerta" loop>
  <source src="<?=base_url()?>assets/audio/definite.mp3" type="audio/mpeg">
</audio>

<script>
 


    function exibirChamadaPainel(dadosPainel){


        document.getElementById('nomeChamada').innerHTML = dadosPainel.mensagem;
        document.getElementById('guicheChamada').innerHTML = dadosPainel.id;

        var bg_video = document.getElementById("bg_video");
      
        document.getElementById('chamadaPainel').style.display='block';
        document.getElementById('alerta').play();
        bg_video.volume = 0;



        setTimeout(function() {
            document.getElementById('chamadaPainel').style.display='none';
            document.getElementById('alerta').pause();
            document.getElementById('nomeChamada').innerHTML = '';
            document.getElementById('guicheChamada').innerHTML = '';
            bg_video.volume = 1;
        }, 6000);
        
    }


    

    var ws = new WebSocket(`ws://<?=HOST_WEBSOCKET?>:<?=PORT_WEBSOCKET?>`);
    ws.onmessage = function(e) {
        var obj = JSON.parse(e.data);
        if( obj.destino == 'TV'){
            console.log('Mensagem recebida:', obj.dados);
            exibirChamadaPainel( obj.dados );
           /*  document.getElementById('mensagens').append(`${e.data} <hr>`); */
        }
    };

    ws.onclose = function() {
        console.log('Desconectado!');
    };

    ws.onopen = function() {
        console.log('Conectado!');
    };
    
</script>
