<head>
	<title>Profile</title>
</head>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <?php foreach($karyawan as $k){ ?>
                        <form class="user">
                            <div class="p-5">   
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Profile</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="p-5">   
                                        <img class="col-lg-12 mb-4" src="<?php echo base_url() ?>image/karyawan/<?php echo $k['foto_u']?>" >
                                        <div class="form-group">
                                            Username : <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="<?php echo $k['user_u']?>" disabled value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="form-group">
                                            Nama : <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="<?php echo $k['nm_u']?>" disabled value="">
                                        </div>
                                        <div class="form-group">
                                            Alamat : <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="<?php echo $k['almt_u']?>" disabled value="">
                                        </div>
                                        <div class="form-group">
                                            Telp : <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="<?php echo $k['telp_u']?>" disabled value="">
                                        </div>
                                        <div class="form-group">
                                            Jenis Kelamin : <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="<?php if($k['jk_u']= "P"){echo "Perempuan";}else{echo "Laki-Laki";}?>" disabled value="">
                                        </div>
                                        <div class="form-group">
                                            No.KTP : <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="<?php echo $k['ktp_u']?>" disabled value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="row mb-5 justify-content-center px-5">
                                    <a href="<?php echo base_url() ?>c_admin" >
                                        Kembali
                                    </a>
                                </div>
                            </div>
                        </form>
                        <?php }?>
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

