<!-- 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-1 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
-->

<!-- Kelas Mahasiswa yang digunakan untuk merepresentasikan data Mahasiswa -->
<?php
    class Mahasiswa
    {
        // Atribut yang digunakan pada kelas Mahasiswa         
        private $nim = '';
        private $nama = '';
        private $prodi = '';
        private $fakultas = '';
        private $foto = '';
        
        // Constructor
        public function __construct($nim = '', $nama = '', $prodi = '', $fakultas = '', $foto = '')
        {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->prodi = $prodi;
            $this->fakultas = $fakultas;
            $this->foto = $foto;
        }
        
        // Method set untuk set setiap atribut pada kelas mahasiswa
        public function setNim($nim)
        {
            $this->nim = $nim;
        }

        public function setNama($nama)
        {
            $this->nama = $nama;
        }

        public function setProdi($prodi)
        {
            $this->prodi = $prodi;
        }

        public function setFakultas($fakultas)
        {
            $this->fakultas = $fakultas;
        }

        public function setFoto($foto)
        {
            $this->foto = $foto;
        }
        
        // Method get untuk get setiap atribut pada kelas mahasiswa
        public function getNim()
        {
            return $this->nim;
        }

        public function getNama()
        {
            return $this->nama;
        }

        public function getProdi()
        {
            return $this->prodi;
        }

        public function getFakultas()
        {
            return $this->fakultas;
        }

        public function getFoto()
        {
            return $this->foto;
        }
        
        // Destructor
        function __destruct()
        {
            
        }
    }
?>
