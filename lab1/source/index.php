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

        <audio controls id="audioPlayer">
            <source src="<?php echo ($_GET["audioFile"]); ?>">
            Audio Player
        </audio>

    <?php } if ($renderVideo) { ?>

        <video controls id="videoPlayer">
            <source src="<?php echo ($_GET["videoFile"]); ?>">
            Video Player
        </video>

    <?php } ?>

</body>

</html>