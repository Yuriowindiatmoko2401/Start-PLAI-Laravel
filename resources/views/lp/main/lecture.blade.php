<section id="faq" class="py-16 bg-gray-900">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white">
        <span class="inline-block px-2 py-1 bg-[#E2C665] text-black rounded-md mr-2">❓</span>
        Pertanyaan Umum tentang Penerimaan Mahasiswa Baru
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
      
      <!-- FAQ 1 -->
      <div class="bg-gray-800 border border-gray-700 rounded-lg overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-1">
        <button class="w-full text-left p-5 flex items-center justify-between bg-gray-800 hover:bg-gray-700 transition-colors" onclick="toggleFaq(this)">
          <span class="text-white font-medium">Apa saja biaya kuliah di PLAI?</span>
          <i data-feather="chevron-down" class="text-[#E2C665] faq-icon transition-transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-300 hidden">
          <p>
            Biaya kuliah di PLAI BMD terdiri dari biaya pendaftaran sebesar <strong>Rp. 350.000</strong>,
            biaya Kuliah Awal <strong>Rp. 35.000.000</strong> (bisa dicicil), dan Biaya Kuliah Semester
            <strong>Rp. 15.000.000</strong> (bisa dicicil).
          </p>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="bg-gray-800 border border-gray-700 rounded-lg overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-1">
        <button class="w-full text-left p-5 flex items-center justify-between bg-gray-800 hover:bg-gray-700 transition-colors" onclick="toggleFaq(this)">
          <span class="text-white font-medium">Apakah perlu memiliki background IT untuk mendaftar?</span>
          <i data-feather="chevron-down" class="text-[#E2C665] faq-icon transition-transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-300 hidden">
          <p>
            Tidak perlu memiliki background IT khusus, tetapi calon mahasiswa diharapkan memiliki minat tinggi pada bidang teknologi, kemampuan dasar logika dan matematika yang baik, serta kemauan untuk belajar yang kuat.
          </p>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="bg-gray-800 border border-gray-700 rounded-lg overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-1">
        <button class="w-full text-left p-5 flex items-center justify-between bg-gray-800 hover:bg-gray-700 transition-colors" onclick="toggleFaq(this)">
          <span class="text-white font-medium">Apa saja yang dipersiapkan untuk tes seleksi?</span>
          <i data-feather="chevron-down" class="text-[#E2C665] faq-icon transition-transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-300 hidden">
          <p>
            Tes seleksi meliputi: Tes logika dan penalaran, dan Kalibrasi Nilai Raport.
            Persiapkan diri dengan melatih soal logika dan memahami perkembangan teknologi AI terkini.
          </p>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="bg-gray-800 border border-gray-700 rounded-lg overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-1">
        <button class="w-full text-left p-5 flex items-center justify-between bg-gray-800 hover:bg-gray-700 transition-colors" onclick="toggleFaq(this)">
          <span class="text-white font-medium">Bagaimana sistem perkuliahan di PLAI BMD?</span>
          <i data-feather="chevron-down" class="text-[#E2C665] faq-icon transition-transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-300 hidden">
          <p>
            PLAI BMD menerapkan sistem perkuliahan berbasis <strong>Project-Based Learning</strong> dengan 70% praktek dan 30% teori.
            Kelas berlangsung 5 hari dalam seminggu dengan durasi 8 jam per hari.
            Mahasiswa akan banyak mengerjakan proyek nyata dan berkolaborasi dengan industri.
          </p>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="bg-gray-800 border border-gray-700 rounded-lg overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-1">
        <button class="w-full text-left p-5 flex items-center justify-between bg-gray-800 hover:bg-gray-700 transition-colors" onclick="toggleFaq(this)">
          <span class="text-white font-medium">Apakah mahasiswa akan membuat produk atau startup sendiri di PLAI BMD?</span>
          <i data-feather="chevron-down" class="text-[#E2C665] faq-icon transition-transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-300 hidden">
          <p>
            Ya, mahasiswa PLAI BMD akan dibimbing untuk membuat produk digital sejak tahun pertama. Tersedia program inkubasi startup, bootcamp, dan bimbingan dari praktisi industri. Selain itu, mahasiswa juga berkesempatan mengembangkan produk kolaboratif bersama mitra industri ataupun mandiri crowdfund yang siap di-launch ke pasar.
          </p>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="bg-gray-800 border border-gray-700 rounded-lg overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-1">
        <button class="w-full text-left p-5 flex items-center justify-between bg-gray-800 hover:bg-gray-700 transition-colors" onclick="toggleFaq(this)">
          <span class="text-white font-medium">Di mana lokasi kampus PLAI BMD berada?</span>
          <i data-feather="chevron-down" class="text-[#E2C665] faq-icon transition-transform"></i>
        </button>
        <div class="faq-content p-5 text-gray-300 hidden">
          <p>
            Kampus PLAI BMD berlokasi di Kota Yogyakarta, salah satu kota pendidikan terbaik di Indonesia. Akses mudah, lingkungan belajar kondusif, dan dikelilingi komunitas teknologi yang aktif.
          </p>
        </div>
      </div>

    </div>
  </div>

  <!-- Feather icons and toggle script -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace();

    function toggleFaq(button) {
      const content = button.nextElementSibling;
      const icon = button.querySelector('.faq-icon');
      content.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    }
  </script>
</section>
