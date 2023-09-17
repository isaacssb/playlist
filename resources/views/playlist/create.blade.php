<!DOCTYPE html>
<html>
<head>
    <title>Salve sua Playlist</title>
    <link rel="stylesheet"  type="text/css" href="{{ asset('assets/css/playlist/playlist.css') }}">
</head>
<body>
    <div class="container">
        <section>
            <div class="title">
                <div>
                    <a href="{{ url('/playlist') }}">
                        PLAYLISTS
                    </a>
                </div>
            </div>
            <form action="{{ route('playlist.create') }}" method="POST">
                @csrf()
                <div class="create-playlist">
                    <div>
                        <input type="text" name="name_playlist" id="name_playlist">
                    </div>
                    <div>
                        <button type="submit">Salvar</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
