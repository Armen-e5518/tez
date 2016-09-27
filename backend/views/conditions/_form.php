<?php

use kartik\widgets\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Conditions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="conditions-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-6">


        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'diagnose')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter birth date ...'],
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]); ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Next '), ['next', 'p_id' => Yii::$app->request->get('p_id'),'u_id' => Yii::$app->request->get('u_id'),], ['class' => 'btn btn-success']) ?>

    </div>
  
    <?php ActiveForm::end(); ?>

</div>
