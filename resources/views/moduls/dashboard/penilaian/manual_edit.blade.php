@extends('layouts.main', [
    'title' => 'Dashboard',
    'active' => 'Penilaian',
])

@section('content')
    <section class="w-full bg-primary mx-auto flex md:flex-row flex-col items-center justify-center h-full body relative">
        <div class="w-full px-16 py-5 top-0 fixed bg-white h-fit flex justify-between items-center z-50">
            <div class="flex gap-2 items-center">

                <img src="{{ asset('assets/images/sheep.png') }}" alt="Sheep Icon"
                    class="w-12 h-12 text-primary tracking-
[               -2px]">
                <h2 class="text-left text-2xl text-primary tracking-[-2px] font-bold">Sistem Pendukung Keputusan Pemilihan
                    Pakan Domba</h2>
            </div>

            <div class="w-fit flex gap-2">
                {{-- <a href="{{route('login')}}" class="bg-primary text-white px-5 py-2 rounded-full text-lg font-medium"><i class='bx bxs-user-circle mr-2'></i>Login Sebagai Admin</a> --}}
                <a href="{{ route('user') }}" class="bg-primary text-white px-5 py-2 rounded-full text-lg font-medium"><i
                        class='bx bxs-pencil mr-2'></i>Lakukan Penilaian Alternatif</a>
            </div>

        </div>

        <div class="flex flex-col w-full relative h-full top-20 z-10">
            <div class="sm:px-6 w-full w-full max-w-7xl mx-auto">
                <div class="px-4 py-4 md:pt-12 md:pb-7">
                    <div class="flex items-start gap-2 w-full">
                        <i class='bx bxs-star text-5xl text-white'>
                        </i>
                        <div class="flex fl
e                           x-col gap-1">
                            <p tabindex="0"
                                class="focus:outline-none text-base sm:text-lg md:text-2xl text-white lg:text-3xl font-bold leading-normal text-gray-800 mt-2 mb-5">
                                EDIT PENILAIAN</p>
                            <p class="text-gray-400 max-w-2xl">&nbsp;</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 mr-16 w-full max-w-full min-w-full">
                    <div class="overflow-x-auto w-full min-w-full box bg-white p-8 rounded-lg">
                        <form action="{{ route('penilaian.user.update', $penilaian->id) }}" method="post">
                            @csrf
                            {{-- <div class="flex gap-1">
                                <div class="mb-1 pt-0 w-full">
                                    <label for="kode_alternatif" class="text-blueGray-600 text-base font-medium">Kode
                                        Alternatif</label>
                                    <input name="kode_alternatif" type="text" id="kode_alternatif"
                                        value="{{ $penilaian->kode_alternatif }}" placeholder="Kode Alternatif"
                                        class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                                </div>
                                <div class="mb-1 pt-0 w-full">
                                    <label for="jenis_pakan" class="text-blueGray-600 text-base font-medium">Jenis
                                        Pakan</label>
                                    <input name="jenis_pakan" type="text" id="jenis_pakan"
                                        value="{{ $penilaian->jenis_pakan }}" placeholder="Jenis Pakan"
                                        class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                                </div>
                            </div> --}}

                            <div class="grid grid-cols-2 gap-1">
                                <div class="mb-1 pt-0 w-full">
                                    <label for="" class="text-blueGray-600 text-base font-medium">Kode
                                        Alternatif</label>
                                    <input name="kode_alternatif" id=""
                                        class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"
                                        value="{{ $penilaian->kode_alternatif }}">
                                </div>
                                <div class="mb-1 pt-0 w-full">
                                    <label for="" class="text-blueGray-600 text-base font-medium">Jenis
                                        Pakan</label>
                                    <input name="jenis_pakan" id=""
                                        class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"
                                        value="{{ $penilaian->jenis_pakan }}">
                                </div>
                            </div>

                            {{-- tambah inputan kriteria --}}
                            <div class="grid grid-cols-2 gap-1">
                                @php
                                    $bobots = explode(', ', $penilaian->bobot);
                                @endphp
                                @foreach ($kriterias as $i => $kriteria)
                                    <div class="mb-1
                              p                         t-0 w-full">
                                        <label for=""
                                            class="text-blueGray-6
                                                       00 text-base font-medium">{{ $kriteria->nama_kriteria }}</label>
                                        <select name="kode_kriteria[]" id=""
                                            class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                            <option value="">Pilih Subkriteria</option>
                                            @foreach ($kriteria->bobots as $bobot)
                                                <option value="{{ $bobot->bobot }}"
                                                    @if ($bobot->bobot == $bobots[$i]) selected @endif>
                                                    {{ $bobot->nama_sub_kriteria }} -
                                                    {{ $bobot->bobot }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endforeach
                            </div>


                            <div
                                class="flex items-center justify-end pt-3 border-t border-solid border-blueGray-200 rounded-b">
                                <button
                                    class="text-gray-500 background-transparent font-bold px-6 py-2 text-base outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button" onclick="history.back()">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="focus:ring-2 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-primary hover:bg-primary focus:outline-none rounded">
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
