<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $artistsobject = DB::table('artists')->get();
//    $artistsobject = [
//        0=>[
//            'id' => 1,
//            'first_name' => 'jeff',
//            'last_name' => 'mor',
//            'picture' => 'jeffpic.jpg',
//            'bio' => 'STRANGE PEOPLE// EARLY MORNING MUSIC // SAGOL // RITMIK RECORDS
//
//A dedicated digger of the abstract and obscure, the concept of maintaining consistency in groove is something Jeff Moreno has mastered. Carving up complex rhythms for serval years now, he has released music on the likes of labels such as Early Morning Music, Ritmik, and Sagol. In 2018 Jeff Moreno has teamed up with long time friend and label mate Michael Rosa to launch their own signature imprint, Strange People. A celebration of audio counter culture pushing the mysterious and mischievous side of electronic music...',
//            'facebook' => 'https://www.facebook.com/subdmusic',
//            'twitter' => '',
//            'soundcloud' => ''
//        ],
//        1=>[
//            'id' => 1,
//            'first_name' => 'jeff',
//            'last_name' => 'mor',
//            'picture' => 'jeffpic.jpg',
//            'bio' => 'STRANGE PEOPLE// EARLY MORNING MUSIC // SAGOL // RITMIK RECORDS
//
//A dedicated digger of the abstract and obscure, the concept of maintaining consistency in groove is something Jeff Moreno has mastered. Carving up complex rhythms for serval years now, he has released music on the likes of labels such as Early Morning Music, Ritmik, and Sagol. In 2018 Jeff Moreno has teamed up with long time friend and label mate Michael Rosa to launch their own signature imprint, Strange People. A celebration of audio counter culture pushing the mysterious and mischievous side of electronic music...',
//            'facebook' => 'https://www.facebook.com/subdmusic',
//            'twitter' => '',
//            'soundcloud' => ''
//        ],
//        2=>[
//            'id' => 1,
//            'first_name' => 'jeff',
//            'last_name' => 'mor',
//            'picture' => 'jeffpic.jpg',
//            'bio' => 'STRANGE PEOPLE// EARLY MORNING MUSIC // SAGOL // RITMIK RECORDS
//
//A dedicated digger of the abstract and obscure, the concept of maintaining consistency in groove is something Jeff Moreno has mastered. Carving up complex rhythms for serval years now, he has released music on the likes of labels such as Early Morning Music, Ritmik, and Sagol. In 2018 Jeff Moreno has teamed up with long time friend and label mate Michael Rosa to launch their own signature imprint, Strange People. A celebration of audio counter culture pushing the mysterious and mischievous side of electronic music...',
//            'facebook' => 'https://www.facebook.com/subdmusic',
//            'twitter' => '',
//            'soundcloud' => ''
//        ],
//        3=>[
//            'id' => 1,
//            'first_name' => 'jeff',
//            'last_name' => 'mor',
//            'picture' => 'jeffpic.jpg',
//            'bio' => 'STRANGE PEOPLE// EARLY MORNING MUSIC // SAGOL // RITMIK RECORDS
//
//A dedicated digger of the abstract and obscure, the concept of maintaining consistency in groove is something Jeff Moreno has mastered. Carving up complex rhythms for serval years now, he has released music on the likes of labels such as Early Morning Music, Ritmik, and Sagol. In 2018 Jeff Moreno has teamed up with long time friend and label mate Michael Rosa to launch their own signature imprint, Strange People. A celebration of audio counter culture pushing the mysterious and mischievous side of electronic music...',
//            'facebook' => 'https://www.facebook.com/subdmusic',
//            'twitter' => '',
//            'soundcloud' => ''
//        ],
//        4=>[
//            'id' => 1,
//            'first_name' => 'jeff',
//            'last_name' => 'mor',
//            'picture' => 'jeffpic.jpg',
//            'bio' => 'STRANGE PEOPLE// EARLY MORNING MUSIC // SAGOL // RITMIK RECORDS
//
//A dedicated digger of the abstract and obscure, the concept of maintaining consistency in groove is something Jeff Moreno has mastered. Carving up complex rhythms for serval years now, he has released music on the likes of labels such as Early Morning Music, Ritmik, and Sagol. In 2018 Jeff Moreno has teamed up with long time friend and label mate Michael Rosa to launch their own signature imprint, Strange People. A celebration of audio counter culture pushing the mysterious and mischievous side of electronic music...',
//            'facebook' => 'https://www.facebook.com/subdmusic',
//            'twitter' => '',
//            'soundcloud' => ''
//        ],
//        5=>[
//            'id' => 1,
//            'first_name' => 'jeff',
//            'last_name' => 'mor',
//            'picture' => 'jeffpic.jpg',
//            'bio' => 'STRANGE PEOPLE// EARLY MORNING MUSIC // SAGOL // RITMIK RECORDS
//
//A dedicated digger of the abstract and obscure, the concept of maintaining consistency in groove is something Jeff Moreno has mastered. Carving up complex rhythms for serval years now, he has released music on the likes of labels such as Early Morning Music, Ritmik, and Sagol. In 2018 Jeff Moreno has teamed up with long time friend and label mate Michael Rosa to launch their own signature imprint, Strange People. A celebration of audio counter culture pushing the mysterious and mischievous side of electronic music...',
//            'facebook' => 'https://www.facebook.com/subdmusic',
//            'twitter' => '',
//            'soundcloud' => ''
//        ],
//        6=>[
//            'id' => 1,
//            'first_name' => 'jeff',
//            'last_name' => 'mor',
//            'picture' => 'jeffpic.jpg',
//            'bio' => 'STRANGE PEOPLE// EARLY MORNING MUSIC // SAGOL // RITMIK RECORDS
//
//A dedicated digger of the abstract and obscure, the concept of maintaining consistency in groove is something Jeff Moreno has mastered. Carving up complex rhythms for serval years now, he has released music on the likes of labels such as Early Morning Music, Ritmik, and Sagol. In 2018 Jeff Moreno has teamed up with long time friend and label mate Michael Rosa to launch their own signature imprint, Strange People. A celebration of audio counter culture pushing the mysterious and mischievous side of electronic music...',
//            'facebook' => 'https://www.facebook.com/subdmusic',
//            'twitter' => '',
//            'soundcloud' => ''
//        ],
//        7=>[
//            'id' => 1,
//            'first_name' => 'jeff',
//            'last_name' => 'mor',
//            'picture' => 'jeffpic.jpg',
//            'bio' => 'STRANGE PEOPLE// EARLY MORNING MUSIC // SAGOL // RITMIK RECORDS
//
//A dedicated digger of the abstract and obscure, the concept of maintaining consistency in groove is something Jeff Moreno has mastered. Carving up complex rhythms for serval years now, he has released music on the likes of labels such as Early Morning Music, Ritmik, and Sagol. In 2018 Jeff Moreno has teamed up with long time friend and label mate Michael Rosa to launch their own signature imprint, Strange People. A celebration of audio counter culture pushing the mysterious and mischievous side of electronic music...',
//            'facebook' => 'https://www.facebook.com/subdmusic',
//            'twitter' => '',
//            'soundcloud' => ''
//        ],
//        8=>[
//            'id' => 1,
//            'first_name' => 'jeff',
//            'last_name' => 'mor',
//            'picture' => 'jeffpic.jpg',
//            'bio' => 'STRANGE PEOPLE// EARLY MORNING MUSIC // SAGOL // RITMIK RECORDS
//
//A dedicated digger of the abstract and obscure, the concept of maintaining consistency in groove is something Jeff Moreno has mastered. Carving up complex rhythms for serval years now, he has released music on the likes of labels such as Early Morning Music, Ritmik, and Sagol. In 2018 Jeff Moreno has teamed up with long time friend and label mate Michael Rosa to launch their own signature imprint, Strange People. A celebration of audio counter culture pushing the mysterious and mischievous side of electronic music...',
//            'facebook' => 'https://www.facebook.com/subdmusic',
//            'twitter' => '',
//            'soundcloud' => ''
//        ]
//    ];
    foreach ($artistsobject as $key => $artist)
    {
        $artists[$key] = [
            'id' => $artist->id,
            'first_name' => $artist->first_name,
            'last_name' => $artist->last_name,
            'picture' => $artist->picture,
            'bio' => $artist->bio,
            'facebook' => $artist->facebook,
            'twitter' => $artist->twitter,
            'soundcloud' => $artist->soundcloud
//            'id' => $artist['id'],
//            'first_name' => $artist['first_name'],
//            'last_name' => $artist['last_name'],
//            'picture' => $artist['picture'],
//            'bio' => $artist['bio'],
//            'facebook' => $artist['facebook'],
//            'twitter' => $artist['twitter'],
//            'soundcloud' => $artist['soundcloud']
        ] ;
    }
    shuffle($artists);
    $eventsobject = DB::table('events')->get();
