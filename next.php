<?php
if(isset($_POST['name']))
$name=$_POST['name'];
?>
<?php
$file=fopen("user.txt", "a");
fwrite($file,$name);
fclose($file);
?>