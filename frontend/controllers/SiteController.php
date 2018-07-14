<?php
namespace frontend\controllers;

use Yii;

use yii\data\ActiveDataProvider;
use yii\helpers\Html;

use yii\web\Controller;
use yii\web\UploadedFile;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use yii\data\Pagination;

use frontend\models\SearchForm;
use frontend\models\News;
use frontend\models\Notifications;
use frontend\models\Events;
use frontend\models\Galery;
use frontend\models\Virtual;
use frontend\models\Rahbariyat;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function beforeAction($action)
    {
        $model = new SearchForm();
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $q = Html::encode($model->q);
            return $this->redirect(Yii::$app->urlManager->createUrl(['site/search', 'q' => $q]));
        }
        return true;
    }
    public function actions()
    {
        return [
            'error' => [
				'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $news = News::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();
        $events = Events::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();
        $notifications = Notifications::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();
        return $this->render('index',[
            'news' => $news,
            'events' => $events,
            'notifications' => $notifications,
        ]);
    }
	public function actionNews()
    {
        $news = News::find();
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $news->count(),
        ]);
        $news = $news->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('news',[
            'news' => $news,
            'pagination' =>$pagination,
        ]);
    }
    public function actionEvents()
    {
        $events = Events::find();
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $events->count(),
        ]);
        $events = $events->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('events',[
            'events' => $events,
            'pagination' =>$pagination,
        ]);
    }
    public function actionNotifications()
    {
        $notifications = Notifications::find();
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $notifications->count(),
        ]);
        $notifications = $notifications->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('notifications',[
            'notifications' => $notifications,
            'pagination' =>$pagination,
        ]);
    }
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionManaviy()
    {
        return $this->render('manaviy');
    }
    public function actionTarbiyaviy()
    {
        return $this->render('tarbiyaviy');
    }
    public function actionRahbariyat()
    {
        $rahbariyat = Rahbariyat::find();
        $dataProvider = new ActiveDataProvider([
            'query' => Rahbariyat::find()->orderBy('id DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $rahbariyat->count(),
        ]);
        $rahbariyat = $rahbariyat->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('rahbariyat',[
            'rahbariyat' => $rahbariyat,
            'pagination' =>$pagination,
            'dataProvider' => $dataProvider,
        ]);
    }
	public function actionGalery()
    {
        $photos = Galery::find()->all();
        return $this->render('galery',[
            'photos' => $photos,
        ]);
    }
    public function actionShow()
    {
        $get = (Yii::$app->request->get('id')) ? Yii::$app->request->get('id') : null ;
        $page = (Yii::$app->request->get('page')) ? Yii::$app->request->get('page') : null ;

        if($page==='news'){
            $show = News::find()->where(['id'=>$get])->one();
        }
        if($page==='evenst'){
            $show = Events::find()->where(['id'=>$get])->one();
        }
        if($page==='notifications'){
            $show = Notifications::find()->where(['id'=>$get])->one();
        }

        return $this->render('show',[
            'show' => $show,
            'page' => $page,
        ]);
    }
    public function actionSearch()
    {
        $q = Yii::$app->getRequest()->getQueryParam('q');
        $query = News::find()->where(['like','text',$q]);
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
        ]);
        $news = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('search',[
            'news' => $news,
            'q' => $q,
            'pagination' =>$pagination,
        ]);
    }
    public function actionVirtual()
    {
        $model = new Virtual();

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model,'file');
            $model->fayl = date('Y-m-d h:i:s').'.'.$model->file->extension;
            $model->file->saveAs(Url::to('@frontend/web/virtual/').$model->fayl);
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success');
            } else {
                Yii::$app->session->setFlash('error');
            }
            return $this->refresh();
        }
        else {
            return $this->render('virtual', [
                'model' => $model,
            ]);
        }
    }

}
