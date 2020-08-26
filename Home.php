<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="css/business-casual.css" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script> 
    document.addEventListener('DOMContentLoaded', function() {
      M.AutoInit();
      });
    </script>
</head>

<body>
    <nav class="black">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Logo_GameStop.svg/1200px-Logo_GameStop.svg.png" width="150" height="auto" class="responsive-img">
        </a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
              <li><a href="Home.php">Subir</a></li>
              <li><a href="Modify.php">Modificar</a></li>
              <li><a href="Delete.php">Borrar</a></li>
            </ul>
          </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="Home.php">Subir</a></li>
            <li><a href="Modify.php">Modificar</a></li>
            <li><a href="Delete.php">Borrar</a></li>
        </ul>
  <form action="ProductInputting.php" method="POST" class="form">
        <div class="row login">
          <div class="col s12 l6 offset-l3">
            <div class="card login">
              <div class="card-action black white-text">
                <h4>Ingresar un nuevo producto </h4>
                <div calss="card-content">
              <div class="card-content">
                  <?php
                  if(!empty($error)):
                  ?>
                  <div>
                  <?php echo $error;?>
                  </div>
                  <?php endif;?>
        <div class="input-field">
          <textarea name="Titulo" style="color:lightcyan" class="materialize-textarea"></textarea>
          <label for="textarea1" style="color:lightcyan">Título</label>
        </div>
        <div class="input-field">
          <textarea name="Plataforma" style="color:lightcyan" class="materialize-textarea"></textarea>
          <label for="textarea1" style="color:lightcyan">Plataforma</label>
        </div>
        <div class="input-field">
          <textarea name="Descripción" style="color:lightcyan" class="materialize-textarea"></textarea>
          <label for="textarea1" style="color:lightcyan">Contenido</label>
        </div>
        <div class="input-field">
          <textarea name="Imagen" style="color:lightcyan" class="materialize-textarea"></textarea>
          <label for="textarea1" style="color:lightcyan">Link de Imagen</label>
        </div>
        <div class="input-field col s12 l4">
          <textarea name="Stock" style="color:lightcyan" class="materialize-textarea"></textarea>
          <label for="textarea1" style="color:lightcyan">Stock</label>
        </div>
        <div class="input-field col s12 l4">
          <textarea name="Precio" style="color:lightcyan" class="materialize-textarea"></textarea>
          <label for="textarea1" style="color:lightcyan">Precio</label>
        </div>
        <div class="input-field col s12 l4">
          <textarea name="ESRB" style="color:lightcyan" class="materialize-textarea"></textarea>
          <label for="textarea1" style="color:lightcyan">Rating ESRB</label>
        </div>
        <div class="form-field center-align">
                  <button type="submit" class="btn grey black-text">Subir Producto</button>
                </div><br>
        </div>
            </div>
          </div>
        </div>
  </form>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>