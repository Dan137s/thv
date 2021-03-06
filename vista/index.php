<?php
session_start();
if(!isset($_SESSION['S_IDUSUARIO'])){
	header('Location: ../Login/index.php');
}

?>

<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../plantilla/dist/img/hc.png">
    <title> Fundación | Trato Hecho Vecino|</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../Plantilla/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Plantilla/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../Plantilla/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../Plantilla/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../Plantilla/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../Plantilla/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../Plantilla/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
        href="../Plantilla/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../Plantilla/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../Plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="../Plantilla/plugins/DataTables/datatables.min.css">
    <link rel="stylesheet" href="../Plantilla/plugins/select2/select2.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
.swal2-popup {
    font-size: 1.6rem !important;
}
</style>

<body class="hold-transition skin-black-light sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index.php" class="logo">

                <!-- mini logo for sfidebar mini 50x50 pixels -->

                <span class="logo-mini"><b>F </b>THV</span>
                <!-- logo for regular state and mobile devices -->

                <span class="logo-lg"><b>FUNDACiÓN </b>THV </span>

            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->


                        <!-- Notifications: administrador -->
                        <?php
          if($_SESSION['S_ROL']=='ADMINISTRADOR'){

          ?>

                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-danger">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Hola Tienes (+3) Nuevas Notificaciones</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-black"></i> Solicitud Vecino 12.345.678-9
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> Solicitud Vecino 12.345.678-9
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> Solicitud Vecino 12.345.678-9
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#"
                                        onclick="cargar_contenido('contenido_principal','usuario/vista_requerimientos_admin.php')">Ver
                                        todo</a></li>
                            </ul>
                        </li>
                        <?php 
          }
          ?>
                        <?php
          if($_SESSION['S_ROL']=='ADMINISTRADOR'){

          ?>
                        <?php 
          }
          ?>

                        <!-- Notifications: trabajador -->
                        <?php
          if($_SESSION['S_ROL']=='TRABAJADOR'){

          ?>
                        <!-- Notifications: trabajador -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-danger">8</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Hola Tienes (+8) Nuevas Notificaciones</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-black"></i> Solicitud Vecino 12.345.678-9
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-green"></i> Solicitud Vecino 12.345.678-9
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-black"></i> Solicitud Vecino 12.345.678-9
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-black"></i> Solicitud Vecino 12.345.678-9
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> Solicitud Vecino 12.345.678-9
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> Solicitud Vecino 12.345.678-9
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Ver todo</a></li>
                            </ul>
                        </li>
                        <?php 
          }
          ?>
                        <?php
          if($_SESSION['S_ROL']=='TRABAJADOR'){

          ?>
                        <?php 
          }
          ?>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img id="img_nav" class="user-image" alt="User Image">
                                <span class="hidden-xs">[<?php echo $_SESSION['S_ROL'];?>]</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">

                                    <img id="img_subnav" class="img-circle" alt="User Image">

                                    <p>
                                        Usuario <i class="fa fa-circle text-success"></i></br>
                                        <?php  echo $_SESSION['S_ROL']; ?>
                                        [
                                        <?php  echo $_SESSION['S_USER']; ?>
                                        ]


                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!--li class="user-body">
                <div-- class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div-->
                                <!-- /.row -->
                                </!--li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                <li class="pull-left">
                                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                                </li>

                                <div class="pull-right">
                                    <a href="../controlador/usuario/controlador_cerrar_session.php"
                                        class="btn btn-default btn-flat">Cerrar Sesión</a>
                                </div>

                                <div class="pull-right">
                                    <a href="#" onclick="AbrirModalEditarContra()" class="btn btn-default btn-flat">Mi
                                        Perfil</a>
                                </div>


                        </li>
                    </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img id="img_lateral" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p> <?php  echo $_SESSION['S_ROL']; ?></br> </br>RUT[<?php echo $_SESSION['S_USER']; ?>]

                        </p>


                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->

                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header"><i class="fa fa-bars" aria-hidden="true"></i> PANEL MENÚ
                        <?php  echo $_SESSION['S_ROL']; ?> </li>

                    <!-- #################################################################################################################################-->
                    <!-- ###############################################-DIVICION-DE-PERFILES- INICIO-->
                    <!-- #############################################################################################[Menú para el Perfil Administrador] -->

                    <li class="treeview">
                        <?php
          if($_SESSION['S_ROL']=='ADMINISTRADOR'){

          ?>
                        <a>
                            <i class="fa fa-pencil-square-o"></i> <span>Registros</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <!--Las pestañas que se cargaran en el menú izquierdo-->
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','usuario/vista_usuario_listar.php')"><i
                                        class="fa fa-address-book-o"></i> Usuarios</a></li>
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','presupuesto/vista_reparacion_listar.php')"><i
                                        class="fa fa-file-text-o"></i> Reparación</a></li>
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','requerimiento/vista_requerimientos_admin.php')"><i
                                        class="fa fa-file-text-o"></i> Requerimiento</a></li>
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','material/vista_material_listar.php')"><i
                                        class="fa fa-file-text-o"></i> Materiales</a></li>
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','herramienta/vista_herramienta_listar.php')"><i
                                        class="fa fa-file-text-o"></i> Herramientas</a></li>
                            <!--li><a href = # onclick="cargar_contenido('contenido_principal','hospederia/vista_hospederia.php')"><i class="fa fa-file-text-o"></i> Hospederia</a></!--li-->


                        </ul>
                    </li>


                    <li class="treeview">
                        <a>
                            <i class="fa fa-usd"></i> <span>Presupuesto</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','presupuesto/vista_presupuesto.php')"><i
                                        class="fa fa-file-text-o"></i>Estado presupuesto</a></li>

                        </ul>
                    </li>


                    <li class="treeview">
                        <a>
                            <i class="fa fa-list-alt"></i> <span>Bitacoras</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','bitacora/vista_bitacora_seguimiento.php')"><i
                                        class="fa fa-hand-o-right"></i>Seguimiento</a></li>

                            <!--li><a href = #><i class="fa fa-file-text-o"></i>Bitacora B</a></!li-->
                        </ul>
                    </li>

                    <li class="treeview">
                        <a>
                            <i class="fa fa-file-text-o"></i> <span>Encuestas</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','encuesta/vista_encuesta.php')"><i
                                        class="fa fa-file-text-o"></i> Encuesta al vecino</a></li>

                        </ul>


                    </li>


                    <li class="treeview">
                        <a>
                            <i class="fa fa-picture-o"></i> <span>Galeria</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','galeria/index_galeria.php')"><i
                                        class="fa fa-file-text-o"></i> Trabajos hechos</a></li>

                        </ul>
                    </li>

                    <?php 
          }
          ?>
                    <?php
          if($_SESSION['S_ROL']=='ADMINISTRADOR'){

          ?>
                    <?php 
          }
          ?>
                    </li>
                    <li>
                        <!-- [][][][][][][][][]##################################-FINAL-DE-PERFIL-##############################[][][][][][][][][]-->
                        <!-- [][][][][][][][][]##################################-FINAL-DE-PERFIL-##############################[][][][][][][][][]-->


                        <!-- #################################################################################################################################-->
                        <!-- ###############################################-DIVICION-DE-PERFILES- INICIO-->
                        <!-- #############################################################################################[Menú para el Perfil Trabajador] -->
                    <li class="treeview">
                        <?php
          if($_SESSION['S_ROL']=='TRABAJADOR'){

          ?>
                        <a>
                            <i class="fa fa-pencil-square-o"></i> <span>Registros</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <!--Las pestañas que se cargaran en el menú izquierdo-->
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','requerimiento/vista_requerimientos_admin.php')"><i
                                        class="fa fa-file-text-o"></i> Requerimiento</a></li>
                            <!--<li><a href = # onclick="cargar_contenido('contenido_principal','requerimiento/vista_requerimientos_listar.php')"><i class="fa fa-file-text-o"></i> Requerimientos</a></li>-->
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','material/vista_material_listar_tr.php')"><i
                                        class="fa fa-file-text-o"></i> Materiales</a></li>
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','herramienta/vista_herramienta_listar_tr.php')"><i
                                        class="fa fa-file-text-o"></i> Herramientas</a></li>
                            <!--<li><a href = # onclick="cargar_contenido('contenido_principal','hospederia/vista_hospederia_listar_t.php')"><i class="fa fa-file-text-o"></i> Hospederias</a></li>-->
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','presupuesto/vista_reparacion_listar.php')"><i
                                        class="fa fa-file-text-o"></i> Reparación</a></li>
                        </ul>
                    </li>


                    <li class="treeview">
                        <a>
                            <i class="fa fa-usd"></i> <span>Presupuesto</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','presupuesto/vista_presupuesto.php')"><i
                                        class="fa fa-file-text-o"></i> Mano de obra</a></li>

                        </ul>
                    </li>

                    <li class="treeview">
                        <a>
                            <i class="fa fa-list-alt"></i> <span>Bitacoras</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','bitacora/vista_bitacora_seguimiento.php')"><i
                                        class="fa fa-hand-o-right"></i>Seguimiento</a></li>

                        </ul>
                    </li>

                    <li class="treeview">
                        <a>
                            <i class="fa fa-file-text-o"></i> <span>Encuestas de opinión</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','encuesta/vista_encuesta.php')"><i
                                        class="fa fa-file-text-o"></i> Encuesta al vecino</a></li>

                        </ul>
                    </li>

                    <li class="treeview">
                        <a>
                            <i class="fa fa-picture-o"></i> <span>Galeria</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','galeria/index_galeria.php')"><i
                                        class="fa fa-file-text-o"></i> Reparaciones</a></li>

                        </ul>
                    </li>

                    <?php 
          }
          ?>
                    <?php
          if($_SESSION['S_ROL']=='TRABAJADOR'){

          ?>
                    <?php 
          }
          ?>
                    </li>
                    <li>
                        <!-- [][][][][][][][][]##################################-FINAL-DE-PERFIL-##############################[][][][][][][][][]-->
                        <!-- [][][][][][][][][]##################################-FINAL-DE-PERFIL-##############################[][][][][][][][][]-->

                        <!-- #################################################################################################################################-->
                        <!-- ###############################################-DIVICION-DE-PERFILES- INICIO-->
                        <!-- #############################################################################################[Menú para el Perfil Junta Vecino] -->
                    <li class="treeview">
                        <?php
          if($_SESSION['S_ROL']=='JUNTA-VECINAL'){

          ?>
                        <a>
                            <i class="fa fa-pencil-square-o"></i> <span>Bitacoras</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <!--Las pestañas que se cargaran en el menú izquierdo-->
                            
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','presupuesto/vista_presupuestob.php')"><i
                                        class="fa fa-file-text-o"></i>Presupuesto</a></li>
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','bitacora/vista_bitacora_seguimiento.php')"><i
                                        class="fa fa-hand-o-right"></i>Actividad</a></li>
                            <li><a href=#
                                    onclick="cargar_contenido('contenido_principal','encuesta/vista_encuesta_trabajador.php')"><i
                                        class="fa fa-file-text-o"></i>Encuesta de vecinos</a></li>
                            <li><a href=# onclick="location.href='../subir_imagenes/index2.php'"><i
                                        class="fa fa-picture-o"></i>Galeria</a></li>
                        </ul>
                        
                    </li>




                    <!--Este perfil sera solo de visual no tiene permisos de escritura solo lectura de documento-->



                    <?php 
          }
          ?>
                    <?php
          if($_SESSION['S_ROL']=='JUNTA-VECINAL'){

          ?>
                    <?php 
          }
          ?>
                    </li>
                    <li>

                        <!-- [][][][][][][][][]##################################-FINAL-DE-PERFIL-##############################[][][][][][][][][]-->
                        <!-- [][][][][][][][][]##################################-FINAL-DE-PERFIL-##############################[][][][][][][][][]-->




                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!--CONTENIDO PRINCIPAL DEL MENÚ -->
            <section class="content">
                <input type="text" id="txtidprincipal" value="<?php echo $_SESSION['S_IDUSUARIO'] ?>" hidden>
                <input type="text" id="usuarioprincipal" value="<?php echo $_SESSION['S_USER'] ?>" hidden>

                <div class="row" id="contenido_principal">

                    <!--Contenedor -->
                    <div class="col-md-12">

                        <div class="box box-warning box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">BIENVENIDO AL SISTEMA TRATO HECHO VECINO</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="text-align:center;">
                                <?php  echo $_SESSION['S_ROL']; ?>



                            </div>



                        </div>

                        <!-- [][][][][][][][][]##################################-Añadir Para admin -##############################[][][][][][][][][]-->

                        <?php
