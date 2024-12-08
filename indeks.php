<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-6">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>menampilkan gambar</title>
</head>
<body>
  <img src="http://localhost/khalwapbo/kopi.jpg" width="250" height="150" />
  <p>Khalwa : 42423054</p>

  <h1 align="center"> Pemrograman Berorientasi Objek</h1>

  <h2>1. Pengertian</h2>
  <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data dalam bentuk <em>field</em> atau dikenal juga sebagai <em>atribut</em>; serta kode, dalam bentuk <em>fungsi</em>/<em>prosedur</em> yang dikenal juga sebagai <em>method</em>. Semua data dan fungsi di dalam paradigma ini dibungkus dalam <em>kelas-kelas</em> atau <em>objek-objek</em>. Bandingkan dengan logika pemrograman terstruktur. Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya.</p>

  <h2>2. Bahasa Pemrograman Yang mendukung PBO</h2>
  <p>Berikut ini adalah Bahasa pemrograman yang mendukung OOP antara lain seperti:</p>
  <ul>
    <li>Visual Foxpro</li>
    <li>Java</li>
    <li>C++</li>
    <li>Pascal (bahasa pemrograman)</li>
    <li>SIMULA</li>
    <li>Smalltalk</li>
    <li>Ruby</li>
    <li>Python</li>
    <li>PHP</li>
    <li>TypeScript</li>
    <li>C#</li>
    <li>Delphi</li>
    <li>Eiffel</li>
    <li>Perl</li>
    <li>Adobe Flash AS 3.0</li>
  </ul>

  <h2>3. Membuat Tabel kategori Produk</h2>
  <style>
    table{
        border-collapse: collapse;
            width: 50%
    }
            
    th, td{
        border: 1px solid #843434;
            padding: 3px;
            text-align: left;
    }
    th{
            background-color: #f0f0f0;
      }
</style>

  <table class="table">
    <thead>
        <tr>
          <th>NO</th>
          <th>Kategori Produk</th>
          <th>Nama Produk</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Bumbu Dapur</td>
          <td>Garam</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Bumbu Dapur</td>
          <td>Cabe</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Bumbu Dapur</td>
          <td>Lengkuas</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Bumbu Dapur</td>
          <td>Terasi</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Sembako</td>
          <td>Beras</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Sembako</td>
          <td>Minyak Goreng</td>
        </tr>
        <tr>
          <td>7</td>
          <td>Sembako</td>
          <td>Gula Pasir</td>
        </tr>
  </table>
    
  <h2>4. Membuat Tabel Produk</h2>
  <table class="table">
    <thead>
      <tr>
        <th>NO</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Garam</td>
        <td>10</td>
        <td>7000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Cabe</td>
        <td>10</td>
        <td>25000</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Lengkuas</td>
        <td>10</td>
        <td>12000</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Terasi</td>
        <td>10</td>
      <td>35000</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Beras</td>
      <td>10</td>
      <td>13000</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Minyak Goreng</td>
      <td>10</td>
      <td>15000</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Gula Pasir</td>
      <td>10</td>
      <td>13000</td>
    </tr>
  </tbody>
</table>

<h3> PERTEMUAN 3 </h3>  
  <?php
class buah {
  public $nama;
  public $warna;

  function set_name($nama) {
    $this->nama = $nama;
  }
  function get_name() {
    return $this->nama;
  }
}


$apel = new buah();
$pisang = new buah();
$apel->set_name('Apel');
$pisang->set_name('Pisang');

echo $apel->get_name();
echo "<br>";
echo $pisang->get_name();
echo "<br>";
?>

<?php
class mobil {
  public $warna;

  function set_warna($warna) {
    $this->warna = $warna;
  }

  function get_warna() {
    return "warna mobil itu adalah ". $this->warna;
  }
}

$toyota = new mobil();
$toyota->set_warna('biru metalik');

echo $toyota->get_warna();
?>

<h3> PERTEMUAN 4 </h3>
<h4 style="color:black;" align="left">Constructor</h4>
 <?php
class buahh {
  public $nama;
  public $warna;

  function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna;
  }
  function get_name() {
    return $this->nama;
  }
  function get_warna() {
    return $this->warna;
  }
}

$apel = new buahh("apel", "merah");
echo $apel->get_name();
echo "<br>";
echo $apel->get_warna();
?>
  

