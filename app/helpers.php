<?php
declare(strict_types=1);

use Tymon\JWTAuth\Facades\JWTAuth;

function stringGet() {
    return "hello";
}

function authJWT() :array {
    try {
        $user = JWTAuth::parseToken()->authenticate();
        if($user) {
            return $user;
        }
    } catch (Exception $e) {
        return [];
    }
    return [];
}