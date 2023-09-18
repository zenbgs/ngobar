<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6 style="float: left !important;">Tabel Berita</h6>
        <a href="https://perpustakaan.asia.ac.id/index.php/admin/berita/tambah_berita" class="btn btn-icon btn-sm bg-gradient-success pull-right" style="float: right !important;" type="button">
          <span class="btn-inner--icon"><i class="fas fa-plus" aria-hidden="true"></i></span>
          <span class="btn-inner--text">Tambah Berita</span>
        </a>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
            <div class="dataTable-top">
              <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                    <option value="5">5</option>
                    <option value="10" selected="">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                  </select> entries per page</label></div>
              <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
            </div>
            <div class="dataTable-container">
              <table class="table align-items-center mb-0 dataTable-table" id="datatable-basic">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 28.9632%;"><a href="#" class="dataTable-sorter">
                        Author</a></th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 28.4696%;"><a href="#" class="dataTable-sorter">
                        Judul</a></th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 10.3675%;"><a href="#" class="dataTable-sorter">
                        Status</a></th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 16.621%;"><a href="#" class="dataTable-sorter">
                        Tanggal</a></th>
                    <th class="text-secondary opacity-7" data-sortable="" style="width: 15.5513%;"><a href="#" class="dataTable-sorter"></a></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="https://perpustakaan.asia.ac.id/assetsDashboard/img/user/IMG-20210923-WA0010.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Retno Cindy Rofiqoh S.IP</h6>
                          <p class="text-xs text-secondary mb-0">
                            Pustakawan</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs text-secondary mb-0">Dokumentasi Digital</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Publish</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">2021-09-08 03:56:42</span>
                    </td>
                    <td class="align-middle">
                      <a href="https://perpustakaan.asia.ac.id/index.php/berita/read/dokumentasi-digital" class="text-gradient text-success font-weight-bold text-xs" data-original-title="Lihat berita">
                        View
                      </a>
                      &nbsp;
                      <a href="https://perpustakaan.asia.ac.id/index.php/admin/berita/edit/23" class="text-gradient text-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit berita">
                        Edit
                      </a>
                      &nbsp;
                      <a href="javascript:;" class="text-gradient text-danger font-weight-bold text-xs" title="Hapus Berita" data-bs-toggle="modal" data-bs-target="#hapus23">
                        Hapus
                      </a>
                      <div class="modal fade" id="hapus23" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h6 class="modal-title" id="modal-title-notification">
                                Confirm Hapus</h6>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="py-3 text-center">
                                <i class="ni ni-bell-55 ni-3x"></i>
                                <h4 class="text-gradient text-warning mt-4">Peringatan!</h4>
                                <p>Anda yakin ingin menghapus berita ini? berita yang telah dihapus
                                  tidak bisa dikembalikan</p>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <a href="https://perpustakaan.asia.ac.id/index.php/admin/berita/delete/23" class="btn btn-success bg-gradient">Hapus</a>
                              <button type="button" class="btn btn-link btn-danger bg-gradient ml-auto" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="https://perpustakaan.asia.ac.id/assetsDashboard/img/user/IMG-20210923-WA0010.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Retno Cindy Rofiqoh S.IP</h6>
                          <p class="text-xs text-secondary mb-0">
                            Pustakawan</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs text-secondary mb-0">LITERATUR KELABU PERPUSTAKAAN ASIA</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Publish</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">2021-09-08 03:54:53</span>
                    </td>
                    <td class="align-middle">
                      <a href="https://perpustakaan.asia.ac.id/index.php/berita/read/literatur-kelabu-perpustakaan-asia" class="text-gradient text-success font-weight-bold text-xs" data-original-title="Lihat berita">
                        View
                      </a>
                      &nbsp;
                      <a href="https://perpustakaan.asia.ac.id/index.php/admin/berita/edit/22" class="text-gradient text-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit berita">
                        Edit
                      </a>
                      &nbsp;
                      <a href="javascript:;" class="text-gradient text-danger font-weight-bold text-xs" title="Hapus Berita" data-bs-toggle="modal" data-bs-target="#hapus22">
                        Hapus
                      </a>
                      <div class="modal fade" id="hapus22" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h6 class="modal-title" id="modal-title-notification">
                                Confirm Hapus</h6>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="py-3 text-center">
                                <i class="ni ni-bell-55 ni-3x"></i>
                                <h4 class="text-gradient text-warning mt-4">Peringatan!</h4>
                                <p>Anda yakin ingin menghapus berita ini? berita yang telah dihapus
                                  tidak bisa dikembalikan</p>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <a href="https://perpustakaan.asia.ac.id/index.php/admin/berita/delete/22" class="btn btn-success bg-gradient">Hapus</a>
                              <button type="button" class="btn btn-link btn-danger bg-gradient ml-auto" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="https://perpustakaan.asia.ac.id/assetsDashboard/img/user/IMG-20210923-WA0010.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Retno Cindy Rofiqoh S.IP</h6>
                          <p class="text-xs text-secondary mb-0">
                            Pustakawan</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs text-secondary mb-0">TES PLAGIASI DI PERPUSTAKAAN ASIA</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Publish</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">2021-09-08 02:57:58</span>
                    </td>
                    <td class="align-middle">
                      <a href="https://perpustakaan.asia.ac.id/index.php/berita/read/tes-plagiasi-di-perpustakaan-asia" class="text-gradient text-success font-weight-bold text-xs" data-original-title="Lihat berita">
                        View
                      </a>
                      &nbsp;
                      <a href="https://perpustakaan.asia.ac.id/index.php/admin/berita/edit/18" class="text-gradient text-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit berita">
                        Edit
                      </a>
                      &nbsp;
                      <a href="javascript:;" class="text-gradient text-danger font-weight-bold text-xs" title="Hapus Berita" data-bs-toggle="modal" data-bs-target="#hapus18">
                        Hapus
                      </a>
                      <div class="modal fade" id="hapus18" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h6 class="modal-title" id="modal-title-notification">
                                Confirm Hapus</h6>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="py-3 text-center">
                                <i class="ni ni-bell-55 ni-3x"></i>
                                <h4 class="text-gradient text-warning mt-4">Peringatan!</h4>
                                <p>Anda yakin ingin menghapus berita ini? berita yang telah dihapus
                                  tidak bisa dikembalikan</p>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <a href="https://perpustakaan.asia.ac.id/index.php/admin/berita/delete/18" class="btn btn-success bg-gradient">Hapus</a>
                              <button type="button" class="btn btn-link btn-danger bg-gradient ml-auto" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="dataTable-bottom">
              <div class="dataTable-info">Showing 1 to 3 of 3 entries</div>
              <nav class="dataTable-pagination">
                <ul class="dataTable-pagination-list"></ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>