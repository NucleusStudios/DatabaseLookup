<?php
error_reporting(0);
$users = file("file.txt");
	foreach ($users as $user) {
	list($uid, $username, $hash, $salt, $key, $email) = explode(" ", $user);		
    echo "<tr><br>
		<td>$uid</td>
	    <td>$username</td>
		<td>$email</td>
		<td>$hash:$salt</td>
		<td>none</td>
        <br></tr>";
    }
?>
</table>
</center>
</body>
</html>