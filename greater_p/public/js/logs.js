const renderResultOfCount = (data) => {
    if (!data.length) {
        document.querySelector('.resultTable').classList.add('nonDisplay');
        return
    }
    document.querySelector('.resultTable').classList.remove('nonDisplay')
    const tableBody = document.querySelector('.tableBody');
    tableBody.innerHTML = '';
    for (let i = 0; i < data.length; i++) {
        let row = document.createElement('tr');
        let date = document.createElement('td');
        let counted = document.createElement('td');
        date.textContent = data[i].created_at.slice(0, 10);
        counted.textContent = data[i].count;
        row.appendChild(date);
        row.appendChild(counted);
        tableBody.appendChild(row);
    }
}
const sendReadRequest = async (url) => {
    return fetch(url, {
        method: 'GET',
        headers: { 'Content-Type': 'application/json;charset=utf-8', 'X-Requested-With': 'XMLHttpRequest', },
    })
        .then(response => response.json())
        .catch(err => console.log('err is >>>>>', err))
}
sendReadRequest('/read').then(data => renderResultOfCount(data));

const sendCreateRequest = async (url, timerCount) => {
    let date = new Date().toISOString().split('T');
    date[1] = '00:00:00.000000Z';
    date = date.join('T');
    return fetch(url, {
        method: 'POST',
        headers:{ 'Content-Type': 'application/json;charset=utf-8',
         'X-Requested-With': 'XMLHttpRequest', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),},
        body: JSON.stringify({ count: timerCount, created_at: date})
    }).then(response => response.json())
}
// name: 'ivan',
const saveToDB = document.querySelector('.saveCount');
saveToDB.addEventListener('click', async () => {
    const countedTime = localStorage.counted;
    sendCreateRequest('/create', countedTime)
        .then(data => renderResultOfCount(data))
        .catch(err => console.log('err >>>', err))
    clearTimer();
    disabledBtnsWhileTimerStop();
})
// let date = new Date().toISOString().split('T');
// // date[1] = '00:00:00';
// console.log(date.join(' '));
