<section class="custom--container-barang-dipinjam">
    <div class="custom--content-barang-dipinjam">
        <header>
            <section class="custom--text-header">
                <h1>Data Barang Dipinjam</h1>
                <p>Jaga baik-baik barang tersebut dan jangan terlambat mengembalikan!</p>
            </section>

            <section class="custom--countdown">
                <p class="countdown-text">Waktu pengembalian</p>
                <div class="custom--container-countdown">
                    <div class="custom--time">
                        <p class="return-date" id="days"></p>
                        <p class="countdown-label">Hari</p>
                    </div>

                    <div class="colon">:</div>

                    <div class="custom--time">
                        <p class="return-date" id="hours"></p>
                        <p class="countdown-label">Jam</p>
                    </div>

                    <div class="colon">:</div>

                    <div class="custom--time">
                        <p class="return-date" id="minutes"></p>
                        <p class="countdown-label">Menit</p>
                    </div>

                    <div class="vertical-line">

                    </div>
                    <div class="custom--time">
                        <p class="return-date" id="month"></p>
                        <p class="countdown-label" id="month-label"></p>
                    </div>
                </div>
            </section>
        </header>

        <main>
            <?php
            $number = 1;
            $groupedData = [];

            foreach ($data['data'] as $item) {
                $idPeminjaman = $item['id_peminjaman'];
                if (!array_key_exists($idPeminjaman, $groupedData)) {
                    $groupedData[$idPeminjaman] = [];
                }
                $groupedData[$idPeminjaman][] = $item;
            }
            ?>

            <?php foreach ($groupedData as $idPeminjaman => $items) { ?>
                <section class="custom--borrowed-one">
                    <p class="custom--subheader-borrowed">Peminjaman - <?php echo $number ?></p>
                    <?php $number++; ?>
                    <div class="custom--container-borrowed-items">
                        <div class="custom--borrowed-info">
                            <div class="custom--borrowed-info">
                                <div class="custom--start-date">
                                    <p class="info-label">Mulai pinjam</p>
                                    <input type="text" name="start_date" class="borrow-date" id="start-date" value="<?php echo $item['tgl_peminjaman']; ?>" size="35" disabled>
                                </div>
                                <div class="custom--end-date">
                                    <p class="info-label">Selesai pinjam</p>
                                    <input type="text" name="end_date" class="borrow-date" id="end-date" value="<?php echo $item['tgl_pengembalian']; ?>" size="35" disabled>
                                </div>

                                <div class="custom--status">
                                    <p class="info-label">Status</p>

                                    <?php
                                    $status = $items[0]['status']; // Ambil nilai status dari variabel $item['status']

                                    if ($status === 'Dipinjam') { ?>
                                        <div class="custom--status-value-dipinjam" id="status-dipinjam">
                                            <p><?php echo $status ?></p>
                                        </div>
                                    <?php } elseif ($status === 'Menunggu') { ?>
                                        <div class="custom--status-value-dipinjam" id="status-menunggu">
                                            <p><?php echo $status ?></p>
                                        </div>
                                    <?php } elseif ($status === 'Terlambat') { ?>
                                        <div class="custom--status-value-dipinjam" id="status-terlambat">
                                            <p><?php echo $status ?></p>
                                        </div>
                                    <?php } else { ?>
                                        <!-- Tambahkan logika untuk status lain jika diperlukan -->
                                        <div class="custom--status-value-default" id="status-default">
                                            <p><?php echo $status ?></p>
                                        </div>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>

                        <div class="custom--item-info-dipinjam">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Pengelola</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($items as $item) { ?>
                                        <tr>
                                            <td><?= $item['id_barang'] ?></td>
                                            <td><?= $item['nama_barang'] ?></td>
                                            <td><?= $item['nama_admin'] ?></td>
                                            <td><?= $item['jumlah'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            <?php } ?>

            <?php if (empty($data['data'])) { ?>
                <section class="custom--borrowed-two">
                    <p class="custom--subheader-borrowed">Peminjaman</p>
                    <div class="custom--container-borrowed-items-empty">
                        <p>Tidak ada peminjaman</p>
                    </div>
                </section>
            <?php } ?>
        </main>
    </div>
    <?php
    // Ambil data tanggal pengembalian dari PHP
    $returnDates = array_column($data['data'], 'tgl_pengembalian');
    ?>

    <script>
        const returnDatesFromDatabase = <?php echo json_encode($returnDates); ?>;

        function updateCountdown(returnDates) {
            // Mendapatkan tanggal sekarang
            const now = new Date();

            // Menginisialisasi variabel untuk menyimpan tanggal pengembalian terdekat
            let closestReturnDate = new Date(returnDates[0]);

            // Mencari tanggal pengembalian terdekat
            returnDates.forEach(date => {
                const returnDate = new Date(date);
                if (returnDate > now && (returnDate < closestReturnDate || closestReturnDate <= now)) {
                    closestReturnDate = returnDate;
                }
            });

            // Menghitung selisih waktu antara tanggal sekarang dengan tanggal pengembalian terdekat
            const timeDifference = closestReturnDate - now;

            if (timeDifference <= 0) {
                // Jika waktu sudah lewat
                document.getElementById('days').innerHTML = 'Expired';
                // Hentikan perhitungan countdown
                return;
            }

            // Hitung hari, jam, menit, bulan
            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const monthLabel = closestReturnDate.toLocaleString('id-ID', {
                month: 'short'
            });

            // Tampilkan hasil countdown pada elemen HTML
            if (timeDifference >= 0) {
                document.getElementById('days').innerHTML = days;
                document.getElementById('hours').innerHTML = hours;
                document.getElementById('minutes').innerHTML = minutes;
                document.getElementById('month-label').innerHTML = monthLabel;
                document.getElementById('month').innerHTML = closestReturnDate.getDate();
            }


        }

        // Jalankan perhitungan countdown
        updateCountdown(returnDatesFromDatabase);

        // Set interval untuk memperbarui countdown setiap detik
        setInterval(() => {
            updateCountdown(returnDatesFromDatabase);
        }, 1000);
    </script>