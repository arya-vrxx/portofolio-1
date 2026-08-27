/* =========================
   CREATIONS CAROUSEL
========================= */

const track =
  document.getElementById("track");

const next =
  document.getElementById("next");

const prev =
  document.getElementById("prev");

const dots =
  document.querySelectorAll(".dots i");

let slide = 0;


function show(n){

  slide = (n + 3) % 3;

  track.style.transform =
    `translateX(-${slide * 100}%)`;


  dots.forEach((dot, i) => {

    dot.classList.toggle(
      "active",
      i === slide
    );

  });

}


next.onclick = () =>
  show(slide + 1);


prev.onclick = () =>
  show(slide - 1);


dots.forEach((dot, i) => {

  dot.onclick = () =>
    show(i);

});


/* CREATIONS AUTO SLIDE */

setInterval(() => {

  show(slide + 1);

}, 5000);



/* =========================
   EDUCATION & EXPERIENCE
========================= */

const journeyTrack =
  document.getElementById(
    "journeyTrack"
  );


const journeyNext =
  document.getElementById(
    "journeyNext"
  );


const journeyPrev =
  document.getElementById(
    "journeyPrev"
  );


const journeyDots =
  document.getElementById(
    "journeyDots"
  );


let journeySlide = 0;


const journeyItems =
  journeyTrack.children;



/* CREATE DOTS */

for(
  let i = 0;
  i < journeyItems.length;
  i++
){

  const dot =
    document.createElement("i");


  if(i === 0){

    dot.classList.add("active");

  }


  journeyDots.appendChild(dot);

}



/* SHOW JOURNEY */

function showJourney(n){

  journeySlide =
    (n + journeyItems.length) %
    journeyItems.length;


  journeyTrack.style.transform =
    `translateX(-${journeySlide * 100}%)`;


  [
    ...journeyDots.children
  ].forEach((dot, i) => {

    dot.classList.toggle(
      "active",
      i === journeySlide
    );

  });

}



/* BUTTON */

journeyNext.onclick = () =>
  showJourney(
    journeySlide + 1
  );


journeyPrev.onclick = () =>
  showJourney(
    journeySlide - 1
  );



/* AUTO 3.6 DETIK */

setInterval(() => {

  showJourney(
    journeySlide + 1
  );

}, 3600);



/* DOT CLICK */

journeyDots.addEventListener(
  "click",
  event => {

    [
      ...journeyDots.children
    ].forEach((dot, i) => {

      if(dot === event.target){

        showJourney(i);

      }

    });

  }
);

/* musik */
const music = document.getElementById("bgMusic");
const musicBtn = document.getElementById("musicBtn");

music.volume = 0.4;

musicBtn.addEventListener("click", () => {
  if (music.paused) {
    music.play();
    musicBtn.textContent = "▶️";
  } else {
    music.pause();
    musicBtn.textContent = "⏯️";
  }
});