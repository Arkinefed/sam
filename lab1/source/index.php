<?php
$renderVideo = isset($_GET["videoFile"]);
$renderAudio = isset($_GET["audioFile"]);
?>

<!doctype html>
<html>

<head>
    <title>Hello World Player</title>
</head>

<body>

    <?php if ($renderAudio) {  ?>

        <audio id="audioPlayer" src="<?php echo ($_GET["audioFile"]); ?>">

        </audio>

    <?php } else if ($renderVideo) { ?>

        <video id="videoPlayer" src="<?php echo ($_GET["videoFile"]); ?>">

        </video>

    <?php } else { ?>

    <?php } ?>

</body>

</html>