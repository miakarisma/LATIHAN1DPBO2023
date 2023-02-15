<!-- 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-1 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
-->

<!-- Kelas Tabel yang digunakan untuk membuat tabel daftar objek mahasiswa -->
<?php
    class Tabel
    {
        // Atribut yang digunakan pada kelas Tabel
        private $baris = 0;
        private $kolom = 0;
        
        // Constructor
        public function __construct($baris = 0, $kolom = 0)
        {
            $this->baris = $baris;
            $this->kolom = $kolom;
        }

        // Method set setiap atribut pada kelas Tabel
        public function setBaris($baris)
        {
            $this->baris = $baris;
        }

        public function setKolom($kolom)
        {
            $this->kolom = $kolom;
        }

        // Method get setiap atribut pada kelas Tabel
        public function getBaris()
        {
            return $this->baris;
        }

        public function getKolom()
        {
            return $this->kolom;
        }

        // Method membuat baris tabel
        function buatBaris($baris, $kolom, $data) {
            $i = 0;
            $j = 0;

            echo "<table>";
                for ($i=0; $i < $baris; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < $kolom; $j++) { 
                        echo "<td>";
                        echo $data[$i][$j];
                        echo "<td>";
                    }
                    echo "<br>";
                    echo "</tr>";
                }
            echo "</table>";
        }        

        // Destructor
        function __destruct()
        {
            
        }
    }
?>