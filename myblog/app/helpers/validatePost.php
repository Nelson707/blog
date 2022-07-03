<?php

function validatePost($post){
    $errors = array();

    if (empty($post['title'])){
        array_push($errors, 'post title is required');
    }

    if (empty($post['body'])){
        array_push($errors, 'post body is required');
    }

    if (empty($post['topic_id'])){
        array_push($errors, 'please select a topic');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost){
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Post with that title already exists');
        }

        if(isset($post['add-post'])){
            array_push($errors, 'Post with that title already exists');
        }
    }

    return $errors;
}