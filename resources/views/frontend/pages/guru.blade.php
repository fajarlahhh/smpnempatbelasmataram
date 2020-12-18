@extends('frontend.pages.main')

@section('subcontent')
<div role="main" class="main">
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="toggle toggle-primary mt-lg" data-plugin-toggle>
                    @foreach ($data as $row)
                    <section class="toggle">
                        <label>{{ $row->mapel_nama }} ({{ $row->guru->count() }})</label>
                        <div class="toggle-content">
                            <div class="row mt-lg">
                                @foreach ($row->guru as $guru)
                                <div class="col-md-2 col-xs-6 center mb-lg">
                                    <img src="{{ $guru->guru_gambar }}" class="img-responsive" alt="">
                                    <h5 class="mt-sm mb-none">{{ $guru->guru_nama }}</h5>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
