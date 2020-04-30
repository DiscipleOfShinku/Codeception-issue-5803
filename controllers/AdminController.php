<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;

class AdminController extends Controller
{
    public function actionIndex()
    {
        return $this->redirect('/admin/edit?id=1');
    }

    public function actionView(int $id)
    {
        $model = User::findOne($id);

        return $this->render('view', ['model' => $model]);
    }

    public function actionEdit(int $id)
    {
        $model = User::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/admin/view?id=' . $model->id]);
        }

        $params = ['model' => $model, 'title' => $model->username];

        return $this->render('edit', $params);
    }
}
