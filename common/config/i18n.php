<?php

return [
    'sourcePath' => __DIR__ . DIRECTORY_SEPARATOR . '../../',
    'languages' => getSupportedLanguages(),
    'translator' => 'Yii::t',
    'sort' => false,
    'removeUnused' => false,
    'markUnused' => true,
    'only' => ['*.php', '/common', '/frontend', '/backend'],
    'except' => [
    '.svn',
    '.git',
    '.gitignore',
    '.gitkeep',
    '.hgignore',
    '.hgkeep',
    '/environments',
    '/vendor',
    '/console'
],

    // 'php' output format is for saving messages to php files.
    'format' => 'php',
    // Root directory containing message translations.
    'messagePath' => __DIR__ . DIRECTORY_SEPARATOR . '../messages',
    // boolean, whether the message file should be overwritten with the merged messages
    'overwrite' => true,


    // Message categories to ignore
    'ignoreCategories' => [
    'yii',
],
];