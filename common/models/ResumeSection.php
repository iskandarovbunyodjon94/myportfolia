<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "resume_section".
 *
 * @property int $id
 * @property string|null $content_en
 * @property string|null $content_ru
 * @property int|null $status
 */
class ResumeSection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resume_section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_en', 'content_ru'], 'string'],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content_en' => 'Content En',
            'content_ru' => 'Content Ru',
            'status' => 'Status',
        ];
    }
}
