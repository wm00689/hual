<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $cname
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $isChild
 *
 * @property Article[] $articles
 * @property Article $id0
 */
class Column extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'columns';
    }

    public function init()
    {
        parent::init();
    }



    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['parentid', 'cname','isArticle','isShow'], 'required'],
            [['content','sort','model_id','template_id'],'safe'],
            [['parentid', 'status'], 'integer'],
            [['cname'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parentid' => 'Pid',
            'sort' => '排序',
            'cname' => '分类名称',
            'model_id' => '选择模型',
            'template_id' => '选择模板',
            'isArticle' => '是否单网页',
            'isChild' => '是否有子类',
            'isShow' => '是否在导航栏显示',
            'status' => 'Status',
            'content' => '栏目介绍',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['column_id' => 'id'])->asArray();
        return $this->hasMany(Article::className(), ['column_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId()
    {
        return $this->hasOne(Article::className(), ['column_id' => 'id']);
    }
}