if($_SESSION['S_ROL']=='ADMINISTRADOR'){
?>

                        <!-- Contenido del panel admin -->
                        <section class="content">

                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">

                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                        <div class="inner">

                                            <h3>
                                                <!-- Consulta para seleccionar todos los usuarios en la bd y mostrar el total -->
                                                <?php
              require '../modelo/modelo_count.php';
              $con=Conectar();
              $count = current($con->query("SELECT count(*) FROM `usuario`")->fetch());
              echo"Total ".$count;
  ?>

                                            </h3>
                                            <p>Usuarios</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>

                                        <a href="#"
                                            onclick="cargar_contenido('contenido_principal','usuario/vista_usuario_listar.php')"
                                            class="small-box-footer">Ver usuarios <i
                                                class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>


                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">

                                    <!-- small box -->
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <h3>Ir Stock</h3>

                                            <p>Herramientas</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-settings"></i>
                                        </div>
                                        <a href="#"
                                            onclick="cargar_contenido('contenido_principal','herramienta/vista_herramienta_listar.php')"
                                            class="small-box-footer">Ver herramientas <i
                                                class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <h3>Ir Stock</h3>

                                            <p>Materiales </p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion-ios-paper-outline  "></i>
                                        </div>
                                        <a href="#"
                                            onclick="cargar_contenido('contenido_principal','material/vista_material_listar.php')"
                                            class="small-box-footer">Ver materiales <i
                                                class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">

                                    <!-- small box -->
                                    <div class="small-box bg-red">
                                        <div class="inner">
                                            <h3>

                                                Revisión

                                            </h3>

                                            <p>Presupuestos</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-clipboard"></i>
                                        </div>
                                        <a href="#"
                                            onclick="cargar_contenido('contenido_principal','presupuesto/vista_reparacion_listar2.php')"
                                            class="small-box-footer">Ver reportes <i
                                                class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>


                                <?php 
          }
          
          ?>
                                <?php
          if($_SESSION['S_ROL']=='ADMINISTRADOR'){

          ?>
                                <?php 
          }
          ?>
                            </div>
                            <!-- [][][][][][][][][]##################################-FINAL-DE-PERFIL-ADMIN-##############################[][][][][][][][][]-->
                            <!-- [][][][][][][][][]##################################-FINAL-DE-PERFIL-ADMIN-##############################[][][][][][][][][]-->



                            <!-- [][][][][][][][][]##################################-Añadir-PARA-TRABAJADOR-##############################[][][][][][][][][]-->


                            <?php
