<?php

function validateUser($user){
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username is required');
    }

    if (empty($user['email'])){
        array_push($errors, 'email is required');
    }

    if (empty($user['password'])){
        array_push($errors, 'password is required');
    }

    if ($user['password'] !== $user['passwordConf']){
        array_push($errors, 'Passwords do not match');
    }

    // $existingUser = selectOne('users', ['email' => $user['email']]);
    // if ($existingUser){
    //     array_push($errors, 'Email already exists');
    // }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser){
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }

        if(isset($user['create-admin'])){
            array_push($errors, 'Email already exists');
        }
    }

    return $errors;
}


function validateLogin($user){
    $errors = array();

    if (empty($user['email'])){
        array_push($errors, 'email is required');
    }

    if (empty($user['password'])){
        array_push($errors, 'password is required');
    }

    return $errors;
}
