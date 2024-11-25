// Ambil elemen-elemen yang dibutuhkan
const popup = document.getElementById('popup');
const popupContent = document.querySelector('.popup-content');
const popupBtn = document.getElementById('popupBtn');
const closeBtn = document.getElementById('closeBtn');

// Tampilkan pop-up ketika tombol diklik
popupBtn.addEventListener('click', function() {
    popup.classList.add('active');
    popupContent.classList.add('active');
});

// Tutup pop-up ketika tombol close diklik
closeBtn.addEventListener('click', function() {
    popup.classList.remove('active');
    popupContent.classList.remove('active');
});

// Tutup pop-up jika user mengklik area di luar pop-up
window.addEventListener('click', function(event) {
    if (event.target === popup) {
        popup.classList.remove('active');
        popupContent.classList.remove('active');
    }
});

