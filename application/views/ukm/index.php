<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span>
                <?php echo $ukm->nm_ukm; ?>
            </h3>
        </div>
        <div class="row">
            <?php foreach ($kegiatan as $key) {
                if ($key->id_ukm == $ukm->id_ukm) {
                    foreach ($rencana as $val) {
                        if ($val->id_rencana == $key->id_rencana) { ?>
                            <div class="col-md-4 stretch-card grid-margin">
                                <div class="card bg-gradient-info card-img-holder text-white">
                                    <div class="card-body">
                                        <img src="<?php echo base_url('assets/images/dashboard/circle.svg') ?>"
                                            class="card-img-absolute" alt="circle-image" />
                                        <h4 class="font-weight-normal mb-3"> <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                                            <?php echo $ukm->nm_ukm; ?>
                                        </h4>
                                        <h2 class="mb-5">
                                            <?php echo $val->judul; ?>
                                        </h2>
                                        <p>
                                            <?php echo $val->deskripsi; ?>
                                        </p>
                                        <h6 class="card-text">
                                            <?php echo $val->tempat . ' | ' . $val->waktu; ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }
                }
            } ?>


        </div>

    </div>
    <!-- content-wrapper ends -->