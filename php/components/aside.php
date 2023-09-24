<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard Template · Bootstrap .2</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

       .nav {
    --bs-nav-link-padding-x: 1rem;
    --bs-nav-link-padding-y: 0.4rem !important;
    }

    .headings{
        font-weight: 750 !important;
        color:gray;
        font-size: .95rem !important;
    }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="../styles/aside.css">
  </head>
  <body>

<div class="container-fluid">
  <div class="row" >
    <nav id="" class="col-md-3 col-lg-2 d-md-block bg-light  collapse navbar-collapse sidebar" id="sidebarMenu">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <h6 class="px-3 sidebar-heading mt-2 headings mb-2 ">Equipo Tecnologico</h6>
          <li class="nav-item">
            <a class="nav-link" id="t-dash" href="./todos_tech.php">
            <img src="../app_icos/all.svg" style="vertical-align: baseline" width="15" height="15">
              Todos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="c-dash" href="../php/computadoras.php">
                <img src="../app_icos/pc.svg" style="vertical-align: baseline" width="15" height="15">
              Computadoras
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="m-dash" href="./monitores.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              <img src="../app_icos/screen.svg" style="vertical-align: baseline" width="15" height="15">
              Monitores
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="p-dash" href="./perifericos.php">
              <span data-feather="users" class="align-text-bottom"></span>
              <img src="../app_icos/keyboard.svg" style="vertical-align: baseline" width="15" height="15">
              Perifericos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pro-dash" href="./proyectores.php">
              <span data-feather="users" class="align-text-bottom"></span>
              <img src="../app_icos/projector.svg" style="vertical-align: baseline" width="15" height="15">
              Proyectores
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="s-dash" href="sonido.php">
              <span data-feather="users" class="align-text-bottom"></span>
              <img src="../app_icos/speaker.svg" style="vertical-align: baseline" width="15" height="15">
              Dispositivos de Sonido
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="i-dash" href="impresoras.php">
              <span data-feather="users" class="align-text-bottom"></span>
              <img src="../app_icos/printer.svg" style="vertical-align: baseline" width="15" height="15">
              Impresoras
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="b-dash" href="baterias.php">
              <span data-feather="users" class="align-text-bottom"></span>
              <img src="../app_icos/battery.svg" style="vertical-align: baseline" width="15" height="15">
              Baterias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="o-dash" href="otros_tech.php">
              <span data-feather="users" class="align-text-bottom"></span>
              <img src="../app_icos/others.svg" style="vertical-align: baseline" width="15" height="15">
              Otros
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between headings align-items-center px-3 mt-2 mb-2">
          <span>Mobiliario</span></h6>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
            
          </a>
        
        <ul class="nav flex-column mb-0">
          <li class="nav-item">
            <a class="nav-link" id='mob_t_dash' href="todos_mob.php">
                <img src="../app_icos/all.svg" style="vertical-align: baseline" width="15" height="15">
             Todos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="mob_p-dash" href="pupitres.php">
                <img src="../app_icos/pupitre.svg" style="vertical-align: baseline" width="15" height="15">
              Pupitres
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id='mob_s-dash' href="sillas.php">
                <img src="../app_icos/chair.svg" style="vertical-align: baseline" width="15" height="15">
              Sillas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="mob_m-dash" href="mesas.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              <img src="../app_icos/table.svg" style="vertical-align: baseline" width="15" height="15">
               Mesas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="mob_e-dash" href="escritorios.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              <img src="../app_icos/desk.svg" style="vertical-align: baseline" width="15" height="15">
               Escritorios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="mob_a-dash" href="archivos.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              <img src="../app_icos/file.svg" style="vertical-align: baseline" width="15" height="15">
               Archivos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="mob_otros-dash" href="otros_mob.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              <img src="../app_icos/others.svg" style="vertical-align: baseline" width="15" height="15">
               Otros
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

      
    </body>
</html>
