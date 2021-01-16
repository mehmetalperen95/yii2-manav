<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210102_135916_manav
 */
class m210102_135916_manav extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        return $this->createTable('meyveler', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'isim' => Schema::TYPE_TEXT,
            'hasatYeri' => Schema::TYPE_TEXT,
            // $this->string(255) // String with 255 characters
            'fiyat' => Schema::TYPE_INTEGER,
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
        return $this->dropTable('meyveler');
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
