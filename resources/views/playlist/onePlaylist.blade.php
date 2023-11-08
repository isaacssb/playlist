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
                <div>
                    <a href="{{ url('/playlist/create') }}">
                        CRIAR NOVA PLAYLIST
                    </a>

                </div>
            </div>
            <div class="title-update">
                <a href="{{ url('/playlist/edit', ['id' => $playlist->first()->id ]) }}">
                    Renomear Playlist
                </a>
            </div>
            <div class="list-music">
                <div class="item-music-header">
                    <div>
                     <b>Nome da Playlist:</b> {{ $playlist->first()->name }}
                    </div>
                </div>
                <div class="description-musics">
                    <b>Musicas Abaixo</b>
                </div>
                @foreach($musics as $music)
                    <div class="item-music">
                        <div class="name-music">
                            {{ $music->name }}
                        </div>

                        <div class="action-music">
                            <div class="actions">
                                <div><a href="{{ url('/playlist/edit/music', ['id' => $music->id]) }}">Renomear</a></div>
                                <div><a href="{{ url('/playlist/delete/music', ['id' => $music->id]) }}">Excluir</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</body>
</html>
