// Código para mostrar y ocultar los menús desplegables al hacer clic
let menuItems = document.querySelectorAll(".menu-item");

for (let menuItem of menuItems) {
    menuItem.addEventListener("click", function() {
        this.classList.toggle("show");
    });
}

// Código para ocultar los menús desplegables al hacer clic fuera de ellos
document.addEventListener("click", function(event) {
    let target = event.target;
    if (!target.closest(".menu-item")) {
        for (let menuItem of menuItems) {
            menuItem.classList.remove("show");
        }
    }
});
