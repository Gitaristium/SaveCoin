<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Savecoin extends ActiveRecord
{
    public $sum, $cat, $date;

    public function attributeLabels()
    {
        return [
            'sum' => 'Сумма',
            'cat' => 'Категория',
            'date' => 'Дата',
        ];
    }

    public function rules()
    {
        return [
            [['sum', 'cat', 'date'], 'required', 'message' => 'Поле обязательно для заполнения'],
        ];
    }
}