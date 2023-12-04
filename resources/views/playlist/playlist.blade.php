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
            <div class="list-playlist">
                <div class="item-playlist-header">
                    <div>
                        Nome
                    </div>
                    <div>
                        Ação
                    </div>
                </div>
                @foreach($playlists as $playlist)
                    <div class="create-playlist">
                        <div>
                            {{ $playlist->name }}
                        </div>
                        <div class="edit">
                            <a href="{{ url('/playlist/update', ['id' => $playlist->id]) }}">
                                Add
                            </a>
                            <a href="{{ url('/playlist/details', ['id' => $playlist->id]) }}">
                                Ver
                            </a>
                            <a href="{{ url('/playlist/remove', ['id' => $playlist->id]) }}">
                                Excluir
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</body>
</html>
