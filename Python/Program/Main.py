#  Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-1 dalam mata kuliah DPBO
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

# Mengimpor kelas yang digunakan kedalam kelas Main
from Mahasiswa import Mahasiswa
from Tabel import Tabel

daftarMahasiswa = [] # List daftar Mahasiswa yang digunakan untuk menyimpan sekumpulan objek mahasiswa
menu = 0 # Variabel untuk menu yang dipilih user

# Perulangan untuk memproses setiap fitur yang diinginkan user
while (menu != 5):
    # Tampilan Dashboard
    print("+====================================================+")
    print("+   SELAMAT DATANG DI SISTEM INFORMASI MAHASISWA     +")
    print("+====================================================+")
    print("Berikut fitur-fitur yang tersedia pada layanan kami :")
    print("1. Tambah Data Mahasiswa")
    print("2. Ubah Data Mahasiswa")
    print("3. Hapus Data Mahasiswa")
    print("4. Tampilkan Daftar Mahasiswa")
    print("5. Keluar")
    menu = int(input("\nFitur yang dipilih : "))

    # Jika menu yang dipilih tambah data Mahasiswa maka lakukan instansiasi objek mahasiswa lalu masukan ke dalam list daftarMahasiswa
    if (menu == 1):
        # Meminta masukan dari user untuk data mahasiswa
        nim = input("\nNIM : ")
        nama = input("Nama : ")
        prodi = input("Prodi : ")
        fakultas = input("Fakultas : ")

        # Pembuatan objek mahasiswa sekaligus menambahkan objek tersebut ke dalam list
        daftarMahasiswa.append(Mahasiswa(nim, nama, prodi, fakultas))
        print("Data berhasil ditambahkan!\n")
    # Jika menu yang dipilih ubah data Mahasiswa maka lakukan pengubahan data objek mahasiswa dengan method set berdasarkan nim masukan user
    elif (menu == 2):
        # Meminta masukan NIM dari user untuk data mahasiswa yang ingin diubah
        print("\nSilahkan isi NIM dari mahasiswa yang ingin diubah datanya!")
        nim = input("NIM : ")

        # Proses pengubahan data pada objek mahasiswa dengan NIM masukan user
        ketemu = 0
        i = 0
        while ketemu == 0 and i < len(daftarMahasiswa):
            if (daftarMahasiswa[i].getNim() == nim):
                print("\nMahasiswa ditemukan. Silahkan masukan data baru!")
                nama = input("Nama : ")
                prodi = input("Prodi : ")
                fakultas = input("Fakultas : ")
                daftarMahasiswa[i].setNim(nim)
                daftarMahasiswa[i].setNama(nama)
                daftarMahasiswa[i].setProdi(prodi)
                daftarMahasiswa[i].setFakultas(fakultas)
                ketemu = 1
            i += 1
            
        # Pesan pemberitahuan
        if ketemu == 1:
            print("Data berhasil diubah!\n")
        else:
            print("Data tidak ditemukan!\n")
    # Jika menu yang dipilih hapus data Mahasiswa maka lakukan penghapusan data objek mahasiswa berdasarkan nim masukan user
    elif(menu == 3):
        # Meminta masukan dari user untuk data mahasiswa yang ingin dihapus
        print("\nSilahkan masukan NIM dari mahasiswa yang ingin dihapus datanya!")
        nim = input("NIM : ")

        # Proses penghapusan data objek mahasiswa dengan NIM masukan user
        ketemu = 0
        i = 0
        while ketemu == 0 and i < len(daftarMahasiswa):
            if (daftarMahasiswa[i].getNim() == nim):
                del daftarMahasiswa[i]
                ketemu = 1
            i += 1
            
        # Pesan pemberitahuan
        if ketemu == 1:
            print("Data berhasil dihapus!\n")
        else:
            print("Data tidak ditemukan!\n")
    # Jika menu yang dipilih tampilkan data daftar Mahasiswa maka lakukan instansiasi objek tabel untuk menampilkan daftar mahasiswa
    elif (menu == 4):
        tab = Tabel() # Instansiasi objek tabel
        arrstr = [[0 for j in range(4)] for i in range(len(daftarMahasiswa)+1)] # Array yang berisi list daftar Mahasiswa

        # Pengisian judul setiap kolom pada tabel
        arrstr[0][0] = "NIM"
        arrstr[0][1] = "Nama"
        arrstr[0][2] = "Program Studi"
        arrstr[0][3] = "Fakultas"
        
        # Proses pengisian setiap elemen array
        for i, mhs in enumerate(daftarMahasiswa):
            arrstr[i+1][0] = mhs.getNim()
            arrstr[i+1][1] = mhs.getNama()
            arrstr[i+1][2] = mhs.getProdi()
            arrstr[i+1][3] = mhs.getFakultas()
        
        # Menampilkan Daftar Data Mahasiswa
        print("\n        Daftar Data Mahasiswa       ")
        tab.buatBaris(len(daftarMahasiswa)+1, 4, arrstr)
        print("\n")
    # Jika menu yang dipilih keluar maka tampilkan pesan pemberitahuan
    elif (menu == 5):
        print("\nTERIMA KASIH TELAH MENGGUNAKAN SISTEM KAMI <3\n")
    # Jika menu yang dipilih user tidak terdapat pada fitur yang disediakan sistem maka tampilkan error handling
    else:
        print("\nMaaf, fitur yang anda pilih tidak tersedia!\n")
