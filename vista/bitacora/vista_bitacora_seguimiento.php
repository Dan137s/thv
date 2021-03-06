<script type="text/javascript" src="../js/requerimiento.js?rev=<?php echo time();?>"></script>
<style>
      #galeria{
        display: flex;
    }
    #galeria img{
        width: 85px;
        height: 85px;
        border-radius: 10px;
        box-shadow: 0 0 8px rgba(0,0,0,0.2);
        opacity: 85%;
    }
</style>
<div class="col-md-12">
    
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
              <h3 class="box-title">[REPORTES DE REQUERIMIENTOS]</h3>

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
                    <!-- <div class="col-lg-2">
                        <button class="btn btn-danger" style="width:100%" onclick="AbrirModalRegistro()"><i class="glyphicon glyphicon-plus"></i>Nuevo Registro</button>
                    </div>-->
                
            </div>
            <table id="tabla_requerimiento" class="display responsive nowrap" style="width:100%">
            <thead>
                    <tr>
                        <th>#</th>
                        <th>N° Reporte</th>
                        <th>N° Presupuesto</th>
                        <th>Nombre vecino</th>
                        <th>trabajador</th>
                        <th>voluntario</th>
                        <th>Dirección</th>
                        <th>Fecha ejecución</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>N° Reporte</th>
                        <th>N° Presupuesto</th>
                        <th>Nombre vecino</th>
                        <th>trabajador</th>
                        <th>voluntario</th>
                        <th>Dirección</th>
                        <th>Fecha ejecución</th>
                        <th>Estado</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->
</div>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal_registro" role="dialog" >
        <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width: 200%;">
            <div class="modal-header" >
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><b>Registre Requerimiento</b></h4>
            </div>
            <div class="modal-body" >
                <div class="col-lg-12">
                    <label for="">N° Reporte</label>
                    <input type="text" class="form-control" id="txt_nomh" placeholder="Ingrese numero de Reporte"><br>
                </div>
                <div class="col-lg-12">
                    <label for="">Imagen adjunta</label>
                    <input type="file" name='files[]' accept="image/gif, image/jpeg, image/png" class="form-control" onchange="previewMultiple(event)" id="adicionafoto" placeholder="Ingrese numero de Reporte" multiple><br>
                    <div id="galeria" >
    
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="">Monto de Presupuesto</label>
                    <input type="" class="form-control" id="txt_alias" placeholder="Ingrese monto del presupuesto"><br>
                </div>
                <div class="col-lg-12">
                    <label for="">Nombre vecino</label>
                    <input type="text" class="form-control" id="txt_alias" placeholder="Ingrese nombre del vecino"><br>
                </div>
                <div class="col-lg-12">
                    <label for="">Dirección</label>
                    <input type="text" class="form-control" id="txt_nomh" placeholder="Ingrese la dirección"><br>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="Registrar_Usuario()"><i class="fa fa-check"><b>&nbsp;Registrar</b></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
            </div>
        </div>
        </div>
    </div>
</form>
<form autocomplete="false" onsubmit="return false">
    <div class="modal fade" id="modal_editar" role="dialog">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><b>Editar Usuario</b></h4>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <input type="text" id="txtidusuario" hidden>
                    <label for="">Usuario</label>
                    <input type="text" class="form-control" id="txtusu_editar" placeholder="Ingrese usuario" disabled><br>
                </div>
                <div class="col-lg-12">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="txt_alias_editar" placeholder="Nombre Usuario"><br>
                </div>
           
                <div class="col-lg-12">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="txt_email_editar" placeholder="Ingrese Correo">
                    <label for="" id="emailOK_editar" style="color:red;"></label>
                    <input type="text" id="validar_email_editar" hidden>
                </div>

                <div class="col-lg-12">
                    <label for="">Sexo</label>
                    <select class="js-example-basic-single" name="state" id="cbm_sexo_editar" style="width:100%;">
                        <option value="M">MASCULINO</option>
                        <option value="F">FEMENINO</option>
                    </select><br><br>
                </div>
                <div class="col-lg-12">
                    <label for="">Rol</label>
                    <select class="js-example-basic-single" name="state" id="cbm_rol_editar" style="width:100%;">
                    </select><br><br>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="Modificar_Usuario()"><i class="fa fa-check"><b>&nbsp;Modificar</b></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
            </div>
        </div>
        </div>
    </div>
</form>
<script>
$(document).ready(function() {
    listar_requerimiento2();
    $('.js-example-basic-single').select2();
    listar_combo_rol();
    $("#modal_registro").on('shown.bs.modal',function(){
        $("#txt_usu").focus();  
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

function previewMultiple(event){
        var saida = document.getElementById("adicionafoto");
        var quantos = saida.files.length;
        for(i = 0; i < quantos; i++){
            var urls = URL.createObjectURL(event.target.files[i]);
            document.getElementById("galeria").innerHTML += '<img src="'+urls+'">';
        }
    }
</script>