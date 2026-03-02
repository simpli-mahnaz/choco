<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

 
<style>
 /*Desktop Home Main Video */
*{margin: 0%;padding: 0%;
box-sizing: border-box;}

.desk_video-container {
  
  padding-top:110px;
 
  width: 100%;
  /* max-width: 600px; */}
#desk_myVideo {
  width: 100%;
  display: block;}
.desk_control-btn {
  
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 90px;
  height: 90px;
  border-radius: 50%;
  background: rgba(0,0,0,0.6);
  border: none;
  cursor: pointer;
  opacity:0.4;
  transition: opacity 0.3s ease;}

/* Show button on hover */
.desk_video-container:hover .desk_control-btn {
  opacity: 1;}

/* PLAY icon */
.desk_control-btn.play::before {
  content: "";
  position: absolute;
  left: 38%;
  top: 28%;
  width: 0;
  height: 0;
  border-left: 26px solid white;
  border-top: 18px solid transparent;
  border-bottom: 18px solid transparent;
}

/* PAUSE icon */
.desk_control-btn.pause::before,
.desk_control-btn.pause::after {
  content: "";
  position: absolute;
  top: 28%;
  width: 10px;
  height: 34px;
  background: white;}
.desk_control-btn.pause::before {
  left: 32%;}
.desk_control-btn.pause::after {
  right: 32%;
}



 /************Mobile Home Main Video*************/
.mob_video-container {
  
  padding-top:70px;
  /* position: relative; */
  width: 100%;
  /* max-width: 600px; */}
#mob_myVideo {
  width: 100%;
  display: block;}
.mob_control-btn {
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 70px;
  height:70px;
  border-radius: 50%;
  background: rgba(0,0,0,0.6);
  border: none;
  cursor: pointer;
  opacity:0.2;
  transition: opacity 0.3s ease;}

/* Show button on hover */
.mob_video-container:hover .mob_control-btn {
  opacity: 1;}

/* PLAY icon */
.mob_control-btn.play::before {
  content: "";
  position: absolute;
  left: 38%;
  top: 28%;
  width: 0;
  height: 0;
  border-left: 26px solid white;
  border-top: 18px solid transparent;
  border-bottom: 18px solid transparent;
}

/* PAUSE icon */
.mob_control-btn.pause::before,
.mob_control-btn.pause::after {
  content: "";
  position: absolute;
  top: 28%;
  width: 10px;
  height: 34px;
  background: white;}
.mob_control-btn.pause::before {
  left: 32%;}
.mob_control-btn.pause::after {
  right: 32%;
}
</style>
</head>
<body>
<!------Desktop mainVideo------->

<div class="desk_video-container d-none d-lg-block" style="width:100%;">
    <video width="100%" id="desk_myVideo" loop muted playsinline>
        <source src="img/desktop.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <button id="desk_playPauseBtn" class="desk_control-btn pause"></button>
</div>
<!------Mobile mainVideo------->
<div class="mob_video-container d-block d-lg-none" style="width:100%;">
    <video width="100%" id="mob_myVideo" autoplay loop muted playsinline>
        <source src="img/mobile.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <button id="mob_playPauseBtn" class="mob_control-btn pause"></button>
</div>


<!-------Desktop Home main video JavaScript----->
<script>
const video = document.getElementById("desk_myVideo");
const btn = document.getElementById("desk_playPauseBtn");
// Autoplay fallback
video.play().catch(() => {});
btn.addEventListener("click", () => {
  if (video.paused) {
    video.play();
    btn.classList.remove("play");
    btn.classList.add("pause");
  } else {
    video.pause();
    btn.classList.remove("pause");
    btn.classList.add("play");
  }
});
// Set correct icon state
video.addEventListener("play", () => {
  btn.classList.remove("play");
  btn.classList.add("pause");
});
video.addEventListener("pause", () => {
  btn.classList.remove("pause");
  btn.classList.add("play");
});
</script>

<!-------Mobile Home main video  JavaScript----->
<script>
const mob_video = document.getElementById("mob_myVideo");
const mob_btn = document.getElementById("mob_playPauseBtn");
// Autoplay fallback
mob_video.play().catch(() => {});
mob_btn.addEventListener("click", () => {
  if (mob_video.paused) {
    mob_video.play();
    mob_btn.classList.remove("play");
    mob_btn.classList.add("pause");
  } else {
    mob_video.pause();
    mob_btn.classList.remove("pause");
    mob_btn.classList.add("play");
  }
});
// Set correct icon state
mob_video.addEventListener("play", () => {
  mob_btn.classList.remove("play");
  mob_btn.classList.add("pause");
});
mob_video.addEventListener("pause", () => {
  mob_btn.classList.remove("pause");
  mob_btn.classList.add("play");
});
</script>










</body>
</html>