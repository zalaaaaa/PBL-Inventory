<link rel="stylesheet" href="./index2.css">
<section class="custom--pilih-barang-main-container">
    <header class="custom--header-pilih-barang">
        <h1>Selamat Datang di SIVENTI 👋</h1>
        <p>Silakan cari barang yang ingin Anda pinjam, pilih yang Anda perlukan, dan tentukan jumlahnya!</p>
    </header>
    <div class="custom--body-pilih-barang-container">
        <div class="custom--list-items-pilih-barang">
            <header class="custom--list-barang-dipilih-header">
                <label for="">Barang yang dipilih</label>
                <button>Lanjut</button>
            </header>
            <div class="custom--list-barang-dipilih-body">
                <!-- Tidak ada barang yang dipilih -->
                <!-- <div class="custom--card-checkout">
                    <div class="custom--card-checkout-left">
                        <div style="font-size: 12px;">RMT01</div>
                        <div style="font-size: 20px; font-weight: 600;">Remote AC</div>
                        <div style="font-size: 14px;">Pak Wardi</div>
                    </div>
                    <div class="custom--card-checkout-right">
                        <div style="font-size: 12px;">Jumlah</div>
                        <div style="font-size: 20px; font-weight: 600;" class="custom--total-card-qty">
                            1
                        </div>
                    </div>
                    <button class="custom--button-uncheckout"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0C4.49 0 0 4.49 0 10C0 15.51 4.49 20 10 20C15.51 20 20 15.51 20 10C20 4.49 15.51 0 10 0ZM13.36 12.3C13.65 12.59 13.65 13.07 13.36 13.36C13.21 13.51 13.02 13.58 12.83 13.58C12.64 13.58 12.45 13.51 12.3 13.36L10 11.06L7.7 13.36C7.55 13.51 7.36 13.58 7.17 13.58C6.98 13.58 6.79 13.51 6.64 13.36C6.35 13.07 6.35 12.59 6.64 12.3L8.94 10L6.64 7.7C6.35 7.41 6.35 6.93 6.64 6.64C6.93 6.35 7.41 6.35 7.7 6.64L10 8.94L12.3 6.64C12.59 6.35 13.07 6.35 13.36 6.64C13.65 6.93 13.65 7.41 13.36 7.7L11.06 10L13.36 12.3Z" fill="#FCD106" />
                        </svg>
                    </button>
                </div> -->
            </div>
        </div>
        <div class="custom--container-list-pilih-data-barang">
            <div class="custom--search-list-items-pilih-barang">
                <div>Data Barang</div>
                <div class="custom--input-search-pilih-barang">
                    <input type="text" placeholder="Cari Nama Barang">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5 22.25C5.85 22.25 1.25 17.65 1.25 12C1.25 6.35 5.85 1.75 11.5 1.75C17.15 1.75 21.75 6.35 21.75 12C21.75 17.65 17.15 22.25 11.5 22.25ZM11.5 3.25C6.67 3.25 2.75 7.18 2.75 12C2.75 16.82 6.67 20.75 11.5 20.75C16.33 20.75 20.25 16.82 20.25 12C20.25 7.18 16.33 3.25 11.5 3.25Z" fill="#121212" />
                        <path d="M21.9999 23.25C21.8099 23.25 21.6199 23.18 21.4699 23.03L19.4699 21.03C19.1799 20.74 19.1799 20.26 19.4699 19.97C19.7599 19.68 20.2399 19.68 20.5299 19.97L22.5299 21.97C22.8199 22.26 22.8199 22.74 22.5299 23.03C22.3799 23.18 22.1899 23.25 21.9999 23.25Z" fill="#121212" />
                    </svg>
                </div>
            </div>

            <table class="custom--table-pilih-barang">
                <tr>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Nama Pengelola</th>
                    <th>Tersedia</th>
                    <th>Pilih</th>
                </tr>
                <tr>
                    <td id="kode1">RMT01</td>
                    <td id="nama1">Remote AC</td>
                    <td id="pengelola1">Pak Wardi</td>
                    <td id="tersedia1">9</td>
                    <td>
                        <div class="custom--container-tambah-barang" id="barang1">
                            <button onclick="increment(this,'decButton1','totalPilihBarang1','tersedia1'); scroollTo('totalPilihBarang1', 'barang1', 'indecrement1'); addToCheckout('kode1', 'nama1', 'pengelola1', 'tersedia1', 'totalPilihBarang1', 'tersedia1', 'totalPilihBarang1', 'barang1', 'indecrement1', 'decButton1', 'incButton1');renderCard()">Tambah</button>
                            <div class="custom--indecrement" id="indecrement1">
                                <button onclick="decrement(this,'incButton1', 'totalPilihBarang1', 'tersedia1'); scroollTo('totalPilihBarang1', 'barang1', 'indecrement1'); minToCheckout('kode1', 'nama1', 'pengelola1', 'tersedia1', 'totalPilihBarang1');renderCard()" class="items" id="decButton1">-</button>
                                <input id="totalPilihBarang1" class="items" type="text" value="0">
                                <button onclick="increment(this,'decButton1','totalPilihBarang1','tersedia1'); addToCheckout('kode1', 'nama1', 'pengelola1', 'tersedia1', 'totalPilihBarang1', 'tersedia1', 'totalPilihBarang1', 'barang1', 'indecrement1', 'decButton1', 'incButton1'); renderCard()" class="items" id="incButton1">+</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="kode2">RMT03</td>
                    <td id="nama2">Remote AC</td>
                    <td id="pengelola2">Pak Wardi</td>
                    <td id="tersedia2">9</td>
                    <td>
                        <div class="custom--container-tambah-barang" id="barang2">
                            <button onclick="increment(this,'decButton2','totalPilihBarang2', 'tersedia2'); scroollTo('totalPilihBarang2', 'barang2', 'indecrement2'); addToCheckout('kode2', 'nama2', 'pengelola2', 'tersedia2', 'totalPilihBarang2', 'tersedia2', 'totalPilihBarang2', 'barang2', 'indecrement2', 'decButton2', 'incButton2');renderCard()">Tambah</button>
                            <div class="custom--indecrement" id="indecrement2">
                                <button onclick="decrement(this,'incButton2', 'totalPilihBarang2','tersedia2'); scroollTo('totalPilihBarang2', 'barang2', 'indecrement2'); minToCheckout('kode2', 'nama2', 'pengelola2', 'tersedia2', 'totalPilihBarang2');renderCard()" class="items" id="decButton2">-</button>
                                <input id="totalPilihBarang2" class="items" type="text" value="0">
                                <button onclick="increment(this,'decButton2','totalPilihBarang2', 'tersedia2'); addToCheckout('kode2', 'nama2', 'pengelola2', 'tersedia2', 'totalPilihBarang2', 'tersedia2', 'totalPilihBarang2', 'barang2', 'indecrement2', 'decButton2', 'incButton2'); renderCard()" class="items" id="incButton2">+</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</section>
