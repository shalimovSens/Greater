const verticalCardInGrid = document.querySelector('.col-1 > div');
const mediaQueryToGrid = window.matchMedia('screen and (max-width: 974px)');
const changeTheVerticalCardInGrid = (event) => {
    if (event.matches) {
        // console.log('Медиазапрос работает');
        verticalCardInGrid.classList.toggle('vertical', false);
    } else {
        // console.log('Медиазапрос не работает');
        verticalCardInGrid.classList.toggle('vertical', true);
    }
}
mediaQueryToGrid.addEventListener('change', changeTheVerticalCardInGrid);
changeTheVerticalCardInGrid(mediaQueryToGrid);


const regBtn = document.querySelector('.regBtn');
const regField = document.querySelector('.regField');
const mainWrap = document.querySelector('.wrap');
regBtn.addEventListener('click', (event) => {
    regField.classList.toggle('nonDisplay');
    mainWrap.classList.toggle('isBackground');
});