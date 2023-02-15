/* 
    Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-1 dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 
*/

// Kelas Main yang digunakan sebagai program utama

// Mengimpor kelas yang digunakan kedalam kelas Main
import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        ArrayList<Mahasiswa> daftarMahasiswa = new ArrayList<>(); // List daftar Mahasiswa yang digunakan untuk menyimpan sekumpulan objek mahasiswa
        String nim, nama, prodi, fakultas; // String untuk menyimpan nim, nama, prodi serta fakultas dari masukan user
        int i = 0, ketemu = 0; // Variabel untuk kontrol perulangan
        Scanner sc = new Scanner(System.in); // Instansiasi objek scanner
        int menu = 0; // Variabel untuk menu yang dipilih user

        // Perulangan untuk memproses setiap fitur yang diinginkan user
        while (menu != 5) {
            // Tampilan Dashboard
            System.out.println("+====================================================+");
            System.out.println("+   SELAMAT DATANG DI SISTEM INFORMASI MAHASISWA     +");
            System.out.println("+====================================================+");
            System.out.println("1. Tambah Data Mahasiswa");
            System.out.println("2. Ubah Data Mahasiswa");
            System.out.println("3. Hapus Data Mahasiswa");
            System.out.println("4. Tampilkan Daftar Mahasiswa");
            System.out.println("5. Keluar");
            System.out.println();
            System.out.print("Fitur yang dipilih : ");
            menu = sc.nextInt();

            // Jika menu yang dipilih tambah data Mahasiswa maka lakukan instansiasi objek mahasiswa lalu masukan ke dalam list daftarMahasiswa
            if (menu == 1) {
                // Meminta masukan dari user untuk data mahasiswa
                System.out.println();
                System.out.print("NIM : ");
                nim = sc.next();
                System.out.print("Nama : ");
                nama = sc.next();
                System.out.print("Prodi : ");
                prodi = sc.next();
                System.out.print("Fakultas : ");
                fakultas = sc.next();

                // Pembuatan objek mahasiswa
                Mahasiswa mhs = new Mahasiswa(nim, nama, prodi, fakultas);
                // Menambah objek mahasiswa ke dalam list
                daftarMahasiswa.add(mhs);
                System.out.println("Data berhasil ditambahkan!");
                System.out.println();
            }
            // Jika menu yang dipilih ubah data Mahasiswa maka lakukan pengubahan data objek mahasiswa dengan method set berdasarkan nim masukan user
            else if (menu == 2) {
                // Meminta masukan NIM dari user untuk data mahasiswa yang ingin diubah
                System.out.println();
                System.out.println("Silahkan isi NIM dari mahasiswa yang ingin diubah datanya!");
                System.out.print("NIM : ");
                nim = sc.next();
                System.out.println();

                // Proses pengubahan data pada objek mahasiswa dengan NIM masukan user
                i = 0; ketemu = 0;
                while (ketemu == 0 && i < daftarMahasiswa.size())
                {
                    if (daftarMahasiswa.get(i).getNim().equals(nim)) {
                        System.out.println("Mahasiswa ditemukan. Silahkan masukan data baru!");
                        System.out.print("Nama : ");
                        nama = sc.next();
                        System.out.print("Prodi : ");
                        prodi = sc.next();
                        System.out.print("Fakultas : ");
                        fakultas = sc.next();
                        daftarMahasiswa.get(i).setNim(nim);
                        daftarMahasiswa.get(i).setNama(nama);
                        daftarMahasiswa.get(i).setProdi(prodi);
                        daftarMahasiswa.get(i).setFakultas(fakultas);
                        ketemu = 1;
                    }
                    i++;
                }

                // Pesan pemberitahuan
                if (ketemu != 0) 
                {
                    System.out.println("Data berhasil diubah!");
                    System.out.println();
                }
                else 
                {
                    System.out.println("Data tidak ditemukan!");
                    System.out.println();
                }
            }
            // Jika menu yang dipilih hapus data Mahasiswa maka lakukan penghapusan data objek mahasiswa berdasarkan nim masukan user
            else if (menu == 3) {
                // Meminta masukan dari user untuk data mahasiswa yang ingin dihapus
                System.out.println();
                System.out.println("Silahkan masukan NIM dari mahasiswa yang ingin dihapus datanya!");
                System.out.print("NIM : ");
                nim = sc.next();

                // Proses penghapusan data objek mahasiswa dengan NIM masukan user
                i = 0; ketemu = 0;
                while (ketemu == 0 && i < daftarMahasiswa.size())
                {
                    if (daftarMahasiswa.get(i).getNim().equals(nim)) {
                        daftarMahasiswa.remove(i);
                        ketemu = 1;
                    }
                    i++;
                }

                // Pesan pemberitahuan
                if (ketemu != 0) 
                {
                    System.out.println("Data berhasil dihapus!");
                    System.out.println();
                }
                else 
                {
                    System.out.println("Data tidak ditemukan!");
                    System.out.println();
                }
            }
            // Jika menu yang dipilih tampilkan data daftar Mahasiswa maka lakukan instansiasi objek tabel untuk menampilkan daftar mahasiswa
            else if (menu == 4) {
                Tabel tab = new Tabel(); // Instansiasi objek tabel 
                String[][] arrstr = new String[daftarMahasiswa.size()+1][4]; // Array yang berisi list daftar Mahasiswa

                // Pengisian judul setiap kolom pada tabel
                arrstr[0][0] = "NIM";
                arrstr[0][1] = "Nama";
                arrstr[0][2] = "Program Studi";
                arrstr[0][3] = "Fakultas";
                
                // Proses pengisian setiap elemen array
                for(i = 0; i < daftarMahasiswa.size(); i++)
                {
                    arrstr[i+1][0] = daftarMahasiswa.get(i).getNim();
                    arrstr[i+1][1] = daftarMahasiswa.get(i).getNama();
                    arrstr[i+1][2] = daftarMahasiswa.get(i).getProdi();
                    arrstr[i+1][3] = daftarMahasiswa.get(i).getFakultas();
                }
                System.out.println();

                // Menampilkan Daftar Data Mahasiswa
                System.out.println("        Daftar Data Mahasiswa       ");
                tab.buatBaris(daftarMahasiswa.size()+1, 4, arrstr);
                System.out.println();
            }
            // Jika menu yang dipilih keluar maka tampilkan pesan pemberitahuan
            else if (menu == 5)
            {
                System.out.println();
                System.out.println("TERIMA KASIH TELAH MENGGUNAKAN SISTEM KAMI <3");
            }
        }
    }
}
