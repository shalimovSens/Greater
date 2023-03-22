const sendReadRequest = async (url) => {
    return fetch(url, {
        method: 'GET',
        headers: { 'Content-Type': 'application/json;charset=utf-8', 'X-Requested-With': 'XMLHttpRequest', },
    })
        .then(response => response.json())
        .catch(err => console.log('err is >>>>>', err))
}
sendReadRequest('/read').then(data => console.log(data));

const sendCreateRequest = async (url, timerCount) => {
    let date = new Date().toISOString().split('T');
    date[1] = '00:00:00.000000Z';
    date = date.join('T');
    console.log(date);
    return fetch(url, {
        method: 'POST',
        headers:{ 'Content-Type': 'application/json;charset=utf-8',
         'X-Requested-With': 'XMLHttpRequest', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),},
        body: JSON.stringify({ count: timerCount, created_at: date})
    }).then(response => response.json())
}
// name: 'ivan',
const saveToDB = document.querySelector('.resetCount');
saveToDB.addEventListener('click', async () => {
    const countedTime = document.querySelector('.time').textContent;
    sendCreateRequest('/create', countedTime)
        .then(data => console.log(data))
        .catch(err => console.log('err >>>', err))
})
// let date = new Date().toISOString().split('T');
// // date[1] = '00:00:00';
// console.log(date.join(' '));
