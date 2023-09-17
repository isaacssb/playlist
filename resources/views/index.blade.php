<!DOCTYPE html>
<html>
<head>
    <title>Salve sua Playlist</title>
    <link rel="stylesheet"  type="text/css" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="assets/mp4/bg.mp4" type="video/mp4">
    </video>
    <div class="container">
        <main>
            <div class="info">
                <h1 class="title">SALVE SUAS PLAYLISTS AQUI</h1>
                <p class="description">Não tenha dor de cabeça</p>
                <a href="{{ url('/playlist') }}">
                    <div class="box-1">
                        <div class="btn btn-one">
                            <span>CLIQUE AQUI</span>
                        </div>
                    </div>
                </a>
            </div>
        </main>
    </div>

    <footer>
        Site criado por Isaac Barreto @isaacssb1
    </footer>
</body>
</html>
