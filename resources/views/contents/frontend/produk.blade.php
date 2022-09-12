@extends('layouts.frontend')
@section('content')

<style>
    .img-box {
        width: 550px;
        height: 300px;
        border: solid red;
    }

    .modified-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<!-- <div class="container mt-5">
    <div class="row">
        <div class="col"> -->

<!--product -->
<!-- <div class="product">
                <h4 class="md-6"><b>{{ $title }}</b></h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-content">
                            <div class="img-box">
                                <img class="modified-img" src="{{ url_images('gambar', $edit->gambar) }}" class="img-fluid w-100 mb-3">
                            </div>
                        </div>
                    </div>


                    <div class="down-content">
                        <div class="col-md-6 detail-produk"> -->

<!-- <div class="row mt-3">
                            <div class="col-sm-4"><b>Nama Produk</b></div>
                            <div class="col-sm-8"><?= $edit->nama_produk; ?></div>
                            </div> -->
<!-- 
                            <p style="text-align:center; font-size: 30px; font-weight: bold; margin: 30px 10px 10px 10px;"><?= $edit->nama_produk; ?></p>
                            <p style="text-align:center; font-size: 30px; font-weight: bold; margin: 30px 10px 10px 10px;">Rp. <?= number_format($edit->harga_jual); ?></p>
                            <p style="text-align:left; font-size: 20px; font-weight: bold; margin: 100px 10px 10px 10px;"> Kategori : <a class="text-produk" href="{{ url('kategori/'.$edit->id) }}" style="text-align:left; font-size: 20px; font-weight: bold; margin: 100px 10px 10px 10px;">
                                    {{ $edit->nama_kategori }}
                                </a></p> -->
<!-- <a class="text-produk" href="{{ url('kategori/'.$edit->id) }}">
                                    {{ $edit->nama_kategori }}
                                </a> -->
<!-- <p style="text-align:left; font-size: 20px; font-weight: bold; margin: 20px 10px 10px 10px;"> Deskripsi : </p>
                            <p style="text-align:left; font-size: 20px; font-weight: bold; margin: 20px 10px 10px 10px;"><?= $edit->deskripsi; ?></p>

                            <div class="row mt-3">
                                <div class="col-sm-4"><b>Kategori</b></div>
                                <div class="col-sm-8">
                                    <a class="text-produk" href="{{ url('kategori/'.$edit->id) }}">
                                        {{ $edit->nama_kategori }}
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4"><b>Nama Produk</b></div>
                                <div class="col-sm-8"><?= $edit->nama_produk; ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4"><b>Harga jual</b></div>
                                <div class="col-sm-8 text-success">
                                    <h4><b>Rp<?= number_format($edit->harga_jual); ?>,-</b></h4>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4"><b>Deskripsi</b></div>
                                <div class="col-sm-8"><?= $edit->deskripsi; ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4"><b></b></div>
                                <div class="col-sm-8">
                                    <a class="btn btn-success btn-md" href="https://api.whatsapp.com/send/?phone={{ $profil_toko->phone }}&text=Halo+Admin+Saya+ingin+membeli+produk+{{url('produk/'.$edit->id)}}" target="_blank" role="button">
                                        <i class="fab fa-whatsapp"></i> Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="main-banner" id="top"> -->
<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="team-item">
                <div class="left-content">
                    <div class="thumb">
                        <div class="img-box">
                            <img class="modified-img" src="{{ url_images('gambar', $edit->gambar) }}" class="img-fluid w-100 mb-3">
                        </div>
                        <div class="down-content">
                            <p style="text-align:center; font-size: 30px; font-weight: bold; margin: 30px 10px 10px 10px;"> Nasi Goreng Bumbu Kuning Bali </p> -->
<!-- <h4>Nasi Goreng Bumbu Kuning Bali</h4> -->
<!-- <span>Rating</span> -->
<!-- <p style="text-align:center; font-size: 30px; font-weight: bold; margin: 30px 10px 10px 10px;"> Rp. 17.000,- </p> -->
<!-- <p style="text-align:center; font-size: 30px; font-weight: bold; margin: 30px 10px 10px 10px;"> (rating) </p> -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                beri rating
                              </button> -->
