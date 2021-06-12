<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Edit Profile</h1>
                            </div>
                            <?php foreach($customer as $c){ ?>
                            <form class="user" action="<?php echo base_url('c_data/update');?>" enctype="multipart/form-data" method="post" name="submit">
                                <div class="form-group">
                                    Nama :
                                    <input type="text" class="form-control form-control-user" id="nm_c" name ="nm_c" value="<?php echo $c['nm_c']?>" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    Alamat :
                                    <input type="text" class="form-control form-control-user" id="almt_c" name ="almt_c" value="<?php echo $c['almt_c']?>"
                                        placeholder="Alamat Lengkap">
                                </div>
                                <div class="form-group">
                                    Telp :
                                    <input type="text" class="form-control form-control-user" id="telp_c" name ="telp_c" value="<?php echo $c['telp_c']?>"
                                        placeholder="No. Telp">
                                </div>
                                <div class="form-group row">
                                    <input type="text" class="form-control form-control-user" id="jk_c" name ="jk_c" value="<?php echo $c['jk_c']?>"
                                        placeholder="No. Telp" hidden>
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
                                    KTP :
                                    <input type="text" class="form-control form-control-user" id="ktp_c" name ="ktp_c" value="<?php echo $c['ktp_c']?>"
                                        placeholder="No. KTP">
                                </div>
                                <div class="form-group">
                                    <img class="col-lg-12" src="<?php echo base_url() ?>image/<?php echo $c['foto_c']?>" >
                                    <input type="text" class="form-control form-control-user" id="foto" name ="foto" value="<?php echo $c['foto_c']?>"
                                        placeholder="No. KTP" hidden>
                                    <div class="col-sm mb-0 mb-sm-3 pl-2">
                                        <label for="foto">Masukkan Foto:</label>
                                        <input type="file" class="form-control-user" id="foto_c" name="foto_c">
                                    </div>
                                <div>
                                <div class="form-group">
                                    Username :
                                    <input type="text" class="form-control form-control-user" id="user_c" name ="user_c" value="<?php echo $c['user_c']?>"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    Password :
                                    <input type="text" class="form-control form-control-user" id="pass" name ="pass" value="<?php echo $c['pass_c']?>"
                                        placeholder="Username" hidden>
                                    <input type="password" class="form-control form-control-user" name="pass_c"
                                        id="pass_c" placeholder="Password">
                                </div>
                                <input class="btn btn-primary btn-user btn-block"" type="submit" name="submit" value="Edit Profile!">
                            </form>
                            <?php }?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url() ?>c_data/profile">
                                    Batal edit profile? Klik Disini!
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