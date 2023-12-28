var modalEvento;

modalEvento = new bootstrap.Modal(document.getElementById('modalEvento'), {
  keyboard: false
});
var calendar;

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: "es",
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay'
    },
    dateClick: function(informacion) {

      limpiarFormulario(informacion.dateStr);
      // alert("Presionaste "+informacion.dateStr);
      modalEvento.show();

    },
    eventClick: function(informacion) {
      console.log(informacion);
      modalEvento.show();
      recuperarDatosEvento(informacion.event);

    },
    events: "api.php"
  });
  calendar.render();
});



function recuperarDatosEvento(evento) {
    limpiarErrores();
    var fecha = evento.startStr.split("T");
    var hora = fecha[1].split(":");

    document.getElementById('id').value = evento.id;
    document.getElementById('titulo').value = evento.title;
    document.getElementById('fecha').value = fecha[0];
    document.getElementById('hora').value = hora[0] + ":" + hora[1];
    document.getElementById('descripcion').value = evento.extendedProps.descripcion;
    document.getElementById('color').value = evento.backgroundColor;

    document.getElementById('btnBorrar').removeAttribute('disabled', "");
    document.getElementById('btnGuardar').removeAttribute('disabled', "");


  }

  function borrarEvento() {
    enviarDatosApi("borrar");

  }

  function agregarEvento() {

    if (document.getElementById('titulo').value == "") {
      document.getElementById('titulo').classList.add('is-invalid');
      return true;
    }



    accion = (document.getElementById("id").value == 0) ? "agregar" : "actualizar";
    enviarDatosApi(accion);

  }

  function enviarDatosApi(accion) {
    fetch("api.php?accion=" + accion, {
        method: "POST",
        body: recolectarDatos()
      })
      .then(data => {
        console.log(data);
        calendar.refetchEvents();
        modalEvento.hide();
      })
      .catch(error => {
        console.log(error);
      });
  }

  function recolectarDatos() {
    var evento = new FormData();
    evento.append("title", document.getElementById('titulo').value);
    evento.append("fecha", document.getElementById('fecha').value);
    evento.append("hora", document.getElementById('hora').value);
    evento.append("descripcion", document.getElementById('descripcion').value);
    evento.append("color", document.getElementById('color').value);
    evento.append("id", document.getElementById('id').value);
    return evento;
  }

  function limpiarFormulario(fecha) {
    limpiarErrores();
    document.getElementById('titulo').value = "";
    document.getElementById('fecha').value = fecha;
    document.getElementById('hora').value = "12:00";
    document.getElementById('descripcion').value = "";
    document.getElementById('color').value = "";
    document.getElementById('id').value = "";
    document.getElementById('btnBorrar').setAttribute('disabled', "disabled");
  }

  function limpiarErrores() {
    document.getElementById('titulo').classList.remove('is-invalid');
  }