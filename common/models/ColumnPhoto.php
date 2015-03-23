<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "column_photo".
 *
 * @property integer $id
 * @property integer $column_id
 * @property string $image
 * @property integer $place
 * @property string $create_at
 * @property string $crate_by
 *
 * @property Column $column
 */
class ColumnPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'column_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['column_id'], 'required'],
            [['column_id', 'place'], 'integer'],
            [['create_at'], 'safe'],
            [['image'], 'string', 'max' => 255],
            [['crate_by'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'column_id' => 'Column ID',
            'image' => 'Image',
            'place' => 'Place',
            'create_at' => 'Create At',
            'crate_by' => 'Crate By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColumn()
    {
        return $this->hasOne(Column::className(), ['id' => 'column_id']);
    }
}
