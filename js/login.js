const correoLG = document.querySelector('#correo');
const NumCartonLG = document.querySelector('#ncarton');
const btnLogin = document.querySelector('#btn-login');
const warning = document.querySelector('.warnings');

btnLogin.addEventListener('click', function(e) {
    e.preventDefault();
    // datosUsuario();
    
    const options = {
        method: 'POST'
    }
    const url = "consultaLogin.php";
    fetch(url, options)
    .then(res => res.json())
    .then(data => {
        // console.log(data);
        for (let i = 0; i < data.length; i++) {
            var element = data[i];
            // console.log(element);
            if (element.correo === correoLG.value && element.carton == NumCartonLG.value) {
                let usuario = {
                    correo: element.correo,
                    carton: element.carton,
                    cedula: element.cedula,
                    fase: element.fase,
                    orden: element.orden,
                    puntos: element.puntos
                };
                localStorage.setItem("usuario", JSON.stringify(usuario));


                const options = {
                    method: 'POST'
                }
                const url = "consultaInscritos.php";
                fetch(url, options)
                .then(res => res.json())
                .then(data => {
                    // const usuarios = [];
                    // usuarios.push(data);
                    data.forEach(usuario => {
                        console.log([usuario.correo]);
                        if (correoLG.value == usuario.correo) {
                            window.location.href = 'index.html';
                        } else {
                            window.location.href = 'inscripcion.html';
                            console.log('yea');
                        }
                    })
                })

                // console.log('aqui esta');
            } else {
                warning.classList.remove('inactive');
                setTimeout(function() {
                    warning.classList.add('inactive');
                }, 4000);
            }
        }
    });
});