
document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("form");

var calendarEl = document.getElementById('calendario');
  var calendar = new FullCalendar.Calendar(calendarEl, {

    initialView: 'dayGridMonth',
    locale: "es",

    headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,listWeek'

    },

    dateClick:function(info){
        $("#evento").modal("show");
    }

  });
  calendar.render();

  document.getElementById("btnGuardar").addEventListener("click", function(){
      const datos= new FormData(formulario);

      console.log(datos);
      console.log(formulario.activity.value)

    axios.post("http://127.0.0.1:8000/actividades", datos).
    then(
        (respuesta)=>{
            $('#evento').modal("hide");
        }
    ).catch(
        error=>(error.reponse.data)
    )
  })
});


