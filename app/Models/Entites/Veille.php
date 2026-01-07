<?php
namespace App\Models\Entites;

use DOMDocument;

class Veille {
    private $listNews;
    
    public function __construct()
    {
       $this->listNews = $this->loadNews();
    }
    
    public function getListNews() { return $this->listNews; }

    private function loadNews() {
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