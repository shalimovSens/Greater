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
// const 


document.querySelector('.logo').addEventListener('click', () => {
    localStorage.isCount = true;
    localStorage.date = new Date().getTime();
    setInterval(() => {
        let lola = new Date().getTime();
        let dateAfter = lola - localStorage.date;
        let currentCounted = new Date(dateAfter).toISOString();
        console.log(currentCounted);
    },1000)
})
if (localStorage.isCount) {
    setInterval(() => {
        let lola = new Date().getTime();
        let dateAfter = lola - localStorage.date;
        let currentCounted = new Date(dateAfter).toISOString();
        console.log(currentCounted.slice(11, 19));
    },1000)
}