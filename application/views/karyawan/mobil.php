<head>
    <title>Mobil</title>
</head>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <div class ="row">
                                <div class="col-sm-12 col-md-10 mt-3">
                                    <h5 class="m-0 font-weight-bold text-primary">Mobil</h5>
                                </div>
                                <div class="col-sm-12 col-md-2 pl-5">
                                    <a href="<?php echo base_url() ?>c_karyawan/tambah_mobil"
                                                                class="btn btn-info xs">Tambah Mobil
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>Nama Mobil</th>
                                            <th>Merk</th>
                                            <th>Kapasitas</th>
                                            <th>Tarif</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($mobil as $dt){ ?>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo base_url() ?>welcome/report?id=<?php echo $dt->id_m; ?>">
                                                    <?php echo $dt->nm_m; ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>welcome/report?id=<?php echo $dt->id_m; ?>">
                                                    <?php echo $dt->merk; ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>welcome/report?id=<?php echo $dt->id_m; ?>">
                                                    <?php echo $dt->kapasitas; ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>welcome/report?id=<?php echo $dt->id_m; ?>">
                                                    <?php echo $dt->tarif; ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>c_karyawan/detail_mobil?id=<?php echo $dt->id_m; ?>"
                                                        class="btn btn-info xs">Detail
                                                    </a>
                                                    <a href="<?php echo base_url() ?>c_karyawan/hapus_mobil?id=<?php echo $dt->id_m; ?>"
                                                        class="btn btn-info xs">Hapus
                                                    </a>
                                                    <a href="<?php echo base_url() ?>c_karyawan/edit_mobil?id=<?php echo $dt->id_m; ?>"
                                                        class="btn btn-info xs">Edit
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

