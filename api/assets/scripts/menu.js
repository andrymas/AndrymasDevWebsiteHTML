export function openMenu(){
    var x = document.getElementById("link_home_mobile_menu");
    x.style.display = "flex";
    if (x.classList.contains("slide-in-blurred-top")) {
        x.classList.add("slide-out-blurred-top");
        x.classList.remove("slide-in-blurred-top");
    } else {
        x.classList.add("slide-in-blurred-top");
        x.classList.remove("slide-out-blurred-top");
    }
}

export default openMenu;