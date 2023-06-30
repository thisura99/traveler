
const btnleft = document.querySelector(".left-btn");
const btnright = document.querySelector(".right-btn");
const tabmenu = document.querySelector(".tab-menu");

const IconVisibility = () =>{
    let scrollLeftValue = Math.ceil(tabmenu.scrollLeft);
    //console.log("1.", scrollLeftValue);
    let scrollablewidth = tabmenu.scrollWidth - tabmenu.clientWidth;
    //console.log("2.", scrollablewidth);

    btnleft.style.display = scrollLeftValue > 0 ? "block" : "none";
    btnright.style.display = scrollablewidth > scrollLeftValue ? "block" : "none";
}

btnright.addEventListener("click", () =>{
    tabmenu.scrollLeft += 150;
    //IconVisibility();
    setTimeout(() => IconVisibility(),50);
});

btnleft.addEventListener("click", () =>{
    tabmenu.scrollLeft -= 150;
    //IconVisibility();
    setTimeout(() => IconVisibility(),50);
});

window.onload = function(){
    btnright.style.display = tabmenu.scrollWidth > tabmenu.clientWidth || tabmenu.scrollWidth >= window.innerWidth ? "block" : "none";
    btnleft.style.display = tabmenu.scrollWidth >= window.innerWidth ? "" : "none";
}

window.onresize = function(){
    btnright.style.display = tabmenu.scrollWidth > tabmenu.clientWidth || tabmenu.scrollWidth >= window.innerWidth ? "block" : "none";
    btnleft.style.display = tabmenu.scrollWidth >= window.innerWidth ? "" : "none";

    let scrollLeftValue = Math.round(tabmenu.scrollLeft);

    btnleft.style.display = scrollLeftValue > 0 ? "block" : "none";
}

//javascrip yo make the tab navigation draggble
let activeDrag = false;

tabmenu.addEventListener("mousemove", (drag) => {
    if(!activeDrag) return;
    tabmenu.scrollLeft -= drag.movementX;
    IconVisibility();
    tabmenu.classList.add("dragging");
});

document.addEventListener("mouseup", () =>{
    activeDrag = false;
    tabmenu.classList.remove("dragging");
});

tabmenu.addEventListener("mousedown", () => {
    activeDrag = true;
});

//viwe content to tab
const tabs = document.querySelectorAll(".tab");
const tabBtns = document.querySelectorAll(".tab-btn");

const tab_Nav = function(tabBtnClick){
    tabBtns.forEach((tabBtn) =>{
        tabBtn.classList.remove("active");
    });

    tabs.forEach((tab) =>{
        tab.classList.remove("active");
    });

    tabBtns[tabBtnClick].classList.add("active");
    tabs[tabBtnClick].classList.add("active");
}

tabBtns.forEach((tabBtn, i) => {
    tabBtn.addEventListener("click", () => {
        tab_Nav(i);
    });
});







  