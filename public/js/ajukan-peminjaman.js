let modal = document.getElementById("myModal");
let btn = document.getElementById("modal");
let span = document.getElementsByClassName("close")[0];

span.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

function updateFinishDate() {
  let startDate = new Date(document.getElementById("startDate").value);
  let inputState = document.getElementById("inputState");
  let selectedDays = parseInt(
    inputState.options[inputState.selectedIndex].value
  );

  if (!isNaN(startDate.getTime())) {
    let finishDate = new Date(startDate);
    finishDate.setDate(finishDate.getDate() + selectedDays);
    let yyyy = finishDate.getFullYear();
    let mm = ("0" + (finishDate.getMonth() + 1)).slice(-2);
    let dd = ("0" + finishDate.getDate()).slice(-2);
    document.getElementById("finishDate").value = yyyy + "-" + mm + "-" + dd;
  }
}

const backPage = () => {
  window.location.href = "../ajukanPeminjaman";
};

function createObjectsFromTable(tableId) {
  let dataObjects = [];

  let table = document.querySelector(tableId);
  let rowsHeader = table.querySelectorAll("thead")[0].querySelectorAll("th");
  let rows = table.querySelectorAll("tbody")[0].querySelectorAll("tr");

  for (let i = 0; i < rows.length; i++) {
    let rowData = {};
    let cells = rows[i].querySelectorAll("td");
    for (let j = 0; j < cells.length; j++) {
      let columnName = table
        .querySelectorAll("tbody")[0]
        .querySelectorAll("tr")[0]
        .querySelectorAll("td")
        [j].textContent.toLowerCase();
      rowData[rowsHeader[j].textContent] = cells[j].innerText;
    }
    dataObjects.push(rowData);
  }

  return dataObjects;
}

const dataSent = () => {
  const nama = document.querySelector("#nama").value;
  const nomor_identitas = document.querySelector("#nomor_identitas").value;
  const alasan = document.querySelector("#alasan").value;
  const startDate = document.querySelector("#startDate").value;
  const endDate = document.querySelector("#finishDate").value;

  const formValue = {
    nama,
    nomor_identitas,
    alasan,
    startDate,
    endDate,
  };
  const dataListBarang = createObjectsFromTable("#formPeminjaman");

  return {
    formValue,
    dataListBarang,
  };
};

const succesPopup = document.querySelector("#modalSuccess");
const errorPopup = document.querySelector("#modalError");
$(document).ready(function () {
  $("#modal").click(function () {
    // Menggunakan jQuery Ajax
    $.ajax({
      type: "POST", // Metode pengiriman data
      url: "processPinjam", // URL ke server PHP
      data: dataSent(), // Data yang akan dikirim
      contentType: "application/x-www-form-urlencoded",
      dataType: "json",
      success: function (res) {
        deleteCookie("myCookie");
        if (res.status == "success") modal.style.display = "block";
      },
      error: function (res) {
        console.log(response);
      },
    });
  });
});

const redirectToBarangDipinjam = () => {
  window.location.href = "../barangDipinjam";
};

document.querySelector("#successModalButton").addEventListener("click", () => {
  redirectToBarangDipinjam();
});

function deleteCookie(name) {
  document.cookie =
    name +
    "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/PBL-Inventory/public;";
}