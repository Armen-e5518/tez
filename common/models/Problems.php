<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "problems".
 *
 * @property integer $problems_id
 * @property string $title
 * @property string $diagnose
 * @property string $status
 * @property string $date
 */
class Problems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'problems';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'diagnose', 'status', 'date'], 'required'],
            [['title', 'diagnose', 'status', 'date'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'problems_id' => Yii::t('app', 'Problems ID'),
            'title' => Yii::t('app', 'Title'),
            'diagnose' => Yii::t('app', 'Diagnose'),
            'status' => Yii::t('app', 'Status'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
}
