<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="condition-retrieval-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'Symptoms')->textarea(['maxlength' => true]) ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'Potential_diagnose')->dropDownList([
                '0' => 'text1',
                '1' => 'text2',
                '2' => 'text3'
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="Clinical-Notes">
            
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'Last_Update_Date')->textInput(['maxlength' => true,'readonly' => true]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