//    $eventsobject =  [
//        0=>[
//            'id' => 1,
//            'day' => '17',
//            'month' => 'mor',
//            'year' => '2018',
//            'city' => 'miami',
//            'state' => 'asdfasdf',
//            'name' => 'asdfsfd',
//            'venue' => 'asdfasfd',
//        ]
//];
    foreach ($eventsobject as $key => $event)
    {
        $events[$key] = [
            'id' => $event->id,
            'day' => $event->day,
            'month' => $event->month,
            'year' => $event->year,
            'city' => $event->city,
            'state' => $event->state,
            'name' => $event->name,
            'venue' => $event->venue
//            'id' => $event['id'],
//            'day' => $event['day'],
//            'month' => $event['month'],
//            'year' => $event['year'],
//            'city' => $event['city'],
//            'state' => $event['state'],
//            'name' => $event['name'],
//            'venue' => $event['venue']
        ] ;
    }
    array_reverse($events);

    return view('pages.home' ,compact('artists', 'events'));
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/artists', function () {
    $artistsobject = DB::table('artists')->get();
    foreach ($artistsobject as $key => $artist)
    {
        $artists[$key] = [
            'id' => $artist->id,
            'first_name' => $artist->first_name,
            'last_name' => $artist->last_name,
            'picture' => $artist->picture,
            'bio' => $artist->bio,
            'facebook' => $artist->facebook,
            'twitter' => $artist->twitter,
            'soundcloud' => $artist->soundcloud
        ] ;
    }
    shuffle($artists);
    $data = [
        'bodyclass' => 'gallery-photogallery'
    ];
    return view('pages.artists', compact('data','artists'));
});

Route::get('profile/{id}', function ($id) {
    $artist = DB::table('artists')->where('id', $id)->first();

    return view('pages.profile', compact('artist'));
})->where('id', '[0-9]+');

Route::get('/events', function () {
    return view('events');
});

Route::get('/media', function () {
    return view('media');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/send', 'EmailController@send');

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});