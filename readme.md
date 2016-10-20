#Untuk apa ini?
file codeigniter untuk bahan ajar meetup ke 2 bekup back-end track.
Tugasnya membuat sistem blog dengan codeigniter + database

#Apa isinya?

- file .htaccess untuk menghilangkan index.php pada URL

- Ubah 2 file di application/config/config.php
```
$config['base_url'] = 'http://localhost:8888/sesuaikan-folder-masing-masing';
$config['index_page'] = ''; //kososngkan (kalau sudah kosong, biarkan)
```

- routes.php untuk URL-URL yang dibutuhkan
```
$route['blog/delete/(:any)'] = 'blog/delete/$1';
$route['blog/update/(:any)'] = 'blog/update/$1';
$route['blog/create']        = 'blog/create';
$route['blog/(:any)']        = 'blog/show/$1';
$route['blog']               = 'blog';
```

- file controller baru, controllers/Blog.php dengan isi beberapa fungsi sesuai URL dari routes, tapi masih kosong

- file model baru, models/Blog.php, masih kosong
