<?php

namespace mehmetalperen95\manav;

use Yii;

/**
 * This is the model class for table "meyveler".
 *
 * @property int $id
 * @property string|null $isim
 * @property string|null $hasatYeri
 * @property int|null $fiyat
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Meyveler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meyveler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'hasatYeri'], 'string'],
            [['fiyat'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'hasatYeri' => 'Hasat Yeri',
            'fiyat' => 'Fiyat',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
