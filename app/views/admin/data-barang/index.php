<section class="custom--container-data-barang">
    <div class="custom--header-data-barang">
        <h1>Selamat Datang, <?= $data['nama']; ?></h1>
        <p>Berikut adalah barang inventaris JTI yang Anda kelola!</p>
    </div>
    <div class="custom--body-data-barang">
        <div class="custom--overview">
            <div class="custom--wrapper">
                <a href="./peminjaman">
                    <div class="custom--overview-header">
                        <div class="custom-icon-right">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="1">
                                    <path d="M7.50008 18.9213H12.5001C16.6667 18.9213 18.3334 17.2546 18.3334 13.088V8.08797C18.3334 3.92131 16.6667 2.25464 12.5001 2.25464H7.50008C3.33341 2.25464 1.66675 3.92131 1.66675 8.08797V13.088C1.66675 17.2546 3.33341 18.9213 7.50008 18.9213Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.125 8.08795H6.875" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.125 13.088H6.875" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </svg>
                            <div>Peminjaman</div>
                        </div>
                        <div class="custom-icon-left">
                            <svg width="19" height="20" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8335 9.66666L17.6668 2.83333" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.3335 6.16667V2.16667H14.3335" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.1665 2.16667H7.49984C3.33317 2.16667 1.6665 3.83334 1.6665 8V13C1.6665 17.1667 3.33317 18.8333 7.49984 18.8333H12.4998C16.6665 18.8333 18.3332 17.1667 18.3332 13V11.3333" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="custom--overview-body">
                        <span id="jumlah_dipinjam"><?php echo $data['summaryData']['total_dipinjam']; ?></span>
                        <label for="">Barang</label>
                    </div>
                </a>
            </div>
            <div class="vertical-line"></div>
            <div class="custom--wrapper">
                <div class="custom--overview-header">
                    <div class="custom-icon-right">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.23242 15.7917L8.81576 17.7917C9.14909 18.125 9.89909 18.2917 10.3991 18.2917H13.5658C14.5658 18.2917 15.6491 17.5417 15.8991 16.5417L17.8991 10.4583C18.3158 9.29167 17.5658 8.29167 16.3158 8.29167H12.9824C12.4824 8.29167 12.0658 7.875 12.1491 7.29167L12.5658 4.625C12.7324 3.875 12.2324 3.04167 11.4824 2.79167C10.8158 2.54167 9.98242 2.875 9.64909 3.375L6.23242 8.45833" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" />
                            <path d="M1.98242 15.7917V7.625C1.98242 6.45833 2.48242 6.04167 3.64909 6.04167H4.48242C5.64909 6.04167 6.14909 6.45833 6.14909 7.625V15.7917C6.14909 16.9583 5.64909 17.375 4.48242 17.375H3.64909C2.48242 17.375 1.98242 16.9583 1.98242 15.7917Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div>Tersedia</div>
                    </div>
                </div>
                <div class="custom--overview-body">
                    <span id="quantity"><?php echo $data['summaryData']['total_tersedia']; ?></span>
                    <label for="">Barang</label>
                </div>
            </div>
            <div class="custom--wrapper">
                <div class="custom--overview-header">
                    <div class="custom-icon-right">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.51613 13.1411L14.375 18C15.2379 18.8629 16.6371 18.8629 17.5 18C18.3629 17.1371 18.3629 15.7379 17.5 14.875L12.6027 9.97774M9.51613 13.1411L11.5962 10.6153C11.8596 10.2955 12.2118 10.0943 12.6027 9.97774M9.51613 13.1411L5.63693 17.8516C5.23364 18.3413 4.63247 18.625 3.99807 18.625C2.82553 18.625 1.875 17.6745 1.875 16.5019C1.875 15.8675 2.1587 15.2664 2.64842 14.8631L8.34551 10.1713M12.6027 9.97774C13.0606 9.84119 13.5715 9.82067 14.0549 9.86153C14.1604 9.87045 14.2672 9.875 14.375 9.875C16.4461 9.875 18.125 8.19607 18.125 6.125C18.125 5.57478 18.0065 5.05223 17.7936 4.58149L15.0635 7.31164C14.1338 7.09821 13.4019 6.36636 13.1885 5.43664L15.9187 2.70645C15.4479 2.49353 14.9253 2.375 14.375 2.375C12.3039 2.375 10.625 4.05393 10.625 6.125C10.625 6.23282 10.6295 6.33958 10.6385 6.44509C10.7142 7.3413 10.579 8.33201 9.88471 8.90377L9.79965 8.97382M8.34551 10.1713L4.92417 6.75H3.75L1.875 3.625L3.125 2.375L6.25 4.25V5.42417L9.79965 8.97382M8.34551 10.1713L9.79965 8.97382M15.3125 15.8125L13.125 13.625M4.05603 16.4375H4.06228V16.4438H4.05603V16.4375Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div>Pemeliharaan</div>
                    </div>
                </div>
                <div class="custom--overview-body">
                    <span id="quantity"><?php echo $data['summaryData']['total_pemeliharaan']; ?></span>
                    <label for="">Barang</label>
                </div>
            </div>
            <div class="custom--wrapper">
                <div class="custom--overview-header">
                    <div class="custom-icon-right">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.64258 6.7L10.0009 10.9583L17.3092 6.725" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 18.5083V10.95" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.27552 2.56667L3.82552 5.03333C2.81719 5.59167 1.99219 6.99167 1.99219 8.14167V12.85C1.99219 14 2.81719 15.4 3.82552 15.9583L8.27552 18.4333C9.22552 18.9583 10.7839 18.9583 11.7339 18.4333L16.1839 15.9583C17.1922 15.4 18.0172 14 18.0172 12.85V8.14167C18.0172 6.99167 17.1922 5.59167 16.1839 5.03333L11.7339 2.55833C10.7755 2.03333 9.22552 2.03333 8.27552 2.56667Z" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div>Total Barang</div>
                    </div>
                </div>
                <div class="custom--overview-body">
                    <span id="quantity"><?php echo $data['summaryData']['grand_total']; ?></span>
                    <label for="">Barang</label>
                </div>
            </div>
        </div>
        <hr>
        <div class="custom--data-barang-table-wrapper">
            <div class="custom--data-barang-table-wrapper--header">
                <h3>Data Barang</h3>
                <button>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99984 18.9583C5.05817 18.9583 1.0415 14.9417 1.0415 9.99999C1.0415 5.05832 5.05817 1.04166 9.99984 1.04166C14.9415 1.04166 18.9582 5.05832 18.9582 9.99999C18.9582 14.9417 14.9415 18.9583 9.99984 18.9583ZM9.99984 2.29166C5.74984 2.29166 2.2915 5.74999 2.2915 9.99999C2.2915 14.25 5.74984 17.7083 9.99984 17.7083C14.2498 17.7083 17.7082 14.25 17.7082 9.99999C17.7082 5.74999 14.2498 2.29166 9.99984 2.29166Z" fill="#121212" />
                        <path d="M13.3332 10.625H6.6665C6.32484 10.625 6.0415 10.3417 6.0415 10C6.0415 9.65833 6.32484 9.375 6.6665 9.375H13.3332C13.6748 9.375 13.9582 9.65833 13.9582 10C13.9582 10.3417 13.6748 10.625 13.3332 10.625Z" fill="#121212" />
                        <path d="M10 13.9583C9.65833 13.9583 9.375 13.675 9.375 13.3333V6.66666C9.375 6.32499 9.65833 6.04166 10 6.04166C10.3417 6.04166 10.625 6.32499 10.625 6.66666V13.3333C10.625 13.675 10.3417 13.9583 10 13.9583Z" fill="#121212" />
                    </svg>
                    Tambah Barang
                </button>
            </div>
            <table class="custom--table-data-barang">
                <tr>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Tersedia</th>
                    <th>Dipinjam</th>
                    <th>Pemeliharaan</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($data['barang'] as $index => $item) : ?>
                    <tr>
                        <td id="kode<?= $index ?>"><?= $item['id_barang']; ?></td>
                        <td id="nama<?= $index ?>"><?= $item['nama_barang']; ?></td>
                        <td id="jumlah<?= $index ?>"> <?= $item['jumlah_tersedia'] + $item['jumlah_dipinjam'] + $item['jml_pemeliharaan']; ?></td>
                        <td id="tersedia<?= $index ?>"><?= $item['jumlah_tersedia']; ?></td>
                        <td id="dipinjam<?= $index ?>"><?= $item['jumlah_dipinjam']; ?></td>
                        <td id="pemeliharaan<?= $index ?>"><?= $item['jml_pemeliharaan']; ?></td>
                        <td id="icon<?= $index ?>">
                            <div class="custom--icon-aksi">
                                <div class="editIcon" onclick="editItem('<?= $item['id_barang']; ?>')">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.1665 1.66666H7.49984C3.33317 1.66666 1.6665 3.33332 1.6665 7.49999V12.5C1.6665 16.6667 3.33317 18.3333 7.49984 18.3333H12.4998C16.6665 18.3333 18.3332 16.6667 18.3332 12.5V10.8333" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.3666 2.51666L6.7999 9.08333C6.5499 9.33333 6.2999 9.825 6.2499 10.1833L5.89157 12.6917C5.75823 13.6 6.3999 14.2333 7.30823 14.1083L9.81657 13.75C10.1666 13.7 10.6582 13.45 10.9166 13.2L17.4832 6.63333C18.6166 5.5 19.1499 4.18333 17.4832 2.51666C15.8166 0.849997 14.4999 1.38333 13.3666 2.51666Z" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.4248 3.45834C12.9831 5.45001 14.5415 7.00834 16.5415 7.57501" stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="detailsIcon" onclick="showDetails('<?= $item['id_barang']; ?>')">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.99984 18.9583C5.05817 18.9583 1.0415 14.9417 1.0415 9.99999C1.0415 5.05832 5.05817 1.04166 9.99984 1.04166C14.9415 1.04166 18.9582 5.05832 18.9582 9.99999C18.9582 14.9417 14.9415 18.9583 9.99984 18.9583ZM9.99984 2.29166C5.74984 2.29166 2.2915 5.74999 2.2915 9.99999C2.2915 14.25 5.74984 17.7083 9.99984 17.7083C14.2498 17.7083 17.7082 14.25 17.7082 9.99999C17.7082 5.74999 14.2498 2.29166 9.99984 2.29166Z" fill="#121212" />
                                        <path d="M10 11.4584C9.65833 11.4584 9.375 11.175 9.375 10.8334V6.66669C9.375 6.32502 9.65833 6.04169 10 6.04169C10.3417 6.04169 10.625 6.32502 10.625 6.66669V10.8334C10.625 11.175 10.3417 11.4584 10 11.4584Z" fill="#121212" />
                                        <path d="M9.99984 14.1667C9.8915 14.1667 9.78317 14.1417 9.68317 14.1C9.58317 14.0583 9.4915 14 9.40817 13.925C9.33317 13.8416 9.27484 13.7583 9.23317 13.65C9.1915 13.55 9.1665 13.4417 9.1665 13.3333C9.1665 13.225 9.1915 13.1167 9.23317 13.0167C9.27484 12.9167 9.33317 12.825 9.40817 12.7417C9.4915 12.6667 9.58317 12.6083 9.68317 12.5667C9.88317 12.4833 10.1165 12.4833 10.3165 12.5667C10.4165 12.6083 10.5082 12.6667 10.5915 12.7417C10.6665 12.825 10.7248 12.9167 10.7665 13.0167C10.8082 13.1167 10.8332 13.225 10.8332 13.3333C10.8332 13.4417 10.8082 13.55 10.7665 13.65C10.7248 13.7583 10.6665 13.8416 10.5915 13.925C10.5082 14 10.4165 14.0583 10.3165 14.1C10.2165 14.1417 10.1082 14.1667 9.99984 14.1667Z" fill="#121212" />
                                    </svg>
                                </div>
                                <div class="deleteIcon" onclick="deleteItem('<?= $item['id_barang']; ?>')">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="3.40002" width="10" height="12" rx="1" stroke="#121212" stroke-width="1.2" />
                                        <rect x="1.5" y="1.40002" width="13" height="2" rx="0.5" stroke="#121212" stroke-width="1.2" stroke-linejoin="round" />
                                        <path d="M6 0.599976L10 0.599976" stroke="#121212" stroke-width="1.2" stroke-linecap="round" />
                                        <path d="M8 6V13" stroke="#121212" stroke-width="1.2" stroke-linecap="round" />
                                        <path d="M10.5 6V13" stroke="#121212" stroke-width="1.2" stroke-linecap="round" />
                                        <path d="M5.5 6V13" stroke="#121212" stroke-width="1.2" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>    
            </table>
        </div>
    </div>
