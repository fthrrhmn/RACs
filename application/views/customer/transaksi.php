<head>
	<title>Transaksi</title>
</head>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Pesan</th>
                                            <th>Tanggal Sewa</th>
                                            <th>Total Bayar</th>
                                            <th>Nama Mobil</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($sewa as $s){ ?>
                                            <tr>
                                                <td>
                                                    <?php echo $s->tgl_s; ?>
                                                </td>
                                                <td>
                                                    <?php echo $s->awal;
                                                    echo " s/d ";
                                                    echo $s->akhir; ?>
                                                </td>
                                                <td>
                                                    <?php echo $s->total; ?>
                                                </td>
                                                <td>
                                                    <?php echo $s->nm_m; ?>
                                                </td>
                                                <td>
                                                   <?php
                                                   if($s->status_s == "Menunggu Pembayaran"){
                                                       echo "<a href='http://localhost/car/c_data/bayar?id=".$s->id_s."'
                                                        class='btn btn-info xs'>Bayar
                                                        </a>" ;
                                                        echo "  <a href='http://localhost/car/c_data/batal?id=".$s->id_s."'
                                                        class='btn btn-info xs'>Batal
                                                        </a>" ;
                                                   }else{
                                                        echo $s->status_s;
                                                   }?>
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

