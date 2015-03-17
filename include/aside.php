  <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">

              <?php
              if ($_SESSION['tipo_usu'] == 'a' ) {

                  ?>
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="">
                      <a class="" href="dashboard.php">
                          <i class="icon-home"></i>
                          <span>Inicio</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="" href="cotizaciones.php">
                          <i class="icon-shopping-cart"></i>
                          <span>Cotizaciones</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-user"></i>
                          <span>Usuarios</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="usuarios2.php">Usuarios</a></li>
                          <li><a class="" href="c_usuario2.php">Crear usuarios</a></li>
                      </ul>
                  </li>
                  <li class="">
                      <a class="" href="perfil.php">
                          <i class=" icon-smile"></i>
                          <span>Perfil</span>
                      </a>
                  </li>


              <?php
              } elseif ($_SESSION['tipo_usu'] == 'u') {

                  ?>
                  <ul class="sidebar-menu">
                  <li class="">
                      <a class="" href="dashboard.php">
                          <i class="icon-home"></i>
                          <span>Inicio</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="" href="cotizaciones.php">
                          <i class="icon-shopping-cart"></i>
                          <span>Cotizaciones</span>
                      </a>
                  </li>
             <?php
              }

              ?>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->