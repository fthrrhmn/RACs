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
    <link href="<?php echo base_url() ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?php echo base_url() ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container pl-5 pr-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register!</h1>
                            </div>
                            <form class="user" action="<?php echo base_url('c_data/tambah');?>" enctype="multipart/form-data" method="post" name="submit">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name ="nm_c"id="nm_c"
                                        placeholder="Nama Lengkap" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name ="almt_c" id="almt_c"
                                        placeholder="Alamat Lengkap" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="telp_c" id="telp_c"
                                        placeholder="No. Telp" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-0 mb-sm-0 mt-3 pl-4">
                                        Jenis Kelamin: 
                                    </div>
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="radio" class="form-control form-control-user" id="jk_c" 
                                            name="jk_c" value="L">
                                        <div class="text-center">
                                            <label for="jk_c">Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                    <input type="radio" class="form-control form-control-user" id="jk_c" 
                                            name="jk_c" value="P">
                                        <div class="text-center">
                                            <label for="jk_c">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="ktp_c" id="ktp_c"
                                        placeholder="No. KTP" required>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm mb-0 mb-sm-3 pl-2">
                                        <label for="foto">Masukkan Foto:</label>
                                        <input type="file" class="form-control-user" id="foto_c" name="foto_c">
                                    </div>
                                <div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="user_c" id="user_c"
                                        placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass_c" class="form-control form-control-user"
                                        id="pass_c" placeholder="Password" required>
                                </div>
                                <input class="btn btn-primary btn-user btn-block"" type="submit" name="submit" value="Daftar Akun!">
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url() ?>c_login/">
                                    Sudah punya akun? Login!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>js/sb-admin-2.min.js"></script>

</body>

</html>