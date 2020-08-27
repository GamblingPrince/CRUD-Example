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
  <form action="ProductSearch.php" method="POST" class="form">
        <div class="row login">
          <div class="col s12 l4">
            <div class="card login">
              <div class="card-action black white-text">
                <h4>Buscar producto a modificar</h4>
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
            echo $GameName; endif; ?></textarea>
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
        <form action="ProductModify.php" method="POST" class="form">
        <div class="card login black container col s12 l8">
        <?php
        if(!empty($GameName)):
        ?>
        <div class="input-field">
        <textarea name="TituloMod" style="color:lightcyan" class="materialize-textarea"><?php echo $GameName;?></textarea>
        <label for="TituloMod">Título</label>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GameImg)):
        ?>
        <div class="col s12 l5">
        <img src="<?php echo $GameImg?>"  class="responsive-img"></br>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GamePlatform)):
        ?>
        <div class="input-field col s12 l7">
        <textarea name="PlataformaMod" style="color:lightcyan" class="materialize-textarea"><?php echo $GamePlatform;?></textarea>
        <label for="PlataformaMod">Plataforma</label>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GameImg)):
        ?>
        <div class="input-field col s12 l7">
        <textarea name="ImagenMod" style="color:lightcyan" class="materialize-textarea"><?php echo $GameImg;?></textarea>
        <label for="ImagenMod">Link de Imagen</label>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GameDesc)):
        ?>
        <div class="input-field col s12 l7">
        <textarea name="DescMod" style="color:lightcyan" class="materialize-textarea"><?php echo $GameDesc;?></textarea>
        <label for="DescMod">Descripción</label>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GamePrice)):
        ?>
        <div class="input-field col s12 l3">
        <textarea name="PrecioMod" style="color:lightcyan" class="materialize-textarea"><?php echo $GamePrice;?></textarea>
        <label for="PrecioMod">Precio Unitario</label>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GameStock)):
        ?>
        <div class="input-field col s12 l3">
        <textarea name="StockMod" style="color:lightcyan" class="materialize-textarea"><?php echo $GameStock;?></textarea>
        <label for="StockMod">Stock</label>
        </div>
        <?php endif;?>
        <?php
        if(!empty($GameESRB)):
        ?>
        <div class="input-field col s12 l3">
        <textarea name="ESRBMod" style="color:lightcyan" class="materialize-textarea"><?php echo $GameESRB;?></textarea>
        <label for="ESRBMod">Rating ESRB</label>
        </div>
        <?php endif;?>
        <div class="form-field center-align">
        <button type="submit"  onclick="return confirm('¿Está seguro que desea modificar el producto? Recuerde de revisar los cambios bien antes de proceder')" class="btn grey black-text">Modificar</button>
        </div><br>
        </div>
        </div>
        <div hidden=true>
            <textarea disabled id="OgName" class="materialize-textarea"><?php echo $GameName?></textarea>
            <textarea disabled id="OgPlatform" class="materialize-textarea"><?php echo $GamePlatform?></textarea>
        </div>
  </form>
        <?php endif;?>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>