<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<style>
    .img-box{
        width: 176px;
        height: 170px;
        /* border: solid red; */
    }

    .modified-img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<!-- ***** Our Team Area Starts ***** -->
<section class="our-team">
    <div class="container">
        <div class="row">
            @foreach($produk as $r)
            <div class="col-sm-3 mb-3 d-none d-lg-block">
                <div class="col-lg-10">
                    <!-- <div class="section-heading"> -->
                    <div class="col-lg-200">
                        <div class="team-item">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <div class="main-border-button">
                                            <a href="{{ url('produk/'.$r->id) }}">Lihat detail</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-box">
                                    <img class="modified-img" src="{{ url_images('gambar', $r->gambar) }}"></div>
                                
                            </div>
                            <div class="down-content">
                                <!-- <h6>Rp{{number_format($r->harga_jual)}},- </h6> -->
                                <a href="{{ url('produk/'.$r->id) }}" class="text-produk">{{ $r->nama_produk }}</a>
                                <span>Rating</span>

                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            @endforeach
        </div>

    </div>
    </div>
</section>
<!-- ***** Our Team Area Ends ***** -->