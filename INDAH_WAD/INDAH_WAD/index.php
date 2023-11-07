<!DOCTYPE html>
<html>
<head>
    <title>Toko Sembako Indah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />

</head>
<body>
        <div class="h-screen w-screen flex pt-[8em]" data-theme="light">
                <div class="container mx-[20em] p-4 shadow-xl rounded-xl"
                style="box-shadow: -14px -1px 50px -3px rgba(0,0,0,0.25);
    -webkit-box-shadow: -14px -1px 50px -3px rgba(0,0,0,0.25);
    -moz-box-shadow: -14px -1px 50px -3px rgba(0,0,0,0.25);"
                >
                    <h1 class="text-2xl font-bold mb-4 text-center">Daftar Barang Sembako</h1>
                    <a href="tambah.php" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700">Tambah Barang</a>
                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr class="bg-blue-400 text-white">
                                <th class="px-4 py-2">No.</th>
                                <th class="px-4 py-2">Nama Barang</th>
                                <th class="px-4 py-2">Harga</th>
                                <th class="px-4 py-2">Kategori</th>
                                <th class="px-4 py-2">Jumlah Barang</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include 'koneksi.php';
                
                            $query = "SELECT * FROM barang";
                            $result = mysqli_query($koneksi, $query);
                            $number = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class="border px-4 py-2 text-center"><?php echo $number?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $row['nama_barang']; ?></td>
                                    <td class="border px-4 py-2 text-center">Rp.<?php echo $row['harga_barang']; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $row['kategori']; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $row['deskripsi']; ?></td>
                                    <td class="border px-4 py-2 flex justify-center gap-4">
                                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm bg-blue-500 text-white rounded">Edit</a>
                                        <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-sm bg-red-500 text-white rounded" onclick="return confirm('Apakah kamu yakin ingin menghapus?')">Hapus</a>
                                    </td>
                                </tr>

                                <?php
                            $number++;
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
