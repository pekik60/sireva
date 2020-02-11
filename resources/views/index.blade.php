@extends('layouts_frontend._main')

@section('extra_style')
<style type="text/css">
    .center-cropped {
        height: 150px;
        overflow: hidden;
        margin: 10px;
        position: relative;
        border-radius: 25px;
    }
    .imgg {
        position: absolute;
        margin: auto; 
        min-height: 100%;
        min-width: 100%;
        left: -100%;
        right: -100%;
        top: -100%;
        bottom: -100%;
    }
    .search_bar_container{
        z-index: 99;
        margin-top: -250px;
        position: relative;
        padding-left: 20px;
        padding-right: 20px;
        background-color: #ffffffa6;
        border-radius: 50px;
    }
    .form-control {
        border:2px solid #000000;
        border-radius: 0px;
        color: black;
    }
</style>
@endsection
@section('carousel')
 <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ asset('../assets_frontend/img/slider/1.jpg') }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-left" style="margin-left: 30px">
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Membantu Kamu Menemukan Acara Seni, Sastra, Budaya di Kota Surabaya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ asset('../assets_frontend/img/slider/2.jpg') }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-left" style="margin-left: 30px">
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Membantu Kamu Menemukan Acara Seni, Sastra, Budaya di Kota Surabaya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ asset('../assets_frontend/img/slider/3.jpg') }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-left" style="margin-left: 30px">
                            <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Membantu Kamu Menemukan Acara Seni, Sastra, Budaya di Kota Surabaya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search_bar">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="search_bar_container">
              <form action="#" id="search_bar_form" class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-between clearfix">
                <div style="width: 100%;margin-top: 15px;padding: 10px;">
                <select class="form-control " style="border-radius: 50px !important;">
                    <option>- Pilih Kategori -</option>
                    @foreach ($category_event as $i => $element)
                    <option value="{{ $element->ce_id }}"><i class="{{ $element->ce_icon }}"></i>&nbsp;&nbsp;{{ $element->ce_name }}</option>
                     @endforeach
                </select>
                </div>
                <div style="width: 100%;padding: 10px;">
                <input type="date" class="form-control mt-15 " placeholder="Pilih Tanggal" style="border-radius: 50px !important;">
                </div>
                <button class="btn mag-btn" type="button" style="background-color: #ff6a00;border-radius: 50px"><i class="fa fa-search"></i> CARI</button>
              </form>
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection  
@section('content')

