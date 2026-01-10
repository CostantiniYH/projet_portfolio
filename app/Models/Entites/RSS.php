<?php
namespace App\Models\Entites;

use DOMDocument;

class RSS {
    private $listNewsVeille;
    private $listNewsCyber;
    private $listNewsCyber2;

    
    public function __construct()
    {
        $this->listNewsCyber = $this->loadNewsCyber();
        $this->listNewsCyber2 = $this->loadNewsCyber2();
        $this->listNewsVeille = $this->loadNewsVeille();
    }

    
    public function getListNewsCyber() { return $this->listNewsCyber; }
    public function getListNewsCyber2() { return $this->listNewsCyber2; }

    public function getListNewsVeille() { return $this->listNewsVeille; }

    private function loadNewsCyber() {
        $rss = new DOMDocument();
        $rss->load("https://www.lemondeinformatique.fr/flux-rss/thematique/securite/rss.xml");

        $feed = array();
        foreach($rss->getElementsByTagName("item") as $key => $node) {
            $item = [
                'id' => $key,
                'title' => $node->getElementsByTagName("title")->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName("description")->item(0)->nodeValue,
                'link' => $node->getElementsByTagName("link")->item(0)->nodeValue,
                'date' => $node->getElementsByTagName("date")->item(0)->nodeValue,
                'auteur' => $node->getElementsByTagName("creator")->item(0)->nodeValue,
                ];
            $feed[] = $item;
        }

        return $feed;
    }

    private function loadNewsCyber2() {
        $rss = new DOMDocument();
        $rss->load("https://www.clubic.com/feed/rss");

        $feed = array();
        foreach($rss->getElementsByTagName("item") as $key => $node) {
            $item = [
                'id' => $key,
                'title' => $node->getElementsByTagName("title")->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName("description")->item(0)->nodeValue,
                'link' => $node->getElementsByTagName("link")->item(0)->nodeValue,
                'date' => $node->getElementsByTagName("pubDate")->item(0)->nodeValue,
                'image' => $node->getElementsByTagName("enclosure")->item(0)?->getAttribute("url") ?? 'default.jpg',
                ];
            $feed[] = $item;
        }

        return $feed;
    }
    

    private function loadNewsVeille() {
        $rss = new DOMDocument();
        $rss->load("https://www.developpez.com/index/rss");

        $feed = array();
        foreach($rss->getElementsByTagName("item") as $key => $node) {
            $item = [
                'id' => $key,
                'title' => $node->getElementsByTagName("title")->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName("description")->item(0)->nodeValue,
                'link' => $node->getElementsByTagName("link")->item(0)->nodeValue,
                'date' => $node->getElementsByTagName("pubDate")->item(0)->nodeValue,
                'image' => $node->getElementsByTagName("enclosure")->item(0)?->getAttribute("url") ?? 'default.jpg',
            ];
            $feed[] = $item;
        }

        return $feed;
    }


}