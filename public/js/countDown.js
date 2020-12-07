var countDownDate = new Date("Jan 1, 2021 15:37:25").getTime();

var eventDay = document.querySelector(".event__time--day");
var eventHour = document.querySelector(".event__time--hour");
var eventMin = document.querySelector(".event__time--min");
var eventSec = document.querySelector(".event__time--sec");

// Update the count down every 1 second
var x = setInterval(caclDayRemain, 1000);

function caclDayRemain() {
 // Get today's date and time
 var now = new Date().getTime();
   
 // Find the distance between now and the count down date
 var distance = countDownDate - now;

 // Time calculations for days, hours, minutes and seconds
 var days = Math.floor(distance / (1000 * 60 * 60 * 24));
 var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
 var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
 var seconds = Math.floor((distance % (1000 * 60)) / 1000);

 // Display the result in the element with id="demo"
 eventDay.textContent = days;
 eventHour.textContent = hours;
 eventMin.textContent = minutes;
 eventSec.textContent = seconds;

 // If the count down is finished, write some text
 if (distance < 0) {
   clearInterval(x);
 }
}

caclDayRemain();