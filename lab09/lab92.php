<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 9.1</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Consulta de noticias</h1>

    <Form name="Formfiltro" method="post" action="lab92.php">
        <br/>
        Filtrar Por: 
        <SELECT name="campos">
            <OPTION value="texto" SELECTED>Descripcion
            <OPTION value="titulo">Titulo
            <OPTION value="categoria">Categoria
        </SELECT>
        con el valor
        <input type="text" name="valor">
        <input name="ConsultarFiltro" value="Filtrar Datos" type="submit"/>
        <input name="ConsultarTodos" value="Ver Todos" type="submit"/>
    </Form>
    <br/>

    <?php 
    require_once("class/noticias.php");

    $obj_noticia=new noticia();
    $noticias = $obj_noticia->consultar_noticias();

    if(array_key_exists('ConsultarTodos', $_POST)){
        $obj_noticia = new noticias();
        $noticias_new = $obj_noticia->consultar_noticias();
    }
    if(array_key_exists('ConsultarFiltro', $_POST)){
        $obj_noticia = new noticias();
        $noticia = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'], $_REQUEST['valor']);
    }
    
    $nfilas=count($noticias);
    if($nfilas >0){
        print ("<table>\n");
        print ("<tr>\n");
        print ("<th>Titulo</th>\n");
        print ("<th>Texto</th>\n");
        print ("<th>Categoria</th>\n");
        print ("<th>Fecha</th>\n");
        print ("<th>Imagen</th>\n");
        print("</tr>\n");

        foreach($noticias as $resultado){
            print("<tr>\n");
            print("<td>".$resultado['titulo']. "</td>\n");
            print("<td>".$resultado['texto']. "</td>\n");
            print("<td>".$resultado['categoria']."</td> \n");
            print("<td>".date("j/n/Y",strtotime($resultado['fecha']))."</td>\n");

            if($resultado['imagen']!==""){
                print("<td><a target='_blank' href='img/".$resultado['imagen']."'><img border='0' src ='img/iconotexto.gif'></a></td>\n");
            }else{
                print("<td>&nbsp;</td>\n");
            }
        print("</tr>\n");
        }
            print("</table> \n");
        }else{
            
        print("no hay noticias disponibles");
    }
    
    ?>
</body>
</html>