const { default: axios } = require('axios')
const Swal = require('sweetalert2')

const proyectoUrl = document.querySelector('#eliminar-proyecto')

if (proyectoUrl) {
    proyectoUrl.addEventListener('click', () => {
        Swal.fire({
            title: 'Desea elminar este proyecto?',
            text: "Esta accion no se puede revertir!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3B82F6',
            cancelButtonColor: '#EF4444',
            confirmButtonText: 'Si, eliminalo!',
            cancelButtonText: 'No!'
        }).then((result) => {
            if (result.isConfirmed) {
                const id = proyectoUrl.dataset.id;
                axios.delete(`/proyectos/${id}`)
                    .then(response => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'El proyecto ha sido eliminado',
                            showConfirmButton: false,
                            timer: 1500
                          })
                        setTimeout(() => {
                            window.location.href = '/proyectos'
                        }, 1500);
                    })
                    .catch(err => {
                        Swal.fire(
                            'Error!',
                            'Algo salio mal!',
                            'error'
                        )
                    })
            }
        })
    })
}
