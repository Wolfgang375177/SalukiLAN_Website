<? php

require_once('mysql_connect.php');

$registered_query = "SELECT first_name, last_name, email, address, zip_code,
city, state, phone FROM registeredParticipants"; #SQL to retreive information from the database.

$rsp = @mysql_query($dbcon, $registered_query);

if($response){
  echo '<table align="left" cellspacing="10" cellpadding="10">

  <tr>
  <td align="left"><b>First Name</b></td>
  <td align="left"><b>Last Name</b></td>
  <td align="left"><b>Email</b></td>
  <td align="left"><b>Address</b></td>
  <td align="left"><b>Zip Code</b></td>
  <td align="left"><b>City</b></td>
  <td align="left"><b>State</b></td>
  <td align="left"><b>Phone</b></td>
  </tr>';

  while($row = my_sql_fetch_array($rsp)){
    echo '<tr><td align="left"></tr>'.$row[first_name].
         '<tr><td align="left"></tr>'.$row[last_name].
         '<tr><td align="left"></tr>'.$row[email].
         '<tr><td align="left"></tr>'.$row[address].
         '<tr><td align="left"></tr>'.$row[zip_code].
         '<tr><td align="left"></tr>'.$row[city].
         '<tr><td align="left"></tr>'.$row[state].
         '<tr><td align="left"></tr>'.$row[phone].
         '<tr><td align="left"></tr>';

  echo '</tr>'
  }
  echo '</table>';
} else {
  echo "Couldn't query...";
  echo mysqli_error($dbcon);
}

mysql_close($dbcon);
 ?>
