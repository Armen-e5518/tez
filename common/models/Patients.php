<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "patients".
 *
 * @property integer $patients_id
 * @property string $ealth_tatus
 * @property string $date
 * @property string $description
 * @property string $p_name
 * @property string $p_last_name
 * @property string $date_birth
 * @property string $social_number
 */
class Patients extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ealth_tatus', 'date', 'description'], 'required'],
            [['ealth_tatus', 'date', 'description', 'p_name', 'p_last_name', 'date_birth', 'social_number'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'patients_id' => Yii::t('app', 'Patients ID'),
            'ealth_tatus' => Yii::t('app', 'Ealth Tatus'),
            'date' => Yii::t('app', 'Date'),
            'description' => Yii::t('app', 'Description'),
            'p_name' => Yii::t('app', 'First Name'),
            'p_last_name' => Yii::t('app', 'Last Name'),
            'date_birth' => Yii::t('app', 'Date of Birth'),
            'social_number' => Yii::t('app', 'Social Security  Number'),
        ];
    }
    
    public function updateData($prob_id = null,$con_id = null,$pat_id = null){
        var_dump($prob_id);
        echo  'd';
        print_r($con_id);

        $prob_id = !empty($prob_id)?$prob_id:0;
        $con_id = !empty($con_id)?$con_id:0;
        $model = $this->findOne($pat_id);
        $model->conditions_id = $con_id;
        $model->problems_id = $prob_id;
        return $model->save();
    }
}
