<div class="container">
  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold text-dark">Tambah Data Kehutanan</h5>

        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <form form action="<?= base_url('/kehutanan/save'); ?>" method="post" class="row g-3">
              <?= csrf_field(); ?>
              <div class="col-md-5">
                <label for="hl" class="form-label">Hutan Lindung</label>
                <input type="text" class="form-control <?= ($validation->hasError('hl')) ? 'is-invalid' : ''; ?>" id="hl" name="hl" value="<?= old('hl'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('hl'); ?>
                </div>
              </div>
              <div class="col-md-5">
                <label for="sa" class="form-label">Suaka Alam</label>
                <input type="text" class="form-control <?= ($validation->hasError('sa')) ? 'is-invalid' : ''; ?>" id="sa" name="sa" value="<?= old('sa'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('sa'); ?>
                </div>
              </div>
              <div class="col-md-5">
                <label for="hp_terbatas" class="form-label">Hutan produksi terbatas</label>
                <input type="text" class="form-control <?= ($validation->hasError('hp_terbatas')) ? 'is-invalid' : ''; ?>" id="hp_terbatas" name="hp_terbatas" value="<?= old('hp_terbatas'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('hp_terbatas'); ?>
                </div>
              </div>
              <div class="col-md-5">
                <label for="hp_tetap" class="form-label">Hutan produksi tetap</label>
                <input type="text" class="form-control <?= ($validation->hasError('hp_tetap')) ? 'is-invalid' : ''; ?>" id="hp_tetap" name="hp_tetap" value="<?= old('hp_tetap'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('hp_tetap'); ?>
                </div>
              </div>
              <div class="col-md-5">
                <label for="hutan_konversi" class="form-label">Hutan produksi dapat dikonversi</label>
                <input type="text" class="form-control <?= ($validation->hasError('hp_konversi')) ? 'is-invalid' : ''; ?>" id="hp_konversi" name="hp_konversi" value="<?= old('hp_konversi'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('hp_konversi'); ?>
                </div>
              </div>
              <div class="col-md-5">
                <label for="hutan_perairan" class="form-label">Jumlah luas hutan dan perairan</label>
                <input type="text" class="form-control <?= ($validation->hasError('hutan_perairan')) ? 'is-invalid' : ''; ?>" id="hutan_perairan" name="hutan_perairan" value="<?= old('hutan_perairan'); ?>">
                <div class=" invalid-feedback">
                  <?= $validation->getError('hutan_perairan'); ?>
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