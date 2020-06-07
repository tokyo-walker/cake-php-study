<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UserTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('email', false)
            ->allowEmptyString('name', false)
            ->allowEmptyString('sex', false)
            ->allowEmptyString('phone_number', false);

        return $validator;
    }
}