</section>

<section class="custom--container-add-item">
    <div class="custom--add-item" id="add-item">
        <div class="custom--content">
            <header>
                <h3>Tambah Barang</h3>
            </header>
            <form action="dataBarang/addBarang" method="post" onsubmit="handleAddSubmit(event);" id="addBarangForm">
                <div class="custom--input-add-item">
                    <div class="custom--input-add-item-wrapper">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" name="kode_barang" id="kode_barang">
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang">
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="asal">Asal</label>
                        <input type="text" name="asal" id="asal">
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah">
                    </div>
                </div>
                <div class="custom--input-add-item-area">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
                </div>
                <div class="custom--button-add-items">
                    <button class="custom--close-button">Batal</button>
                    <input type="submit" value="Tambah" id="submit-add">
                </div>
            </form>
        </div>
    </div>
    <div class="custom--edit-item" id="edit-item">
        <div class="custom--content">
            <header>
                <h3>Edit Barang</h3>
            </header>
            <form action="dataBarang/editItem" method="POST">
                <div class="custom--input-add-item">
                    <div class="custom--input-add-item-wrapper">
                        <label for="kode_barang_edit">Kode Barang</label>
                        <input type="text" name="kode_barang_edit" id="kode_barang_edit" disabled>
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="nama_barang_edit">Nama Barang</label>
                        <input type="text" name="nama_barang_edit" id="nama_barang_edit">
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="asal_edit">Asal</label>
                        <input type="text" name="asal_edit" id="asal_edit">
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="jumlah_edit">Jumlah Tersedia</label>
                        <input type="text" name="jumlah_edit" id="jumlah_edit">
                    </div>

                    <div class="custom--input-add-item-wrapper">
                        <label for="jumlah_pemeliharaan_edit">Jumlah Pemeliharaan</label>
                        <input type="text" name="jumlah_pemeliharaan_edit" id="jumlah_pemeliharaan_edit">
                    </div>
                </div>
                <div class="custom--input-add-item-area">
                    <label for="keterangan_edit">Keterangan</label>
                    <textarea name="keterangan" id="keterangan_edit" cols="30" rows="10"></textarea>
                </div>
                <div class="custom--button-add-items">
                    <button class="custom--close-button">Batal</button>
                    <input type="submit" value="Submit" id="submit-edit">
                </div>
            </form>
        </div>
    </div>
    <div class="custom--details-item" id="details-item">
        <div class="custom--content">
            <header>
                <h3>Detail Barang</h3>
            </header>
            <form id="detailsForm">
                <div class="custom--input-add-item">
                    <div class="custom--input-add-item-wrapper">
                        <label for="kode_barang_detail">Kode Barang</label>
                        <input type="text" id="kode_barang_detail" name="kode_barang" disabled>
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="nama_barang_detail">Nama Barang</label>
                        <input type="text" id="nama_barang_detail" name="nama_barang_detail" disabled>
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="jumlah_detail">Jumlah</label>
                        <input type="text" id="jumlah_detail" name="jumlah_detail" disabled>
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="tersedia_detail">Jumlah Tersedia</label>
                        <input type="text" id="tersedia_detail" name="tersedia_detail" disabled>
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="dipinjam_detail">Jumlah Dipinjam</label>
                        <input type="text" id="dipinjam_detail" name="dipinjam_detail" disabled>
                    </div>
                    <div class="custom--input-add-item-wrapper">
                        <label for="pemeliharaan_detail">Jumlah Pemeliharaan</label>
                        <input type="text" id="pemeliharaan_detail" name="pemeliharaan_detail" disabled>
                    </div>
                </div>
                <div class="custom--input-add-item-area">
                    <label for="keterangan-detail">Keterangan</label>
                    <textarea id="keterangan-detail" name="keterangan-detail" rows="10" disabled></textarea>
                </div>
            </form>
        </div>
        <button class="custom--add-items-close" id="custom--close-details">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 0C4.49 0 0 4.49 0 10C0 15.51 4.49 20 10 20C15.51 20 20 15.51 20 10C20 4.49 15.51 0 10 0ZM13.36 12.3C13.65 12.59 13.65 13.07 13.36 13.36C13.21 13.51 13.02 13.58 12.83 13.58C12.64 13.58 12.45 13.51 12.3 13.36L10 11.06L7.7 13.36C7.55 13.51 7.36 13.58 7.17 13.58C6.98 13.58 6.79 13.51 6.64 13.36C6.35 13.07 6.35 12.59 6.64 12.3L8.94 10L6.64 7.7C6.35 7.41 6.35 6.93 6.64 6.64C6.93 6.35 7.41 6.35 7.7 6.64L10 8.94L12.3 6.64C12.59 6.35 13.07 6.35 13.36 6.64C13.65 6.93 13.65 7.41 13.36 7.7L11.06 10L13.36 12.3Z" fill="#FCD106"/>
            </svg>
        </button>
    </div>
    <div class="custom--delete-item" id="delete-item">
        <div class="custom--content-delete">
            <header>
                <div class="custom--content-delete-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M35.1168 8.71683C32.4334 8.45016 29.7501 8.25016 27.0501 8.10016V8.0835L26.6834 5.91683C26.4334 4.3835 26.0668 2.0835 22.1668 2.0835H17.8001C13.9168 2.0835 13.5501 4.2835 13.2834 5.90016L12.9334 8.0335C11.3834 8.1335 9.83343 8.2335 8.28343 8.3835L4.88343 8.71683C4.18343 8.7835 3.68343 9.40016 3.7501 10.0835C3.81677 10.7668 4.41677 11.2668 5.11677 11.2002L8.51677 10.8668C17.2501 10.0002 26.0501 10.3335 34.8834 11.2168C34.9334 11.2168 34.9668 11.2168 35.0168 11.2168C35.6501 11.2168 36.2001 10.7335 36.2668 10.0835C36.3168 9.40016 35.8168 8.7835 35.1168 8.71683Z" fill="#292D32" />
                        <path d="M32.0499 13.5665C31.6499 13.1498 31.0999 12.9165 30.5332 12.9165H9.46657C8.89991 12.9165 8.33324 13.1498 7.94991 13.5665C7.56657 13.9832 7.34991 14.5498 7.38324 15.1332L8.41658 32.2332C8.59991 34.7665 8.83324 37.9332 14.6499 37.9332H25.3499C31.1666 37.9332 31.3999 34.7832 31.5832 32.2332L32.6166 15.1498C32.6499 14.5498 32.4332 13.9832 32.0499 13.5665ZM22.7666 29.5832H17.2166C16.5332 29.5832 15.9666 29.0165 15.9666 28.3332C15.9666 27.6498 16.5332 27.0832 17.2166 27.0832H22.7666C23.4499 27.0832 24.0166 27.6498 24.0166 28.3332C24.0166 29.0165 23.4499 29.5832 22.7666 29.5832ZM24.1666 22.9165H15.8332C15.1499 22.9165 14.5832 22.3498 14.5832 21.6665C14.5832 20.9832 15.1499 20.4165 15.8332 20.4165H24.1666C24.8499 20.4165 25.4166 20.9832 25.4166 21.6665C25.4166 22.3498 24.8499 22.9165 24.1666 22.9165Z" fill="#292D32" />
                    </svg>
                </div>
                <h3>Apakah Anda yakin menghapus barang tersebut?</h3>
            </header>
            <div class="custom--button-add-items">
                <button class="custom--close-button">Batal</button>
                <button class="custom--delete-btn">Hapus</button>
            </div>
        </div>
    </div>
