const pCarton = document.querySelector('#perfil-carton');
const pCedula = document.querySelector('#perfil-cedula');
const pCorreo = document.querySelector('#perfil-correo');
const pfecha = document.querySelector('#perfil-fecha');

document.addEventListener('DOMContentLoaded', recorrerArray(), dateNow());
function recorrerArray() {
    const LSUsuario = JSON.parse(localStorage.getItem("usuario"));
    const LSArray = [];
    LSArray.push(LSUsuario);
    LSArray.forEach(usuario => {
        pCarton.value = usuario.carton
        pCedula.value = usuario.cedula
        pCorreo.value = usuario.correo
        // console.log(usuario);
    })
}
function dateNow() {
    var f = new Date();
    pfecha.value = (f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
}