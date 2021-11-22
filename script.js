// LOADER, SIDEBAR and ABOUT INFO
const sidey = document.getElementById("sidebar");
// const loader = document.getElementById("loaderDiv");
const extra = document.getElementById("info");
const mainpic = document.getElementById("mainpic");
const blue = window.matchMedia("(max-width: 800px)");


//switch introduction pic
// const dot = document.getElementById("dot");
// const gaming = new Audio("sounds/gaming.aac");
// var isPlaying = false;


// function addDot(){
//   dot.classList.toggle('dotter');
//   isPlaying ? gaming.pause() : gaming.play();
// }

// gaming.onplaying = function() {
//   isPlaying = true;
// };
// gaming.onpause = function() {
//   isPlaying = false;
// };

// gaming.addEventListener('ended', function() {
//   gaming.currentTime = 0;
//   gaming.play();
// }, false);



// Show and hide about info
function show() {
  info.classList.toggle("xxc");
}
function unshow() {
  info.classList.remove("xxc");
}

//Center the loader wherever the page is
// function checkForTop() {
//   loader.style.top = window.pageYOffset + "px";
// }
// checkForTop();

// //Manage the loader
// function stopLoader() {
//   loader.classList.add("stop");
// }
// function startLoader() {
//   loader.classList.remove("stop");
//   setTimeout(stopLoader, 1000);
// }
// setTimeout(stopLoader, 1000);

//Stop the sidebar appearing on small screens with matchmedia
function myFunction(x) {
  if (blue.matches) {
    sidey.classList.remove("block");
  }
}
function toggler() {
  sidey.classList.toggle("block");
}
myFunction(blue);

//Main Action





