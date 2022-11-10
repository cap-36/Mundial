const formInscritos = document.querySelector('#formInscritos');
const btnInscritos = document.querySelector('#btn-inscritos');
const cedula = document.querySelector('#cedula');
const nombres = document.querySelector('#nombres');
const email = document.querySelector('#email');
const ncarton = document.querySelector('#ncarton');
const perfil = document.querySelector('#perfil');
const date = document.querySelector('#date');

document.addEventListener('DOMContentLoaded', recorrerArray(), dateNow());
function recorrerArray() {
    const LSUsuario = JSON.parse(localStorage.getItem("usuario"));
    const LSArray = [];
    LSArray.push(LSUsuario);
    LSArray.forEach(usuario => {
        cedula.value = usuario.cedula
        email.value = usuario.correo
        ncarton.value = usuario.carton
        // console.log(usuario);
    })
}
function dateNow() {
    var f = new Date();
    date.value = (f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
}

btnInscritos.addEventListener('click', function() {
    // e.preventDefault();

    const FormDataref = new FormData(formInscritos);
    
    const url = "registroInscritos.php";
    fetch(url, {
        method: 'POST',
        body: FormDataref
    })
    .then(res => res.json(FormDataref))
    .then(data => {

    })
    .catch(function (error){
        
    })
})