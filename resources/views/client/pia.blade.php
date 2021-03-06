@extends('layouts.index')
@section('content')
@if(!empty($_GET))
@php $to = htmlspecialchars($_GET["to"]) @endphp
@endif
<audio id="audio" src="http://docs.google.com/uc?export=open&id=1VekhUUWu5dSjsL8O1NQWQm_17Z9x37mJ"></audio>
<div class="align-items-center d-flex text-center" style="top:0;bottom:0;left:auto;right:0;z-index:2;position:fixed">
<ul class="list-nav me-3">
    <li class="d-flex justify-content-center mb-3">
    <a href="javascript:void(0)" onclick="play()">
        <div class="btn-icon alert-primary text-center text-primary">
            <i id="play" class="bi bi-play-fill"></i>
        </div>
    </a>
    </li>
    <li class="mb-4 d-none">
    <div class="alert-primary p-2 rounded-pill py-4">
    <div class="list-group list-group-flush d-flex text-center rounded-start nav-client">
        <a href="javascript:void(0)" class="list-group-item list-group-item-action" onClick="ouTer('#home')">
            <img src="{{ asset('img/1.svg') }}" alt="" width="20" class="mb-2">
            <div class="text-uppercase" style="font-size:8px">Home</div>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action pt-2" onClick="ouTer('#profile')">
            <img src="{{ asset('img/2.svg') }}" alt="" width="20" class="mb-2">
            <div class="text-uppercase" style="font-size:8px">Profile</div>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action pt-2" onClick="ouTer('#detail')">
            <img src="{{ asset('img/3.svg') }}" alt="" width="20" class="mb-2">
            <div class="text-uppercase" style="font-size:8px">Detail</div>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action pt-2" onClick="ouTer('#gallery')">
            <img src="{{ asset('img/4.svg') }}" alt="" width="20" class="mb-2">
            <div class="text-uppercase" style="font-size:8px">Gallery</div>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action pt-2" onClick="ouTer('#comment')">
            <img src="{{ asset('img/5.svg') }}" alt="" width="20" class="mb-2">
            <div class="text-uppercase" style="font-size:8px">Comment</div>
        </a>
    </div>
    </div>
    </li>
    <li class="d-flex justify-content-center">
    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalShare">
        <div class="btn-icon alert-primary text-center text-primary">
            <i class="bi bi-share-fill"></i>
        </div>
    </a>
    </li>
    </ul>
</div>

<div class="modal fade" id="modalClient" tabindex="-1" aria-labelledby="modalClientLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
      <div class="position-relative">
    <div class="modal-content mod-1" style="background-size:cover;background-position:top">
    <div class="d-flex align-items-center min-vh-100 container text-center">
        <div class="w-100" style="z-index:2">
        <p class="lead text-white">Wedding Invitation</p>
        <h1 class="display-1 w-1 mb-0 text-white">Silpia & Jaenudin</h1>
        <p class="lead text-white">Minggu, 03 Juli 2022</p>
        <button class="btn btn-primary rounded-pill btn-open" onclick="play()" data-bs-dismiss="modal">Open Invitation</button>
        @if(!empty($_GET))
    <div class="text-center mt-3 text-white" style="z-index:1">
    <div class="p-3">
        <p class="small mb-0">Kepada Tamu YTH</p>
        <span class="text-capitalize w-1 lead">{{ str_replace('_', ' ' , str_replace(' ', ' & ' , $to)) }}</span>
    </div>
</div>
@endif
        </div>
    </div>
    </div>
    <div class="to-center grad-1"></div>
    </div>
  </div>
</div>

<div class="position-relative bg-primary" id="home">
<div class="min-vh-100 mod-1" style="background-size:cover;background-position:center"></div>
<div class="to-center grad-1 d-flex align-items-center text-center text-white">
    <div class="container">
        <p class="lead">Wedding Invitation</p>
        <h1 class="display-1 w-1 mb-0">Silpia & Jaenudin</h1>
        <p class="lead">Minggu, 03 Juli 2022</p>
    </div>
