
const clearLocalStorage = () => {
    delete localStorage.isCount;
    delete localStorage.counted;
    delete localStorage.startDate; 
};
const circleAnimate = (sec) => {
    const progressAnim = [
        { strokeDashoffset: P_OfProgressCircle - (P_OfProgressCircle * (sec - 1)) / 60 },
        { strokeDashoffset: P_OfProgressCircle - (P_OfProgressCircle * sec) / 60 },
    ];
    const progressAnimTiming = {
        duration: 1000,
        iterations: 1,
    };       
    progressCircle.animate(progressAnim, progressAnimTiming);
    progressCircle.style.strokeDashoffset = P_OfProgressCircle - (P_OfProgressCircle * sec) / 60;
};
const endCircleAnimate = (sec) => {
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
}
const clearTimer = () => {
    clearInterval(startTimer);
    clearLocalStorage();
    viewTimeCounted.textContent = '00:00:00';
    seconds = 0;
    endCircleAnimate(seconds);
};
const disabledBtnsWhileTimerWork = () => {
    startCountBtn.disabled = true;
    stopCountBtn.disabled = false;
    saveToDB.disabled = false;
};
const disabledBtnsWhileTimerStop = () => {
    startCountBtn.disabled = false;
    stopCountBtn.disabled = true;
    saveToDB.disabled = true;
};