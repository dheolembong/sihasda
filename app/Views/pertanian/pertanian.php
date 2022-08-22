<div class="container">
  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <a href="<?= base_url('/pertanian/create_pertanian'); ?>" class="btn btn-success my-3">Tambah Data Pertanian</a>
          <a href="<?= base_url('/hortikurtura/hortikurtura'); ?>" class="btn btn-success my-3">Lihat Data Hortikurtura</a>
          <h5 class="m-0 font-weight-bold text-dark">Tambah Data Pertanian</h5>
          <?php if (session()->getFlashdata('pesan')) : ?>

            <div class="alert alert-success my-2" role="alert">
              <?= session()->getFlashdata('pesan'); ?>
            </div>

          <?php endif; ?>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <?php if (session()->getFlashdata('pesan')) : ?>
                <tr class="text-center row-2">
                  <th>No.</th>
                  <th>Tahun</th>
                  <th>Luas Panen</th>
                  <th>Produktivitas</th>
                  <th>Produksi</th>
                  <th>Padi</th>
                  <th>Beras</th>
                  <th>Opsi</th>
                </tr>
              <?php endif; ?>

            </thead>
            <?php foreach ($pertanian as $q) : ?>
              <tbody>
                <tr class="text-center row-2">
                  <td><?= $q['id']; ?> </td>
                  <td><?= $q['tahun']; ?> ha</td>
                  <td><?= $q['luas_panen']; ?> ha</td>
                  <td><?= $q['produktivitas']; ?> ha</td>
                  <td><?= $q['produksi']; ?> ha</td>
                  <td><?= $q['padi']; ?> ton</td>
                  <td><?= $q['beras']; ?> ton</td>
                  <td class="col-2">
                    <a href="" class="btn btn-warning">Ubah</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              </tbody>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>