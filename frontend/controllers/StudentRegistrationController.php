<?php

namespace frontend\controllers;

use Yii;
use common\models\StudentRegistration;
use common\models\StudentRegistrationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\SignupForm;
use yii\helpers\ArrayHelper;

/**
 * StudentRegistrationController implements the CRUD actions for StudentRegistration model.
 */
class StudentRegistrationController extends Controller
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
     * Lists all StudentRegistration models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentRegistrationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StudentRegistration model.
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
     * Creates a new StudentRegistration model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StudentRegistration();
        $signupModel = new SignupForm();

        if (Yii::$app->request->post()) {
            
            $username = Yii::$app->request->post()['StudentRegistration']['phoneNumber'];
            $email = Yii::$app->request->post()['SignupForm']['email'];
            $password = 'student';
            $studentData = Yii::$app->request->post()['StudentRegistration'];
            if ($model->load($studentData) && $model->save()) {
                return $this->redirect(['index']);
            }             
            $studentData = array('StudentRegistration'=>ArrayHelper::merge($studentData, ['userId'=>$signupModel->autoSignup($username,$email,$signupModel)]));
            
        }

        return $this->render('create', [
            'model' => $model,
            'signupModel'=>$signupModel,
        ]);
    }

    /**
     * Updates an existing StudentRegistration model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->studentRegistrationId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StudentRegistration model.
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
     * Finds the StudentRegistration model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudentRegistration the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudentRegistration::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
