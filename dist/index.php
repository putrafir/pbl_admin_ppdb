<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/style.css" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="font-monserat">
  <div class="w-full h-[26rem] min-h-75 bg-blueFist">
    <!-- <div
        class="w-full h-full"
        style="background-image: url(img/yo.jpeg)"
      ></div> -->
    <!-- cliping mask -->
  </div>

  <!-- Side samping -->
  <div class="container">
    <aside class="fixed top-5 bottom-5 lg:left-5 p-2 w-[270px] overflow-y-auto text-center bg-white rounded-3xl shadow-xl">
      <div class="text-dark text-xl pt-4">
        <div class="mt-1 flex justify-center items-center py-3">
          <img src="../img/logoSMA.png" alt="logo" class="w-8 mr-2" />
          <h1 class="font-semibold text-base">Admin Panel</h1>
        </div>

        <hr class="my-3 text-gray-600 mx-5" />
      </div>

      <!-- dashboard -->
      <div class="p-4 mt-3 flex items-center rounded-lg px-8 duration-300 cursor-pointer bg-blueFist bg-opacity-35 text-white">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.75 6.75C2.75 4.54086 4.54086 2.75 6.75 2.75H17.25C19.4591 2.75 21.25 4.54086 21.25 6.75V13.75C21.25 15.9591 19.4591 17.75 17.25 17.75H6.75C4.54086 17.75 2.75 15.9591 2.75 13.75V6.75Z" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M7 21.25H17" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M2.75 13.25H21.25" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          <path d="M10 17.75L9 21.25M14 17.75L15 21.25" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
        </svg>
        <span class="text-gray-600 ml-5 text-base text-sm">Dashboard</span>
      </div>

      <!-- lihat calon -->
      <a href="pages/lihat-calon.php">
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

      <!-- lihat calon -->
      <a href="../dist/pages/calon-diterima.php">
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

      <a href="../dist/pages/ukuran-baju.html">
        <div class="p-4 flex items-center rounded-lg px-8 duration-300 cursor-pointer text-white">
          <svg width="20" height="22" class="ml-[3px]" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.2011 1.83334C12.2011 2.47636 11.9689 3.09304 11.5556 3.54772C11.1422 4.0024 10.5816 4.25783 9.99705 4.25783C9.41249 4.25783 8.85188 4.0024 8.43853 3.54772C8.02518 3.09304 7.79297 2.47636 7.79297 1.83334" stroke="#1068FF" stroke-width="1.32554" stroke-miterlimit="10" />
            <path d="M15.3311 16.103H17.3502C17.5008 16.1034 17.6461 16.0412 17.7566 15.9287C17.8672 15.8161 17.935 15.6617 17.9463 15.4965L18.3327 9.86746L16.879 4.47683C16.8432 4.32907 16.7594 4.20089 16.6434 4.11659L12.8054 1.94738C12.7168 1.87846 12.6122 1.83889 12.5038 1.83334H7.50666C7.39708 1.83371 7.28993 1.86881 7.19801 1.93442L3.36237 4.10363C3.2467 4.18829 3.16296 4.31633 3.12677 4.46387L1.66602 9.86746L2.06183 15.5069C2.07314 15.6721 2.14091 15.8265 2.25149 15.939C2.36207 16.0515 2.50728 16.1138 2.65791 16.1133H4.69589" stroke="#1068FF" stroke-width="1.32554" stroke-miterlimit="10" />
            <path d="M4.68164 9.34912V17.1422C4.68081 17.6716 4.86413 18.1813 5.19399 18.5668C5.52386 18.9523 5.97529 19.1844 6.45575 19.2155C7.59008 19.4427 8.74026 19.5607 9.89322 19.568H10.1076C11.2606 19.5608 12.4108 19.4428 13.5451 19.2155V19.2155C14.026 19.1851 14.478 18.9533 14.8083 18.5677C15.1387 18.1821 15.3223 17.672 15.3215 17.1422V9.34912" stroke="#1068FF" stroke-width="1.32554" stroke-miterlimit="10" stroke-linecap="round" />
          </svg>
          <span class="text-gray-600 ml-[24px] text-base text-sm">Ukuran baju</span>
        </div>
      </a>

      <!-- tambah pendaftar -->
      <a href="../dist/pages/tambah-pendaftar.php">
        <div class="p-4 flex items-center rounded-lg px-8 duration-300 cursor-pointer text-white">
          <svg width="24" height="24" class="ml-[1px]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.75 6.75C2.75 4.54086 4.54086 2.75 6.75 2.75H17.25C19.4591 2.75 21.25 4.54086 21.25 6.75V13.75C21.25 15.9591 19.4591 17.75 17.25 17.75H6.75C4.54086 17.75 2.75 15.9591 2.75 13.75V6.75Z" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M7 21.25H17" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M2.75 13.25H21.25" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
            <path d="M10 17.75L9 21.25M14 17.75L15 21.25" stroke="#1068FF" stroke-width="1.5" stroke-linecap="round" />
          </svg>
          <span class="text-gray-600 ml-5 text-base text-sm">Tambah pendaftar</span>
        </div>
      </a>
    </aside>

    <!-- Side samping end -->
  </div>

  <!-- konten -->
  <main class="-mt-[390px] ml-80 h-full max-h-screen">
    <div class="flex">
      <!-- pages -->
      <div class="w-full lg:w-1/2">
        <ol>
          <li class="text-sm text-slate-300">Pages</li>
          <li class="font-semibold text-[1rem] text-white">Dashboard</li>
        </ol>
      </div>

      <!-- profile -->
      <div class="absolute w-full lg:w-1/2 pl-[65rem] cursor-pointer">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16 15.1739C20.3386 15.1739 24 15.8789 24 18.599C24 21.32 20.3146 22 16 22C11.6624 22 8 21.295 8 18.575C8 15.8539 11.6854 15.1739 16 15.1739ZM16 2C18.9391 2 21.294 4.35402 21.294 7.29105C21.294 10.2281 18.9391 12.5831 16 12.5831C13.0619 12.5831 10.706 10.2281 10.706 7.29105C10.706 4.35402 13.0619 2 16 2Z" fill="white" fill-opacity="0.87" />
        </svg>
      </div>
    </div>

    <!-- konten atas -->
    <div class="grid grid-cols-3">
      <!-- isi kotak -->

      <div class="w-[19rem] h-[11rem] bg-white rounded-2xl shadow-lg flex flex-wrap mt-8">
        <div class="w-full h-full flex flex-wrap">
          <div class="p-5 lg:w-1/2">
            <h2 class="font-semibold text-secondary text-[1.3rem]">
              Pendaftar
            </h2>
            <h1 class="text-2xl font-bold pt-1">367</h1>
          </div>

          <div class="lg:w-1/2 pl-20 pt-4">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <ellipse cx="27.7275" cy="28.2606" rx="27.5439" ry="27.4709" fill="url(#paint0_linear_387_2083)" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M27.7256 28.2607C25.3714 28.2607 23.4629 26.3572 23.4629 24.0092C23.4629 21.6612 25.3714 19.7578 27.7256 19.7578C30.0799 19.7578 31.9884 21.6612 31.9884 24.0092C31.9884 26.3572 30.0799 28.2607 27.7256 28.2607Z" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M20.4023 36.7635C20.4023 33.4729 23.6847 30.8115 27.7257 30.8115C28.5442 30.8115 29.3371 30.922 30.0788 31.1261" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M35.7576 35.114C35.5785 35.4201 35.3483 35.6922 35.084 35.9133C34.4873 36.449 33.7029 36.7636 32.8418 36.7636C31.5971 36.7636 30.5144 36.1003 29.9261 35.114C29.6107 34.6038 29.4316 34.0001 29.4316 33.3624C29.4316 32.291 29.9261 31.3302 30.7105 30.7095C31.2987 30.2418 32.0404 29.9612 32.8418 29.9612C34.726 29.9612 36.252 31.4833 36.252 33.3624C36.252 34.0001 36.073 34.6038 35.7576 35.114Z" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M31.5117 33.3623L32.3557 34.2041L34.1717 32.5291" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_387_2083" x1="55.2713" y1="47.8827" x2="5.03035" y2="0.656751" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#4B7BC0" />
                  <stop offset="1" stop-color="#3F5AC2" />
                </linearGradient>
              </defs>
            </svg>
          </div>

          <div class="text-lg -mt-7">
            <h5 class="pl-5 pr-3 float-left font-medium text-green-400">
              +43%
            </h5>
            <p class="ml-5 text-secondary font-light">sejak minggu lalu</p>
          </div>
        </div>
      </div>

      <!-- kolom2 -->
      <div class="w-[19rem] h-[150px] bg-white rounded-2xl shadow-lg flex flex-wrap mt-8">
        <div class="w-full h-full flex flex-wrap">
          <div class="p-5 lg:w-1/2">
            <h2 class="font-semibold text-secondary text-[1.3rem]">
              Diterima
            </h2>
            <h1 class="text-2xl font-bold pt-1">265</h1>
          </div>

          <div class="lg:w-1/2 pl-20 pt-4">
            <svg width="56" height="55" viewBox="0 0 56 55" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M55.0877 27.4709C55.0877 42.6427 42.7559 54.9419 27.5439 54.9419C12.3318 54.9419 0 42.6427 0 27.4709C0 12.2992 12.3318 0 27.5439 0C42.7559 0 55.0877 12.2992 55.0877 27.4709Z" fill="url(#paint0_linear_451_2885)" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4277 24.0742C17.4277 21.3774 19.614 19.1911 22.3109 19.1911H33.1051C35.802 19.1911 37.9883 21.3774 37.9883 24.0742V31.2704C37.9883 33.9673 35.802 36.1535 33.1051 36.1535H22.3109C19.614 36.1535 17.4277 33.9673 17.4277 31.2704V24.0742ZM22.3109 20.7331C20.4656 20.7331 18.9698 22.229 18.9698 24.0742V31.2704C18.9698 33.1156 20.4656 34.6115 22.3109 34.6115H33.1051C34.9504 34.6115 36.4462 33.1156 36.4462 31.2704V24.0742C36.4462 22.229 34.9504 20.7331 33.1051 20.7331H22.3109Z" fill="white" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M25.1376 23.8172C24.4279 23.8172 23.8526 24.3926 23.8526 25.1023C23.8526 25.812 24.4279 26.3873 25.1376 26.3873C25.8473 26.3873 26.4227 25.812 26.4227 25.1023C26.4227 24.3926 25.8473 23.8172 25.1376 23.8172ZM22.3105 25.1023C22.3105 23.5409 23.5763 22.2752 25.1376 22.2752C26.699 22.2752 27.9647 23.5409 27.9647 25.1023C27.9647 26.6636 26.699 27.9294 25.1376 27.9294C23.5763 27.9294 22.3105 26.6636 22.3105 25.1023Z" fill="white" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7676 32.2985C20.7676 30.1693 22.4936 28.4434 24.6227 28.4434H25.6507C27.7798 28.4434 29.5058 30.1693 29.5058 32.2985C29.5058 32.7243 29.1606 33.0695 28.7348 33.0695C28.309 33.0695 27.9638 32.7243 27.9638 32.2985C27.9638 31.021 26.9282 29.9854 25.6507 29.9854H24.6227C23.3452 29.9854 22.3096 31.021 22.3096 32.2985C22.3096 32.7243 21.9644 33.0695 21.5386 33.0695C21.1128 33.0695 20.7676 32.7243 20.7676 32.2985Z" fill="white" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M30.0195 26.1303C30.0195 25.7045 30.3647 25.3593 30.7906 25.3593H33.8746C34.3005 25.3593 34.6457 25.7045 34.6457 26.1303C34.6457 26.5561 34.3005 26.9013 33.8746 26.9013H30.7906C30.3647 26.9013 30.0195 26.5561 30.0195 26.1303Z" fill="white" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M30.0195 29.2144C30.0195 28.7886 30.3647 28.4434 30.7906 28.4434H33.8746C34.3005 28.4434 34.6457 28.7886 34.6457 29.2144C34.6457 29.6402 34.3005 29.9854 33.8746 29.9854H30.7906C30.3647 29.9854 30.0195 29.6402 30.0195 29.2144Z" fill="white" />
              <defs>
                <linearGradient id="paint0_linear_451_2885" x1="55.0877" y1="67.064" x2="4.84675" y2="19.838" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#4B7BC0" />
                  <stop offset="1" stop-color="#3F5AC2" />
                </linearGradient>
              </defs>
            </svg>
          </div>

          <div class="text-lg -mt-6 flex flex-wrap">
            <h5 class="pl-5 pr-3 font-medium text-green-400">+53%</h5>
            <p class="text-secondary font-light">sejak kemarin</p>
          </div>
        </div>

        <!-- kolom 3 -->
      </div>
      <div class="w-[19rem] h-[11rem] bg-white rounded-2xl shadow-lg flex flex-wrap mt-8">
        <div class="w-full h-full flex flex-wrap">
          <div class="p-5 lg:w-1/2">
            <h2 class="font-semibold text-secondary text-[1.3rem]">
              Ditolak
            </h2>
            <h1 class="text-2xl font-bold pt-1">102</h1>
          </div>

          <div class="lg:w-1/2 pl-20 pt-4">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <ellipse cx="27.7255" cy="28.1511" rx="27.5439" ry="27.4709" fill="url(#paint0_linear_818_6696)" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M28.2295 27.2035C25.8753 27.2035 23.9668 25.3001 23.9668 22.9521C23.9668 20.6041 25.8753 18.7006 28.2295 18.7006C30.5838 18.7006 32.4923 20.6041 32.4923 22.9521C32.4923 25.3001 30.5838 27.2035 28.2295 27.2035Z" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M20.9062 35.7064C20.9062 32.4157 24.1886 29.7543 28.2296 29.7543C29.0481 29.7543 29.841 29.8649 30.5827 30.0689" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M36.2615 34.0569C36.0824 34.363 35.8522 34.6351 35.5879 34.8561C34.9912 35.3918 34.2068 35.7064 33.3457 35.7064C32.101 35.7064 31.0183 35.0432 30.43 34.0569C30.1146 33.5467 29.9355 32.943 29.9355 32.3053C29.9355 31.2339 30.43 30.2731 31.2144 29.6524C31.8026 29.1847 32.5443 28.9041 33.3457 28.9041C35.2299 28.9041 36.7559 30.4261 36.7559 32.3053C36.7559 32.943 36.5769 33.5467 36.2615 34.0569Z" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M35.8386 30.1614C36.0538 30.3767 36.0538 30.7257 35.8386 30.941L34.2795 32.5L35.8386 34.059C36.0538 34.2743 36.0538 34.6233 35.8386 34.8386C35.6233 35.0538 35.2743 35.0538 35.059 34.8386L33.5 33.2795L31.941 34.8386C31.7257 35.0538 31.3767 35.0538 31.1614 34.8386C30.9462 34.6233 30.9462 34.2743 31.1614 34.059L32.7205 32.5L31.1614 30.941C30.9462 30.7257 30.9462 30.3767 31.1614 30.1614C31.3767 29.9462 31.7257 29.9462 31.941 30.1614L33.5 31.7205L35.059 30.1614C35.2743 29.9462 35.6233 29.9462 35.8386 30.1614Z" fill="white" />
              <defs>
                <linearGradient id="paint0_linear_818_6696" x1="55.2694" y1="47.7732" x2="5.0284" y2="0.547254" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#4B7BC0" />
                  <stop offset="1" stop-color="#3F5AC2" />
                </linearGradient>
              </defs>
            </svg>
          </div>

          <div class="text-lg -mt-7">
            <h5 class="pl-5 pr-3 float-left font-medium text-green-400">
              +20%
            </h5>
            <p class="ml-5 text-secondary font-light">sejak minggu lalu</p>
          </div>
        </div>
      </div>
    </div>

    <!-- konten bawah -->
    <div class="grid grid-cols-2 pt-6">
      <div class="w-[32rem] h-[16rem] relative bg-white rounded-2xl shadow-lg p-4 md:p-6">
        <div class="flex justify-between mb-3">
          <div class="flex">
            <h5 class="text-3xl absolute pl-[240px] pt-[2.3rem] font-bold text-dark pe-1">
              Perbandingan
            </h5>
          </div>
        </div>

        <!-- Donut Chart -->
        <div id="donut-chart" class="-ml-10 -mt-3"></div>
      </div>

      <!-- kanan -->

      <div class="w-[490px] h-[499px] bg-white rounded-2xl shadow-lg">
        <div class="flex justify-between p-4 md:p-6 pb-0 md:pb-0">
          <div>
            <h5 class="leading-none text-3xl font-bold text-dark">
              Data perbulan
            </h5>
          </div>
          <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
            23%
            <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
            </svg>
          </div>
        </div>
        <div id="labels-chart" class="px-2.5"></div>

        <!-- <div class="flex justify-between items-center pt-5"> -->
        <!-- Button -->
        <!-- <button
                id="dropdownDefaultButton"
                data-dropdown-toggle="lastDaysdropdown"
                data-dropdown-placement="bottom"
                class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                type="button"
              >
                Last 7 days
                <svg
                  class="w-2.5 m-2.5 ms-1.5"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 10 6"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 1 4 4 4-4"
                  />
                </svg>
              </button> -->
        <!-- Dropdown menu -->
        <!-- <div
                id="lastDaysdropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
              >
                <ul
                  class="py-2 text-sm text-gray-700 dark:text-gray-200"
                  aria-labelledby="dropdownDefaultButton"
                >
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      >Yesterday</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      >Today</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      >Last 7 days</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      >Last 30 days</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      >Last 90 days</a
                    >
                  </li>
                </ul>
              </div> -->
        <!-- <a
                href="#"
                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500 hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2"
              >
                Sales Report
                <svg
                  class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 6 10"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 9 4-4-4-4"
                  />
                </svg>
              </a> -->
        <!-- </div> -->
      </div>

      <!-- kiri bawah -->

      <div class="z-50">
        <h1 class="text-3xl font-bold text-white -mt-40 ml-[15rem]">
          Progress PPDB
        </h1>

        <div class="flex float-left mt-2 ml-56">
          <!-- icon -->
          <svg width="56" height="56" class="-mt-[1.2rem]" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.7256 28.2607C25.3714 28.2607 23.4629 26.3572 23.4629 24.0092C23.4629 21.6612 25.3714 19.7578 27.7256 19.7578C30.0799 19.7578 31.9884 21.6612 31.9884 24.0092C31.9884 26.3572 30.0799 28.2607 27.7256 28.2607Z" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M20.4023 36.7635C20.4023 33.4729 23.6847 30.8115 27.7257 30.8115C28.5442 30.8115 29.3371 30.922 30.0788 31.1261" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M35.7576 35.114C35.5785 35.4201 35.3483 35.6922 35.084 35.9133C34.4873 36.449 33.7029 36.7636 32.8418 36.7636C31.5971 36.7636 30.5144 36.1003 29.9261 35.114C29.6107 34.6038 29.4316 34.0001 29.4316 33.3624C29.4316 32.291 29.9261 31.3302 30.7105 30.7095C31.2987 30.2418 32.0404 29.9612 32.8418 29.9612C34.726 29.9612 36.252 31.4833 36.252 33.3624C36.252 34.0001 36.073 34.6038 35.7576 35.114Z" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M31.5117 33.3623L32.3557 34.2041L34.1717 32.5291" stroke="white" stroke-width="1.28071" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <h5 class="text-white">Pendaftaran</h5>
          <svg width="18" class="ml-[21.5px] mb-3" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.17003 4.4879C5.04615 4.70027 4.88687 4.88904 4.704 5.04241C4.29107 5.41405 3.74836 5.63231 3.15256 5.63231C2.29131 5.63231 1.54213 5.17219 1.1351 4.4879C0.91684 4.13396 0.792969 3.71514 0.792969 3.27271C0.792969 2.52944 1.13511 1.86286 1.67782 1.43223C2.08485 1.10779 2.59806 0.913116 3.15256 0.913116C4.45624 0.913116 5.51216 1.96904 5.51216 3.27271C5.51216 3.71514 5.38829 4.13396 5.17003 4.4879Z" stroke="white" stroke-width="0.884848" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M2.23047 3.27272L2.81446 3.85672L4.07095 2.69464" stroke="white" stroke-width="0.884848" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <div class="flex float-left -mt-2 ml-56">
          <!-- icon -->
          <svg width="56" height="55" class="-mt-4" viewBox="0 0 56 55" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4277 24.0742C17.4277 21.3774 19.614 19.1911 22.3109 19.1911H33.1051C35.802 19.1911 37.9883 21.3774 37.9883 24.0742V31.2704C37.9883 33.9673 35.802 36.1535 33.1051 36.1535H22.3109C19.614 36.1535 17.4277 33.9673 17.4277 31.2704V24.0742ZM22.3109 20.7331C20.4656 20.7331 18.9698 22.229 18.9698 24.0742V31.2704C18.9698 33.1156 20.4656 34.6115 22.3109 34.6115H33.1051C34.9504 34.6115 36.4462 33.1156 36.4462 31.2704V24.0742C36.4462 22.229 34.9504 20.7331 33.1051 20.7331H22.3109Z" fill="white" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.1376 23.8172C24.4279 23.8172 23.8526 24.3926 23.8526 25.1023C23.8526 25.812 24.4279 26.3873 25.1376 26.3873C25.8473 26.3873 26.4227 25.812 26.4227 25.1023C26.4227 24.3926 25.8473 23.8172 25.1376 23.8172ZM22.3105 25.1023C22.3105 23.5409 23.5763 22.2752 25.1376 22.2752C26.699 22.2752 27.9647 23.5409 27.9647 25.1023C27.9647 26.6636 26.699 27.9294 25.1376 27.9294C23.5763 27.9294 22.3105 26.6636 22.3105 25.1023Z" fill="white" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7676 32.2985C20.7676 30.1693 22.4936 28.4434 24.6227 28.4434H25.6507C27.7798 28.4434 29.5058 30.1693 29.5058 32.2985C29.5058 32.7243 29.1606 33.0695 28.7348 33.0695C28.309 33.0695 27.9638 32.7243 27.9638 32.2985C27.9638 31.021 26.9282 29.9854 25.6507 29.9854H24.6227C23.3452 29.9854 22.3096 31.021 22.3096 32.2985C22.3096 32.7243 21.9644 33.0695 21.5386 33.0695C21.1128 33.0695 20.7676 32.7243 20.7676 32.2985Z" fill="white" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.0195 26.1303C30.0195 25.7045 30.3647 25.3593 30.7906 25.3593H33.8746C34.3005 25.3593 34.6457 25.7045 34.6457 26.1303C34.6457 26.5561 34.3005 26.9013 33.8746 26.9013H30.7906C30.3647 26.9013 30.0195 26.5561 30.0195 26.1303Z" fill="white" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.0195 29.2144C30.0195 28.7886 30.3647 28.4434 30.7906 28.4434H33.8746C34.3005 28.4434 34.6457 28.7886 34.6457 29.2144C34.6457 29.6402 34.3005 29.9854 33.8746 29.9854H30.7906C30.3647 29.9854 30.0195 29.6402 30.0195 29.2144Z" fill="white" />
          </svg>
          <h5 class="text-white">Penyeleksian</h5>
          <svg width="18" class="ml-4 mb-3" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.17003 4.4879C5.04615 4.70027 4.88687 4.88904 4.704 5.04241C4.29107 5.41405 3.74836 5.63231 3.15256 5.63231C2.29131 5.63231 1.54213 5.17219 1.1351 4.4879C0.91684 4.13396 0.792969 3.71514 0.792969 3.27271C0.792969 2.52944 1.13511 1.86286 1.67782 1.43223C2.08485 1.10779 2.59806 0.913116 3.15256 0.913116C4.45624 0.913116 5.51216 1.96904 5.51216 3.27271C5.51216 3.71514 5.38829 4.13396 5.17003 4.4879Z" stroke="white" stroke-width="0.884848" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M2.23047 3.27272L2.81446 3.85672L4.07095 2.69464" stroke="white" stroke-width="0.884848" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </div>
      <div class="absolute w-[32rem] h-[220px] shadow-lg bg-blueFist rounded-2xl mt-[280px]">
        <!-- Radial Chart -->
        <div class="-mt-2" id="radial-chart"></div>
      </div>
    </div>
  </main>

  <!-- konten end -->

  <!-- flowbite -->
  <!-- charts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <!-- javascript -->
  <script src="js/dashboard.js"></script>
</body>

</html>