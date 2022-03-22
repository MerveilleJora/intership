const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menuItems");
const bar= document.querySelector(".bar");

const menu_under = document.querySelector(".menu-under")
const Pilotmenu = document.querySelector("#menu_underPilot");
const Candimenu = document.querySelector("#menu_underCandi");
const Studentmenu = document.querySelector("#menu_underStud");
const offermenu = document.querySelector("#menu_underOff");
const compmenu = document.querySelector("#menu_underComp");

//faire apparaître la barre de navigation
bar.addEventListener("click", ()=>{
  menu.classList.toggle("showMenu");
});
//Switch d'apparation des sous-menu en fonction du bouton cliqué
menuItems.forEach(item => {
    item.addEventListener('click', (event)=>{
        console.log(event.target.id);
            switch(event.target.id)
            {
                case "Pilot":
                    Pilotmenu.classList.toggle("showmenu_under");
                    break;
                case "Student":
                    Studentmenu.classList.toggle("showmenu_under");
                    break;
                case "Candidacy":
                    Candimenu.classList.toggle("showmenu_under");
                    break;
                case "Company":
                    compmenu.classList.toggle("showmenu_under");
                    break;
                case "Offer":
                    offermenu.classList.toggle("showmenu_under");
                    break;
            }
        
        
    })
})
