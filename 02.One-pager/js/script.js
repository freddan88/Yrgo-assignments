const menuScreen = document.querySelector('.menu-fullscreen');
const menuToggle = document.querySelector('.menu-container');
const menuContainer = document.querySelector('.main-header');
const headerLogos = document.querySelectorAll('.logo');

const menuTogglers = () => {
  menuScreen.classList.toggle('menu-fullscreen__open');
  menuToggle.children[0].classList.toggle('menu-toggle__blackout');
  document.body.classList.toggle('no-scroll');
};

const menuLists = menuScreen.querySelectorAll('ul');
menuLists.forEach(menuList => {
  const menuItems = menuList.querySelectorAll('li');
  menuItems.forEach(menuItem => {
    menuItem.children[0].addEventListener('click', () => {
      menuTogglers();
      
      headerLogos.forEach(headerLogo => {
        headerLogo.classList.toggle('logo_display');
      });
    });
  });
});

menuToggle.addEventListener('click', () => {
  menuTogglers();
  
  headerLogos.forEach(headerLogo => {
    headerLogo.classList.toggle('logo_display');
  });
});

window.addEventListener('scroll', () =>{
  
  if(pageYOffset < 350){
    menuContainer.style.opacity = 1 - window.pageYOffset/250;
    menuScreen.style.transformOrigin = "right top";
    menuContainer.classList.remove('switch');
    headerLogos[0].removeAttribute('style');
    menuContainer.children[2].removeAttribute('style');
  } else {
    menuContainer.style.opacity = window.pageYOffset/350 - 1;
    menuScreen.style.transformOrigin = "left top";
    menuContainer.classList.add('switch');
    headerLogos[0].style.display = "none";
    menuContainer.children[2].style.backgroundColor = "#F2E5D7";
  }
  
});