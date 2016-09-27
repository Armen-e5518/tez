<?php

use kartik\widgets\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProblemRetrieval */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="problem-retrieval-form">
    <div class="row">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-md-12">
            <?= $form->field($model, 'Symptoms')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'Initial_diagnose')->dropDownList([
                '0' => 'text1',
                '1' => 'text2',
                '2' => 'text3'
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'main_diagnose')->dropDownList([
                '0' => 'text1',
                '1' => 'text2',
                '2' => 'text3'
            ]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= '<label class="control-label">Secondary Diagnoses</label>'; ?>
            <?= Select2::widget([
                'model' => $model,
                'attribute' => 'Secondary_diagnoses',
                'data' => [
                    1 => 'trxt1',
                    2 => 'trxt2',
                    3 => 'trxt3',
                ],
                'options' => ['placeholder' => 'Select a state ...'],
                'pluginOptions' => [
                    'allowClear' => true,
                    'multiple' => true
                ],
            ]); ?>
        </div>
        <div class="col-md-6">

            <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
