<?php

namespace mehmetalperen95\manav;

use Yii;

/**
 * This is the model class for table "firmalar".
 *
 * @property int $firmaid
 * @property string|null $firmaisim
 * @property string|null $lokasyon
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Firmalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'firmalar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firmaisim', 'lokasyon'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'firmaid' => 'ID',
            'firmaisim' => 'Isim',
            'lokasyon' => 'Lokasyon',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
