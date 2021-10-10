<?php
include('inc/header.php');
?>
<body>

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                    <a href="/" class="btn btn-primary btn-user btn-block">Volver</a>                  </div>
                </br>
                <!--  -->
                <div class="card shadow mb-4">
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><thead><tr><th colspan="6"><h4><b>Cliente:</b>
          <?php
           include('inc/functions.php');
           if (isset($_POST['search']) && $_POST['cond'] == 0){ // por n° de seguimiento
           $tid = $_POST['search'];
           $results = get_data($tid);

          echo $results['nombre'] ."(".$results['rut'].")</h4></th></tr></thead><thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Nombre</th>
                                  <th>Modelo(Marca)</th>
                                  <th>Detalle</th>
                                  <th>Estado</th>
                                  <th>&Uacute;ltima actualizaci&oacute;n</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                               
                                     <td>".$results['id'].'</td>';
                                    echo " ";
                                    echo '<td>'.$results['nombre'].'</td>';
                                    echo " ";
                                    echo '<td>'.$results['rut'].'</td>';
                                    echo " ";
                                    echo '<td>'.$results['trabajo'].'</td>';
                                    echo " ";
                                    echo '<td>'.$results['detalles'].'</td>';
                                    echo " ";
                                    echo '<td>'.$results['estado'].'</td>';
                                }
                                else if (isset($_POST['search']) && $_POST['cond'] == 1){ // por rut
                                    $rut = $_POST['search'];
                                    $results = get_rut($rut);
                                    echo $results['nombre'] ."(".$results['rut'].")</h4></th></tr></thead><thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Nombre</th>
                                  <th>Modelo(Marca)</th>
                                  <th>Detalle</th>
                                  <th>Estado</th>
                                  <th>&Uacute;ltima actualizaci&oacute;n</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                               
                                    <td>".$results['id'].'</td>';
                                    echo " ";
                                    echo '<td>'.$results['nombre'].'</td>';
                                    echo " ";
                                    echo '<td>'.$results['rut'].'</td>';
                                    echo " ";
                                    echo '<td>'.$results['trabajo'].'</td>';
                                    echo " ";
                                    echo '<td>'.$results['detalles'].'</td>';
                                    echo " ";
                                    echo '<td>'.$results['estado'].'</td>';
                                }
                                ?>
                              </tr>            
                          </tbody>
      </table>
      </div>
  </div>
</div>                  <!--  -->
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

<?php include('inc/footer.php');?>

</body>

</html>


