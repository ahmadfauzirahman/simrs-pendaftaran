<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maint_user_perms".
 *
 * @property int $user_id
 * @property string $page_name
 * @property string $perm_name
 */
class MaintUserPerms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maint_user_perms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'page_name', 'perm_name'], 'required'],
            [['user_id'], 'integer'],
            [['page_name'], 'string', 'max' => 255],
            [['perm_name'], 'string', 'max' => 6],
            [['user_id', 'page_name', 'perm_name'], 'unique', 'targetAttribute' => ['user_id', 'page_name', 'perm_name']],
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
            'perm_name' => 'Perm Name',
        ];
    }
}
