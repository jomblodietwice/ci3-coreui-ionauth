# (CI3CI) CODEIGNITER 3 - COREUI - ION AUTH

## Pengantar
---
Repo ini merupakan paket (pack) dari kombinasi framework __Codeigniter 3__, _admin template_ __CoreUI (free)__ dan _library_ __Ion Auth__. 
Repo ini dibuat untuk memudahkan rekan-rekan _programmer_ __PHP__ _base_ untuk membuat projek yang membutuhkan _admin module_. Dalam repo ini sudah tersedia otorisasi _user_ menggunakan __Ion Auth__ dan _view_-nya menggunakan __CoreUI free edition__. Dengan menggunakan repo ini Anda tinggal membuat _module/controller_ Anda sendiri sesuai kebutuhan projek, contoh-contoh tag HTML __CoreUI__ sudah ada demikian pula penggunaan _library_ __Ion Auth__ semuanya sudah terinstal. Jadi Anda tidak perlu membuat lagi modul otentikasi dari nol.

#### Fitur:
- Halaman *Login* dan *link logout*.
- Halaman *Forgot Password* (belum diuji).
- Halaman tambah dan *edit User*. 
- Halaman tambah dan *edit* Grup Otentikasi. 
- *View* 404 bawaan __CodeIgniter 3__ yang sudah diubah.
- *View* _error general_ bawaan __CodeIgniter 3__ yang sudah diubah (_view error_ ini dipanggil memakai _show_error()_).
- *View* *Error PHP* bawaan __CodeIgniter 3__ yang sudah diubah (_error_ ini biasa muncul jika ada kesalahan kode pada _view_).

Catatan: untuk _view error exception_ dan _error DB_ masih bawaan __CodeIgniter 3__.


## Demo
Untuk demo silahkan lihat [DISINI](http://www.youtube.com).

## Penggunaan 

### Setup CodeIgniter 3:
1. Atur *config <span style="color:red">base_url, log_threshold, encryption_key, session variable, csrf, compress_output</span>* Anda pada *file* __application/config/config.php__ sesuai kebutuhan projek Anda. 
2. Beritahu __CodeIgniter 3__ kofigurasi *database* Anda di *file* __application/config/database.php__
3. Jangan lupa tambahkan *<span style="color:red">library, helper</span>* Anda jika ingin di-*autoload* pada _file_ __application/config/autoload.php__.
4. Import tabel-tabel __ION AUTH__ ke dalam *database* Anda, *file*-nya berada pada folder __application/third_party/ion_auth/sql/__
5. Jika sudah pada tahap *production* jangan lupa ubah semua *file config* __CodeIgniter 3__ pada __application/config/production/__

Sebelum membuat *controller* baru tentukan dulu siapa yang bisa mengakses *controller* tersebut apakah admin, user biasa atau grup user tertentu. Karena itu ditiap *controller* perlu dibuat:
```
public function __construct()
{
   parent::__construct();
}
```

Gunakan kode berikut setelah `parent::__construct()`, jika:
- pada *controller* hanya ingin diperiksa apakah user sudah login atau belum 
```
if (!$this->ion_auth->logged_in()) {
   $this->session->set_userdata('previous_url', current_url());   
   redirect('Users/login', 'refresh');
}
```
- pada *controller* ingin diperiksa apakah user adalah admin atau bukan
```
if (!$this->ion_auth->is_admin()) {   
   // arahkan ke dashboard atau ke controller apa saja sesuai keinginan
   redirect('Dashboard', 'refresh');
}
```
- pada *controller* ingin diperiksa apakah user berada dalam satu grup tertentu
```
$group = 'member';

// gunakan nilai berikut jika hanya merujuk ke ID group
// $group = 2;

if (!$this->ion_auth->in_group($group)) {   
   // arahkan ke dashboard atau ke controller apa saja sesuai keinginan
   redirect('Dashboard', 'refresh');
}
```
- pada *controller* ingin diperiksa apakah user berada dalam dua atau lebih digrup tertentu
```
// gunakan nilai berikut jika merujuk ke NAMA group
$group = array('member', 'operator');

// gunakan nilai berikut jika merujuk ke ID group
// $group = array(2, 3);

// gunakan nilai berikut jika ingin merujuk ke NAMA dan ID group
// $group = array('member', 3);

if (!$this->ion_auth->in_group($group)) {   
   // arahkan ke dashboard atau ke controller apa saja sesuai keinginan
   redirect('Dashboard', 'refresh');
}

// gunakan kode berikut jika ingin cek user berada dalam grup 1 dan 2 (menggunakan ID)
// $group = array(1, 2);
// if (!$this->ion_auth->in_group($group, false, true)) {   
//    redirect('Dashboard', 'refresh');
// }
```

### Setup ION AUTH

Untuk __Ion Auth__ lakukan konfigurasi untuk *<span style="color:red">site title, admin email, method hash, session hash</span>* pada *file* __application/third_party/ion_auth/config/ion_auth.php__, selengkapnya bisa dilihat [disini](http://benedmunds.com/ion_auth/). 

#### Otorisasi bawaan User
- email: *admin@admin.com*
- password: *password*

### CoreUI
*File* contoh __HTML, assets, JS,__ dan __CSS CoreUI__ bisa dilihat di *folder* __assets/coreui/__. Sedangkan penggunaan __CoreUI__ bisa dilihat [disini](https://coreui.io/docs/4.0/getting-started/introduction/). <br>
Salah satu kelebihan __CoreUI__ yang menarik yaitu pada _sidebar_ disalah satu menunya ter-_highlight_ otomatis jika halaman sekarang terbuka. Jadi para _developer_ __PHP__ tidak perlu lagi membuat pengecekan link sekarang yang terbuka menggunakan _script_ __PHP__ atau __Javascript__.


## Donasi
Jika Anda merasa repo ini berguna bagi Anda dan merasa ingin traktir kami secangkir kopi bisa disalurkan lewat __QR Code DANA__ kami atau melalui __[Saweria](https://saweria.co/jomblodietwice)__.

### DANA
![DANA](shareqr_cr.png)


