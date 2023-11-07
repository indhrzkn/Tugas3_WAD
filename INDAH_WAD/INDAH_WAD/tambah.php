<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang Sembako</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="h-screen w-screen flex justify-center items-center" data-theme="light">
        <div class="mx-auto p-6 rounded-xl" style="box-shadow: -14px -1px 50px -3px rgba(0,0,0,0.25);">
            <h1 class="text-2xl font-bold mb-4">Tambah Barang Sembako</h1>
            <form action="proses_tambah.php" method="POST">
                <div class="mb-4 flex items-center">
                    <label class="block text-gray-600 text-sm font-semibold w-1/4" for="nama_barang">Nama Barang</label>
                    <input class="border rounded py-2 px-3 w-3/4" type="text" name="nama_barang" id="nama_barang" required>
                </div>
                <div class="mb-4 flex items-center">
                    <label class="block text-gray-600 text-sm font-semibold w-1/4" for="harga_barang">Harga</label>
                    <input class="border rounded py-2 px-3 w-3/4" type="text" name="harga_barang" id="harga_barang" required>
                </div>
                <div class="mb-4 flex items-center">
                    <label class="block text-gray-600 text-sm font-semibold w-1/4" for="kategori">Kategori</label>
                    <input class="border rounded py-2 px-3 w-3/4" type="text" name="kategori" id="kategori" required>
                </div>
                <div class="mb-4 flex items-center">
                    <label class="block text-gray-600 text-sm font-semibold w-1/2" for="deskripsi">Jumlah Barang</label>
                    <input class="border rounded py-2 px-3 w-1/2" name="deskripsi" id="deskripsi"></input>
                </div>
                <div class="mb-4 flex items-center">
                    <label class="block text-gray-600 text-sm font-semibold w-1/2" for="satuan">Satuan</label>
                    <select class="border rounded py-2 px-3 w-1/2" name="satuan" id="satuan">
                        <option value="pcs">pcs</option>
                        <option value="Kg">Kg</option>
                        <option value="Dus">Dus</option>
                        <option value="Lt">Lt</option>
                    </select>
                </div>
                <div class="mb-4 flex justify-center">
                    <button class="btn bg-sky-600 font-bold" type="submit">Tambah</button>
                    <a class="btn bg-yellow-400 font-bold ml-4" href="index.php">Batal</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
