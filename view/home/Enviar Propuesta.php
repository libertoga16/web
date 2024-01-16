<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
    <title>Formulario Bonito</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: auto 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #3498db;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #fff;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #2980b9;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3498db;
        }
    </style>

  

<form action="action='https://formsubmit.co/libertoga16@gmail.com' method='post'">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

        <input type="submit" value="Enviar">
    </form>



    
<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>