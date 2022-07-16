@extends('layouts.index')
@section('content')
@if(!empty($_GET))
@php $to = htmlspecialchars($_GET["to"]) @endphp
@endif
<audio id="audio" src="http://docs.google.com/uc?export=open&id=1hDp2qfkz580O74w6hTZcs9PUT-y3gtQS"></audio>
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
        <h1 class="display-1 w-1 mb-0 text-white">Rahma & Tiras</h1>
        <p class="lead text-white">Minggu, 24 Juli 2022</p>
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
        <h1 class="display-1 w-1 mb-0">Rahma & Tiras</h1>
        <p class="lead">Minggu, 24 Juli 2022</p>
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
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLUiktJ8PPK4XNB8plyGjfVeqIXJphrZEh1daY_8pL9sRT8NZD1-ojfxDe36WGoeoaBk7KJMAijWP0ZjKgFOffYv1Uy6rkzutBujAQ5BMD2P03kd7M2-ztvUNnxKLqT8zkE4OD7KP3cGyco8oY4MkR9B=w974-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLUiktJ8PPK4XNB8plyGjfVeqIXJphrZEh1daY_8pL9sRT8NZD1-ojfxDe36WGoeoaBk7KJMAijWP0ZjKgFOffYv1Uy6rkzutBujAQ5BMD2P03kd7M2-ztvUNnxKLqT8zkE4OD7KP3cGyco8oY4MkR9B=w974-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLXoJRnPFffleLTaSZ0-Yskwe3g0XWuvJvZ2FEwL6oQ9Biqe3lC4IpDrW5bzdvMbiwo9nF9GsEdTuOyHKSnNhi2pFJ6beu7AaKcohW4Jn-0rBXAJy4fLxqFR2FnAyg7IvjcEz_265qQc0fbGRN5tP2oT=w974-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLXoJRnPFffleLTaSZ0-Yskwe3g0XWuvJvZ2FEwL6oQ9Biqe3lC4IpDrW5bzdvMbiwo9nF9GsEdTuOyHKSnNhi2pFJ6beu7AaKcohW4Jn-0rBXAJy4fLxqFR2FnAyg7IvjcEz_265qQc0fbGRN5tP2oT=w974-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLWDPywrBVn5R5jVkqJ_CrmTjJUw00rwi-i0eSKJtDllbUmfR4MyQ9kpk3QygSEX8t4sHoH4dTqKIcFqvNM7vjNCvvTX8855BhzNY42u15HqO9ejnaQoLq6j2u_WF9IZI_TduJW6Hn6RRNfi-Jqw-Blp=w974-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLWDPywrBVn5R5jVkqJ_CrmTjJUw00rwi-i0eSKJtDllbUmfR4MyQ9kpk3QygSEX8t4sHoH4dTqKIcFqvNM7vjNCvvTX8855BhzNY42u15HqO9ejnaQoLq6j2u_WF9IZI_TduJW6Hn6RRNfi-Jqw-Blp=w974-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLVUgfAxPgjx6SKmYRarCu3fB9eIxww1FiKcuYMSWcsQh2wW_6R5xngQgkGtoMBKDjb95lIg94jv2Cs-AKHM1UZlg-KEw-nfrnoseIuCB6_lQj3NoIOyg2lIFh1JteS5Vr5OkDMDj9hy0_qBmiO42bBO=w973-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLVUgfAxPgjx6SKmYRarCu3fB9eIxww1FiKcuYMSWcsQh2wW_6R5xngQgkGtoMBKDjb95lIg94jv2Cs-AKHM1UZlg-KEw-nfrnoseIuCB6_lQj3NoIOyg2lIFh1JteS5Vr5OkDMDj9hy0_qBmiO42bBO=w973-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLW2TR_bK6me1SMbOl2JgD5j8bt_oxczdWNkpqVUxVFLuFxGE9m0cra0orJCoG4QP9h6quWivDKGQuLoKxnV2gCfahruG3TmI1FLJzo_s8inTpmf9lDFdwUSiGAwO_ULtcWMpzumPBaueOyZTEDVQqOl=w974-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLW2TR_bK6me1SMbOl2JgD5j8bt_oxczdWNkpqVUxVFLuFxGE9m0cra0orJCoG4QP9h6quWivDKGQuLoKxnV2gCfahruG3TmI1FLJzo_s8inTpmf9lDFdwUSiGAwO_ULtcWMpzumPBaueOyZTEDVQqOl=w974-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLVQ02-E6T7oOJEj-UJUEILX5JE4gzWvdDo5VNXpreIYwE0P33v0cxQofRwqbtArdN8ENeGvNjTaFG6tlSD4Kv9tsU6nxe459vo2N1dfmIqGYo5vft6_k3leayVzThlypthhfU5GyIhPpGKF7lcs3URW=w973-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLVQ02-E6T7oOJEj-UJUEILX5JE4gzWvdDo5VNXpreIYwE0P33v0cxQofRwqbtArdN8ENeGvNjTaFG6tlSD4Kv9tsU6nxe459vo2N1dfmIqGYo5vft6_k3leayVzThlypthhfU5GyIhPpGKF7lcs3URW=w973-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLVqPWDFVfGIIYuhGnI9x_vfN7bn9h4WO6toy1Qzaxc2zZqyRS0soSSAVujTmtyde-UtngUYSyTGVA3PSc_IcCs8s1oG5aOe3XNnjNpwglelKDIOzweUOjf9UePZPV2DJhh6D_Qy5cObplh3tT6YogC7=w974-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLVqPWDFVfGIIYuhGnI9x_vfN7bn9h4WO6toy1Qzaxc2zZqyRS0soSSAVujTmtyde-UtngUYSyTGVA3PSc_IcCs8s1oG5aOe3XNnjNpwglelKDIOzweUOjf9UePZPV2DJhh6D_Qy5cObplh3tT6YogC7=w974-h649-no" alt="" width="100%">
            </a>
        </div>
      <div class="swiper-slide">
            <a data-fancybox="pot" data-src="https://lh3.googleusercontent.com/pw/AM-JKLXoY7ycpQ800fRwlcZHsS02PrsiUieImaiZZqAJicatRAnC5SKh7Kk5AJpMdWyg9QnRkttBRhNrAVtyJR7Jw8ufLDeO7EFcdDADpgr_80ixMj7eh3VBvsXWb9zj4DUb7QU-ovXTDuUHNVZ8Cj0Qes1U=w973-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLXoY7ycpQ800fRwlcZHsS02PrsiUieImaiZZqAJicatRAnC5SKh7Kk5AJpMdWyg9QnRkttBRhNrAVtyJR7Jw8ufLDeO7EFcdDADpgr_80ixMj7eh3VBvsXWb9zj4DUb7QU-ovXTDuUHNVZ8Cj0Qes1U=w973-h649-no" alt="" width="100%">
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
                        <img src="{{ asset('img/client/11.png') }}" alt="" class="rounded-pill" width="70%">
                        <div class="to-center" style="z-index:-1;margin-left: 4px;margin-top: -14px;">
                            <img src="{{ asset('img/shape-3.png') }}" alt="" class="" width="100%">
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="w-1 text-primary">Siti Rahmawati</h3>
                        <div class="mb-2">
                            <a href="https://www.instagram.com/sitirachma41_" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                        <div class="badge bg-primary mb-2">Mempelai Wanita</div>
                        <div>
                            <p class="lead">Putri dari <br> Bapak Damin Damiri  dan Ibu  Fatimah</p>
                        </div>
                </div>
            </div>
        </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                <div class="card bg-transparent border-0 card-body">
                <div class="text-center position-relative">
                        <img src="{{ asset('img/client/12.png') }}" alt="" class="rounded-pill" width="70%">
                        <div class="to-center" style="z-index:-1;margin-left: 4px;margin-top: -14px;">
                            <img src="{{ asset('img/shape-3.png') }}" alt="" class="" width="100%">
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="w-1 text-primary">Tiras Aldimar</h3>
                        <div class="mb-2">
                            <a href="https://www.instagram.com/Tirasaldmr21" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                        <div class="badge bg-primary mb-2">Mempelai Pria</div>
                        <div>
                            <p class="lead">Putra dari <br> Bapak H Taufik Kosasih (Alm) dan Ibu Een Nuraeni</p>
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
                    <img src="https://lh3.googleusercontent.com/pw/AM-JKLXoY7ycpQ800fRwlcZHsS02PrsiUieImaiZZqAJicatRAnC5SKh7Kk5AJpMdWyg9QnRkttBRhNrAVtyJR7Jw8ufLDeO7EFcdDADpgr_80ixMj7eh3VBvsXWb9zj4DUb7QU-ovXTDuUHNVZ8Cj0Qes1U=w973-h649-no" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="w-1 text-primary">Akad Nikah</h3>
                        <hr>
                        <h5 class="fw-bold text-primary">Villa Bumi Sari</h5>
                        <p>Jl. Sukajaya, Sukajaya, Kec. Sukabumi, Kabupaten Sukabumi, Jawa Barat 43151</p>
                        <p><i class="bi bi-clock-fill me-2 text-primary"></i>09.00 WIB - 10.00 WIB</p>
                    </div>
                    <a class="card-footer bg-primary text-white p-3" href="https://goo.gl/maps/otBPSZGxhm8Vfveq7" target="_blank">
                        Open Gmaps
                    </a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="card h-100">
                    <img src="https://lh3.googleusercontent.com/pw/AM-JKLUiktJ8PPK4XNB8plyGjfVeqIXJphrZEh1daY_8pL9sRT8NZD1-ojfxDe36WGoeoaBk7KJMAijWP0ZjKgFOffYv1Uy6rkzutBujAQ5BMD2P03kd7M2-ztvUNnxKLqT8zkE4OD7KP3cGyco8oY4MkR9B=w974-h649-no" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="w-1 text-primary">Resepsi</h3>

                        <hr>
                        <h5 class="fw-bold text-primary">Villa Bumi Sari</h5>
                        <p>Jl. Sukajaya, Sukajaya, Kec. Sukabumi, Kabupaten Sukabumi, Jawa Barat 43151</p>
                        <p><i class="bi bi-clock-fill me-2 text-primary"></i>11.00 WIB - 14.00 WIB</p>
                    </div>
                    <a class="card-footer bg-primary text-white p-3" href="https://goo.gl/maps/otBPSZGxhm8Vfveq7" target="_blank">
                        Open Gmaps
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<section class="space-m" style="overflow:hidden">
    <div class="container">
    <div class="text-center mb-4" data-aos="zoom-out" data-aos-duration="1000">
            <h1 class="w-1 text-primary mb-0">True Story</h1>
            <p>Cerita kebahagiaan kami</p>
            <p>Perkenalan Rahma & Tiras berawal dari Rekan satu kerja diperusahaan yang sama, karena kita sering bertemu karena satu kerjaan tapi gak pernah bertegur sapa akhirnya Tiras pun memberanikan diri untuk chat Rahma dan mengajak untuk Makan siang bareng, seiring dengan berjalannya waktu akhirnya kita sering chatingan secara intens dan akhirnya perasaan cinta pun muncul dan Tiras menyatakan keseriusannya dan ingin mengajak Rahma untuk menjalin hubungan ke yang lebih serius lagi, Rahma pun menerima niat baik Tiras. Dan Akhirnya Untuk pertama kalinya Tiras menemui Orang tua Rahma untuk menyatakan keseriusannya, FIRST DATE 23 FEBRUARI 2022 Tiras mengajak Rahma untuk makan malam di cafe dan menyatakan keinginannya untuk melamar Rahma secepatnya. 02 MARET 2022 Untuk pertama kalinya Tiras memperkenalkan Rahma ke orang tua nya, dan setelah beberapa bulan menjalani hubungan Akhirnya kita berdua memutuskan untuk melangsungkan Lamaran pada 27 MARET 2022 Dan tidak lama setelah lamaran akhirnya kita memutuskan untuk melangsungkan pernikahan pada 24 JULI 2022</p>
        </div>
    </div>