</div>
</div>
<div class="position-relative">
<section class="space-m" style="z-index:1">
    <div class="container">
    <div class="row" style="overflow:hidden">
    <div class="col-md-6 offset-md-3 text-center">
    <h1 class="w-1 text-center text-primary" data-aos="fade-left" data-aos-duration="1000">Menuju Hari Bahagia</h1>
        <div id="countdown" class="row mb-4">
            <div class="col" data-aos="fade-down" data-aos-duration="1000">
                <div class="position-relative">
            <div class="alert-primary rounded">
                <img src="https://dummyimage.com/500" alt="" width="100%" class="opacity-0 rounded">
            </div>
            <div class="to-center align-items-center d-flex text-center">
                <div class="w-100">
                    <h1 class="mb-0 days fw-bold text-primary">00</h1>
                    <small class="text-primary">Day</small>
                </div>
            </div>
            </div>
            </div>
            <div class="col" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50">
                <div class="position-relative">
            <div class="alert-primary rounded">
                <img src="https://dummyimage.com/500" alt="" width="100%" class="opacity-0 rounded">
            </div>
            <div class="to-center align-items-center d-flex text-center">
                <div class="w-100">
                    <h1 class="mb-0 hours fw-bold text-primary">00</h1>
                    <small class="text-primary">Hour</small>
                </div>
            </div>
            </div>
            </div>
            <div class="col" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                <div class="position-relative">
            <div class="alert-primary rounded">
                <img src="https://dummyimage.com/500" alt="" width="100%" class="opacity-0 rounded">
            </div>
            <div class="to-center align-items-center d-flex text-center">
                <div class="w-100">
                    <h1 class="mb-0 minute fw-bold text-primary">00</h1>
                    <small class="text-primary">Minute</small>
                </div>
            </div>
            </div>
            </div>
            <div class="col" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">
                <div class="position-relative">
            <div class="alert-primary rounded">
                <img src="https://dummyimage.com/500" alt="" width="100%" class="opacity-0 rounded">
            </div>
            <div class="to-center align-items-center d-flex text-center">
                <div class="w-100">
                    <h1 class="mb-0 second fw-bold text-primary">00</h1>
                    <small class="text-primary">Second</small>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div data-aos="fade-right" data-aos-duration="1000">
            <p>Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</p>
            <p class="w-1">(QS.Ar-Rum 21)</p>
        </div>
    </div>
    </div>
    </div>
</section>
<div class="text-start to-top" style="z-index:-1">
    <img src="{{ asset('img/shape-1.jpg') }}" alt="" class="res-img-1">
</div>
<div class="text-end to-bottom" style="z-index:-1">
    <img src="{{ asset('img/shape-2.jpg') }}" alt="" class="res-img-1">
</div>
</div>

