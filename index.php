<?php include 'inc/header.php';?>

<body>
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="img/logo.jpg" alt="" class="img-logo-login2">
                  </div>
                  <h4><center>Consulte por el estado de su trabajo</center></h4>
                  <hr>
                  <!--  -->
                  <form action="track.php" method="post">
                    <div class="row">
                        <div class="col-md-8">
                            <strong>N° de seguimiento</strong>
                            <input type="text" name="search" class="form-control form-control-user input-id" placeholder="Ej. 01020304" maxlength="11" autocomplete="off" required>
                        </div>
                        <div class="col-md-4">
                            &nbsp;
                            <button type="submit" name="cond" value="0" class="btn btn-primary btn-user btn-block">Buscar</button>
                        </div>
                    </div>
                  </form>
                  <hr>
                  <!--  -->
                  <form action="track.php" method="post">
                    <div class="row">
                        <div class="col-md-8">
                            <script type="text/javascript">
                                $(document).ready(function($){
                                  $('.input-rut').rut();
                                });
                            </script>
                            <strong>RUT</strong>
                            <input type="text" name="search" class="form-control form-control-user input-rut" placeholder="Ej. 12.345.578-9" maxlength="13" autocomplete="off" required>
                        </div>
                        <div class="col-md-4">
                            &nbsp;
                            <button type="submit" name="cond" value="1" class="btn btn-primary btn-user btn-block">Buscar</button>
                        </div>
                    </div>
                  </form>
                  <hr>
                  <!--  -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<?php include('inc/footer.php'); ?>
</body>

</html>
