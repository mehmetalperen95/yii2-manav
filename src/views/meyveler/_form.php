<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mehmetalperen95\manav\Meyveler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meyveler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hasatYeri')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fiyat')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
