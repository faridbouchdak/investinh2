<?php

use Illuminate\Support\Str;
$settings = json_decode(file_get_contents('settings.json'), true);

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => $settings['site_name'],
    'siteDescription' => $settings['site_description'],
    'siteAuthor' => $settings['site_author'],
    'siteKeywords' => $settings['keywords'],
    'hero' => $settings['hero'],
    
    // collections
    'collections' => [
        'categories' => [
            'path' => '/'.$settings['posts']['title'].'/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
        'clients' => [
            'path' => '/'.$settings['clients']['title'].'/{filename}',
            'perPage' => $settings['clients']['limit'],
            'prefix' => $settings['clients']['prefix'],
            'sort' => 'name',
        ],
        'cta',
        'docs' => [
            'path' => '/'.$settings['docs']['title'].'/{filename}',
            'perPage' => $settings['docs']['limit'],
            'prefix' => $settings['docs']['prefix'],
        ],
        'events' => [
            'path' => 'events/{filename}',
            'sort' => 'date',
        ],
        'faqs',
        'pages' => [
            'path' => '/{filename}',
        ],
        'posts' => [
            'path' => '/'.$settings['posts']['title'].'/{filename}',
            'perPage' => $settings['posts']['limit'],
            'prefix' => $settings['posts']['prefix'],
            'author' => $settings['site_author'], // Default author, if not provided in a post
            'sort' => '-date',
        ],
        'services' => [
            'path' => 'services/{filename}',
            'sort' => 'order',
        ],
        'team' => [
            'path' => '/'.$settings['team']['title'].'/{filename}',
            'perPage' => $settings['team']['limit'],
            'prefix' => $settings['team']['prefix'],
            'sort' => 'name',
        ],
        'testimonials',
        'work' => [
            'path' => '/'.$settings['work']['title'].'/{filename}',
            'perPage' => $settings['work']['limit'],
            'prefix' => $settings['work']['prefix'],
            'sort' => 'title',
        ],

    ],

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once('navigation.php'),
    
    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
