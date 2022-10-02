<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%passien}}`.
 */
class m221002_062141_create_pasien_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pasien', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pasien');
    }
}
