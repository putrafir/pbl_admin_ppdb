var isClicked = false;
var isTolakCliked = false;
function changeColor() {
  if (!isTolakCliked) {
    var button = document.getElementById("myButton");
    var icon = document.getElementById("myIcon");
    var path = document.getElementById("myPath");
    var buttonText = document.getElementById("myButtonText");

    if (!isClicked) {
      button.style.backgroundColor = "#4ade80";
      button.style.color = "white";
      icon.setAttribute("class", "fill-white");
      path.setAttribute("fill", "#ffffff");
      buttonText.textContent = "Diterima";
      isClicked = true;
    } else {
      button.style.backgroundColor = "";
      button.style.color = "#384667";
      icon.setAttribute("class", "fill-dark");
      path.setAttribute("fill", "");
      buttonText.textContent = "Terima";
      isClicked = false;
    }
  }
}

function changeColor1() {
  if (!isClicked) {
    var button = document.getElementById("tolak");
    var icon = document.getElementById("tolakIcon");
    var path = document.getElementById("pathTolak");
    var teksTolak = document.getElementById("buttonTolak");

    if (!isTolakCliked) {
      button.style.backgroundColor = "#f87171";
      button.style.color = "white";
      icon.setAttribute("class", "fill-white");
      path.setAttribute("fill", "#ffffff");
      teksTolak.textContent = "Ditolak";
      isTolakCliked = true;
    } else {
      button.style.backgroundColor = "";
      button.style.color = "#384667";
      icon.setAttribute("class", "fill-dark");
      path.setAttribute("fill", "");
      teksTolak.textContent = "Tolak";
      isTolakCliked = false;
    }
  }
}

// fungsi untuk membuka modal dan menampilkan gambar dalam ukuran besar

function openModal(src) {
  var modal = document.getElementById("myModal");
  var modalImg = document.getElementById("img01");

  modal.style.display = "block";
  modalImg.src = src;
}

// fungsi untuk menutup modal
function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}
