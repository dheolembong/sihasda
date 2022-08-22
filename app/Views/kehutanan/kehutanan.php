<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <a href="<?= base_url('kehutanan/create_kehut'); ?>" class="btn btn-success my-3">Tambah Data</a>
          <h5 class="m-0 font-weight-bold text-primary">Data Kehutanan</h5>
          <?php if (session()->getFlashdata('pesan')) : ?>

            <div class="alert alert-success my-2" role="alert">
              <?= session()->getFlashdata('pesan'); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>

                <tr class="text-center row-2 ">
                  <th>No.</th>
                  <th>Hutan Lindung</th>
                  <th>Suaka Alam</th>
                  <th>Hutan produksi terbatas</th>
                  <th>Hutan produksi tetap</th>
                  <th>Hutan Produksi dapat dikonversi</th>
                  <th>Jumlah luas hutan dan perairan</th>
                </tr>

              </thead>

              <?php foreach ($kehutanan as $h) : ?>

                <tbody>
                  <tr class="text-center row-2">
                    <th><?= $h['id']; ?></th>
                    <th><?= $h['hl']; ?> ha</th>
                    <th><?= $h['sa']; ?> ha</th>
                    <th><?= $h['hp_terbatas']; ?> ha</th>
                    <th><?= $h['hp_tetap']; ?> ha</th>
                    <th><?= $h['hp_konversi']; ?> ha</th>
                    <th><?= $h['hutan_perairan']; ?> ha</th>
                  </tr>
                </tbody>

              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>