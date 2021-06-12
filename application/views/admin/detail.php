<head>
	<title>Detail Transaksi</title>
</head>
                <!-- Begin Page Content -->

                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                    </div>
                    <?php foreach($sewa as $s){ ?>
                    
                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Sewa</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="" id="collapseCardExample">
                                    <div class="card-body">
                                            <div class="form-group">
                                                Tanggal Sewa :
                                                <input type="text" class="form-control form-control-user" value="<?php echo $s['tgl_s']?>" 
                                                disabled value="">
                                            </div>
                                            <div class="form-group">
                                                Masa Sewa :
                                                <input type="text" class="form-control form-control-user" id="almt_c" name ="almt_c" value="<?php echo $s['awal'];
                                                echo " - "; echo $s['akhir'];?>"
                                                    placeholder="Alamat Lengkap" disabled value="">
                                            </div>
                                            <div class="form-group">
                                                Total Bayar :
                                                <input type="text" class="form-control form-control-user" id="telp_c" name ="telp_c" value="<?php echo $s['total']?>"
                                                    placeholder="No. Telp" disabled value="">
                                            </div>
                                            <div class="form-group">
                                                Status :
                                                <input type="text" class="form-control form-control-user" id="telp_c" name ="telp_c" value="<?php echo $s['status_s']?>"
                                                    placeholder="No. Telp" disabled value="">
                                            </div>
                                    </div>
                                </div>
                            </div>

                    
                            <!-- Collapsable Card Example -->
                            
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample2">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample2">
                                    <div class="card-body">
                                            <div class="form-group">
                                                Tanggal Bayar:
                                                <input type="text" class="form-control form-control-user" value="<?php echo $s['tgl_b']?>" disabled value="">
                                            </div>
                                            <div class="form-group">
                                                Jenis Pembayaran :
                                                <input type="text" class="form-control form-control-user" id="almt_c" name ="almt_c" value="<?php echo $s['jns_b'];?>"
                                                    placeholder="Alamat Lengkap" disabled value="">
                                            </div>
                                            <div class="form-group">
                                                Bukti Pembayaran :
                                            <img class="col-lg-12" src="<?php echo base_url() ?>image/bayar/<?php echo $s['foto_b']?>" disabled value="">
                                            </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Collapsable Card Example -->
                            
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample3">
                                    <div class="card-body">
                                            <div class="form-group">
                                                Nama:
                                                <input type="text" class="form-control form-control-user" value="<?php echo $s['nm_c']?>" disabled value="">
                                            </div>
                                            <div class="form-group">
                                                Alamat :
                                                <input type="text" class="form-control form-control-user" id="almt_c" name ="almt_c" value="<?php echo $s['almt_c'];?>"
                                                    placeholder="Alamat Lengkap" disabled value="">
                                            </div>
                                            <div class="form-group">
                                                No Telp :
                                                <input type="text" class="form-control form-control-user" id="telp_c" name ="telp_c" value="<?php echo $s['telp_c']?>"
                                                    placeholder="No. Telp" disabled value="">
                                            </div>
                                            <div class="form-group">
                                                KTP :
                                                <input type="text" class="form-control form-control-user" id="telp_c" name ="telp_c" value="<?php echo $s['ktp_c']?>"
                                                    placeholder="No. Telp" disabled value="">
                                            </div>
                                            <div class="form-group">
                                            <img class="col-lg-12" src="<?php echo base_url() ?>image/<?php echo $s['foto_c']?>" disabled value="">
                                            </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Collapsable Card Example -->
                            
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample4" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample4">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample4">
                                    <div class="card-body">
                                            <div class="form-group">
                                                Nama:
                                                <input type="text" class="form-control form-control-user" value="<?php echo $s['nm_m']?>" disabled value="">
                                            </div>
                                            <div class="form-group">
                                                Merk :
                                                <input type="text" class="form-control form-control-user" id="almt_c" name ="almt_c" value="<?php echo $s['merk'];?>"
                                                    placeholder="Alamat Lengkap" disabled value="">
                                            </div>
                                            <div class="form-group">
                                                Plat :
                                                <input type="text" class="form-control form-control-user" id="telp_c" name ="telp_c" value="<?php echo $s['plat']?>"
                                                    placeholder="No. Telp" disabled value="">
                                            </div>
                                            <div class="form-group">
                                                Keterangan:
                                                <input type="text" class="form-control form-control-user" id="telp_c" name ="telp_c" value="<?php echo $s['tambahan']?>"
                                                    placeholder="No. Telp" disabled value="">
                                            </div>
                                            <div class="form-group">
                                            <img class="col-lg-12" src="<?php echo base_url() ?>image/mobil/<?php echo $s['foto_m']?>" disabled value="">
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                    
                    <a href="<?php echo base_url() ?>c_admin/transaksi" >
                        <button class="btn btn-primary btn-user btn-block" type="submit">
                                        Kembali
                        </button>
                    <?php }?>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
