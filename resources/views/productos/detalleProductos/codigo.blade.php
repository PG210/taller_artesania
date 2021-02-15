
<!---pagina-->
<html>
	<head>
	    
	</head>

	<body background='{{ url("/imgProd/efecty.jpg") }}' bgcolor="FFCECB">
   
	<table width="550" bgcolor=FFCECB align="center">
	<tr>
        <br> <br> <br> <br>
	    <td align="center">

	    <h1 style="color:000000" >Codigo de Pago:</h1>
	    
	   <h1>
            <?php
            echo rand(1001,10000);
            ?>
            AB
            </h1> 
	    <br>
        <a href="{{route('mochila')}}" class="btn btn-secondary">Regresar</a>
		<a href="{{route('pdf')}}" class="btn btn-secondary">Descarga</a>
	    </td>
	</tr>
	</table>
 
   


	</body>
	</html>	
	