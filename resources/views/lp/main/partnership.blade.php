<!-- Registration Form Styled Like Mitra Section -->
<section id="form" class="py-24 bg-gray-900">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-[#E2C665]">
        Daftar Sekarang
      </h2>
      <p class="text-white max-w-2xl mx-auto">
        Isi formulir di bawah ini dan tim admisi kami akan menghubungi Anda segera. Ayo jadi bagian dari generasi AI Indonesia!
      </p>
    </div>

    <!-- Grid-style Form -->
    <form id="registrationForm" class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Nama -->
      <div class="flex flex-col">
        <label for="nama" class="text-sm text-gray-300 mb-1">Nama Lengkap*</label>
        <input type="text" id="nama" name="nama" required
          class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white focus:ring-2 focus:ring-[#E2C665] focus:border-transparent">
      </div>

      <!-- Telepon -->
      <div class="flex flex-col">
        <label for="telepon" class="text-sm text-gray-300 mb-1">Nomor HP / WhatsApp*</label>
        <input type="tel" id="telepon" name="telepon" required
          class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white focus:ring-2 focus:ring-[#E2C665] focus:border-transparent">
      </div>

      <!-- Email -->
      <div class="flex flex-col">
        <label for="email" class="text-sm text-gray-300 mb-1">Email*</label>
        <input type="email" id="email" name="email" required
          class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white focus:ring-2 focus:ring-[#E2C665] focus:border-transparent">
      </div>

      <!-- Sekolah -->
      <div class="flex flex-col">
        <label for="sekolah" class="text-sm text-gray-300 mb-1">Asal Sekolah*</label>
        <input type="text" id="sekolah" name="sekolah" required
          class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white focus:ring-2 focus:ring-[#E2C665] focus:border-transparent">
      </div>

      <!-- Program -->
      <div class="flex flex-col md:col-span-2">
        <label for="program" class="text-sm text-gray-300 mb-1">Program yang Diminati*</label>
        <select id="program" name="program" required
          class="w-full px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white focus:ring-2 focus:ring-[#E2C665] focus:border-transparent">
          <option value="" disabled selected>Pilih Program</option>
          <option value="ai_developer">AI & Robotika</option>
          <option value="data_scientist">Sains Data Terapan</option>
          <option value="ml_engineer">Keamanan Siber</option>
        </select>
      </div>

      <!-- Checkbox -->
      <div class="flex items-start md:col-span-2">
        <input type="checkbox" id="captcha" name="captcha" required
          class="mt-1 h-4 w-4 text-yellow-500 focus:ring-yellow-500 border-gray-600 rounded">
        <label for="captcha" class="ml-3 text-sm text-gray-300">Saya bukan robot dan setuju dengan kebijakan privasi</label>
      </div>

      <!-- Submit -->
      <div class="md:col-span-2 text-center mt-4">
        <button type="submit"
          class="bg-[#E2C665] hover:bg-yellow-400 text-black font-bold py-3 px-8 rounded-full transition transform hover:-translate-y-1">
          Kirim Formulir
        </button>
      </div>
    </form>
  </div>
</section>
