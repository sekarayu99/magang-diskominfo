  <!-- Main content -->
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $peserta ?></h3>
              <p>Peserta</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?= base_url('peserta');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $asal ?></h3>
              <p>Sekolah/Kampus</p>
            </div>
            <div class="icon">
              <i class="fa fa-building"></i>
            </div>
            <a href="<?= base_url('asal');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                  <div class="row">
                    <div class="col-md-4">
                        <h4 class="text-primary"><b>Data Peserta Magang : </b></h4>
                    </div>
                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Peserta</th>
                  <th>Nama Peserta</th>
                  <th>Asal</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Berakhir</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  foreach ($magang as $p) {?>
                  <tr>
                  <td><?= $p->id_peserta ?></td>
                  <td><?= $p->nama_peserta ?></td>
                  <td><?= $p->nama_asal ?></td>
                  <td><?= mediumdate_indo($p->mulai) ?></td>
                  <td><?= mediumdate_indo($p->berakhir) ?></td>
                  </tr>
                  <?php }
                ?>
               
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
 