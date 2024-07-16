<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblPegawai $model */

$this->title = 'Update Tbl Pegawai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