<script>
    let total = 0;
    let checkoutItems = [];
    const buttonLanjut = document.querySelector('.custom--list-barang-dipilih-header > button')
    buttonLanjut.disabled = true;

    const increment = (button, buttonMin, idTarget, totalMax) => {
        let max = parseInt(document.querySelector(`#${totalMax}`).textContent)
        const minButton = document.querySelector(`#${buttonMin}`);
        const target = document.querySelector(`#${idTarget}`)
        let tmp = parseInt(target.value)
        tmp++
        console.log(max);
        console.log(tmp);
        if (max <= tmp) {
            button.disabled = true
            target.value = tmp;
        } else {
            minButton.disabled = false;
            button.disabled = false
            target.value = tmp;
        }
    }
    const decrement = (button, buttonPlus, idTarget, totalMax) => {
        let max = parseInt(document.querySelector(`#${totalMax}`).textContent)
        const plusButton = document.querySelector(`#${buttonPlus}`);
        const target = document.querySelector(`#${idTarget}`)
        let tmp = parseInt(target.value)
        tmp--
        button.disabled = false
        plusButton.disabled = false
        target.value = tmp;
    }

    const scroollTo = (idDependencies, target1, target2) => {
        const targetTop = document.querySelector(`#${target1} > button`);
        const targetBottom = document.querySelector(`#${target2}`);
        let dependencies = document.querySelector(`#${idDependencies}`).value;

        if (dependencies > 0) {
            targetBottom.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        } else {
            targetTop.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    }

    const addToCheckout = (kode, nama, pengelola, tersedia, jumlah, asalTersedia, asalTotalBarang, target1, target2, buttonMin, buttonPlus) => {
        const kodeBarang = document.querySelector(`#${kode}`);
        const namaBarang = document.querySelector(`#${nama}`);
        const namaPengelola = document.querySelector(`#${pengelola}`);
        const jumlahTersedia = document.querySelector(`#${tersedia}`);
        let jumlahCheckout = parseInt(document.querySelector(`#${jumlah}`).value);


        const objectIndex = checkoutItems.findIndex(item => item.kodeBarang == kodeBarang.textContent);

        if (objectIndex !== -1) {
            checkoutItems[objectIndex].jumlahCheckout += 1;
        } else {
            checkoutItems.push({
                kodeBarang: kodeBarang.textContent,
                namaBarang: namaBarang.textContent,
                namaPengelola: namaPengelola.textContent,
                jumlahCheckout,
                asalTersedia,
                asalTotalBarang,
                target1,
                target2,
                buttonMin,
                buttonPlus
            });
        }

        if (lanjut()) {
            buttonLanjut.disabled = false;
            buttonLanjut.classList.add('active')
        } else {
            buttonLanjut.disabled = true;
            buttonLanjut.classList.remove('active')
        }
        // jumlahTersedia.textContent = parseInt(jumlahTersedia.textContent) - 1

    }

    const minToCheckout = (kode, nama, pengelola, tersedia, jumlah) => {
        const kodeBarang = document.querySelector(`#${kode}`);
        const namaBarang = document.querySelector(`#${nama}`);
        const namaPengelola = document.querySelector(`#${pengelola}`);
        const jumlahTersedia = document.querySelector(`#${tersedia}`);
        let jumlahCheckout = parseInt(document.querySelector(`#${jumlah}`).value);

        const objectIndex = checkoutItems.findIndex(item => item.kodeBarang == kodeBarang.textContent);

        if (objectIndex !== -1) {
            checkoutItems[objectIndex].jumlahCheckout -= 1;
            if (checkoutItems[objectIndex].jumlahCheckout <= 0) {
                checkoutItems = checkoutItems.filter(objek => objek.jumlahCheckout !== 0);
            }
        }

        if (lanjut()) {
            buttonLanjut.disabled = false;
            buttonLanjut.classList.add('active')
        } else {
            buttonLanjut.disabled = true;
            buttonLanjut.classList.remove('active')
        }
        // jumlahTersedia.textContent = parseInt(jumlahTersedia.textContent) + 1

    }

    const deleteCheckoutItem = (kode, tersedia, jumlah, target1, target2, buttonMin, buttonPlus) => {
        const jumlahTersedia = document.querySelector(`#${tersedia}`);
        let jumlahCheckout = document.querySelector(`#${jumlah}`);
        const targetBottom = document.querySelector(`#${target2}`);
        const targetTop = document.querySelector(`#${target1} > button`);
        const minButton =document.querySelector(`#${buttonMin}`)
        const plusButton =document.querySelector(`#${buttonPlus}`)

        const objectIndex = checkoutItems.findIndex(item => item.kodeBarang == kode);

        if (objectIndex !== -1) {
            checkoutItems = checkoutItems.filter(objek => objek.kodeBarang !== kode);
            // const tmp = parseInt(jumlahTersedia.textContent) + parseInt(jumlahCheckout.value)
            // jumlahTersedia.textContent = tmp;
            jumlahCheckout.value = 0;
        }
        if (jumlahCheckout.value > 0) {
            targetBottom.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        } else {
            targetTop.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
        renderCard()
        minButton.disabled = false;
        plusButton.disabled = false;
        if (lanjut()) {
            buttonLanjut.disabled = false;
            buttonLanjut.classList.add('active')
        } else {
            buttonLanjut.disabled = true;
            buttonLanjut.classList.remove('active')
        }
    }

    const renderCard = () => {
        const container = document.querySelector('.custom--list-barang-dipilih-body');

        container.innerHTML = '';
        checkoutItems.forEach((itemCard) => {
            if (itemCard.jumlahCheckout <= 0) {
                return;
            } else {
                container.innerHTML += `
                    <div class="custom--card-checkout">
                            <div class="custom--card-checkout-left">
                                <div style="font-size: 12px;">${itemCard.kodeBarang}</div>
                                <div style="font-size: 20px; font-weight: 600;">${itemCard.namaBarang}</div>
                                <div style="font-size: 14px;">${itemCard.namaPengelola}</div>
                            </div>
                            <div class="custom--card-checkout-right">
                                <div style="font-size: 12px;">Jumlah</div>
                                <div style="font-size: 20px; font-weight: 600;" class="custom--total-card-qty">
                                    ${itemCard.jumlahCheckout}
                                </div>
                            </div>
                            <button  onclick = "deleteCheckoutItem('${itemCard.kodeBarang}', '${itemCard.asalTersedia}', '${itemCard.asalTotalBarang}', '${itemCard.target1}', '${itemCard.target2}', '${itemCard.buttonMin}', '${itemCard.buttonPlus}')" class="custom--button-uncheckout"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 0C4.49 0 0 4.49 0 10C0 15.51 4.49 20 10 20C15.51 20 20 15.51 20 10C20 4.49 15.51 0 10 0ZM13.36 12.3C13.65 12.59 13.65 13.07 13.36 13.36C13.21 13.51 13.02 13.58 12.83 13.58C12.64 13.58 12.45 13.51 12.3 13.36L10 11.06L7.7 13.36C7.55 13.51 7.36 13.58 7.17 13.58C6.98 13.58 6.79 13.51 6.64 13.36C6.35 13.07 6.35 12.59 6.64 12.3L8.94 10L6.64 7.7C6.35 7.41 6.35 6.93 6.64 6.64C6.93 6.35 7.41 6.35 7.7 6.64L10 8.94L12.3 6.64C12.59 6.35 13.07 6.35 13.36 6.64C13.65 6.93 13.65 7.41 13.36 7.7L11.06 10L13.36 12.3Z" fill="#FCD106" />
                                </svg>
                            </button>
                        </div>
                    `
            }
        })
    }


    const lanjut = () => checkoutItems.length ? true : false;
</script>