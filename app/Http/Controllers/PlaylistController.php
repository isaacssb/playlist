<?php

namespace App\Http\Controllers;
use App\Models\Playlist;
use App\Models\Music;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{

    public function index(Playlist $playlist)
    {
        $playlists = $playlist->all();
        return view('playlist/playlist', compact('playlists'));
    }

    public function create()
    {
        return view('playlist/create');
    }

    public function createPlaylist(Playlist $playlist, Request $request)
    {

        $playlist->name = $request->post('name_playlist');
        $playlist->active = 1;
        if ($playlist->save()) {
            return redirect('playlist');
        }
    }

    public function update(string $id)
    {
        $playlist = Playlist::where('id', $id)->get();

        return view(
            'playlist/update',
            [
                'playlist' => $playlist
            ]
        );
    }

    public function updatePlaylist(Music $music, Request $request)
    {
        $music->name = $request->post('name_music');
        $music->id_playlist = $request->post('id_playlist');

        if ($music->save()) {
            return redirect('playlist');
        }
    }

    public function viewPlaylist($id)
    {

        $musics = Music::where('id_playlist', $id)->get();

        $playlist = Playlist::where('id', $id)->get();

        return view(
            'playlist/onePlaylist',
            [
                'musics' => $musics,
                'playlist' => $playlist
            ]
        );
    }
}
