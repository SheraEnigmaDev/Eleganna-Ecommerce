@extends ('main.main')

@section('content')

<main class="container mx-auto my-10 pt-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Gambar -->
        <div class="flex justify-center">
            <img src="{{ asset('img/bottom3.svg') }}" class="w-[450px] h-[600px] object-cover rounded-md" alt="Olive Belle Pants">
        </div>

        <!-- Detail Produk -->
        <div class="pr-44">
            <h2 class="text-2xl font-bold mb-2">Olive Belle Pants</h2>
            <p class="text-gray-600 mb-4">
            Celana hijau zaitun dengan potongan melebar. Tampilan ini cocok untuk gaya chic sehari-hari.
            </p>
            <p class="text-2xl text-red-500 font-medium mb-6">IDR 400.000</p>

            <!-- Ukuran -->
            <div class="mb-6">
                <label class="font-semibold block mb-2">Ukuran:</label>
                <div class="flex gap-2">
                    <input type="radio" class="hidden" id="size-36" name="ukuran">
                    <label for="size-36" class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100">S</label>

                    <input type="radio" class="hidden" id="size-37" name="ukuran">
                    <label for="size-37" class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100">M</label>

                    <input type="radio" class="hidden" id="size-38" name="ukuran">
                    <label for="size-38" class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100">L</label>

                    <input type="radio" class="hidden" id="size-39" name="ukuran">
                    <label for="size-39" class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100">XL</label>

                </div>
            </div>

            <!-- Tombol Beli -->
            <button class="w-full bg-black text-white py-2 rounded-md hover:bg-gray-800 transition">BELI SEKARANG</button>
            <button class="w-full mt-2 border border-black text-black py-2 rounded-md hover:bg-gray-100 transition">TAMBAH KE FAVORIT</button>

            <!-- Kategori -->
            <p class="mt-4 text-gray-600">
                Kategori: <span class="font-semibold">Bottoms</span>
            </p>
        </div>
    </div>
</main>

@endsection