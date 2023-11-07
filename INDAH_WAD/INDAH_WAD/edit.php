<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang Sembako</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="h-screen w-screen flex justify-center items-center" data-theme="light">
        <div class="mx-auto p-6 rounded-xl" style="box-shadow: -14px -1px 50px -3px rgba(0,0,0,0.25);">
            <h1 class="text-2xl font-bold mb-4 text-center">Edit Barang Sembako</h1>
            <?php
            include 'koneksi.php';

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM barang WHERE id = $id";
                $result = mysqli_query($koneksi, $query);
                $row = mysqli_fetch_assoc($result);
            }

            if (isset($_POST['update'])) {
                $nama_barang = $_POST['nama_barang'];
                $harga_barang = $_POST['harga_barang'];
                $kategori = $_POST['kategori'];
                $deskripsi = $_POST['deskripsi'];
                $satuan = $_POST['satuan'];
            
                // Menghilangkan karakter selain angka dari deskripsi
                $jumlah_barang = preg_replace("/[^0-9]/", "", $deskripsi);
            
                $deskripsi = $jumlah_barang . ' ' . $satuan; // Gabungkan jumlah barang dan satuan
            
                $query = "UPDATE barang SET nama_barang='$nama_barang', harga_barang='$harga_barang', kategori='$kategori', deskripsi='$deskripsi' WHERE id = $id";
                mysqli_query($koneksi, $query);
            
                header("Location: index.php");
            }
            
            ?>
            <form action="edit.php?id=<?php echo $id; ?>" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-semibold" for="nama_barang">Nama Barang</label>
                    <input class="border rounded py-2 px-3" type="text" name="nama_barang" id="nama_barang" value="<?php echo $row['nama_barang']; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-semibold" for="harga_barang">Harga</label>
                    <input class="border rounded py-2 px-3" type="text" name="harga_barang" id="harga_barang" value="<?php echo $row['harga_barang']; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-semibold" for="kategori">Kategori</label>
                    <input class="border rounded py-2 px-3" type="text" name="kategori" id="kategori" value="<?php echo $row['kategori']; ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-semibold" for="deskripsi">Jumlah Barang</label>
                    <input class="border rounded py-2 px-3 w-2/3" name="deskripsi" id="deskripsi" value="<?php echo $row['deskripsi']; ?>"></input>
                    <select class="border rounded py-2 px-3 w-1/3" name="satuan" id="satuan">
                        <option value="pcs">pcs</option>
                        <option value="Kg">Kg</option>
                        <option value="Dus">Dus</option>
                        <option value="Lt">Lt</option>
                    </select>
                </div>
                <center>
                    <button class="btn bg-sky-600 font-bold" type="submit" name="update">Update</button>
                    <a class="btn bg-yellow-400 font-bold" href="index.php">CANCEL</a>
                </center>
            </form>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>

</body>
</html>
