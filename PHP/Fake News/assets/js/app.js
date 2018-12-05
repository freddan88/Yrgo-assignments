'use strict';

function funcJSlikes(btx){
	 let number = parseInt(btx.querySelector('span').textContent);
	 if (number === 50){
		  return;
	 }
	 btx.querySelector('span').textContent = ++number;
}
