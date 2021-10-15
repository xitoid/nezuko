# nezuko
Nezuko adalah library untuk menggenerate kata.

> Repository ini akan memiliki banyak perubahan dan size repo juga akan semakin besar. Jika kamu ingin clone, ada baiknya kamu menggunakan metode _shalow clone_ daripada clone repo standar.

```shell
git clone --depth=1 http://github.com/xitoid/nezuko

```

# Perhatian
Jika ini adalah pertama kalinya kamu clone repo ini, saya sarankan untuk melihat repo demo terlebih dulu [di sini](https://github.com/xitoid/demo-nezuko)

<!-- Kurang lebih, tampilannya akan seperti di bawah ini:

![php_nezuko](https://user-images.githubusercontent.com/71378837/137420296-745eeb07-3351-4856-8db9-cb23166561be.png) -->


Repo demo akan membantu kamu untuk memahami penggunaan library ini. Wiki menyusul.

# Pengguaan
Nezuko bisa digunakan bersamaan dengan loop dan bisa kamu custom sendiri akan seperti apa loopnya.

Pertama, kamu perlu require autoload composer.

```php
require ROOT_PATH.'/vendor/autoload.php';
```
Buatlah objek yang akan menampung kelas Nezuko.

```php
$nezuko = new Nezuko();
```
Setelah inisialisasi ini kamu sudah bisa menggunakan method member class Nezuko.

## Menambah Karakter Pengecekan
Secara default, karakter yang ada di antrian adalah a - z. Jika kamu ingin karakter lain ikut masuk di dalam antrian, kamu bisa menggunakan method _tambahList()_. Di dalam contoh ini, kita akan menambahkan angka 0 - 9 ke list antrian karakter.
```php
$angka = round(0, 9);
$nezuko -> tambahList($angka);
```
## Memperlihatkan Kata
```php
$nezuko -> lihatKata();
```
## Menambah Value Index Terakhr
```php
$nezuko -> tambahItemAkhir();
```
## Membuat Loop Sederhana Untuk Generator Kata
```php
require __DIR__.'/vendor/autoload.php';

$target = "abcde";
$nezuko = new Nezuko\GenerateKata();

while($kataDitemukan != true)
{
    $kata = $nezuko -> lihatKata();
    if($kata == $target)
    {
        $kataDitemukan == true;
    }
    
    $nezuko -> tambahItemAkhir();
}

echo "Kata {$kata} ditemukan";
```

Segitu dulu ya sobat, update selanjutnya bakal ada lebih banyak class menarik di dalam library ini.
