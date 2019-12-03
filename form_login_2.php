<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script>
function digitou() {
    var campo_email = document.getElementById("email");
    var digitado = campo_email.value;
    
    if( digitado.indexOf('@') != -1 && 
        digitado.indexOf('@') < digitado.length - 1) {
        verifica(digitado);
    }
}        

function verifica(email) {
    var pagina = "verifica_email.php?email=" + email;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // this.responseText é o texto recebido 
            // do servidor
            muda(this.responseText);
        }
    };
    xhttp.open("GET", pagina, true);
    xhttp.send();
}

function muda(resultado) {
    var email = document.getElementById("email");
    if (resultado == 'correto') {
        email.className = 'input is-success';
    } else {
        email.className = 'input is-danger';
    }
}

    </script>
</head>

<body>
    <div class="card">
        <div class="card-content">
            <div class="content">
                <form action="login2.php">
                    E-mail:<input class="input" type="email" name="email" id="email" onkeyup="digitou()">
                    <br>
                    Senha:<input class="input" type="password" name="senha">
                    <br>
                    <input type="submit" value="Entrar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