</section>

<section class="custom--container-warning">
    <div class="custom--warning" id="empty">
        <div class="logo">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 22.9167C19.3167 22.9167 18.75 22.3501 18.75 21.6667V12.9167C18.75 12.2334 19.3167 11.6667 20 11.6667C20.6833 11.6667 21.25 12.2334 21.25 12.9167V21.6667C21.25 22.3501 20.6833 22.9167 20 22.9167Z" fill="#EE0B0B"/>
                <path d="M20 28.75C19.55 28.75 19.1333 28.5834 18.8166 28.2667C18.6666 28.1001 18.55 27.9167 18.45 27.7167C18.3667 27.5167 18.3333 27.3 18.3333 27.0834C18.3333 26.65 18.5166 26.2167 18.8166 25.9C19.4333 25.2833 20.5667 25.2833 21.1834 25.9C21.4834 26.2167 21.6667 26.65 21.6667 27.0834C21.6667 27.3 21.6166 27.5167 21.5333 27.7167C21.45 27.9167 21.3334 28.1001 21.1834 28.2667C20.8667 28.5834 20.45 28.75 20 28.75Z" fill="#EE0B0B"/>
                <path d="M20.0003 37.9166C18.8836 37.9166 17.7503 37.6332 16.7503 37.0499L6.85027 31.3332C4.85027 30.1666 3.60025 28.0166 3.60025 25.6999V14.2999C3.60025 11.9833 4.85027 9.83327 6.85027 8.66661L16.7503 2.94995C18.7503 1.78328 21.2336 1.78328 23.2503 2.94995L33.1503 8.66661C35.1503 9.83327 36.4003 11.9833 36.4003 14.2999V25.6999C36.4003 28.0166 35.1503 30.1666 33.1503 31.3332L23.2503 37.0499C22.2503 37.6332 21.117 37.9166 20.0003 37.9166ZM20.0003 4.58325C19.317 4.58325 18.6169 4.7666 18.0003 5.1166L8.10027 10.8333C6.86694 11.5499 6.10025 12.8666 6.10025 14.2999V25.6999C6.10025 27.1166 6.86694 28.4499 8.10027 29.1666L18.0003 34.8832C19.2336 35.5999 20.767 35.5999 21.9836 34.8832L31.8836 29.1666C33.117 28.4499 33.8837 27.1332 33.8837 25.6999V14.2999C33.8837 12.8833 33.117 11.5499 31.8836 10.8333L21.9836 5.1166C21.3836 4.7666 20.6836 4.58325 20.0003 4.58325Z" fill="#EE0B0B"/>
            </svg>
        </div>
        <div class="custom--warning-content-text">
            <h3>Peringatan</h3>
            <p>Form masih kosong!</p>
        </div>
    </div>
    <div class="custom--warning" id="exist">
        <div class="logo">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 22.9167C19.3167 22.9167 18.75 22.3501 18.75 21.6667V12.9167C18.75 12.2334 19.3167 11.6667 20 11.6667C20.6833 11.6667 21.25 12.2334 21.25 12.9167V21.6667C21.25 22.3501 20.6833 22.9167 20 22.9167Z" fill="#EE0B0B"/>
                <path d="M20 28.75C19.55 28.75 19.1333 28.5834 18.8166 28.2667C18.6666 28.1001 18.55 27.9167 18.45 27.7167C18.3667 27.5167 18.3333 27.3 18.3333 27.0834C18.3333 26.65 18.5166 26.2167 18.8166 25.9C19.4333 25.2833 20.5667 25.2833 21.1834 25.9C21.4834 26.2167 21.6667 26.65 21.6667 27.0834C21.6667 27.3 21.6166 27.5167 21.5333 27.7167C21.45 27.9167 21.3334 28.1001 21.1834 28.2667C20.8667 28.5834 20.45 28.75 20 28.75Z" fill="#EE0B0B"/>
                <path d="M20.0003 37.9166C18.8836 37.9166 17.7503 37.6332 16.7503 37.0499L6.85027 31.3332C4.85027 30.1666 3.60025 28.0166 3.60025 25.6999V14.2999C3.60025 11.9833 4.85027 9.83327 6.85027 8.66661L16.7503 2.94995C18.7503 1.78328 21.2336 1.78328 23.2503 2.94995L33.1503 8.66661C35.1503 9.83327 36.4003 11.9833 36.4003 14.2999V25.6999C36.4003 28.0166 35.1503 30.1666 33.1503 31.3332L23.2503 37.0499C22.2503 37.6332 21.117 37.9166 20.0003 37.9166ZM20.0003 4.58325C19.317 4.58325 18.6169 4.7666 18.0003 5.1166L8.10027 10.8333C6.86694 11.5499 6.10025 12.8666 6.10025 14.2999V25.6999C6.10025 27.1166 6.86694 28.4499 8.10027 29.1666L18.0003 34.8832C19.2336 35.5999 20.767 35.5999 21.9836 34.8832L31.8836 29.1666C33.117 28.4499 33.8837 27.1332 33.8837 25.6999V14.2999C33.8837 12.8833 33.117 11.5499 31.8836 10.8333L21.9836 5.1166C21.3836 4.7666 20.6836 4.58325 20.0003 4.58325Z" fill="#EE0B0B"/>
            </svg>
        </div>
        <div class="custom--warning-content-text">
            <h3>Peringatan</h3>
            <p>Kode telah dipakai!</p>
        </div>
    </div>
    <div class="custom--warning custom--warning-borrowed" id="borrowed">
        <div class="logo">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 22.9167C19.3167 22.9167 18.75 22.3501 18.75 21.6667V12.9167C18.75 12.2334 19.3167 11.6667 20 11.6667C20.6833 11.6667 21.25 12.2334 21.25 12.9167V21.6667C21.25 22.3501 20.6833 22.9167 20 22.9167Z" fill="#EE0B0B"/>
                <path d="M20 28.75C19.55 28.75 19.1333 28.5834 18.8166 28.2667C18.6666 28.1001 18.55 27.9167 18.45 27.7167C18.3667 27.5167 18.3333 27.3 18.3333 27.0834C18.3333 26.65 18.5166 26.2167 18.8166 25.9C19.4333 25.2833 20.5667 25.2833 21.1834 25.9C21.4834 26.2167 21.6667 26.65 21.6667 27.0834C21.6667 27.3 21.6166 27.5167 21.5333 27.7167C21.45 27.9167 21.3334 28.1001 21.1834 28.2667C20.8667 28.5834 20.45 28.75 20 28.75Z" fill="#EE0B0B"/>
                <path d="M20.0003 37.9166C18.8836 37.9166 17.7503 37.6332 16.7503 37.0499L6.85027 31.3332C4.85027 30.1666 3.60025 28.0166 3.60025 25.6999V14.2999C3.60025 11.9833 4.85027 9.83327 6.85027 8.66661L16.7503 2.94995C18.7503 1.78328 21.2336 1.78328 23.2503 2.94995L33.1503 8.66661C35.1503 9.83327 36.4003 11.9833 36.4003 14.2999V25.6999C36.4003 28.0166 35.1503 30.1666 33.1503 31.3332L23.2503 37.0499C22.2503 37.6332 21.117 37.9166 20.0003 37.9166ZM20.0003 4.58325C19.317 4.58325 18.6169 4.7666 18.0003 5.1166L8.10027 10.8333C6.86694 11.5499 6.10025 12.8666 6.10025 14.2999V25.6999C6.10025 27.1166 6.86694 28.4499 8.10027 29.1666L18.0003 34.8832C19.2336 35.5999 20.767 35.5999 21.9836 34.8832L31.8836 29.1666C33.117 28.4499 33.8837 27.1332 33.8837 25.6999V14.2999C33.8837 12.8833 33.117 11.5499 31.8836 10.8333L21.9836 5.1166C21.3836 4.7666 20.6836 4.58325 20.0003 4.58325Z" fill="#EE0B0B"/>
            </svg>
        </div>
        <div class="custom--warning-content-text">
            <h3>Peringatan</h3>
            <p>Barang sedang dipinjam!</p>
        </div>
    </div>
