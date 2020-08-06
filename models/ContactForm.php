<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $company;
    public $email;
    public $subject;
    public $body;
    // public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name,company, email, subject and body are required
            [['name', 'email', 'company', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            //['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
//            'verifyCode' => 'Подтвердите код',
            'name' => 'Имя',
            'email' => 'E-mail',
            'subject' => 'Тема',
            'company' => 'Компания',
            'body' => 'Сообщение',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($model)
    {

        if ($this->validate()) {
            return true;
        }
        return false;
    }
}
