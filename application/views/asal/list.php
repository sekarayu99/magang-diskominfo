<div class="row">
  <div class="col-md-12">
  <?= $this->session->flashdata('message');?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-2">
    <a href="<?= base_url('asal/tambah'); ?>" class="btn btn-success">
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
                  <th>Id Sekolah/Kampus </th>
                  <th>Nama Sekolah/Kampus</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($asal as $a) { ?>
                <tr>
                  <td><?= $a->id_asal ?></td>
                  <td><?= $a->nama_asal ?></td>
                  <td>
                    <a href="<?= base_url('asal/edit/' . $a->id_asal); ?>" title="Edit pengarang" class="btn btn-warning btn-xs">
                     <i class="fa fa-pencil"> Edit</i>
                        </a>
                    <a href="<?= base_url('peserta/hapus/' . $a->id_asal); ?>" title="Hapus pengarang" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?');">
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
  

