<?php
include "./service/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calon diterima</title>
  <link rel="stylesheet" href="../css/style.css" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="font-monserat">
  <div class="w-full h-[26rem] min-h-75" style="background-image: url(../../img/bg/calon-diterima.png)">
    <div class="w-full h-full bg-blueFist opacity bg-opacity-50"></div>
  </div>

  <!-- Side samping -->
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
      <a href="../index.html">
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
      <a href="lihat-calon.html">
        <div class="p-4 flex items-center rounded-lg px-8 duration-300 cursor-pointer">
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

      <div class="p-4 flex items-center rounded-lg px-8 duration-300 cursor-pointer bg-blueFist bg-opacity-35 text-white">
        <svg width="24" height="24" class="ml-[0.5px]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.75 8.5C2.75 6.29086 4.54086 4.5 6.75 4.5H17.25C19.4591 4.5 21.25 6.29086 21.25 8.5V15.5C21.25 17.7091 19.4591 19.5 17.25 19.5H6.75C4.54086 19.5 2.75 17.7091 2.75 15.5V8.5Z" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <circle cx="9.5" cy="9.5" r="2" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M6 16.5C6 14.8431 7.34315 13.5 9 13.5H10C11.6569 13.5 13 14.8431 13 16.5" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M15 10.5H18" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M15 13.5H18" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
        </svg>
        <span class="text-gray-600 ml-[19px] text-base text-sm">Calon diterima</span>
      </div>
      <div class="p-4 flex items-center rounded-lg px-8 duration-300 cursor-pointer text-white">
        <svg width="20" height="22" class="ml-[3px]" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.2011 1.83334C12.2011 2.47636 11.9689 3.09304 11.5556 3.54772C11.1422 4.0024 10.5816 4.25783 9.99705 4.25783C9.41249 4.25783 8.85188 4.0024 8.43853 3.54772C8.02518 3.09304 7.79297 2.47636 7.79297 1.83334" stroke="#1068FF" stroke-width="1.32554" stroke-miterlimit="10" />
          <path d="M15.3311 16.103H17.3502C17.5008 16.1034 17.6461 16.0412 17.7566 15.9287C17.8672 15.8161 17.935 15.6617 17.9463 15.4965L18.3327 9.86746L16.879 4.47683C16.8432 4.32907 16.7594 4.20089 16.6434 4.11659L12.8054 1.94738C12.7168 1.87846 12.6122 1.83889 12.5038 1.83334H7.50666C7.39708 1.83371 7.28993 1.86881 7.19801 1.93442L3.36237 4.10363C3.2467 4.18829 3.16296 4.31633 3.12677 4.46387L1.66602 9.86746L2.06183 15.5069C2.07314 15.6721 2.14091 15.8265 2.25149 15.939C2.36207 16.0515 2.50728 16.1138 2.65791 16.1133H4.69589" stroke="#1068FF" stroke-width="1.32554" stroke-miterlimit="10" />
          <path d="M4.68164 9.34912V17.1422C4.68081 17.6716 4.86413 18.1813 5.19399 18.5668C5.52386 18.9523 5.97529 19.1844 6.45575 19.2155C7.59008 19.4427 8.74026 19.5607 9.89322 19.568H10.1076C11.2606 19.5608 12.4108 19.4428 13.5451 19.2155V19.2155C14.026 19.1851 14.478 18.9533 14.8083 18.5677C15.1387 18.1821 15.3223 17.672 15.3215 17.1422V9.34912" stroke="#1068FF" stroke-width="1.32554" stroke-miterlimit="10" stroke-linecap="round" />
        </svg>
        <span class="text-gray-600 ml-[24px] text-base text-sm">Ukuran baju</span>
      </div>
      <div class="p-4 flex items-center rounded-lg px-8 duration-300 cursor-pointer text-white">
        <svg width="24" height="24" class="ml-[1px]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.75 6.75C2.75 4.54086 4.54086 2.75 6.75 2.75H17.25C19.4591 2.75 21.25 4.54086 21.25 6.75V13.75C21.25 15.9591 19.4591 17.75 17.25 17.75H6.75C4.54086 17.75 2.75 15.9591 2.75 13.75V6.75Z" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M7 21.25H17" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M2.75 13.25H21.25" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M10 17.75L9 21.25M14 17.75L15 21.25" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
        </svg>
        <span class="text-gray-600 ml-5 text-base text-sm">Tambah pendaftar</span>
      </div>
    </aside>

    <!-- Side samping end -->
  </div>

  <!-- konten -->
  <main class="-mt-[390px] ml-80 h-full">
    <div class="flex">
      <div class="w-full w-1/2 flex-none">
        <ol>
          <li class="text-sm text-slate-300">Pages</li>
          <li class="font-semibold text[1rem] text-white">Lihat calon</li>
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
          <input type="search" id="default-search" class="block w-[30rem] h-10 p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required />
          <button type="submit" class="text-white text-[12px] h-8 absolute end-1 bottom-1 bg-blueFist hover:bg-bluSecond focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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

    <!-- konten -->
    <div class="w-[68rem] h-[726px] bg-white shadow-lg rounded-xl mt-8">
      <div class="w-full h-full">
        <h2 class="font-semibold p-7">Calon Diterima</h2>
        <ol class="flex flex-wrap font-medium text-slate-400 text-sm">
          <li class="pl-[10rem]">NAMA</li>
          <li class="pl-[12rem]">NIM</li>
          <li class="pl-[88px]">KELAMIN</li>
          <li class="pl-[8rem]">ALAMAT</li>
        </ol>

        <hr class="mx-6 mt-5" />

        <!-- kotak profile -->

        <!-- brnae -->
        <div class="grid grid-cols-6">
          <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
            <img src="../../img/profil/gua.pdf" alt="profil" class="w-[66px] py-2 px-2" />
            <h2 class="font-semibold pl-4 text-dark mt-6">
              Ahmad Putra Fidaus
            </h2>
            <div class="pt-6 flex absolute pl-60">
              <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">
                Labanasem, kabat Banyuwangi
              </h2>
            </div>

            <a class="-mt-12" href="button/lihat.html">
              <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
                Lihat
              </button>
            </a>
          </div>
        </div>
        <div class="grid grid-cols-6">
          <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
            <img src="../../img/profil/sindy.pdf" alt="profil" class="w-[66px] py-2 px-2" />
            <h2 class="font-semibold pl-4 text-dark mt-6">
              Sindy Aulia Rahma
            </h2>
            <div class="pt-6 flex absolute pl-60">
              <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">
                Labanasem, kabat Banyuwangi
              </h2>
            </div>

            <a class="-mt-12" href="button/lihat.html">
              <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
                Lihat
              </button>
            </a>
          </div>
        </div>
        <div class="grid grid-cols-6">
          <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
            <img src="../../img/profil/mus.pdf" alt="profil" class="w-[66px] py-2 px-2" />
            <h2 class="font-semibold pl-4 text-dark mt-6">
              Muhammad Musyaffa
            </h2>
            <div class="pt-6 flex absolute pl-60">
              <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">
                Labanasem, kabat Banyuwangi
              </h2>
            </div>

            <a class="-mt-12" href="button/lihat.html">
              <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
                Lihat
              </button>
            </a>
          </div>
        </div>
        <div class="grid grid-cols-6">
          <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
            <img src="../../img/profil/ropi.pdf" alt="profil" class="w-[66px] py-2 px-2" />
            <h2 class="font-semibold pl-4 text-dark mt-6">
              Rofi Nazar Amrikin
            </h2>
            <div class="pt-6 flex absolute pl-60">
              <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">
                Labanasem, kabat Banyuwangi
              </h2>
            </div>

            <a class="-mt-12" href="button/lihat.html">
              <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
                Lihat
              </button>
            </a>
          </div>
        </div>
        <div class="grid grid-cols-6">
          <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
            <img src="../../img/profil/aripa.pdf" alt="profil" class="w-[66px] py-2 px-2" />
            <h2 class="font-semibold pl-4 text-dark mt-6">
              Arifah Nur Basyiroh Machi
            </h2>
            <div class="pt-6 flex absolute pl-60">
              <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">
                Labanasem, kabat Banyuwangi
              </h2>
            </div>

            <a class="-mt-12" href="button/lihat.html">
              <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
                Lihat
              </button>
            </a>
          </div>
        </div>
        <div class="grid grid-cols-6">
          <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
            <img src="../../img/profil/gita.pdf" alt="profil" class="w-[66px] py-2 px-2" />
            <h2 class="font-semibold pl-4 text-dark mt-6">
              Aisya Dwi Anggita
            </h2>
            <div class="pt-6 flex absolute pl-60">
              <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">
                Labanasem, kabat Banyuwangi
              </h2>
            </div>

            <a class="-mt-12" href="button/lihat.html">
              <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
                Lihat
              </button>
            </a>
          </div>
        </div>
        <div class="grid grid-cols-6">
          <div class="w-[65rem] h-[70px] flex flex-wrap bg-white shadow-sm mt-3 mx-6 rounded-xl border">
            <img src="../../img/profil/gua.pdf" alt="profil" class="w-[66px] py-2 px-2" />
            <h2 class="font-semibold pl-4 text-dark mt-6">Tukijo</h2>
            <div class="pt-6 flex absolute pl-60">
              <h2 class="pl-[116px] text-sm text-slate-400">000040212</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">Laki-laki</h2>
              <h2 class="pl-[4rem] text-sm text-slate-400">
                Labanasem, kabat Banyuwangi
              </h2>
            </div>

            <a class="-mt-12" href="button/lihat.html">
              <button type="button" class="text-white h-7 bg-blueFist font-medium rounded-full text-[10px] px-5 ml-[946px] me-2 hover:bg-bluSecond">
                Lihat
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>