<?php

namespace furkanaydgn\deneme\controllers;

use Yii;
use furkanaydgn\deneme\models\Alinanbiletler;
use furkanaydgn\deneme\models\AlinanbiletlerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use furkanaydgn\deneme\models\Firmalistesi;
/**
 * AlinanbiletlerController implements the CRUD actions for Alinanbiletler model.
 */
class AlinanbiletlerController extends Controller
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

    /**
     * Lists all Alinanbiletler models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlinanbiletlerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Alinanbiletler model.
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
     * Creates a new Alinanbiletler model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
     $model = new Alinanbiletler();
        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            $deneme=Firmalistesi::findOne($model->fid);
            if($model->biletsayisi < $deneme->koltuksayisi){
                $deneme->koltuksayisi-= $model->biletsayisi;
                $deneme->save();
                return $this->redirect(['view', 'id' => $model->uid]);
            }
            else
                Yii::$app->session->setFlash('error', 'Kalan bilet sayısından fazla bilet girilemez.Lütfen daha düşük bilet sayısı giriniz');

        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Alinanbiletler model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->uid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Alinanbiletler model.
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
     * Finds the Alinanbiletler model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Alinanbiletler the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Alinanbiletler::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
