<?php

namespace furkanaydgn\deneme\models;

use Yii;

/**
 * This is the model class for table "firma".
 *
 * @property int $fid
 * @property string $fad
 * @property string $kalkisnoktasi
 * @property string $varisnoktasi
 * @property int|null $biletucret
 * @property string|null $cagrımerkezi
 * @property int|null $koltuksayisi
 */
class Firmalistesi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'firma';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fad', 'kalkisnoktasi', 'varisnoktasi'], 'required'],
            [['biletucret', 'koltuksayisi'], 'integer'],
            [['fad', 'kalkisnoktasi', 'varisnoktasi', 'cagrımerkezi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fid' => 'Firma Id',
            'fad' => 'Frma Adı',
            'kalkisnoktasi' => 'Kalkış Noktası',
            'varisnoktasi' => 'Varış Noktası',
            'biletucret' => 'Bilet Ücreti',
            'cagrımerkezi' => 'Çağrı Merkezi',
            'koltuksayisi' => 'Kalan Koltuk Sayısı',
        ];
    }
}