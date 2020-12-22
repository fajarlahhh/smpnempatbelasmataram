@extends('frontend.pages.main')

@section('subcontent')
<div role="main" class="main">

    <p></p>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3 class="heading-primary"><strong>Profil</strong> Sekolah</h3>
                {!! $data->posting_isi !!}
            </div>
        </div>
    </div>
</div>
@endsection

