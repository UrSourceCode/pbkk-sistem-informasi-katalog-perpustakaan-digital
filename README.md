## Anggota Kelompok 
3 - ELSHE ERVIANA ANGELY
3 - HANIIF AHMAD JAUHARI
3 - Aristya Vika Wijaya
3 - Ramadhan Arif Hardijansyah

Terdapat 2 peran yaitu User dan Admin. 
Seorang user dapat: 
1. Melihat list buku 
2. Melakukan login
3. Melihat buku berdasarkan author,kategori buku, atau publisher.
4. Melihat detail buku

Seorang admin dapat: 
1. Melihat list buku 
2. Melakukan login
3. Melihat buku berdasarkan author,kategori buku, atau publisher.
4. Dapat melihat detail buku
5. Menambah buku baru.

# Required:
## Laravel route, controller and middleware
- **Controller** sendiri terdapat `LocalizationController.php` untuk lokalisasi, `BookController.php` untuk CRUD buku, 'RegisterController.php` untuk proses registrasi.[app/Http/Controllers](app/Http/Controllers)
- **Lokasi:** Route yang digunakan terdapat pada [routes/web.php](/routes/web.php)
- Selain **middleware**-middleware bawaan, middleware juga digunakan untuk melakukan lokalisasi

## Laravel request, validation and response
- **Request** banyak digunakan untuk controller digunakan untuk mengambil input dan file dari form untuk disimpan di database. **Lokasi**: [app/Http/Controllers](app/Http/Controllers)
- **Validation** digunakan pada beberapa form seperti menambah buku. Validation ini untuk mengecek validasi dari input yang diberikan dan juga terletak di beberapa view.
- **Response** digunakan untuk menampilkan message dan redirect apabila data buku berhasil ditambah/hapus.

## Laravel model, eloquent and query builder
- Terdiri dari beberapa **model** antara lain Admin, Author, Book, Category, Publisher, dan User. Model tersebut digunakan untuk menyimpan fungsi-fungsi eloquent yang akan digunakan. 
- **eloquent** sendiri digunakan di controllers dan model terutama dibagian relasinya. Dimana relasi yang digunakan adalah
``` php
//di model author
public function books(){
        return $this->hasMany(Book::class);
    }
//di model book
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
    
// di model category
public function books(){
        return $this->hasMany(Book::class);
    }
    
// di model publisher
    public function books(){
        return $this->hasMany(Book::class);
    }
```
- **Query builder** digunakan di beberapa vie seperto untuk menghitung jumlah buku atau jumlah author.

## Laravel authentication and authorization
## Laravel localization and file storage
- **untuk localization** terletak di controller di file LocalizationController.php
- **file storage** digunakan untuk menyimpan dan mengambil file image dari cover buku. untuk mengakses file storage bisa menggunaka `php artisan storage:link`.

## Laravel view and blade component
**Lokasi:** [resources\views](resources\views) 
- `View` digunakan untuk menampilkan data dengan interface yang lebih ramah mata. Templating yang digunakan untuk menggunakan view yaitu `blade` .

## Laravel session and caching
## Laravel feature testing and unit testing
