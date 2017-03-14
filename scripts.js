$(document).ready(function(){    
                //animación inicial del header:
                $("header").show("drop",{direction:'right'},1000);
                //cursor en el menú:
                $("li").hover(function(){
                    $(this).addClass('mano');
                });  
//******** SOLICITUD DE TAXIS ***********
//FORMALIZAR PEDIDO TAXI:               
                //acción de clicar en el menú formalizar
                $('#formalizar').click(function(){
                    //$(".contenido").toggleClass('hidden');
                    $.get('formalizar3.php',function(data){
                       $(".contenido").html(data);  
                    });
                });
                //clicar en el submit del formulario
                //aparece formalizar4.php en .contenido
                $('#formalizar_primer_formulario form').submit(function(event) {
                  event.preventDefault();
                  var formValues = $(this).serialize();
                  $.post('formalizar4.php', formValues ,function(data){
                      $('.contenido').html(data);
                  });     
                });
                //clicar el botón submit del form anterior hace aparecer
                // formalizar5.php
                $('#formalizar_segundo_formulario').submit(function(event) {
                  event.preventDefault();
                  var formValues = $(this).serialize();
                  $.post('formalizar5.php', formValues ,function(data){
                      $('.contenido').html(data);
                  });     
                });
//FINALIZAR CARRERA TAXI:
                //acción de clicar en el menú finalizar
                $('#finalizar').click(function(){
                    //$(".contenido").toggleClass('hidden');
                    $.get('finalizar4.php',function(data){
                       $(".contenido").html(data);  
                    });
                });
                //clicar en el submit del formulario
                //aparece altas.php en .contenido
                $('#finalizar_primer_formulario form').submit(function(event) {
                  event.preventDefault();
                  var formValues = $(this).serialize();
                  $.post('finalizar5.php', formValues ,function(data){
                      $('.contenido').html(data);
                  });     
                });
//******** CONTROL TAXIS ***********
//ALTA NUEVOS TAXIS:
                //clicar en el menú alta nuevos taxis   
                $('#submenu2 #alta').click(function(){
                    $(".contenido").load('altas.html');
                });
                //clicar en el submit del formulario
                //aparece altas.php en .contenido
                $('#form_altas form').submit(function(event) {
                  event.preventDefault();
                  var formValues = $(this).serialize();
                  $.post('altas2.php', formValues ,function(data){
                      $('.contenido').html(data);
                  });     
                });
//FIN ALTA NUEVOS TAXIS     
//LISTADO GENERAL DE TAXIS:
//                //acción de clicar en el menú listado
//                //enlazar con la pagina ------------------listado.php
                //devolver resultado pagina listado.php:
                $('#listado').click(function(){
                    //$(".contenido").toggleClass('hidden');
                    $.get('listado.php',function(data){
                       $(".contenido").html(data);  
                    });
                });
//FIN LISTADO GENERAL DE TAXIS
//MODIFICAR DATOS TAXI:
                //acción de clicar en el menú modificar
                $('#submenu2 #modificar').click(function(){
                    //$(".contenido").toggleClass('hidden');
                    $.get('modificar3.php',function(data){
                       $(".contenido").html(data);  
                    });
                });
                //clicar el botón submit del form anterior hace aparecer
                // modificar4.php
                $('#modificar_datos form').submit(function(event) {
                  event.preventDefault();
                  var formValues = $(this).serialize();
                  $.post('modificar4.php', formValues ,function(data){
                      $('.contenido').html(data);
                  });     
                });
                //clicar el botón submit del form anterior hace aparecer
                // modificar5.php
                $('#form_flota_modificar').submit(function(event) {
                  event.preventDefault();
                  var formValues = $(this).serialize();
                  $.post('modificar5.php', formValues ,function(data){
                      $('.contenido').html(data);
                  });     
                });            
//FIN MODIFICAR DATOS TAXI
//******** GESTIÓN CAJA ***********
//GESTIÓN CAJA:
                $('#submenu3').click(function(){
                    $(".contenido").load('gestioncaja.html');
                });
                //clicar el botón submit del form anterior hace aparecer
                // gestioncaja.php
                $('#formulario_gestion_caja').submit(function(event) {
                  event.preventDefault();
                  var formValues = $(this).serialize();
                  $.post('gestioncaja.php', formValues ,function(data){
                      $('.contenido').html(data);
                  });     
                });       
//FIN GESTIÓN CAJA
});
