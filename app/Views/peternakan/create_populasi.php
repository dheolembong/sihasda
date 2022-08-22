<div class="container">
  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold text-dark">Tambah Data Populasi </h5>

        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <form form action="<?= base_url('/peternakan/populasi_save'); ?>" method="post" class="row g-3">
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
                <label for="sapi_potong" class="form-label">Sapi Potong</label>
                <input type="text" class="form-control <?= ($validation->hasError('sapi_potong')) ? 'is-invalid' : ''; ?>" id="sapi_potong" name="sapi_potong" value="<?= old('sapi_potong'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('sapi_potong'); ?>
                </div>
              </div>
              <div class="col-8">
                <label for="kuda" class="form-label">Kuda</label>
                <input type="text" class="form-control <?= ($validation->hasError('kuda')) ? 'is-invalid' : ''; ?>" id="kuda" name="kuda" value="<?= old('kuda'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('kuda'); ?>
                </div>
              </div>
              <div class="col-8">
                <label for="kambing" class="form-label">Kambing</label>
                <input type="text" class="form-control <?= ($validation->hasError('kambing')) ? 'is-invalid' : ''; ?>" id="kambing" name="kambing" value="<?= old('kambing'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('kambing'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <label for="babi" class="form-label">Babi</label>
                <input type="text" class="form-control <?= ($validation->hasError('babi')) ? 'is-invalid' : ''; ?>" id="babi" name="babi" value="<?= old('babi'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('babi'); ?>
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