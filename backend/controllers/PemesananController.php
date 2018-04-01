<?php

namespace backend\controllers;

use Yii;
use backend\models\Pemesanan;
use backend\models\PemesananSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;
/**
 * PemesananController implements the CRUD actions for Pemesanan model.
 */
class PemesananController extends Controller
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
     * Lists all Pemesanan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PemesananSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pemesanan model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCetakpelayanan($id) {

          // get your HTML raw content without any layouts or scripts

          $query = Pemesanan::find();
          $models = $query
          ->where(['id_pemesan' => $id,])
          ->all();

          $content =  $this->render('cetakpelayanan',[
              'models' => $models,
              'model' => $this->findModel($id),
          ]);

          // setup kartik\mpdf\Pdf component
          $pdf = new Pdf([
              // set to use core fonts only
              'mode' => Pdf::MODE_UTF8,
              // A4 paper format
              'format' => Pdf::FORMAT_A4,
              // portrait orientation
              'orientation' => Pdf::ORIENT_PORTRAIT,
              // stream to browser inline
              'destination' => Pdf::DEST_BROWSER,
              // your html content input
              'content' => $content,
              // format content from your own css file if needed or use the
              // enhanced bootstrap css built by Krajee for mPDF formatting
              'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',

              'options' => [
                  'title' => 'AHASS-MOTOR.com'
              ],
               // call mPDF methods on the fly
              'methods' => [
                  'SetHeader'=>['PELAYANAN SERVIS AHASS MOTOR '],
                  'SetFooter'=>['AHASS-MOTOR.COM'],
              ]
          ]);
          // http response
          $response = Yii::$app->response;
          $response->format = \yii\web\Response::FORMAT_RAW;
          $headers = Yii::$app->response->headers;
          $headers->add('Content-Type', 'application/pdf');

          // return the pdf output as per the destination setting
          return $pdf->render();
      }

    /**
     * Creates a new Pemesanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pemesanan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pemesan]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pemesanan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pemesan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pemesanan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pemesanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Pemesanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pemesanan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
