


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Editar Perfil
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      

        <form method="post" action="guardarEdicionUsuario.php" enctype="multipart/form-data">

        <div class="form-group">
                <label for="">Usuario:</label>
                <input value="<?php echo $registro["usuario"]; ?>" type="text" class="form-control" name="usuario" required>
            </div>

            
            <div class="form-group">
                <label for="">Correo:</label>
                <input value="<?php echo $registro["email"]; ?>" type="text" class="form-control" name="email" required>
            </div>



                        
            <div class="form-group">
                <label for="">Contraseña:</label>
                <input value="<?php echo $registro["password"]; ?>" type="text" class="form-control" name="password" required>
            </div>

            </div>
            <div class="col-auto">
                <label for="">Editar foto de perfil:</label><br>
                <input type="file" name="file1">
            </div>

            <br><br><br>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="   Actualizar   ">
            </div>
            <br>
        </form>




      </div>
    </div>
  </div>
</div>
