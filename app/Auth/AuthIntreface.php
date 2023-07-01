<?php
namespace App\Auth;

interface HasAuthentiacible{
    public static function login(array $creadintials);
    public static function logout();

}