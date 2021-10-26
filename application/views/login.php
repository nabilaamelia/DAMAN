<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>Login</title>
    </head>
    <body class="bg-dark py-5 d-flex align-items-center" >

      <div class="container "><br><br><br>



          <!-- Outer Row -->
          <div class="row justify-content-center  ">

            <div class="col-xl-5 col-lg-12 col-md-9 ">
                <?php if(!empty($this->session->flashdata('failed'))){?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        
                        <?= $this->session->flashdata('failed');?>
                        
                    </div>
                <?php }?>

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 ">Form Login</h1>
                                    </div>

                                    <form method="post" action="<?= base_url('login/login_aksi');?>">
                                      <div class="form-group mb-3 mt-3">
                                          <input type="text" placeholder="Username" name="username" class="form-control " autocomplete="off">
                                          <small><span class="text-danger"><?= form_error('username'); ?></span></small>
                                      </div>
                                      <div class="form-group mb-4 mt-4">
                                          <input type="password" placeholder="Password" name="password" class="form-control" autocomplete="off">
                                          <small><span class="text-danger"><?= form_error('password'); ?></span></small>
                                      </div>
                                      <center><button type="submit" class="btn btn-danger">Login</button></center>
                                  </form>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
-->
</body>
</html>