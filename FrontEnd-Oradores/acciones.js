  
   const editar = (id_orador) =>{
	  
	  const campos = ["id_orador","nombre","apellido","email","tema","fecha_alta"]
	  const formulario = document.getElementById('editarFormulario');
	  
	  const camposFormulario = formulario.children;
	    
	   const padre = document.getElementById("orador-"+id_orador);
	  
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