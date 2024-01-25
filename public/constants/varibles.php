<?php

function Default_user_photo_folder($user) : string {
    $dir = "usr/img/$user/";
    if (!file_exists($dir)) {
        mkdir($dir, 0700);
    }
    return $dir;
    
}