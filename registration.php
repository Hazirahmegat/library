<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Mencipta Pengguna Baru</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="Uname"  placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="Nokp"name="Nokp"
                                        placeholder="No Kad Pengenalan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"  name="NoTel" id="NoTel" required
                                        placeholder="No Telefon">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                        name="Pass" id="Pass" required placeholder="Kata Laluan ">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder=" Ulang Kata Laluan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="Wname" id="Wname"
                                        placeholder="Nama Waris ">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="WnoTel" id="WnoTel" required
                                        placeholder="No Telefon Waris">
                                </div>
                                <a href="homepage.php" class="btn btn-primary btn-user btn-block">
                                    Daftar Akaun
                                </a>  
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Lupa Kata Laluan?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="index.php">Sudah mempunyai akaun? Log Masuk!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>