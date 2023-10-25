    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="justify-content-between">

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1>Inscripción</h1>
                                        <button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#exampleModal" data-coreui-whatever="@mdo"><strong>+</strong></button>
                                    </div>
                                </div>
                            </div>







                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <!--MODAL FORMULARIO-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Inscripción</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="input-group">
                        <input type="text" class="form-control" id="busqueda" size="16" placeholder="Buscar por nombre...">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" id="buscar" type="button">
                                <span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                    </svg></span>
                            </button>
                        </div>
                    </div>
<br>

                  


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--FIN MODAL FORMULARIO-->