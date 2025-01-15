//primer modal registrar supervisor 

document.addEventListener("DOMContentLoaded", function() {
    let cerrar = document.querySelectorAll(".cerrar")[0];
    let abrir = document.querySelectorAll(".btn-tb")[0];
    let modal = document.querySelectorAll(".modal")[0];
    let modalC = document.querySelectorAll(".modal-container")[0];
  
    abrir.addEventListener("click", function(e) {
        e.preventDefault();
        modalC.style.opacity = "1";
        modalC.style.visibility = "visible";
        modal.classList.toggle("modal-close");
    });
  
    cerrar.addEventListener("click", function(){
        modal.classList.toggle("modal-close");
  
        setTimeout(function(){
            modalC.style.opacity = "0";
            modalC.style.visibility = "hidden";
        },600)
    });
  
    window.addEventListener("click", function(e){
        if(e.target == modalC){
            modal.classList.toggle("modal-close");
  
            setTimeout(function(){
                modalC.style.opacity = "0";
                modalC.style.visibility = "hidden";
            },600)
        }
    });
});

// segundo modal editar supervisor 

document.addEventListener("DOMContentLoaded", function() {
    let cerrar_edi = document.querySelectorAll(".i-cerrar")[0];
    let abrir_1 = document.querySelectorAll(".btn-edit");
    let modal_edi = document.querySelectorAll(".m-abierto")[0];
    let modalC_edi = document.querySelectorAll(".pantalla")[0];
    const UsuId = document.getElementById("UsuId");
    const UsuUsuario = document.getElementById("UsuUsuario");
    const UsuClave = document.getElementById("UsuClave");
    // const UsuRol = document.getElementById("UsuRol");

    


    for (let i = 0; i < abrir_1.length; i++) {
        abrir_1[i].addEventListener("click", function(e) {
            e.preventDefault();
            const fila = abrir_1[i].parentElement.parentElement;
            const id = fila.children[0].textContent;
            const usuario = fila.children[1].textContent;
            const clave = fila.children[2].textContent;
            const rol = fila.children[3].textContent;

            
            
            UsuId.value = id;
            UsuUsuario.value = usuario;
            UsuClave.value = clave;
            // UsuRol.children[0].value = rol;
            // UsuRol.children[0].text = rol;

            modalC_edi.style.opacity = "1";
            modalC_edi.style.visibility = "visible";
            modal_edi.classList.toggle("m-cerrado");
        });
    } 

    cerrar_edi.addEventListener("click", function(){
        modal_edi.classList.toggle("m-cerrado");
  
        setTimeout(function(){
            modalC_edi.style.opacity = "0";
            modalC_edi.style.visibility = "hidden";
        },600)
    });
  
    window.addEventListener("click", function(e){
        if(e.target == modalC_edi){
            modal_edi.classList.toggle("m-cerrado");
  
            setTimeout(function(){
                modalC_edi.style.opacity = "0";
                modalC_edi.style.visibility = "hidden";
            },600)
        }
    });
});

//tercer modal registrar operario

document.addEventListener("DOMContentLoaded", function() {
    let cerrar_Ope = document.querySelectorAll(".cerrar-Ope")[0];
    let abrir_Ope = document.querySelectorAll(".btn-ageOpe")[0];
    let modal_Ope = document.querySelectorAll(".modal-Ope")[0];
    let modalC_Ope = document.querySelectorAll(".fonModal-Ope")[0];
  
    abrir_Ope.addEventListener("click", function(e) {
        e.preventDefault();
        modalC_Ope.style.opacity = "1";
        modalC_Ope.style.visibility = "visible";
        modal_Ope.classList.toggle("modalX-Ope");
    });
  
    cerrar_Ope.addEventListener("click", function(){
        modal_Ope.classList.toggle("modalX-Ope");
  
        setTimeout(function(){
            modalC_Ope.style.opacity = "0";
            modalC_Ope.style.visibility = "hidden";
        },600)
    });
  
    window.addEventListener("click", function(e){
        if(e.target == modalC_Ope){
            modal_Ope.classList.toggle("modalX-Ope");
  
            setTimeout(function(){
                modalC_Ope.style.opacity = "0";
                modalC_Ope.style.visibility = "hidden";
            },600)
        }
    });
});

