<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/loginStyles.css">
</head>
<body>
    <div id="fullBackGround">
        <div id="video">
            <video src="{{ asset("assets/landingPageVideo.mp4") }}" muted autoplay loop></video>
        </div>
        <div id="theBlur"></div>
    </div>
       <livewire:dynamic-component-renderer-for-login/> 
</body>
</html>