</section>

<script>
    const sectionPopUp = document.querySelector('.custom--container-add-item')
    const sectionPopUp2 = document.querySelector('.custom--container-warning')

    const addButton = document.querySelector(".custom--data-barang-table-wrapper--header button");
    const editButton = document.querySelector(".custom--container-data-barang .editIcon");
    const detailsButton = document.querySelector(".custom--container-data-barang .detailsIcon");
    const deleteButton = document.querySelector(".custom--container-data-barang .deleteIcon");

    const addPopup = document.querySelector('#add-item')
    const editPopup = document.querySelector('#edit-item')
    const detailsPopup = document.querySelector('#details-item')
    const deletePopup = document.querySelector('#delete-item')
    const warningBorrowed = document.querySelector('#borrowed')
    const warningExist = document.querySelector('#exist')
    const warningEmpty = document.querySelector('#empty')

    const closePopupButtons = document.querySelectorAll('.custom--close-button')
    const closePopupDetails = document.querySelector('#custom--close-details')

    closePopupButtons.forEach((button) => {
        button.addEventListener('click', (event) => {
            event.preventDefault()
            const showPopup = document.querySelectorAll('.show');
            showPopup.forEach((popup) => {
                popup.classList.remove('show')
            })
        })
    })

    closePopupDetails.addEventListener('click', () => {
        const showPopup = document.querySelectorAll('.show');
        showPopup.forEach((popup) => {
            popup.classList.remove('show')
        })
    })
    const popupController = (button, popup) => {
        button.addEventListener('click', () => {
            sectionPopUp.classList.toggle('show');
            popup.classList.toggle('show');
        })
    }

    popupController(addButton, addPopup);
    popupController(editButton, editPopup);
    popupController(detailsButton, detailsPopup);
    popupController(deleteButton, deletePopup);

    function deleteItem(id_barang) {
        console.log("Delete Item ID: " + id_barang);

        const modal = document.getElementById('delete-item');
        const closeButton = modal.querySelector('.custom--close-button');
        const deleteButton = modal.querySelector('.custom--delete-btn');

        sectionPopUp.classList.add('show');
        modal.classList.add('show');
        closeButton.onclick = function () {
            modal.classList.remove('show');
        };

        deleteButton.onclick = function () {
            fetch(`../public/dataBarang/deleteBarang/${id_barang}`, {
                method: 'DELETE',
            })
            .then(response => response.json())
            .then(response => {
                if (response.status === 'success') {
                    console.log("Item deleted successfully");
                    window.location.href = '../public/dataBarang';
                } else if (response.status === 'warning') {
                    sectionPopUp2.classList.add('show');
                    setTimeout(() => {
                    sectionPopUp2.style.top = '1rem';
                    warningBorrowed.classList.add('show');

                    // Hide the warning pop-up after 1 second with a slide-up animation
                    setTimeout(() => {
                        sectionPopUp2.style.transition = 'top 0.5s ease';
                        sectionPopUp2.style.top = '-8.8rem'; 
                    }, 1800);

                    // Remove the 'show' class after the slide-up animation is complete
                    setTimeout(() => {
                        warningBorrowed.classList.remove('show');
                        sectionPopUp2.classList.remove('show');
                        sectionPopUp2.style.transition = ''; // Reset transition property
                    }, 2300); 
                    }, 100); 
                } else {
                    console.error("Failed to delete item");
                }
            })
            .catch(error => {
                console.error("Error during deletion:", error);
            });

            sectionPopUp.classList.remove('show');
            modal.classList.remove('show');
        };
    }


    function editItem(id_barang) {
        console.log("Edit Item ID: " + id_barang);
        sectionPopUp.classList.add('show');
        editPopup.classList.add('show');

        fetch(`../public/dataBarang/getBarangDetails/${id_barang}`)
            .then(response => response.json())
            .then(data => {
                console.log("Data received:", data);
                document.getElementById('kode_barang_edit').value = data.id_barang;
                document.getElementById('nama_barang_edit').value = data.nama_barang;
                document.getElementById('asal_edit').value = data.asal;
                document.getElementById('jumlah_edit').value = data.jumlah_tersedia;
                document.getElementById('jumlah_pemeliharaan_edit').value = data.jml_pemeliharaan;
                document.getElementById('keterangan_edit').innerText = data.kondisi_barang;
            })
            .catch(error => {
                console.error("Error fetching details:", error);
            });
    }

    function handleEditSubmit() {
        const id_barang = document.getElementById('kode_barang_edit').value;
        const nama_barang = document.getElementById('nama_barang_edit').value;
        const asal = document.getElementById('asal_edit').value;
        const jumlah = document.getElementById('jumlah_edit').value;
        const jumlah_pemeliharaan = document.getElementById('jumlah_pemeliharaan_edit').value;
        const keterangan = document.getElementById('keterangan_edit').value;

        fetch(`../public/dataBarang/updateItem`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `kode_barang=${id_barang}&nama_barang=${nama_barang}&asal=${asal}&jumlah=${jumlah}&jumlah_pemeliharaan=${jumlah_pemeliharaan}&keterangan=${keterangan}`,
        })
        .then(response => response.json())
        .then(response => {
            console.log(response);
            if (response.success) {
                window.location.href = './dataBarang';
            } else {
                console.error("Failed to update item");
            }
        })
        .catch(error => {
            console.error("Error updating item:", error);
        });
        sectionPopUp.classList.remove('show');
        editPopup.classList.remove('show');
    }

    const submitEditButton = document.getElementById('submit-edit');
    submitEditButton.addEventListener('click', handleEditSubmit);

    function handleAddSubmit(event) {
        event.preventDefault(); // Prevent the form from submitting

        const kode_barang = $('#kode_barang').val();
        const nama_barang = $('#nama_barang').val();
        const asal = $('#asal').val();
        const jumlah = $('#jumlah').val();
        const keterangan = $('#keterangan').val();

        $.ajax({
            type: 'POST',
            url: '../public/dataBarang/addBarang',
            data: {
                kode_barang: kode_barang,
                nama_barang: nama_barang,
                asal: asal,
                jumlah: jumlah,
                keterangan: keterangan
            },
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.status === 'empty') {
                    sectionPopUp2.classList.add('show');
                    setTimeout(() => {
                    sectionPopUp2.style.top = '1rem';
                    warningEmpty.classList.add('show');

                    // Hide the warning pop-up after 1 second with a slide-up animation
                    setTimeout(() => {
                        sectionPopUp2.style.transition = 'top 0.5s ease';
                        sectionPopUp2.style.top = '-8.8rem'; 
                    }, 1800);

                    // Remove the 'show' class after the slide-up animation is complete
                    setTimeout(() => {
                        warningEmpty.classList.remove('show');
                        sectionPopUp2.classList.remove('show');
                        sectionPopUp2.style.transition = ''; // Reset transition property
                    }, 2300); 
                    }, 100); 

                } else if (response.status === 'duplicate') {
                    sectionPopUp2.classList.add('show');
                    setTimeout(() => {
                    sectionPopUp2.style.top = '1rem';
                    warningExist.classList.add('show');

                    // Hide the warning pop-up after 1 second with a slide-up animation
                    setTimeout(() => {
                        sectionPopUp2.style.transition = 'top 0.5s ease';
                        sectionPopUp2.style.top = '-8.8rem'; 
                    }, 1800);

                    // Remove the 'show' class after the slide-up animation is complete
                    setTimeout(() => {
                        warningExist.classList.remove('show');
                        sectionPopUp2.classList.remove('show');
                        sectionPopUp2.style.transition = ''; // Reset transition property
                    }, 2300); 
                    }, 100); 
                } else if (response.status === 'success') {
                    $('#addBarangForm')[0].reset();
                    sectionPopUp.classList.remove('show');
                    addPopup.classList.remove('show');
                    location.reload();
                } else {
                    console.error('Failed to add item');
                }
            },
            error: function(xhr, status, error) {
                alert('Error adding item. Please try again.');
            }
        });
    }
    $('#addBarangForm').submit(handleAddSubmit);
    $('.custom--close-button').click(function() {
        $('#addBarangForm')[0].reset();
    });

    const submitAddButton = document.getElementById('submit-add');
    submitAddButton.addEventListener('click', handleAddSubmit);

    function showDetails(id_barang) {
        console.log("Show Details for Item ID: " + id_barang);

        sectionPopUp.classList.add('show');
        detailsPopup.classList.add('show');

        fetch(`../public/dataBarang/getBarangDetails/${id_barang}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('kode_barang_detail').value = data.id_barang;
                document.getElementById('nama_barang_detail').value = data.nama_barang;
                const tersedia = parseInt(document.getElementById('tersedia_detail').value);
                const dipinjam = parseInt(document.getElementById('dipinjam_detail').value);
                const pemeliharaan = parseInt(document.getElementById('pemeliharaan_detail').value);
                const jumlah = tersedia + dipinjam + pemeliharaan;
                document.getElementById('jumlah_detail').value = jumlah;
                document.getElementById('tersedia_detail').value = data.jumlah_tersedia;
                document.getElementById('dipinjam_detail').value = data.jumlah_dipinjam;
                document.getElementById('pemeliharaan_detail').value = data.jml_pemeliharaan;
                document.getElementById('keterangan-detail').innerText = data.kondisi_barang;
                console.log(data.kondisi_barang);
            })
            .catch(error => {
                console.error("Error fetching details:", error);
            });
    }

    document.addEventListener("DOMContentLoaded", function () {
        var editIcons = document.querySelectorAll(".editIcon");
        editIcons.forEach(function (editIcon) {
            editIcon.addEventListener("click", function () {
                var id_barang = editIcon.closest("tr").querySelector("[id^='kode']").innerText;
                editItem(id_barang);
            });
        });

        var detailsIcons = document.querySelectorAll(".detailsIcon");
        detailsIcons.forEach(function (detailsIcon) {
            detailsIcon.addEventListener("click", function () {
                var id_barang = detailsIcon.closest("tr").querySelector("[id^='kode']").innerText;
                showDetails(id_barang);
            });
        });

        var deleteIcons = document.querySelectorAll(".deleteIcon");
        deleteIcons.forEach(function (deleteIcon) {
            deleteIcon.addEventListener("click", function () {
                var id_barang = deleteIcon.closest("tr").querySelector("[id^='kode']").innerText;
                deleteItem(id_barang);
            });
        });
    });
</script>
