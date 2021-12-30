@extends('layout.main')

@section('content')
<section class="section-one">
    <h3 class="mb-4">Data Mining Klasifikasi Metode C45</h3>
    <p>
        Algoritma C4.5 merupakan algoritma yang digunakan untuk melakukan proses klasifikasi data dengan menggunakan teknik
        pohon keputusan. Algoritma C4.5 merupakan ekstensi dari algoritma ID3 dan menggunakan prinsip decision tree yang mirip.
        Algoritma ini sudah sangat terkenal dan disukai karena memiliki banyak kelebihan. Kelebihan ini misalnya dapat mengolah
        data numerik dan diskret, dapat menangani nilai atribut yang hilang, menghasilkan aturan-aturan yang mudah diinterpretasikan
        dan performanya merupakan salah satu yang tercepat dibandingkan dengan algoritma lain.
    </p>
    <p>
        Ide dasar dari algoritma ini adalah pembuatan pohon keputusan berdasarkan pemilihan atribut yang memiliki prioritas tinggi
        atau dapat disebut memiliki nilai gain tertinggi berdasarkan nilai entropy atribut tersebut sebagai poros atribut klasifikasi.
        Kemudian secara rekursif cabang-cabang pohon diperluas sehingga seluruh pohon terbentuk. Menurut kamus IGI Global (International
        Publisher of Progressive Academic), entropy adalah jumlah data yang tidak relevan terhadap informasi dari suatu kumpulan data. Gain
        adalah informasi yang didapatkan dari perubahan entropy pada suatu kumpulan data, baik melalui observasi atau bisa juga
        disimpulkan dengan cara melakukan partisipasi terhadap suatu set data.
    </p>
    <p>
        Berdasarkan apa yang ditulis oleh Jefri, terdapat empat langkah dalam proses pembuatan pohon keputusan pada algoritma C4.5, yaitu:
    </p>
    <ul>
        <li>Memilih atribut sebagai akar</li>
        <li>Membuat cabang untuk masing-masing nilai</li>
        <li>Membagi setiap kasus dalam cabang</li>
        <li>Mengulangi proses dalam setiap cabang sehingga semua kasus dalam cabang memiliki kelas yang sama</li>
    </ul>
</section>
<section class="section-two">
    <h3>Komponen Source Code C45 PHP</h3>
    <p>
        Source code C45 dibuat menggunakan bahasa PHP dengan design framework Bootstrap 5 dan Codeigniter 4. Database yang digunakan
        adalah MySQL dengan koneksi menggunakan library MySQLi. Komponen dari source code ini antara lain :
    </p>
    <ul>
        <li>
            <b>Atribut</b>, mengatur atribut apa saja yang ada pada data, atribut terakhir otomatis dijadikan klasifikasi
        </li>
        <li>
            <b>Nilai Atribut</b>, mengatur nilai atribut apa saja yang ada pada data. Setiap atribut kategorikal bisa memiliki
            lebih dari 1 nilai.
        </li>
        <li>
            <b>Dataset</b>, mengolah dataset (data latih/training). Dataset bisa ditambah, ubah, hapus atau diimport dari file csv.
        </li>
        <li>
            <b>Perhitungan</b>, melakukan perhitungan dengan menginput nilai atribut yang ingin dicari klasifikasinya. Perhitungan
            juga bisa menampilkan pohon keputusan langsung.
        </li>
    </ul>
</section>
@endsection