<h4 style="color:black;" align="left">Destructor</h4>
 <?php
class buahhh {
  public $nama;
  public $warna;

  function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna;
  }
  function __destruct() {
    echo "buah tersebut adalah {$this->nama} dan warnanya adalah {$this->warna}.";
  }
}

$apel = new buahhh("apel", "merah");
echo "<br>";
?>

<h2> TUGAS PERTEMUAN 4</H2>
<?php
$mahasiswi = [
  [
    'nama' => 'Khalwa',
    'tinggi_badan' => 146,
    'warna_kulit' => 'Sawo Matang'
  ],
   [
   'nama' => 'Amel',
   'tinggi_badan' => 154,
   'warna_kulit' => 'Sawo Matang' 
   ],
   [
    'nama' => 'Najwa',
    'tinggi_badan' => 157,
    'warna_kulit' => 'Kuning Langsat'
   ]
];

foreach ($mahasiswi as $mhs) {
  echo "Mahasiswi tersebut bernama ". $mhs['nama']. ",Tinggi Badan ". $mhs['tinggi_badan']. "cm, dan Warna Kulit ". $mhs['warna_kulit']. "<br>";
}
?>

<h2 style="color:blue;" align="left">Pertemuan 5 </h1>

<h3 style="color:black;" align="left">Konstanta dan Abstrak </h1>
<h4 style="color:black;" align="left">Konstanta </h1>

<br>
<?php
class Selamat_tinggall {
  const LEAVING_MESSAGE = "Terima kasih telah berkunjung";
}
echo Selamat_tinggall::LEAVING_MESSAGE;
?>

<?php
class Selamat_tinggal {
  const LEAVING_MESSAGE = "Terima kasih telah berkunjung";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$selamat_tinggal = new Selamat_tinggal();
$selamat_tinggal->byebye();
?>

<h4 style="color:black;" align="left">Abstrak </h1>
<br>
<?php
abstract class mobill {
  public $nama;
  public function __construct($nama) {
    $this->nama = $nama;
  }
  abstract public function intro() : string;
}

class Audi extends Mobill {
  public function intro() : string {
    return "Untuk kualitas terbaik! Saya pilih $this->nama!";
  }
}

class Volvo extends Mobill {
  public function intro() : string {
    return "Untuk hemat bahan bakar! Saya pilih $this->nama!";
  }
}

class Citroen extends Mobill {
  public function intro() : string {
    return "Untuk purna jual! Saya pilih $this->nama!";
  }
}

$audi = new audi("BMW");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Panther");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Toyota");
echo $citroen->intro();
echo "<br>";
?>


<h4 style="color:black;" align="left">~>Abstrak berargumen </h1>
<?php
abstract class ParentClass {
  abstract protected function prefixName($nama);
}
class ChildClass extends ParentClass{
  public function prefixName($nama) {
    if ($nama == "Ahmad Sulistiyo") {
      $prefix = "Mr.";
    } elseif ($nama == "Siti Aisyah") {
      $prefix = "Miss.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$nama}";
  }
}

$class = new ChildClass;
echo $class->prefixName("Ahmad Sulistiyo");
echo "<br>";
echo $class->prefixName("Siti Aisyah");
echo "<br>";
?>

<?php
abstract class ParentClasss {
  abstract protected function prefixName($nama);
}
class ChildClasss extends ParentClasss{
  public function prefixName($nama, $separator = ".", $greet = "Dear") {
    if ($nama == "Ahmad Sulistiyo") {
      $prefix = "Mr";
    } elseif ($nama == "Siti Aisyah") {
      $prefix = "Miss";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$nama}";
  }
}

$class = new ChildClasss;
echo $class->prefixName("Ahmad Sulistiyo");
echo "<br>";
echo $class->prefixName("Siti Aisyah");
?>

<h2 style="color:blue;" align="left">Pertemuan 7 </h1>
<h3 style="color:black;" align="center">Creat, Read, Update, Delete (CRUD) </h3>
<?php

// Inisialisasi data barang jika belum ada
if (!isset($_SESSION['data_barang'])) {
    $_SESSION['data_barang'] = [
        ['id_barang' => 1, 'nama_barang' => 'buku', 'stok' => 50, 'harga_jual' => 3000, 'harga_beli' => 4000],
        ['id_barang' => 2, 'nama_barang' => 'pulpen', 'stok' => 50, 'harga_jual' => 2000, 'harga_beli' => 3000],
        ['id_barang' => 3, 'nama_barang' => 'penghapus', 'stok' => 25, 'harga_jual' => 4000, 'harga_beli' => 5000],
        ['id_barang' => 4, 'nama_barang' => 'jangkar', 'stok' => 12, 'harga_jual' => 7000, 'harga_beli' => 8000],
        ['id_barang' => 5, 'nama_barang' => 'stapler', 'stok' => 7, 'harga_jual' => 23000, 'harga_beli' => 25000],
    ];
}

// Tambah data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $id_barang = count($_SESSION['data_barang']) + 1;
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga_jual = $_POST['harga_jual'];
        $harga_beli = $_POST['harga_beli'];

