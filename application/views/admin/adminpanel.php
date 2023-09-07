<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard
            </h3>
        </div>
        <div class="row">
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-warning card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?php echo base_url('assets/images/dashboard/circle.svg') ?>"
                            class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Laporan Baru <i
                                class="mdi mdi-alert-circle-outline mdi-24px float-right"></i>
                        </h4>
                        <?php $no = 0;
                        foreach ($rencana as $key) {
                            if ($key->status == 'Menunggu') {
                                $no++;
                            }
                        } ?>
                        <h2 class="mb-5">
                            <?php echo $no; ?> Laporan
                        </h2>
                        <h6 class="card-text"></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?php echo base_url('assets/images/dashboard/circle.svg') ?>"
                            class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Laporan Diproses <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <?php $no = 0;
                        foreach ($rencana as $key) {
                            if ($key->status == 'Diproses') {
                                $no++;
                            }
                        } ?>
                        <h2 class="mb-5">
                            <?php echo $no; ?> Laporan
                        </h2>
                        <h6 class="card-text"></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?php echo base_url('assets/images/dashboard/circle.svg') ?>"
                            class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Laporan Diterima <i
                                class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <?php $no = 0;
                        foreach ($rencana as $key) {
                            if ($key->status == 'Diterima') {
                                $no++;
                            }
                        } ?>
                        <h2 class="mb-5">
                            <?php echo $no; ?> Laporan
                        </h2>

                        <h6 class="card-text"></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?php echo base_url('assets/images/dashboard/circle.svg') ?>"
                            class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Ditolak <i
                                class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <?php $no = 0;
                        foreach ($rencana as $key) {
                            if ($key->status == 'Ditolak') {
                                $no++;
                            }
                        } ?>
                        <h2 class="mb-5">
                            <?php echo $no; ?> Laporan
                        </h2>
                        <h6 class="card-text"></h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- content-wrapper ends -->