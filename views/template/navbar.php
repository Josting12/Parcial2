<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
    <i class="bi bi-caret-down-square"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="<?php echo "index.php?c=".seg::codificar("contenido")."&m=".seg::codificar("contenido") ?>">
        <img
          src="https://thumbnails-photos.amazon.com/v1/thumbnail/wUA5wu7bQIi8sadoyNHjZA?ownerId=A1MLNJWL2K3IL3&viewBox=767%2C675&groupShareToken=Xy-yXzgTR0C-jEG3UXnWzQ.JDMya76bCRnbcpuIGUpnV0"
          height="50"
          alt="Shoe logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("contenido")."&m=".seg::codificar("contenido") ?>">Inicio</a>
        </li>
        <?php if(isset($_SESSION["correo"])) {?>
        
        <?php }else{?>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("login") ?>">Login</a>
          </li>
        <?php } ?>
        <?php if(isset($_SESSION["correo"])) {?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("busqueda")."&m=".seg::codificar("busqueda") ?>">Buscar</a>
          </li>
        <?php }else{?>
        
        <?php } ?>
      </ul>
      <!-- Left links -->
    </div>

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Comentario
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("crear")   ?>">Craer comentario</a></li>
                        
                    </ul>
                </li>
               
            </ul>














    
      <?php if(isset($_SESSION["correo"])) {?>
        <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       <?php echo $_SESSION["nombre"]?>
                    </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">Mi Perfil</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Configuracion</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("cerrar_sesion") ?>">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
        <?php }else{?>
      
      <?php } ?>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->