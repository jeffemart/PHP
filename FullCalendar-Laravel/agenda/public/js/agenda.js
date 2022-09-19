document.addEventListener('DOMContentLoaded', function() {
    let formulario = document.querySelector("#formularioEventos");
    var calendarEl = document.getElementById('agenda');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: "pt-br",
        displayEventTime: false,
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth'
        },
        events: baseURL+"/evento/mostrar",
        //EventSources:{
        //    url: baseURL+"/evento/mostrar",
        //    method:"GET",
        //    extraParams: {
        //        _token: formulario._token.value,
        //    }
        //    },
        dateClick:function(info){
            formulario.reset();
            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;
            $("#evento").modal("show");
        },
        eventClick:function (info) {
            var evento = info.event;
            console.log(evento);
            axios.post(baseURL+"/evento/editar/"+info.event.id).
            then(
                (resposta) => {
                    formulario.id.value = resposta.data.id;
                    formulario.title.value = resposta.data.title;
                    formulario.descripcion.value = resposta.data.descripcion;
                    formulario.start.value = resposta.data.start;
                    formulario.end.value = resposta.data.end;
                    
                    $("#evento").modal("show");
                }
            ).catch(
                error => {
                    if(error.response){
                        console.log(error.response.data)
                    }
                }
            )
        }
    });

    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click",function(){
        enviarDatos("/evento/adicionar/");
    });
    document.getElementById("btnEliminar").addEventListener("click",function(){
        enviarDatos("/evento/excluir/"+formulario.id.value);
    });
    document.getElementById("btnModificar").addEventListener("click",function(){
        enviarDatos("/evento/atualizar/"+formulario.id.value);
    });

    function enviarDatos(url){
        const datos = new FormData(formulario);
        const novaURL = baseURL + url;
        axios.post(novaURL, datos).
        then(
            (resposta) => {
                calendar.refetchEvents();
                $("#evento").modal("hide");
            }
        ).catch(
            error => {
                if(error.response){
                    console.log(error.response.data)
                }
            }
        )
    }

});
