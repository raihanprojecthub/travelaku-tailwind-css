<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Tiket</title>
  <link href="../../output.css" rel="stylesheet" />
</head>

<body>
  <!-- Header Start -->
  <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="#" class="font-bold text-lg text-primary block py-6">travelaku.com</a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>

          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="../../../index.html" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Home</a>
              </li>
              <li class="group">
                <a href="#pesawat" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Pesawat</a>
              </li>
              <li class="group">
                <a href="#partner" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Partner</a>
              </li>
              <li class="group">
                <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">About</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Form Section Start -->
  <form id="pesawat" action="output_post.php" method="post">
    <section id="pesawat" class="pt-36 pb-32">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Pesawat</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Tiket Pesawat</h2>
            <!-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, sed.</p> -->
          </div>
        </div>

        <div class="w-full lg:w-2/3 lg:mx-auto">
          <span id="selector">
            <div class="drop-list">
              <div class="from">
                <div class="w-full px-4 mb-4">
                  <label for="dari" class="text-base font-bold text-primary">Dari</label>
                  <div class="select-box">
                    <select name="dari" id="dari" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                      <!-- di isi dengan javasript -->
                    </select>
                  </div>
                </div>
              </div>
              <div class="icon">
                <img src="../../img/clients/arrowupanddown.svg" alt="arrow" width="25px" class="mx-auto">
              </div>
              <div class="to">
                <div class="w-full px-4 mb-8">
                  <label for="ke" class="text-base font-bold text-primary">Ke</label>
                  <div class="select-box">
                    <select name="ke" id="ke" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                      <!-- di isi dengan javasript -->
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </span>
          <div class="w-full px-4 mb-8">
            <label for="tanggal" class="text-base font-bold text-primary">Tanggal Pergi</label>
            <input type="date" name="tanggal" id="tanggal" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8">
            <label for="maskapai" class="text-base font-bold text-primary">Maskapai Penerbangan</label>
            <select name="maskapai" id="maskapai" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
              <option value="Garuda Indonesia">Garuda Indonesia</option>
              <option value="Citilink">Citilink</option>
              <option value="Lion Air">Lion Air</option>
              <option value="Sriwijaya Air">Sriwijaya Air</option>
            </select>
          </div>
          <div class="w-full px-4 mb-8">
            <label for="kelas" class="text-base font-bold text-primary">Kelas</label>
            <select name="kelas" id="kelas" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
              <option value="Ekonomi">Ekonomi</option>
              <option value="Premium Ekonomi">Premium Ekonomi</option>
              <option value="Bisnis">Bisnis</option>
              <option value="First Class">First Class</option>
            </select>
          </div>

          <div class="w-full px-4">
            <a href="#form">
              <input type="button" value="Selanjutnya" class="text-base mx-auto font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500"></input>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="form" class="pt-36 pb-32 bg-slate-100">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Pesawat</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Detail Pemesanan</h2>
            <!-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, sed.</p> -->
          </div>
        </div>

        <div class="w-full lg:w-2/3 lg:mx-auto">
          <div class="w-full px-4 mb-8">
            <label for="nama" class="text-base font-bold text-primary">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8">
            <label for="email" class="text-base font-bold text-primary">Alamat Email</label>
            <input type="email" name="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8">
            <label for="pembayaran" class="text-base font-bold text-primary">Metode Pembayaran</label>
            <select name="pembayaran" id="pembayaran" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
              <option value="Alfamart">Alfamart</option>
              <option value="ShopeePay">ShopeePay</option>
              <option value="ATM Bersama">ATM Bersama</option>
              <option value="BNI">BNI</option>
              <option value="DANA">DANA</option>
              <option value="GoPay">GoPay</option>
              <option value="OVO">OVO</option>
              <option value="Mandiri">Mandiri</option>
            </select>
          </div>
          <div class="w-full px-4">
            <button type="submit" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Proses Pembayaran</button>
          </div>
        </div>
      </div>
    </section>
  </form>
  <!-- Form Section Stop -->

  <!-- Partner Section Start -->
  <section id="partner" class="pt-36 pb-32 bg-slate-800">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary mb-2">Partner</h4>
          <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Partner Penerbangan</h2>
          <p class="font-medium text-md text-secondary md:text-lg">Maskapai Penerbangan yang tersedia untuk Anda pilih sesuai keinginan.</p>
        </div>
      </div>

      <div class="w-full px-4">
        <div class="flex flex-wrap items-center justify-center">
          <a href="#" class="max-w-[120px] mx-4 py-6 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
            <img src="../../img/clients/garudaindonesia.svg" alt="Garuda Indonesia" />
          </a>
          <a href="#" class="max-w-[120px] mx-4 py-6 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
            <img src="../../img/clients/Citilink.svg" alt="Citilink" />
          </a>
          <a href="#" class="max-w-[120px] mx-4 py-6 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
            <img src="../../img/clients/sriwijaya-air.svg" alt="Sriwijaya Air" />
          </a>
          <a href="#" class="max-w-[120px] mx-4 py-6 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
            <img src="../../img/clients/Lion_Air-Logo.wine.svg" alt="Lion Air" />
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Partner Section Start -->

  <!-- About Section Start -->
  <section id="about" class="pt-36 pb-32 bg-slate-100">
    <div class="flex flex-wrap">
      <div class="container mx-auto">
        <a href="https://www.tiket.com/" target="_blank">
          <div class="w-full border rounded-lg shadow-lg bg-white px-8 py-8 mx-auto mb-10 hover:opacity-80">
            <h1 class="font-bold mb-2 text-xl text-dark lg:text-2xl">Ingin Pesan Tiket Pesawat Online? Pesan aja Langsung di travelaku.com!</h1>
            <p>Kebutuhan tiket pesawat murah selalu dicari oleh siapa pun yang ingin melakukan penerbangan dengan nyaman, termasuk oleh Anda. Terlebih, saat ini transportasi dengan menggunakan pesawat terbang sudah banyak dipilih lantaran kenyamanan dan kecepatan waktu tempuhnya. Jika Anda adalah salah satu calon penumpang yang sedang mencari tiket pesawat murah atau tiket pesawat promo, sangat tepat bagi Anda untuk membeli tiket pesawat murah melalui travelaku.com.</p>
          </div>
        </a>

        <a href="https://www.tiket.com/" target="_blank">
          <div class="w-full border rounded-lg shadow-lg bg-white px-8 py-8 mx-auto mb-10 hover:opacity-80">
            <h1 class="font-bold mb-2 text-xl text-dark lg:text-2xl">Dapatkan Harga Tiket Pesawat Murah ke Destinasi Favoritmu</h1>
            <p>Ingin pesan tiket pesawat murah? Kini hanya dengan satu kali sentuhan jari, Anda bisa langsung pesan tiket pesawat murah di travelaku.com. travelaku.com adalah pionir online travel agent (OTA) di Indonesia yang selalu memberikan inovasi handal untuk mempermudah Anda ketika pesan tiket pesawat online. Cari tiket pesawat online di travelaku.com ke puluhan destinasi penerbangan domestik di Indonesia.</p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- About Section Stop -->

  <!-- Footer Start -->
  <footer class="bg-dark pt-24 pb-12">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="mb-12 w-full px-4 font-medium text-slate-300 md:w-1/3">
          <h2 class="mb-5 text-4xl font-bold text-white">Travelaku</h2>
          <h3 class="mb-2 text-2xl font-bold">Hubungi Kami</h3>
          <p>raihanramadhan435@gmail.com</p>
          <p>Jl. Ciremai Blok A No. 21</p>
          <p>Purwakarta</p>
        </div>
        <div class="mb-12 w-full px-4 md:w-1/3">
          <h3 class="mb-5 text-xl font-semibold text-white">
            Kategori Tulisan
          </h3>
          <ul class="text-slate-300">
            <li>
              <a href="#" class="mb-3 inline-block text-base hover:text-primary">Travel</a>
            </li>
            <li>
              <a href="#" class="mb-3 inline-block text-base hover:text-primary">Wisata</a>
            </li>
            <li>
              <a href="#" class="mb-3 inline-block text-base hover:text-primary">Liburan</a>
            </li>
          </ul>
        </div>
        <div class="mb-12 w-full px-4 md:w-1/3">
          <h3 class="mb-5 text-xl font-semibold text-white">Tautan</h3>
          <ul class="text-slate-300">
            <li>
              <a href="#home" class="mb-3 inline-block text-base hover:text-primary">Home</a>
            </li>
            <li>
              <a href="#about" class="mb-3 inline-block text-base hover:text-primary">About</a>
            </li>
            <li>
              <a href="#gallery" class="mb-3 inline-block text-base hover:text-primary">Gallery</a>
            </li>
            <li>
              <a href="#partner" class="mb-3 inline-block text-base hover:text-primary">Partner</a>
            </li>
            <li>
              <a href="#blog" class="mb-3 inline-block text-base hover:text-primary">Blog</a>
            </li>
            <li>
              <a href="#contact" class="mb-3 inline-block text-base hover:text-primary">Contact</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="w-full border-t border-slate-700 pt-10">
        <div class="mb-5 flex items-center justify-center">
          <!-- Youtube -->
          <a href="https://youtube.com/c/PesonaIndonesiaofficial" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>YouTube</title>
              <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
            </svg>
          </a>

          <!-- Instagram -->
          <a href="https://instagram.com/pesona.indonesia?igshid=YmMyMTA2M2Y=" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Instagram</title>
              <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
            </svg>
          </a>

          <!-- Twitter -->
          <a href="https://twitter.com/pesonaindonesia" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Twitter</title>
              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
            </svg>
          </a>

          <!-- TikTok -->
          <a href="https://www.tiktok.com/@pesonaindonesia?is_from_webapp=1&sender_device=pc" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>TikTok</title>
              <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
            </svg>
          </a>

          <!-- Facebook -->
          <a href="https://facebook.com/pesona.indonesia?_rdc=1&_rdr" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <title>Facebook</title>
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
            </svg>
          </a>
        </div>
        <p class="text-center text-xs font-medium text-slate-500">
          Dibuat dengan <span class="text-pink-500">❤️</span> oleh
          <a href="https://instagram.com/raihanrmdhn_09" target="_blank" class="font-bold text-primary">Raihan Ramadhan</a>, menggunakan
          <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>. <br /><br />
          Semua logo, merek dagang, dan hak cipta yang terkandung di situs web
          ini adalah dan tetap menjadi milik dari pemiliknya masing-masing.
          Penggunaan materi-materi ini tidak menyiratkan pengesahan oleh
          perusahaan-perusahaan ini. Tidak ada lisensi atau hak lain dalam
          atau atas logo dan/atau merek dagang tersebut yang diberikan.
        </p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- js pribadi -->
  <script src="../js/destinasi.js"></script>
  <script src="../js/formscript.js"></script>
  <!-- end js pribadi -->
  <script src="../../js/script.js"></script>
</body>

</html>