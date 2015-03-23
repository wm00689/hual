<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/3/18
 * Time: 17:20
 */

namespace yii\widgets;

use yii;
use yii\base\Widget;

class Models extends Widget
{
    public $form;
    public $model;
    public function run(){

        $cache = Yii::$app->cache;
        $models = $cache['models'];
        foreach($models as $v){
            $mds['val'][$v['id']] = $v['name'];
        }
        return $this->render('models',['model'=>$this->model,'form'=>$this->form,'models'=>$mds['val']]);
    }
}