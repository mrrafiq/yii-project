<?php

/** @var yii\web\View $this */
use yii\bootstrap5\Html;


$this->title = 'Sistem Informasi Klinik';
?>
<div class="site-index">
    <div class="mb-8">
        <h1 class="text-center mb-8"><?=$this->title?></h1>
    </div>
    <div class="text-center mb-12">
    </div>
    <div class="row mt-12">
        <div class="col">
            <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header text-center">Pasien</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $pasien ?></h5>
                    <p class="card-text text-center">Orang</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header text-center">Obat</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $obat ?></h5>
                    <p class="card-text text-center">Unit</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header text-center">Tindakan</div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $tindakan ?></h5>
                    <p class="card-text text-center">Tindakan</p>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
