<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </div>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat Datang</h4>
        <p>Selamat datang <strong> <?php echo $username; ?></strong> di sistem informasi akademik Universitas Sangga Buana, Anda login sebagai <?php echo $level; ?></strong></p>
        <hr>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-sliders-h"></i> Control Panel
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-sliders-h"></i> Control Panel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Mahasiswa</p>
                                <i class="fas fa-3x fa-user-graduate"></i>
                            </a>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Tahun Akademik</p>
                                <i class="fas fa-3x fa-calendar-alt"></i>
                            </a>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">KRS</p>
                                <i class="fas fa-3x fa-edit"></i>
                            </a>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">KHS</p>
                                <i class="fas fa-3x fa-file-alt"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Input Nilai</p>
                                <i class="fas fa-3x fa-sort-numeric-down"></i>
                            </a>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Cetak Transkip</p>
                                <i class="fas fa-3x fa-print"></i>
                            </a>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Kategoti</p>
                                <i class="fas fa-3x fa-list-ul"></i>
                            </a>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Info Kampus</p>
                                <i class="fas fa-3x fa-bullhorn"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Identitas</p>
                                <i class="fas fa-3x fa-id-card-alt"></i>
                            </a>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Tentang Kampus</p>
                                <i class="fas fa-3x fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Fasilitas</p>
                                <i class="fas fa-3x fa-laptop"></i>
                            </a>
                        </div>
                        <div class="col-md-3 text-info text-center">
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">Galeri</p>
                                <i class="fas fa-3x fa-image"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>