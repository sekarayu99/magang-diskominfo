<div class="row">
  <div class="col-md-12">
  <?= $this->session->flashdata('message');?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-2">
    <a href="<?= base_url('peserta/tambah'); ?>" class="btn btn-success">
      <i class="fa fa-plus"> Tambah</i></a>
  </div>
</div>
<br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Sekolah/Kampus</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Nama Peserta</th>
                  <th>Asal Sekolah/Kampus</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Berakhir</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($peserta as $p) { ?>
                <tr>
                  <td><?= $p->id_peserta ?></td>
                  <td><?= $p->nama_peserta ?></td>
                  <td><?= $p->nama_asal ?></td>
                  <td><?= mediumdate_indo($p->mulai) ?></td>
                  <td><?= mediumdate_indo($p->berakhir) ?></td>
                  <td>
                    <a href="<?= base_url('peserta/edit/' . $p->id_peserta); ?>" title="Edit Peserta" class="btn btn-warning btn-xs">
                     <i class="fa fa-pencil"> Edit</i>
                        </a>
                    <a href="<?= base_url('peserta/hapus/' . $p->id_peserta); ?>" title="Hapus Peserta" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?');">
                     <i class="fa fa-pencil"> Hapus</i>
                        </a>
                  </td>
                </tr>
                <?php 
                } ?>
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
  

