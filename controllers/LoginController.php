<?php

namespace app\controllers;

use Yii;
use app\models\Login;
use app\models\LoginSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LoginController implements the CRUD actions for Login model.
 */
class LoginController extends Controller
{
    /**
     * @inheritdoc
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

    /**
     * Lists all Login models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LoginSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Login model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Login model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model= new login();
        if (Yii::$app->request->post()){
        if($model->load(Yii::$app->request->post())){
            $model->authkey= Yii::$app->security->generateRandomString();
            $model->accestoken= Yii:: $app->security->generateRandomString();
            $model->password=Yii::$app->security-> generatePasswordHash($model->password);
            if($model->save()){
                return $this->redirect(['view','id'=>$model->Uesrnid]);
            }
        }

    }
        return $this-> render('create',['model'=>$model]);
       /** $model = new Login();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Uesrnid]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }*/
    }

    /**
     * Updates an existing Login model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Uesrnid]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Login model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Login model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Login the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Login::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}