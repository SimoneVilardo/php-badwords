<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- link CSS-->
    <link rel="stylesheet" href="./css/style.css" />
    <title>PHP Badwords</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="server.php" method="GET">
                    <textarea name="paragrafo" placeholder="Inserisci Testo"></textarea>
                    <input type="submit" value="Invia">
                </form>
            </div>
        </div>
    </div>
</body>

</html>