<?php
namespace furkanaydgn\deneme\models;

use Yii;

/**
 * This is the model class for table "yolcu".
 *
 * @property int $uid
 * @property string $userssim
 * @property string $useroyisim
 * @property int|null $useryas
 * @property string $usercinsiyet
 * @property int|null $fid
 * @property int|null $biletsayisi
 *
 * @property Firma $f
 */
class Alinanbiletler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yolcu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userssim', 'useroyisim', 'usercinsiyet'], 'required'],
            [['useryas', 'fid', 'biletsayisi'], 'integer'],
            [['userssim', 'useroyisim', 'usercinsiyet'], 'string', 'max' => 255],
            [['fid'], 'exist', 'skipOnError' => true, 'targetClass' => kullanici::className(), 'targetAttribute' => ['fid' => 'fid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Kullanıcı İd',
            'userssim' => 'Kullanici Isim',
            'useroyisim' => 'İsim',
            'useryas' => 'Yaş',
            'usercinsiyet' => 'Cinsiyet',
            'fid' => 'Firma Id',
            'biletsayisi' => 'Alınan bilet sayisi',
        ];
    }

    /**
     * Gets query for [[F]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getF()
    {
        return $this->hasOne(Firma::className(), ['fid' => 'fid']);
    }
}