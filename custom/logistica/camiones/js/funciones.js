function modal_Agregar() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'ajax/modal_agregar.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.querySelector('.modal-content').innerHTML = xhr.responseText;
            var modal = new bootstrap.Modal(document.getElementById('funcionesModal'));
            modal.show();
        } else if (xhr.readyState === 4) {
            document.querySelector('.modal-content').innerHTML = "<div class='text-center text-danger'>Error al cargar el contenido</div>";
        }
    };
    document.querySelector('.modal-content').innerHTML = "<div class='text-center'><div class='spinner-border m-5' role='status'></div></div>";
    xhr.send();
}

//Boton personalizado Datatable para Agregar camion
DataTable.ext.buttons.nuevo = {
    className: 'buttons-alert',
 
    action: function (e, dt, node, config) {
        modal_Agregar();
    }
};

/*$(document).ready(function(){
            mostrar_tabla();
			reportes();
		});*/

$(window).on('load',async function() {
    await mostrar_tabla();
    reportes();
    $('#loader').hide();
});

function reportes() {    
		new DataTable('#mostrar', {
    //paging: false,
    //scrollY: '600px',
    columnDefs: [{
        targets: [14,15], className: 'noExport'
    }],
    language: {
        url: 'librerias/DataTables/spanish.json',
    },
    dom: '<"top"fB>rt<"bottom"ip><"clear">',
    buttons: [
        {
          extend: 'nuevo',  //Llamo la extension 'nuevo' creada para mostrar el modal
          text: 'Nuevo'
        },
        {
            extend: 'excelHtml5',
            exportOptions: {
                columns: ':visible:not(.noExport)'
            }
        },
        {
            extend: 'pdfHtml5',
            orientation: 'landscape',
            pageSize: 'LEGAL',
            exportOptions: {
                columns: ':visible:not(.noExport)'
            }
        },
        {
            extend: 'print',
            exportOptions: {
                columns: ':visible:not(.noExport)'
            }
        }
    ]
});
	}
//---Modal Agregar Version JQuery---//
/*function modalAgregar(){
	$.ajax({
        url:'ajax/modal_agregar.php',
        beforeSend:function(){
			$(".modal-content").html("<div class='text-center'><div class='spinner-border m-5' role='status'></div></div>");
		},
        success:function(data){
        $(".modal-content").html(data);
                           }
                   })
}*/

function modalModificar(id){
	/*const boton = document.getElementById('btn-modificar');
	boton.dataset.bsToggle = 'modal';
    boton.dataset.bsTarget = '.modal-content';*/
	$.ajax({
		url:'ajax/modal_modificar.php?id='+id,
		beforeSend:function(){
			$(".modal-content").html("<div class='text-center'><div class='spinner-border m-5' role='status'></div></div>");
		},
        success:function(data){
        	//console.log(data);
        $(".modal-content").html(data);
                           }
                   })
}

function modalImg(id){
  $.ajax({
        url:'ajax/modal_img.php?id='+id,
        beforeSend:function(){
      $(".modal-content").html("<div class='text-center'><div class='spinner-border m-5' role='status'></div></div>");
    },
        success:function(data){
        $(".modal-content").html(data);
        var imageSrc = $('.active').find('img').attr('src');
        var btnBorrar = $('#btnBorrar');
        if (imageSrc == undefined) {
          btnBorrar.attr("disabled", "disabled");
        }
                           }
                   })
}

function checkEstatus(){
	const checkBox = document.getElementById('estatus');
	const checkLable = document.getElementById('label-estatus');
	if (checkBox.checked == true) {
		checkBox.value = 1;
		checkLable.innerHTML = 'Estatus: Activo';
	} else{
		checkBox.value = 0;
		checkLable.innerHTML = 'Estatus: Inactivo';
	}

}

async function agregar_cam(){
    event.preventDefault();

    var estatusSeleccionado = $('input[name="estatus"]:checked').val();

    var formData = {
      camion: $("#camion").val(),
      placa: $("#placa").val(),
      marca: $("#marca").val(),
      modelo: $("#modelo").val(),
      color: $("#color").val(),
      year: $("#year").val(),
      tipo: $("#tipo").val(),
      largo: $("#largo").val(),
      ancho: $("#ancho").val(),
      profundidad: $("#profundidad").val(),
      capacidad: $("#capacidad").val(),
      estatus: estatusSeleccionado,
      unidad: $("#unidad").val(),
    };

    //console.log(formData);
    $.ajax({
      type: "POST",
      url: "ajax/agregar_cam.php",
      data: formData,
      dataType: "json",
      encode: true,
      beforeSend:function(){
      	$("#btn-agregar").html("<div class='spinner-border spinner-border-sm' role='status'></div>");
      },
      success:async function(data) {
      	//console.log(data.success);
      	//console.log(data.errors);
      	console.log(data.datos);
      	//alert(data.success+": "+data.errors);
        if (data.success != false) {
          $("#msg").html(data.success).removeClass().addClass("alert alert-success");
          $("#btn-agregar").html("<button type='submit' class='btn btn-primary' onclick='agregar_cam();'>Modificar Camion</button>");
          await mostrar_tabla();
          reportes();
        }else{
          $("#msg").html(data.errors).removeClass().addClass("alert alert-danger");
          $("#btn-agregar").html("<button type='submit' class='btn btn-primary' onclick='agregar_cam();'>Modificar Camion</button>");
        }
      }
    }).fail(function(error){
    	var errormsg = error.responseText;
    	alert("Error en la solicitud: Revise la consola");
    	console.log("Error en la solicitud: ",errormsg);
    });

}

