# Saya Mia Karisma Haq NIM [2102165] mengerjakan soal Latihan Praktikum-1 dalam mata kuliah DPBO 
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin 

# Kelas Mahasiswa yang digunakan untuk merepresentasikan data Mahasiswa
class Mahasiswa:
    # Atribut yang digunakan pada kelas mahasiswa
    __nim = ""
    __nama = ""
    __prodi = ""
    __fakultas = ""

    # Constructor
    def __init__(self, nim="", nama="", prodi="", fakultas=""):
        self.__nim = nim
        self.__nama = nama
        self.__prodi = prodi
        self.__fakultas = fakultas

    # Method untuk set setiap atribut pada kelas mahasiswa
    def setNim(self, nim):
        self.__nim = nim

    def setNama(self, nama):
        self.__nama = nama
    
    def setProdi(self, prodi):
        self.__prodi = prodi

    def setFakultas(self, fakultas):
        self.__fakultas = fakultas

    # Method get untuk get setiap atribut pada kelas mahasiswa
    def getNim(self):
        return self.__nim

    def getNama(self):
        return self.__nama

    def getProdi(self):
        return self.__prodi

    def getFakultas(self):
        return self.__fakultas
