const [...imageGridItems] = document.querySelectorAll('.grid-item');
const imageBoxClose = document.querySelector('.close-btn');
const imageLightBox = document.querySelector('.overlay');

const funcShowOverlay = (e) => {
    imageLightBox.classList.toggle('open');
    imageLightBox.children[0].src = e.target.src;
}

imageGridItems.forEach((imageGridItem) => {
    imageGridItem.addEventListener('click', (e) => {
        funcShowOverlay(e);
    })
});

    imageBoxClose.addEventListener('click', (e) => {
        funcShowOverlay(e);
    })
