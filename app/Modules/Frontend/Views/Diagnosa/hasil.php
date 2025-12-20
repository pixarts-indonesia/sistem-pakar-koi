<?= $this->extend('App\Modules\Frontend\Views\Layout\main') ?>

<?= $this->section('content') ?>

<?php
// ====== DATA CHART (ambil dari persentase penyakit) ======
$chartLabels = $hasil['penyakit']['nama'] ?? [];
$chartValues = array_map('floatval', $hasil['nilai'] ?? []);
?>

<style>
    /* Pengganti script jQuery: hide ":" di mobile */
    @media (max-width: 767.98px) {
        .titik { display: none !important; }
    }
</style>

<!--? Hero Start -->
<div class="slider-area2">
    <div class="slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center">
                        <h2><?= $title ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<div class="contact" style="margin: 10rem 0rem;">
    <div class="container shadow bg-white rounded">
        <div class="col-md-12" style="padding: 8%;">
            <hr>

            <div class="col-md-12 row">
                <div class="col-md-3 text-left">
                    <span>Nama User</span>
                </div>
                <div class="col-md-3 text-right">
                    <span class="titik">:</span>
                </div>
                <div class="col-md-6 text-left">
                    <span><?= $user->nama ?? '-'; ?></span>
                </div>
            </div>

            <hr>

            <div class="col-md-12 row">
                <div class="col-md-3 text-left">
                    <span>Gejala</span>
                </div>
                <div class="col-md-3 text-right">
                    <span class="titik">:</span>
                </div>
                <div class="col-md-6 text-left">
                    <?php $i = 1; ?>
                    <?php foreach (($hasil['gejala'] ?? []) as $key => $value) : ?>
                        <span><?= $i++ . '. ' . $value; ?></span><br>
                    <?php endforeach; ?>
                </div>
            </div>

            <hr>

            <div class="col-md-12 row">
                <div class="col-md-3 text-left">
                    <span>Penyakit</span>
                </div>
                <div class="col-md-3 text-right">
                    <span class="titik">:</span>
                </div>
                <div class="col-md-6 text-left">
                    <?php $i = 1; ?>
                    <?php foreach (($hasil['penyakit']['nama'] ?? []) as $key => $value) : ?>
                        <span><?= $i++ . '. ' . $value . ' (' . ($hasil['nilai'][$key] ?? 0) . '%)'; ?></span>
                        <br>
                        <?php if (!empty($hasil['penyakit']['img'][$key])) : ?>
                            <a href="<?= base_url("assets/images/product/" . $hasil['penyakit']['img'][$key]) ?>"
                               class="btn btn-xs btn-primary text-white" target="_blank">Gambar</a>
                            <br>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <hr>

            <div class="col-md-12 row">
                <div class="col-md-3 text-left">
                    <span>Solusi</span>
                </div>
                <div class="col-md-3 text-right">
                    <span class="titik">:</span>
                </div>
                <div class="col-md-6 text-left">
                    <?php $i = 1; ?>
                    <?php foreach (($hasil['penyakit']['solusi'] ?? []) as $key => $value) : ?>
                        <span><?= $i++ . '. ' . $value; ?></span><br>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- ====== CHART DI BAWAH SOLUSI ====== -->
            <hr>
            <div class="col-md-12 row mt-4">
                <div class="col-md-3 text-left">
                    <span>Akurasi</span>
                </div>
                <div class="col-md-3 text-right">
                    <span class="titik">:</span>
                </div>
                <div class="col-md-6 text-left">
                    <div style="width: 100%; max-width: 560px;">
                        <canvas id="chartPenyakit" height="220"></canvas>
                    </div>

                    <?php if (empty($chartLabels)) : ?>
                        <small class="text-muted">Data penyakit belum tersedia untuk ditampilkan.</small>
                    <?php endif; ?>
                </div>
            </div>

            <hr>

            <div class="col-12 text-center pt-5">
                <a href="/responden" class="btn btn-primary">Responden</a>
            </div>
        </div>
    </div>
</div>

<!-- ====== CHART.JS ====== -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const labels = <?= json_encode($chartLabels); ?>;
    const values = <?= json_encode($chartValues); ?>;

    const canvas = document.getElementById('chartPenyakit');
    if (!canvas) return;

    // Kalau tidak ada data, sembunyikan canvas
    if (!labels || labels.length === 0) {
        canvas.style.display = 'none';
        return;
    }

    // Jika Chart.js gagal termuat (misal CDN keblokir)
    if (typeof Chart === 'undefined') {
        console.error('Chart.js belum termuat. Coba matikan Brave Shields untuk CDN atau simpan Chart.js lokal di assets.');
        return;
    }

    new Chart(canvas, {
        type: 'bar', // ubah jadi 'pie' atau 'doughnut' kalau mau
        data: {
            labels: labels,
            datasets: [{
                label: 'Persentase (%)',
                data: values,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: (ctx) => `${ctx.parsed.y}%`
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: 100,
                    ticks: {
                        callback: (v) => v + '%'
                    }
                }
            }
        }
    });
});
</script>

<?= $this->endSection() ?>
