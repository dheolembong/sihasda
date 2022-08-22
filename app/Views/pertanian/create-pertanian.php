<div class="container">
  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold text-dark">Tambah Data Pertanian</h5>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <form form action="<?= base_url('/pertanian/save'); ?>" method="post" class="row g-3">
              <?= csrf_field(); ?>
              <div class="col-md-4">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control <?= ($validation->hasError('tahun')) ? 'is-invalid' : ''; ?>" id="tahun" name="tahun" value="<?= old('tahun'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('tahun'); ?>
                </div>
              </div>
              <div class="col-6">
                <label for="luas_panen" class="form-label">Luas Panen</label>
                <input type="text" class="form-control <?= ($validation->hasError('luas_panen')) ? 'is-invalid' : ''; ?>" id="luas_panen" name="luas_panen" value="<?= old('luas_panen'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('luas_panen'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <label for="produktivitas" class="form-label">Produktivitas</label>
                <input type="text" class="form-control <?= ($validation->hasError('produktivitas')) ? 'is-invalid' : ''; ?>" id="produktivitas" name="produktivitas" value="<?= old('produktivitas'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('produktivitas'); ?>
                </div>
              </div>
              <div class="col-6">
                <label for="produksi" class="form-label">Produksi</label>
                <input type="text" class="form-control <?= ($validation->hasError('produksi')) ? 'is-invalid' : ''; ?>" id="produksi" name="produksi" value="<?= old('produksi'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('produksi'); ?>
                </div>
              </div>
              <div class="col-6">
                <label for="padi" class="form-label">Padi</label>
                <input type="text" class="form-control <?= ($validation->hasError('padi')) ? 'is-invalid' : ''; ?>" id="padi" name="padi" value="<?= old('padi'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('padi'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <label for="beras" class="form-label">Beras</label>
                <input type="text" class="form-control <?= ($validation->hasError('beras')) ? 'is-invalid' : ''; ?>" id="beras" name="beras" value="<?= old('beras'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('beras'); ?>
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