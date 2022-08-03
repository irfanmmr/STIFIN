@extends('_layouts.main')
@section('body')
    <div class="max-w-screen-2xl mx-auto">
        <div class="max-w-screen-2xl bg-nav fixed top-0 z-50 w-full px-5 lg:px-20 py-2 justify-between flex flex-row">
            <img class="my-auto mb-2" src="../assets/logo.png">
            <img class="my-auto flex lg:hidden" src="../assets/burger.png">
            <div class="hidden lg:flex flex-row lg:space-x-16">
                <div class="underline font-bold my-auto" style="color: #18276F">
                    BERANDA
                </div>
                <div class="font-bold my-auto" style="color: #18276F">
                    ARTIKEL/BLOG
                </div>
                <div class="font-bold my-auto" style="color: #18276F">
                    PROMOTOR
                </div>
            </div>
        </div>


{{--        main--}}

        <div class="px-5 pb-10 pt-24 lg:px-32 lg:py-32">
            <div class="py-8 body-bg px-5 lg:px-10 rounded-2xl relative">
                <div class="text-white font-semibold lg:text-xl font-bold pb-5">
                   Pilihan Paket
                </div>
                <div class="">
                    <div class="space-x-0 lg:space-x-5 flex flex-col-reverse lg:flex-row justify-between">
                        <form action="#" class="w-full lg:w-8/12 py-5 px-5 bg-white rounded-2xl flex flex-col space-y-5">
                            <p class="font-semibold text-lg">Informasi Pemesanan</p>
                            <div class="flex flex-col space-y-10">
                                <div class="flex flex-col space-y-5 px-2">
                                    <p class="font-semibold text-sm">Data Pemesanan</p>
                                    <div class="flex flex-col space-y-5 pr-5">
                                        <div class="flex flex-col lg:flex-row space-x-0 lg:space-x-10 space-y-5 lg:space-y-0">
                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <label for="fname">Nama Depan:</label>
                                                <input class="border-black border-b outline-none px-2 py-1" type="text" id="fname" name="fname">
                                            </div>
                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <label for="fname">Nama Belakang:</label>
                                                <input class="border-black border-b outline-none px-2 py-1" type="text" id="fname" name="fname">
                                            </div>
                                        </div>
                                        <div class="flex flex-col lg:flex-row space-x-0 lg:space-x-10 space-y-5 lg:space-y-0">
                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <label for="fname">Email:</label>
                                                <input class="border-black border-b outline-none px-2 py-1" type="text" id="fname" name="fname">
                                            </div>
                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <label for="fname">Nomber Telepon:</label>
                                                <input class="border-black border-b outline-none px-2 py-1" type="text" id="fname" name="fname">
                                            </div>
                                        </div>
                                        <div class="flex flex-col lg:flex-row space-x-0 lg:space-x-10 space-y-5 lg:space-y-0">
                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <label for="fname">Alamat Domisili</label>
                                                <input class="border-black border-b outline-none px-2 py-1" type="text" id="fname" name="fname">
                                            </div>

                                        </div>
                                        <div class="flex flex-col lg:flex-row space-x-0 lg:space-x-10 space-y-5 lg:space-y-0">
                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <label for="fname">Kota:</label>
                                                <input class="border-black border-b outline-none px-2 py-1" type="text" id="fname" name="fname">
                                            </div>
                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <label for="fname">Kode Pos:</label>
                                                <input class="border-black border-b outline-none px-2 py-1" type="text" id="fname" name="fname">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="flex flex-col space-y-5 px-2">
                                    <p class="font-semibold text-sm">Pilih Pembayaran</p>
                                    <div class="flex flex-col space-y-5 pr-5">
                                        <div class="flex flex-row space-x-10">
                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <select class="border-black border-b outline-none px-2 py-1" id="#">
                                                    <option value="Transfermanual">Transfer Manual</option>
                                                </select>
                                            </div>
                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <select class="border-black border-b outline-none px-2 py-1" id="#">
                                                    <option value="BCA">BCA</option>
                                                    <option value="Mandiri">Mandiri</option>
                                                    <option value="BNI">BNI</option>
                                                    <option value="BRI">BRI</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex flex-col lg:flex-row space-x-0 lg:space-x-10 space-y-5 lg:space-y-0">
                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <label for="fname">Nama Penerima:</label>
                                                <div class="border-black border-b outline-none px-2 py-1" type="text" id="fname" name="fname">
                                                    BCA - STFINAXELYMPT - 8983219831
                                                </div>
                                            </div>

                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <label for="fname">Nama Pengirim:</label>
                                                <input class="border-black border-b outline-none px-2 py-1" type="text" id="fname" name="fname">
                                            </div>
                                        </div>
                                        <div class="flex flex-col lg:flex-row space-x-0 lg:space-x-10 space-y-5 lg:space-y-0">

                                            <div class="border border-black rounded-xl py-5 lg:py-0 flex flex-col w-full justify-between" style="background-color: #E9EEF0;">
                                                <div class="flex flex-col space-y-1 w-full text-xs my-auto text-center">
                                                    <div class="flex flex-col space-y-3 w-full text-xs">
                                                        <p class="my-auto text-lg font-semibold">Biaya Total:</p>
                                                        <p class="text-2xl font-bold" >Rp.650.<span class="body-bg goldtext px-1">021</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex flex-col space-y-1 w-full text-xs">
                                                <div class="rounded-xl w-full h-32 border-black border outline-none px-2 py-1 bg-center bg-contain bg-no-repeat" style="background-color: #E9EEF0; background-image:url('../assets/Placeholder.jpg') " id="#">
                                                   <img class="w-full rounded-xl" src="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="w-full" href="../paket_2/">
                                <input class="w-full body-bg py-5 lg:py-2 px-5 mt-5 rounded-lg text-sm text-white text-center font-semibold" type="Konfirmasi Pembayaran" value="Konfirmasi Pembayaran">
                            </a>
                        </form>
                        <div class="w-full lg:w-4/12 pb-5 lg:pb-0">
                            <div class="ml-auto w-full flex flex-col rounded-2xl" style="background: linear-gradient(274.42deg, #FFFFFF 0%, #FFFFFF 124.45%);box-shadow: 0px 10px 22px rgba(197, 139, 242, 0.3);">
                                <div class="rounded-t-2xl w-full flex flex-col space-y-2 py-5" style="background-color: #23A455;">
                                    <p class="font-bold text-xl text-center text-white">KELUARGA/KELOMPOK</p>
                                    <div class="flex flex-row w-fit mx-auto space-x-3">
                                        <p class="text-xs text-center text-white">
                                            3-9 orang
                                        </p>
                                        <div class="flex flex-row w-8 mx-auto">
                                            <img class="mx-auto z-30" src="../assets/Star%201.png">
                                            <img class="mx-auto z-30" src="../assets/Star%201.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="py-5 space-y-3">
                                    <p class="text-red-500 font-bold line-through text-lg text-center">Rp 750.000</p>
                                    <p class="font-bold text-2xl text-center">Rp 600.000</p>
                                    <p class="text-xs text-center">
                                        Per Orang
                                    </p>
                                </div>

                                <div class="flex flex-col space-y-3 pb-10 px-5">
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="../assets/Vector.png">
                                        <p class="text-sm">Tes STIFIn</p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="../assets/Vector.png">
                                        <p class="text-sm">
                                            Sertifikat
                                        </p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="../assets/Vector.png">
                                        <p class="text-sm">
                                            Penjelasan/Konsultasi
                                        </p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="../assets/Vector.png">
                                        <p class="text-sm">
                                            Tanya Jawab
                                        </p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="../assets/Vector.png">
                                        <p class="text-sm">
                                            Ebook 9 Personaliti Genetik
                                        </p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="../assets/Vector.png">
                                        <p class="text-sm">
                                            Grup Telegram
                                        </p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="../assets/Vector.png">
                                        <p class="text-sm">
                                            Tempat Sesuai Permintaan
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


