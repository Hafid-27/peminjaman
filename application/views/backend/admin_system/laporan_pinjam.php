            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header bd">Fasilitas Dipinjam</h1>
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="text-right">
                      <div class="pull-left panel-title lbsd">Laporan Fasilitas Yang Sedang Dipinjam</div>
                      <div class="clearfix"><a href="" onclick="window.print()" class="btn btn-primary btn-sm print">Print</a></div>
                    </div>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                      <thead>
                        <tr>
                          <!--<th>ID Pinjam</th>-->
                          <th>Nama Karyawan</th>
                          <th>Nama fasilitas</th>
                          <th>Jumlah Pinjam</th>
                          <th>Tanggal Pinjam</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data as $d1) { ?>
                          <tr>
                            <!--<td><?php echo $d1->id_pinjam ?></td>-->
                            <td><?php echo $d1->name_peminjam ?></td>
                            <td><?php echo $d1->name_fasilitas ?></td>
                            <td><?php echo $d1->jml ?></td>
                            <td><?php echo $d1->tgl_pinjam ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
            </div>