<?php
include 'UserDTO.php';
$test = new UserDTO;
$value = new User();

print_r($test->getAllUsers());


echo "<br/> <hr/>";
for($counter = 0; $counter <count($test->getAllUsers()); $counter++){
 $decoded = json_decode( $test->getAllUsers()[$counter], TRUE );
 print_r($decoded);
 echo "<br/> <hr/>";
}

?>