<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mehmetalperen95\manav\Meyveler */

$this->title = 'Create Meyveler';
$this->params['breadcrumbs'][] = ['label' => 'Meyvelers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meyveler-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
