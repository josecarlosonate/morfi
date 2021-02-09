<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable implements JWTSubject {
 use Notifiable;
 protected $fillable = [
 'id','name', 'email', 'password','role_id',
 ];
 protected $hidden = [
 'password', 'remember_token',
 ];
 protected $casts = [
 'email_verified_at' => 'datetime',
 ];
 // relacion usuario y tabla rol
 public function role(){
    return $this->belongsTo(Role::class);
}
 public function getJWTIdentifier() {
 return $this->getKey();
 }
 public function getJWTCustomClaims() {
 return [];
 }
}
