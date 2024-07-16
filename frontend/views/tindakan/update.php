<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblTindakan $model */

$this->title = 'Update Tbl Tindakan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
