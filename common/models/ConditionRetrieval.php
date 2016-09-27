<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "condition_retrieval".
 *
 * @property integer $condition_retrieval_id
 * @property integer $conditions_id
 * @property string $Symptoms
 * @property string $Potential_diagnose
 * @property string $Status
 * @property string $Last_Update_Date
 */
class ConditionRetrieval extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'condition_retrieval';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['conditions_id', 'Symptoms', 'Potential_diagnose', 'Status'], 'required'],
            [['conditions_id'], 'integer'],
            [['Symptoms', 'Potential_diagnose', 'Status', 'Last_Update_Date'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'condition_retrieval_id' => Yii::t('app', 'Condition Retrieval ID'),
            'conditions_id' => Yii::t('app', 'Conditions ID'),
            'Symptoms' => Yii::t('app', 'Symptoms'),
            'Potential_diagnose' => Yii::t('app', 'Potential Diagnose'),
            'Status' => Yii::t('app', 'Status'),
            'Last_Update_Date' => Yii::t('app', 'Last  Update  Date'),
        ];
    }
}
