<?php
if (isset($_GET['pages'])) {
    switch ($_GET['pages']) {
        case 'classes':
            require 'exercise_1_classes.php';
            break;
        case 'extending':
            require 'exercise_2_extending.php';
            break;
        case 'private':
            require 'exercise_3_private.php';
            break;
        case 'protected':
            require 'exercise_4_protected.php';
            break;
        case 'public':
            require 'exercise_5_public.php';
            break;
        case 'const':
            require 'exercise_6_const.php';
            break;
        case 'static':
            require 'exercise_7_static.php';
            break;
        default:
            echo 'Hello World';
            break;
    }
} else {
    require 'pageSelector.php';
}
