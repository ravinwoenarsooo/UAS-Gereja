App code editor yang digunakan adalah Visual Studio Code.

Berikut petunjuk agar dapat melihat website dalam komputer anda (server dev):

- Pastikan composer sudah terinstall dalam komputer anda. Berikut linknya: 
https://getcomposer.org/download/

- Pastikan juga node.js sudah terinstall dalam komputer anda. Berikut linknya:
https://nodejs.org/en/download

- Pastikan juga php sudah terinstall dalam komputer anda dan juga sudah dalam path system variable anda.

- Ketika sudah mendownload file yang ada di gdrive, ketik command berikut di terminal:

"composer install"

command diatas digunakan untuk mendownload file vendor yang dibutuhkan agar website dapat berjalan dengan baik.

- Ketika file vendor sudah terinstall, langkah selanjutnya adalah konfigurasikan file .env yang sudah didownload, disana 
terdapat nama database dan port yang digunakan untuk server development, pastikan sudah sesuai.

- Jalankan command untuk menginstall vite, berikut commandnya:

"npm install"

command diatas adalah command untuk menginstall paket paket yang diperlukan website.

- Selanjutnya, jalankan command:

"php artisan serve"

Kemudian buat terminal baru dan ketik command:

"npm run dev"

Dengan menjalankan kedua command tersebut, website seharusnya dapat berjalan dengan baik dalam server lokal.
Jangan lupa menyalakan xampp ( Apache dan mysql ).

- Setelah website berjalan dalam server lokal, jalankan command berikut:

"php artisan migrate:fresh --seed"

command diatas digunakan untuk membuat tabel-tabel yang diperlukan dalam database yang sudah anda setting dalam file .env secara
otomatis beserta user dan password admin.

pastikan terdapat "--seed" pada akhir command, karena itu digunakan untuk menjalankan seeder yang fungsinya adalah
mengisi data secara otomatis ke tabel user admin di database untuk login.

berikut adalah email dan password admin:

email : admin@santobarnabas.com
password : adminsantobarnabas




