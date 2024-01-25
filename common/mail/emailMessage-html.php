<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\User $user */

?>
<div class="verify-email">
    <p>Bunyodbek aka sizga saytingizdan murojaat kelib tushdi!</p>

    <p>FIO: <?= $contactModel->fio;?></p>
    <p>Tug'ilgan joyi: <?= $contactModel->birth_place;?></p>
    <p>Manzil: <?= $contactModel->address;?></p>
    <p>Email: <?= $contactModel->email;?></p>
    <p>Telefon raqami: <?= $contactModel->phone_number;?></p>
    <p>Xabar: <?= $contactModel->message;?></p>

</div>
