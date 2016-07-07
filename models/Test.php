<?php
namespace app\models;
use yii\db\ActiveRecord;

class Test extends ActiveRecord{

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['id', 'integer'],
            ['title', 'string','length'=>[0,5]],
        ];
    }
}