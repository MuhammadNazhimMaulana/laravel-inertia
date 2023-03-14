# Laravel Inertia

Untuk melakukan konfigurasi Laravel dengan menggunakan Inertia ini perlu diingat bahwa aplikasi laravel harus disiapkan kemudian silakan pasang dulu dependencies Inertianya dengan perintah berikut ini:

# Server Side Preparation

```
composer require inertiajs/inertia-laravel
```

Setelah terinstall, maka hal selanjutnya yang perlu dilakukan adalah membuat sebuah file dengan nama **app.blade.php** di folder _resource/view_ kemudian setelah itu silakan paste template berikut ini:

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>
```

Setelah itu yang perlu dilakukan adalah set-up middleware dengan cara memasukkan perintah berikut ini:

```
php artisan inertia:middleware
```

Selanjutnya yang perlu dilakukan adalah register middleware untuk menghandle request inertia di kernel

```php
'web' => [
    // ...
    \App\Http\Middleware\HandleInertiaRequests::class,
],
```

Jika sudah selesai yang perlu dilakukan adalah membuat controller yang nanti dapat menghandle request Inertianya dan berikut contoh dari controllernya


```php
use Inertia\Inertia;

class EventsController extends Controller
{
    public function show(Event $event)
    {
        return Inertia::render('Event/Show', [
            'event' => $event->only(
                'id',
                'title',
                'start_date',
                'description'
            ),
        ]);
    }
}
```

# Client Side Preparation

Selanjutnya yang perlu dilakukan adalah menjalankan perintah berikut ini terlebih dahulu

```
npm install
```

Setelah berhasil, maka selanjutnya yang perlu dijalankan adalah perintah berikut ini:

```
npm install @inertiajs/inertia @inertiajs/inertia-vue
```

Lalu silakan install vue js (disini yang digunakan adalah vue 2)

```
npm install vue@2
```

Silakan Jalankan 

```
npm run dev
```

Apabila terjadi error maka silakan ubah webpack.js menjadi seperti berikut ini:

```js
 mix.js('resources/js/app.js', 'public/js').vue()
.postCss('resources/css/app.css', 'public/css', [
    //
]);
```

Kalau proses run dev sudah berhasil silakan lakukan sekali lagi dan terakhir silakan jalankan perintah berikut ini untuk menjalankan local development server dari laravelnya

```
php artisan serve
```

Dan untuk mempermudah agar setiap kali menyimpan perubahan dan langsung di build maka bisa dengan menjalan kan perintah berikut ini pada terminal yang satu lagi

```
npm run watch
```

<br>

<!-- CONTRIBUTOR -->
Contributor :
<br>
[![Gmail: Muhammad Nazhim Maulana](https://img.shields.io/badge/-nazhimmaulanamuhammad@gmail.com-maroon?style=flat&logo=gmail)](https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqTfrDgzWPFFgSKDLmBlPGRmCRXMQVTgqZDWJrxHDMJkSBGGCGnnGJhRKjrbzjJmFqnZFg)
[![GitHub Muhammad Nazhim Maulana](https://img.shields.io/github/followers/wildanie12?label=follow&style=social)](https://github.com/MuhammadNazhimMaulana)
[![LinkedIn](https://img.shields.io/badge/Muhammad_Nazhim_Maulana-%230077B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/muhammad-nazhim-maulana-7198b4231/)


<h3 style="margin-top: 20px;">
    <p align="center">&copy; 2023 from Bone</p>
</h3>
<!-- Closing -->