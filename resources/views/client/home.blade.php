@extends('layouts.index')
@section('content')
<section class="space-m d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row d-flex justify-content-center">
        <div class="col-md-4">
        <div class="card">
            <div class="card-header text-primary"><h4 class="fw-bold mb-0"> <i class="bi bi-gear-fill me-2"></i>Website Is Under Development</h4></div>
            <div class="card-body">
                <p class="lead">Website sedang dalam pengembangan oleh tim kami, Terima kasih</p>
                <!-- <h3 class="display-5">Website Is under development</h3> -->
            </div>
            <div class="card-footer">
                Regards <a href="">penikahankita.id</a>
            </div>
        </div>
        </div>
        </div>
    </div>
</section>
<!-- <img src="https://dummyimage.com/1349x600" alt="" width="100%"> -->
@endsection
@section('meta')
<title>Pernikahankita.id | Digital Wedding Invitation</title>
<meta property="og:title" content="Pernikahankita.id | Digital Wedding Invitation" />
<meta property="og:url" content="{{ route('index') }}" />
<meta property="og:image" content="https://ia.media-imdb.com/images/rock.jpg" />
@endsection