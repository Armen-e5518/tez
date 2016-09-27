<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "condition_clinical_notes".
 *
 * @property integer $id
 * @property integer $patient_id
 * @property string $data
 * @property string $text
 */
class ConditionClinicalNotes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'condition_clinical_notes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'data', 'text'], 'required'],
            [['patient_id'], 'integer'],
            [['data', 'text'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'patient_id' => Yii::t('app', 'Patient ID'),
            'data' => Yii::t('app', 'Data'),
            'text' => Yii::t('app', 'Text'),
        ];
    }
}