<section class="mb-2" style="overflow:hidden" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
    <div class="">
    
    <div class="swiper slider-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
      <div class="swiper-wrapper">
        
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLUREhiaJYPF3V4KTNADWJk-Kye86OPNgTjbnviFVeyQvclrgGNU72BiXQpAAqoiSCrfEgz-eBXG63WWSvGCHJ4H-Giw0hCPP53tLvnQagNgLi4VX5Zt94JgHeanGKssdAypvomRUfzQp7e655GlFEFq=w973-h649-no" data-caption="Silpia & Jaenudin" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLUREhiaJYPF3V4KTNADWJk-Kye86OPNgTjbnviFVeyQvclrgGNU72BiXQpAAqoiSCrfEgz-eBXG63WWSvGCHJ4H-Giw0hCPP53tLvnQagNgLi4VX5Zt94JgHeanGKssdAypvomRUfzQp7e655GlFEFq=w973-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLWupVRK1vBy-CNV6dhi6ueZ-g_WzOt654aS3vfjaNS_9MfGDnu01PWfpRQU2vemdFGhfRS8_7enDKhfVL6tJ6SxuCbiDyI1GmK4K_PDIMpD5lEDVJo88_Tq-SV08LifC9vY9skVNfFiVNUYDXIeLVaE=w973-h649-no" data-caption="Silpia & Jaenudin" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLWupVRK1vBy-CNV6dhi6ueZ-g_WzOt654aS3vfjaNS_9MfGDnu01PWfpRQU2vemdFGhfRS8_7enDKhfVL6tJ6SxuCbiDyI1GmK4K_PDIMpD5lEDVJo88_Tq-SV08LifC9vY9skVNfFiVNUYDXIeLVaE=w973-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLViw41tkNcyt4P_jUrXCI60IuP-MrBoeuzzziEr3iApsKQRlydrtG7NGUlipVFvJ0KQSGG7mUNXTi7p-uyMbfFFP3PSkPMfMuZ6f1P-jUSG7K-R5jhPRzQ9C5Q2ouumTzv-XJ3yu9ZSDMcu3-EO7CO5=w973-h649-no" data-caption="Silpia & Jaenudin" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLViw41tkNcyt4P_jUrXCI60IuP-MrBoeuzzziEr3iApsKQRlydrtG7NGUlipVFvJ0KQSGG7mUNXTi7p-uyMbfFFP3PSkPMfMuZ6f1P-jUSG7K-R5jhPRzQ9C5Q2ouumTzv-XJ3yu9ZSDMcu3-EO7CO5=w973-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLVY6OcOHCE6347H7SdPhDzY3IMHh25m8x9RjJHFsMDzEOGGCJQDbLUrnJ4f3BVtTMjjTF6K2-CWFzodC-z3F8lZQR3m9xocMDGgg7xYr7tDsTBmJtqWQqpQPTZSaemrUwqMDNftkHAs7SBAWOuN5DOK=w973-h649-no" data-caption="Silpia & Jaenudin" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLVY6OcOHCE6347H7SdPhDzY3IMHh25m8x9RjJHFsMDzEOGGCJQDbLUrnJ4f3BVtTMjjTF6K2-CWFzodC-z3F8lZQR3m9xocMDGgg7xYr7tDsTBmJtqWQqpQPTZSaemrUwqMDNftkHAs7SBAWOuN5DOK=w973-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLVWHbfSYjxFY1xlTN3nyAJWHoltZKMW3neRyJ9foD-2sMZDLWX4MzpJqvtjDncdE10mQc4JVcgD2EF4qWvXtzCU8cC-PSt0ZaDkcsH_LX593EBkGMCIpu7IxhaUeLMgQi01FKJiZNnHcDu7Tt1McJ0p=w973-h649-no" data-caption="Silpia & Jaenudin" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLVWHbfSYjxFY1xlTN3nyAJWHoltZKMW3neRyJ9foD-2sMZDLWX4MzpJqvtjDncdE10mQc4JVcgD2EF4qWvXtzCU8cC-PSt0ZaDkcsH_LX593EBkGMCIpu7IxhaUeLMgQi01FKJiZNnHcDu7Tt1McJ0p=w973-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLVWagCLXCM1zGGK9BGNKbcrsaZwjejyZEvbLD7lXoMWRahUwAeQYhGv31isy416BJDZkjVc6TbeVHVT4wUbT46MP9nFT3e0RpethY3-YFY0IX4SzRDXoema5hFH_E4KoF0LrgCy0WVEStCczZ5kICA5=w973-h649-no" data-caption="Pia & Jae" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLVWagCLXCM1zGGK9BGNKbcrsaZwjejyZEvbLD7lXoMWRahUwAeQYhGv31isy416BJDZkjVc6TbeVHVT4wUbT46MP9nFT3e0RpethY3-YFY0IX4SzRDXoema5hFH_E4KoF0LrgCy0WVEStCczZ5kICA5=w973-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLXdioy2ZqQQ72YO-yovR-EqQvafD5gALIJssDBsR7XVRgzAoBRmxDRBoKWWxS6XLbLAqnyjzZHL-Ju6qloFntMFZDu-Ew7NwYGKmQazF-z1wsB3IVBNyWyHrIlsh-evJjMNKhrt7DevFn0fW4Khy9Yv=w973-h649-no" data-caption="Silpia & Jaenudin" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLXdioy2ZqQQ72YO-yovR-EqQvafD5gALIJssDBsR7XVRgzAoBRmxDRBoKWWxS6XLbLAqnyjzZHL-Ju6qloFntMFZDu-Ew7NwYGKmQazF-z1wsB3IVBNyWyHrIlsh-evJjMNKhrt7DevFn0fW4Khy9Yv=w973-h649-no" alt="" width="100%">
            </a>
        </div>

        
      </div>
      <div class="swiper-pagination position-relative mt-4"></div>
    </div>
        
    </div>
