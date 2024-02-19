<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// user
        DB::table('users')->insert([
            'nama' => 'Admin',
            'kelas' => '-',
            'jenis_kelamin' => '-',
            'agama' => '-',
            'username' => 'Admin',
            'password' => '$2y$10$JpUM5gqLSPTHeEkToEP/ZuqcfoRIdN2jDHoDQfMKUkDUuhngsYC.6',
            'phone' => '(0332) 431201',
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'nama' => 'Abhista Farrel Karomah Hibatullah',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Farrel',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Ahmad Abdillah Faza',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Faza',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Alif Zaky Lutfiansyah',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Zaky',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Aril Beni Setiawan',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Aril',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Chelo Tasnim Haryono',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Chelo',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Dava Faranezar',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Dava',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Dimas Rega Adiwijaya',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Dimas',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Haris Mochammad Ishak',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Haris',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Luqmanaya Wahidan Sutanto',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Idan',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Mohammad Davilah Akbar',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Davil',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Mohammad Rayhan Zhidad',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Rayhan',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Muhammad Gufron',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Gufron',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Muhammad Ikrom',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Ikrom',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Muhammad Irfan Ubaidillah',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Irfan',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Muhammad Mahrus',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Mahrus',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Putra Aditya Perkasa',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Adit',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Radhitia Pratama Effendy',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Radhit',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Raya Ghaniyya Yuda',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Raya',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Riski Yantono Avis',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Avis',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Rizky',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Rizky',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Siti qomariatul Maulidia',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'username' => 'Lidia',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Tabina Faisa Pribadi',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'username' => 'Tabina',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'foto_profile' => 'tes',
            'nama' => 'Teguh Wichaksono',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Teguh',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Wildan Zaki Amali',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Wildan',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
        DB::table('users')->insert([
            'nama' => 'Yuviar Nuzul Ramadhani',
            'kelas' => 'XII-RPL 1',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'username' => 'Yuvi',
            'password' => '$2y$10$XUHow4MIKoUfmEL6o7syy.MQ0yRjf2pwpYAGACN/tQ15VeAY.l0ke',
        ]);
// ebook
        DB::table('ebooks')->insert([
            'judul' => 'Belajar Goblok dari Bob Sadino',
            'isbn' => '9786020413754',
            'cover' => 'bob sadino.jpg',
            'pengarang' => 'Dodi Mawardi',
            'penerbit' => 'Kintami Publishing',
            'tahun_terbit' => '2009',
            'pdf' => 'Belajar Goblok dari Bob Sadino.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Bibi Gill',
            'isbn' => '9786239726249',
            'cover' => 'bibi gill.jpg',
            'pengarang' => 'Tere Liye',
            'penerbit' => 'Gramedia Pustaka Utama',
            'tahun_terbit' => '2022',
            'pdf' => 'bibi gill.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Bintang',
            'isbn' => '9786020351179',
            'cover' => 'bintang.jpg',
            'pengarang' => 'Tere Liye',
            'penerbit' => 'Gramedia Pustaka Utama',
            'tahun_terbit' => '2017',
            'pdf' => 'bintang.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Teknik Grafika dan Industri Grafika jilid 1',
            'isbn' => '9789790600683',
            'cover' => '',
            'pengarang' => 'Antonius Bowo Wasono',
            'penerbit' => 'Buku Sekolah Eletronik',
            'tahun_terbit' => '2008',
            'pdf' => 'teknik grafika dan industri grafika.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Millionaire Mindset 01',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => 'Rismalasari',
            'penerbit' => '-',
            'tahun_terbit' => '2009',
            'pdf' => 'Millionaire Mindset 01.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Millionaire Mindset 03',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => 'Rismalasari',
            'penerbit' => '-',
            'tahun_terbit' => '2000',
            'pdf' => 'Millionaire Mindset 03.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Millionaire Mindset 09',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => 'Rismalasari',
            'penerbit' => '-',
            'tahun_terbit' => '2000',
            'pdf' => 'Millionaire Mindset 09.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Jaringan Dasar',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2000',
            'pdf' => 'jaringan dasar.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Keyboard Shortcuts Windows',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2000',
            'pdf' => 'keyboard shortcuts windows.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 3.1',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_3_1.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 3.2',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_3_2.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 3.3',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_3_3.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 3.4',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_3_4.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 3.5',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_3_5.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 3.6',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_3_6.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 3.7',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_3_7.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 3.8',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_3_8.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 3.9',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_3_9.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 3.10',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_3_10.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 4.1',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_4_1.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 4.2 Solution',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_4_2_Solution.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 4.3',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_4_3.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 4.4',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_4_4.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 4.4 Solution',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_4_4_Solution.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 5.2',
            'isbn' => '-',
            'cover' => '',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_5_2.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 6.1',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_6_1.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 6.2',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_6_2.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 7.1',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_7_1.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 7.2',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_7_2.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 7.3',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_7_3.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 7.4',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_7_4.pdf',
        ]);
        DB::table('ebooks')->insert([
            'judul' => 'Java Fundamentals 7.5',
            'isbn' => '-',
            'cover' => '-',
            'pengarang' => '-',
            'penerbit' => '-',
            'tahun_terbit' => '2015',
            'pdf' => 'JF_7_5.pdf',
        ]);
// categories
        DB::table('categories')->insert([
            'name' => 'Fiksi',
        ]);
        DB::table('categories')->insert([
            'name' => 'Non-Fiksi',
        ]);
        DB::table('categories')->insert([
            'name' => 'Religius',
        ]);
        DB::table('categories')->insert([
            'name' => 'Referensi',
        ]);
        DB::table('categories')->insert([
            'name' => 'Komik',
        ]);
        DB::table('categories')->insert([
            'name' => 'Puisi',
        ]);
// bahasa
        DB::table('bahasa')->insert([
        'name' => 'Indonesia',
        ]);
        DB::table('bahasa')->insert([
        'name' => 'Inggris',
        ]);
// penerbit
        DB::table('penerbit')->insert([
            'name' => 'Deepublish',
            ]);
    }
}
