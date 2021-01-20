<?php

namespace furkanaydgn\deneme\controllers;

use Yii;
use furkanaydgn\deneme\models\Kullanici;
use furkanaydgn\deneme\models\KullaniciSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use furkanaydgn\deneme\models\Firmalistesi;
/**
 * KullaniciController implements the CRUD actions for Kullanici model.
 */
class KullaniciController extends Controller
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
     * Lists all Kullanici models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KullaniciSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kullanici model.
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
     * Creates a new Kullanici model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kullanici();
        if($model->load(Yii::$app->request->post()) && $model->save()){
            $deneme=Firmalistesi::findOne($model->fid);
            if($model->biletsayisi < $deneme->koltuksayisi){
                $deneme->koltuksayisi-= $model->biletsayisi;
                $deneme->save();
                return $this->render('view', [
                    'model' => $this->findModel($model->uid),
                    'deneme' => $deneme,
                ]);
            }
            else
                Yii::$app->session->setFlash('error', 'Kalan bilet sayısından fazla bilet girilemez.Lütfen daha düşük bilet sayısı giriniz');

        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kullanici model.
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
     * Deletes an existing Kullanici model.
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
     * Finds the Kullanici model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kullanici the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kullanici::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
