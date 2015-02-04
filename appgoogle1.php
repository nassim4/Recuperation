<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

--> <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" >

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
  <script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
 
  
    <script type="text/javascript" src="http://www.amcharts.com/lib/3/pie.js"></script>
      
      <script src="amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        
        
        
                        
  <head>
        <style>
            tr:nth-child(even){
                background-color: gainsboro
            }
            th{
                background-color:  bisque;
                font-size:  large;
            }
            #a101,#a102,#a103{
                background-color: yellow;
            }
      </style>
       
        <title> Recuperacion  </title>
    
        <script type="text/javascript" >
        $(Iniciar);
        </script>
        <title>Los visitantes segun sus paises</title>
    </head>
    <body>

        <div id="tabla">
         <?php    
         header('Content-Type: text/html; charset=iso-8859-1');
              //mysql_connect('10.22.23.66','dw2t_mohammed','12345');
    mysql_connect('localhost','root','');
    mysql_query('SET NAMES utf8');
    mysql_select_db('turismo');
 
    $sql='SELECT * FROM paises';
    $resultado=mysql_query($sql);
   
        print "<table>";
        print "<tr><th>pais</th><th>total</th><th>porcentaje</th><th>variacion</th></tr>\n";
    while($fila=mysql_fetch_row($resultado)){
      print "<tr >
        <td class=\"pais\">$fila[0]</td>
        <td class=\"total\" >$fila[1]</td>
        <td class=\"porcentaje\">$fila[2]</td>
        <td class=\"variacion\">$fila[3]</td></tr>\n";
    }+
    print "</table>";
  
    ?>
     </div><br></br>



     <?php
   
       mysql_connect('localhost','root','');
    mysql_query('SET NAMES utf8');
    mysql_select_db('turismo');
    // $pais=htmlentities($_GET['id']);
 
    $sql='SELECT pais, total FROM paises';
    $resultado=mysql_query($sql);

   $tourismo= array();
   while($fila=mysql_fetch_row($resultado)){
      $tourismo[$fila[0]]=$fila[1];  
    
    }
      
   // print_r($tourismo);
     echo '' . json_encode($tourismo) . '';
   
    require_once 'tarta-funcion.php';



tartapie($tourismo,"tarta","50%","250px");
  
    /***PRUEBA******************************************/ 
   
    ?>


    </body>
</html>

