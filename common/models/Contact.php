<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string|null $fio
 * @property string|null $birth_place
 * @property string|null $address
 * @property string|null $message
 * @property string|null $phone_number
 * @property string|null $email
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address', 'message'], 'string'],
            [['fio', 'birth_place', 'phone_number', 'email'], 'string', 'max' => 255],
            [['address', 'message', 'fio', 'birth_place', 'phone_number', 'email'], 'required'],
            [['email'], 'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'birth_place' => 'Birth Place',
            'address' => 'Address',
            'message' => 'Message',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
        ];
    }

    public function sendEmail($contactModel)
    {

        $contactModel = Contact::findOne(['id' => $contactModel->id]);

        if ($contactModel === null) {
            return false;
        }

            return Yii::$app
                ->mailer
                ->compose(
                    ['html' => 'emailMessage-html', 'text' => 'emailMessage-text'],
                    ['contactModel' => $contactModel]
                )
                ->setFrom(['devops2024@mail.ru' => 'Iskandarovs'])
                ->setTo(['bunyodbek9449@gmail.com'])
                ->setSubject('Bunyodbek sizda yangi xabar')
                ->send();

    }
}
