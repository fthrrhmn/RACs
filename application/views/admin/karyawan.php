<head>
	<title>List Karyawan</title>
</head>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <div class ="row">
                                <div class="col-sm-12 col-md-10 mt-3">
                                    <h5 class="m-0 font-weight-bold text-primary">Karyawan</h5>
                                </div>
                                <div class="col-sm-12 col-md-2 pl-5">
                                    <a href="<?php echo base_url() ?>c_admin/tambah_karyawan"
                                                                class="btn btn-info xs">Tambah Karyawan
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>Nama Karyawan</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($karyawan as $dt){ ?>
                                            <tr>
                                                <td>
                                                    <?php echo $dt->nm_u; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dt->almt_u; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dt->telp_u; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>c_admin/detail?id=<?php echo $dt->id_u; ?>"
                                                        class="btn btn-info xs">Detail
                                                    </a>
                                                    <a href="<?php echo base_url() ?>c_admin/hapus?id=<?php echo $dt->id_u; ?>"
                                                        class="btn btn-info xs">Hapus
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