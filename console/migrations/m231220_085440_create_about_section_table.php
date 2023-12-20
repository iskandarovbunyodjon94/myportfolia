<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about_section}}`.
 */
class m231220_085440_create_about_section_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about_section}}', [
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
        $this->dropTable('{{%about_section}}');
    }
}
