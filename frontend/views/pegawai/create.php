<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblPegawai $model */

$this->title = 'Create Tbl Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
