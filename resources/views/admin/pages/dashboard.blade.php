
@extends('admin.layouts.admin-app')
    @section('title')
    Admin The Plants - Traditional Medicinal Plants in Papua
    @endsection
@section('content')


    <!-- PAGES -->
    <div  class="mt-9">
        <section>
            <div class="py-8 px-4 ml-64 lg:py-16 lg:px-6">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-700">Dashboard</h2>
                    <p class="mb-4 font-light">Tanaman Obat Papua</p>
                    <p class="mb-4 font-medium">Tanaman obat adalah Tanaman yang telah diidentifikasi dan diketahui berdasarkan pengamatan manusia memiliki senyawa yang bermanfaat untuk mencegah dan menyembuhkan penyakit, melakukan fungsi biologis tertentu.</p>

                    <a @click.prevent="page='dataTanaman'"
                        class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 hover:shadow-lg transition cursor-pointer">
                        Jelajahi Tanaman Tradisional Papua
                        <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>

                </div>
            </div>
          </section>

@stop


