Server Page

<?php
    echo '<pre />';
    
    var_dump($_REQUEST);
    echo '<pre />';
    // var_dump($_POST);
    var_dump($_FILES);

    echo "I'm". $_POST['fName'];
    echo "I'm {$_POST['fName']}";

?>