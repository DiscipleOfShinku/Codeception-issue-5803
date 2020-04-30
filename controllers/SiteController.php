<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
            Yii::$app->user->login(User::findOne(1));

        return $this->redirect('/admin/edit?id=1');
    }
}
