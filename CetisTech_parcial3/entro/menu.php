<style>
.fondo-navbar{
  box-shadow: 0px 5px 5px #C6C2C2;
    }
  .bg-custom, .dropdown-menu, .dropdown-item {
      background-color: #1765be;
    }
    .dropdown-item:hover{
      background-color: #5D9CE3;
    }
  .navbar-custom .navbar-brand,
  .navbar-custom .navbar-text,
  .dropdown-item, .nav-link{
      color: #cbbde2;
    }
  .navbar-custom .navbar-brand:hover,
  .navbar-custom .navbar-text:hover,
  .dropdown-item:hover, .nav-link:hover{
      color: white;
    }
    .form-control{
      width: 300px; 
    }
    .transparentar{
      color: #1765be;
    }
    .perfil{
      opacity: 0.85;
    }
    .perfil:hover{
      opacity: 1;
    }
    .icono-principal{
      opacity: 0.9;
    }
    .icono-principal:hover{
      opacity: 1;
    }
</style>

<!-- Navbar -->
<div class="fondo-navbar">
<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
  <a class="navbar-brand"><img class="icono-principal" src="img/logotech2.png" alt="" width="30px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorías
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Perifericos</a>
          <a class="dropdown-item" href="#">Componentes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Extras</a>
        </div>
      </li>
      <li>
        <p class="transparentar"> aaa</p>
      </li>
      <li>
      <form class="form-row"> 
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
    </form>
      </li>
    </ul>
    <!-- Carrito -->
  <a  href="#" role="button aria-haspopup="true" aria-expanded="false">
  <img class="perfil" src="img/carrito.png" alt="" width="30px">
  </a>

<p class="transparentar">aaaa</p>
    <!-- Cuenta -->
    <div class="dropdown show">
  <a  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img class="perfil" src="img/perfil.png" alt="" width="30px">
  </a>

  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Perfil</a>
    <a class="dropdown-item" href="#">Historial de compras</a>
    <a class="dropdown-item" href="cerrarSesion.php">Cerrar sesión</a>
  </div>
</div>
  </div>
</nav>
</div>