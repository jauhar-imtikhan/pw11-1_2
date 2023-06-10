<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Beranda</h2>
                <h5 class="text-white op-7 mb-2">Halaman Beranda Informasi Sistem</h5>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-3">
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">Jumlah Total Buku </div>
                </div>
                <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                        <h1><?= $jmlbuku['Jumlah'] ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-info">
                <div class="card-header">
                    <div class="card-title">Tahun Penerbitan Terbanyak</div>
                </div>
                <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                        <h1><?= $maxtahun['Tahun_Terbit'] . " (" . $maxtahun['Jumlah'] . ")" ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-warning">
                <div class="card-header">
                    <div class="card-title">Penerbit Terbanyak</div>
                </div>
                <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                        <h1><?= $maxpenerbit['Penerbit'] ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-danger">
                <div class="card-header">
                    <div class="card-title">Rak Penampung Terbanyak</div>
                </div>
                <div class="card-body pb-0">
                    <div class="mb-4 mt-2">
                        <h1>Blok <?= $maxrak['Rak'] ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#mnberanda").addClass("active")
</script>