<section class="mag-posts-area d-flex flex-wrap">
<div class="mag-posts-content mt-30 p-30">
            <div class="feature-video-posts mb-30">
                <div class="section-heading">
                    <h5>EVENT</h5>
                    <h6>Jelajahi dan Temukan Acara Menarik di Kota Surabaya </h6>
                </div>

                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                        <ul class="nav nav-tabs nav-justified">
                              
                        </ul>
                        <ul class="nav nav-tabs nav-justified">
                            {{-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#all"><i class="all"></i>  &nbsp;all</a>
                              </li> --}}
                          @foreach ($category_event as $i => $element)
                              <li class="nav-item">
                                <a class="nav-link  @if ($i == 0) active @endif" data-toggle="tab" href="#{{ $element->ce_href }}">&nbsp;{{ $element->ce_name }}</a>
                              </li>
                         @endforeach
                        </ul>
                        <br>
                          @foreach ($category_event as $i => $element)
                                <div class="tab-pane container-fluid fade" id="all">ALL</div>
                                <div class="tab-content">
                                  <div class="tab-pane container-fluid active" id="drama">
                                    <div class="featured-video-posts">
                                        <div class="row">
                                          @foreach ($category_event[$i]->d_event as $i1 => $element1)
                                            @if ($element->ce_id == 1)
                                            <p></p>
                                                <div class="col-12 col-lg-3 mb-50">
                                                    <div class="single-featured-post">
                                                        <div class="post-thumbnail center-cropped">
                                                            <img src="{{ asset('../storage/app/'.$element1->e_poster) }}" alt="" class="imgg">
                                                        </div>
                                                        <div class="post-content">
                                                            <a href="{{ route('event_detail',['id'=>$element1->e_id]) }}" class="post-title" style="font-size:20px !important">{{ $element1->e_title }}</a>
                                                            <div class="post-meta">
                                                                <a href="#">{{ date('d M Y',strtotime($element1->e_created_at)) }}</a>
                                                                <a href="archive.html">{{ $element->ce_name }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="post-share-area d-flex align-items-center justify-content-between">
                                                            <div class="post-meta pl-3">
                                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $element1->e_views }}</a>
                                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"> {{ $element1->d_event_like->count('del_id') }}</i> 
                                                                </a>
                                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> {{ $element1->d_event_comment->count('dec_id') }}</a>
                                                            </div>
                                                            <div class="share-info">
                                                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                                                <div class="all-share-btn d-flex">
                                                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                          @endforeach
                                        </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane container-fluid fade" id="tari">
                                      <div class="featured-video-posts">
                                        <div class="row">
                                          @foreach ($category_event[$i]->d_event as $i1 => $element1)
                                            @if ($element->ce_id == 3)
                                                <div class="col-12 col-lg-3 mb-50">
                                                    <div class="single-featured-post">
                                                        <div class="post-thumbnail center-cropped">
                                                            <img src="{{ asset('../storage/app/'.$element1->e_poster) }}" alt="" class="imgg">
                                                        </div>
                                                        <div class="post-content">
                                                            <a href="{{ route('event_detail',['id'=>$element1->e_id]) }}" class="post-title" style="font-size:20px !important">{{ $element1->e_title }}</a>
                                                            <div class="post-meta">
                                                                <a href="#">{{ date('d M Y',strtotime($element1->e_created_at)) }}</a>
                                                                <a href="archive.html">{{ $element->ce_name }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="post-share-area d-flex align-items-center justify-content-between">
                                                            <div class="post-meta pl-3">
                                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                                            </div>
                                                            <div class="share-info">
                                                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                                                <div class="all-share-btn d-flex">
                                                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                          @endforeach
                                        </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane container-fluid fade" id="seni_rupa">Seni rupa</div>
                                  <div class="tab-pane container-fluid fade" id="sastra_literasi">Sastra literasi</div>
                                  <div class="tab-pane container-fluid fade" id="festival">Festival</div>
                                  <div class="tab-pane container-fluid fade" id="lokakarya">lokakarya</div>

                                </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-video-posts">
                <div class="section-heading">
                    <h5>EXPLORER</h5>
                    <h6>Selamat Berselancar dan Segera Mulai Petualanganmu! </h6>
                </div>

                <div class="drop">
                    @include('news_result_render')
                </div>
            </div>
            <div class="feature-video-posts">
                <div class="section-heading">
                    <h5>EXPLORER</h5>
                    <h6>Selamat Menikati laksana suara! </h6>
                </div>
                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-6" >
                            <div class="" style="margin-bottom: 10px">
                                <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yTvSVctAJag" frameborder="0" allowfullscreen></iframe>
            </div>
                                {{-- <img src="" style="height: 350px !important" alt="">
                                <div class="post-content">
                                    <a href="" class="post-cata">{{ $element->m_category_news->cn_name }}</a>
                                    <a href="" class="post-title">{{ $element->n_title }}</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-12 col-lg-6" >
                            <div class="">
                                <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uO5kvfQ-kPQ" frameborder="0" allowfullscreen></iframe>
            </div>
                                {{-- <img src="{{ asset('../storage/app/'.$element->n_image ) }}" style="height: 350px !important" alt=""> --}}
                                {{-- <div class="post-content"> --}}
                                    {{-- <a href="{{ route('news_detail',['id'=>$element->n_id]) }}" class="post-cata">{{ $element->m_category_news->cn_name }}</a> --}}
                                    {{-- <a href="{{ route('news_detail',['id'=>$element->n_id]) }}" class="post-title">{{ $element->n_title }}</a> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
</section>        
@endsection

@section('extra_scripts')
<script type="text/javascript">
    $(document).ready(function(){

     $(document).on('click', '.pagination a', function(event){
      event.preventDefault(); 
      var page = $(this).attr('href').split('page=')[1];
      fetch_data(page);
     });

     function fetch_data(page)
     {
      $.ajax({
       url:baseUrl+"/news_render?page="+page,
       success:function(data)
       {
        $('.drop').html(data);
       }
      });
     }
     
    });
</script>
@endsection
