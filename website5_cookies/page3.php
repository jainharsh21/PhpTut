<?php
    $user = ['name' => 'Harsh', 'email' => 'test@test.com', 'age' => 35];

    // serialize would help us to store array as a cookie
    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));

    // and we can unserialize it again to view the original data
    $user =  unserialize($_COOKIE['user']);

    print_r($user);
