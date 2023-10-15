
    /* Menu */

    /* Declaration of variables*/
    var closeMenu = document.getElementById('closeMenu');
    var menuContainer = document.getElementById('menuContainer');
    var openMenuContainer = document.getElementById('openMenuContainer');

    /* Close Menu*/
    closeMenu.addEventListener("click", function(){
    menuContainer.style.display = "none";
    })
    /* Open Menu*/
    openMenuContainer.addEventListener("click", function(){
    menuContainer.style.display = "block";
    })




  const items = document.querySelectorAll(".items");
    const bodyLogin = document.querySelectorAll(".bodyLogin");
    var containerOn = 1;



    for (let i = 0; i < bodyLogin.length; i++) {

      bodyLogin[i].style.display = "none";
      bodyLogin[containerOn].style.display = "block";


      items[i].addEventListener("click", function(){

        if (bodyLogin[i].style.display == "none"){
          containerOn  = i;
          bodyLogin[i].style.display = "block";
          turnOffOtherContainers();
          menuContainer.style.display = "none";
        }
        else {
          menuContainer.style.display = "none";
        }
      }
    )
    }
