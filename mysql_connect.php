<? php

#this file will need to be moved before the site goes live

define('db_user','salukilanadmin');
define('db_pass','noonewilleverguessthis');
define('db_host','localhost'); #this might change but will stay that way for now
define('db_name','salukilandatabase');

$dbcon = @mysqli_connect(db_user, db_pass, db_host, db_name)
or die('Conection to MySQL failed'.mysqli_connect_error());

 ?>
