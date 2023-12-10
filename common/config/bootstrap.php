<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@uploads', dirname(dirname(__DIR__)) . '/frontend/web/uploads');


/**
 * Tizimda mavjud bo'lgan tillarni belgilash uchun
 * foydalaniladigan funksiya
 *
 * @return string[] tizimda mavjud tillarni array sifatida qaytaradi
 */
function getSupportedLanguages(): array
{
    return ['en', 'ru'];
}

/**
 * Tizimning default tili qaysiligini belgilash uchun
 * foydalaniladigan funksiya
 *
 * @return string tizimning default tilini qaytaradi
 */
function getDefaultLanguage(): string
{
    return 'en';
}

/**
 * Tizimning default source code tili qaysiligini belgilash uchun
 * foydalaniladigan funksiya.
 * Qaysi til belgilansa tarjima fayllaridagi arrayning keyida
 * shu tilni ishlatish kerak. Aks holda tarjima ishlamaydi.
 * @return string tizimning default source code tilini qaytaradi
 */
function getSourceLanguage(): string
{
    return 'en';
}