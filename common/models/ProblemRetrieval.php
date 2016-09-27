<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "problem_retrieval".
 *
 * @property integer $problem_retrieval_id
 * @property integer $problem_id
 * @property string $Symptoms
 * @property string $Initial_diagnose
 * @property string $main_diagnose
 * @property string $Secondary_diagnoses
 * @property string $Status
 */
class ProblemRetrieval extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'problem_retrieval';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['problem_id', 'Symptoms', 'Initial_diagnose', 'main_diagnose', 'Secondary_diagnoses', 'Status'], 'required'],
//            [['problem_id'], 'integer'],
//            [['Symptoms', 'Initial_diagnose', 'main_diagnose', 'Secondary_diagnoses', 'Status'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'problem_retrieval_id' => Yii::t('app', 'Problem Retrieval ID'),
            'problem_id' => Yii::t('app', 'Problem ID'),
            'Symptoms' => Yii::t('app', 'Symptoms'),
            'Initial_diagnose' => Yii::t('app', 'Initial Diagnose'),
            'main_diagnose' => Yii::t('app', 'Main Diagnose'),
            'Secondary_diagnoses' => Yii::t('app', 'Secondary Diagnoses'),
            'Status' => Yii::t('app', 'Status'),
        ];
    }
}
