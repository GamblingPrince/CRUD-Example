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
  <form action="ProductSearchForDelete.php" method="POST" class="form">
        <div class="row login">
          <div class="col s12 l4">
            <div class="card login">
              <div class="card-action black white-text">
                <h4>Buscar producto a borrar</h4>
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
          <textarea name="Titulo" style="color:lightcyan" class="materialize-textarea"><?php if(!empty($GameName)):
            echo $GameName; endif;?></textarea>
          <label for="textarea1" style="color:lightcyan">Título</label>
        </div>
        <div class="input-field">
          <textarea name="Plataforma" style="color:lightcyan" class="materialize-textarea"><?php if(!empty($GamePlatform)):
            echo $GamePlatform; endif;?></textarea>
          <label for="textarea1" style="color:lightcyan">Plataforma</label>
        </div>
        <div class="form-field center-align">
                  <button type="submit" class="btn grey black-text">Buscar</button>
                </div><br>
        </div>
        </div>
        </div>
        </div>
        </div>
        </form>
        <?php
        if(!empty($grantAccess)):
        ?>
        <form action="ProductDelete.php" method="POST" class="form">
        <div class="card login black container col s12 l8">
        <div hidden=true>
            <textarea id="OgName" class="materialize-textarea"><?php echo $GameName?></textarea>
            <textarea id="OgPlatform" class="materialize-textarea"><?php echo $GamePlatform?></textarea>
        </div>
        <?php
        if(!empty($GameName)):
        ?>
        <div>
        <h6 style="color:lightcyan">Título</h6>
        <blockquote style="color:lightcyan"><?php echo $GameName;?></blockquote>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GameImg)):
        ?>
        <div class="col s12 l4">
        <img src="<?php echo $GameImg?>"  class="responsive-img"></br>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GamePlatform)):
        ?>
        <div class="col s12 l7">
        <h6 style="color:lightcyan">Plataforma</h6>
        <blockquote style="color:lightcyan"><?php echo $GamePlatform;?></blockquote>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GameImg)):
        ?>
        <div class="col s12 l7">
        <h6 style="color:lightcyan">Link de Imagen</h6>   
        <blockquote style="color:lightcyan"><?php echo $GameImg;?></blockquote>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GameDesc)):
        ?>
        <div>
        <h6 style="color:lightcyan">Descripcion</h6>
        <blockquote style="color:lightcyan"><?php echo $GameDesc;?></blockquote>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GamePrice)):
        ?>
        <div class="col s12 l3">
        <h6 style="color:lightcyan">Precio</h6>
        <blockquote style="color:lightcyan"><?php echo $GamePrice;?></blockquote>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GameStock)):
        ?>
        <div class="col s12 l3">
        <h6 style="color:lightcyan">Stock</h6>
        <blockquote style="color:lightcyan"><?php echo $GameStock;?></blockquote>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GameESRB)):
        ?>
        <div class="col s12 l3">
        <h6 style="color:lightcyan">Rating ESRB</h6>
        <blockquote style="color:lightcyan"><?php echo $GameESRB;?></blockquote>
        </div>
        <?php endif;?>
        <div class="form-field center-align">
        <button type="submit"  onclick="return confirm('¿Está seguro que desea eliminar el producto? Recuerde que esta acción no se puede deshacer')" class="btn grey black-text">Eliminar</button>
        </div><br>
        </div>
        </div>
  </form>
        <?php endif;?>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>