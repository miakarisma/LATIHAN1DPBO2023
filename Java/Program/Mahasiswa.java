/* 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-1 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
*/

// Kelas Mahasiswa yang digunakan untuk merepresentasikan data Mahasiswa
public class Mahasiswa {
    // Atribut yang digunakan pada kelas mahasiswa
    private String nim;
    private String nama;
    private String prodi;
    private String fakultas;
    
    // Constructor
    Mahasiswa()
    {

    }

    // Constructor : Overloading
    Mahasiswa(String nim, String nama, String prodi, String fakultas)
    {
        this.nim = nim;
        this.nama = nama;
        this.prodi = prodi;
        this.fakultas = fakultas;
    }

    // Method set untuk set setiap atribut pada kelas mahasiswa
    public void setNim(String nim) 
    {
        this.nim = nim;
    }

    public void setNama(String nama)
    {
        this.nama = nama;
    }
    
    public void setProdi(String prodi)
    {
        this.prodi = prodi;
    }

    public void setFakultas(String fakultas)
    {
        this.fakultas = fakultas;
    }

    // Method get untuk get setiap atribut pada kelas mahasiswa
    public String getNim()
    {
        return nim;
    }

    public String getNama()
    {
        return nama;
    }

    public String getProdi()
    {
        return prodi;
    }

    public String getFakultas()
    {
        return fakultas;
    }  
}
