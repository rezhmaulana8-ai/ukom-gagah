CREATE DATABASE db_aspirasi_ukom26;

CREATE TABLE tb_kelas (
    id_kelas INT AUTO_INCREMENT PRIMARY KEY,
    nama_kelas VARCHAR(50) NOT NULL,
    tahun_ajaran VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tb_kategori (
    id_kategori INT AUTO_INCREMENT PRIMARY KEY,
    nama_kategori VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tb_user (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nis VARCHAR(20) UNIQUE NOT NULL,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password TEXT NOT NULL,
    jenis_kelamin ENUM('L', 'P') NOT NULL,
    id_kelas INT,
    role ENUM('admin', 'user') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    CONSTRAINT fk_kelas
        FOREIGN KEY (id_kelas)
        REFERENCES tb_kelas(id_kelas)
        ON DELETE CASCADE
);


CREATE TABLE tb_aspirasi (
    id_aspirasi INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    id_kategori INT NOT NULL,
    lokasi VARCHAR(50) NOT NULL,
    isi_aspirasi VARCHAR(150) NOT NULL,
    status ENUM('menunggu', 'proses', 'selesai') DEFAULT 'menunggu',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_user_aspirasi 
        FOREIGN KEY (id_user) 
        REFERENCES tb_user(id_user)
        ON DELETE CASCADE,

    CONSTRAINT fk_kategori_aspirasi 
        FOREIGN KEY (id_kategori) 
        REFERENCES tb_kategori(id_kategori)
        ON DELETE CASCADE
);

CREATE TABLE tb_feedback (
    id_feedback INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    id_aspirasi INT NOT NULL,
    isi_feedback VARCHAR(150) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_user_feedback 
        FOREIGN KEY (id_user)
        REFERENCES tb_user(id_user)
        ON DELETE CASCADE,

    CONSTRAINT fk_aspirasi_feedback
        FOREIGN KEY (id_aspirasi)
        REFERENCES tb_aspirasi(id_aspirasi)
        ON DELETE CASCADE
);
