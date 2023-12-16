//FORM ID: formP ***LISTENERS***
/*

var capturaformP = document.getElementById("formP")
console.log(capturaformP)

var capturaboton = document.getElementById("btnenviar")
console.log(capturaboton)

capturaboton.addEventListener("click", valorInputListener)

function valorInputListener(){

        console.log("funcionando")

}
*/

//Datos Form

const CapturanombreA= document.getElementById("nombreA")
console.log(CapturanombreA)

const CapturaapellidoA= document.getElementById("apellidoA")
console.log(CapturaapellidoA)

const CapturacorreoA= document.getElementById("correoA")
console.log(CapturacorreoA)




/*
const deli = document.getElementById("deli")
console.log(deli)

const take = document.getElementById("take")
console.log(take)

const reserva = document.getElementById("reserva")
console.log(reserva)
*/


/*//Value de opciones (promociones)

var PromoA= (deli.value)
console.log(PromoA)

var PromoB= (take.value)
console.log(PromoB)

var PromoC= (reserva.value)
console.log(PromoC)*/



//funcion boton sumartt


    function sumartt(){
        

        //cantidad de promociones

        const Capturacantidad= document.getElementById("cantidad")
        console.log(Number(Capturacantidad.value))


        //Opciones promos

        const promos=document.getElementById("promos")
        console.log(promos.value)


        //resultado "a pagar"

        const TotalRDO= document.getElementById("Totaldisplay")
        console.log(TotalRDO.textContent)

        // Botón calcular TOTAL

        botoncalculartotal=document.getElementById("btnenviar")


        // cantidad * promos con descuentos

        const cantidadespromos=Capturacantidad.value
        console.log(cantidadespromos)
    

        //Cantidad= Resultado Total


        //TotalRDO.textContent= cantidadespromos
        //console.log(TotalRDO.textContent)


        //promos value


        
        //Promos con Descuentos

        var TPromoA = " € " + parseFloat((cantidadespromos) * ( 75 - ((75*40) /100)))
        console.log(TPromoA)

        var TPromoB =" € " + parseFloat((cantidadespromos) * ( 75 - ((75*45) /100)))  
        console.log(TPromoB)

        var TPromoC = " € " + parseFloat((cantidadespromos )* ( 75 - ((75*50) /100)))
        console.log(TPromoC)

        console.log(promos.value) 

        TotalRDO.textContent= promos.value
        console.log(TotalRDO.textContent)


        switch(promos.value) {
            

            case '1':

              TotalRDO.textContent = TPromoA;
              console.log(TotalRDO.textContent);
              
              break;

            
            case '2':

              TotalRDO.textContent = TPromoB;
              console.log(TotalRDO.textContent);
             
              break;

          

            case '3':

              TotalRDO.textContent = TPromoC;
              console.log(TotalRDO.txtContent);
           
              break;
             
              
            default:
                
              console.log("Debe completar los campos");
               alert("Para realizar su pedido debe completar el Formulario");
              
          }

          
        /*    
        if(promos.value == 1) {
           
          
              TotalRDO.textContent = TPromoA;
              console.log(TotalRDO.textContent)
              
        }else if(promos.value == 2){
           
            
              TotalRDO.textContent = TPromoB;
              console.log(TotalRDO.textContent)
            
        }else if(promos.value == 3){
           
              
              TotalRDO.textContent = TPromoC;
              console.log(TotalRDO.txtContent)
            
        }else{
            
            console.log("Debe completar los campos")
            //alert("Para realizar su pedido debe llenar el Formulario")
        }
          */
    }   


sumartt()              


