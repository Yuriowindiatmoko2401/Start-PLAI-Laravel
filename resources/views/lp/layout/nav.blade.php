        <!-- Navigation -->
        <nav class="fixed w-full bg-black bg-opacity-90 border-b border-gray-800 z-50">
            <div class="container mx-auto px-4 py-3 flex items-center justify-between">
                <!-- Image Logo -->
                <a href="#" class="flex items-center">
                    <img src="https://dev.plai.ac.id/assets/images/logo/PLAI-BMD%20-%20HORIZONTAL.png" alt="PLAI BMD Logo" class="h-7">
                </a>

                <!-- Desktop menu - centered -->
                <div class="hidden md:flex items-center justify-center space-x-8 mx-auto">
                    <a href="#admissions" class="text-white text-sm hover:text-[#E2C665] transition">Admisi</a>
                    <a href="#requirements" class="text-white text-sm hover:text-[#E2C665] transition">Persyaratan</a>
                    <a href="#process" class="text-white text-sm hover:text-[#E2C665] transition">Proses</a>
                    <a href="#tuition" class="text-white text-sm hover:text-[#E2C665] transition">Biaya Kuliah</a>
                    <a href="#faq" class="text-white text-sm hover:text-[#E2C665] transition">FAQ</a>
                </div>

                <!-- Login button -->
                <div class="hidden md:block">
                    <a href="#login" class="bg-transparent border-2 border-[#E2C665] text-white hover:bg-[#E2C665] hover:text-black text-sm transition py-1.5 px-4 rounded-full">Login</a>
                </div>

                <!-- Mobile menu button -->
                <button class="md:hidden focus:outline-none" id="menuBtn">
                    <i data-feather="menu" class="text-white"></i>
                </button>
            </div>

            <!-- Mobile menu -->
            <div class="hidden md:hidden bg-gray-900 border-b border-gray-800" id="mobileMenu">
                <div class="container mx-auto px-4 py-2 space-y-3">
                    <a href="#admissions" class="block text-white text-sm hover:text-[#E2C665] transition py-2">Admisi</a>
                    <a href="#requirements" class="block text-white text-sm hover:text-[#E2C665] transition py-2">Persyaratan</a>
                    <a href="#process" class="block text-white text-sm hover:text-[#E2C665] transition py-2">Proses</a>
                    <a href="#tuition" class="block text-white text-sm hover:text-[#E2C665] transition py-2">Biaya Kuliah</a>
                    <a href="#faq" class="block text-white text-sm hover:text-[#E2C665] transition py-2">FAQ</a>
                    <div class="pt-2 mt-2 border-t border-gray-800">
                        <a href="#login" class="block bg-transparent border-2 border-[#E2C665] text-[#E2C665] hover:bg-[#E2C665] hover:text-black text-sm transition py-1.5 px-4 my-2 rounded-full text-center">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end of navigation -->
