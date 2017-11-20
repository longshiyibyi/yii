<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $view = YII::$app->view;
        if (Yii::$app->request->isPost) {
            $session = \Yii::$app->session;
            $User = Yii::$app->request->post("User");
            $Pass = strEncryption(Yii::$app->request->post("Pass"));
            $info = (new \yii\db\Query())->select([])->from('manage')->where(['username' => $User, 'manage_pwd' => $Pass])->one();
            if ($info) {
                $session->set('s_hash', $info['s_hash']);
                $view->params['message'] = '登陆成功!';
                $view->params['jumpUrl'] = '/sysindex';
                $this->layout = '@app/views/layouts/jump.php';
                return $this->render('jump');
            } else {
                $view->params['message'] = '登陆失败!';
                $view->params['jumpUrl'] = '/';
                $this->layout = '@app/views/layouts/jump.php';
                return $this->render('jump');
            }
        } else {
            $this->layout = '@app/views/layouts/index.php';
            $this->getView()->title = "后台管理系统";
            return $this->render('index');
        }
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionWelcome()
    {
        $view = YII::$app->view;
        $this->layout = '@app/views/layouts/public.php';
        $view->params['ATTR_SERVER_VERSION'] = Yii::$app->db->pdo->getAttribute(\PDO::ATTR_SERVER_VERSION);
        $view->params['getUserHostAddress'] = Yii::$app->request->userIP;
        return $this->render('welcome');
    }

    public function actionSysindex()
    {
        $view = YII::$app->view;
        $session = \Yii::$app->session;
        $s_hash = $session->get('s_hash');
        $list = (new \yii\db\Query())->select([])->from('nav')->orderBy("v_sort desc")->all();
        $nk = 0;
        foreach ($list as $k => $v) {
            $nk = $nk + 1;
            $list [$k] ['k'] = $nk;
            $keyword = $list[$k]['keyword'];
            $nlist = (new \yii\db\Query())->select([])->from('nav_list')->where(['keyword' => $keyword])->orderBy("v_sort desc")->all();
            foreach ($nlist as $m => $n) {
                $nk = $nk + 1;
                $nlist [$m] ['k'] = $nk;
            }
            $list[$k]['nlist'] = $nlist;
        }
        $view->params['info'] = (new \yii\db\Query())->select([])->from('manage')->where(['s_hash' => $s_hash])->one();
        $view->params['list'] = $list;
        $this->layout = '@app/views/layouts/sysindex.php';
        $this->getView()->title = "后台管理系统";
        return $this->render('sysindex');
    }

    public function actionLogoout()
    {
        $session = \Yii::$app->session;
        $session->set('s_hash', "");
        return $this->redirect('/')->send();
    }

    public function behaviors()
    {
        $session = \Yii::$app->session;
        $s_hash = $session->get('s_hash');
        $action = Yii::$app->controller->action->id;
        $info = (new \yii\db\Query())->select([])->from('manage')->where(['s_hash' => $s_hash])->one();
        if (!$info and $action != "index") {
            return $this->redirect('/')->send();
        } else {
            return [];
        }
    }
}

//$Query->createCommand()->getRawSql();