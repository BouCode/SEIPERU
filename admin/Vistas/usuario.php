<?php 

/*include 'Modelo/funciones.php';
require 'Modelo/global.php';


$sel =new Model();

$niCont = $sel->consultaXvencer();

$totalXvencer = mysqli_num_rows($niCont); */



 ?>

<div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $logo; ?>" alt="">  <?php if($rol=="1"){echo "Bienvenido(a) ".$empresa;}else if ($rol=="2")
                    {echo "Bienvenido(a) Gestor ".$empresa;}else { echo "Bienvenido(a) Auditor ".$empresa; }  ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <!-- <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>-->
                    <li><a href="cerrar.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>
        
               <li role="presentation" class="dropdown hidden">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i> <?php  if($totalXvencer!="0"){?>
                    <span class="badge bg-red"><?php echo $totalXvencer; ?></span><?php  }?>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu" style="box-shadow: 8px 8px 8px 8px #949494;border: 2px solid #405467;">
                    <li id="notificacion">
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span style="font-weight: bolder;">Notificaciones</span>
                          
                        </span>
                        <span class="message">
                        <?php echo $totalXvencer; ?> paciente(s) con cobertura por vencer...
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>