</section>
<section class="space-m" id="gallery" style="overflow:hidden">
    <div class="container">
        <div class="text-center mb-4" data-aos="zoom-out" data-aos-duration="1000">
            <h1 class="w-1 text-primary mb-0">gallery Foto</h1>
            <p>Momen foto kebahagiaan kami</p>
        </div>

    <div class="swiper slider-2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLWOK3ao8WFWoKSxW1uCs0Kl1yKwPlekYzww-LjR84EmZU9dEiInDRUkyk6kZukN3pmmDmp8Zs8mAN4DEEvs_SOLBGGcdZNtX3Ssr5GfGP0W3LzZ5say6Ag8svVLexf8qolrxCLEDf0T1DZfAbBa3gFj=w433-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLWOK3ao8WFWoKSxW1uCs0Kl1yKwPlekYzww-LjR84EmZU9dEiInDRUkyk6kZukN3pmmDmp8Zs8mAN4DEEvs_SOLBGGcdZNtX3Ssr5GfGP0W3LzZ5say6Ag8svVLexf8qolrxCLEDf0T1DZfAbBa3gFj=w433-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLWwPBsw7VKtD0npANtFmjSB2eef5mJUgh7guPWMQ3l7A4kgNze_dHFQ4zVZv1z2lyF-wKBo5eY0yJQjaEkdc7xXTERhhqjT4eSA5HahekFmmctPT89saafrFxtPaN4qcZ1dsA3j0DtjUpLj-qdjq7CQ=w433-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLWwPBsw7VKtD0npANtFmjSB2eef5mJUgh7guPWMQ3l7A4kgNze_dHFQ4zVZv1z2lyF-wKBo5eY0yJQjaEkdc7xXTERhhqjT4eSA5HahekFmmctPT89saafrFxtPaN4qcZ1dsA3j0DtjUpLj-qdjq7CQ=w433-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLUCffOiOXa08jPSkN9Pni47V20dg4l1VF3_AcLGnlS9Zcf2xRIBeFbyEaa_RWJaKOEtJ9AhUpDNgIyH9il179KI06wfvP1u6EniKZpJhQ1ZWoFfR1-QsdI6VMMy59ZLGMCcweCIBs7XGDd-HWqsvglU=w433-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLUCffOiOXa08jPSkN9Pni47V20dg4l1VF3_AcLGnlS9Zcf2xRIBeFbyEaa_RWJaKOEtJ9AhUpDNgIyH9il179KI06wfvP1u6EniKZpJhQ1ZWoFfR1-QsdI6VMMy59ZLGMCcweCIBs7XGDd-HWqsvglU=w433-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLUoJUJny-whcJ5BAH7RKZkiz2G3vupoMKPXkSXD3_tA2CTJUkcSUnQwsVRogaK8OkkBk1t6pN6kmll04hYgim2f0T1JZcWfvlzMlKc3o-LlKaqpgK3EEH0MX6lazKfRiSkkpqMx2TY_45X4_id-MNMN=w433-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLUoJUJny-whcJ5BAH7RKZkiz2G3vupoMKPXkSXD3_tA2CTJUkcSUnQwsVRogaK8OkkBk1t6pN6kmll04hYgim2f0T1JZcWfvlzMlKc3o-LlKaqpgK3EEH0MX6lazKfRiSkkpqMx2TY_45X4_id-MNMN=w433-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLXXztd9joFxDy_yEOO_AeroDyRJAelQSTD0D0nNq7QkZkgLRX1rx2Pk-xNBWw_SX9aYVblUDOUq_5KxwYrdL9bQPLUNfQBHiMy3ZlSwy_UuEeHHUNSOsPtr9I5XXorxKyNhKOaCIj-J_XTexIwcrpIm=w433-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLXXztd9joFxDy_yEOO_AeroDyRJAelQSTD0D0nNq7QkZkgLRX1rx2Pk-xNBWw_SX9aYVblUDOUq_5KxwYrdL9bQPLUNfQBHiMy3ZlSwy_UuEeHHUNSOsPtr9I5XXorxKyNhKOaCIj-J_XTexIwcrpIm=w433-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLWEmYHYd8KVkwX6bn55v83lZ92XfCIPOpxoXdktPQ44HWQMk1Vq-2aS71u-NQ0qIo8iNqdX-QxlGG7bVGPeLfM4MqUyaPmyD8OsMyF_DZfQiY-Jjr7TJiiOcpxAGLnz9eBWGSHdaQ20nFFum3C6cRaD=w434-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLWEmYHYd8KVkwX6bn55v83lZ92XfCIPOpxoXdktPQ44HWQMk1Vq-2aS71u-NQ0qIo8iNqdX-QxlGG7bVGPeLfM4MqUyaPmyD8OsMyF_DZfQiY-Jjr7TJiiOcpxAGLnz9eBWGSHdaQ20nFFum3C6cRaD=w434-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLVz0iu8hoVix_P7imFI8sCEpMnONPoznU7JaRKdQKPfsWCy29vNdqvE3HU_j0IUQ37rK7pnsfFcD3TBZyLQUpNZ4DF2MdOJB6eFjeWU4y-6zFn0yADBPCJrnpa8Hu9xrnO5uTBLnfFUb0LY4BeFZkOH=w433-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLVz0iu8hoVix_P7imFI8sCEpMnONPoznU7JaRKdQKPfsWCy29vNdqvE3HU_j0IUQ37rK7pnsfFcD3TBZyLQUpNZ4DF2MdOJB6eFjeWU4y-6zFn0yADBPCJrnpa8Hu9xrnO5uTBLnfFUb0LY4BeFZkOH=w433-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLXU-H7VGgZFPn7yfY5vSXsv_jEPikQz3KbhqXL1qdRAwXtsT7bS_sYapZJ-TnIUXYqgWv8Xn_c5S8mDBbRBdXKRzuYrqIn1qY9Svuk2z_k-LfxWxUlI6qOZwMY3o9xfKYhgf1jROXJ84zd7Fjd57CRa=w433-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLXU-H7VGgZFPn7yfY5vSXsv_jEPikQz3KbhqXL1qdRAwXtsT7bS_sYapZJ-TnIUXYqgWv8Xn_c5S8mDBbRBdXKRzuYrqIn1qY9Svuk2z_k-LfxWxUlI6qOZwMY3o9xfKYhgf1jROXJ84zd7Fjd57CRa=w433-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLVrXHbVhXjrdaIKLRIwBtt9S5uwI4o-cLxnRVvZBxPzc6HLL2vhFNuDrFQ9ZEjOV8q5LXSUu6n0XS2lvkInRbJBtsP8lf6eB9-Umob2Qnm5TwRJIcM2Zja4kOO5yQQtAZ3OFJstu1uN2CXhP4w709_p=w433-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLVrXHbVhXjrdaIKLRIwBtt9S5uwI4o-cLxnRVvZBxPzc6HLL2vhFNuDrFQ9ZEjOV8q5LXSUu6n0XS2lvkInRbJBtsP8lf6eB9-Umob2Qnm5TwRJIcM2Zja4kOO5yQQtAZ3OFJstu1uN2CXhP4w709_p=w433-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLWcDRI0PIeIAkgRONYPgVsMqMSjB1cZm_lvINuOkNR118YB51qt1v9V1M46yyqxi2yi3gicyTCuCxuFMCNk-wbvQwb7BXA9dqc8oIYP9cPaNCdJ38bAHU5nBEYMEieODCcevO2Ax7Oc68u0Mg_rixOZ=w434-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLWcDRI0PIeIAkgRONYPgVsMqMSjB1cZm_lvINuOkNR118YB51qt1v9V1M46yyqxi2yi3gicyTCuCxuFMCNk-wbvQwb7BXA9dqc8oIYP9cPaNCdJ38bAHU5nBEYMEieODCcevO2Ax7Oc68u0Mg_rixOZ=w434-h649-no" alt="" width="100%">
            </a>
        </div>
        <div class="swiper-slide">
            <a data-fancybox="land" data-src="https://lh3.googleusercontent.com/pw/AM-JKLUY0NUK55JkcXCV5ecrO4ec0kwEuxd508lA_5upecaPR-GNXBpR2lI6Sd5My-wfZaz30ZUmgLzSRc6wpUfgLtTPPFmq8mfmNz6WrJ9vr2hq58PZ3LD4ffkJZag4Mn4YQ9AzV6QlRIMh_BwaKi6N3rUa=w434-h649-no" data-caption="Rahma & Tiras" class="point">
                <img src="https://lh3.googleusercontent.com/pw/AM-JKLUY0NUK55JkcXCV5ecrO4ec0kwEuxd508lA_5upecaPR-GNXBpR2lI6Sd5My-wfZaz30ZUmgLzSRc6wpUfgLtTPPFmq8mfmNz6WrJ9vr2hq58PZ3LD4ffkJZag4Mn4YQ9AzV6QlRIMh_BwaKi6N3rUa=w434-h649-no" alt="" width="100%">
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
                <i class="bi bi-check-circle-fill me-2"></i><span class="fw-bold">BCA</span> : 0381234371 <br><span class="fw-bold">AN</span> : Tiras Aldimar
            </div>
            <div class="">
                <button type="button" onclick="alert('Success copy rekening')" class="btn btn-copy btn-primary rounded-pill" data-clipboard-text="0381234371">Copy Rekening</button>
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
        background:url('https://lh3.googleusercontent.com/pw/AM-JKLUoJUJny-whcJ5BAH7RKZkiz2G3vupoMKPXkSXD3_tA2CTJUkcSUnQwsVRogaK8OkkBk1t6pN6kmll04hYgim2f0T1JZcWfvlzMlKc3o-LlKaqpgK3EEH0MX6lazKfRiSkkpqMx2TY_45X4_id-MNMN=w433-h649-no');
    }
}

