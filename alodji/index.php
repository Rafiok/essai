<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>

<body>
    <div class="contenu">
        <form action="/controls/login.php" method="post">
            <div class="Contenu">
                <h1>Connexion</h1>
                <div class="type">

                    <label for="">Type:</label>
                    <select name="type" id="">

                        <option value="3" selected>Opérateur</option>
                        <option value="2">Administrateur</option>
                        <option value="1">Chauffeurs</option>
                    </select>
                </div>
                <div class="telephone">
                    <label for="">Telephone:</label>
                    <input type="text" name="telephone">
                </div>
                <div class="passe">
                    <label for="">Mot de passe:</label>
                    <input type="text" name="passe">
                </div>
                <div>
                    <input type="submit" value="se connecter" id="connecter">
                </div>
            </div>
        </form>
    </div>
</body>

</html>