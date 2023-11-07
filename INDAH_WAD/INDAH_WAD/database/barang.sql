CREATE DATABASE crud_indah;

use DATABASE crud_indah;

CREATE TABLE barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(255) NOT NULL,
    harga_barang DECIMAL(10, 2) NOT NULL,
    kategori VARCHAR(255) NOT NULL,
    deskripsi VARCHAR(225) NOT NULL
);