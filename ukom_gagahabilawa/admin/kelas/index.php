        <?php
        use Dom\Mysql;

        session_start();

        if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
            header("location:../../index.php");
        }

        $_SESSION['menu'] = "kelas";

        include "../../includes/koneksi.php";
        include "../../includes/baseurl.php";
        include "../../includes/navbar_admin.php";

        ?>
        <main class="flex-fill">
            <div class="container">
                <h1>Manajemen Kelas</h1>
                <table class="table">
                    <thead class="table-info">
                        <tr>
                            <th>Nama Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th>Waktu Dibuat</th>
                            <th colspan="2">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sql = "SELECT * FROM tb_kelas";
                        $sql_eksekusi = mysqli_query($koneksi, $sql);

                        $nomor = 1; // FIX: Tambahkan nomor untuk ID modal

                        while ($data = mysqli_fetch_array($sql_eksekusi)) {
                        ?>
                            <tr>
                                <td><?= $data['nama_kelas']; ?></td>
                                <td><?= $data['tahun_ajaran']; ?></td>
                                <td><?= $data['created_at']; ?></td>

                                <!-- Tombol Ubah -->
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalubah<?= $nomor; ?>">
                                        Ubah
                                    </button>

                                    <!-- Modal Ubah -->
                                    <div class="modal fade" id="modalubah<?= $nomor; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="ubah_kelas.php" method="post">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Kelas</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="">Nama Kelas</label>
                                                                <input type="hidden" name="id_kelas" value="<?= $data['id_kelas']; ?>">
                                                                <input type="text" name="nama_kelas" class="form-control mt-1" value="<?= $data['nama_kelas']; ?>">
                                                            </div>
                                                        </div>

                                                        <div class="row mt-3">
                                                            <div class="col-lg-12">
                                                                <label for="">Tahun Ajaran</label>
                                                                <textarea name="tahun_ajaran" class="form-control"><?= $data['tahun_ajaran']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <input type="submit" value="Ubah Data" class="btn btn-warning">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Akhir Modal Ubah -->
                                </td>

                               <td>
    <!-- Tombol -->
    <button type="button"
        class="btn btn-danger"
        data-bs-toggle="modal"
        data-bs-target="#modalhapus<?= $nomor; ?>">
        Hapus
    </button>

    <!-- ✅ Modal Hapus (PINDAH KE DALAM TD) -->
    <div class="modal fade" id="modalhapus<?= $nomor; ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <form action="hapus_kelas.php" method="POST">

                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data Kelas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        Yakin hapus kelas
                        <b><?= $data['nama_kelas']; ?></b> ?
                        <input type="hidden" name="id_kelas" value="<?= $data['id_kelas']; ?>">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-danger">
                            Hapus
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</td>
        

                        <?php
                            $nomor++; // FIX: Tambah counter
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>

        <?php include "../../includes/footer.php"; ?>