<!-- <div class="rating-css">
                                <div class="star-icon">
                                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                                    <label for="rating1" class="fa fa-star"></label>
                                    <input type="radio" value="2" name="product_rating" id="rating2">
                                    <label for="rating2" class="fa fa-star"></label>
                                    <input type="radio" value="3" name="product_rating" id="rating3">
                                    <label for="rating3" class="fa fa-star"></label>
                                    <input type="radio" value="4" name="product_rating" id="rating4">
                                    <label for="rating4" class="fa fa-star"></label>
                                    <input type="radio" value="5" name="product_rating" id="rating5">
                                    <label for="rating5" class="fa fa-star"></label>
                                </div>
                            </div>
                            <p style="text-align:left; font-size: 20px; font-weight: bold; margin: 100px 10px 10px 10px;"> Deskripsi : </p>
                            <p style="text-align:left; font-size: 20px; font-weight: bold; margin: 20px 10px 10px 10px;"> Nasi Goreng disertai dengan bumbu kuning </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<!-- <div class="col-md-6">
            <div class="right-content">
                <div class="row">
                    <div class="col">
                        <div class="left-image">
                            <div class="thumb">
                                <img src="assets/images/Warung-Makan01.jpg" alt="" width="250" height="250" style="float:left" />
                                <p style="text-align:right; font-size: 25px; font-weight: bold; margin: 0px 10px 10px 10px;"> Warung Makan Bangli </p>
                                <p style="text-align:right; font-size: 20px; font-weight: bold; margin: 30px 10px 10px 10px;"> Lokasi tempat makan : </p>
                                <p style="text-align:right; font-size: 20px; font-weight: bold; margin: 30px 10px 10px 10px;"> Deskripsi : </p>
                                <p style="text-align:right; font-size: 20px; font-weight: bold; margin: 30px 10px 10px 10px;"> [rating] </p>
                                <div class="rating-css">
                                    <div class="star-icon">
                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                        <label for="rating1" class="fa fa-star"></label>
                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                        <label for="rating2" class="fa fa-star"></label>
                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                        <label for="rating3" class="fa fa-star"></label>
                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                        <label for="rating4" class="fa fa-star"></label>
                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                        <label for="rating5" class="fa fa-star"></label>


                                        <div class="down-content">
                                            <p style="text-align:left; font-size: 20px; margin: 100px 10px 20px 0px;"> M E N U L A I N N Y A </p>
                                        </div>


                                        <img class="kiri" src="assets/images/nasi campur.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> -->





<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="team-item">
                    <div class="left-content">
                        <div class="thumb">
                            <img src="assets/images/gambar nasi goreng bumbu kuning bali.jpg" alt="">
                            <div class="down-content">
                                <p style="text-align:center; font-size: 30px; font-weight: bold; margin: 30px 10px 10px 10px;"> Nasi Goreng Bumbu Kuning Bali </p>
                                <!-- <h4>Nasi Goreng Bumbu Kuning Bali</h4> -->
                                <!-- <span>Rating</span> -->
                                <p style="text-align:center; font-size: 30px; font-weight: bold; margin: 30px 10px 10px 10px;"> Rp. 17.000,- </p>
                                <!-- <p style="text-align:center; font-size: 30px; font-weight: bold; margin: 30px 10px 10px 10px;"> (rating) </p> -->
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                beri rating
                              </button> -->
                                <div class="rating-css">
                                    <div class="star-icon">
                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                        <label for="rating1" class="fa fa-star"></label>
                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                        <label for="rating2" class="fa fa-star"></label>
                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                        <label for="rating3" class="fa fa-star"></label>
                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                        <label for="rating4" class="fa fa-star"></label>
                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                        <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                </div>
                                <p style="text-align:left; font-size: 20px; font-weight: bold; margin: 100px 10px 10px 10px;"> Deskripsi : </p>
                                <p style="text-align:left; font-size: 20px; font-weight: bold; margin: 20px 10px 10px 10px;"> Nasi Goreng disertai dengan bumbu kuning </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content sebelah kanan -->


            <div class="col-md-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col">
                            <div class="left-image">
                                <div class="thumb">
                                    <img src="assets/images/Warung-Makan01.jpg" alt="" width="250" height="250" style="float:left" />
                                    <p style="text-align:right; font-size: 25px; font-weight: bold; margin: 0px 10px 10px 10px;"> Warung Makan Bangli </p>
                                    <p style="text-align:right; font-size: 20px; font-weight: bold; margin: 30px 10px 10px 10px;"> Lokasi tempat makan : </p>
                                    <p style="text-align:right; font-size: 20px; font-weight: bold; margin: 30px 10px 10px 10px;"> Deskripsi : </p>
                                    <!-- <p style="text-align:right; font-size: 20px; font-weight: bold; margin: 30px 10px 10px 10px;"> [rating] </p>    -->
                                    <div class="rating-css">
                                        <div class="star-icon">
                                            <input type="radio" value="1" name="product_rating" checked id="rating1">
                                            <label for="rating1" class="fa fa-star"></label>
                                            <input type="radio" value="2" name="product_rating" id="rating2">
                                            <label for="rating2" class="fa fa-star"></label>
                                            <input type="radio" value="3" name="product_rating" id="rating3">
                                            <label for="rating3" class="fa fa-star"></label>
                                            <input type="radio" value="4" name="product_rating" id="rating4">
                                            <label for="rating4" class="fa fa-star"></label>
                                            <input type="radio" value="5" name="product_rating" id="rating5">
                                            <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="down-content">
                                    <p style="text-align:left; font-size: 20px; margin: 100px 10px 20px 0px;"> M E N U L A I N N Y A </p>
                                </div>
                                <!-- <div class="col3">
                            <div class="food-card">
                                <div class="fc-image">
                                    <img src="assets/images/nasi campur.jpg" alt="">
                                </div>
                                <div class="fc-desc">
                                    <h3>Nasi Ayam</h3>
                                    <p>Nasi dengan ayam</p>
                                </div>
                                <div class="fc-price">
                                    <div class="price-tag">Start From</div>
                                    <div class="price-num">
                                        Rp 40 <sup>Ribu</sup>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                                <!-- <div id="images">
    <a href="http://xyz.com/hello">
        <img src="assets/images/nasi campur.jpg" width="100px" height="100px">
        <div class="caption">Caption 1</div>
    </a>
    <a href="http://xyz.com/hi">
        <img src="assets/images/nasi campur.jpg" width="100px" height="100px"> 
        <div class="caption">Caption 2</div>
    </a>
