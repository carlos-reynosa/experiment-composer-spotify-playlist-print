<?php
namespace CarlosReynosa\Spotify;

class SpotifyPlaylistPrint{

    private $clientId = NULL;
    private $clientSecret = NULL;
    private $scopes = NULL;

    private $spotify = NULL;

    private $session = NULL;

    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;

        $this->scopes= array('playlist-read-private','user-read-private');
        $this->session= new \SpotifyWebAPI\Session($clientId,$clientSecret);
        $this->spotify= new \SpotifyWebAPI\SpotifyWebAPI();
        $this->session->requestCredentialsToken($this->scopes);
        $this->token=$this->session->getAccessToken();
        $this->spotify->setAccessToken($this->token);

    }

    public function printList($userId,$playlistId)
    {
        $playlist= $this->spotify->getUserPlaylist($userId,$playlistId);

        print("Playlist Name: ".$playlist->name."<br>");

        foreach($playlist->tracks->items as $item ) {

            print("\t- ".$item->track->name."<br>");
        }
    }

    public function getPlaylistList($userId,$playlistId){

        $playlist= $this->spotify->getUserPlaylist($userId,$playlistId);
        $list=[];
        foreach($playlist->tracks->items as $item ) {
            $list[]=$item->track->name;
        }

        return $list;
    }
}