</section>

<div class="grad-2">
<section class="space-m" id="profile" style="overflow:hidden">
    <div class="container">
        <div class="text-center" data-aos="zoom-out" data-aos-duration="1000">
            <h1 class="w-1 text-primary">Calon Pengantin</h1>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                <div class="card bg-transparent border-0 card-body">
                    <div class="text-center position-relative">
                        <img src="{{ asset('img/client/9.png') }}" alt="" class="rounded-pill" width="70%">
                        <div class="to-center" style="z-index:-1;margin-left: 4px;margin-top: -14px;">
                            <img src="{{ asset('img/shape-3.png') }}" alt="" class="" width="100%">
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="w-1 text-primary">Silpia Rahmayanti</h3>
                        <div class="mb-2">
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                        <div class="badge bg-primary mb-2">Mempelai Wanita</div>
                        <div>
                            <p class="lead">Putri dari <br> Bapak Aripin (Alm) dan Ibu  Mulyati (Alm)</p>
                        </div>
                </div>
            </div>
        </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                <div class="card bg-transparent border-0 card-body">
                <div class="text-center position-relative">
                        <img src="{{ asset('img/client/10.png') }}" alt="" class="rounded-pill" width="70%">
                        <div class="to-center" style="z-index:-1;margin-left: 4px;margin-top: -14px;">
                            <img src="{{ asset('img/shape-3.png') }}" alt="" class="" width="100%">
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="w-1 text-primary">Jaenudin</h3>
                        <div class="mb-2">
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                        <div class="badge bg-primary mb-2">Mempelai Pria</div>
                        <div>
                            <p class="lead">Putra dari <br> Bapak Deden dan Ibu Euis</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="space-m" id="detail" style="overflow:hidden">
    <div class="container">
        <h1 class="w-1 text-center text-primary" data-aos="zoom-out" data-aos-duration="1000">Detail Undangan</h1>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                <div class="card h-100">
                    <img src="https://lh3.googleusercontent.com/pw/AM-JKLXdioy2ZqQQ72YO-yovR-EqQvafD5gALIJssDBsR7XVRgzAoBRmxDRBoKWWxS6XLbLAqnyjzZHL-Ju6qloFntMFZDu-Ew7NwYGKmQazF-z1wsB3IVBNyWyHrIlsh-evJjMNKhrt7DevFn0fW4Khy9Yv=w973-h649-no" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="w-1 text-primary">Akad Nikah</h3>
                        <hr>
                        <h5 class="fw-bold text-primary">Kediaman Mempelai Wanita</h5>
                        <p>Kp. Babakan Situ RT.01 RW.03 desa. Perbawati Kec. Sukabumi</p>
                        <p><i class="bi bi-clock-fill me-2 text-primary"></i>08.00 WIB</p>
                    </div>
                    <a class="card-footer bg-primary text-white p-3" href="#" target="_blank">
                        Open Gmaps
                    </a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="card h-100">
                    <img src="https://lh3.googleusercontent.com/pw/AM-JKLVWHbfSYjxFY1xlTN3nyAJWHoltZKMW3neRyJ9foD-2sMZDLWX4MzpJqvtjDncdE10mQc4JVcgD2EF4qWvXtzCU8cC-PSt0ZaDkcsH_LX593EBkGMCIpu7IxhaUeLMgQi01FKJiZNnHcDu7Tt1McJ0p=w973-h649-no" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="w-1 text-primary">Resepsi</h3>

                        <hr>
                        <h5 class="fw-bold text-primary">Kediaman Mempelai Wanita</h5>
                        <p>Kp. Babakan Situ RT.01 RW.03 desa. Perbawati Kec. Sukabumi</p>
                        <p><i class="bi bi-clock-fill me-2 text-primary"></i>11.00 WIB - Selesai</p>
                    </div>
                    <a class="card-footer bg-primary text-white p-3" href="#" target="_blank">
                        Open Gmaps
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<section class="space-m" id="gallery" style="overflow:hidden">
    <div class="container">
        <div class="text-center mb-4" data-aos="zoom-out" data-aos-duration="1000">
            <h1 class="w-1 text-primary mb-0">gallery Foto</h1>
            <p>Momen foto kebahagiaan kami</p>
        </div>

    <div class="swiper slider-2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLWe13tzbL3XlbpnOT5cWcbN0YOcegaDXZ4xAL-r4oNpZ1nf5pHIX9O4gBYkZmc629BsP5rW9taAk_EpCTWOGhGD30HByuJ9mucsMmtj_D5XRZhvO_idH6lnoMtDVkFbhQ0jHJS3a3cHPwsYg8nW_JNg=w433-h649-no" data-caption="Pia & Jae" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLWe13tzbL3XlbpnOT5cWcbN0YOcegaDXZ4xAL-r4oNpZ1nf5pHIX9O4gBYkZmc629BsP5rW9taAk_EpCTWOGhGD30HByuJ9mucsMmtj_D5XRZhvO_idH6lnoMtDVkFbhQ0jHJS3a3cHPwsYg8nW_JNg=w433-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLUDGLkDE9wbPrCB1no2uA2xaeo0RVdL64nwe4zBJku8Xbj12b9FsbR1Q2gh-vxXV7Tml-fyWNc-7pdHP4Fh51C7hrqwFt6Dz594vatKxpYoGbWFBzI4IqupjnH-eoaYksVGjef8JwZJjrFMfho7Xe9G=w434-h649-no" data-caption="Pia & Jae" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLUDGLkDE9wbPrCB1no2uA2xaeo0RVdL64nwe4zBJku8Xbj12b9FsbR1Q2gh-vxXV7Tml-fyWNc-7pdHP4Fh51C7hrqwFt6Dz594vatKxpYoGbWFBzI4IqupjnH-eoaYksVGjef8JwZJjrFMfho7Xe9G=w434-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLXXwiPAWK1WeXyJJqgpAwzBoYTt_pmVGOvbDCG4vP8_W14MMEBnvutC3i-xYbgbP_whtW2cP5P3IX_QJFg3XAK89ioGQgSE5sH54fJmfp0iyft_yFKWzkNW8JGApUDagVi3B47uY7MN_cWHM1zULien=w434-h649-no" data-caption="Pia & Jae" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLXXwiPAWK1WeXyJJqgpAwzBoYTt_pmVGOvbDCG4vP8_W14MMEBnvutC3i-xYbgbP_whtW2cP5P3IX_QJFg3XAK89ioGQgSE5sH54fJmfp0iyft_yFKWzkNW8JGApUDagVi3B47uY7MN_cWHM1zULien=w434-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLWgH5fd2j9Bbccrj9nQmma3iDo3cRupYpEUk49RlCFYQbL03QNvwzZ75hHqqGgS5OZNV-DnFDXWmYRMw89qYqGNodNQL-bH3-dlZfgRPhdeHxlka0SYj0fa9N16k1XddVrJIMRzg9Unbfmmbgp6xD23=w434-h649-no" data-caption="Pia & Jae" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLWgH5fd2j9Bbccrj9nQmma3iDo3cRupYpEUk49RlCFYQbL03QNvwzZ75hHqqGgS5OZNV-DnFDXWmYRMw89qYqGNodNQL-bH3-dlZfgRPhdeHxlka0SYj0fa9N16k1XddVrJIMRzg9Unbfmmbgp6xD23=w434-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLXHOmZPBvjKfoTD9ASVF_XaTMzHzAxPCgRKyD8K_SkDSSg0dIp2B3j46kS8RiqjJisnhifWvY9QCh3jQaJBpfyTofXPFTvJTn1srn8O-eJvDOOreutlvFGOhZ1VluY02JiUSjq3uiRd5XGZdIani1L1=w434-h649-no" data-caption="Pia & Jae" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLXHOmZPBvjKfoTD9ASVF_XaTMzHzAxPCgRKyD8K_SkDSSg0dIp2B3j46kS8RiqjJisnhifWvY9QCh3jQaJBpfyTofXPFTvJTn1srn8O-eJvDOOreutlvFGOhZ1VluY02JiUSjq3uiRd5XGZdIani1L1=w434-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLUfr1ejwyDhkSBaChxgtm5QfXnSOKckkbhXn0i-PqfMJKKrf2MMctrH37KwqmBI957zETC9sv8zKOV6Rv9E9djxUYOX5oLbjMnlyjz5l8yzn1eX362B3rjutUOHalJJICwS4MnwXb_TmS73xi3O-EFF=w434-h649-no" data-caption="Pia & Jae" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLUfr1ejwyDhkSBaChxgtm5QfXnSOKckkbhXn0i-PqfMJKKrf2MMctrH37KwqmBI957zETC9sv8zKOV6Rv9E9djxUYOX5oLbjMnlyjz5l8yzn1eX362B3rjutUOHalJJICwS4MnwXb_TmS73xi3O-EFF=w434-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLUl5Yl2VqQY-kYvhbd6l3Q7NiVJRLR2xOV3QEaley4nw8dsjdeOkdxHtWDHAh8aqQhB8lLoz9pJO_SwXFPZ_xhsu-YwnofWw4X_qvp7OcGkjwaJgKLIDg4XWVtNJygDsZy3h0dYh_c0JBoDrPzrKcaN=w434-h649-no" data-caption="Pia & Jae" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLUl5Yl2VqQY-kYvhbd6l3Q7NiVJRLR2xOV3QEaley4nw8dsjdeOkdxHtWDHAh8aqQhB8lLoz9pJO_SwXFPZ_xhsu-YwnofWw4X_qvp7OcGkjwaJgKLIDg4XWVtNJygDsZy3h0dYh_c0JBoDrPzrKcaN=w434-h649-no" alt="" width="100%">
            </a>
        </div>
        
        
      </div>
      <div class="swiper-pagination position-relative mt-4"></div>
    </div>

    </div>
