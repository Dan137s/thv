
<head>
<!--datatables CSS básico -->
<link rel="stylesheet" type="text/css" href="../../thv/datatables/datatables.min.css"/>
<!--datatables estilo boostrap 4 css-->
<link rel="stylesheet" type="text/css" href="../../thv/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

<!--font awesome con CDN -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK10YPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> 
</head>


<script type="text/javascript" src="../js/herramienta.js?rev=<?php echo time();?>"></script>
<div class="col-md-12">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
              <h3 class="box-title">[HERRAMIENTAS-REGISTRADAS] EN SISTEMA  </h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
              <!-- /.box-tools -->
        </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="form-group">
                <div class="col-lg-10">
                    <div class="input-group">
                        <input type="text" class="global_filter form-control" id="global_filter" placeholder="Ingresar dato a buscar">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-danger" style="width:100%" onclick="AbrirModalRegistro()"><i class="glyphicon glyphicon-plus"></i>Nuevo Registro</button>
                </div>
            </div>
            
            <table id="tabla_herramienta" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>N° Serial</th>
                        <th>Tipo</th>  
                        <th>Marca</th>  
                        <th>Modelo</th> 
                        <th>Fecha Registro</th> 
                        <th>Descripcion</th>             
                        <th>Estatus</th>
                        <th>Acción</th>
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>N° Serial</th>
                        <th>Tipo</th>  
                        <th>Marca</th>  
                        <th>Modelo</th> 
                        <th>Fecha Registro</th> 
                        <th>Descripcion</th>             
                        <th>Estatus</th>
                        <th>Acción</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->
</div>

<!--Modal registro-->
<div class="modal fade" id="modal_registro" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="text-align:center;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><b>Registro De Herramientas</b></h4>
            </div>
            <div class="modal-body">

                <div class="col-lg-12">
                    <label for="">Serial</label>
                    <input type="text" class="form-control" id="txt_serial" placeholder="Ingrese Serial Herramienta" ><br>
                </div>

                
                <div class="col-lg-12">
                    <label for="">Tipo</label>
                    <input type="text" class="form-control" id="txt_tipo" placeholder="Seleccione Tipo Herramienta"  ><br>
                </div>
                
                <div class="col-lg-12">
                    <label for="">Marca</label>
                    <input type="text" class="form-control" id="txt_marca" placeholder="Ingrese Marca Herramienta"  ><br>
                </div>

                
                <div class="col-lg-12">
                    <label for="">Modelo</label>
                    <input type="text" class="form-control" id="txt_modelo" placeholder="Ingrese Modelo Herramienta" ><br>
                </div>


                <div class="col-lg-12">
                    <label for="">Descripcion</label>
                    <input type="text" class="form-control" id="txt_descripcion" placeholder="Ingrese Descripcion Herramienta"><br>
                </div>


                <div class="col-lg-12">
                    <label for="">Estatus</label>
                    <select class="js-example-basic-single" name="state" id="txt_estatus" style="width:100%;">
                        <option value="">--</option>
                        <option value="ACTIVO">ACTIVO</option>
                        <option value="INACTIVO">INACTIVO</option>
                    </select><br><br>
                </div>

                

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="Registrar_Herramienta()"><i class="fa fa-check"><b>&nbsp;Registrar</b></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
            </div>
        </div>
        </div>
</div>

<!--Modal Editar registro-->
<div class="modal fade" id="modal_editar" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="text-align:center;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><b>Modificar Herramientas</b></h4>
            </div>
            <div class="modal-body">

                <div class="col-lg-12">
                <input type="text"   id="herramienta_id" placeholder="Ingrese Serial"  hidden >
                    <label for="">Serial</label>

                    <input type="text"   id="txt_serial_actual_editar" placeholder="Ingrese Serial" hidden >
                    <input type="text" class="form-control" id="txt_serial_nuevo_editar" placeholder="Ingrese Serial Herramienta" ><br>
                </div>

                
                <div class="col-lg-12">
                    <label for="">Tipo</label>
                    <input type="text" class="form-control" id="txt_tipo_editar" placeholder="Seleccione Tipo Herramienta"  ><br>
                </div>
                
                <div class="col-lg-12">
                    <label for="">Marca</label>
                    <input type="text" class="form-control" id="txt_marca_editar" placeholder="Ingrese Marca Herramienta"  ><br>
                </div>

                
                <div class="col-lg-12">
                    <label for="">Modelo</label>
                    <input type="text" class="form-control" id="txt_modelo_editar" placeholder="Ingrese Modelo Herramienta" ><br>
                </div>


                <div class="col-lg-12">
                    <label for="">Descripcion</label>
                    <input type="text" class="form-control" id="txt_descripcion_editar" placeholder="Ingrese Descripcion Herramienta"><br>
                </div>


                <div class="col-lg-12">
                    <label for="">Estatus</label>
                    <select class="js-example-basic-single" name="state" id="txt_estatus_editar" style="width:100%;">
                        <option value="">--</option>
                        <option value="ACTIVO">ACTIVO</option>
                        <option value="INACTIVO">INACTIVO</option>
                    </select><br><br>
                </div>

                

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="Modificar_Herramienta()"><i class="fa fa-check"><b>&nbsp;Modificar</b></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
            </div>
        </div>
        </div>
</div>


<script>
$(document).ready(function() {
    listar_herramienta();
    $('.js-example-basic-single').select2();
    $("#modal_registro").on('shown.bs.modal',function(){
        $("#txt_serial").focus();  
    })
} );



$('.box').boxWidget({
    animationSpeed  : 500,
    collapseTrigger : '[data-widget="collapse"]',
    removeTrigger   : '[data-widget="remove"]',
    collapseIcon    : 'fa-minus',
    expandIcon      : 'fa-plus',
    removeIcon      : 'fa-times'
})
</script>

