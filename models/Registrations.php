<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registrations".
 *
 * @property int $SN
 * @property string $Name
 * @property string $Email
 * @property string $Phone
 * @property string $Comments
 */
class Registrations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registrations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Email', 'Phone', 'Comments'], 'required'],
            [['Comments'], 'string'],
            [['Name', 'Email'], 'string', 'max' => 255],
            [['Phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SN' => 'Sn',
            'Name' => 'Name',
            'Email' => 'Email',
            'Phone' => 'Phone',
            'Comments' => 'Comments',
        ];
    }
}
