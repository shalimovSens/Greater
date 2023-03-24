// import { clearLocalStorage } from "./service";

// Таймер без работы в фоне
// let dateNow = new Date(0).getTime();
// let i = 1;
// setInterval (() => {
//     let dateAfter = new Date (dateNow + i * 1000).toISOString();
//     console.log(dateAfter);
//     i++;
// }, 1000);


const startCountBtn = document.querySelector('.startCount');
const stopCountBtn = document.querySelector('.stopCount');
const resetCountBtn = document.querySelector('.resetCount');
const progressCircle = document.querySelector('.progressCircle');
const viewTimeCounted = document.querySelector('.time'); 
const circle = (document.querySelector('.circle'));
let seconds = 0

disabledBtnsWhileTimerStop();

let P_OfProgressCircle = 2 * Math.PI * (document.querySelector('.circle').offsetWidth * 0.465);
const mediaQueryToProgress = window.matchMedia('screen and (max-width: 800px)');
const changeTheProgress = (event) => {
    if (event.matches) {
        P_OfProgressCircle = 2 * Math.PI * (document.querySelector('.circle').offsetWidth * 0.465);
        progressCircle.style.strokeDashoffset = P_OfProgressCircle - (P_OfProgressCircle * seconds) / 60;


    } else {
        P_OfProgressCircle = 2 * Math.PI * (document.querySelector('.circle').offsetWidth * 0.465);
        progressCircle.style.strokeDashoffset = P_OfProgressCircle - (P_OfProgressCircle * seconds) / 60;
    }
}
mediaQueryToProgress.addEventListener('change', changeTheProgress);


let startTimer;



startCountBtn.addEventListener('click', () => {
    localStorage.isCount = 'count';
    localStorage.startDate = new Date().getTime();
    disabledBtnsWhileTimerWork();
    startTimer = setInterval(() => {
        let currentDate = new Date().getTime();
        let dateAfter = currentDate - localStorage.startDate;
        let currentCounted = new Date(dateAfter).toISOString();
        viewTimeCounted.textContent = currentCounted.slice(11, 19);
        seconds = (currentCounted.slice(17, 19));
        localStorage.counted = currentCounted.slice(11, 19);
        circleAnimate(seconds == 0 ? 60 : seconds);
    },1000)
})
if (localStorage.isCount) {
    disabledBtnsWhileTimerWork();
    startTimer = setInterval(() => {
        let currentDate = new Date().getTime();
        let dateAfter = currentDate - localStorage.startDate;
        let currentCounted = new Date(dateAfter).toISOString();
        viewTimeCounted.textContent = currentCounted.slice(11, 19);
        seconds = (currentCounted.slice(17, 19));
        localStorage.counted = currentCounted.slice(11, 19);
        circleAnimate(seconds == 0 ? 60 : seconds);
    },1000)
}
stopCountBtn.addEventListener('click', () => {
    clearTimer();    
    disabledBtnsWhileTimerStop();
});
