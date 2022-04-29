
---
Soal :

Buatlah suatu program dengan menggunakan bahasa HTML,CSS, PHP serta terhubung dengan basis data MySQL, tentang simulasi perhitungan cicilan pinjaman Online. Dalam program tersebut terdiri dari 5 fungsi. Fungsi Pertama digunakan untuk menginputkan data peminjam, fungsi kedua digunakan untuk menginput jumlah pinjaman disertai dengan tenor pembayaran, fungsi ketiga digunakan untuk menampilkan informasi mengenai angsuran yang harus dibayar dimulai angasuran pertama hingga angsuran terakhir berdasarkan tenor yang ditentukan peminjam, fungsi keempat digunakan untuk mensimulasikan peminjam membayar angsuran dengan menginputkan jumlah yang dibayar sesuai jumlah angsuran, dan fungsi kelima digunakan untuk menampilkan jumlah/total sisa angsuran keseluruhan.

Terdapat aturan dalam melakukan peminjaman, antara lain sebagai berikut :

1. Untuk tenor dapat ditentukan berdasarkan hari/bulan. Jika opsi yang dipilih hari (berlaku hanya untuk peminjaman dibawah Rp.20.000.000,-) maka pilihan waktu pembayaran adalah 3 hari, 7 hari ,14 hari, dan 30 hari. Jika opsi yang dipilih bulan (berlaku hanya untuk peminjaman diatasRp.20.000.000,- ) maka pilihan waktu pembayaran adalah 3 bulan, 6 bulan, 12 bulan.
2. Bunga yang digunakan pada pinjaman online ini menggunakan Bunga Efektif. Perhitungan bunga untuk pinjaman berdasarkan hari sebesar 0.5%  per hari sedangkan pinjaman berdasarkan bulan sebesar 10% per bulan.

---
Contoh :

 Andre mengajukan pinjaman online  sebesar RP.120.000.000 dengan bunga 10% per bulan dengan tenor 6 bulan. Angsuran yang harus dibayar oleh Andre adalah sebagai berikut :

### __Ansguran bulan 1__

Besaran bunga : RP.120.000.000 x 10% (bunga per bulan) = Rp. 12.000.000,-

Angsuran pokok :  RP.120.000.000,- / 6 = Rp.20.000.000,- 

Total angsuran bulan 1 :  Rp.20.000.000,- + Rp. 12.000.000,- = Rp.36.000.000 ,-


### __Angsuran bulan 2__

Saldo Pokok (SP) :  RP.120.000.000,- - Rp.20.000.000,-  = Rp.100.000.000,-

Besaran bunga : Rp. 100.000.000,- x 10% =  Rp. 10.000.000,-

Total angsuran bulan 2 = Rp.20.000.000,- +  Rp. 10.000.000,- = Rp. 30.000.000,-


### __Angsuran bulan 3__

Saldo Pokok (SP) :  RP.100.000.000,- - Rp.20.000.000,-  = Rp.80.000.000,-

Besaran bunga : Rp. 80.000.000,- x 10% =  Rp. 8.000.000,-

Total angsuran bulan 3 = Rp.20.000.000,- +  Rp. 8.000.000,- = Rp. 28.000.000,-


### __Angsuran bulan 4__

Saldo Pokok (SP) :  RP.80.000.000,- - Rp.20.000.000,-  = Rp.60.000.000,-

Besaran bunga : Rp. 60.000.000,- x 10% =  Rp. 6.000.000,-

Total angsuran bulan 4 = Rp.20.000.000,- +  Rp. 6.000.000,- = Rp. 26.000.000,-


### __Angsuran bulan 5__

Saldo Pokok (SP) :  RP.60.000.000,- - Rp.20.000.000,-  = Rp.40.000.000,-

Besaran bunga : Rp. 40.000.000,- x 10% =  Rp. 4.000.000,-

Total angsuran bulan 5 = Rp.20.000.000,- +  Rp. 4.000.000,- = Rp. 24.000.000,-



### __Angsuran bulan 6__

Saldo Pokok (SP) :  RP.40.000.000,- - Rp.20.000.000,-  = Rp.20.000.000,-

Besaran bunga : Rp. 2.000.000,- x 10% =  Rp. 2.000.000,-

Total angsuran bulan 6 = Rp.20.000.000,- +  Rp. 2.000.000,- = Rp. 22.000.000,-

---

Mekanisme pengerjaan :

1. Program dikerjakan secara berkelompok dengan menggunakan pendekatan pemrograman berorientasi objek.
2. Program dibangun dengan menggunakan UI berdasarkan soal.
3. Setelah program telah dibangun setiap kelompok diwajibkan mempresentasikan hasil pekerjaan berupa penjelasan pengoperasian program dan penjelasaan source code(menjelaskan alur kerja program).
4. Presentasi dapat dilakukan dengan menggunakan  Zoom/G Meet dan direkam/didokumentasikan. Saat presentasi wajah mahasiswa wajib terlihat jelas.
5. Video presentasi di unggah pada Google Drive  dan dapat di akses tanpa request access. Share link  GDrive melalui ELING
6. Kode Program dan file Basis Data di kompress dalam 1 file Zip di unggah melalui ELING pada tempat yang disediakan.
<<<<<<< HEAD
---
=======
---
>>>>>>> b1491b9aad78a1c48ba256416b8b02bb64a5b372