</section>
<section class="space-m grad-2" style="overflow:hidden">
    <div class="container text-center">
    <div class="row justify-content-center">
    <div class="col-md-3">
        <h1 class="w-1 text-primary mb-0" data-aos="zoom-out" data-aos-duration="1000">Amplop Digital</h1>
        <i class="bi bi-envelope-open-fill display-1 text-primary"></i>
        <div class="my-3 text-primary" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="200">
            <div class="mb-3">
                <i class="bi bi-check-circle-fill me-2"></i><span class="fw-bold">BANK</span> : 0000 <br><span class="fw-bold">AN</span> : xxxxxx
            </div>
            <div class="">
                <button type="button" onclick="alert('Success copy rekening')" class="btn btn-copy btn-primary rounded-pill" data-clipboard-text="0000">Copy Rekening</button>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<section class="space-m" id="comment" style="overflow:hidden">
    <div class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3">
        <h1 class="w-1 text-primary mb-4 text-center" data-aos="zoom-out" data-aos-duration="1000">Ucapan & Doa</h1>
        <div class="card card-body shadow-sm" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="100">
        <form method="post" id="ajax-comment">
            @csrf
  <div class="mb-3">
    <label class="form-label text-primary">Nama<span class="ms-2 text-danger">*</span></label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="mb-3">
      <div>
          <label class="form-label text-primary">Konfirmasi Kehadiran<span class="ms-2 text-danger">*</span></label>
          <input type="hidden" name="present" value="yes">
        </div>

    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="pres" onclick="presTe('yes')" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Ya
  </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="pres" onclick="presTe('no')"id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Tidak
  </label>
