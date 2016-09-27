<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $allDay
 * @property string $start
 * @property string $end
 * @property integer $ranges
 * @property string $dow
 * @property string $url
 * @property string $className
 * @property integer $editable
 * @property string $startEditable
 * @property string $durationEditable
 * @property string $source
 * @property string $color
 * @property string $backgroundColor
 * @property string $borderColor
 * @property string $textColor
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['title', 'description', 'allDay', 'start', 'end', 'ranges', 'dow', 'url', 'className', 'editable', 'startEditable', 'durationEditable', 'source', 'color', 'backgroundColor', 'borderColor', 'textColor'], 'required'],
            [['allDay', 'ranges', 'editable'], 'integer'],
            [['start', 'end'], 'safe'],
            [['title', 'description', 'startEditable', 'durationEditable', 'source', 'color', 'backgroundColor', 'borderColor', 'textColor'], 'string', 'max' => 100],
            [['dow', 'url', 'className'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'allDay' => Yii::t('app', 'All Day'),
            'start' => Yii::t('app', 'Start'),
            'end' => Yii::t('app', 'End'),
            'ranges' => Yii::t('app', 'Ranges'),
            'dow' => Yii::t('app', 'Dow'),
            'url' => Yii::t('app', 'Url'),
            'className' => Yii::t('app', 'Class Name'),
            'editable' => Yii::t('app', 'Editable'),
            'startEditable' => Yii::t('app', 'Start Editable'),
            'durationEditable' => Yii::t('app', 'Duration Editable'),
            'source' => Yii::t('app', 'Source'),
            'color' => Yii::t('app', 'Color'),
            'backgroundColor' => Yii::t('app', 'Background Color'),
            'borderColor' => Yii::t('app', 'Border Color'),
            'textColor' => Yii::t('app', 'Text Color'),
        ];
    }
}
