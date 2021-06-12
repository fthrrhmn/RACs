<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pembayaran</title>

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
                                <h1 class="h4 text-gray-900 mb-4">Pembayaran</h1>
                            </div>
                            <?php foreach($bayar as $m){ ?>
                            <form class="user" action="<?php echo base_url('c_data/pembayaran');?>" enctype="multipart/form-data" method="post" name="submit">
                                <input type="hidden" name="id_s" id="id_s" value="<?php echo $this->input->get('id'); ?>">

                                <input type="hidden" class="form-control form-control-user" id="total" name ="total" value="<?php echo $m['total']?>">
                                
                                <div class="form-group">
                                    Jumlah Bayar :
                                    <input type="text" class="form-control form-control-user" name ="jum"id="jum"
                                        placeholder="Jumlah yang Dibayar" required>
                                </div>
                                <div class="form-group">
                                    Tanggal Bayar
                                    <input type="date" class="form-control form-control-user" name ="tgl_b" id="tgl_b" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-0 mb-sm-0 mt-3 pl-4"> 
                                        Jenis Pembayaran
                                    </div>
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="radio" class="form-control form-control-user" id="jns_b" 
                                            name="jns_b" value="Debit">
                                        <div class="text-center">
                                            <label for="jns_b">Debit</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                    <input type="radio" class="form-control form-control-user" id="jns_b" 
                                            name="jns_b" value="Cash">
                                        <div class="text-center">
                                            <label for="jns_b">Cash</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm mb-0 mb-sm-3 pl-2">
                                        <label for="foto">Upload Bukti Bayar:</label>
                                        <input type="file" class="form-control-user" id="foto_b" name="foto_b" required>
                                    </div>
                                <div>
                                <input class="btn btn-primary btn-user btn-block"" type="submit" name="submit" value="Submit">
                            </form>
                            <?php }?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url() ?>c_data/transaksi">
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