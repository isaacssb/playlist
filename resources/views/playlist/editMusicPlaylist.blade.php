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
                        MUSICA
                    </a>
                </div>
            </div>
            <form action="{{ route('playlist.editmusic') }}" method="POST">
                @csrf()
                <div class="create-playlist">
                    <div>
                        <input type="text" name="name_music" id="name_music" value="{{ $music->first()->name }}">
                        <input type="hidden" name="id_music" value='{{ $music->first()->id }}'>
                        <input type="hidden" name="id_playlist" value='{{ $music->first()->id_playlist }}'>
                    </div>
                    <div>
                        <button type="submit">Alterar</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
