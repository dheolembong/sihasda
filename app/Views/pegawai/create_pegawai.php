<div class="container">
  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold text-dark">Tambah Data Pegawai </h5>

        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <form form action="<?= base_url('/pegawai/save'); ?>" method="post" class="row g-3">
              <?= csrf_field(); ?>
              <div class="col-md-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('nama'); ?>
                </div>
              </div>
              <div class="col-8">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : ''; ?>" id="nip" name="nip" value="<?= old('nip'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('nip'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <label for="ttl" class="form-label">Tempat/Tanggal Lahir</label>
                <input type="text" class="form-control <?= ($validation->hasError('ttl')) ? 'is-invalid' : ''; ?>" id="ttl" name="ttl" value="<?= old('ttl'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('ttl'); ?>
                </div>
              </div>
              <div class="col-8">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('alamat'); ?>
                </div>
              </div>
              <div class="col-8">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : ''; ?>" id="jabatan" name="jabatan" value="<?= old('jabatan'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('jabatan'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <label for="pangkat" class="form-label">Pangkat/Golongan</label>
                <input type="text" class="form-control <?= ($validation->hasError('pangkat')) ? 'is-invalid' : ''; ?>" id="pangkat" name="pangkat" value="<?= old('pangkat'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('pangkat'); ?>
                </div>
              </div>
              <div class="col-12 mt-2">
                <button type="submit" class="btn btn-success">Tambah</button>
              </div>
            </form>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>