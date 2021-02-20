<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	margin: 5px;
   	width: 300px;
		 height: 140px;
	 }
</style>
</head>

<body>
<div id="content">
  <form method="POST" action="guarda_imagen.php" enctype="multipart/form-data">
	<div class="cuadro_titulo">
  	  <input type="file" name="imagen">
  	</div>
  	<div>			
  		<button type="submit" name="upload">Cargar</button>
	  </div>
	  <div>
  </form>
</div>
</body>
</html>