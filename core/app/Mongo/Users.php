<?php
namespace App\Mongo;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent {

    protected $connection = 'mongodb';

    

}