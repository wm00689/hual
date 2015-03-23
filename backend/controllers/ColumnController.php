<?php

namespace backend\controllers;

use backend\models\Column;
use Yii;
use backend\models\ColumnSearch;
use common\lib\tree;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 *ColumnController implements the CRUD actions forColumn model.
 */
class ColumnController extends BaseController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                   // 'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists allColumn models.
     * @return mixed
     */
    public function actionIndex()
    {
        $cache = Yii::$app->cache;
        $columnList = $cache['column'];
        //$searchModel = newColumnSearch();
        //$columnList = $searchModel->columnList();
        $tree = new tree();
        $tree->init($columnList);

        $str=<<<Eof
        <tr>
            <td>\$id</td>
            <td> \$spacer\$cname</td>
            <td>
                <a href='/column/create?id=\$id'>添加子类</a> |
                <a href='/column/update?id=\$id'>更新</a> |
                <a href='/column/delete?id=\$id'>删除</a> |
                <a href='/article/index?id=\$id'>内容管理</a> |
                <a href='/columnphoto/index?id=\$id'>栏目图片</a>
            </td>
        </tr>
Eof;
        $columnTree = $tree->get_tree(0,$str);
        return $this->render('index',[
            'columnTree'=>$columnTree
        ]);
    }


    /**
     * Displays a single Column model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        $getArticles = Column::findOne(Yii::$app->request->get('id'));
        return $this->render('view', [
            'model' => $this->findModel($id),
            'article' =>$getArticles->articles,

        ]);
    }

    /**
     * Creates a new Column model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new Column();
        $model->created_at = time();
        $model->updated_at = time();
        $model->parentid = $request->get('id')?$request->get('id'):0;

        if ($model->load($request->post()) && $model->save()) {
            $this->cacheAction();
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function cacheAction()
    {
        $searchModel = new ColumnSearch();
        $columnList = $searchModel->columnList();
        $cache = Yii::$app->cache;
        $cache['column'] = $columnList;

    }

    /**
     * Updates an existing Column model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->cacheAction();
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Column model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        $this->cacheAction();
        return $this->redirect(['index']);
    }

    /**
     * Finds theColumn model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @returnColumn the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Column::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
