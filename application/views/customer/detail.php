<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detail Mobil</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Detail Mobil</h1>
                            </div>
                            <?php foreach($mobil as $m){ ?>
                            <form class="user" action="<?php echo base_url() ?>c_data/pesan?id=<?php echo $m['id_m'] ?>" enctype="multipart/form-data" method="post" name="submit">
                                <img class="col-lg-12" src="<?php echo base_url() ?>image/mobil/<?php echo $m['foto_m']?>" >
                                <div class="form-group">
                                    Nama Mobil :
                                    <input type="text" class="form-control form-control-user" value="<?php echo $m['nm_m']?>" disabled value="">
                                </div>
                                <div class="form-group">
                                    Tarif (/hari) :
                                    <input type="text" class="form-control form-control-user" id="almt_c" name ="almt_c" value="<?php echo $m['tarif']?>"
                                        placeholder="Alamat Lengkap" disabled value="">
                                </div>
                                <div class="form-group">
                                    Plat Mobil :
                                    <input type="text" class="form-control form-control-user" id="telp_c" name ="telp_c" value="<?php echo $m['plat']?>"
                                        placeholder="No. Telp" disabled value="">
                                </div>
                                <div class="form-group">
                                    Merk Mobil :
                                    <input type="text" class="form-control form-control-user" id="telp_c" name ="telp_c" value="<?php echo $m['merk']?>"
                                        placeholder="No. Telp" disabled value="">
                                </div>
                                <div class="form-group">
                                    Kapasitas Mobil : 
                                    <input type="text" class="form-control form-control-user" id="ktp_c" name ="ktp_c" value="<?php echo $m['kapasitas']?>"
                                        placeholder="No. KTP" disabled value="">
                                </div>
                                <div class="form-group">
                                    Stok Mobil : 
                                    <input type="text" class="form-control form-control-user" id="ktp_c" name ="ktp_c" value="<?php echo $m['stok']?>"
                                        placeholder="No. KTP" disabled value="">
                                </div>
                                <div class="form-group">
                                    Keterangan : 
                                    <input type="text" class="form-control form-control-user" id="ktp_c" name ="ktp_c" value="<?php echo $m['tambahan']?>"
                                        placeholder="No. KTP" disabled value="">
                                </div>
                                <input class="btn btn-primary btn-user btn-block"" type="submit" name="submit" value="Pesan">
                            </form>
                            <?php }?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url() ?>">
                                    Kembali
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