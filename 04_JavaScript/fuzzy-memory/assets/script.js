'use strict';

// Variables and array:

const cardsArray = [
    {id:'homer', img:'homer.jpg'},
    {id:'bart', img:'bart.jpg'},
    {id:'lisa', img:'lisa.jpg'},
    {id:'marge', img:'marge.jpg'},
    {id:'milhouse', img:'milhouse.jpg'},
    {id:'krusty', img:'krusty.jpg'},
    {id:'allison', img:'allison.jpg'},
    {id:'todd', img:'todd.jpg'}
];

const currentPoints = document.querySelector('#points');
const currentClicks = document.querySelector('#clicks');

const pausedScreen = document.querySelector('.paused-screen');
const startBtn = document.querySelector('.start-game');
const playArea = document.querySelector('.play-area');
const cardsArrayDup = [...cardsArray, ...cardsArray];

// Do not edit - code section start:

startBtn.addEventListener('click',() =>{

    currentClicks.textContent = '0';
    currentPoints.textContent = '0';
    document.querySelector('.audio-intro').play();

    pausedScreen.classList.toggle('display-none');
    const cardsShuffled = cardsArrayDup.sort(() => {
        return 0.5 - Math.random()
    });

    cardsShuffled.forEach(card => {
        let currentCard =
        `<div class="card" data-card=${card.id}>
            <div class="card__front"></div>
            <img src="./assets/img/cards/${card.img}"/>
        </div>`
        playArea.innerHTML += currentCard;
    });

    const reset2Cards = () => {
        card1.classList.remove('flipped');
        card2.classList.remove('flipped');
        playArea.removeAttribute("style");
    }

    const gameEndScreen = () => {
        playArea.innerHTML = "";
        startBtn.textContent = "Replay";
        pausedScreen.children[0].textContent = "Please press Replay to start a new game";
        pausedScreen.classList.toggle('display-none');
    }

    let points = 0;
    let clicks = 0;
    let card1, card2;
    let firstCard = true;

    const flipCard = e => {
        e.currentTarget.classList.add('flipped');
        currentClicks.textContent = ++clicks;

        if(firstCard === true){
            firstCard = false;
            card1 = e.currentTarget;
        } else {
            firstCard = true;
            card2 = e.currentTarget;

            if(card1.dataset.card != card2.dataset.card){
                playArea.style.pointerEvents = "none";
                document.querySelector('.audio-fail').play();
                setTimeout(reset2Cards, 1000);
            } else {
                currentPoints.textContent = ++points;
                document.querySelector('.audio-point').play();
            }

            if(points === 8){
                document.querySelector('.audio-winner').play();
                setTimeout(gameEndScreen, 1500);
            }
        }
    }

    let varCards = playArea.querySelectorAll('.card');
    varCards = Array.from(varCards);

    varCards.forEach(function(varCard){
        varCard.addEventListener('click', flipCard);
    });
});
