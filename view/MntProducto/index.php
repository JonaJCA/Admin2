<!DOCTYPE html>
<html lang="es">
  
<!-- Mirrored from themepixels.me/bracketplus/app/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 19:08:12 GMT -->
<head>
   
    <?php require_once("../../mainhead.php"); ?>
    <title>Mantenimiento de Productos</title>

  </head>

  <body>

  <?php require_once("../../mainleftpanel.php"); ?>

  <?php require_once("../../mainheadpanel.php"); ?>

  <?php require_once("../../mainrightpanel.php"); ?>




    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Mantenimiento</a>
          <span class="breadcrumb-item active">Producto</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
      <ion-icon name="book-outline"></ion-icon>
        <div>
          <h4>Producto</h4>
          <p class="mg-b-0">Desde aquí podrá dar mantenimiento a producto.</p>
          <button id="btnnuevo" class="btn btn-outline-primary btn-block mg-b-6">Nuevo Registro</button>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">

        <!-- start you own content here -->
        <div class="table-wrapper">
            <table id="productos_data" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-20p">Nombre</th>
                  <th class="wd-15p"></th>
                  <th class="wd-15p"></th>
                </tr>
              </thead>
              <tbody>
                
               
               
               
              </tbody>
            </table>
          </div>
      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <?php require_once("modalmante.php"); ?>

    <?php require_once("../../mainjs.php"); ?>
     
    <script type="text/javascript" src="mntproducto.js"></script>

   
    
  </body>

<!-- Mirrored from themepixels.me/bracketplus/app/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 19:08:12 GMT -->
</html>
