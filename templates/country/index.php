<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Country </h1>
<p><?= $date ;?></p>

<p id="country"></p>

<script>
    var req = new XMLHttpRequest();

    req.open("GET", 'http://localhost:8001/countries');

    req.addEventListener("load", function () {
        // Affiche la réponse reçue pour la requête
        console.log(req.responseText);
        let countryEl = document.getElementById('country');

        countryEl.innerText = req.responseText;
    });

    req.send(null);

</script>

</body>
</html>