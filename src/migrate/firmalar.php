<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class firmalar
 */
class firmalar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        return $this->createTable('firmalar', [
            'firmaid' => Schema::TYPE_PK,
            // $this->primaryKey()
            'firmaisim' => Schema::TYPE_TEXT,
            'lokasyon' => Schema::TYPE_TEXT,
            // $this->string(255) // String with 255 characters
            'created_at' => Schema::TYPE_DATETIME,
            // $this->integer()
            'updated_at' => Schema::TYPE_DATETIME
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('firmalar');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210102_135916_manav cannot be reverted.\n";

        return false;
    }
    */
}
