<!-- 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-1 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
-->

<!-- Kelas Index yang digunakan sebagai program utama -->
<?php
    // Memasukkan file kelas yang digunakan
    require ('Mahasiswa.php');
    require ('Tabel.php');

    // Menambah Objek Mahasiswa
    $mhs1 = new Mahasiswa("2102165", "Mia Karisma Haq", "Ilmu Komputer", "FPMIPA", "<img src='../foto/panda1.png' width='30' height='30'>");
    $mhs2 = new Mahasiswa("2000001", "Techi", "Ilmu Komputer", "FPMIPA", "<img src='../foto/panda1.png' width='30' height='30'>");
    $mhs3 = new Mahasiswa("2000002", "Cahgum", "Ilmu Komputer", "FPMIPA", "<img src='../foto/panda1.png' width='30' height='30'>");
    $mhs4 = new Mahasiswa("2000003", "Nelly", "Ilmu Komputer", "FPMIPA", "<img src='../foto/panda1.png'width='30' height='30'>");
    $mhs5 = new Mahasiswa("2000004", "Sekar", "Ilmu Komputer", "FPMIPA", "<img src='../foto/panda1.png' width='30' height='30'>");

    // Memasukan setiap objek mahasiswa ke dalam array daftarMahasiswa
    $daftarMahasiswa = array();
    array_push($daftarMahasiswa, $mhs1);
    array_push($daftarMahasiswa, $mhs2);
    array_push($daftarMahasiswa, $mhs3);
    array_push($daftarMahasiswa, $mhs4);
    array_push($daftarMahasiswa, $mhs5);

    // Menginstansiasi objek tabel yang digunakan untuk menampilkan daftar objek mahasiswa sebelum dilakukan Ubah dan Hapus data
    $tab = new Tabel();
    $arrstr = array();
    $arrstr[0][0] = "NIM";
    $arrstr[0][1] = "Nama";
    $arrstr[0][2] = "Program Studi";
    $arrstr[0][3] = "Fakultas";
    $arrstr[0][4] = "Foto";

    for($i = 0; $i < count($daftarMahasiswa); $i++)
    {
        $arrstr[$i+1][0] = $daftarMahasiswa[$i]->getNim();
        $arrstr[$i+1][1] = $daftarMahasiswa[$i]->getNama();
        $arrstr[$i+1][2] = $daftarMahasiswa[$i]->getProdi();
        $arrstr[$i+1][3] = $daftarMahasiswa[$i]->getFakultas();
        $arrstr[$i+1][4] = $daftarMahasiswa[$i]->getFoto();
    }

    // Menampilkan daftar objek mahasiswa
    echo "<br>";
    echo str_repeat("&nbsp", 30) . "<b>" . "Daftar Data Mahasiswa" . "</b>" . "<br>";
    $tab->buatBaris(count($daftarMahasiswa)+1, 5, $arrstr);
    echo "<br>";
    
    // Mengubah data salah satu objek mahasiswa
    $i = 0;
    $ketemu = 0;

    // Proses pengubahan data pada objek mahasiswa dengan NIM 2000002
    while ($i < count($daftarMahasiswa) && $ketemu == 0) 
    {
        if ($daftarMahasiswa[$i]->getNim() == "2000002") 
        {
            $daftarMahasiswa[$i]->setProdi("Teknik Informatika");
            $daftarMahasiswa[$i]->setFakultas("STEI");
            $ketemu = 1;
        }
        $i++;
    }

    // Menampilkan pesan pemberitahuan
    if ($ketemu != 0) 
    {
        echo "<i>" . "Data mahasiswa dengan NIM " . $daftarMahasiswa[$i-1]->getNim() . " berhasil diubah!" . "</i>" . "<br>";
    }
    else 
    {
        echo "<i>" . "Data mahasiswa dengan NIM " . $daftarMahasiswa[$i-1]->getNim() . " tidak ditemukan!" . "</i>" . "<br>";
    }

    // Menampilkan daftar objek mahasiswa setelah mengalami perubahan data
    for($i = 0; $i < count($daftarMahasiswa); $i++)
    {
        $arrstr[$i+1][0] = $daftarMahasiswa[$i]->getNim();
        $arrstr[$i+1][1] = $daftarMahasiswa[$i]->getNama();
        $arrstr[$i+1][2] = $daftarMahasiswa[$i]->getProdi();
        $arrstr[$i+1][3] = $daftarMahasiswa[$i]->getFakultas();
        $arrstr[$i+1][4] = $daftarMahasiswa[$i]->getFoto();
    }

    echo "<br>";
    echo str_repeat("&nbsp", 30) . "<b>" . "Daftar Data Mahasiswa" . "</b>" . "<br>";
    $tab->buatBaris(count($daftarMahasiswa)+1, 5, $arrstr);
    echo "<br>";

    // Menghapus data salah satu objek mahasiswa
    $i = 0;
    $ketemu = 0;
    $tempNim = null;

    // Proses penghapusan data objek mahasiswa dengan NIM 2102165
    while ($i < count($daftarMahasiswa) && $ketemu == 0) 
    {
        if ($daftarMahasiswa[$i]->getNim() == "2102165") 
        {
            $tempNim = $daftarMahasiswa[$i]->getNim() ;
            unset($daftarMahasiswa[$i]);
            $ketemu = 1;
        }
        $i++;
    }

    // Menampilkan pesan pemberitahuan
    if ($ketemu != 0) 
    {
        echo "<i>" . "Data mahasiswa dengan NIM " . $tempNim . " berhasil dihapus!" . "</i>" . "<br>";
    }
    else 
    {
        echo "<i>" . "Data mahasiswa dengan NIM " . $tempNim . " tidak ditemukan!" . "</i>" . "<br>";
    }

    // Menampilkan daftar objek mahasiswa setelah mengalami penghapusan data
    for($i = 1; $i < count($daftarMahasiswa); $i++)
    {
        $arrstr[$i][0] = $daftarMahasiswa[$i]->getNim();
        $arrstr[$i][1] = $daftarMahasiswa[$i]->getNama();
        $arrstr[$i][2] = $daftarMahasiswa[$i]->getProdi();
        $arrstr[$i][3] = $daftarMahasiswa[$i]->getFakultas();
        $arrstr[$i][4] = $daftarMahasiswa[$i]->getFoto();
    }

    echo "<br>";
    echo str_repeat("&nbsp", 30) . "<b>" . "Daftar Data Mahasiswa" . "</b>" . "<br>";
    $tab->buatBaris(count($daftarMahasiswa), 5, $arrstr);
    echo "<br>";
?>