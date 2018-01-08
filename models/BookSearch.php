<?php
namespace kouosl\search\models;
use Yii;

class Search extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book_id';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'varchar'],
            [['user_id'], 'integer','max' => 11],
            [['isim'], 'string'],
            [['yayınevi'], 'string'],
            [['tarih'], 'date'],
            [['cevirmen'], 'string'],
            [['yazar_ad'], 'string'],
            [['yazar_soyad'], 'string'],
            [['yazar_id'], 'integer'],
            
        ];
    }
    /**
     * @inheritdo
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'USER_ID',
            'isim' => 'ISIM',
            'yayınevi' => 'YAYINEVI',
            'tarih' => 'TARIH',
            'cevirmen' => 'CEVIRMEN',
            'yazar_ad' => 'YAZAR_AD',
            'yazar_soyad' => 'YAZAR_SOYAD',
            'yazar_id' => 'YAZAR_ID',
			
        ];
    }
}
