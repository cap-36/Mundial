const formInscritos = document.querySelector('#formData');
// const mCarton = document.querySelector('#perfil-carton');
// const mCedula = document.querySelector('#perfil-cedula');
// const mfase = document.querySelector('#perfil-fase');
// const grupoA = document.querySelector('.grupo-a');
// const mperfil = document.querySelector('#perfil-perfil');
// const equipoUno = document.querySelectorAll('#equipoUno');
// const marcadorUno = document.querySelectorAll('#marcadorUno');
// const equipoDos = document.querySelectorAll('#equipoDos');
// const marcadorDos = document.querySelectorAll('#marcadorDos');
// const mfecha = document.querySelector('#perfil-fecha');

const btnMarcadores = document.querySelector('#inscripcionMarcadores');



btnMarcadores.addEventListener('click', function(e) {
    e.preventDefault();
    
    const FormDataref = new FormData(formInscritos);
    console.log(FormDataref);

    // const url = "registroMarcadores.php"
    // fetch(url, {
    //     method: 'POST',
    //     body: FormDataref
    // })
    // .then(res => res.json(FormDataref))
    // .then(data => {
        
    // })
    // .catch(function (error){
    // })
})
