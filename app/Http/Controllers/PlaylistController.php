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

    public function editPlaylistView($id)
    {
        $playlist = Playlist::where('id', $id)->get();

        return view(
            'playlist/editPlaylist',
            [
                'playlist' => $playlist
            ]
        );
    }

    public function editPlaylist(Playlist $playlist, Request $request)
    {
        $updatePlaylist = $playlist->where('id', $request->post('id_playlist'))->get();

        $updatePlaylist->toQuery()->update([
            'name' => $request->post('name_playlist'),
        ]);

        return redirect('playlist');
    }

    public function editMusicPlaylistView($id)
    {
        $music = Music::where('id_playlist', $id)->get();

        return view(
            'playlist/editMusicPlaylist',
            [
                'music' => $music
            ]
        );
    }

    public function editMusicPlaylist(Music $music, Request $request)
    {
        $updateMusic = $music->where('id', $request->post('id_music'))->get();

        $updateMusic->toQuery()->update([
            'name' => $request->post('name_music'),
        ]);

        return redirect()->route('playlist-view', ['id' => $request->post('id_playlist')]);
    }

    public function deleteMusicPlaylist($id)
    {

        $oneMusic = Music::where('id', $id)->get();

        $id_playlist = $oneMusic[0]->id_playlist;

        $music = Music::where('id',$id)->delete();

        return redirect()->route('playlist-view', ['id' => $id_playlist]);
    }
}
