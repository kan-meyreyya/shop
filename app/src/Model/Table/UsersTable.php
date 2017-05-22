<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('users');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }
}