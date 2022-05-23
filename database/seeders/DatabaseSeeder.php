<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\User;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(10)->create();
       Admin::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name'=>'Ilmu Komputer'
        ]);
        Category::create([
            'name'=>'Novel'
        ]);
        Category::create([
            'name'=>'Kamus'
        ]);

        Author::create([
            'name'=>'Rintho Rante Rerung'
        ]);
        Author::create([
            'name'=>'Suhartini, S.Kom., M.Kom.'
        ]);
        Author::create([
            'name'=>'Teguh Wahyono'
        ]);
        Author::create([
            'name'=>'M. Aan Mansyur'
        ]);
        Author::create([
            'name'=>'Helena Duggan'
        ]);
        Author::create([
            'name'=>'Sapardi Djoko Damono'
        ]);
        Author::create([
            'name'=>'M. Hasan Hwang'
        ]);
        Author::create([
            'name'=>'Slamet Riyanto'
        ]);


        Publisher::create([
            'name'=>'Penerbit Buku Pendidikan Deepublish',
            'address'=>'Jl.Rajawali G. Elang 6 No 3 RT/RW 005/033, Drono, Sardonoharjo, Ngaglik, Sleman, D.I Yogyakarta 55581'
        ]);
        Publisher::create([
            'name'=>'Gava Media',
            'address'=>'Jl. Klitren Lor GK 3 No.15, Klitren, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55222'
        ]);
        Publisher::create([
            'name'=>'Gramedia Pustaka Utama',
            'address'=>'Gedung Kompas Gramedia Blok 1 lt. 5 Jl. Palmerah Barat No.29-37, Jakarta'
        ]);
        Publisher::create([
            'name'=>'Bhuana Ilmu Populer',
            'address'=>'Jl. Gelora VII No.33, RT.1/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270'
        ]);
        Publisher::create([
            'name'=>'Anak Hebat Indonesia',
            'address'=>'Jl. Cemara No.11, Jotawang, Bangunharjo, Kec. Sewon, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55188'
        ]);
        Publisher::create([
            'name'=>'Renebook',
            'address'=>'Jl. Moh. Kahfi II, Gg. Damai No. 119 Jagakarsa, RT.8/RW.8, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640'
        ]);
        Publisher::create([
            'name'=>'Andi Offset',
            'address'=>'Jl. Beo No. 38-40 Demangan Baru, Yogyakarta INDONESIA 55281'
        ]);

        // Book::create([
        //     'title'=>'',
        //     'author_id'=>'',
        //     'publisher_id'=>'',
        //     'year'=>'',
        //     'isbn'=>'',
        //     'synopsis'=>'',
        //     'category_id'=>'',
        // ]);
        Book::create([
            'title'=>'Pemrograman Web Dasar',
            'author_id'=>'1',
            'publisher_id'=>'1',
            'year'=>'2018',
            'isbn'=>'9786024537005',
            'synopsis'=>'definisi web adalah jaringan komputer yang terdiri dari kumpulan situs internet yang menawarkan teks dan grafik dan suara dan sumber daya animasi melalui hypertext transfer protokol.',
            'category_id'=>'1',
        ]);
        Book::create([
            'title'=>'Perancangan Basis Data Teori',
            'author_id'=>'2',
            'publisher_id'=>'1',
            'year'=>'2020',
            'isbn'=>'9786230207952',
            'synopsis'=>'Basis data adalah kumpulan data yang disimpan dalam komputer atau media penyimpanan dengan cara tertentu sehingga kumpulan data tersebut dapat dengan mudah untuk digunakan atau ditampilkan.',
            'category_id'=>'1',
        ]);
        Book::create([
            'title'=>'Novel Mengapa Luka Tidak Memaafkan Pisau',
            'author_id'=>'4',
            'publisher_id'=>'3',
            'year'=>'2020',
            'isbn'=>'9786020644813',
            'synopsis'=>'apakah hatiku mangkuk dangkal yang pecah— yang alangkah mudah diisi, namun mustahil penuh? apakah mencintai diri sendiri berarti menjadi batu yang dilemparkan ke lautan lepas tanpa dasar?',
            'category_id'=>'2',
        ]);
        Book::create([
            'title'=>'Menghardik Gerimis',
            'author_id'=>'6',
            'publisher_id'=>'3',
            'year'=>'2022',
            'isbn'=>'9786020631844',
            'synopsis'=>'“Aku mencintai hujan sebab kalau jatuh bilang terus terang dan jelas suaranya, tidak membiarkan aku terpeleset.”',
            'category_id'=>'2',
        ]);
        Book::create([
            'title'=>'Panduan Telengkap Belajar Bahasa Korea',
            'author_id'=>'7',
            'publisher_id'=>'6',
            'year'=>'2001',
            'isbn'=>'9786026380814',
            'synopsis'=>'Buku ini sudah memenuhi Standar Kompetensi dan Kelulusan EPS TOPIK—semacam TOEFL (dalam bahasa Inggris) yang mengukur dan menguji kemampuan berbahasa Korea Anda. ',
            'category_id'=>'3',
        ]);
        Book::create([
            'title'=>'The Complete Book Of The Ielts Preparation',
            'author_id'=>'8',
            'publisher_id'=>'7',
            'year'=>'2021',
            'isbn'=>'9786230111716',
            'synopsis'=>'',
            'category_id'=>'3',
        ]);
        

    }
}
