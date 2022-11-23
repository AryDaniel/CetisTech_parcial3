<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="img/logotech.png" alt="" width="75px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    <div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
		    <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filtrar busqueda</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Componentes</a></li>
                      <li><a href="#its_equal">Perifericos</a></li>
                      <li><a href="#greather_than">Pc Armadas ></a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Extras</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-info" type="button"><img src="img/search.png" alt="" width="23px"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
	</div>
</div>

    </ul>
    <div class="dropdown">
      <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
      Hola usuario
      </button>
      <div class="dropdown-menu">
       <a class="dropdown-item" href="#">Perfil</a>
       <a class="dropdown-item" href="#">Historial de compras</a>
       <a class="dropdown-item" href="#">Cerrar sesión</a>
      </div>
    </div>

  </div>
</nav>