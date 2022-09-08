<section class="content">
  <!-- right column -->
  <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?= $title;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('peserta/update');?>" method="post">
              <div class="box-body">
              <div class="form-group">
                  <label for="id_peserta" class="col-sm-2 control-label">Id Peserta</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id_peserta" name="id_peserta" value="<?= $peserta['id_peserta'];?>" placeholder="Id Peserta" readonly> 
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_peserta" class="col-sm-2 control-label">Nama Peserta</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" value="<?= $peserta['nama_peserta'];?>" placeholder="Nama Peserta" required>
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label for="id_asal" class="col-sm-2 control-label">Asal Sekolah/Kampus</label>

                  <div class="col-sm-10">
                  <select class="form-control select2" id="id_asal" name="id_asal" required> 
                  <?php
                      foreach($asal as $a) {
                        if($peserta['id_asal'] == $a->id_asal) {?>
                          <option value="<?= $a->id_asal?>" selected><?= $a->nama_asal ?></option>
                      <?php } else {?>
                        <option value="<?= $a->id_asal ?>" ><?= $a->nama_asal ?></option>
                      <?php }
                      }
                   ?>
                  </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="mulai" class="col-sm-2 control-label">Tanggal Mulai</label>

                  <div class="col-sm-10">
                  <input type="date" class="form-control" value="<?= $peserta['mulai'];?>" id="mulai" name="mulai" placeholder="Tanggal Mulai" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="berakhir" class="col-sm-2 control-label">Tanggal Berakhir</label>

                  <div class="col-sm-10">
                  <input type="date" class="form-control" id="berakhir" name="berakhir" value="<?= $peserta['berakhir'];?>"placeholder="Tanggal Berakhir" required>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('peserta');?>"  class="btn btn-default"> Batal</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </section>
    <!-- /.content -->