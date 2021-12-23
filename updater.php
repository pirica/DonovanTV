<link rel="stylesheet" href="<?php

if(isset($_GET['t'])){
	echo $_GET['t'];
}else{
	echo 'https://cdn.jsdelivr.net/gh/therealdonovan/DonovanTVAPI/themes/defaultDark.css';
}
?>">
<center>
<h1>DonovanTV Updater</h1>
<?php
include "config.php";
$json = file_get_contents("https://raw.githubusercontent.com/therealdonovan/DonovanTVAPI/main/checkUpdates.txt");
$data = json_decode($json);
$latestVersion = $data->version;
if (isset($_GET['p'])) {
  unlink("index.php");
  $latestVerSource = file_get_contents("https://raw.githubusercontent.com/therealdonovan/DonovanTV/main/index.php");
  file_put_contents("index.php",$latestVerSource);
  echo '<h2>Updated Successfully!</h2><p>DonovanTV is now running on v'.$latestVersion.', <a href="index.php">continue to DonovanTV</a></p>';
  if($_GET['p'] == $updatePw){
  }else{
    echo '<h2>Not Authorized to Update</h2><p>The password you entered is incorrect, you cannot update DonovanTV.</p>';
  }
}else{
  echo '<h2>Update to Version '.$latestVersion.'</h2>
  <p>Only the website owner can update DonovanTV. To prove you have permission to update, enter the password you sat in the config file.</p>
  <form action="updater.php" method="get">
 <input type="password" name="p" id="p" required>
<input type="submit" value="Update to v'.$latestVersion.'">
</form>
<p><b>Please do not spam the submit button, it will restart the download!</b> It can take a minute or more after clicking the button to download and automatically setup the latest version, depending on your internet speed.</p>';
}
?>
</center>
