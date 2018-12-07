const spanDotBtns = document.querySelectorAll('.dot-btn');
const mainHeader = document.querySelector('.main-header');
const divNewsLetter = document.querySelector('.news-letter');
const txtNewsLetter = divNewsLetter.querySelector('span');
const allSections = document.querySelectorAll('.section-component');
const mainHeaderHeight = mainHeader.getBoundingClientRect().height;

const options = {
  threshold: 0.5
}

for (let i = 0; i < spanDotBtns.length; i++) {
    spanDotBtns[i].addEventListener('click',(event) => {
        let id=event.target.dataset.section;
        document.getElementById(id).scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
    });
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(function(entry){
        let dataSet = entry.target.id;
        let dotBtn = document.querySelector(`[data-section=${CSS.escape(dataSet)}]`);
        if(entry.intersectionRatio > 0){
            dotBtn.children['0'].classList.toggle("dot-f");
        }
    });

}, options);

allSections.forEach((section) => {
    observer.observe(section);
});

window.addEventListener('scroll',() => {
    let offset = window.pageYOffset;

    if(offset >= 0 && offset <= mainHeaderHeight - 20){
      mainHeader.classList.remove('header-wh');
      txtNewsLetter.classList.remove('collapse');
    };

    if (offset >= mainHeaderHeight){
        mainHeader.classList.add("header-wh");
        txtNewsLetter.classList.add('collapse');
    };
});
