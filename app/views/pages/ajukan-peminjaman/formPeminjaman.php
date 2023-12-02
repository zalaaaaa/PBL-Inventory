<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Detail Peminjaman</title>

        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../css/form.css">
    </head>
    <body>

    <?php
    include ('../../../controlers/auth/checkFormPeminjaman.php');
    // include('../../../controlers/auth/checkLogin.php');
    
    ?>
        <div class="container">

                <h2 class="title">Detail Peminjaman</h2>
                <p class="desc">Pastikan data dan barang yang Anda pinjam sudah benar!</p>
            </div>
            <h4 class="sub-title">Data Anda</h4>
            <div class="section1">
                <div class="form-wrapper">
                    <form action="../../../controlers/auth/checkFormPeminjaman.php" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="inputState" class="form-label">Nama</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama" name="name" value="<?php echo $nama ?>">
                            </div>
                            <div class="col">
                                <label for="inputState" class="form-label">NIM/NIP</label>
                                <input type="text" class="form-control" placeholder="Masukkan NIM/NIP" name="idNumber" value="<?php echo $nomor_identitas ?>">
                            </div>
                            <div class="col">
                                <label for="inputState" class="form-label">Jumlah Hari</label> <br>
                                <select id="inputState" class="form-select">
                                    <option selected>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <label for="inputState" class="form-label">Mulai Pinjam</label>
                            <input type="date" class="form-control" name="startDate" id="startDate" onchange="updateFinishDate()">
                            </div>
                        <div class="col">
                            <label for="inputState" class="form-label">Selesai Pinjam</label>
                            <input type="date" class="form-control" value="" name="finishDate" id="finishDate">
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
            <h4 class="sub-title">Data Barang</h4>
            <div class="section2">
                <table class="table">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Nama Pengelola</th>
                            <th scope="col">Jumlah Tersedia</th>
                            <th scope="col">Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
  
                        echo "<tr>";
                        $number = 0 ;

                        while($row = $result->fetch_assoc()) {
                        $number ++;
                        echo"   <td>".$row['id_barang']."</td>
                                <td>".$row['nama_barang']."</td>
                                <td>".$row['nama_admin']."</td>
                                <td>".$row['jumlah_tersedia']."</td>";
                        ?>
                                <td class="qty">
                                <button type="button" class="btn-tambah">tambah</button>
                                </td>
                        <?php 
                        echo "</tr>";
                        };
                        ?>


                    </tbody>
                </table>
            </div>
            <div class="section3">
                <button type="button" class="btn-lg">Kembali</button>
                <button type="button" class="btn-lg" id="modal">Pinjam</button>
            </div>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById("myModal");
            // Get the button that opens the modal
            var btn = document.getElementById("modal");
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

                function updateFinishDate() {
                    var startDate = new Date(document.getElementById('startDate').value);
                    var inputState = document.getElementById('inputState');
                    var selectedDays = parseInt(inputState.options[inputState.selectedIndex].value);

                    if (!isNaN(startDate.getTime())) {
                        var finishDate = new Date(startDate);
                        finishDate.setDate(finishDate.getDate() + selectedDays);
                        var yyyy = finishDate.getFullYear();
                        var mm = ('0' + (finishDate.getMonth() + 1)).slice(-2);
                        var dd = ('0' + finishDate.getDate()).slice(-2);
                        document.getElementById('finishDate').value = yyyy + '-' + mm + '-' + dd;
                    }
            }
        </script>
    </body>
</html>
