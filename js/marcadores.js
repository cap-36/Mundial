const formInscritos = document.querySelector('#formData');
const mCarton = document.querySelector('#marcador-carton');
const mCedula = document.querySelector('#marcador-cedula');
const mfase = document.querySelector('#marcador-fase');
const grupoA = document.querySelector('.grupo-a');
const mperfil = document.querySelector('#marcador-perfil');
const equipoUno = document.querySelectorAll('#equipoUno');
const marcadorUno = document.querySelectorAll('#marcadorUno');
const equipoDos = document.querySelectorAll('#equipoDos');
const marcadorDos = document.querySelectorAll('#marcadorDos');
const mfecha = document.querySelector('#marcador-fecha');
const btnMarcadores = document.querySelector('#inscripcionMarcadores');


document.addEventListener('DOMContentLoaded', recorrerArray(), dateNow());
function recorrerArray() {
    const LSUsuario = JSON.parse(localStorage.getItem("usuario"));
    const LSArray = [];
    LSArray.push(LSUsuario);
    LSArray.forEach(usuario => {
        mCarton.value = usuario.carton
        mCedula.value = usuario.cedula
        // console.log(usuario);
    })
}
function dateNow() {
    var f = new Date();
    mfecha.value = (f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
}


btnMarcadores.addEventListener('click', function(e) {
    // e.preventDefault();
    
    const FormDataref = new FormData(formInscritos);

    const url = "registroMarcadores.php"
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
