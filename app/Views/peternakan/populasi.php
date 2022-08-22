<div class="container-fluid">
  <div class="row">
    <div class="col">

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <a href="<?= base_url('/peternakan/create_populasi'); ?>" class="btn btn-success my-3">Tambah Data Populasi</a>
          <h5 class="m-0 font-weight-bold text-primary">Data Populasi Biro Perekonomian Setda Prov. Sulut</h5>
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

                <tr class="text-center row-2">
                  <th>No.</th>
                  <th>Tahun</th>
                  <th>Sapi Perah</th>
                  <th>Sapi Potong</th>
                  <th>Kuda</th>
                  <th>Kambing</th>
                  <th>Babi</th>
                  <th>Ayam Kampung</th>
                  <th>Bebek</th>
                  <th>Opsi</th>
                </tr>


              </thead>

              <tbody>
                <?php foreach ($populasi as $a) : ?>
                  <tr>
                    <td><?= $a['id']; ?></td>
                    <td><?= $a['tahun']; ?></td>
                    <td><?= $a['sapi_perah']; ?></td>
                    <td><?= $a['sapi_potong']; ?></td>
                    <td><?= $a['kuda']; ?></td>
                    <td><?= $a['kambing']; ?></td>
                    <td><?= $a['babi']; ?></td>
                    <td><?= $a['ayam_kampung']; ?></td>
                    <td><?= $a['bebek']; ?></td>
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
</div>