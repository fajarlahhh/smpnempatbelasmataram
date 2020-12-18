@extends('frontend.pages.main')

@section('subcontent')
<div role="main" class="main">
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-posts">
                    @foreach ($data as $index => $row)
                    <article class="post post-medium">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="post-image">
                                    <div class="owl-carousel owl-theme" data-plugin-options="{'items':{{ $index + 1 }}}">
                                        <div>
                                            <div class="img-thumbnail">
                                                <img class="img-responsive" src="{{ $row->kegiatan_gambar }}" alt="" style="width: 500px; height: 200px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="post-content">
                                    <h2><a href="/kegiatan?id={{ $row->kegiatan_id }}">{{ $row->kegiatan_judul }}</a></h2>
                                    <p>{!! $row->kegiatan_isi_selengkapnya !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> {{ date('d F Y', strtotime($row->created_at)) }} </span>
                                    <span><i class="fa fa-user"></i> Oleh <a href="#">{{ $row->operator }}</a> </span>
                                    <a href="/kegiatan?id={{ $row->kegiatan_id }}" class="btn btn-xs btn-primary pull-right">Selengkapnya...</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    <div class="pull-right">{{ $data->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
