<!-- Hero Scholarship Section -->
<div class="relative bg-gradient-to-r from-purple-600 to-blue-600 h-screen text-white overflow-hidden" id="scholarship-hero">
  <!-- Background Image + Overlay -->
  <div class="absolute inset-0">
    <img src="{{ asset('assets/images/news.jpg') }}"
      alt="Background Image" class="object-cover object-center w-full h-full" />
    <div class="absolute inset-0 bg-black opacity-60"></div>
  </div>

  <!-- Hero Content -->
  <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-4">
    <h1 class="text-4xl sm:text-5xl font-bold leading-tight mb-4">
      🎓 Kesetaraan Peluang untuk Dapatkan Pendidikan Berkualitas
    </h1>
    <p class="text-lg text-gray-300 mb-8 max-w-2xl">
      Berbagai program beasiswa tersedia untuk mendukung calon mahasiswa berprestasi dan berpotensi tinggi, dari berbagai latar belakang.
    </p>
    <a href="#scholarship-list"
      class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
      Lihat Semua Beasiswa
    </a>
  </div>
</div>

<!-- Scholarship List Section -->
<section id="scholarship-list" class="py-16 bg-gray-800">
  <div class="container mx-auto px-4">
    <div class="relative">
      <div class="carousel-container overflow-x-auto pb-6 hide-scrollbar">
        <div class="carousel-track flex space-x-6">

          <!-- Scholarship Card 1 -->
          <div class="carousel-item flex-none w-full sm:w-1/2 lg:w-1/3">
            <div class="tech-card rounded-lg p-6 h-full flex flex-col hover-lift bg-gray-900">
              <div class="flex items-center mb-4">
                <div class="flex-shrink-0 mr-4">
                  <div class="w-12 h-12 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-600 flex items-center justify-center">
                    <i data-feather="award" class="text-black h-6 w-6"></i>
                  </div>
                </div>
                <h3 class="text-xl font-bold text-white">Beasiswa Akademik</h3>
              </div>
              <p class="text-gray-300 mb-6 flex-grow">
                Beasiswa full atau parsial berdasarkan prestasi akademik untuk siswa berprestasi dengan nilai rata-rata 90+.
              </p>
              <a href="#" class="text-[#E2C665] hover:text-yellow-300 inline-flex items-center">
                Lihat Detail
                <i data-feather="arrow-right" class="ml-2 h-4 w-4"></i>
              </a>
            </div>
          </div>

          <!-- Scholarship Card 2 -->
          <div class="carousel-item flex-none w-full sm:w-1/2 lg:w-1/3">
            <div class="tech-card rounded-lg p-6 h-full flex flex-col hover-lift bg-gray-900">
              <div class="flex items-center mb-4">
                <div class="flex-shrink-0 mr-4">
                  <div class="w-12 h-12 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-600 flex items-center justify-center">
                    <i data-feather="code" class="text-black h-6 w-6"></i>
                  </div>
                </div>
                <h3 class="text-xl font-bold text-white">Beasiswa Coding Champion</h3>
              </div>
              <p class="text-gray-300 mb-6 flex-grow">
                Khusus untuk pemenang lomba programming nasional/internasional atau memiliki proyek inovatif di bidang AI.
              </p>
              <a href="#" class="text-[#E2C665] hover:text-yellow-300 inline-flex items-center">
                Lihat Detail
                <i data-feather="arrow-right" class="ml-2 h-4 w-4"></i>
              </a>
            </div>
          </div>

          <!-- Scholarship Card 3 -->
          <div class="carousel-item flex-none w-full sm:w-1/2 lg:w-1/3">
            <div class="tech-card rounded-lg p-6 h-full flex flex-col hover-lift bg-gray-900">
              <div class="flex items-center mb-4">
                <div class="flex-shrink-0 mr-4">
                  <div class="w-12 h-12 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-600 flex items-center justify-center">
                    <i data-feather="users" class="text-black h-6 w-6"></i>
                  </div>
                </div>
                <h3 class="text-xl font-bold text-white">Beasiswa Mahasiswa Dhuafa</h3>
              </div>
              <p class="text-gray-300 mb-6 flex-grow">
                Program subsidi untuk calon mahasiswa dari keluarga kurang mampu yang memiliki potensi akademik tinggi.
              </p>
              <a href="#" class="text-[#E2C665] hover:text-yellow-300 inline-flex items-center">
                Lihat Detail
                <i data-feather="arrow-right" class="ml-2 h-4 w-4"></i>
              </a>
            </div>
          </div>

        </div>
      </div>

      <!-- Navigation Arrows -->
      <button class="carousel-nav-prev absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-1/2 bg-black bg-opacity-50 rounded-full p-2 focus:outline-none hidden md:block">
        <i data-feather="chevron-left" class="text-white h-6 w-6"></i>
      </button>
      <button class="carousel-nav-next absolute top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 bg-black bg-opacity-50 rounded-full p-2 focus:outline-none hidden md:block">
        <i data-feather="chevron-right" class="text-white h-6 w-6"></i>
      </button>
    </div>
  </div>
</section>
<script src="https://unpkg.com/feather-icons"></script>
<script>feather.replace();</script>
