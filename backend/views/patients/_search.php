<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PatientsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patients-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'patients_id') ?>

    <?= $form->field($model, 'ealth_tatus') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'p_name') ?>

    <?php // echo $form->field($model, 'p_last_name') ?>

    <?php // echo $form->field($model, 'date_birth') ?>

    <?php // echo $form->field($model, 'social_number') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
