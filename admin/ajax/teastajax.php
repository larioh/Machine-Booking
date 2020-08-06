<?php
// This is where you would do any database call
if(!empty($_POST)) {
    // Send back a jSON array via echo
    echo json_encode(array("phone"=>'123-12313',"email"=>'test@test.com','city'=>'Medicine Hat','address'=>'556 19th Street NE'));
    // Exit probably not required if you
    // separate out your code into two pages
    exit;
}
?>