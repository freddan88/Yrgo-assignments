const sideMenuArrow = document.querySelector('.side-menu-arrow');
const sideMenu = document.querySelector('.side-menu');
const moduleFeature = document.querySelector('.feature');
const moduleHistory = document.querySelector('.history');
const moduleData = document.querySelector('.data');

const arrowOffset = Math.round(sideMenuArrow.getBoundingClientRect().y + 14);

//console.dir(moduleFeature.offsetTop);
//console.dir(moduleHistory.offsetTop);
//console.dir(moduleData.offsetTop);
//console.log(arrowOffset);

window.addEventListener('scroll', () => {
    
    let featureOffset = moduleFeature.getBoundingClientRect().y;
    let featureHeight = moduleFeature.getBoundingClientRect().height;
    // console.log(featureOffset);

    if(arrowOffset >= featureOffset && arrowOffset < featureOffset + featureHeight){
        // console.log(moduleFeature.dataset.div);
        sideMenu.children[0].textContent = moduleFeature.dataset.div;
    }

    let historyOffset = moduleHistory.getBoundingClientRect().y;
    let historyHeight = moduleHistory.getBoundingClientRect().height;
    // console.log(historyOffset);

    if(arrowOffset >= historyOffset && arrowOffset < historyOffset + historyHeight){
        // console.log(moduleHistory.dataset.div)
        sideMenu.children[0].textContent = moduleHistory.dataset.div;
    }

    let dataOffset = moduleData.getBoundingClientRect().y;
    let dataHeight = moduleData.getBoundingClientRect().height;
    // console.log(historyOffset);

    if(arrowOffset >= dataOffset && arrowOffset < dataOffset + dataHeight){
        // console.log(moduleData.dataset.div)
        sideMenu.children[0].textContent = moduleData.dataset.div;
    }

});