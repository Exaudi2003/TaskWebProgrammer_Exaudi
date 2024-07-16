<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id
 * @property string $nama
 * @property int $stok
 * @property float $harga
 * @property string $created_at
 */
class TblObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'stok', 'harga'], 'required'],
            [['stok'], 'integer'],
            [['harga'], 'number'],
            [['created_at'], 'safe'],
            [['nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'stok' => 'Stok',
            'harga' => 'Harga',
            'created_at' => 'Created At',
        ];
    }
}
