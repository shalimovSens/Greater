const startCountBtn = document.querySelector('.startCount'),
    stopCountBtn = document.querySelector('.stopCount'),
    resetCountBtn = document.querySelector('.resetCount'),
    progressCircle = document.querySelector('.progressCircle'),
    viewHours = document.querySelector('.hours'),
    viewMinutes = document.querySelector('.minutes'),
    viewSeconds = document.querySelector('.seconds');
let hr = min = sec = '0' + 0,
    startTimer;


let P_OfProgressCircle = 2 * Math.PI * (document.querySelector('.circle').offsetWidth * 0.465);
const mediaQueryToProgress = window.matchMedia('screen and (max-width: 800px)');
const changeTheProgress = (event) => {
    if (event.matches) {
        P_OfProgressCircle = 2 * Math.PI * (document.querySelector('.circle').offsetWidth * 0.465);
        progressCircle.style.strokeDashoffset = P_OfProgressCircle - (P_OfProgressCircle * sec) / 60;
        // clearInterval(startTimer);


    } else {
        P_OfProgressCircle = 2 * Math.PI * (document.querySelector('.circle').offsetWidth * 0.465);
        progressCircle.style.strokeDashoffset = P_OfProgressCircle - (P_OfProgressCircle * sec) / 60;
        // clearInterval(startTimer);
    }
}
mediaQueryToProgress.addEventListener('change', changeTheProgress);


stopCountBtn.disabled = true;
resetCountBtn.disabled = true;


const startCounting = () => {
    startCountBtn.disabled = true;
    stopCountBtn.disabled = false;
    resetCountBtn.disabled = true;
    startTimer = setInterval(() => {
        sec++;
        sec = sec < 10 ? '0' + sec : sec;
        const progressAnim = [
            { strokeDashoffset: P_OfProgressCircle - (P_OfProgressCircle * (sec - 1)) / 60 },
            { strokeDashoffset: P_OfProgressCircle - (P_OfProgressCircle * sec) / 60 },
        ];
        if (sec == 60) {
            min++;
            min = min < 10 ? '0' + min : min;
            sec = '0' + 0;
        }
        if (min == 60) {
            hr++;
            hr = hr < 10 ? '0' + hr : hr;
            min = '0' + 0;
        }
        const progressAnimTiming = {
            duration: 1000,
            iterations: 1,
        };        
        progressCircle.animate(progressAnim, progressAnimTiming);
        progressCircle.style.strokeDashoffset = P_OfProgressCircle - (P_OfProgressCircle * sec) / 60;
        console.log(P_OfProgressCircle - (P_OfProgressCircle * sec) / 60)
        viewHours.textContent = hr;
        viewMinutes.textContent = min;
        viewSeconds.textContent = sec;
    }, 1000)
}
startCountBtn.addEventListener('click', startCounting);
stopCountBtn.addEventListener('click', () => {
    clearInterval(startTimer);
    resetCountBtn.disabled = false;
    startCountBtn.disabled = false;
    stopCountBtn.disabled = true;
});
resetCountBtn.addEventListener('click', () => {
    resetCountBtn.disabled = true;
    let hr = min = sec = '0' + 0;
    const progressAnim = [
        { strokeDashoffset: P_OfProgressCircle - (P_OfProgressCircle * (sec)) / 60 },
        { strokeDashoffset: 0},
    ];
    const progressAnimTiming = {
        duration: 700,
        iterations: 1,
    };       
    progressCircle.animate(progressAnim, progressAnimTiming);
    progressCircle.style.strokeDashoffset = 0;
    viewHours.textContent = hr;
    viewMinutes.textContent = min;
    viewSeconds.textContent = sec;
})

