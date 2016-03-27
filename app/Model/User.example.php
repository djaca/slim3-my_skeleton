<?php

    /***********************************************************/
    /*                  User example model                     */
    /***********************************************************/

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model as Eloquent;

    class User extends Eloquent
    {
        protected $table = 'users';

        protected $fillable = [
            'email',
            'password',
        ];
    }