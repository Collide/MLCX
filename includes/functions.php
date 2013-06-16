<?php
function autentificarse($user_data){
global $mySQL;
$user = $user_data['json'];
$tokens = $user_data['token'];
$nickname = $user['nickname'];
        $existe = $mySQL->query("SELECT id_usuario,nickname FROM usuarios WHERE nickname='$nickname'");
        if ($existe->num_rows > 0){
            // Si existe...
            $result = $existe->fetch_row();
            $_SESSION['id_usuario'] = $result[0];
            $_SESSION['nickname'] = $result[1];
        }else{
            // No existe, creamos
            $insertamos = $mySQL->query("INSERT INTO usuarios (nickname,first_name,last_name,email,access_token,refresh_token,expires_token) VALUES ('$user[nickname]', '$user[first_name]', '$user[last_name]', '$user[email]', '$tokens[value]', '$tokens[refresh_token]', '$tokens[expires]')");
            $_SESSION['id_usuario'] = $mySQL->insert_id;
            $_SESSION['nickname'] = $user['nickname'];
        }
}

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


function redirect($url)
{
    //header("Location: ". $url);
    header('Location: '.SITE.$url);
}

function set_cronology($name,$value,$duration=365)
{
    $duration=time()+(3600*24*$duration);
    $max_stored_values=99;
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