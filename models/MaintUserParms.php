<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maint_user_parms".
 *
 * @property int $user_id
 * @property string|null $page_name
 * @property string|null $pem_name
 */
class MaintUserParms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maint_user_parms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['page_name'], 'string', 'max' => 255],
            [['pem_name'], 'string', 'max' => 6],
            [['user_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'page_name' => 'Page Name',
            'pem_name' => 'Pem Name',
        ];
    }
}
