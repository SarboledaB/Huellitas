<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory;

    //attributes id, name, price, created_at, updated_at
    protected $fillable = ['username', 'password', 'firstName', 'lastName', 'email'];

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getUsername(){
        return $this->attributes['username'];
    }
    
    public function setUsername($username){
        $this->attributes['username'] = $username;
    }

    public function getPassword(){
        return $this->attributes['password'];
    }

    public function setPassword($password){
        $this->attributes['password'] = $password;
    }

    public function getFirstName(){
        return $this->attributes['firstName'];
    }
    
    public function setFirstName($firstName){
        $this->attributes['firstName'] = $firstName;
    }
    
    public function getLastName(){
        return $this->attributes['lastName'];
    }
    
    public function setLastName($lastName){
        $this->attributes['lastName'] = $lastName;
    }
    
    public function getEmail(){
        return $this->attributes['email'];
    }
    
    public function setEmail($email){
        $this->attributes['email'] = $email;
    }
}