</div> -->
                                <img class="kiri" src="assets/images/nasi campur.jpg" />
                                <!-- <p>Nasi</p> -->
                                <!-- <figure>
  <img class="kiri" src="assets/images/nasi campur.jpg" alt="Microsoft Windows 10">
  <figcaption>Nasi.</figcaption>
</figure> -->
                                <img class="kanan" src="assets/images/nasi campur.jpg" />
                                <!-- <p class ="teks2">Nasi</p> -->
                                <img class="tengah" src="assets/images/nasi campur.jpg" />
                                <!-- <p class ="teks3">Nasi</p> -->
                                <!-- <img src="assets/images/nasi campur.jpg" alt="" width="150"height="150" margin="20px">
                        <p>Nasi</p>
                        <img src="assets/images/nasi campur.jpg" alt="" width="150"height="150" margin="20px">
                        <p>Nasi</p>
                        <img src="assets/images/nasi campur.jpg" alt="" width="150"height="150" margin="20px"> -->
                            </div>
                            <div class="down-content">
                                <p style="text-align:left; font-size: 20px; margin: 30px 10px 10px 0px;"> U L A S A N & R A T I N G</p>
                            </div>
                            <form role="form">
                                <div class="form-group">
                                    <label for="inputulasan">Ulasan</label>
                                    <input class="form-control" id="inputulasan" type="text">
                                </div>
                                <form role="form">
                                    <div class="form-group">
                                        <label for="inputrating">Rating</label>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            beri rating
                                        </button>
                                        <div class="rating-css">
                                            <!-- <div class="star-icon">
                            <input type="radio" value="1" name="product_rating" checked id="rating1">
                            <label for="rating1" class="fa fa-star"></label>
                            <input type="radio" value="2" name="product_rating" id="rating2">
                            <label for="rating2" class="fa fa-star"></label>
                            <input type="radio" value="3" name="product_rating" id="rating3">
                            <label for="rating3" class="fa fa-star"></label>
                            <input type="radio" value="4" name="product_rating" id="rating4">
                            <label for="rating4" class="fa fa-star"></label>
                            <input type="radio" value="5" name="product_rating" id="rating5">
                            <label for="rating5" class="fa fa-star"></label>
                        </div>
                    </div> -->
                                            <!-- <input class="form-control" id="inputrating" type="text"> -->
                                            <!-- <input type="submit" name="simpan"> -->
                                        </div>
                                        <!-- <form action="proses.php" method="POST"> -->
                                        <!-- <label>Ulasan &amp; Rating</label> -->
                                        <!-- <input type="text" name="ulasan" placeholder="Berikan Ulasan Disini" required><br />
                            <input type="text" name="rating" placeholder="Berikan Rating Disini" required><br />
		                    <input type="submit" name="simpan"> -->
                                        <!-- </form>
                        <form action="proses.php" method="POST">
		                <label> Rating: </label>
		                    <input type="text" name="nama" placeholder="Berikan Rating Disini" required><br />
		                    <input type="submit" name="simpan">
	                    </form> -->
                                    </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
            @section('javascript')

            @endsection