// cuarto modal editar operario

document.addEventListener("DOMContentLoaded", function() {
    let cerrar_edi_Ope = document.querySelectorAll(".i-cerrar-Ope")[0];
    let abrir_Ope = document.querySelectorAll(".btn-editOpe");
    let modal_edi_Ope = document.querySelectorAll(".m-abierto-Ope")[0];
    let modalC_edi_Ope = document.querySelectorAll(".pantallaOpe")[0];
    const UsuId_Ope = document.getElementById("UsuId");
    const UsuUsuario_Ope = document.getElementById("UsuUsuario");
    const UsuClave_Ope = document.getElementById("UsuClave");
    // const UsuRol = document.getElementById("UsuRol");

    for (let i = 0; i < abrir_Ope.length; i++) {
        abrir_Ope[i].addEventListener("click", function(e) {
            e.preventDefault();
            const fila_Ope = abrir_Ope[i].parentElement.parentElement;
            const id_Ope = fila_Ope.children[0].textContent;
            const usuario_Ope = fila_Ope.children[1].textContent;
            const clave_Ope = fila_Ope.children[2].textContent;
            // const rol = fila.children[3].textContent;

            UsuId_Ope.value = id_Ope;
            UsuUsuario_Ope.value = usuario_Ope;
            UsuClave_Ope.value = clave_Ope;
            // UsuRol.children[0].value = rol;
            // UsuRol.children[0].text = rol;

            modalC_edi_Ope.style.opacity = "1";
            modalC_edi_Ope.style.visibility = "visible";
            modal_edi_Ope.classList.toggle("m-cerrado-Ope");
        });
    } 

    cerrar_edi_Ope.addEventListener("click", function(){
        modal_edi_Ope.classList.toggle("m-cerrado-Ope");
  
        setTimeout(function(){
            modalC_edi_Ope.style.opacity = "0";
            modalC_edi_Ope.style.visibility = "hidden";
        },600)
    });
  
    window.addEventListener("click", function(e){
        if(e.target == modalC_edi_Ope){
            modal_edi_Ope.classList.toggle("m-cerrado-Ope");
  
            setTimeout(function(){
                modalC_edi_Ope.style.opacity = "0";
                modalC_edi_Ope.style.visibility = "hidden";
            },600)
        }
    });
});

//quinto modal registrar tarifa

document.addEventListener("DOMContentLoaded", function() {
    let cerrar_Tar = document.querySelectorAll(".cerrar-Tar")[0];
    let abrir_Tar = document.querySelectorAll(".btn-ageTar")[0];
    let modal_Tar = document.querySelectorAll(".modal-Tar")[0];
    let modalC_Tar = document.querySelectorAll(".fonModal-Tar")[0];
  
    abrir_Tar.addEventListener("click", function(e) {
        e.preventDefault();
        modalC_Tar.style.opacity = "1";
        modalC_Tar.style.visibility = "visible";
        modal_Tar.classList.toggle("modalX-Tar");
    });
  
    cerrar_Tar.addEventListener("click", function(){
        modal_Tar.classList.toggle("modalX-Tar");
  
        setTimeout(function(){
            modalC_Tar.style.opacity = "0";
            modalC_Tar.style.visibility = "hidden";
        },600)
    });
  
    window.addEventListener("click", function(e){
        if(e.target == modalC_Tar){
            modal_Tar.classList.toggle("modalX-Tar");
  
            setTimeout(function(){
                modalC_Tar.style.opacity = "0";
                modalC_Tar.style.visibility = "hidden";
            },600)
        }
    });
});

// sexto modal editar tarifa

/*
 Espera a que el DOM cargue antes de ejecutar la función principal
*/
document.addEventListener("DOMContentLoaded", function() {
    
    // Obtener elementos del DOM
    let cerrar_edi_Tar = document.querySelectorAll(".i-cerrar-Tar")[0];
    let abrir_Tar = document.querySelectorAll(".btn-editTar");
    let modal_edi_Tar = document.querySelectorAll(".m-abierto-Tar")[0];
    let modalC_edi_Tar = document.querySelectorAll(".pantallaTar")[0];
    //id del valor 
    const TarId = document.getElementById("TarId");
    const TarVehiculo = document.getElementById("TarVehiculo");
    const TarTarifa = document.getElementById("TarTarifa");
    const TarValor = document.getElementById("TarValor");
    
    // Iterar sobre cada botón "Editar" y agregar un listener
    for (let i = 0; i < abrir_Tar.length; i++) {
        abrir_Tar[i].addEventListener("click", function(e) {
            e.preventDefault();
            
            // Obtener valores de la fila correspondiente a este botón
            const fila_Tar = abrir_Tar[i].parentElement.parentElement;
            const IdTar = fila_Tar.children[0].textContent;
            const TarVeh = fila_Tar.children[1].textContent;
            const TarTar = fila_Tar.children[2].textContent;
            const TarVal = fila_Tar.children[3].textContent;
            
            // Actualizar los valores de los campos de texto del formulario modal
            TarId.value = IdTar;
            TarVehiculo.children[0].value = TarVeh;
            TarVehiculo.children[0].text = TarVeh;
            TarTarifa.children[0].value = TarTar;
            TarTarifa.children[0].text = TarTar;
            TarValor.value = TarVal;

            //console.log(TarId, TarVehiculo, TarTarifa, TarValor);
            
            // Mostrar el formulario modal
            modalC_edi_Tar.style.opacity = "1";
            modalC_edi_Tar.style.visibility = "visible";
            modal_edi_Tar.classList.toggle("m-cerrado-Tar");
        });
    } 

    // Agregar listener al botón "Cerrar" del formulario modal
    cerrar_edi_Tar.addEventListener("click", function(){
        modal_edi_Tar.classList.toggle("m-cerrado-Tar");
  
        // Esperar a que la animación termine antes de ocultar el formulario modal
        setTimeout(function(){
            modalC_edi_Tar.style.opacity = "0";
            modalC_edi_Tar.style.visibility = "hidden";
        },600)
    });
  
    // Agregar listener al fondo oscuro del formulario modal
    window.addEventListener("click", function(e){
        if(e.target == modalC_edi_Tar){
            modal_edi_Tar.classList.toggle("m-cerrado-Tar");
  
            // Esperar a que la animación termine antes de ocultar el formulario modal
            setTimeout(function(){
                modalC_edi_Tar.style.opacity = "0";
                modalC_edi_Tar.style.visibility = "hidden";
            },600)
        }
    });
});

//septimo modal registrar mensualidad

document.addEventListener("DOMContentLoaded", function() {
    let cerrar_Men = document.querySelectorAll(".cerrar-Men")[0];
    let abrir_Men = document.querySelectorAll(".btn-ageMen")[0];
    let modal_Men = document.querySelectorAll(".modal-Men")[0];
    let modalC_Men = document.querySelectorAll(".fonModal-Men")[0];
  
    abrir_Men.addEventListener("click", function(e) {
        e.preventDefault();
        modalC_Men.style.opacity = "1";
        modalC_Men.style.visibility = "visible";
        modal_Men.classList.toggle("modalX-Men");
    });
  
    cerrar_Men.addEventListener("click", function(){
        modal_Men.classList.toggle("modalX-Men");
  
        setTimeout(function(){
            modalC_Men.style.opacity = "0";
            modalC_Men.style.visibility = "hidden";
        },600)
    });
  
    window.addEventListener("click", function(e){
        if(e.target == modalC_Men){
            modal_Men.classList.toggle("modalX-Men");
  
            setTimeout(function(){
                modalC_Men.style.opacity = "0";
                modalC_Men.style.visibility = "hidden";
            },600)
        }
    });
});

// octavo modal editar mensualdMen

/*
 Espera a que el DOM cargue antes de ejecutar la función principal
*/
document.addEventListener("DOMContentLoaded", function() {
    
    // Obtener elementos del DOM
    let cerrar_edi_Men = document.querySelectorAll(".i-cerrar-Men")[0];
    let abrir_Men = document.querySelectorAll(".btn-editMen");
    let modal_edi_Men = document.querySelectorAll(".m-abierto-Men")[0];
    let modalC_edi_Men = document.querySelectorAll(".pantallaMen")[0];
    //id del valor 
    const MenId = document.getElementById("MenId");
    const MenPlaca = document.getElementById("MenPlaca");
    const MenVehiculo = document.getElementById("MenVehiculo");
    //const MenDias = document.getElementById("MenDias");
    const MenFecha_Ini = document.getElementById("MenFecha_Ini");

    // Iterar sobre cada botón "Editar" y agregar un listener
    for (let i = 0; i < abrir_Men.length; i++) {
        abrir_Men[i].addEventListener("click", function(e) {
            e.preventDefault();
            
            // Obtener valores de la fila correspondiente a este botón
            const fila_Men = abrir_Men[i].parentElement.parentElement;
            const IdMen = fila_Men.children[0].textContent;
            const MenPla = fila_Men.children[1].textContent;
            const MenVeh = fila_Men.children[2].textContent;
            //const MenDia = fila_Men.children[3].textContent;
            const MenFec = fila_Men.children[4].textContent;
            
            // Actualizar los valores de los campos de texto del formulario modal
            MenId.value = IdMen;
            MenPlaca.value = MenPla;
            MenVehiculo.children[0].value = MenVeh;
            MenVehiculo.children[0].text = MenVeh;
            //MenDias.children[0].value = MenDia;
            //MenDias.children[0].text = MenDia;           
            MenFecha_Ini.value = MenFec;
            
            // Mostrar el formulario modal
            modalC_edi_Men.style.opacity = "1";
            modalC_edi_Men.style.visibility = "visible";
            modal_edi_Men.classList.toggle("m-cerrado-Men");
        });
    } 

    // Agregar listener al botón "Cerrar" del formulario modal
    cerrar_edi_Men.addEventListener("click", function(){
        modal_edi_Men.classList.toggle("m-cerrado-Men");
  
        // Esperar a que la animación termine antes de ocultar el formulario modal
        setTimeout(function(){
            modalC_edi_Men.style.opacity = "0";
            modalC_edi_Men.style.visibility = "hidden";
        },600)
    });
  
    // Agregar listener al fondo oscuro del formulario modal
    window.addEventListener("click", function(e){
        if(e.target == modalC_edi_Men){
            modal_edi_Men.classList.toggle("m-cerrado-Men");
  
            // Esperar a que la animación termine antes de ocultar el formulario modal
            setTimeout(function(){
                modalC_edi_Men.style.opacity = "0";
                modalC_edi_Men.style.visibility = "hidden";
            },600)
        }
    });
});

//noveno modal registrar vehiculo

document.addEventListener("DOMContentLoaded", function() {
    let cerrar_Veh = document.querySelectorAll(".cerrar-Veh")[0];
    let abrir_Veh = document.querySelectorAll(".btn-ageVeh")[0];
    let modal_Veh = document.querySelectorAll(".modal-Veh")[0];
    let modalC_Veh = document.querySelectorAll(".fonModal-Veh")[0];
  
    abrir_Veh.addEventListener("click", function(e) {
        e.preventDefault();
        modalC_Veh.style.opacity = "1";
        modalC_Veh.style.visibility = "visible";
        modal_Veh.classList.toggle("modalX-Veh");
    });
  
    cerrar_Veh.addEventListener("click", function(){
        modal_Veh.classList.toggle("modalX-Veh");
  
        setTimeout(function(){
            modalC_Veh.style.opacity = "0";
            modalC_Veh.style.visibility = "hidden";
        },600)
    });
  
    window.addEventListener("click", function(e){
        if(e.target == modalC_Veh){
            modal_Veh.classList.toggle("modalX-Veh");
  
            setTimeout(function(){
                modalC_Veh.style.opacity = "0";
                modalC_Veh.style.visibility = "hidden";
            },600)
        }
    });
});

// decimo modal recibo de ingreVeh

/*
 Espera a que el DOM cargue antes de ejecutar la función principal
*/
document.addEventListener("DOMContentLoaded", function() {
    
    // Obtener elementos del DOM
    let cerrar_edi_Veh = document.querySelectorAll(".i-cerrar-Veh")[0];
    let abrir_Veh = document.querySelectorAll(".btn-ImpIng");
    let modal_edi_Veh = document.querySelectorAll(".m-abierto-Veh")[0];
    let modalC_edi_Veh = document.querySelectorAll(".pantallaVeh")[0];
    //id del valor 
    const VehTipo = document.getElementById("VehTipo");
    const VehPlaca = document.getElementById("VehPlaca");
    const VehModelo = document.getElementById("VehModelo");
    const VehColor = document.getElementById("VehColor");
    const VehHoraEntrada = document.getElementById("VehHoraEntrada");
    

    // Iterar sobre cada botón "Editar" y agregar un listener
    for (let i = 0; i < abrir_Veh.length; i++) {
        abrir_Veh[i].addEventListener("click", function(e) {
            e.preventDefault();
            
            // Obtener valores de la fila correspondiente a este botón
            const fila_Veh = abrir_Veh[i].parentElement.parentElement;
            const tipo = fila_Veh.children[0].textContent;
            const placa = fila_Veh.children[1].textContent;
            const modelo = fila_Veh.children[2].textContent;
            const color = fila_Veh.children[3].textContent;
            const hora = fila_Veh.children[4].textContent;
        
            // Actualizar los valores de los campos de texto del formulario modal
            VehTipo.value = tipo;
            VehPlaca.value = placa;
            VehModelo.value = modelo;
            VehColor.value = color;
            VehHoraEntrada.value = hora;     
            
            // Mostrar el formulario modal
            modalC_edi_Veh.style.opacity = "1";
            modalC_edi_Veh.style.visibility = "visible";
            modal_edi_Veh.classList.toggle("m-cerrado-Veh");
        });
    } 

    // Agregar listener al botón "Cerrar" del formulario modal
    cerrar_edi_Veh.addEventListener("click", function(){
        modal_edi_Veh.classList.toggle("m-cerrado-Veh");
  
        // Esperar a que la animación termine antes de ocultar el formulario modal
        setTimeout(function(){
            modalC_edi_Veh.style.opacity = "0";
            modalC_edi_Veh.style.visibility = "hidden";
        },600)
    });
  
    // Agregar listener al fondo oscuro del formulario modal
    window.addEventListener("click", function(e){
        if(e.target == modalC_edi_Veh){
            modal_edi_Veh.classList.toggle("m-cerrado-Veh");
  
            // Esperar a que la animación termine antes de ocultar el formulario modal
            setTimeout(function(){
                modalC_edi_Veh.style.opacity = "0";
                modalC_edi_Veh.style.visibility = "hidden";
            },600)
        }
    });
});

//Imprimir recibo de ingreso 

function imprimir1() {
    let contenido = document.getElementById("ReciboIngreso").outerHTML;
    let contenidoOriginal = document.body.innerHTML;
    document.body.innerHTML = contenido;
  
    let estilo = "@media print { @page { size: A7 portrait; } .no-imprimir { display: none; } }";
    let hojaEstilo = document.createElement("style");
    hojaEstilo.innerHTML = estilo;
    document.head.appendChild(hojaEstilo);
    window.print();
    document.body.innerHTML = contenidoOriginal;
}

// doce modal pago

/*
 Espera a que el DOM cargue antes de ejecutar la función principal
*/
document.addEventListener("DOMContentLoaded", function() {
    
    // Obtener elementos del DOM
    let cerrar_edi_Pag = document.querySelectorAll(".i-cerrar-Pag")[0];
    let abrir_Pag = document.querySelectorAll(".btn-Pag");
    let modal_edi_Pag = document.querySelectorAll(".m-abierto-Pag")[0];
    let modalC_edi_Pag = document.querySelectorAll(".pantallaPag")[0];
    //id del valor 
    const VehPlacaP = document.getElementById("PagPlaca");
    const VehHoraEntradaP = document.getElementById("PagHoraEnt");
    const VehTipoP = document.getElementById("PagTipoVeh");
    
    // Iterar sobre cada botón "Editar" y agregar un listener
    for (let i = 0; i < abrir_Pag.length; i++) {
        abrir_Pag[i].addEventListener("click", function(e) {
            e.preventDefault();
            
            // Obtener valores de la fila correspondiente a este botón

            const fila_Pag = abrir_Pag[i].parentElement.parentElement;
            const placaP = fila_Pag.children[0].textContent;
            const horaP = fila_Pag.children[4].textContent;        
            const tipoP = fila_Pag.children[1].textContent;            
        
            // Actualizar los valores de los campos de texto del formulario modal
            VehPlacaP.value = placaP;
            VehHoraEntradaP.value = horaP;
            VehTipoP.children[0].value = tipoP;
            VehTipoP.children[0].text = tipoP;
            //PagTarifa.value = Tarifa;     
            
            // Mostrar el formulario modal
            modalC_edi_Pag.style.opacity = "1";
            modalC_edi_Pag.style.visibility = "visible";
            modal_edi_Pag.classList.toggle("m-cerrado-Pag");
        });
    } 

    // Agregar listener al botón "Cerrar" del formulario modal
    cerrar_edi_Pag.addEventListener("click", function(){
        modal_edi_Pag.classList.toggle("m-cerrado-Pag");
  
        // Esperar a que la animación termine antes de ocultar el formulario modal
        setTimeout(function(){
            modalC_edi_Pag.style.opacity = "0";
            modalC_edi_Pag.style.visibility = "hidden";
        },600)
    });
  
    // Agregar listener al fondo oscuro del formulario modal
    window.addEventListener("click", function(e){
        if(e.target == modalC_edi_Pag){
            modal_edi_Pag.classList.toggle("m-cerrado-Pag");
  
            // Esperar a que la animación termine antes de ocultar el formulario modal
            setTimeout(function(){
                modalC_edi_Pag.style.opacity = "0";
                modalC_edi_Pag.style.visibility = "hidden";
            },600)
        }
    });
});

// trece modal recibo pago

/*
 Espera a que el DOM cargue antes de ejecutar la función principal
*/
document.addEventListener("DOMContentLoaded", function() {
    
    // Obtener elementos del DOM
    let cerrar_edi_Pago = document.querySelectorAll(".i-cerrar-Pago")[0];
    let abrir_Pago = document.querySelectorAll(".btn-ImpPag");
    let modal_edi_Pago = document.querySelectorAll(".m-abierto-Pago")[0];
    let modalC_edi_Pago = document.querySelectorAll(".pantallaPago")[0];
    //id del valor 

    const PagPlaca = document.getElementById("PagPlaca");
    const PagHoraEnt = document.getElementById("PagHoraEnt");
    const PagHoraSalir = document.getElementById("PagHoraSalir");
    const PagTipoVeh = document.getElementById("PagTipoVeh");
    const PagTarifa = document.getElementById("PagTarifa");
    const PagValor = document.getElementById("PagValor");
   

    // Iterar sobre cada botón "Editar" y agregar un listener
    for (let i = 0; i < abrir_Pago.length; i++) {
        abrir_Pago[i].addEventListener("click", function(e) {
            e.preventDefault();
            
            // Obtener valores de la fila correspondiente a este botón
            const fila_Pago = abrir_Pago[i].parentElement.parentElement;

            const P_placa = fila_Pago.children[0].textContent;
            const P_entrada = fila_Pago.children[1].textContent;
            const P_salida = fila_Pago.children[2].textContent;
            const P_vehiculo = fila_Pago.children[3].textContent;
            const P_tarifa = fila_Pago.children[4].textContent;
            const P_valor = fila_Pago.children[5].textContent;
        
            // Actualizar los valores de los campos de texto del formulario modal
            PagPlaca.value = P_placa;
            PagHoraEnt.value = P_entrada;
            PagHoraSalir.value = P_salida;
            PagTipoVeh.value = P_vehiculo;
            PagTarifa.value = P_tarifa;
            PagValor.value = P_valor;
                
            
            // Mostrar el formulario modal
            modalC_edi_Pago.style.opacity = "1";
            modalC_edi_Pago.style.visibility = "visible";
            modal_edi_Pago.classList.toggle("m-cerrado-Pago");
        });
    } 

    // Agregar listener al botón "Cerrar" del formulario modal
    cerrar_edi_Pago.addEventListener("click", function(){
        modal_edi_Pago.classList.toggle("m-cerrado-Pago");
  
        // Esperar a que la animación termine antes de ocultar el formulario modal
        setTimeout(function(){
            modalC_edi_Pago.style.opacity = "0";
            modalC_edi_Pago.style.visibility = "hidden";
        },600)
    });
  
    // Agregar listener al fondo oscuro del formulario modal
    window.addEventListener("click", function(e){
        if(e.target == modalC_edi_Pago){
            modal_edi_Pago.classList.toggle("m-cerrado-Pago");
  
            // Esperar a que la animación termine antes de ocultar el formulario modal
            setTimeout(function(){
                modalC_edi_Pago.style.opacity = "0";
                modalC_edi_Pago.style.visibility = "hidden";
            },600)
        }
    });
});

//Imprimir recibo de pago 

function imprimir() {
    let contenido = document.getElementById("ReciboPago").outerHTML;
    let contenidoOriginal = document.body.innerHTML;
    document.body.innerHTML = contenido;
  
    let estilo = "@media print { @page { size: A7 portrait; } .no-imprimir { display: none; } }";
    let hojaEstilo = document.createElement("style");
    hojaEstilo.innerHTML = estilo;
    document.head.appendChild(hojaEstilo);
    window.print();
    document.body.innerHTML = contenidoOriginal;
}
/// barra de pagos de rol admin
///////Escribir en el evento keyup del elemento de entrada de palabra clave
$(document).ready(function(){
    $("#search").keyup(function(){
    _this = this;
    
    // Mostrar solo TR correspondiente, ocultar el resto de ellas
    $.each($("#table tbody tr"), function() {
        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
        $(this).hide();
        else
        $(this).show();
    });
    });
});

//catorce modal exportar 
document.addEventListener("DOMContentLoaded", function() {
    let cerrar_Exp = document.querySelectorAll(".cerrar-Exp")[0];
    let abrir_Exp = document.querySelectorAll(".btn-ageExp")[0];
    let modal_Exp = document.querySelectorAll(".modal-Exp")[0];
    let modalC_Exp = document.querySelectorAll(".fonModal-Exp")[0];
  
    abrir_Exp.addEventListener("click", function(e) {
        e.preventDefault();
        modalC_Exp.style.opacity = "1";
        modalC_Exp.style.visibility = "visible";
        modal_Exp.classList.toggle("modalX-Exp");
    });
  
    cerrar_Exp.addEventListener("click", function(){
        modal_Exp.classList.toggle("modalX-Exp");
  
        setTimeout(function(){
            modalC_Exp.style.opacity = "0";
            modalC_Exp.style.visibility = "hidden";
        },600)
    });
  
    window.addEventListener("click", function(e){
        if(e.target == modalC_Exp){
            modal_Exp.classList.toggle("modalX-Exp");
  
            setTimeout(function(){
                modalC_Exp.style.opacity = "0";
                modalC_Exp.style.visibility = "hidden";
            },600)
        }
    });
});