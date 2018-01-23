# TOPIK 06: Prinkanhoi


Seiring tumbuhnya industri kreatif, kebutuhan akan percetakan akan semakin tinggi. PT KelompokSebelasTI (KSTI) mencoba menghadirkan layanan cetak on demand yang dapat diakses secara online.

KSTI hadir di Institut Teknologi Del dengan mengenalkan PRINKANHOI berada di bawah naungan HIMAPRO, merupakan layanan online business-to-business (B2B) .Layanan ini hadir sebagai jawaban untuk memenuhi kebutuhan cetak dokumen, brosur/flyer dan sebagainya mengingat aktivitas cetak mencetak sangat sering dilakukan oleh mahasiswa..

Harga cetak dari PRINKANHOI bisa dibilang tidak jauh beda dengan tempat printing pada umumnya, yaitu mulai dari Rp125 per lembar untuk cetak hitam putih pada kertas A4 dan paling tinggi Rp4.000 per lembar untuk cetak warna pada Art Paper ukuran A4.

Sebelum customer melakukan pemesanan, customer harus memiliki akun yang berisi acc number, PIN, user fullname, jumlah saldo, dan exp date.
Akun akan didaftarkan oleh admin dan saldo yang didapat sesuai dengan jumlah yang dibayarka oleh customer secara langsung. 
Pembayaran yang dilakukan akan mengurangi saldo yang dimiliki customer pada akun SIKILAT. Saat saldo habis, customer dapat mengisi ulang saldo dengan menghubungi admin.


Prinkanhoi adalah aplikasi web yang dibangun dengan Framewok yii, dengan konsep MVC yang memiliki servis pemesanan jasa pencetakan yang dapat dipesan secara online.
Prosesnya cukup sederhana, HIMAPRO menyediakan berbagai jenis pencetakan: brosur,
banner, dan dokumen biasa dengan berbagai konfigurasi (misal, warna atau grayscale) dan ukuran
media. Berikut adalah detail fungsi:

1. Terdapat berbagai tipe pencetakan dengan berbagai konfigurasi yang menguntungkan
HIMAPRO.
2. Setiap permintaan layanan yang datang harus dilengkapi dengan softcopy dari dokumen yang
akan dicetak dan telah dilakukan pembayaran (lunas).
3. Hanya sivitas IT Del yang boleh menggunakan aplikasi ini.
4. Pelanggan harus menggunakan Sikilat dalam menangani pembayarannya.
5. Coupon code, berupa potongan harga untuk pemesanan berikutnya.
6. Program diskon untuk pencetakan dalam jumlah tertentu (semakin banyak, semakin tinggi
diskonnya).


Fitur PRINKANHOI
1. Berbagai tipe pencetakan dengan berbagai konfigurasi dan ukuran.
2. Fitur Upload file ke web.
3. Email yang digunakan hanya berdomain @students.del.ac.id. 
4. Program diskon jika pembelian lebih dari Rp. 10.000 maka akan mendapat diskon sebesar Rp. 1.000, Sehingga total pembelian dikurangi Rp. 1.000.
5. Coupon code, Potongan harga sebesar Rp. 100.
6. Aplikasi Web terhubung dengan Payment Gateway "SIKILAT".
7. Adanya Penggunaan API SMS Gateway yang sudah terkoneksi dengan Prinkanhoi, Berguna dalam merespon pemesanan ke user/pembeli.
    
FITUR SMS GATEWAY
Sms gateway merupakan mmedia admin  untuk memberikan pemberitahuan kepada customer mmengenai tindak lanjut terhadap proses pemesanan. Terdapat 3 jenis konirasi yang dapat dilakukan admin, yaitu :
1. Konfirmasi (Konfirmasi apa namanya yang ga pake kupon?)
   pada konfirmasi ini, admin akan mengirimkan pemberitahuan mengenai proses pencetakan yag  telah selesai
