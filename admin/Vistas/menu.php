<?php 

include '../Modelo/global.php';

 ?>


<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="consolidado.php" class="site_title"><span>Sistema</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo $logo; ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?php echo $empresa; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3 style="color: #2a3f54;text-shadow: 1px 1px #2a3f54;">General</h3>
              
              
                <ul class="nav side-menu">
                  <li ><a><i class="fa fa-building-o"></i> Listados <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" >
                     
                      <li><a href="consolidado.php">Slider y Nosotros</a></li>
                      <li><a href="productos.php">Productos</a></li>
                      <li><a href="servicios.php">Servicios</a></li>
                      <li><a href="ventas.php">Formas de Pago y Menú de Atención</a></li>
                      <li><a href="adminvideos.php">Galería de Videos</a></li>
                      <li><a href="editContacto.php">Contáctenos</a></li>
                    <!--  <li><a href="cartas.php">Cartas y Autorizaciones</a></li>
                      <li><a href="cuentasReporte.php"> Exportar Cuentas</a></li>
                      <li><a target="_blank" href="comparativo.php"> Comparativo Galenhos</a></li>-->
                    </ul>
                  </li>
                </ul>
               
              
              </div>
            </div>
            <!-- /sidebar menu -->  
          </div>
        </div>

        