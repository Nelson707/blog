<?php

function validateTopic($topic){
    $errors = array();

    if (empty($topic['name'])){
        array_push($errors, 'Topic Name is required');
    }

    // $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    // if ($existingTopic){
    //     array_push($errors, 'Topic already exists');
    // }

    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic){
        if (isset($post['update-topic']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'Name already exists');
        }

        if(isset($post['add-topic'])){
            array_push($errors, 'Post with that title already exists');
        }
    }

    return $errors;
}