@media (min-width: 991.98px) { 
    .mod-1 {
        background:url('https://lh3.googleusercontent.com/pw/AM-JKLWDPywrBVn5R5jVkqJ_CrmTjJUw00rwi-i0eSKJtDllbUmfR4MyQ9kpk3QygSEX8t4sHoH4dTqKIcFqvNM7vjNCvvTX8855BhzNY42u15HqO9ejnaQoLq6j2u_WF9IZI_TduJW6Hn6RRNfi-Jqw-Blp=w974-h649-no');
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

      $('#countdown').countdown('2022/07/24', function(event) {
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
<title>Pernikahankita.id | Rahma & Tiras</title>
<meta itemprop="name" content="Pernikahankita.id | Rahma & Tiras">
<meta itemprop="description" content="The wedding of Rahma & Tiras. Minggu, 24 Juli 2022">
<meta itemprop="image" content="{{ asset('img/client/meta-6.jpg') }}">

<meta name="twitter:title" content="Pernikahankita.id | Rahma & Tiras">
<meta name="twitter:description" content="The wedding of Rahma & Tiras. Minggu, 24 Juli 2022">
<meta name="twitter:image:src" content="{{ asset('img/client/meta-6.jpg') }}">
<meta name=twitter:card content="summary_large_image">

<meta property="og:title" content="Pernikahankita.id | Rahma & Tiras" />
<meta property="og:image" content="{{ asset('img/client/meta-6.jpg') }}" />
<meta property="og:description" content="The wedding of Rahma & Tiras. Minggu, 24 Juli 2022" />
<meta property="og:url" content="{{ route('client.siti') }}" />
@endsection