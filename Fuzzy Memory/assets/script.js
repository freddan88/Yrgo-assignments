'use strict';

let varCards = document.querySelectorAll('.card');
varCards = Array.from(varCards);

const flipCard = e => {
    e.currentTarget.classList.add('flipped');
}

varCards.forEach(function(varCard){
    varCard.addEventListener('click', flipCard);
});





// const varCardData = varCard.dataset.card;
// console.log(varCardData.localeCompare(varCardData));
