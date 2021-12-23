<html>
<head>
<title>DonovanTV</title>
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<link rel="stylesheet" href="<?php

if(isset($_GET['t'])){
	echo $_GET['t'];
}else{
	echo 'https://cdn.jsdelivr.net/gh/therealdonovan/DonovanTVAPI/themes/defaultDark.css';
}
?>">
</head>
<body>
<center>
<form action="index.php" method="get">
<select name="v" id="v" required>
<option value="" disabled selected>--Connected to <?php
include "config.php";
echo $apiRepo;
?>--</option>
<?php
include "config.php";
echo file_get_contents("https://raw.githubusercontent.com/".$apiRepo."/main/channelDropdown.txt");
?>
</select>
<input type="submit" value="Change Channel">
</form>
<video id="video" width="100%" height="90%" controls autoplay></video>
<script>
  if(Hls.isSupported()) {
    var video = document.getElementById('video');
    var hls = new Hls();
    hls.loadSource('<?php
include "config.php";
$json = file_get_contents("https://raw.githubusercontent.com/".$apiRepo."/main/channelJson.txt");
$data = json_decode($json);
$getv = $_GET['v'];
echo $data->$getv;
?>');
    hls.attachMedia(video);
    hls.on(Hls.Events.MANIFEST_PARSED,function() {
      video.play();
  });
 }
  else if (video.canPlayType('application/vnd.apple.mpegurl')) {
    video.src = '<?php
include "config.php";
$json = file_get_contents("https://raw.githubusercontent.com/".$apiRepo."/main/channelJson.txt");
$data = json_decode($json);
$getv = $_GET['v'];
echo $data->$getv;
?>';
    video.addEventListener('canplay',function() {
      video.play();
    });
  }
</script>
Powered by <a href="https://github.com/therealdonovan/DonovanTV">DonovanTV</a>. <?php
$thisVersion = "1.0.1";
$json = file_get_contents("https://raw.githubusercontent.com/therealdonovan/DonovanTVAPI/main/latestver.txt");
$data = json_decode($json);
$latestVersion = $data->version;
if ($latestVersion == $thisVersion){
	echo 'Using latest version ('.$thisVersion.').';
}else{
	echo '<a href="updater.php">Updates to version '.$latestVersion.'</a> (currently using version '.$thisVersion.').';
}
?>
</center>
</body>
</html>
