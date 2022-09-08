<html>
    <head>
        <title></title>
        <style>
            .btn-refresh {
                margin-left: -20px;
            }
            .btn-print {
              margin-left: -40px;
            }
            .btn-pdf {
                margin-left: -60px;
            }
        </style>
    </head>
    <body>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <form action="<?= base_url('laporan/filter');?>" method="post">
                  <div class="row">
                    <div class="col-md-4">
                        <h4 class="text-primary"><b>Filter Laporan Peserta Magang : </b></h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                        <input type="text" name="tgl_awal" class="form-control" placeholder="Tanggal Awal" onfocus="(this.type='date')">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="tgl_akhir" class="form-control tgl_akhir" placeholder="Tanggal Akhir" onfocus="(this.type='date')">
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-filter"></i></button>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url('laporan');?>" class="btn btn-warning btn-block btn-refresh"><i class="fa fa-refresh"></i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url('laporan/print');?>" class="btn btn-danger btn-block btn-print"><i class="fa fa-print"></i></a>
                    </div>
                  </div>
              </form>
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
                  foreach ($peserta as $p) {?>
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
  
    </body>
</html>



