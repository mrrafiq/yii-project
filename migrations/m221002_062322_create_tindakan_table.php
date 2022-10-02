<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tindakan}}`.
 */
class m221002_062322_create_tindakan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tindakan}}', [
            'id' => $this->primaryKey(),
            'pasien_id' => $this->integer()->notNull(),
            'obat_id' => $this->integer()->notNull(),
            'keterangan' => $this->text()
        ]);
        
        // foreign key for pasien
        $this->addForeignKey(
            'fk-pasien_id',
            'tindakan',
            'pasien_id',
            'pasien',
            'id',
            'CASCADE'
        );

        // foreign key for obat
        $this->addForeignKey(
            'fk-obat_id',
            'tindakan',
            'obat_id',
            'obat',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tindakan}}');
    }
}
