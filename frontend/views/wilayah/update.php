<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblWilayah $model */

$this->title = 'Update Tbl Wilayah: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Wilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-wilayah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
