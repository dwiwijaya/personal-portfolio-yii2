<?php

namespace app\controllers;

use app\models\Project;
use app\models\ProjectDetail;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProjectController implements the CRUD actions for Project model.
 */
class ProjectController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['create', 'update', 'delete', 'view', 'index'],
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Project models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Project::find(),
            'pagination' => [
                'pageSize' => 10
            ],
            'sort' => [
                'defaultOrder' => [
                    'order' => SORT_ASC,
                ]
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Project model.
     * @param string $name Name
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'modeldet' => ProjectDetail::find()->where(['idproject' => $id])->one()
        ]);
    }

    public function actionDetail($id)
    {
        $model = Project::getDetail($id);
        return $this->render('viewdetail', [
            'model' => $model

        ]);
    }

    /**
     * Creates a new Project model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (Yii::$app->request->isAjax) {
            $urlfrom = 'create';

            $model = new Project();
            $modeldet = new ProjectDetail();
            return $this->renderAjax('create', [
                'model' => $model,
                'modeldet' => $modeldet,
                'urlfrom' => $urlfrom
            ]);
        }
        $model = new Project();
        $modeldet = new ProjectDetail();
        if ($model->load($this->request->post()) && $modeldet->load($this->request->post())) {
            if ($model->arch != null) {
                $arch = implode(', ', $model->arch);
                $model->architecture = $arch;
            }
            $model->idproject = uniqid();
            $modeldet->idproject = $model->idproject;
            $filedet = UploadedFile::getInstance($modeldet, 'filedet');

            if (!empty($filedet)) {
                $filename = $model->name . '-detail' . '.' . $filedet->extension;
                $modeldet->img = $filename;
                $filedet->saveAs('./img/project/' . $filename);
            }

            if ($model->save()) {
                $modeldet->save();
            }
            return $this->redirect(['view', 'id' => $model->idproject]);
        }
    }

    /**
     * Updates an existing Project model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $name Name
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modeldet = ProjectDetail::find()->where(['idproject' => $id])->one();
        $olddetail = $modeldet->img;
        $urlfrom = 'update';
        if ($this->request->isPost && $model->load($this->request->post()) && $modeldet->load($this->request->post())) {

            if ($model->arch != null) {
                $arch = implode(', ', $model->arch);
                $model->architecture = $arch;
            }
            $filedet = UploadedFile::getInstance($modeldet, 'filedet');

            if (!empty($filedet)) {
                if (is_file('./img/project/' . $olddetail)) {
                    unlink('./img/project/' . $olddetail);
                }
                $filename = $model->name . '-detail' . '.' . $filedet->extension;
                $modeldet->img = $filename;
                $filedet->saveAs('./img/project/' . $filename);
            }
            if ($model->save(false)) {
                $modeldet->save(false);
            }
            return $this->redirect(['view', 'id' => $model->idproject]);
        }

        return $this->render('update', [
            'model' => $model,
            'modeldet' => $modeldet,
            'urlfrom' => $urlfrom,
        ]);
    }

    /**
     * Deletes an existing Project model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $name Name
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $modeldet = ProjectDetail::find($id)->one();
        if (is_file('./img/project/' . $modeldet->img)) {
            unlink('./img/project/' . $modeldet->img);
        }
        $model->delete();
        $modeldet->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Project model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $name Name
     * @return Project the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Project::findOne(['idproject' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    protected function findModeldet($id)
    {
        if (($model = ProjectDetail::findOne(['idproject' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
