  
   const editar = (id,tipo) =>{
	  
	 
	  const campos =  (tipo === "orador") 
	  ? ["id_orador","nombre","apellido","email","tema","fecha_alta"]
	  : ["id_ticket","nombreTickets","apellidoTickets","emailTickets","cantidadTickets","categoriaTickets","totalTickets"];
	  
	  const formulario = (tipo === "orador")
	  ? document.getElementById('editarFormulario')
	  : document.getElementById('editarFormularioTickets');
	  
	  const camposFormulario = formulario.children;
	  
	  const idPadre = (tipo === "orador") ? "orador" : "ticket"; 
	   const padre = document.getElementById(idPadre + "-" + id);
	  
	  const hijos = padre.children;
	  const limite = hijos.length-1;
	  
	  const inputs = [];
	   for (let i = 0; i < camposFormulario.length; i++){
		 
		 
		 if(campos.find(x => x === camposFormulario[i].id)){
		  
		  inputs.push(camposFormulario[i]);
		  
		  }
	   } 
   
	   for (let i = 0; i < limite; i++){
		   const hijo = hijos[i];
		
		  const contenido = hijo.textContent;
		  	  
		 inputs[i].value = contenido;
		   
	   }
  }