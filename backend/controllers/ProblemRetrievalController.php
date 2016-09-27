<?php

namespace backend\controllers;

use Yii;
use common\models\ProblemRetrieval;
use backend\models\ProblemRetrievalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProblemRetrievalController implements the CRUD actions for ProblemRetrieval model.
 */
class ProblemRetrievalController extends Controller
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
     * Lists all ProblemRetrieval models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProblemRetrievalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProblemRetrieval model.
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
     * Creates a new ProblemRetrieval model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProblemRetrieval();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->problem_retrieval_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProblemRetrieval model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = ProblemRetrieval::findOne(['problem_id' => $id]);
        if(!empty($model)){
            if (Yii::$app->request->post() ) {
                $post = Yii::$app->request->post()['ProblemRetrieval'];
                $model->Secondary_diagnoses = 1;
                $model->Symptoms=  $post['Symptoms'];
                $model->Initial_diagnose=  $post['Initial_diagnose'];
                $model->main_diagnose=  $post['main_diagnose'];
                $model->Status=  $post['Status'];
                $model->save();
                return $this->redirect(['patients/view', 'id' => Yii::$app->request->get('p_id')]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }else{
            $model = new ProblemRetrieval();

            if (Yii::$app->request->post() && Yii::$app->request->get('id')) {
                print_r(Yii::$app->request->post());
                $model->load(Yii::$app->request->post());
                $model->problem_id = Yii::$app->request->get('id');
                $post = Yii::$app->request->post()['ProblemRetrieval'];
                $model->Secondary_diagnoses = 1;
                $model->Symptoms=  $post['Symptoms'];
                $model->Initial_diagnose=  $post['Initial_diagnose'];
                $model->main_diagnose=  $post['main_diagnose'];
                $model->Status=  $post['Status'];

                if($model->save()){
                    return $this->redirect(['patients/view', 'id' => Yii::$app->request->get('p_id')]);
                }else{
                    exit;
                }

            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);

    }

    /**
     * Deletes an existing ProblemRetrieval model.
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
     * Finds the ProblemRetrieval model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProblemRetrieval the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProblemRetrieval::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
