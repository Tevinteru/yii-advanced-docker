<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $group
 * @property int $height
 * @property string $birth_date
 * @property float $average_score
 * @property int $library_member
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'group', 'height', 'birth_date', 'average_score', 'library_member'], 'required'],
            [['height', 'library_member'], 'integer'],
            [['birth_date'], 'safe'],
            [['average_score'], 'number'],
            [['first_name', 'last_name', 'group'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'group' => 'Group',
            'height' => 'Height',
            'birth_date' => 'Birth Date',
            'average_score' => 'Average Score',
            'library_member' => 'Library Member',
        ];
    }
}
