<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Zizaco\Entrust\HasRole;


class User extends Eloquent implements UserInterface, RemindableInterface, ConfideUserInterface {

	use ConfideUser, HasRole;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
        
        /**
         * User following relationship
         */
        public function follow()
        {
          return $this->belongsToMany('User', 'user_follows', 'user_id', 'follow_id');
        }
        
        /**
         * User followers relationship
         */
        public function followers()
        {
          return $this->belongsToMany('User', 'user_follows', 'follow_id', 'user_id');
        }

}
