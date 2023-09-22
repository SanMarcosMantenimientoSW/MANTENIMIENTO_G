$(document).ready(function () {
    verificar_sesion();
    llenar_zonas();
    function verificar_sesion() {
        funcion = 'verificar_sesion';
        $.post('controllers/UsuarioController.php', { funcion }, (response) => {
            if (response != '') {
                let sesion = JSON.parse(response);
                $('#nav_login').hide();
                $('#nav_register').hide();
                $('#usuario_nav').text(sesion.user);
                $('#avatar_nav').attr('src', 'Util/Img/Users/' + sesion.avatar);
                $('#avatar_menu').attr('src', 'Util/Img/Users/' + sesion.avatar);
                $('#usuario_menu').text(sesion.user);
            } else {
                $('#nav_usuario').hide();
            }
        })
    }
    async function llenar_zonas() {
        funcion = "llenar_zonas";
        let data = await fetch('Controllers/ZonaController.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'funcion=' + funcion
        })
        if (data.ok) {
            let response = await data.text();
            try {
                let zonas = JSON.parse(response);
                //console.log(zonas);
                let template = ``;
                zonas.forEach(zona => {
                    template += `
                    <div class="col-sm-2">
                        <div class="card">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                <img src="Util/Img/zona/${zona.imagen}" class="img-fluid">
                                </div>
                                <div class="col-sm-12">
                                <a href="Views/descripcion.php?name=${zona.nombre}&&id=${zona.id}" class="titulo_producto">${zona.nombre}</a><br>
                                <span class="text-muted-float-left">${zona.responsable}</span><br>
                                
                                <span class="badge bg-success">${zona.tipo}</span><br>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    `;
                });
                $('#zonas').html(template);
            } catch (error) {
                console.error(error);
                console.log(response);
            }

        } else {
            Swal.fire({
                icon: 'error',
                title: data.statusText,
                text: 'Hubo conflicto de codigo: ' + data.status,
            })
        }
    }
})