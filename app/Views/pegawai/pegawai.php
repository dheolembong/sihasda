                <!-- Begin Page Content -->
                <div class="container-fluid">
                  <div class="row">
                    <div class="col">
                      <!-- DataTales Example -->
                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <a href="<?= base_url('/pegawai/create_pegawai'); ?>" class="btn btn-success my-3">Tambah Data Pegawai</a>
                          <h5 class="m-0 font-weight-bold text-primary">Data Pegawai Biro Perekonomian Setda Prov. Sulut</h5>
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
                                  <th>Nama</th>
                                  <th>NIP</th>
                                  <th>Tempat/Tanggal Lahir</th>
                                  <th>Alamat</th>
                                  <th>Jabatan</th>
                                  <th>Pangkat/Golongan</th>
                                  <th>Opsi</th>
                                </tr>


                              </thead>
                              <?php foreach ($pegawai as $p) : ?>
                                <tbody>
                                  <tr>
                                    <td><?= $p['id']; ?></td>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['nip']; ?></td>
                                    <td><?= $p['ttl']; ?></td>
                                    <td><?= $p['alamat']; ?></td>
                                    <td><?= $p['jabatan']; ?></td>
                                    <td><?= $p['pangkat']; ?></td>
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