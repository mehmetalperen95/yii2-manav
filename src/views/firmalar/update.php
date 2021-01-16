<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mehmetalperen95\manav\Firmalar */

$this->title = 'Update Firmalar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Firmalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="firmalar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
