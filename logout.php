//<?php

// session_start();
// $_SESSION = [];
// session_unset();
// session_destroy();

// header('location: index.php');

//?>

<?php

    @include 'config.php';

    session_start();
    session_unset();
    session_destroy();

    header('location:index.php');

?>