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
        $cacheDir = __DIR__ . '/cache';

        if (!is_dir($cacheDir)) {
            mkdir($cacheDir, 0755, true);
        }
        
        $cacheFile = __DIR__ . '/cache/rss_lemondeinfo.json';
        $cacheDuration = 600; // 10 minutes avant rechargement

        if (file_exists($cacheFile) && time() - filemTime($cacheFile) < $cacheDuration) {
            return json_decode(file_get_contents($cacheFile), true);
        }

        $rss = new DOMDocument();
        $rss->load("https://www.lemondeinformatique.fr/flux-rss/thematique/securite/rss.xml");

        $feed = array();
        $limit = 10;

        foreach($rss->getElementsByTagName("item") as $key => $node) {
            if ($key >= $limit) break;

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

        file_put_contents($cacheFile, json_encode($feed));

        return $feed;
    }

    private function loadNewsCyber2() {
        $cacheFile = __DIR__ . '/cache/rss_clubic.json';
        $cacheDuration = 600; // 10 minutes avant rechargement

        if (file_exists($cacheFile) && time() - filemTime($cacheFile) < $cacheDuration) {
            return json_decode(file_get_contents($cacheFile), true);
        }

        $rss = new DOMDocument();
        $rss->load("https://www.clubic.com/feed/rss");

        $feed = [];
        $limit = 6;

        foreach($rss->getElementsByTagName("item") as $key => $node) {
            if ($key >= $limit) break;

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

        file_put_contents($cacheFile, json_encode($feed));

        return $feed;
    }
    

    private function loadNewsVeille() {
        $cacheFile = __DIR__ . '/cache/rss_developpez.json';
        $cacheDuration = 600; // 10 minutes avant rechargement

        if (file_exists($cacheFile) && time() - filemTime($cacheFile) < $cacheDuration) {
            return json_decode(file_get_contents($cacheFile), true);
        }

        $rss = new DOMDocument();
        $rss->load("https://www.developpez.com/index/rss");

        $feed = array();
        $limit = 10;

        foreach($rss->getElementsByTagName("item") as $key => $node) {
            if ($key >= $limit) break;

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

        file_put_contents($cacheFile, json_encode($feed));

        return $feed;
    }


}