<?php

$nav = json_decode(file_get_contents('navigation.json'), true);
$nav = $nav['menus'];

foreach ($nav as $menu) {
    $links = array();
    foreach ($menu['links'] as $link) {
        $links[$link['link_title']] = $link['link_url'];
    }
    $navigation[$menu['menu_title']]=$links;
}

return $navigation;

// return [
//     'Hydrogen Energy' => [
//         'url' => 'kb/what-is-hydrogen-energy',
//         'children' => [
//             'Government support (G20)' => 'kb/g20-principles-on-hydrogen',
//             'Getting Started' => 'kb/getting-started',
//             'Customizing Your Site' => 'kb/customizing-your-site',
//             'Navigation' => 'kb/navigation',
//             'Algolia DocSearch' => 'kb/algolia-docsearch',
//             'Custom 404 Page' => 'kb/custom-404-page',
//         ],
//     ],
//     'P3Nomads' => 'https://p3nomads.com',
//     'PPP University' => 'https://ppp-university.com',
// ];
