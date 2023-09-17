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
            <div class="item-music-header">
                <div>
                 <b>Playlist:</b> {{ $playlist->first()->name }}
                </div>
            </div>
            <form action="{{ route('playlist.update') }}" method="POST">
                @csrf()
                <div class="add-music">
                    <input type="hidden" name="id_playlist" value='{{ $playlist->first()->id }}'>
                    <input type="text" name="name_music" id="name_music">
                    <button type="submit">Adicionar Música na Playlist</button>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
