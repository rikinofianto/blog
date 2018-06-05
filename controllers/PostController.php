<?php

namespace app\controllers;

use Yii;
use app\models\Post;
use app\models\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function beforeAction($event)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/index']);
        }
        $this->layout = 'main_admin';
        return parent::beforeAction($event);
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            $model->gambar = UploadedFile::getInstance($model, 'gambar');
            $path = Yii::$app->basePath.'/web/uploads';
            if(!empty($model->gambar)) {
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                $model->gambar->saveAs($path.'/' . $model->gambar->baseName . '.' . $model->gambar->extension);
            }
            $model->gambar = $model->gambar->baseName . '.' . $model->gambar->extension;
            if ($model->validate()) {
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id_post]);
                } else {
                    unlink($path.'/' . $model->gambar->baseName . '.' . $model->gambar->extension);
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $post = Yii::$app->request->post();
        $old_file = $model->gambar;
        if ($model->load($post)) {
            $image = UploadedFile::getInstance($model, 'gambar');
            $path = Yii::$app->basePath.'/web/uploads';
            if(isset($image)){
                unlink($path.'/' . $old_file);
                $image->saveAs($path.'/' . $image->baseName . '.' . $image->extension);
                $model->gambar =  $image->baseName . '.' . $image->extension;
            }
            if ($model->validate()) {
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id_post]);
                } else {
                    if(isset($image)) {
                        unlink($path.'/' . $image->baseName . '.' . $image->extension);
                    }
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
