<?php
function capitalizar($string) { 
    // aca definimos un array de articulos (en minuscula) 
    // aunque lo puedes definir afuera y declararlo global aca 
    $articulos = array( 
    '0' => 'a', 
    '1' => 'de', 
    '2' => 'del', 
    '3' => 'la', 
    '4' => 'los', 
    '5' => 'las', 
    ); 
    // explotamos el string 
    $palabras = explode(' ', $string); 
    // creamos la variable que contendra el string 
    // formateado 
    $nuevostring = ''; 
    // parseamos cada palabra 
    foreach($palabras as $elemento) 
    { 
        // si la palabra es un articulo 
        if(in_array(trim(strtolower($elemento)), $articulos)) 
            { 
            // concatenamos seguido de un espacio 
            $nuevostring .= strtolower($elemento)." "; 
            } else { 
            // sino, es un string propio, por lo tanto aplicamos 
            // las funciones y concatenamos seguido de un espacio 
            $nuevostring .= ucfirst(strtolower($elemento))." "; 
            } 
    } 
    return trim($nuevostring); 
}

function load_controller($controlador){
    $extension = ".php";
    if (!$controlador) {
        $controlador = "escritorio"; // Como default  cargamos el escritorio
    }
    $ruta = RUTA_CONTROLLERS . $controlador . $extension;
    if(file_exists($ruta)){
        require_once($ruta);
    }else{
        echo "No";
        //redirect('/'); // Si no existe el archivo no mostramos nada y vamos al index.
    }
}

function redirect($url){
    //header("Location: ". $url);
    header('Location: '.WWW.$url);
}

function set_cronology($name,$value,$duration=365){
    $duration=time()+(3600*24*$duration);
    $max_stored_values=5;
    if(isset($_COOKIE[$name])){
        foreach($_COOKIE[$name] as $prop_crono=>$val_crono){
            if($val_crono==$value)
                return;
        }
        if($prop_crono<$max_stored_values)
            setcookie($name.'['.($prop_crono+1).']',$value,$duration);
        else{
            array_shift($_COOKIE[$name]);
            setcookie("$name[$max_stored_values]",$value,$duration);
        }
    }else
        setcookie($name.'[0]',$value,$duration);
    return;
}

?>