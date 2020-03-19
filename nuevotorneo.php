<html>
 <head>
  <title>Nuevo Torneo</title>
  <link rel="stylesheet" href="style.css">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 </head>
 <body>
     
     
     <h2> 1. Para comenzar debe subir el archivo con los datos a analizar.</h2>
     <form enctype="multipart/form-data" action="ejecucion.php" method="post">
        <input name="archivo" type="file" />
        <button>Subir Archivo</button>
    </form>
     <h2> Tabla de posiciones:</h2>
     <form enctype="multipart/form-data" action="creartabla.php" method="post">
        
        <button>Tabla</button>
    </form>
   
     <h2> 3.Generar grafico.</h2>
     <form enctype="multipart/form-data" action="grafico.php" method="post">
        
        <button>Grafico</button>
    </form>
     
 </body>
 <footer>
     Creado por Lauva. Derechos reservados.
 </footer>
</html>

