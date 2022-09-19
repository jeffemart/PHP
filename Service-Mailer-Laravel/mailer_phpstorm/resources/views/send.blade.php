<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/asset.css') }}">
    <title>Maile</title>
</head>
<body class="container">
<div class="main-wrapper">
    <div class="blog__older">
        <article class="card__post">
            <header class="card__post__header">
                <h3 class="body-large">Lorem Ipsum é simplesmente uma simulação. Lorem Ipsum é simplesmente uma
                    simulação</h3>
                <button class="button" onclick="changelog()"><a href="#"><p>Changelog</p></a></button>
            </header>
        </article>

        <article class="card__post">
            <header class="card__post__header">
                <h3 class="body-large">Lorem Ipsum é simplesmente uma simulação. Lorem Ipsum é simplesmente uma
                    simulação</h3>
                <button class="button" onclick="release()"><a href="#"><p>Releases</p></a></button>
            </header>
        </article>

        <article class="card__post">
            <header class="card__post__header">
                <h3 class="body-large">Lorem Ipsum é simplesmente uma simulação. Lorem Ipsum é simplesmente uma
                    simulação</h3>
                <button class="button" onclick="agenda()"><a href="#"><p>Agendamento</p></a></button>
            </header>
        </article>

        <article class="card__post">
            <header class="card__post__header">
                <h3 class="body-large">Lorem Ipsum é simplesmente uma simulação. Lorem Ipsum é simplesmente uma
                    simulação</h3>
                <button class="button" onclick="treinamento()"><a href="#"><p>Treinamento</p></a></button>
            </header>
        </article>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function changelog() {
        axios.get("/enviar/changelog").then((response) => {
            alert("E-mails - Changelog enviado para a fila");
        })
    }

    function release() {
        axios.get("/enviar/release").then((response) => {
            alert("E-mails - Release enviada para a fila");
        })
    }

    function agenda() {
        axios.get("/enviar/agenda").then((response) => {
            alert("E-mails - Agenda enviada para a fila");
        })
    }

    function treinamento() {
        axios.get("/enviar/treinamento").then((response) => {
            alert("E-mails - Agenda enviada para a fila");
        })
    }
</script>
</body>
</html>
