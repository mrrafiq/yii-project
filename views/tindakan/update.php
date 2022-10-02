<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tindakan $model */

$this->title = 'Update Data Tindakan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <label for="pasien_id" class='mt-4'>Pasien</label>
    <input type="text" name="Tindakan[pasien_id]" id="pasien_id" class="form-control" readonly value="<?= $model['pasien_id'] ?>">

    <label for="obat_id" class="mt-4">Obat</label>
    <select name="Tindakan[obat_id]" id="obat_id" class="form-select mb-4">
        <option selected>-</option>
        <?php foreach ($obat as $obat) {?>
            <option value="<?= $obat['id'] ?>" <?php if($obat['id'] == $selected['obat_id']){ echo 'selected'; } else{ echo ''; } ?>><?= $obat['nama'] ?> </option>
        <?php } ?>
    </select>

    <label for="keterangan">Keterangan</label>
    <textarea name="Tindakan[keterangan]" id="keterangan" rows="3" class="form-control"><?= $model['keterangan'] ?></textarea>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
