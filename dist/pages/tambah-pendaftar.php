<?php
include "../../service/database.php";

if (isset($_POST['upload'])) {
  $namaLengkap = $_POST['namaLengkap'];
  $jenisKelamin = $_POST['jenisKelamin'];
  $tanggalLahir = $_POST['tanggalLahir'];
  $alamat = $_POST['alamat'];
  $kota = $_POST['kota'];
  $nisn = $_POST['nisn'];
  $tempatLahir = $_POST['tempatLahir'];
  $agama = $_POST['agama'];
  $provinsi = $_POST['provinsi'];
  $telepon = $_POST['telepon'];



  $sql = "INSERT INTO data_diri (namaLengkap, jenisKelamin, tanggalLahir, alamat, kota, nisn, tempatLahir, agama, provinsi, telepon) VALUES ('$namaLengkap','$jenisKelamin','$tanggalLahir','$alamat','$kota', '$nisn','$tempatLahir','$agama','$provinsi','$telepon')";

  if ($db->query($sql)) {
    echo "oke mantap data ,asuk";
  } else {
    echo "data gagal masuk";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Pendaftar</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <!-- style -->
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/tabs.css" />
  <link rel="stylesheet" href="../css/berkas.css" />

  <!-- js -->
  <script src="../js/button.js"></script>

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="font-monserat">
  <!-- bg -->
  <div class="w-full h-[26rem] min-h-75" style="background-image: url(../../img/bg/tambah-pendaftar.png)">
    <div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
  </div>
  <!-- bg end -->

  <!-- side samping -->
  <div class="container">
    <aside class="fixed top-5 bottom-5 lg:left-5 p-2 w-[270px] overflow-y-auto text-center bg-white rounded-3xl shadow-xl">
      <div class="text-dark text-xl pt-4">
        <div class="mt-1 flex justify-center items-center py-3">
          <img src="../../img/logoSMA.png" alt="logo" class="w-8 mr-2" />
          <h1 class="font-semibold text-base">Admin Panel</h1>
        </div>

        <hr class="my-3 text-gray-600 mx-5" />
      </div>

      <!-- tombol -->
      <a href="../index.php">
        <div class="p-4 mt-3 flex items-center rounded-lg px-8 duration-300 cursor-pointer hover:bg-opacity-35 text-white">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.75 6.75C2.75 4.54086 4.54086 2.75 6.75 2.75H17.25C19.4591 2.75 21.25 4.54086 21.25 6.75V13.75C21.25 15.9591 19.4591 17.75 17.25 17.75H6.75C4.54086 17.75 2.75 15.9591 2.75 13.75V6.75Z" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M7 21.25H17" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M2.75 13.25H21.25" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M10 17.75L9 21.25M14 17.75L15 21.25" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          </svg>
          <span class="text-gray-600 ml-5 text-base text-sm">Dashboard</span>
        </div>
      </a>

      <!-- lihat calon -->
      <a href="./lihat-calon.php">
        <div class="p-4 flex items-center rounded-lg px-8 duration-300 cursor-pointer text-white">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.25 21.25C7.04086 21.25 5.25 19.4591 5.25 17.25V6.75C5.25 4.54086 7.04086 2.75 9.25 2.75H16.25C18.4591 2.75 20.25 4.54086 20.25 6.75V17.25C20.25 19.4591 18.4591 21.25 16.25 21.25H9.25Z" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <circle cx="12.75" cy="9.5" r="2" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M9.25 16.5C9.25 14.8431 10.5931 13.5 12.25 13.5H13.25C14.9069 13.5 16.25 14.8431 16.25 16.5" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M3.75 8H6.75" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M3.75 12H6.75" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M3.75 16H6.75" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          </svg>
          <span class="text-gray-600 ml-5 text-base text-sm">Lihat calon</span>
        </div>
      </a>
      <!-- calon diterima -->
      <a href="calon-diterima.html">
        <div class="p-4 flex items-center rounded-lg px-8 duration-300 cursor-pointer text-white">
          <svg width="24" height="24" class="ml-[0.5px]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.75 8.5C2.75 6.29086 4.54086 4.5 6.75 4.5H17.25C19.4591 4.5 21.25 6.29086 21.25 8.5V15.5C21.25 17.7091 19.4591 19.5 17.25 19.5H6.75C4.54086 19.5 2.75 17.7091 2.75 15.5V8.5Z" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <circle cx="9.5" cy="9.5" r="2" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M6 16.5C6 14.8431 7.34315 13.5 9 13.5H10C11.6569 13.5 13 14.8431 13 16.5" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M15 10.5H18" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M15 13.5H18" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          </svg>
          <span class="text-gray-600 ml-[19px] text-base text-sm">Calon diterima</span>
        </div>
      </a>

      <div class="p-4 flex items-center rounded-lg px-8 duration-300 cursor-pointer text-white">
        <svg width="20" height="22" class="ml-[3px]" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.2011 1.83334C12.2011 2.47636 11.9689 3.09304 11.5556 3.54772C11.1422 4.0024 10.5816 4.25783 9.99705 4.25783C9.41249 4.25783 8.85188 4.0024 8.43853 3.54772C8.02518 3.09304 7.79297 2.47636 7.79297 1.83334" stroke="#1068FF" stroke-width="1.32554" stroke-miterlimit="10" />
          <path d="M15.3311 16.103H17.3502C17.5008 16.1034 17.6461 16.0412 17.7566 15.9287C17.8672 15.8161 17.935 15.6617 17.9463 15.4965L18.3327 9.86746L16.879 4.47683C16.8432 4.32907 16.7594 4.20089 16.6434 4.11659L12.8054 1.94738C12.7168 1.87846 12.6122 1.83889 12.5038 1.83334H7.50666C7.39708 1.83371 7.28993 1.86881 7.19801 1.93442L3.36237 4.10363C3.2467 4.18829 3.16296 4.31633 3.12677 4.46387L1.66602 9.86746L2.06183 15.5069C2.07314 15.6721 2.14091 15.8265 2.25149 15.939C2.36207 16.0515 2.50728 16.1138 2.65791 16.1133H4.69589" stroke="#1068FF" stroke-width="1.32554" stroke-miterlimit="10" />
          <path d="M4.68164 9.34912V17.1422C4.68081 17.6716 4.86413 18.1813 5.19399 18.5668C5.52386 18.9523 5.97529 19.1844 6.45575 19.2155C7.59008 19.4427 8.74026 19.5607 9.89322 19.568H10.1076C11.2606 19.5608 12.4108 19.4428 13.5451 19.2155V19.2155C14.026 19.1851 14.478 18.9533 14.8083 18.5677C15.1387 18.1821 15.3223 17.672 15.3215 17.1422V9.34912" stroke="#1068FF" stroke-width="1.32554" stroke-miterlimit="10" stroke-linecap="round" />
        </svg>
        <span class="text-gray-600 ml-[24px] text-base text-sm">Ukuran baju</span>
      </div>
      <div class="p-4 flex items-center rounded-lg px-8 bg-blueFist bg-opacity-35 duration-300 cursor-pointer text-white">
        <svg width="24" height="24" class="ml-[1px]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.75 6.75C2.75 4.54086 4.54086 2.75 6.75 2.75H17.25C19.4591 2.75 21.25 4.54086 21.25 6.75V13.75C21.25 15.9591 19.4591 17.75 17.25 17.75H6.75C4.54086 17.75 2.75 15.9591 2.75 13.75V6.75Z" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M7 21.25H17" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M2.75 13.25H21.25" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M10 17.75L9 21.25M14 17.75L15 21.25" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
        </svg>
        <span class="text-gray-600 ml-5 text-base text-sm">Tambah pendaftar</span>
      </div>
    </aside>
  </div>
  <!-- sinde samping end -->

  <!-- konten -->
  <main class="-mt-[390px] ml-80 h-full">
    <div class="flex">
      <div class="w-full w-1/2 flex-none">
        <ol>
          <li class="text-sm text-slate-300">Pages</li>
          <li class="font-semibold text[1rem] text-white">
            Tambah pendaftar
          </li>
        </ol>
      </div>

      <form class="grow absolute pl-[34rem]">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
          </div>
          <input type="search" id="default-search" class="block w-[30rem] h-10 p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search" required />

          <button type="submit" class="text-white text-[12px] h-8 absolute end-1 bottom-1 bg-blueFist hover:bg-bluSecond focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full px-4 py-2">
            Search
          </button>
        </div>
      </form>

      <!-- profile -->
      <div class="absolute pl-[65rem] cursor-pointer flex-none">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16 15.1739C20.3386 15.1739 24 15.8789 24 18.599C24 21.32 20.3146 22 16 22C11.6624 22 8 21.295 8 18.575C8 15.8539 11.6854 15.1739 16 15.1739ZM16 2C18.9391 2 21.294 4.35402 21.294 7.29105C21.294 10.2281 18.9391 12.5831 16 12.5831C13.0619 12.5831 10.706 10.2281 10.706 7.29105C10.706 4.35402 13.0619 2 16 2Z" fill="white" fill-opacity="0.87" />
        </svg>
      </div>
    </div>

    <!-- profile konten -->
    <div class="flex flex-col w-[68rem]">
      <div class="h-[6rem] mt-8 bg-white shadow-lg rounded-2xl">
        <div class="flex items-center my-[10px] mx-2 justify-center w-20">
          <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-20 rounded-lg cursor-pointer">
            <div id="dropzone-image" class="flex flex-col items-center justify-center pt-5 pb-6">
              <div class="w-20 h-20 flex justify-center items-center bg-cover bg-center" style="background-image: url(../../img/profil/foto.png)"></div>
            </div>
            <input id="dropzone-file" type="file" class="hidden" />
          </label>

          <div class="absolute ml-[26rem] mb-2">
            <h2 class="font-semibold text-dark">Unggah Foto</h2>
            <h5 class="text-secondary text-sm pt-1">
              Klik gambar disamping untuk mengunggah
            </h5>
          </div>
        </div>

        <div class="-mt-[88px] px-[13px] flex">
          <div class="absolute end-12 py-[16px] flex gap-1">
            <div class="group">
              <button id="tolak" onclick="changeColor1()" type="button" class="px-3 py-2 h-10 text-xs font-medium text-center inline-flex items-center text-dark bg-dark bg-opacity-10 rounded-xl">
                <svg id="tolakIcon" class="fill-dark" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path id="pathTolak" fill-rule="evenodd" clip-rule="evenodd" d="M16.2426 7.75736C16.6332 8.14788 16.6332 8.78104 16.2426 9.17157L13.4142 12L16.2426 14.8284C16.6332 15.2189 16.6332 15.8521 16.2426 16.2426C15.8521 16.6332 15.219 16.6332 14.8284 16.2426L12 13.4142L9.17157 16.2426C8.78105 16.6332 8.14788 16.6332 7.75736 16.2426C7.36684 15.8521 7.36684 15.2189 7.75736 14.8284L10.5858 12L7.75736 9.17157C7.36684 8.78105 7.36684 8.14788 7.75736 7.75736C8.14788 7.36683 8.78105 7.36683 9.17157 7.75736L12 10.5858L14.8284 7.75736C15.219 7.36683 15.8521 7.36683 16.2426 7.75736Z" />
                </svg>
                <span id="buttonTolak"> Hapus </span>
              </button>
            </div>

            <div class="group">
              <button id="myButton" onclick="changeColor()" type="button" class="px-3 py-2 h-10 text-xs font-medium text-center inline-flex items-center text-dark bg-dark bg-opacity-10 rounded-xl">
                <svg id="myIcon" class="fill-dark" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path id="myPath" fill-rule="evenodd" clip-rule="evenodd" d="M18.0096 7.75789C18.4001 8.14841 18.4001 8.78158 18.0096 9.1721L10.9396 16.2421C10.7521 16.4296 10.4977 16.535 10.2325 16.535C9.96729 16.535 9.71294 16.4296 9.5254 16.2421L5.9904 12.7071C5.59988 12.3166 5.59988 11.6834 5.9904 11.2929C6.38093 10.9024 7.01409 10.9024 7.40462 11.2929L10.2325 14.1208L16.5954 7.75789C16.9859 7.36737 17.6191 7.36737 18.0096 7.75789Z" />
                </svg>
                <span id="myButtonText"> Tambah </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container pt-6">
      <div class="bg-white w-[68rem] shadow-lg rounded-xl">
        <div class="flex font-semibold relative text-secondary gap-12 w-full py-4 px-6">
          <button id="button" class="active">Data Diri Calon</button>
          <button id="button">Data Orang Tua</button>
          <button id="button">Asal Sekolah</button>
          <button id="button">Berkas</button>
          <div class="line absolute bg-blueFist rounded-full transition-all duration-300 ease-in-out"></div>
        </div>
        <hr class="pb-4 border-t-2 border-secondary opacity-25" />
        <div class="contentBox px-6">
          <div class="content text-dark active">
            <form class="max-w-sm mt-6 pb-7" action="./tambah-pendaftar.php" method="POST">
              <div class="grid-cols-2 w-[60rem] grid gap-x-20">
                <div class="mb-5">
                  <label for="nama" class="block mb-2 text-sm font-medium">Nama lengkap</label>
                  <input id="nama" name="namaLengkap" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="gender" class="block mb-2 text-sm font-medium">Jenis kelamin</label>
                  <input name="jenisKelamin" type="gender" id="gender" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                  <div class="caret"></div>
                </div>
                <div class="mb-5">
                  <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Tanggal lahir</label>
                  <input name="tanggalLahir" type="tanggalLahir" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="alamat" class="block mb-2 text-sm font-medium">Alamat</label>
                  <input name="alamat" type="alamat" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="repeat-password" class="block mb-2 text-sm font-medium">Kota/kabupaten</label>
                  <input name="kota" type="text" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="password" class="block mb-2 text-sm font-medium">NISN</label>
                  <input name="nisn" type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="tempatLahir" class="block mb-2 text-sm font-medium">Tempat lahir</label>
                  <input name="tempatLahir" type="tempatLahir" id="tempatLahir" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="agama" class="block mb-2 text-sm font-medium">Agama</label>
                  <input name="agama" type="agama" id="agama" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="provinsi" class="block mb-2 text-sm font-medium">Provinsi</label>
                  <input name="provinsi" type="provinsi" id="provinsi" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="telepon" class="block mb-2 text-sm font-medium">Telepon</label>
                  <input name="telepon" type="telepon" id="telepon" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
              </div>
              <button name="upload" type="submit" class="block mt-6 mx-[40%] text-white bg-blueFist hover:bg-bluSecond focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Upload
              </button>

            </form>
          </div>
          <div class="content text-dark">
            <form class="max-w-sm mt-6 pb-2">
              <div class="grid-cols-2 w-[60rem] grid gap-x-20">
                <div class="mb-5">
                  <label for="nama" class="block mb-2 text-sm font-medium">Nama ayah</label>
                  <input id="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>
                <div class="mb-5">
                  <label for="gender" class="block mb-2 text-sm font-medium">NIK ayah</label>
                  <input type="gender" id="gender" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Pekerjaan ayah</label>
                  <input type="tanggalLahir" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="alamat" class="block mb-2 text-sm font-medium">Telepon ayah</label>
                  <input type="alamat" id="alamat" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="repeat-password" class="block mb-2 text-sm font-medium">Alamat ayah</label>
                  <input type="password" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="password" class="block mb-2 text-sm font-medium">Usia</label>
                  <input type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="tempatLahir" class="block mb-2 text-sm font-medium">Nama ibu</label>
                  <input type="tempatLahir" id="tempatLahir" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="agama" class="block mb-2 text-sm font-medium">NIK ibu</label>
                  <input type="agama" id="agama" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="provinsi" class="block mb-2 text-sm font-medium">Pekerjaan ibu</label>
                  <input type="provinsi" id="provinsi" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="telepon" class="block mb-2 text-sm font-medium">Telepon ibu</label>
                  <input type="telepon" id="telepon" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="provinsi" class="block mb-2 text-sm font-medium">Alamat ibu</label>
                  <input type="provinsi" id="provinsi" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="telepon" class="block mb-2 text-sm font-medium">Usia</label>
                  <input type="telepon" id="telepon" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
              </div>
            </form>
          </div>
          <div class="content text-dark">
            <form class="max-w-sm mt-6 pb-2">
              <div class="grid-cols-2 w-[60rem] grid gap-x-20">
                <div class="mb-5">
                  <label for="nama" class="block mb-2 text-sm font-medium">Provinsi SMP</label>
                  <input id="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="gender" class="block mb-2 text-sm font-medium">Kota/kabupaten SMP</label>
                  <input type="gender" id="gender" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="tanggalLahir" class="block mb-2 text-sm font-medium">Asal SMP</label>
                  <input type="tanggalLahir" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
                <div class="mb-5">
                  <label for="alamat" class="block mb-2 text-sm font-medium">Alamat SMP</label>
                  <input type="alamat" id="alamat" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>
              </div>
            </form>
          </div>
          <div class="content ml-4 text-dark">
            <div class="pt-4">
              <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">IJAZAH/SKL SMP</label>
              <input class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file" />
              <div class="w-[114px] h-[43px] -ml-[1.26rem] text-white absolute rounded-l-lg bg-blueFist -mt-[42.8px] cursor-pointer overflow-hidden">
                <label for="file_input" type="file" class="flex justify-center my-3 text-sm font-medium">Pilih File</label>
              </div>
            </div>
            <div class="pt-4">
              <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">PAS FOTO</label>
              <input class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file" />
              <div class="w-[114px] h-[43px] -ml-[1.26rem] text-white absolute rounded-l-lg bg-blueFist -mt-[42.8px] cursor-pointer overflow-hidden">
                <label for="file_input" type="file" class="flex justify-center my-3 text-sm font-medium">Pilih File</label>
              </div>
            </div>
            <div class="pt-4">
              <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">KARTU KELUARGA</label>
              <input class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file" />
              <div class="w-[114px] h-[43px] -ml-[1.26rem] text-white absolute rounded-l-lg bg-blueFist -mt-[42.8px] cursor-pointer overflow-hidden">
                <label for="file_input" type="file" class="flex justify-center my-3 text-sm font-medium">Pilih File</label>
              </div>
            </div>
            <div class="pt-4">
              <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">AKTA KELAHIRAN</label>
              <input class="block w-full text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file" />
              <div class="w-[114px] h-[43px] -ml-[1.26rem] text-white absolute rounded-l-lg bg-blueFist -mt-[42.8px] cursor-pointer overflow-hidden">
                <label for="file_input" type="file" class="flex justify-center my-3 text-sm font-medium">Pilih File</label>
              </div>
            </div>

            <button id="upload-button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block mt-6 mx-[40%] text-white bg-blueFist hover:bg-bluSecond focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
              Upload
            </button>

            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                  <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                      Apa kamu yakin untuk mengupliad file ini?
                    </h3>
                    <button data-modal-hide="popup-modal" type="button" class="text-white bg-green-400 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-red-300font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                      Iya
                    </button>
                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                      Tidak
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="pb-6"></div>
          </div>
        </div>

        <!-- overlay untuk gambar besar -->
        <div id="myModal" class="modal">
          <span class="close" onclick="closeModal()">&times;</span>
          <img class="modal-content" src="" id="img01" alt="" />
        </div>
      </div>
    </div>

    <!-- konten -->
  </main>
  <!-- konten end -->

  <!-- js -->
  <script>
    const tabs = document.querySelectorAll("#button");
    const allContent = document.querySelectorAll(".content");

    tabs.forEach((tab, index) => {
      tab.addEventListener("click", (e) => {
        tabs.forEach((tab) => {
          tab.classList.remove("active");
        });

        tab.classList.add("active");

        var line = document.querySelector(".line");
        line.style.width = e.target.offsetWidth + "px";
        line.style.left = e.target.offsetLeft + "px";

        allContent.forEach((content) => {
          content.classList.remove("active");
        });
        allContent[index].classList.add("active");
      });
    });

    // dropzone
  </script>

  <script>
    document
      .getElementById("dropzone-file")
      .addEventListener("change", function() {
        const file = this.files[0]; // Mengambil file yang diunggah

        if (file) {
          const reader = new FileReader();

          reader.addEventListener("load", function() {
            const image = new Image();
            image.src = reader.result;

            image.addEventListener("load", function() {
              // Mengganti gambar default dengan gambar yang diunggah
              const dropzoneLabel = document.getElementById("dropzone-image");
              dropzoneLabel.innerHTML = ""; // Menghapus konten SVG default
              dropzoneLabel.appendChild(image); // Menambahkan gambar yang diunggah

              dropzoneLabel.style.width = image.width + "px";
              dropzoneLabel.style.height = image.height + "px";
            });
          });

          reader.readAsDataURL(file); // Membaca file sebagai URL data
        }
      });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>