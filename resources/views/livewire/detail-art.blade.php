<div>
    <div class="flex flex-row gap-x-10">
        <img src="{{ $art->images[0] }}" alt="{{ $art->name }}" class="rounded-2xl w-2/6"/>
        <div class="flex flex-col gap-y-4">
            <h1 class="text-lg font-semibold">{{ $art->name }}</h1>
            <p class="text-3xl font-extrabold">${{ $art->price }}</p>
        </div>
        <div class="w-2/6 border border-gray-300 rounded-2xl p-4 flex flex-col gap-3 justify-between">
            <h2 class="font-semibold">Atur jumlah dan catatan</h2>
            <div class="flex flex-row items-center gap-5">
                <input type="number" class="border border-gray-400 rounded-lg h-8 w-1/2 px-3 text-center" min="1"
                       max="{{ $art->stock }}"
                       value="1"/>
                <span>Stok {{ $art->stock }}</span>
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex gap-3">
                    <button wire:click="addToCart({{$art->id}})" class="bg-primary p-2 rounded-lg text-white w-full">
                        Keranjang
                    </button>
                    <button type="button" id="openModalBtn" class="bg-primary p-2 rounded-lg text-white w-full">Nego
                    </button>
                </div>
                <button class="bg-primary p-2 rounded-lg text-white w-full">Beli Langsung</button>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="modal" class="hidden w-full h-full fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
            <!-- Modal Header -->
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold">Nego Karya</h3>
                <button id="closeModalBtn" class="text-gray-600 hover:text-gray-800">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="mb-4">
                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                    <input type="number"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary"/>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex justify-end">
                <button id="closeModalBtnFooter" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Nego Sekarang
                </button>
            </div>
        </div>
    </div>
</div>