{{--        foot--}}
        <div class="pb-16 space-x-10 lg:space-x-20 px-8 lg:px-20 lg:pt-12 pt-10 body-bg flex flex-row">
            <div class="flex flex-col space-y-5 w-11/12 lg:w-2/12">
                <img class="lg:w-48" src="../assets/logo%20SF_white%201.svg">
                <p class="text-white text-xs">Kami dari komunitas yang di dirikan dengan tujuan untuk mengenali kperibadian dan meningkatkan kualitas diri menuju Sukses Mulia.</p>
            </div>
            <img src="../assets/Line%201.png">
            <div class="flex flex-col space-y-5 w-8/12 lg:w-1/12">
                <p class="text-white font-semibold text-center">
                    Social Media
                </p>
                <div class="flex flex-col space-y-3 mx-auto">
                    <div class="flex flex-row space-x-3">
                        <img class="w-12" src="../assets/profile/Group%2024.png">
                        <img class="w-12" src="../assets/profile/Group%2025.png">
                    </div>
                    <div class="flex flex-row space-x-3">
                        <img class="w-12" src="../assets/profile/Group%2027.png">
                        <img class="w-12" src="../assets/profile/Group%2023.png">
                    </div>
                    <div class="flex flex-row space-x-3">
                        <img class="w-12" src="../assets/profile/Group%2028.png">
                        <img class="w-12" src="../assets/profile/Group%2026.png">
                    </div>
                </div>

            </div>
            <img class="hidden lg:flex" src="../assets/Line%201.png">
            <div class="hidden lg:flex flex-row space-x-10 w-8/12 lg:flex-1">
                <img class="w-64 rounded-2xl" src="../assets/image%2022.png">

                <div class="flex flex-col space-y-5 text-white">
                    <p class="font-bold">
                        Lokasi Kami
                    </p>
                    <div class="flex flex-col space-y-3 mx-auto text-sm">
                        <p>
                            Jl. Guru Kojar, Jurang Mangu Barat, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15220
                            <br>
                            <br>
                            085880101910
                            marsha.listiyani@gmail.com
                        </p>
                    </div>
                </div>

            </div>
        </div>


    </div>


@endsection
