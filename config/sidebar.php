<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [[
		'icon' => 'fas fa-th-large',
		'title' => 'Dashboard',
		'url' => '/admin-area/dashboard'
	],[
		'icon' => 'fas fa-images',
		'title' => 'Carousel',
		'url' => '/admin-area/carousel'
	],[
		'icon' => 'fas fa-database',
		'title' => 'Data Master',
		'url' => '#',
		'caret' => true,
		'id' => 'datamaster',
		'sub_menu' => [[
			'url' => '/admin-area/gallery',
			'title' => 'File Gambar'
        ],[
			'url' => '/admin-area/mapel',
			'title' => 'Mata Pelajaran/Jabatan'
        ]]
	],[
		'icon' => 'fas fa-snowboarding',
        'url' => '/admin-area/ekskul',
        'title' => 'Ekstrakurikuler'
    ],[
		'icon' => 'fas fa-newspaper',
		'url' => '/admin-area/kegiatan',
        'title' => 'Kegiatan'
	],[
		'icon' => 'fas fa-phone',
		'title' => 'Kontak',
		'url' => '/admin-area/kontak'
	],[
		'icon' => 'fas fa-trophy',
        'url' => '/admin-area/prestasi',
        'title' => 'Prestasi'
    ],[
		'icon' => 'fas fa-id-card',
		'title' => 'Profil Sekolah',
		'url' => '#',
		'caret' => true,
		'id' => 'profilsekolah',
		'sub_menu' => [[
            'title' => 'Kepala Sekolah',
            'url' => '/admin-area/kepalasekolah'
        ],[
            'title' => 'Data Siswa',
            'url' => '/admin-area/datasiswa'
        ],[
            'title' => 'Informasi',
            'url' => '/admin-area/informasi'
        ],[
            'title' => 'Prestasi',
            'url' => '/admin-area/prestasi'
        ],[
            'title' => 'Tenaga Pendidik',
            'url' => '/admin-area/tenagapendidik'
        ],[
            'title' => 'Tentang Sekolah',
            'url' => '/admin-area/tentangsekolah'
        ],[
            'title' => 'Visi Misi',
            'url' => '/admin-area/visimisi'
        ]]
	],[
		'icon' => 'fas fa-user',
		'title' => 'Pengguna',
		'url' => '/admin-area/pengguna'
	]]
];
