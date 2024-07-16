<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TblObat $model */

$this->title = 'Create Tbl Obat';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
