<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AboutSection $model */

$this->title = 'Create About Section';
$this->params['breadcrumbs'][] = ['label' => 'About Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-section-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
