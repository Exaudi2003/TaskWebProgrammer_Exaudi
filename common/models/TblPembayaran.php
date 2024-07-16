<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id
 * @property int $pendaftaran_id
 * @property float $total_biaya
 * @property string|null $tanggal_bayar
 * @property string $status
 * @property string $created_at
 *
 * @property Pendaftaran $pendaftaran
 */
class TblPembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pendaftaran_id', 'total_biaya', 'status'], 'required'],
            [['pendaftaran_id'], 'integer'],
            [['total_biaya'], 'number'],
            [['tanggal_bayar', 'created_at'], 'safe'],
            [['status'], 'string'],
            [['pendaftaran_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pendaftaran::class, 'targetAttribute' => ['pendaftaran_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pendaftaran_id' => 'Pendaftaran ID',
            'total_biaya' => 'Total Biaya',
            'tanggal_bayar' => 'Tanggal Bayar',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Pendaftaran]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendaftaran()
    {
        return $this->hasOne(Pendaftaran::class, ['id' => 'pendaftaran_id']);
    }
}
