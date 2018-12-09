'use strict';

const buttons = document.querySelectorAll('.thumb-button');
const btnArray = Array.from(buttons);

btnArray.forEach((button)=>{
	let numLikes = parseInt(button.querySelector('span').innerText, 10);

	button.addEventListener('click',()=>{

		if(numLikes === 50){
			return;
		}
		button.querySelector('span').innerText = ++numLikes;
	});
});
