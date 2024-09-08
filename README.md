<h1 align="center" style="font-size:2rem;">Pesen.in</h1>

<p align="center" style="font-size:1.2rem;"> Aplikasi Pemesanan Kendaraan 
    <br> 
</p>

## 🧐 About The Project<a name = "about"></a>

Sebuah web aplikasi untuk dapat memonitoring kendaraan yang dimiliki. Untuk dapat memakai kendaraan, pegawai diwajibkan untuk melakukan pemesanan terlebih dahulu ke pool atau bagian pengelola kendaraan dan pemakaian kendaraan harus diketahui atau disetujui oleh masing - masing atasan.

## 🛠 **Fitur Aplikasi** <a name = "fitur"></a>

-   Login
-   Monitoring Grafik Pemakaian Kendaraan
-   Pemesanan Kendaraan
-   Persetujuan Pemesanan Kendaraan
-   Export laporan periodik pemesanan kendaraan dalam bentuk Excel
-   Log Aktivitas Pemesanan Kendaraan

## 🎈 Cara Menjalankan <a name="usage"></a>

**1. Clone the repository**

-   `git clone https://github.com/Hafidz25/pesen-in.git`

**2. Switch to the repo folder**

-   `cd pesen-in`

**3. NPM Install**

-   `npm install`

**3. Install all the dependencies using composer**

-   `composer install`

**5. Copy the example env file and make the required configuration changes in the .env file**

-   `cp .env.example .env`

**6. Generate a new application key**

-   `php artisan key:generate`

**7. Create a new database in your MySQL database client**

-   `CREATE DATABASE pesen-in or anything you want dont forget to change .env file`

**8. Run the database migrations**

-   `php artisan migrate:fresh --seed`

**9. Start run dev**

-   `npm run dev`

**10. Start the local development server**

-   `php artisan serve`

## 🎈 Username dan Password <a name="usage"></a>

**1. Admin Account**

- `Admin dapat membuat pemesanan kendaraan dan melakukan konfirmasi selesai pemesanan kendaraan dan dapat melihat laporan pemesanan kendaraan`

- `Username :admin@gmail.com `
- `Password :admin`

**2. Approver 1 Account**

- `Approver 1 dapat melakukan persetujuan dan penolakan pemesanan kendaraan yang telah dilakukan oleh Admin`

- `Username :approver1@gmail.com `
- `Password :password1`

**3. Approver 3 Account**

- `Approver 2 dapat melakukan persetujuan dan penolakan pemesanan kendaraan yang telah dilakukan oleh Admin`

- `Username :approver2@gmail.com `
- `Password :password2`


<br>

## Database Version <a name="database-version"></a>

-   MySQL 5.7

## PHP Version <a name="php-version"></a>

-   PHP version: 8.2.4

## Framework Version <a name="framework-version"></a>

-   Laravel 10.0

## Related Project <a name="related-project"></a>

-   [Physical Data Model](public/physical-data-model/pdm.md)
-   [Activity Diagram](public/activity-diagram/activity-diagram.md)
-   [UI/UX Design](public/ui-ux-design/ui-ux-design.md)
