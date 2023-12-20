<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%resume_section}}`.
 */
class m231220_085448_create_resume_section_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%resume_section}}', [
            'id' => $this->primaryKey(),
            'content_en' => $this->getDb()->getSchema()->createColumnSchemaBuilder('longtext'),
            'content_ru' => $this->getDb()->getSchema()->createColumnSchemaBuilder('longtext'),
            'status' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%resume_section}}');
    }
}
