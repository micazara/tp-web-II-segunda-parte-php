let pies = document.querySelectorAll(".pie");
function cargarNombresDeImagenes() {
    pies.forEach(pie => {
        let nombreImagen = pie.previousElementSibling.getAttribute("alt");


        pie.textContent = nombreImagen;
    });
} cargarNombresDeImagenes();
