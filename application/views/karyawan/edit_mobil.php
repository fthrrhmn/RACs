<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Mobil</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Edit Mobil</h1>
                            </div>
                            <?php foreach($mobil as $m){ ?>
                            <form class="user" action="<?php echo base_url('c_karyawan/update_mobil');?>" enctype="multipart/form-data" method="post" name="submit">
                                <input type="hidden" class="form-control form-control-user" name='id_m' id='id_m' value="<?php echo $m['id_m']?>" >
                                <div class="form-group">
                                    Nama Mobil :
                                    <input type="text" class="form-control form-control-user" name='nm_m' id='nm_m' value="<?php echo $m['nm_m']?>" >
                                </div>
                                <div class="form-group">
                                    Tarif (/hari) :
                                    <input type="text" class="form-control form-control-user" id="tarif" name ="tarif" value="<?php echo $m['tarif']?>"
                                        >
                                </div>
                                <div class="form-group">
                                    Plat Mobil :
                                    <input type="text" class="form-control form-control-user" id="plat" name ="plat" value="<?php echo $m['plat']?>"
                                        >
                                </div>
                                <div class="form-group">
                                    Merk Mobil :
                                    <input type="text" class="form-control form-control-user" id="merk" name ="merk" value="<?php echo $m['merk']?>"
                                        >
                                </div>
                                <div class="form-group">
                                    Kapasitas Mobil : 
                                    <input type="text" class="form-control form-control-user" id="kapasitas" name ="kapasitas" value="<?php echo $m['kapasitas']?>"
                                        >
                                </div>
                                <div class="form-group">
                                    Stok Mobil : 
                                    <input type="text" class="form-control form-control-user" id="stok" name ="stok" value="<?php echo $m['stok']?>"
                                        >
                                </div>
                                <div class="form-group">
                                    <img class="col-lg-12" src="<?php echo base_url() ?>image/mobil/<?php echo $m['foto_m']?>" >
                                    <input type="text" class="form-control form-control-user" id="foto" name ="foto" value="<?php echo $m['foto_m']?>"
                                        placeholder="No. KTP" hidden>
                                    <div class="col-sm mb-0 mb-sm-3 pl-2">
                                        <label for="foto">Masukkan Foto:</label>
                                        <input type="file" class="form-control-user" id="foto_m" name="foto_m">
                                    </div>
                                <div>
                                <div class="form-group">
                                    Keterangan : 
                                    <input type="text" class="form-control form-control-user" id="tambahan" name ="tambahan" value="<?php echo $m['tambahan']?>">
                                </div>
                                <input class="btn btn-primary btn-user btn-block"" type="submit" name="submit" value="Edit Mobil!">
                            </form>
                            <?php }?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url() ?>c_karyawan/mobil">
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