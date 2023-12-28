function ubahStatus(button) {
    var statusSpan = button.parentElement.nextElementSibling.querySelector("span");
    if (statusSpan.textContent !== "Selesai") {
        statusSpan.textContent = "Selesai";
        statusSpan.style.color = "green";
        button.style.pointerEvents = "none";
        button.style.opacity = "0.5";
    }
};

// Menginisialisasi status saat halaman dimuat
window.onload = function() {
    var statusSpans = document.querySelectorAll("span[id^='statusSpan']");
    var acceptButtons = document.querySelectorAll(".btn-outline-success");

    for (var i = 0; i < statusSpans.length; i++) {
        if (statusSpans[i].textContent === "Selesai") {
            acceptButtons[i].style.pointerEvents = "none";
            acceptButtons[i].style.opacity = "0.5";
        }
    }
};

document.getElementById("laporanButton").addEventListener("click", function() {
    // Mengarahkan ke file laporan.html
    window.location.href = "laporan.html";
});

document.getElementById("laporLink").addEventListener("click", function() {
    window.location.href = "laporan.html";
});

document.getElementById("eventLink").addEventListener("click", function() {
    window.location.href = "event.html";
});

document.getElementById("beritaLink").addEventListener("click", function() {
    window.location.href = "berita.html";
});

document.getElementById("artikelLink").addEventListener("click", function() {
    window.location.href = "artikel.html";
});

// Ambil semua elemen anchor dengan kelas nav-link
const navLinks = document.querySelectorAll('.nav-link');

// Loop melalui setiap elemen anchor
navLinks.forEach(link => {
    // Tambahkan event listener untuk setiap klik pada elemen anchor
    link.addEventListener('click', function() {
        // Hapus kelas active dari semua elemen anchor
        navLinks.forEach(item => {
            item.classList.remove('active');
        });

        // Tambahkan kelas active ke elemen anchor yang sedang diklik
        this.classList.add('active');
    });
});
