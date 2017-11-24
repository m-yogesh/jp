<?php
include 'UserDTO.php';
$test = new UserDTO;
$value = new User();

$html = "<table>";
echo "<br/> <hr/>";
for($counter = 0; $counter <count($test->getAllUsers()); $counter++){
 $decoded = json_decode( $test->getAllUsers()[$counter], True );
 print_r($decoded);
 $html .= "<tr>";
 $html .= "<td>".$decoded['Useruser_Id']."</td>";
 $html .= "<td>".$decoded['UserlastName']."</td>";
 $html .= "<td>".$decoded['Useraddress']."</td>";
 $html .= "<td>".$decoded['Userpassword']."</td>";
 $html .= "<td>".$decoded['Useremail']."</td>";
 $html .= "<td>".$decoded['UserlastTimeAccess']."</td>";
 $html .= "<td>".$decoded['Usertype']."</td>";
 $html .= "</tr>";
}
$html = "<table>";

?>