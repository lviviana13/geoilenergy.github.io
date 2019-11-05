import Swal from "sweetalert2";

function formSend() {
    Swal.fire({
        icon: 'question',
        title: '¿Desea ponerse en contácto con nosotros?',
        text: 'Se enviará un correo con la información suministrada',
        showCancelButton: true,
        cancelButtonText: 'No! Cancelar',
        confirmButtonText: 'Si! Enviar',
        showLoaderOnConfirm: true,
    }).then(isConfirm => {
        if (isConfirm.value) {
            let form = document.getElementById('contactForm');
            let csfr = document.getElementById('csfr').value;
            let params = new FormData(form);
            fetch('/contact', {
                headers: {
                    'X-CSRF-TOKEN': csfr
                },
                method: 'POST',
                body: params
            }).then(response => {
                if (response.ok && response.status === 200)
                    return response.json()

                throw new Error('Ha ocurrido un error')
            }).then(respuesta => {
                console.log(respuesta)
            }).catch(error => {
                console.log(error)
            })
        }
    })
}

window.onload = () => {
    document.getElementById('contactForm').addEventListener('submit', event => {
        event.preventDefault();
        formSend();
    })
};