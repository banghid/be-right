<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be-Right Studio</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/anime.js"></script>
    <script src="js/anime.min.js"></script>
</head>
<body>

    <div class="centered-horizontal">
        <img src="asset/be-right-little-logo.svg" class="centered-image" id="logo-1">
        <br>
        <img src="asset/be-right-little-logo.svg" class="centered-image" id="logo-2">
        <br>
        <img src="asset/be-right-little-logo.svg" class="centered-image" id="logo-3">
    </div>

    <div class="centered-horizontal">
        <p class="centered-text-bigger" style="font-size:3vw">EST 2021 <br> 
        <b style="font-size:7vw">WE WILL</b></p>
        <img src="asset/be-right-little-logo.svg" class="centered-image-bigger" id="logo-1">
        <p class="centered-text-bigger"> <b style="font-size:7vw">BACK</b> </p>
    </div>

    
</body>
<script>
    anime.timeline({loop: true})
    .add({
        targets: '.centered-image',
        scale: [2,1],
        opacity: [0,1],
        easing: "easeOutCirc",
        duration: 800,
        delay: (el, i) => 800 * i
    }).add({
        targets: '.centered-image',
        opacity: 0,
        duration: 800,
        easing: "easeOutExpo",
        delay: 800
    }).add({
        targets: '.centered-text-bigger',
        opacity: [0,1],
        duration: 1000,
        easing: "easeOutCirc",
        delay: 1000
    }).add({
        targets: '.centered-image-bigger',
        scale: [2,1],
        opacity: [0,1],
        easing: "easeOutCirc",
        duration: 800,
        delay: (el, i) => 1000 * i
    }).add({
        targets: '.centered-horizontal',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });
</script>
</html>