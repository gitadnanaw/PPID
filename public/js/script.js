/*HAMBURGER MENU*/

const drawerButton = document.querySelector("#drawer-button");
const drawerNavigation = document.querySelector("#main-nav");

drawerButton.addEventListener("click", () => {
  drawerNavigation.classList.toggle("open");
});

document.body.addEventListener("click", (event) => {
  if (
    !drawerNavigation.contains(event.target) &&
    !drawerButton.contains(event.target)
  ) {
    drawerNavigation.classList.remove("open");
  }
});

/*TANGGAL REAL TIME*/
function getCurrentDate() {
  const currentDate = new Date();
  const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
  const months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
  ];
  const day = days[currentDate.getDay()];
  const date = currentDate.getDate();
  const month = months[currentDate.getMonth()];
  const year = currentDate.getFullYear();
  const formattedDate = `${day}, ${date} ${month} ${year}`;
  return formattedDate;
}

// Fungsi untuk memperbarui waktu secara real-time
function updateCurrentDate() {
  const currentDateElement = document.getElementById("current-date");
  currentDateElement.textContent = getCurrentDate();
}

// Panggil fungsi updateCurrentDate saat halaman dimuat
document.addEventListener("DOMContentLoaded", () => {
  updateCurrentDate();
  // Gunakan setInterval untuk memperbarui waktu setiap detik
  setInterval(updateCurrentDate, 1000);
});

/*HALAMAN INFORMASI PUBLIK*/
// Fungsi untuk menampilkan tabel yang dipilih dan menyembunyikan yang lainnya
function toggleTable(tableId) {
  // Mengambil semua tabel
  var tables = document.querySelectorAll(".tableIP");

  // Menyembunyikan semua tabel
  tables.forEach(function (table) {
    table.style.display = "none";
  });

  // Menampilkan tabel dengan ID yang dipilih
  var table = document.getElementById(tableId);
  if (table) {
    table.style.display = "table";
  }
}

// Menambahkan event listener untuk tombol pertama
document.getElementById("button1").addEventListener("click", function () {
  toggleTable("myTable");
});

// Menambahkan event listener untuk tombol kedua
document.getElementById("button2").addEventListener("click", function () {
  toggleTable("myTable2");
});

// Menambahkan event listener untuk tombol ketiga
document.getElementById("button3").addEventListener("click", function () {
  toggleTable("myTable3");
});

// Menambahkan event listener untuk tombol keempat
document.getElementById("button4").addEventListener("click", function () {
  toggleTable("myTable4");
});

// Menambahkan event listener untuk tombol keempat
document.getElementById("button5").addEventListener("click", function () {
  toggleTable("myTable5");
});

// Menambahkan event listener untuk tombol keempat
document.getElementById("button6").addEventListener("click", function () {
  toggleTable("myTable6");
});

// Menambahkan event listener untuk tombol keempat
document.getElementById("button7").addEventListener("click", function () {
  toggleTable("myTable7");
});

/*HALAMAN FAQ*/
function toggleKeterangan(id) {
  var keterangan1 = document.getElementById("keterangan1");
  var keterangan2 = document.getElementById("keterangan2");
  var keterangan3 = document.getElementById("keterangan3");
  var keterangan4 = document.getElementById("keterangan4");

  if (id === "keterangan1") {
    keterangan1.style.display = "block";
    keterangan2.style.display = "none";
    keterangan3.style.display = "none";
    keterangan4.style.display = "none";
  } else if (id === "keterangan2") {
    keterangan1.style.display = "none";
    keterangan2.style.display = "block";
    keterangan3.style.display = "none";
    keterangan4.style.display = "none";
  } else if (id === "keterangan3") {
    keterangan1.style.display = "none";
    keterangan2.style.display = "none";
    keterangan3.style.display = "block";
    keterangan4.style.display = "none";
  } else if (id === "keterangan4") {
    keterangan1.style.display = "none";
    keterangan2.style.display = "none";
    keterangan3.style.display = "none";
    keterangan4.style.display = "block";
  }
}

/*HALAMAN GALERI*/
