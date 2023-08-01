<?php if ($this->session->flashdata('flash')): ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-account"></i>
                </span> Data Admin
            </h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-9">
                        <h4>Data Admin Utama</h4><br>
                    </div>
                    <div class="col-md-3">
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".tambahadmin">Tambah</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="datatabel" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($admin as $key) {
                                    $idk = $key->id_admin; ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $no++; ?>
                                        </th>
                                        <td>
                                            <?php echo $key->username; ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-9">
                        <h4>Data Admin UKM</h4><br>
                    </div>
                    <div class="col-md-3">
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target=".tambahadmin_ukm">Tambah</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table id="datatabel2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">UKM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($admin_ukm as $key) {
                                    $idk = $key->id_admin_ukm; ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $no++; ?>
                                        </th>
                                        <td>
                                            <?php echo $key->username; ?>
                                        </td>
                                        <td>
                                            <?php
                                            foreach ($ukm as $val) {
                                                if ($val->id_ukm == $key->id_ukm) {
                                                    # code...
                                                    echo $val->nm_ukm;
                                                }
                                            }
                                            ?>
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
    <!-- content-wrapper ends -->

    <!-- Modal Tambah  Master-->
    <div class="modal fade tambahadmin" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo site_url('Adminpanel/add_master') ?>">

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah -->
    <!-- Modal Tambah Barang-->
    <div class="modal fade tambahadmin_ukm" id="tambahadmin_ukm" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Admin UKM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo site_url('Adminpanel/add_admin_ukm') ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">UKM</label>
                            <select class="form-control" name="id_master" id="">
                                <option value="">---Pilih---</option>
                                <?php foreach ($ukm as $key) { ?>
                                    <option value="<?php echo $key->id_ukm; ?>"><?php echo $key->nm_ukm; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">pasword</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah -->