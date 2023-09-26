<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 style="float:left !important"><?= $title; ?></h6>
                <a href="<?= base_url('table/add') ?>"
                    class="btn btn-icon btn-sm bg-gradient-success pull-right" style="float: right !important;"
                    type="button">
                    <span class="btn-inner--icon"><i class="fas fa-plus" aria-hidden="true"></i></span>
                    <span class="btn-inner--text">Tambah Anggota</span>
                </a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 dataTabl-table" id="datatable-search">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Country</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $i = 1;
                        foreach($anggota as $anggota){
                        ?>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="<?= base_url() ?>assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <span class="mb-0 text-sm"><?= $anggota->first_name . ' ' . $anggota->last_name ?></span>
                                            <p class="text-xs text-secondary mb-0"><?= $anggota->email ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                    <p class="text-xs text-center text-secondary mb-0"><?= $anggota->country ?></p>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;"
                                        class="text-gradient btn-view text-success font-weight-bold text-xs"
                                        data-id="<?= $anggota->id ?>"
                                        data-first_name = "<?= $anggota->first_name ?>"
                                        data-last_name = "<?= $anggota->last_name ?>"
                                        data-email = "<?= $anggota->email ?>"
                                        data-country = "<?= $anggota->country ?>"
                                        data-toggle="tooltip"
                                        data-original-title="Lihat anggota">
                                        View
                                    </a>
                                    &nbsp;
                                    <a href="#"
                                        class="text-gradient text-warning font-weight-bold text-xs"
                                        data-toggle="tooltip" data-original-title="Edit anggota">
                                        Edit
                                    </a>
                                    &nbsp;
                                    <a href="javascript:;" class="text-gradient text-danger font-weight-bold text-xs"
                                        title="Hapus anggota" data-bs-toggle="modal" data-bs-target="#hapus<?= $anggota->id ?>">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('pages/table/modal') ?>

<?= $this->endSection(); ?>