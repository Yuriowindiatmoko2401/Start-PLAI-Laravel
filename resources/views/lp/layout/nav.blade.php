        <!-- Navigation -->
        <nav class="fixed w-full bg-black bg-opacity-90 z-50 font-['Rubik',sans-serif]">
            <div class="container mx-auto px-4 py-3 flex items-center justify-between">
                <!-- Image Logo -->
                <a href="#" class="flex items-center">
                    <img src="https://dev.plai.ac.id/assets/images/logo/PLAI-BMD%20-%20HORIZONTAL.png" alt="PLAI BMD Logo" class="h-7">
                </a>

                <!-- Desktop menu - centered -->
                <ul class="hidden md:flex items-center justify-center space-x-8 mx-auto pl-0 mb-0 list-none">
                    <li><a href="#admissions" class="md:text-white hover:text-[#E2C665] transition py-[10px] px-[10px] inline-block">Admisi</a></li>
                    <li><a href="#requirements" class="md:text-white hover:text-[#E2C665] transition py-[10px] px-[10px] inline-block">Persyaratan</a></li>
                    <li><a href="#process" class="md:text-white hover:text-[#E2C665] transition py-[10px] px-[10px] inline-block">Proses</a></li>
                    <li><a href="#tuition" class="md:text-white hover:text-[#E2C665] transition py-[10px] px-[10px] inline-block">Biaya Kuliah</a></li>
                    <li><a href="#faq" class="md:text-white hover:text-[#E2C665] transition py-[10px] px-[10px] inline-block">FAQ</a></li>
                </ul>

                <!-- Login button -->
                <div class="hidden md:block">
                    <a href="#login" class="bg-transparent border-2 border-[#E2C665] md:text-white hover:bg-[#E2C665] hover:text-black transition py-1.5 px-4 rounded-full">Login</a>
                </div>

                <!-- Mobile menu button -->
                <button class="md:hidden focus:outline-none" id="menuBtn">
                    <i data-feather="menu" class="md:text-white"></i>
                </button>
            </div>

            <!-- Mobile menu -->
            <div class="hidden md:hidden bg-gray-900" id="mobileMenu">
                <div class="container mx-auto px-4 py-2">
                    <ul class="pl-0 mb-0 space-y-2 list-none">
                        <li><a href="#admissions" class="block md:text-white hover:text-[#E2C665] transition py-[10px] px-[10px]">Admisi</a></li>
                        <li><a href="#requirements" class="block md:text-white hover:text-[#E2C665] transition py-[10px] px-[10px]">Persyaratan</a></li>
                        <li><a href="#process" class="block md:text-white hover:text-[#E2C665] transition py-[10px] px-[10px]">Proses</a></li>
                        <li><a href="#tuition" class="block md:text-white hover:text-[#E2C665] transition py-[10px] px-[10px]">Biaya Kuliah</a></li>
                        <li><a href="#faq" class="block md:text-white hover:text-[#E2C665] transition py-[10px] px-[10px]">FAQ</a></li>
                    </ul>
                    <div class="pt-2 mt-2 border-t border-gray-800">
                        <a href="#login" class="block bg-transparent border-2 border-[#E2C665] md:text-white hover:bg-[#E2C665] hover:text-black transition py-1.5 px-4 my-2 rounded-full text-center">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end of navigation -->
