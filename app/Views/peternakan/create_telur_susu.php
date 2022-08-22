<div class="container">
  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold text-dark">Tambah Data Populasi </h5>

        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <form form action="<?= base_url('/peternakan/telur_susu_save'); ?>" method="post" class="row g-3">
              <?= csrf_field(); ?>
              <div class="col-md-6">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control <?= ($validation->hasError('tahun')) ? 'is-invalid' : ''; ?>" id="tahun" name="tahun" value="<?= old('tahun'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('tahun'); ?>
                </div>
              </div>
              <div class="col-8">
                <label for="sapi_perah" class="form-label">Sapi Perah</label>
                <input type="text" class="form-control <?= ($validation->hasError('sapi_perah')) ? 'is-invalid' : ''; ?>" id="sapi_perah" name="sapi_perah" value="<?= old('sapi_perah'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('sapi_perah'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <label for="ayam_kampung" class="form-label">Ayam Kampung</label>
                <input type="text" class="form-control <?= ($validation->hasError('ayam_kampung')) ? 'is-invalid' : ''; ?>" id="ayam_kampung" name="ayam_kampung" value="<?= old('ayam_kampung'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('ayam_kampung'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <label for="ayam_petelur" class="form-label">Ayam Petelur</label>
                <input type="text" class="form-control <?= ($validation->hasError('ayam_petelur')) ? 'is-invalid' : ''; ?>" id="ayam_petelur" name="ayam_petelur" value="<?= old('ayam_petelur'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('ayam_petelur'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <label for="bebek" class="form-label">Bebek</label>
                <input type="text" class="form-control <?= ($validation->hasError('bebek')) ? 'is-invalid' : ''; ?>" id="bebek" name="bebek" value="<?= old('bebek'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('bebek'); ?>
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