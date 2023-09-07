<?php if ($this->session->flashdata('flash')): ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>
<?php if ($this->session->flashdata('flash-error')): ?>
    <div class="flash-error" data-flashdata="<?= $this->session->flashdata('flash-error'); ?>"></div>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-book-multiple-variant"></i>
                </span> Data UKM Amikom
            </h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <!-- <div class="col-md-9">
                        <h4>Data UKM</h4><br>
                    </div> -->
                    <div class="col-md-5" style="width: 80%; max-width: 500px;">
                        <a href="" class="btn btn-gradient-success btn-rounded btn-fw" data-toggle="modal"
                            data-target=".tambah">Tambah</a>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="datatabel" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama UKM</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($ukm as $key) {
                                    $idk = $key->id_ukm; ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $no++; ?>
                                        </th>
                                        <td>
                                            <?php echo $key->nm_ukm; ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-warning" href="" data-toggle="modal"
                                                data-target=".id_<?php echo $idk; ?>">Edit</a>
                                            <a class="btn btn-outline-danger tombolhapus"
                                                href="<?php echo site_url('Adminpanel/hapus_ukm/' . $idk) ?>">Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Modal Edit UKM-->
                                    <div class="modal fade id_<?php echo $idk ?>" id="id_<?php echo $idk ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Form Edit UKM</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST"
                                                        action="<?php echo site_url('Adminpanel/edit_ukm') ?>">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Nama UKM</label>
                                                            <input type="text" class="form-control" name="nm_ukm"
                                                                value="<?php echo $key->nm_ukm; ?>">
                                                            <input type="hidden" class="form-control" name="id_ukm"
                                                                value="<?php echo $idk; ?>">
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-gradient-primary btn-icon-text">
                                                            <i class=""></i> Submit </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Edit UKM -->
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- content-wrapper ends -->

    <!-- Modal Tambah Barang-->
    <div class="modal fade tambah" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah UKM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo site_url('Adminpanel/add_ukm') ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama UKM</label>
                            <input type="text" class="form-control" name="nm_ukm">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary btn-icon-text">
                            <i class=""></i> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah -->