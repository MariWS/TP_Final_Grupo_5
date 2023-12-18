var capturaFormulario= document.getElementById("categoriajs")
console.log(capturaFormulario)

capturaFormulario.addEventListener('change',function(e){
    e.preventDefault();
    ResumenFormulario();
	
})

// Calculo
const valorTicket = 200;

//html elements
const nombre = document.getElementById("nombrejv");
const apellido = document.getElementById("apellidojv");
const correo = document.getElementById("correojv");
const Cantidad = document.getElementById("cantidadjs").value;
const Categoria = document.getElementById("categoriajs").value;

function ResumenFormulario() {
    const Cantidad = document.getElementById("cantidadjs").value;
    const Categoria = document.getElementById("categoriajs").value;
  
    let Descuento = 0; 
  
    if (Categoria === "Estudiante") {
      Descuento = Cantidad * (valorTicket - valorTicket * 0.8);
    } else if (Categoria === "Trainee") {
      Descuento = Cantidad * (valorTicket - valorTicket * 0.5);
    } else if (Categoria === "Junior") {
      Descuento = Cantidad * (valorTicket - valorTicket * 0.15);
    }
    console.log(Descuento);
    const capturaLabel = document.getElementById("valorInput1");

     /* capturaLabel.textContent = 'Total a pagar: $' + Descuento;  */
	 capturaLabel.value = "Total a pagar: $"+ Descuento; 
	 
	 
  }
  