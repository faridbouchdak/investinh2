<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateIndex
{
    public function handle(Jigsaw $jigsaw)
    {
        $data_posts = collect($jigsaw->getCollection('posts')->map(function ($page) use ($jigsaw) {
            return [
                'title' => $page->title,
                'categories' => $page->categories,
                'link' => rightTrimPath($jigsaw->getConfig('baseUrl')) . $page->getPath(),
                'snippet' => $page->getExcerpt(),
            ];
        })->values());
        $data_team = collect($jigsaw->getCollection('team')->map(function ($page) use ($jigsaw) {
            return [
                'title' => $page->name,
                'link' => rightTrimPath($jigsaw->getConfig('baseUrl')) . $page->getPath(),
                'snippet' => $page->getExcerpt(),
            ];
        })->values());
        $data_docs = collect($jigsaw->getCollection('docs')->map(function ($page) use ($jigsaw) {
            return [
                'title' => $page->title,
                'link' => rightTrimPath($jigsaw->getConfig('baseUrl')) . $page->getPath(),
                'snippet' => $page->getExcerpt(),
            ];
        })->values());

        $data = array_merge(json_decode($data_posts), json_decode($data_team), json_decode($data_docs));

        file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($data));

    }

}
