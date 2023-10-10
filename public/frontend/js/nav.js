const buttons = document.querySelectorAll(".for-click");

buttons.forEach(button => {

  const arrowNav = button.querySelector(".arrow-nav");
  const subMenu = button.querySelector(".sub-menu");
  const salam = button.querySelector(".salam");

  
 


  salam.addEventListener('click', function() {
    const acurrentactiveNav = document.querySelectorAll('.sub-menu.sub-menu-active')
    arrowNav.classList.toggle('arrow-nav-rotate');
    // subMenu.classList.toggle('sub-menu-active');

    if (subMenu.classList.contains("sub-menu-active")) {
        subMenu.classList.remove("sub-menu-active");
    } else {

      for (let b = 0; b < acurrentactiveNav.length; b++) {
        
        acurrentactiveNav[b].classList.remove("sub-menu-active")
        
      }

      subMenu.classList.add("sub-menu-active");

    }
  });
});