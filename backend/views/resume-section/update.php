<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ResumeSection $model */

$this->title = 'Update Resume Section: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Resume Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resume-section-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
