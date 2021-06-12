<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pemesanan</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Pemesanan</h1>
                            </div>
                            <form class="user" action="<?php echo base_url('c_data/sewa');?>" enctype="multipart/form-data" method="post" name="submit">
                                <?php foreach($mobil as $m){ ?>
                                <input type="hidden" name="tgl_s" id="tgl_s" value="<?php echo date("Y-m-d"); ?>">

                                <input type="hidden" name="id_m" id="id_m" value="<?php echo $m['id_m']?>">

                                <input type="hidden" name="tarif" id="tarif" value="<?php echo $m['tarif']?>">

                                <input type="hidden" name="stok" id="stok" value="<?php echo $m['stok']?>">
                                <?php }?>
                                <div class="form-group">
                                    Tanggal Pesan :
                                    <input type="date" class="form-control form-control-user" name ="awal"id="awal" required>
                                </div>
                                <div class="form-group">
                                    Tanggal Pengembalian :
                                    <input type="date" class="form-control form-control-user" name ="akhir"id="akhir" required>
                                </div>
                                <input class="btn btn-primary btn-user btn-block"" type="submit" name="submit" value="Pesan">
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url() ?>">
                                    Batal 
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