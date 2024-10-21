<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $middle_name
 * @property string $birth_date
 * @property string $subject
 * @property string $education
 * @property int $experience
 * @property string $phone
 * @property string $email
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'birth_date', 'subject', 'education', 'experience', 'phone', 'email'], 'required'],
            [['birth_date'], 'safe'],
            [['experience'], 'integer'],
            [['first_name', 'last_name', 'middle_name', 'subject', 'education', 'phone', 'email'], 'string', 'max' => 255],
            [['email'], 'unique'],
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
            'middle_name' => 'Middle Name',
            'birth_date' => 'Birth Date',
            'subject' => 'Subject',
            'education' => 'Education',
            'experience' => 'Experience',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }
}