        $_SESSION['data_barang'][] = [
            'id_barang' => $id_barang,
            'nama_barang' => $nama_barang,
            'stok' => $stok,
            'harga_jual' => $harga_jual,
            'harga_beli' => $harga_beli,
        ];
    } elseif (isset($_POST['action']) && $_POST['action'] === 'edit') {
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga_jual = $_POST['harga_jual'];
        $harga_beli = $_POST['harga_beli'];

        foreach ($_SESSION['data_barang'] as &$item) {
            if ($item['id_barang'] == $id_barang) {
                $item['nama_barang'] = $nama_barang;
                $item['stok'] = $stok;
                $item['harga_jual'] = $harga_jual;
                $item['harga_beli'] = $harga_beli;
                break;
            }
        }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $id_barang = $_POST['id_barang'];
        $_SESSION['data_barang'] = array_filter($_SESSION['data_barang'], function ($item) use ($id_barang) {
            return $item['id_barang'] != $id_barang;
        });
    }
}

// Ambil data barang
$data_barang = $_SESSION['data_barang'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khalwa Alat Tulis Kantor</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #843434;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h2>Data Alat Tulis Kantor</h2>
    <table>
        <tr>
            <th>id_barang</th>
            <th>nama_barang</th>
            <th>stok</th>
            <th>harga_jual</th>
            <th>harga_beli</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($data_barang as $item): ?>
        <tr>
            <td><?php echo $item['id_barang']; ?></td>
            <td><?php echo $item['nama_barang']; ?></td>
            <td><?php echo $item['stok']; ?></td>
            <td><?php echo $item['harga_jual']; ?></td>
            <td><?php echo $item['harga_beli']; ?></td>
            <td>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="id_barang" value="<?php echo $item['id_barang']; ?>">
                    <input type="hidden" name="action" value="delete">
                    <button type="submit">Hapus</button>
                </form>
                <button onclick="editData(<?php echo $item['id_barang']; ?>, '<?php echo $item['nama_barang']; ?>', <?php echo $item['stok']; ?>, <?php echo $item['harga_jual']; ?>, <?php echo $item['harga_beli']; ?>)">Edit</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Tambah Data</h3>
    <form method="post">
        <input type="hidden" name="action" value="add">
        <label>Nama Barang: <input type="text" name="nama_barang" required></label>
        <label>Stok: <input type="number" name="stok" required></label>
        <label>Harga Jual: <input type="number" name="harga_jual" required></label>
        <label>Harga Beli: <input type="number" name="harga_beli" required></label>
        <button type="submit">Tambah</button>
    </form>

    <script>
        function editData(id, nama, stok, hargaJual, hargaBeli) {
            const form = document.createElement('form');
            form.method = 'post';
            form.innerHTML = `
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="id_barang" value="${id}">
                <label>Nama Barang: <input type="text" name="nama_barang" value="${nama}" required></label>
                <label>Stok: <input type="number" name="stok" value="${stok}" required></label>
                <label>Harga Jual: <input type="number" name="harga_jual" value="${hargaJual}" required></label>
                <label>Harga Beli: <input type="number" name="harga_beli" value="${hargaBeli}" required></label>
                <button type="submit">Simpan</button>
            `;
            document.body.appendChild(form);
            form.submit();
        }
    </script>
</body>
</html>

    <h2 style="color:black;" align="center">====================Penjelasan Koding CRUD==================== </h3>
    <style>
        body {
            font-family: Bold, arial serif;
            margin: 50px;
        }
        h1, h2, h3 {
            color: #333;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ccc;
            overflow-x: auto;
        }
    </style>

    <h1>Laporan Proyek Mini CRUD: Manajemen Data Alat Tulis Kantor</h1>
    <h2>1. Pendahuluan</h2>
    <p>
        Proyek ini bertujuan untuk membuat aplikasi web sederhana yang dapat melakukan operasi CRUD (Create, Read, Update, Delete) pada data barang alat tulis kantor.
        Aplikasi ini menggunakan PHP untuk pemrosesan data dan session untuk menyimpan data barang.
    </p>

    <h2>2. Struktur Kode</h2>
    <h3>2.1. Inisialisasi Session</h3>
    <pre>
        &lt;?php
        session_start();
        // Inisialisasi data barang jika belum ada
        if (!isset($_SESSION['data_barang'])) {
            $_SESSION['data_barang'] = [
                ['id_barang' => 1, 'nama_barang' => 'buku', 'stok' => 50, 'harga_jual' => 3000, 'harga_beli' => 4000],
                ...
            ];
        }
        ?&gt;
    </pre>
    <p>
        Kode di atas memulai session dan menginisialisasi data barang jika session 'data_barang' belum ada. Data barang disimpan dalam bentuk array asosiatif.
    </p>

    <h3>2.2. Menangani Permintaan POST</h3>
    <pre>
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['action']) && $_POST['action'] === 'add') {
                ...
            } elseif (isset($_POST['action']) && $_POST['action'] === 'edit') {
                ...
            } elseif (isset($_POST['action']) && $_POST['action'] === 'delete') {
                ...
            }
        }
    </pre>
    <p>
        Kode ini menangani permintaan yang dikirim melalui metode POST. Terdapat tiga aksi yang dapat dilakukan: 
        menambah data, mengedit data, dan menghapus data. Setiap aksi memproses data sesuai dengan yang diinginkan.
    </p>

    <h3>2.3. Menampilkan Data Barang</h3>
    <pre>
        &lt;table&gt;
            &lt;tr&gt;
                &lt;th&gt;id_barang&lt;/th&gt;
                ...
            &lt;/tr&gt;
            &lt;?php foreach ($data_barang as $item): ?&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;?php echo $item['id_barang']; ?&gt;&lt;/td&gt;
                ...
            &lt;/tr&gt;
            &lt;?php endforeach; ?&gt;
        &lt;/table&gt;
    </pre>
    <p>
        Data barang ditampilkan dalam bentuk tabel. Setiap item dalam data barang di-looping untuk ditampilkan pada baris tabel.
        Terdapat juga tombol untuk mengedit dan menghapus setiap item.
    </p>

    <h3>2.4. Form Tambah Data</h3>
    <pre>
        &lt;form method="post"&gt;
            &lt;input type="hidden" name="action" value="add"&gt;
            ...
            &lt;button type="submit"&gt;Tambah&lt;/button&gt;
        &lt;/form&gt;
    </pre>
    <p>
        Form ini digunakan untuk menambah data barang baru. Ketika form disubmit, data akan dikirim menggunakan metode POST dengan aksi 'add'.
    </p>

    <h3>2.5. Fungsi Edit Data</h3>
    <pre>
        function editData(id, nama, stok, hargaJual, hargaBeli) {
            ...
            document.body.appendChild(form);
            form.submit();
        }
    </pre>
    <p>
        Fungsi JavaScript ini digunakan untuk memperm udah proses pengeditan data. Ketika tombol edit ditekan, fungsi ini akan membuat form baru dengan data yang sudah ada dan mengirimkannya untuk disimpan kembali.
    </p>

    <h2>3. Kesimpulan</h2>
    <p>
        Proyek ini berhasil menunjukkan bagaimana cara membuat aplikasi CRUD sederhana menggunakan PHP dan session. Dengan memahami struktur kode dan cara kerja setiap bagian, diharapkan dapat memberikan pemahaman yang lebih baik tentang pengelolaan data dalam aplikasi web.
    </p>

    <h2>4. Referensi</h2>
    <p>
        - PHP Manual: <a href="https://www.php.net/manual/en/">https://www.php.net/manual/en/</a>
        - W3Schools PHP Tutorial: <a href="https://www.w3schools.com/php/">https://www.w3schools.com/php/</a>
    </p>

</body>
</html>
