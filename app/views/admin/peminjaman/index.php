    <section class="custom--container">
        <div class="custom--content">
            <header>
                <h1>Data Peminjaman</h1>
                <p>Silahkan konfirmasi peminjaman jika sudah siap!</p>
            </header>

            <div class="custom--body">
                <div class="custom--filter">
                    <div class="custom--day-wrapper">
                        <button class="active">Peminjaman</button>

                        <!-- <form action="" method="post"> -->
                        <button>Pengembalian</button>
                        <!-- </form> -->

                    </div>
                    <div class="custom--search">
                        <!-- <input type="text" name="search" id="search" placeholder="Cari Nama Barang">
                        <div class="custom--search-icon">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 22.25C5.85 22.25 1.25 17.65 1.25 12C1.25 6.35 5.85 1.75 11.5 1.75C17.15 1.75 21.75 6.35 21.75 12C21.75 17.65 17.15 22.25 11.5 22.25ZM11.5 3.25C6.67 3.25 2.75 7.18 2.75 12C2.75 16.82 6.67 20.75 11.5 20.75C16.33 20.75 20.25 16.82 20.25 12C20.25 7.18 16.33 3.25 11.5 3.25Z" fill="#121212" />
                                <path d="M21.9999 23.25C21.8099 23.25 21.6199 23.18 21.4699 23.03L19.4699 21.03C19.1799 20.74 19.1799 20.26 19.4699 19.97C19.7599 19.68 20.2399 19.68 20.5299 19.97L22.5299 21.97C22.8199 22.26 22.8199 22.74 22.5299 23.03C22.3799 23.18 22.1899 23.25 21.9999 23.25Z" fill="#121212" />
                            </svg>
                        </div> -->
                    </div>
                </div>


                <div class="custom--table-info" id="table-peminjaman">
                    <h2>Peminjaman</h2>
                    <div class="custom--table-wrapper">
                        <table>
                            <thead>
                                <tr>

                                    <th>Tanggal Pinjam</th>

                                    <th>Kode</th>
                                    <th>Nama Barang</th>
                                    <th>Nama Peminjam</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $groupedData = [];
                                foreach ($data['items'] as $item) {
                                    $id_peminjaman = $item['id_peminjaman'];
                                    if (!array_key_exists($id_peminjaman, $groupedData)) {
                                        $groupedData[$id_peminjaman] = [];
                                    }
                                    $groupedData[$id_peminjaman][] = $item;
                                }

                                foreach ($groupedData as $id_peminjaman => $group) {

                                    foreach ($group as $index => $item) {
                                        echo '<td>' . $item['tgl_peminjaman'] . '</td>';
                                        echo '<td>' . $item['kode'] . '</td>';
                                        echo '<td>' . $item['nama_barang'] . '</td>';
                                        echo '<td class="custom--first-child">' . $item['nama_peminjam'] . '</td>';
                                        if ($index === 0) {
                                            echo '<td rowspan="' . count($group) . '" class="custom--confirm">';
                                            echo '<div class="custom--aksi">'; ?>
                                            <form method="POST" action="">
                                                <input type="hidden" name="update" value="<?php echo $item['id_peminjaman']; ?>">
                                                <button type="submit" name="confirmBtn" class="button-confirm">Konfirmasi</button>
                                            </form>

                                <?php
                                            echo '<button class="button-info">';
                                            echo '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" style="vertical-align: middle;" xmlns="http://www.w3.org/2000/svg">';
                                            echo '  
                                            <path d="M10.0003 18.9583C5.05866 18.9583 1.04199 14.9417 1.04199 9.99999C1.04199 5.05832 5.05866 1.04166 10.0003 1.04166C14.942 1.04166 18.9587 5.05832 18.9587 9.99999C18.9587 14.9417 14.942 18.9583 10.0003 18.9583ZM10.0003 2.29166C5.75033 2.29166 2.29199 5.74999 2.29199 9.99999C2.29199 14.25 5.75033 17.7083 10.0003 17.7083C14.2503 17.7083 17.7087 14.25 17.7087 9.99999C17.7087 5.74999 14.2503 2.29166 10.0003 2.29166Z" fill="#121212"/>
                                                    <path d="M10 11.4584C9.65833 11.4584 9.375 11.175 9.375 10.8334V6.66669C9.375 6.32502 9.65833 6.04169 10 6.04169C10.3417 6.04169 10.625 6.32502 10.625 6.66669V10.8334C10.625 11.175 10.3417 11.4584 10 11.4584Z" fill="#121212" />
                                                    <path d="M9.99984 14.1667C9.8915 14.1667 9.78317 14.1417 9.68317 14.1C9.58317 14.0583 9.4915 14 9.40817 13.925C9.33317 13.8416 9.27484 13.7583 9.23317 13.65C9.1915 13.55 9.1665 13.4417 9.1665 13.3333C9.1665 13.225 9.1915 13.1167 9.23317 13.0167C9.27484 12.9167 9.33317 12.825 9.40817 12.7417C9.4915 12.6667 9.58317 12.6083 9.68317 12.5667C9.88317 12.4833 10.1165 12.4833 10.3165 12.5667C10.4165 12.6083 10.5082 12.6667 10.5915 12.7417C10.6665 12.825 10.7248 12.9167 10.7665 13.0167C10.8082 13.1167 10.8332 13.225 10.8332 13.3333C10.8332 13.4417 10.8082 13.55 10.7665 13.65C10.7248 13.7583 10.6665 13.8416 10.5915 13.925C10.5082 14 10.4165 14.0583 10.3165 14.1C10.2165 14.1417 10.1082 14.1667 9.99984 14.1667Z" fill="#121212" />';
                                            echo '</svg>';
                                            echo '</button>';
                                            echo '</div>';
                                            echo '</td>';
                                        }
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="custom--table-info" id="table-pengembalian">
                    <h2>Pengembalian</h2>
                    <div class="custom--table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tanggal Kembali</th>
                                    <th>Kode</th>
                                    <th>Nama Barang</th>
                                    <th>Nama Peminjam</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <?php
                                    $groupedData = [];
                                    foreach ($data['items2'] as $item) {
                                        $id_peminjaman = $item['id_peminjaman'];
                                        if (!array_key_exists($id_peminjaman, $groupedData)) {
                                            $groupedData[$id_peminjaman] = [];
                                        }
                                        $groupedData[$id_peminjaman][] = $item;
                                    }

                                    foreach ($groupedData as $id_peminjaman => $group) {
                                        foreach ($group as $index => $item) {
                                            echo '<td>' . $item['tanggal_pengembalian'] . '</td>';
                                            echo '<td>' . $item['kode'] . '</td>';
                                            echo '<td>' . $item['nama_barang'] . '</td>';
                                            echo '<td class="custom--first-child">' . $item['nama_peminjam'] . '</td>';
                                            if ($index === 0) {
                                                echo '<td rowspan="' . count($group) . '" class="custom--confirm" style="position:relative;">';
                                    ?>
                                                <form method="POST" action="">
                                                    <input type="hidden" name="checkStatus" value="<?php echo $item['id_peminjaman']; ?>">
                                                </form>
                                                <div class="custom--status">
                                                    <?php if ($item['status'] === 'Dipinjam') { ?>
                                                        <div class="custom--status-value" id="status-dipinjam" style=" position: absolute;top: 1rem;">
                                                            <p>Dipinjam</p>
                                                        </div>
                                                    <?php } elseif ($item['status'] === 'Selesai') { ?>
                                                        <div class="custom--status-value" id="status-validasi" style="position: absolute;top: 1rem;">
                                                            <p>Selesai</p>
                                                        </div>
                                                    <?php } elseif ($item['status'] === 'Terlambat') { ?>
                                                        <div class="custom--status-value" id="status-terlambat" style="position: absolute;top: 1rem;">
                                                            <p>Terlambat</p>
                                                        </div>
                                                    <?php } else { ?>
                                                        <!-- Tampilkan default atau pesan jika status tidak sesuai -->
                                                        <p>Status tidak valid</p>
                                                    <?php } ?>
                                                </div>
                                                </td>
                                            <?php
                                            }
                                            if ($index === 0) {
                                                echo '<td rowspan="' . count($group) . '" class="custom--confirm" style="position:relative;">';
                                                echo '<div class="custom--aksi">';
                                            ?>
                                                <form method="POST" action="">
                                                    <input type="hidden" name="updateSelesai" value="<?php echo $item['id_peminjaman']; ?>">
                                                    <!-- Tambahkan tombol submit atau aksi lain yang Anda perlukan -->
                                                    <button type="submit" name="confirmBtnPengembalian" class="button-confirm" style="position: absolute;top: 1rem;">Konfirmasi</button>
                                                </form>
                                    <?php
                                                // echo '<button class="button-confirm" type="submit" name="confirmBtnPengembalian" >Konfirmasi</button>';
                                                echo '<button class="button-info">';
                                                echo '</button>';
                                                echo '</div>';
                                            }
                                            echo '</td>';
                                            echo '</tr>';
                                        }
                                    }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="popup-container">
            <div class="custom--content-popup">
                <div class="custom--row">
                    <div class="custom--row-info">
                        <label for="">Nama</label>
                        <input type="text" value="<?= $item['nama_peminjam'] ?>" disabled>
                    </div>
                    <div class=" custom--row-info">
                        <label for="">NIM/NIP </label>
                        <input type="text" value="<?= $item['username_peminjam'] ?>" disabled>
                    </div>
                    <div class="custom--row-info">
                        <?php
                        $tanggal_peminjaman = $item['tgl_peminjaman'];
                        $tanggal_pengembalian = $item['tgl_pengembalian'];

                        $timestamp_peminjaman = strtotime($tanggal_peminjaman);
                        $timestamp_pengembalian = strtotime($tanggal_pengembalian);
                        $selisih_detik = $timestamp_pengembalian - $timestamp_peminjaman;
                        $selisih_hari = abs($selisih_detik / (60 * 60 * 24)); // 1 hari = 60 detik * 60 menit * 24 jam
                        ?>
                        <label for="">Jumlah Hari</label>
                        <input type="text" value="<?= $selisih_hari ?>" disabled>
                    </div>
                </div>

                <div class="custom--desc">
                    <label for="">Keterangan</label>
                    <textarea name="" id="" cols="30" rows="10" disabled></textarea>
                </div>

                <div class="custom--row">
                    <div class="custom--row-info">
                        <label for="">Mulai Pinjam</label>
                        <input type="text" value="<?= $item['tgl_peminjaman'] ?>" disabled>
                    </div>
                    <div class="custom--row-info">
                        <label for="">Selesai Pinjam</label>
                        <input type="text" value="<?= $item['tgl_pengembalian'] ?>" disabled>
                    </div>
                </div>

                <button class="custom--popup-close" id="custom--close-popup">x</button>
            </div>
        </div>
        <script>
            const buttons = document.querySelectorAll(".custom--day-wrapper button");
            const tables = document.querySelectorAll(".custom--table-info");
            const detailsButtons = document.querySelectorAll(".button-info");
            const popupContainer = document.querySelector(".popup-container");
            const closePopupButton = document.getElementById("custom--close-popup");
            const headerTitle = document.querySelector("header h1");
            const subheader = document.querySelector("header p");


            buttons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    buttons.forEach((btn) => {
                        btn.classList.remove('active');
                    });

                    tables.forEach((table) => {
                        table.style.display = 'none';
                    });

                    button.classList.add('active');
                    tables[index].style.display = 'flex';

                    headerTitle.textContent =
                        index === 0 ? "Data Peminjaman" : "Data Pengembalian";

                    subheader.textContent = index === 0 ? "Silahkan konfirmasi peminjaman jika sudah siap!" : "Silahkan konfirmasi pengembalian jika sudah benar!";
                });
            });


            // $(document).ready(function() {
            //     $('.button-confirm[name="confirmBtnPengembalian"]').click(function(event) {
            //         event.preventDefault();
            //         const idPeminjaman = $(this).closest('form').find('input[name="idPeminjaman"]').val();

            //         $.ajax({
            //             url: 'http://localhost/PBL-Inventory/public/peminjaman',
            //             type: 'POST',
            //             data: {
            //                 idPeminjaman: idPeminjaman
            //             },
            //             success: function(response) {
            //                 console.log('Konfirmasi pengembalian berhasil');
            //                 // Lakukan perubahan UI atau tindakan lainnya di sini
            //             },
            //             error: function(xhr, status, error) {
            //                 console.error('Gagal melakukan konfirmasi pengembalian', error);
            //                 // Tangani kesalahan jika ada
            //             }
            //         });
            //     });
            // });





            detailsButtons.forEach((detailsButton) => {
                detailsButton.addEventListener('click', () => {
                    popupContainer.style.display = 'flex';
                });
            });

            closePopupButton.addEventListener('click', () => {
                popupContainer.style.display = 'none';
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') {
                    popupContainer.style.display = 'none';
                }
            });

            const tbodies = document.querySelectorAll('tbody');
            tbodies.forEach(tbody => {
                const customConfirms = tbody.querySelectorAll('.custom--confirm');
                const lastCustomConfirm = customConfirms[customConfirms.length - 1];
                lastCustomConfirm.style.borderBottomRightRadius = '1rem';
            });
        </script>