2. Konfirmasi Coupon Code
   Customer akan menerima pesan yang berisikan pemberitahuan proses percetakan yang telah selesai dan 
   kode kupon yang diperoleh saat melakukan pencetakan diatas Rp. 10.000,- dimana kupon dapat digunakan untuk pemesanan selanjutnya dengan potongan sebesar Rp. 1.000,-
3. Komfirmasi Failed
   Customer akan mendapatkan pesan berisikan pemberitahuan bahwa jasa percetakan tidak dapat menerima pencetakan sesuai pesanan.
    
    
Prosedur Pemesanan Jasa Percetakan PRINKANHOI

1. Silahkan melakukan pendaftaran secara langsung ke kantor sekretariat HIMAPRO untuk keperluan pengisian saldo dan pembuatan akun SIKILAT.

2. Setelah memiliki akun, anda dapat melakukan pemesanan online.

3. Silahkan memilih jenis kertas yang akan dicetak berdasarkan kategori pemesanan dan klik 'tambahkan ke keranjang'.

4. Setiap item yang dipesan akan masuk ke dalam 'keranjangku' yang berada pada sudut kanan atas web.

5. Anda dapat menentukan jumlah setiap item yang anda pesan pada menu 'keranjangku' lalu klik 'order'.

6. Anda akan masuk ke dalan form pemesanan dan isilah form dengan data yang valid sesuai dengan akun SIKILAT yang telah anda daftarkan sebelumnya.

7. Anda telah selesai melakukan pemesanan dan konfirmasi selanjutnya akan diberitahuan melalui SMS.

Prosedur Setelah Pemesanan Jasa Percetakan PRINKANHOI
1. Pada bagian admin, admin diwajibkan untuk login terlebih dahulu. 
Login berguna agar admin dapat mengelola pemesanan yang ada.

2. Setelah login, admin akan diarahkan ke page order dimana terdapat list pesanan customer.
Admin memiliki 4 action yaitu action create, view, update, dan delete.
Pada bagian view, terdapat detail dari pesanan dimana admin dapat melakukan
- konfirmasi yaitu dengan cara mengirimkan SMS Gateway yang berisi penerimaan pencetakan ataupun penolakan.
- proses yaitu mengirimkan parameter ke SIKILTA.
- update dilakukan untuk mengubah status dari pesanan.
- delete untuk menghapus pesanan.
3. Setelah melakukan konfirmasi pada customer, admin akan melakukan pencetakan dan customer dapat mengambil pesanan pada waktu dan tempat yang telah diberitahuakn pada SMS sebelumnya.



DIREKTORI FILE
==============
```
common
    config/              berisi config yang dapat dishare
    mail/                berisi file view untuk email
    models/              berisi kelas model yang digunakan di backend dan frontend
console
    config/              berisi konfigurasi console
    controllers/         berisi konsol kontroler (perintah)
    migrations/          berisi migrasi database
    models/              berisi kelas model khusus console
    runtime/             berisi file yang dihasilkan saat runtime
backend
    assets/              berisi aset aplikasi seperti JavaScript dan CSS
    config/              berisi konfigurasi backend
    controllers/         berisi kelas kontroler Web
    models/              berisi kelas model spesifik backend
    runtime/             berisi file yang dihasilkan saat runtime
    views/               berisi file tampilan untuk aplikasi Web
    web/                 berisi skrip entri dan resources Web
frontend
    assets/              berisi aset aplikasi seperti JavaScript dan CSS
    config/              berisi konfigurasi frontend
    controllers/         berisi kelas kontroler Web
    models/              berisi kelas model spesifik frontkend
    runtime/             berisi file yang dihasilkan saat runtime
    views/               berisi file tampilan untuk aplikasi Web
    web/                 berisi skrip entri dan resources Web
frontend
    widgets/             berisi widget frontend
vendor/                  berisi paket pihak ke tiga dependen
environments/            berisi environment-based overrides
tests                    berisi berbagai tes untuk aplikasi tingkat lanjut
    
```

