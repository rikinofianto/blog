<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id_post
 * @property string $judul
 * @property string $kontent
 * @property string $gambar
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'kontent'], 'required'],
            [['kontent', 'gambar'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['judul'], 'string', 'max' => 255],
            [['created_by', 'updated_by'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_post' => 'Id Post',
            'judul' => 'Judul',
            'kontent' => 'Kontent',
            'gambar' => 'Gambar',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->created_at = date("Y-m-d H:i:s");
                $this->created_by = Yii::$app->user->identity->username;
            } else {
                $this->updated_at = date("Y-m-d H:i:s");
                $this->updated_by = Yii::$app->user->identity->username;
            }
            return true;
        } else {
            return false;
        }
    }

}
