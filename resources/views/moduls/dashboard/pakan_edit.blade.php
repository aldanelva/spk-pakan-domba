@extends('layouts.main', [
    'title' => 'Edit Pakan',
    'active' => 'Pakan Domba'
])

@section('content')
<section class="flex w-full">
    @include('moduls.dashboard.layouts.sidebar', ['active' => 'Pakan Domba', 'data' => 0])
    <div class="flex flex-col w-full">
        <div class="sm:px-6 w-full">
            <div class="px-4 py-4 md:pt-12 md:pb-7 -mb-8">
                <div class="flex items-start gap-2 w-full">
                    <i class='bx bxs-bowl-rice text-5xl text-primary'></i>
                    <div class="flex flex-col gap-1">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-2xl lg:text-3xl font-bold leading-normal text-gray-800 mt-1">
                            EDIT PAKAN
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 mr-16 w-full max-w-full min-w-full">
                <div class="overflow-x-auto w-full min-w-full box bg-white p-8 rounded-lg shadow-md">
                    <form action="{{ route('pakan.update', $pakan->id) }}" method="post">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="mb-4">
                                <label for="kode_alternatif" class="text-gray-700 text-base font-medium">Kode Alternatif</label>
                                <input name="kode_alternatif" type="text" id="kode_alternatif" value="{{ $pakan->kode_alternatif }}" placeholder="Kode Alternatif" class="mt-2 px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none w-full" />
                            </div>
                            <div class="mb-4">
                                <label for="jenis_pakan" class="text-gray-700 text-base font-medium">Jenis Pakan</label>
                                <input name="jenis_pakan" type="text" id="jenis_pakan" value="{{ $pakan->jenis_pakan }}" placeholder="Jenis Pakan" class="mt-2 px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none w-full" />
                            </div>
                            <div class="mb-4">
                                <label for="serat" class="text-gray-700 text-base font-medium">Serat (%)</label>
                                <input name="serat" type="number" step="0.01" id="serat" value="{{ $pakan->serat }}" placeholder="Serat (%)" class="mt-2 px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none w-full" />
                            </div>
                            <div class="mb-4">
                                <label for="lemak" class="text-gray-700 text-base font-medium">Lemak (%)</label>
                                <input name="lemak" type="number" step="0.01" id="lemak" value="{{ $pakan->lemak }}" placeholder="Lemak (%)" class="mt-2 px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none w-full" />
                            </div>
                            <div class="mb-4">
                                <label for="abu" class="text-gray-700 text-base font-medium">Abu (%)</label>
                                <input name="abu" type="number" step="0.01" id="abu" value="{{ $pakan->abu }}" placeholder="Abu (%)" class="mt-2 px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none w-full" />
                            </div>
                            <div class="mb-4">
                                <label for="protein" class="text-gray-700 text-base font-medium">Protein (%)</label>
                                <input name="protein" type="number" step="0.01" id="protein" value="{{ $pakan->protein }}" placeholder="Protein (%)" class="mt-2 px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none w-full" />
                            </div>
                            <div class="mb-4">
                                <label for="harga" class="text-gray-700 text-base font-medium">Harga</label>
                                <select name="harga" id="harga" class="mt-2 px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none w-full">
                                    <option value="Sangat Murah" {{ $pakan->harga == 'Sangat Murah' ? 'selected' : '' }}>Sangat Murah</option>
                                    <option value="Cukup" {{ $pakan->harga == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                                    <option value="Mahal" {{ $pakan->harga == 'Mahal' ? 'selected' : '' }}>Mahal</option>
                                    <option value="Sangat Mahal" {{ $pakan->harga == 'Sangat Mahal' ? 'selected' : '' }}>Sangat Mahal</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="jarak" class="text-gray-700 text-base font-medium">Jarak</label>
                                <select name="jarak" id="jarak" class="mt-2 px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none w-full">
                                    <option value="Sangat Dekat" {{ $pakan->jarak == 'Sangat Dekat' ? 'selected' : '' }}>Sangat Dekat</option>
                                    <option value="Dekat" {{ $pakan->jarak == 'Dekat' ? 'selected' : '' }}>Dekat</option>
                                    <option value="Cukup" {{ $pakan->jarak == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                                    <option value="Jauh" {{ $pakan->jarak == 'Jauh' ? 'selected' : '' }}>Jauh</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="ketersediaan" class="text-gray-700 text-base font-medium">Ketersediaan</label>
                                <select name="ketersediaan" id="ketersediaan" class="mt-2 px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:outline-none w-full">
                                    <option value="Sedikit" {{ $pakan->ketersediaan == 'Sedikit' ? 'selected' : '' }}>Sedikit</option>
                                    <option value="Cukup" {{ $pakan->ketersediaan == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                                    <option value="Banyak" {{ $pakan->ketersediaan == 'Banyak' ? 'selected' : '' }}>Banyak</option>
                                    <option value="Sangat Banyak" {{ $pakan->ketersediaan == 'Sangat Banyak' ? 'selected' : '' }}>Sangat Banyak</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex items-center justify-end pt-3 border-t border-solid border-gray-200 rounded-b">
                            <button class="text-gray-500 bg-transparent font-bold px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="history.back()">
                                Cancel
                            </button>
                            <button type="submit" class="focus:ring-2 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
                                <p class="text-base font-semibold leading-none text-white">Update Data</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
