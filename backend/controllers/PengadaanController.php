<?php

namespace backend\controllers;

use Yii;
use backend\models\Pengadaan;
use backend\models\Barang;
use backend\models\PengadaanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;


/**
 * PengadaanController implements the CRUD actions for Pengadaan model.
 */
class PengadaanController extends Controller
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
     * Lists all Pengadaan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PengadaanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pengadaan model.
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
     * Creates a new Pengadaan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pengadaan();

        if ($model->load(Yii::$app->request->post())){
            $model->status_pengadaan='BelumProses';

            $model->save();
            return $this->redirect(['view', 'id' => $model->id_pengadaan]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pengadaan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pengadaan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pengadaan model.
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
     * Finds the Pengadaan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pengadaan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pengadaan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

       public function actionProses($id)
        {
          $brg = new Barang();

            $model = $this->findModel($id);
            $model->status_pengadaan='Proses';
            $model->Tanggal=Date('Y-m-d H:i:s');

            if ($model->save()){
            $brg =
            //$brg = $model-
            $brg->save();
          }
            return $this->redirect(['view', 'id' => $model->id_pengadaan]);

        }


              public function actionReport() {

                $searchModel = new PengadaanSearch();
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
                       'SetHeader'=>['LAPORAN PENGADAAN SPAREPART MOTOR AHASS SARIJADI||Dicetak Pada: ' . date("d-M-Y")],
                       'SetFooter'=>['|Halaman {PAGENO}|'],
                  ]
              ]);

              // return the pdf output as per the destination setting
              return $pdf->render();
          }
      }
