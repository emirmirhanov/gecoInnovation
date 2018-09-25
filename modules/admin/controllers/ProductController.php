<?php

namespace app\modules\admin\controllers;

use app\modules\admin\forms\ProductForm;
use app\modules\admin\readModels\ProductReadModel;
use app\modules\admin\search\ProductSearch;
use app\modules\admin\services\ProductManageService;
use Yii;
use app\modules\admin\entities\Category;
use app\modules\admin\search\CategorySearch;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 * @property ProductManageService $manageService
 * @property ProductReadModel $products
 */
class ProductController extends Controller
{
    public $manageService;
    public $products;

    public function __construct(
        string $id,
        $module,
        ProductManageService $service,
        ProductReadModel $readModel,
        array $config = []
    )
    {
        $this->manageService = $service;
        $this->products = $readModel;
        parent::__construct($id, $module, $config);
    }

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
     * @return string
     * @throws \yii\base\InvalidArgumentException
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     * @throws \yii\base\InvalidArgumentException
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * @return string|\yii\web\Response
     * @throws \yii\base\InvalidArgumentException
     */
    public function actionCreate()
    {
        $form = new ProductForm();

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try{
                $product = $this->manageService->create($form);
                Yii::$app->session->setFlash('success', 'Категория успешно добавлен!');
                return $this->redirect(['view', 'id' => $product->id]);
            }catch (\Exception $e)
            {
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('create', [
            'form' => $form,
        ]);
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\base\InvalidArgumentException
     */
    public function actionUpdate($id)
    {
        $product = $this->products->find($id);
        $form = new ProductForm($product);
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $this->manageService->edit($product->id, $form);
                Yii::$app->session->setFlash('success', 'Категория успешно отредактировано!');
                return $this->redirect(['view', 'id' => $product->id]);
            } catch (\Exception $e) {
                Yii::$app->session->setFlash('error', $e->getMessage());
            } catch (\Throwable $e) {
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }
        return $this->render('update', [
            'form' => $form,
            'product' => $product,
        ]);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