</div>
    
    <!-- <input type="email" class="form-control" name="name" required> -->
  </div>
  <div class="mb-3">
    <label class="form-label text-primary">Tulis Pesan<span class="ms-2 text-danger">*</span></label>
    <textarea name="message" rows="5" class="form-control" required></textarea>
    <!-- <input type="email" class="form-control" required> -->
  </div>
  <div class="send">
      <button type="submit" class="btn btn-primary btn-send rounded-pill">Kirim Pesan</button>
    </div>
  <div class="pros d-none">
      <div class="spinner-border text-primary spinner-border-sm" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</form>
</div>

<div class="card mt-4 shadow-sm" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="200">
    <div class="card-header bg-primary p-3 d-flex justify-content-between">
        <h5 class="text-white w-1 mb-0 align-self-center"><i class="bi bi-chat-square-dots-fill me-2"></i> List Comment</h5>
        <h6 class="mb-0 p-1 bg-white fw-bold text-primary rounded">
            <span class="list-count">
                @if(count($comment))
                {{ count($comment) }}
                @else
                00
                @endif
            </span>
        </h6>
    </div>
<div class="comn-box py-3">
<ul class="list-group list-group-flush list-comn" id="list-comn">
    @foreach($comment->reverse() as $com)
  <li class="list-group-item pt-4">
    <h5 class="text-primary me-2 text-capitalize">{{ $com->name }}</h5>
      <div class="d-flex justify-content-between mb-2">
          <div class="d-flex">
              @if($com->present == 'yes')
              <span class="badge text-primary p-0 fw-bold"><i class="bi bi-check-circle-fill me-2"></i>Hadir</span>
              @else
              <span class="badge text-primary p-0 fw-bold"><i class="bi bi-x-circle-fill me-2"></i>Tidak Dapat Hadir</span>
              @endif
            </div>
            <div>
                @if($com->created_at)
                <div class="text-uppercase text-primary small"> <i class="bi bi-calendar2-fill me-2"></i>{{ Carbon\Carbon::parse($com->created_at)->format('d M Y') }}</div>
                @endif
            </div>
        </div>
      <p>{{ $com->message }}</p>
  </li>
  @endforeach
  
  
