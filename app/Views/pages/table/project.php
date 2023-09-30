<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6 style="float:left !important"><?= $title; ?></h6>
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addProjectModal" class="btn btn-icon btn-sm bg-gradient-success pull-right" style="float: right !important;" type="button">
                    <span class="btn-inner--icon"><i class="fas fa-plus" aria-hidden="true"></i></span>
                    <span class="btn-inner--text">Tambah project</span>
                </a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 dataTabl-table" id="datatable-search">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Teknologi</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Biaya</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Lampiran</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($project as $project) {
                            ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <span class="mb-0 text-sm"><?= $project->nama_project ?></span>
                                                <p class="text-xs text-secondary mb-0"><?= $project->client_project ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                        <p class="text-xs text-center text-secondary mb-0"><?= $project->teknologi_project ?></p>
                                    </td>
                                    <td>
                                        <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                        <p class="text-xs text-center text-secondary mb-0"><?= $project->biaya_project ?></p>
                                    </td>
                                    <td>
                                        <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                        <p class="text-xs text-center text-secondary mb-0"><?= $project->status_project ?></p>
                                    </td>
                                    <td>
                                        <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                        <p class="text-xs text-center text-secondary mb-0"><?= $project->lampiran_project ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-gradient btn-viewproject text-success font-weight-bold text-xs" data-id="<?= $project->id ?>" data-nama_project="<?= $project->nama_project ?>" data-client_project="<?= $project->client_project ?>" data-teknologi_project="<?= $project->teknologi_project ?>" data-biaya_project="<?= $project->biaya_project ?>" data-status_project="<?= $project->status_project ?>" data-lampiran_project="<?= $project->lampiran_project ?>" data-toggle="tooltip" data-original-title="Lihat project">
                                            View
                                        </a>
                                        &nbsp;
                                        <a href="javascript:;" class="text-gradient btn-editproject text-warning font-weight-bold text-xs" data-id="<?= $project->id ?>" data-nama_project="<?= $project->nama_project ?>" data-client_project="<?= $project->client_project ?>" data-teknologi_project="<?= $project->teknologi_project ?>" data-biaya_project="<?= $project->biaya_project ?>" data-status_project="<?= $project->status_project ?>" data-lampiran_project="<?= $project->lampiran_project ?>" data-toggle="tooltip" data-original-title="Edit project">
                                            Edit
                                        </a>
                                        &nbsp;
                                        <a href="javascript:;" onclick="delete_dynamic(<?= $project->id ?>,'/table/project/delete/','delete')" class="text-gradient text-danger font-weight-bold text-xs" title="Hapus project" data-bs-toggle="modal" data-bs-target="#hapus<?= $project->id ?>">
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