<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\User */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = $title;

$this->params['breadcrumbs'][] = [
    'label' => 'Admins',
    'url' => '/admin',
];
$this->params['breadcrumbs'][] = $title;

?>
<div>
    <h1><?= Html::encode($title) ?></h1>

    <div class="row col-lg-4">

        <?php $form = ActiveForm::begin(['id' => 'admin-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput(['value' => '']) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
            </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
