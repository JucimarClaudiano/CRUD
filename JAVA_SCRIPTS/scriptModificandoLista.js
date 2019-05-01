function adicionarIngrediente()
{

	var ing = document.getElementById("ingredientes").value; 

	
	var listahtml = document.getElementById("lista").innerHTML;

    
	listahtml = listahtml + "<li>"+ing+"</li>";

    
    document.getElementById("lista").innerHTML = listahtml;

}