</ul>
</div>
</div>



    </div>
    </div>
    </div>
</section>
@include('layouts.footer_client')
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>

@media (max-width: 767.98px) { 
    .mod-1 {
        background:url('https://lh3.googleusercontent.com/pw/AM-JKLWgH5fd2j9Bbccrj9nQmma3iDo3cRupYpEUk49RlCFYQbL03QNvwzZ75hHqqGgS5OZNV-DnFDXWmYRMw89qYqGNodNQL-bH3-dlZfgRPhdeHxlka0SYj0fa9N16k1XddVrJIMRzg9Unbfmmbgp6xD23=w434-h649-no');
    }
}

@media (min-width: 991.98px) { 
    .mod-1 {
        background:url('https://lh3.googleusercontent.com/pw/AM-JKLVY6OcOHCE6347H7SdPhDzY3IMHh25m8x9RjJHFsMDzEOGGCJQDbLUrnJ4f3BVtTMjjTF6K2-CWFzodC-z3F8lZQR3m9xocMDGgg7xYr7tDsTBmJtqWQqpQPTZSaemrUwqMDNftkHAs7SBAWOuN5DOK=w973-h649-no');
    }
}

</style>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.9/clipboard.min.js"></script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<script src="{{ asset('js/client.js') }}"></script>
<script>

        var a2a_config = a2a_config || {};
        a2a_config.icon_color = "#704d37";

    var swiper1 = new Swiper(".slider-1", {
        spaceBetween: 30,
        autoplay: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
                effect : "fade",
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
      });
    
      var swiper2 = new Swiper(".slider-2", {
        spaceBetween: 30,
        autoplay: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
      });

      $('#countdown').countdown('2022/07/03', function(event) {
            // $(this).html(event.strftime('%d:%H:%M:%S'));
            $('.days').text(event.strftime('%D'));
            $('.hours').text(event.strftime('%H'));
            $('.minute').text(event.strftime('%M'));
            $('.second').text(event.strftime('%S'));
      });

    //   $('#ajax-comment').ajaxForm({url: "http://localhost:8000/api/comment", type: "POST"}, function() { 
    //     console
    //   });


    $('#ajax-comment').on('submit',function(e){
        e.preventDefault();

        let name = $('input[name="name"]').val();
        let message = $('textarea[name="message"]').val();
        let present = $('input[name="present"]').val();

        $('.send').addClass('d-none');
        $('.pros').removeClass('d-none');

        $.ajax({
          url: "http://localhost:8000/api/comment",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            id:5,
            name:name,
            message:message,
            present:present,
          },
          success:function(response){
            let count = parseInt($('.list-count').text()) + 1;
            $('.list-count').text(count);

              let love;
            if (present == 'yes') {
                love = '<span class="badge text-primary p-0 fw-bold"><i class="bi bi-check-circle-fill me-2"></i>Hadir</span>'
            }else{
                love = '<span class="badge text-primary p-0 fw-bold"><i class="bi bi-x-circle-fill me-2"></i>Tidak Dapat Hadir</span>'
            }
            // console.log(response.data);
            $('#list-comn').prepend(`<li class="list-group-item pt-4">
            <h5 class="text-primary me-2 text-capitalize">${name}</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-flex">
                            ${love}
                            </div>
                            <div class="text-uppercase text-primary small"> <i class="bi bi-calendar2-fill me-2"></i>{{ date('d M Y') }}</div>
                        </div>
                    <p>${message}</p>
                </li>`);
            // if (response) {
            // //   $('#success-message').text(response.success); 
            // //   $("#contactForm")[0].reset(); 
            // }

            $('.send').removeClass('d-none');
            $('.btn-send').attr('disabled');
            $('.pros').addClass('d-none');
            msend.show();
            // ouTer(".comn-box");

          },
        //   error: function(response) {
        //     // 
        //    }
         });
        });
</script>
@endsection
@section('meta')
<title>Pernikahankita.id | Silpia & Jaenudin</title>
<meta itemprop="name" content="Pernikahankita.id | Silpia & Jaenudin">
<meta itemprop="description" content="The wedding of Silpia & Jaenudin. Minggu, 03 Juli 2022">
<meta itemprop="image" content="{{ asset('img/client/meta-5.jpg') }}">

<meta name="twitter:title" content="Pernikahankita.id | Silpia & Jaenudin">
<meta name="twitter:description" content="The wedding of Silpia & Jaenudin. Minggu, 03 Juli 2022">
<meta name="twitter:image:src" content="{{ asset('img/client/meta-5.jpg') }}">
<meta name=twitter:card content="summary_large_image">

<meta property="og:title" content="Pernikahankita.id | Silpia & Jaenudin" />
<meta property="og:image" content="{{ asset('img/client/meta-5.jpg') }}" />
<meta property="og:description" content="The wedding of Silpia & Jaenudin. Minggu, 03 Juli 2022" />
<meta property="og:url" content="{{ route('client.pia') }}" />
@endsection