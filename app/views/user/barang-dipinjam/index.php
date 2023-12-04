<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/barang-dipinjam.css">
    <title>Barang Dipinjam</title>
</head>

<body>
    <div class="custom--container">
        <?php include("../../layouts/sidebar.php"); ?>

        <div class="custom--content">
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
                <section class="custom--borrowed-one">
                    <p class="custom--subheader-borrowed">Peminjaman - 1</p>
                    
                    <div class="custom--container-borrowed-items">
                        <div class="custom--borrowed-info">
                            <div class="custom--start-date">
                                <p class="info-label">Mulai pinjam</p>
                                <input type="text" name="start_date" class="borrow-date" id="start-date" value="<?php echo $formattedDate; ?>" size="35" disabled>
                            </div>
                            <div class="custom--end-date">
                                <p class="info-label">Selesai pinjam</p>
                                <input type="text" name="end_date" class="borrow-date" id="end-date" value="<?php echo $formattedEndDate; ?>" size="35" disabled>
                            </div>
                            
                            <div class="custom--status">
                                <p class="info-label">Status</p>
                                <div class="custom--status-value" id="status-dipinjam">
                                    <p>Dipinjam</p>
                                </div>

                                <!-- <div class="custom--status-value" id="status-validasi">
                                    <p>Validasi</p>
                                </div>

                                <div class="custom--status-value" id="status-terlambat">
                                    <p>Terlambat</p>
                                </div>     -->
                            </div>
                        </div>

                        <div class="custom--item-info">
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
                                    <tr>
                                        <td>RMT01</td>
                                        <td>Remote Ac</td>
                                        <td>Pak Wardi</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>RMT01</td>
                                        <td>Remote Ac</td>
                                        <td>Pak Wardi</td>
                                        <td>9</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>

                <section class="custom--borrowed-two">
                    <p class="custom--subheader-borrowed">Peminjaman - 2</p>

                    <div class="custom--container-borrowed-items-empty">
                        <p>Tidak ada peminjaman</p>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <script src="../../layouts/sidebar.js"></script>
        <script>
            function updateCountdown(endDate) {
                const now = new Date();
                const endDateTime = new Date(endDate);
                const timeDifference = endDateTime - now;

                if (timeDifference <= 0) {
                    // If expired
                    document.getElementById('return-date').innerHTML = 'Expired';
                } else {
                    // Calculate days, hours, minutes
                    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                    const monthLabel = endDateTime.toLocaleString('id-ID', { month: 'short' });

                    document.getElementById('days').innerHTML = days;
                    document.getElementById('hours').innerHTML = hours;
                    document.getElementById('minutes').innerHTML = minutes;
                    document.getElementById('month-label').innerHTML = monthLabel;
                    document.getElementById('month').innerHTML = endDateTime.getDate();
                }
            }
            // BACKEND BRO
            // Retrieve the date from the db 
            // const returnDateFromDatabase = "<?php echo $formattedReturnDate; ?>";

            // Call the updateCountdown w/ the retrieved return date
            updateCountdown(returnDateFromDatabase);
            setInterval(() => {
                updateCountdown(returnDateFromDatabase);
            }, 1000);
        </script>
</body>

</html>