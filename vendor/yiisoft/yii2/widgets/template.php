<?php

namespace yii\widgets;

use yii;
use yii\base\Widget;

class Template extends Widget
{
    public $form;
    public $model;
    public function run(){

        $cache = Yii::$app->cache;
        $templates = $cache['template'];
        foreach($templates as $v){
            $tps['val'][$v['id']] = $v['name'];
        }
        return $this->render('template',['model'=>$this->model,'form'=>$this->form,'tps'=>$tps['val']]);
    }
}