<!DOCTYPE html>
<html>
<head>
    <title>Interactive Treasure Hunt</title>
</head>
<body>
<h1>Welcome to the Interactive Treasure Hunt!</h1>
<h1>Tu IP es: <span id="ip"></span></h1>

<script>
    // Utiliza el servicio ipify para obtener la IP pública del cliente
    fetch('https://api.ipify.org?format=json')
        .then(response => response.json())
        .then(data => {
            // Muestra la IP en el elemento con id="ip"
            document.getElementById('ip').textContent = data.ip;
        })
        .catch(error => {
            console.error('Error al obtener la IP:', error);
        });
    </script>
    

    <form action="process.php" method="POST">
        <label>Number (e.g., birth year):</label>
        <input type="number" name="user_number" required><br><br>
        
        <label>Text (e.g., name or secret word):</label>
        <input type="text" name="user_text" required><br><br>
        
        <input type="submit" value="Solve the Puzzle">
    </form>
</body>
</html>
