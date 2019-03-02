
<html>
<head>
	<title></title>
	<script src="jquery.js"></script>
</head>
<body>
    <h2>Simple ajax </h2>

    <form id="frmajax" enctype="multipart/form-data">
    	<label>Nombre</label> <br>
    	<input type="text" name="nombre" id="nombre"> <br>
    	<label>sexo</label> <br>
    	<input type="radio" name="sexo" value="mujer" id="mujer"> Femenino   <br>
    	<input type="radio" name="sexo" value="hombre" id="hombre"> Masculino <br>
    	<select id="marca" name="marca"> 
        	<option value="adidas">Adidas</option>
        	<option value="nike">nike</option>
        </select> <br>
        <input type="checkbox" name="vehiculo" value="bici"> bici<br>
        <input type="file" name="imagen" id="imagen">
        
        <input type="button" name="guardar" id="guardar" value="Guardar">


    </form>

    <script>
	//script para evento click y ajax 
	$(document).ready(function(){
	$('#guardar').click(function(){

        var formData = new FormData(document.getElementById("frmajax"));
		console.log(formData);
		
		$.ajax({
			type:"POST",
			dataType: "html",
			data:formData,
			cache: false,
			contentType: false,
			processData: false,
			url:"insertar.php",
			success:function(r){
				if(r !== 1){
							
							alert("Agregado con exito :D");
						}else{
							alert(r);
						}
			}
		});
	});
		});
	
    </script>

</body>
</html>