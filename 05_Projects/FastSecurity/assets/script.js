'use strict';
const mainHeader = document.querySelector('.main-header');
const height = document.querySelector('.first-page-img');
const imageHeight = height.getBoundingClientRect().height;
const logo = document.querySelector('.small-logo');
const allSections = document.querySelectorAll('.section-component');
const activatorMenu = document.querySelector('.activator-menu');
const sideMenu = document.querySelector('.side-menu');
const formTriggers = document.querySelectorAll('.btn-lookbook');
const btnSubmit = document.querySelector('.btn-submit');

const BORDER_SIZE = 4;
const panel = document.getElementById("right_panel");

let m_pos;
function resize(e){
  const dx = m_pos - e.x;
  m_pos = e.x;
  panel.style.width = (parseInt(getComputedStyle(panel, '').width) + dx) + "px";
}

panel.addEventListener("mousedown", function(e){
  if (e.offsetX < BORDER_SIZE) {
    m_pos = e.x;
    document.addEventListener("mousemove", resize);
  }
});

document.addEventListener("mouseup", function(){
  document.removeEventListener("mousemove", resize);
});

const slideMenuClick = () => {
  sideMenu.classList.toggle('side-menu-open');
  activatorMenu.classList.toggle('activator-menu__open');
  activatorMenu.classList.toggle('activator-menu-gone');
};

 formTriggers.forEach((trigger) => {
  trigger.addEventListener('click', slideMenuClick);
});

btnSubmit.addEventListener('click', () => {
  btnSubmit.textContent = btnSubmit.dataset.text;
});

activatorMenu.addEventListener('click', slideMenuClick);
const moduleFeature = document.querySelector('#vision');
const moduleHistory = document.querySelector('#history');
const moduleData = document.querySelector('#future');
const menuLinks = document.querySelectorAll('.menu-link');
const sideMenuArrow = document.querySelector('.menu-handle__arrow');

const arrowOffset = Math.round(sideMenuArrow.getBoundingClientRect().y + 14);
for (let i = 0; i < menuLinks.length; i++) {
  menuLinks[i].addEventListener('click',(event) => {
    let id=event.target.dataset.id;
      document.getElementById(id).scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
  });
};


window.addEventListener('scroll', () => {
     // First 3 modules: vision, history and future //
  let featureOffset = moduleFeature.getBoundingClientRect().y;
  let featureHeight = moduleFeature.getBoundingClientRect().height;
  if(arrowOffset <= featureOffset){
    activatorMenu.children[0].textContent = 'Be Special.';
  }
  if(arrowOffset >= featureOffset && arrowOffset < featureOffset + featureHeight){
    activatorMenu.children[0].textContent = moduleFeature.dataset.div;
  }
  let historyOffset = moduleHistory.getBoundingClientRect().y;
  let historyHeight = moduleHistory.getBoundingClientRect().height;
  if(arrowOffset >= historyOffset && arrowOffset < historyOffset + historyHeight){
    activatorMenu.children[0].textContent = moduleHistory.dataset.div;
  }
  let dataOffset = moduleData.getBoundingClientRect().y;
  let dataHeight = moduleData.getBoundingClientRect().height;
  if(arrowOffset >= dataOffset && arrowOffset < dataOffset + dataHeight){
    activatorMenu.children[0].textContent = moduleData.dataset.div;
  }
  if(arrowOffset >= dataOffset + dataHeight){
    activatorMenu.children[0].textContent = 'Be Special.';
  }
     // Second 3 modules: comfort, elegance and innovation //
  const moduleComfort = document.querySelector('#comfort');
  const moduleElegance = document.querySelector('#elegance');
  const moduleInnovation = document.querySelector('#innovation');
  let comfortOffset = moduleComfort.getBoundingClientRect().y;
  let comfortHeight = moduleComfort.getBoundingClientRect().height;
  if(arrowOffset >= comfortOffset && arrowOffset < comfortOffset + comfortHeight){
    activatorMenu.children[0].textContent = moduleComfort.dataset.div;
  }
  let eleganceOffset = moduleElegance.getBoundingClientRect().y;
  let eleganceHeight = moduleElegance.getBoundingClientRect().height;
  if(arrowOffset >= eleganceOffset && arrowOffset < eleganceOffset + eleganceHeight){
    activatorMenu.children[0].textContent = moduleElegance.dataset.div;
  }
  let innovationOffset = moduleInnovation.getBoundingClientRect().y;
  let innovationHeight = moduleInnovation.getBoundingClientRect().height;
  if(arrowOffset >= innovationOffset && arrowOffset < innovationOffset + innovationHeight){
    activatorMenu.children[0].textContent = moduleInnovation.dataset.div;
  }
     // Last module: lookbook //
  const moduleLook = document.querySelector('#lookbook');
  let lookOffset = moduleLook.getBoundingClientRect().y;
  let lookHeight = moduleLook.getBoundingClientRect().height;
  if(arrowOffset >= lookOffset && arrowOffset < lookOffset + lookHeight){
    activatorMenu.children[0].textContent = moduleLook.dataset.div;
  }
});
