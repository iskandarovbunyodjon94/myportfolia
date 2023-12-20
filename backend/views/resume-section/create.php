<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ResumeSection $model */

$this->title = 'Create Resume Section';
$this->params['breadcrumbs'][] = ['label' => 'Resume Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-section-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
