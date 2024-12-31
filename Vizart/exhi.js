let currentSlide = 0; // Index slide saat ini

// Fungsi untuk berpindah slide
function moveSlides(direction) {
  const slides = document.querySelectorAll(".image-slide");
  const totalSlides = slides.length;

  currentSlide += direction; // Tambah atau kurangi index slide
  if (currentSlide < 0) currentSlide = totalSlides - 1; // Balik ke slide terakhir
  if (currentSlide >= totalSlides) currentSlide = 0; // Balik ke slide pertama

  updateSlider();
}

// Fungsi untuk update posisi slider
function updateSlider() {
  const slider = document.querySelector(".image-slider");
  const newTransformValue = -currentSlide * 100; // Geser slider
  slider.style.transform = `translateX(${newTransformValue}%)`;
}

// Fungsi untuk slide otomatis
function autoSlide() {
  moveSlides(1); // Pindah ke slide berikutnya
}

// Jalankan slide otomatis setiap 3 detik (3000 ms)
setInterval(autoSlide, 3000);

// Pastikan slider diupdate saat DOM siap
document.addEventListener("DOMContentLoaded", updateSlider);
