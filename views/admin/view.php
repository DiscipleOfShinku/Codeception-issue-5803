<?php

/* @var $this yii\web\View */
/* @var $model app\models\User */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = $model->username;

$this->params['breadcrumbs'][] = [
    'label' => 'Admins',
    'url' => '/admin',
];
$this->params['breadcrumbs'][] = $model->username;

?>
<div>
    <h1><?= Html::encode($model->username) ?></h1>

    <div class="row col-lg-6">

        <?php $form = ActiveForm::begin([
            'method' => 'get',
            'action' => ['/admin/edit?id=' . $model->id],
        ]); ?>

            <div class="form-group">
                <?= Html::submitButton('Edit', ['class' => 'btn btn-primary']) ?>
            </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
