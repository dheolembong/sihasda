                <!-- Begin Page Content -->
                <div class="container-fluid">
                  <div class="row">
                    <div class="col">

                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <a href="<?= base_url('/peternakan/create_produksi_daging'); ?>" class="btn btn-success my-3">Tambah Data Produksi</a>
                          <h5 class="m-0 font-weight-bold text-primary">Data Produksi Daging Biro Perekonomian Setda Prov. Sulut</h5>
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
                                  <th>Sapi</th>
                                  <th>Kambing</th>
                                  <th>Babi</th>
                                  <th>Ayam Kampung</th>
                                  <th>Ayam Petelur</th>
                                  <th>Bebek / Bebek Manila</th>
                                  <th>Opsi</th>
                                </tr>


                              </thead>
                              <?php foreach ($produksidaging as $q) : ?>
                                <tbody>
                                  <tr>
                                    <td><?= $q['id']; ?></td>
                                    <td><?= $q['tahun']; ?></td>
                                    <td><?= $q['sapi']; ?></td>
                                    <td><?= $q['kambing']; ?></td>
                                    <td><?= $q['babi']; ?></td>
                                    <td><?= $q['ayam_kampung']; ?></td>
                                    <td><?= $q['ayam_petelur']; ?></td>
                                    <td><?= $q['bebek']; ?></td>


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