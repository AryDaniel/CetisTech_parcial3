<?php
    session_start();
    session_unset();

    echo '<script>';
        echo 'window.location="../index.php";';
    echo '</script>';

?>