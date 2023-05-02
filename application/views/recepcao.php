<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-success-transparent">
                    <h3 class="card-title">AGENDAMENTOS PARA: <?=date('d/m/Y')?></h3>
                </div>
                <div class="card-body">
                    <div class="list-group">

                        <a href="javascript:void(0);" class=" bg-info-transparent list-group-item list-group-item-action flex-column align-items-left">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1" style="text-transform: uppercase; font-size:1.5em;">PF: 45736 - Gustavo Rodrigues Cardoso</h5>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <div style="font-size:1.2em;">
                                    <p class="mb-1">SOLICITAÇÃO DE CÉDULA DE IDENTIDADE</p>
                                    <p class="mb-1">Agendado às 12:30 - Guichê 02</p>
                                </div>
                                <div class="">
                                    <button data-bs-target="#modalConfirmarPresenca" data-bs-toggle="modal" class="btn btn-success btn-lg">Confirmar Presença</button>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="">
                                    <div class="form-group ">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio custom-control-md">
                                                <input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked="">
                                                <span class="custom-control-label custom-control-label-md">ATENDIMENTO <b> NORMAL</b></span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-md">
                                                <input type="radio" class="custom-control-input" name="example-radios1" value="option2">
                                                <span class="custom-control-label custom-control-label-md">ATENDIMENTO <b>PRIORITÁRIO</b></span>
                                            </label>
                                            
                                        </div>
                                    </div>
                                </div>
                                <textarea name="obs" id="" rows="5" style="resize: none;" class="form-control" placeholder="Observações"></textarea>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalConfirmarPresenca">
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
                <button class="btn btn-primary" onclick="confirmarPresenca()" type="button">Save changes</button> 
                <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmarPresenca(){
        return true;
    }
</script>