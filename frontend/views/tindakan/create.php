<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblTindakan $model */

$this->title = 'Create Tbl Tindakan';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-tindakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
