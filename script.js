// ==========================================
// 1. SLIDER PENGALAMAN & PENDIDIKAN (2 SLIDE)
// ==========================================
var divPengalaman = document.getElementById('pengalaman');
var divPendidikan = document.getElementById('pendidikan');

var btnExpBalik = document.getElementById('exp-balik');
var btnExpLanjut = document.getElementById('exp-lanjut');
var teksExpNomor = document.getElementById('exp-nomor');

var posisiExp = 1;

// Tombol Lanjut (Exp & Edu)
btnExpLanjut.addEventListener('click', function() {
  if (posisiExp < 2) {
    posisiExp = posisiExp + 1;
  } else {
    posisiExp = 1;
  }
  updateExp();
});

// Tombol Balik (Exp & Edu)
btnExpBalik.addEventListener('click', function() {
  if (posisiExp > 1) {
    posisiExp = posisiExp - 1;
  } else {
    posisiExp = 2;
  }
  updateExp();
});

function updateExp() {
  if (posisiExp === 1) {
    divPengalaman.style.display = "block";
    divPendidikan.style.display = "none";
    teksExpNomor.textContent = "1 / 2";
  } else if (posisiExp === 2) {
    divPengalaman.style.display = "none";
    divPendidikan.style.display = "block";
    teksExpNomor.textContent = "2 / 2";
  }
}


// ==========================================
// 2. SLIDER KUMPULAN KARYA (3 SLIDE)
// ==========================================
var karya1 = document.getElementById('karya1');
var karya2 = document.getElementById('karya2');
var karya3 = document.getElementById('karya3');

var btnKaryaBalik = document.getElementById('lanjut'); // ID 'lanjut' di HTML = ← Balik
var btnKaryaLanjut = document.getElementById('balik');  // ID 'balik' di HTML = Lanjut →
var teksKaryaNomor = document.getElementById('nomor');

var posisiKarya = 1;

// Tombol Lanjut (Karya)
btnKaryaLanjut.addEventListener('click', function() {
  if (posisiKarya < 3) {
    posisiKarya = posisiKarya + 1;
  } else {
    posisiKarya = 1;
  }
  updateKarya();
});

// Tombol Balik (Karya)
btnKaryaBalik.addEventListener('click', function() {
  if (posisiKarya > 1) {
    posisiKarya = posisiKarya - 1;
  } else {
    posisiKarya = 3;
  }
  updateKarya();
});

function updateKarya() {
  karya1.style.display = "none";
  karya2.style.display = "none";
  karya3.style.display = "none";

  if (posisiKarya === 1) {
    karya1.style.display = "block";
    teksKaryaNomor.textContent = "1 / 3";
  } else if (posisiKarya === 2) {
    karya2.style.display = "block";
    teksKaryaNomor.textContent = "2 / 3";
  } else if (posisiKarya === 3) {
    karya3.style.display = "block";
    teksKaryaNomor.textContent = "3 / 3";
  }
}

// Inisialisasi tampilan awal
updateExp();
updateKarya();