if($_SESSION['S_ROL']=='TRABAJADOR'){
?>

                            <!-- Contenido del panel admin -->
                            <section class="content">

                                <!-- Small boxes (Stat box) -->
                                <div class="row">
                                    <div class="col-lg-3 col-xs-6">

                                        <!-- small box -->
                                        <div class="small-box bg-yellow">
                                            <div class="inner">

                                                <h3>
                                                    <!-- Consulta para seleccionar todos los usuarios en la bd y mostrar el total -->
                                                    <?php
              require '../modelo/modelo_count.php';
              $con=Conectar();
              $count = current($con->query("SELECT count(*) FROM `encuesta`")->fetch());
              echo"Total ".$count;
  ?>

                                                </h3>
                                                <p>Encuestas</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-android-list"></i>
                                            </div>

                                            <a href="#"
                                                onclick="cargar_contenido('contenido_principal','encuesta/vista_encuesta.php')"
                                                class="small-box-footer">Ver encuestas <i
                                                    class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>


                                    <!-- ./col -->
                                    <div class="col-lg-3 col-xs-6">

                                        <!-- small box -->
                                        <div class="small-box bg-aqua">
                                            <div class="inner">
                                                <h3>Ir Stock</h3>

                                                <p>Herramientas</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-settings"></i>
                                            </div>
                                            <a href="#"
                                                onclick="cargar_contenido('contenido_principal','herramienta/vista_herramienta_listar.php')"
                                                class="small-box-footer">Ver herramientas <i
                                                    class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-green">
                                            <div class="inner">
                                                <h3>Ir Stock</h3>

                                                <p>Materiales </p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion-ios-paper-outline  "></i>
                                            </div>
                                            <a href="#"
                                                onclick="cargar_contenido('contenido_principal','material/vista_material_listar.php')"
                                                class="small-box-footer">Ver materiales <i
                                                    class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                   
                                     <!-- ./col -->
                                    <div class="col-lg-3 col-xs-6">

                                        <!-- small box -->
                                        <div class="small-box bg-red">
                                            <div class="inner">
                                                <h3>

                                                    Revisión

                                                </h3>

                                                <p>Presupuestos</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-clipboard"></i>
                                            </div>
                                            <a href="#"
                                                onclick="cargar_contenido('contenido_principal','presupuesto/vista_reparacion_listar2.php')"
                                                class="small-box-footer">Ver reportes <i
                                                    class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    


                                    <?php 
          }
          
          ?>
                                    <?php
          if($_SESSION['S_ROL']=='TRABAJADOR'){

          ?>
                                    <?php 
          }
          ?>
                                </div>

                                <!-- [][][][][][][][][]##################################-FINAL-DE-PERFIL-TRABAJADOR-##############################[][][][][][][][][]-->
                                <!-- [][][][][][][][][]##################################-FINAL-DE-PERFIL-TRABAJADOR-##############################[][][][][][][][][]-->


                                    <!-- /.box -->

                    </div>
                </div>
        </div>



        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1
            </div>
            <strong>Experiencia Desarrollo Tecnológico &copy; </strong> <strong> <a
                    href="https://www.ipsantotomas.cl/areas-y-carreras/area-de-informatica/">IP SANTO TOMÁS
                </a></strong>-<strong><a href="#"> #HOSPEDERIA C. GOUDIE</a></strong> -<strong><a
                    href="https://www.hogardecristo.cl"> #HOGAR DE CRISTO </a></strong><strong><a
                    href="https://www.tratohechovecino.cl">"THV COQUIMBO"</a></strong>
            - A.Informatica IPST. <strong> DARK FLAMES 2021</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark" style="display: none;">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i
                                        class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- Cambio de  contraseña para el usuario -->
    <div class="modal fade" id="modal_editar_contra" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="text-align:center;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Modifique su Contraseña</b></h4>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">

                        <input type="text" id="txtcontra_bd" hidden>
                        <label for="">Contraseña Actual</label>
                        <input type="text" class="form-control" id="txtcontraactual_editar"
                            placeholder="Contraseña Actual"> <br>

                    </div>

                    <div class="col-lg-12">
                        <label for="">Nueva Contraseña</label>
                        <input type="password" class="form-control" id="txtcontranu_editar"
                            placeholder="Nueva Contraseña"><br>
                    </div>

                    <div class="col-lg-12">
                        <label for="">Repetir Contraseña</label>
                        <input type="password" class="form-control" id="txtcontrare_editar"
                            placeholder="Repetir Contraseña"><br>
                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" onclick="Editar_Contra()"><i
                            class="fa fa-check"><b>&nbsp;Modificar</b></i></button>

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="../Plantilla/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../Plantilla/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    var idioma_espanol = {
        select: {
            rows: "%d fila seleccionada"
        },
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ning&uacute;n dato disponible en esta tabla",
        "sInfo": "Registros del (_START_ al _END_) total de _TOTAL_ registros",
        "sInfoEmpty": "Registros del (0 al 0) total de 0 registros",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "<b>No se encontraron datos</b>",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }

    function cargar_contenido(contenedor, contenido) {
        $("#" + contenedor).load(contenido);
    }
    $.widget.bridge('uibutton', $.ui.button);

    //Validación para los campos
    function soloNumeros(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla == 8) {
            return true;
        }
        // Patron de entrada, en este caso solo acepta numeros
        patron = /[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }

    function soloLetras(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toLowerCase();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
        especiales = "8-37-39-46";
        tecla_especial = false
        for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }
        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
        }
    }
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../Plantilla/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="../Plantilla/bower_components/raphael/raphael.min.js"></script>
    <!-- Sparkline -->
    <script src="../Plantilla/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../Plantilla/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../Plantilla/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../Plantilla/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../Plantilla/bower_components/moment/min/moment.min.js"></script>
    <script src="../Plantilla/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../Plantilla/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../Plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../Plantilla/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../Plantilla/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../Plantilla/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->



    <!-- AdminLTE for demo purposes -->
    <script src="../Plantilla/dist/js/demo.js"></script>
    <script src="../Plantilla/plugins/DataTables/datatables.min.js"></script>
    <script src="../Plantilla/plugins/select2/select2.min.js"></script>
    <script src="../Plantilla/plugins/sweetalert2/sweetalert2.js"></script>
    <script src="../js/usuario.js"></script>

    <script>
    TraerDatosUsuario();
    </script>

</body>

</html>