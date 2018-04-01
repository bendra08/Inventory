<?php

namespace backend\controllers;

use Yii;
use backend\models\Barangmasuk;
use backend\models\BarangmasukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Barang;
use kartik\mpdf\Pdf;

/**
 * BarangmasukController implements the CRUD actions for Barangmasuk model.
 */
class BarangmasukController extends Controller
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
     * Lists all Barangmasuk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BarangmasukSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Barangmasuk model.
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
     * Creates a new Barangmasuk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Barangmasuk();

        $model->id = date('this');
              $model->tanggal_masuk = date('Y-m-d');


             if ($model->load(Yii::$app->request->post())){
                 $model->total_harga= $model->jumlah_barang * $model->harga;
                 $model->save();
                 return $this->redirect(['view', 'id' => $model->id]);
             }

             return $this->render('create', [
                 'model' => $model,
             ]);
         }
    /**
     * Updates an existing Barangmasuk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Barangmasuk model.
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
     * Finds the Barangmasuk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Barangmasuk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Barangmasuk::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionReport() {

             $searchModel = new BarangmasukSearch();
             $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


           // get your HTML raw content without any layouts or scripts
           $content = $this->renderPartial('cetak', [
               'searchModel' => $searchModel,
               'dataProvider' => $dataProvider,
           ]);

           // setup kartik\mpdf\Pdf component
           $pdf = new Pdf([
               // set to use core fonts only
               'mode' => Pdf::MODE_CORE,
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
               // any css to be embedded if required
               'cssInline' => '.kv-heading-1{font-size:18px}',
                // set mPDF properties on the fly
               'options' => ['title' => 'Krajee Report Title'],
                // call mPDF methods on the fly
                'methods' => [
                    'SetHeader'=>['LAPORAN BARANG MASUK||Dicetak Pada: ' . date("d-M-Y")],
                    'SetFooter'=>['|Halaman {PAGENO}|'],
               ]
           ]);

           // return the pdf output as per the destination setting
           return $pdf->render();
       }
   }
