<?php

use yii\db\Migration;

/**
 * Class m221002_077133_init_rbac
 */
class m221002_077133_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $viewObat = $auth->createPermission('viewObat');
        $viewObat->description = 'Melihat data Obat';
        $auth->add($viewObat);

        $viewPasien = $auth->createPermission('viewPasien');
        $viewPasien->description = 'Melihat data Pasien';
        $auth->add($viewPasien);

        $viewTindakan = $auth->createPermission('viewTindakan');
        $viewTindakan->description = 'Melihat data Tindakan';
        $auth->add($viewTindakan);

        $pegawai = $auth->createRole('pegawai');
        $auth->add($pegawai);
        $auth->addChild($pegawai, $viewPasien);
        $auth->addChild($pegawai,$viewObat);
        $auth->addChild($pegawai,$viewTindakan);
        

        $user = $auth->createRole('user');
        $auth->add($user);

        $auth->assign($pegawai, 100);
        $auth->assign($user, 101);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221002_055731_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
