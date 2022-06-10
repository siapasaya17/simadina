<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login | SiMadina</title>
        <link href="assets/login/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
  

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                    <?php
                            /* handle error */
                            if (isset($_GET['error'])) : ?>
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
                                </div>
                            <?php endif;?>  

                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"> <h3 class="text-center font-weight-light my-4"> <img width=145 height=155 src="assets/logo/logo-tk.png" style="display:block; margin:auto;"/> Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="cek-login2.php">
                                            <div class="form-group"><label class="small mb-1" for="InputUsername">Username</label>
                                                <input class="form-control py-4"  name="username" type="text" placeholder="Enter Username"  required=""/>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4"  name="password" type="password" placeholder="Enter password"  required=""/></div>
                                            <div class="form-group text-center">
                                                <input type="submit" name="login" value="LOGIN" class="btn btn-primary center-block">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SiMadina 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/login/scripts.js"></script>
    </body>
</html>