function modificar_cam(){

event.preventDefault();

var estatusSeleccionado = $('input[name="estatus"]:checked').val();

  var formData = {
      id: $("#id_camion").val(),
      camion: $("#camion").val(),
      placa: $("#placa").val(),
      marca: $("#marca").val(),
      modelo: $("#modelo").val(),
      color: $("#color").val(),
      year: $("#year").val(),
      tipo: $("#tipo").val(),
      largo: $("#largo").val(),
      ancho: $("#ancho").val(),
      profundidad: $("#profundidad").val(),
      capacidad: $("#capacidad").val(),
      estatus: estatusSeleccionado,
      unidad: $("#unidad").val(),
  };
    //console.log(formData);
  $.ajax({
      type: "POST",
      url: "ajax/modificar_cam.php",
      data: formData,
      dataType: "json",
      encode: true,
      beforeSend:function(){
        $("#btn-modificar").html("<div class='spinner-border spinner-border-sm' role='status'></div>");
      },
      success:async function(data) {
        //console.log(data.success);
        //console.log(data.errors);
        console.log(data.datos);
        //alert(data.success+": "+data.errors);
        if (data.success != false) {
          $("#msg").html(data.success).removeClass().addClass("alert alert-success");
          $("#btn-modificar").html("<button type='submit' class='btn btn-primary' onclick='modificar_cam();'>Modificar Camion</button>");
          await mostrar_tabla();
          reportes();
        }else{
          $("#msg").html(data.errors).removeClass().addClass("alert alert-danger");
          $("#btn-modificar").html("<button type='submit' class='btn btn-primary' onclick='modificar_cam();'>Modificar Camion</button>");
        }
      }
  }).fail(function(error){
      var errormsg = error.responseText;
      alert("Error en la solicitud: Mas informacion en la consola");
      console.log("Error en la solicitud: ",errormsg);
  });

}


async function subir_foto(id, placa){

  event.preventDefault();
  //console.log($placa);
  const $inputArchivos = document.querySelector("#foto"),
    //$btnEnviar = document.querySelector("#btnEnviar"),
    $estado = document.querySelector("#msg");
    
    const archivosParaSubir = $inputArchivos.files;
    if (archivosParaSubir.length <= 0) {
        // Si no hay archivos, no continuamos
        $estado.classList.add('alert-danger');
        $estado.textContent = "Seleccione un archivo!";
        return;
    }
    // Preparamos el formdata
    const formData = new FormData();
    // Agregamos cada archivo a "archivos[]". Los corchetes son importantes
    for (const archivo of archivosParaSubir) {
        formData.append("archivos[]", archivo);
    }
    formData.append('id', id);
    formData.append('placa', placa);
    // Los enviamos
    $estado.classList.remove('alert-danger');
    $estado.classList.add('alert-success');
    $estado.textContent = "Enviando archivos...";
    const respuestaRaw = await fetch("./ajax/subir_foto.php", {
        method: "POST",
        body: formData,
    });
    const respuesta = await respuestaRaw.json();
    // Puedes manejar la respuesta como tú quieras
    console.log({ respuesta });
    // Finalmente limpiamos el campo
    $inputArchivos.value = null;
    if (respuesta.errores != false) {
      $estado.classList.remove('alert-success');
      $estado.classList.add('alert-danger');
      $estado.textContent = respuesta.errores;
    } else{
      $estado.textContent = respuesta.foto;
      setTimeout(function() {
        modalImg(id);
      }, 3000);
    }
}

async function borrar_foto(id){
  event.preventDefault();
  $estado = document.querySelector("#msg");
  var imageSrc = document.querySelector('.active img').getAttribute('src');
  var image = imageSrc.replace("logistica/","");
  var id_img = document.querySelector(".active #id_img").getAttribute('value');
  //console.log(image);
  var formData = new FormData();
  formData.append('imagen',image);
  formData.append('id',id);
  formData.append('id_img',id_img);
  $estado.classList.add('alert-success');
  $estado.textContent = "Eliminando Imagen...";
  const respuestaRaw = await fetch("./ajax/borrar_foto.php", {
        method: "POST",
        body: formData,
    });
  const respuesta = await respuestaRaw.json();
  console.log(respuesta);
  if (respuesta.errores != false) {
      $estado.classList.remove('alert-success');
      $estado.classList.add('alert-danger');
      $estado.textContent = respuesta.img;
    } else{
      $estado.textContent = respuesta.img + ", " + respuesta.query;
      setTimeout(function() {
        modalImg(id);
      }, 3000);
    }
}

function Confirmar(id){
    var retVal = window.confirm("¿Seguro desea continuar?");
    if( retVal == true ){
        borrar_foto(id);
    }
}

async function mostrar_tabla(){
var tabla = document.getElementById("tabla");
const respuestaRaw = await fetch("./ajax/tabla.php");

    const respuesta = await respuestaRaw.text();
    tabla.innerHTML = respuesta;
    //console.log(tabla); 
}