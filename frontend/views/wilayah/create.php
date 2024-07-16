<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblWilayah $model */

$this->title = 'Create Tbl Wilayah';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Wilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-wilayah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
