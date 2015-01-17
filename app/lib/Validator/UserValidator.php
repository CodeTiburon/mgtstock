<?php
namespace Stock\Validator;

use Zizaco\Confide;

class UserValidator extends Confide\UserValidator implements Confide\UserValidatorInterface
{
    /**
     * Validation rules for user
     *
     * @var array
     */
    public $rules = [
        'create' => [
            'email'    => 'required|email',
            'password' => 'required|min:4',
        ],
        'update' => [
            'email'    => 'required|email',
            'password' => 'required|min:4',
        ]
    ];
    
  
}




