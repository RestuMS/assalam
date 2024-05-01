@extends('layouts.layout')
@section('content')
    <div class="home-bg">

        <section class="home">

            <!-- <div class="content">
                                             <span>don't panic, go organice</span>
                                             <h3>Reach For A Healthier You With Organic Foods</h3>
                                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto natus culpa officia quasi, accusantium explicabo?</p>
                                             <a href="about.php" class="btn">about us</a>
                                          </div> -->

        </section>

    </div>

    <section class="home-category">

        <h1 class="title">-- PROMO --</h1>
        <h3 class="teks">ASSALAM HYPERMARKET</h3>
        <div class="box-container">

            <div class="box">
                <img src="{{ asset('images/promo1.jpg') }}" alt="">
                <h3>Minuman & Biskuit</h3>
                <p>Promo Minuman Kemasan,Aneka Biskuit berlaku pada 20 Februari 2024 - 10 Maret 2024</p>
                <a href="{{ route('category') }}" class="btn">DETAIL</a>
            </div>

            <div class="box">
                <img src="{{ asset('images/promo6.jpg') }}" alt="">
                <h3>Elektronik & Perlengkapan Rumah Tangga</h3>
                <p>Promo Elektronik , Perlengkapan Rumah Tangga berlaku pada 20 Februari 2024 - 10 Maret 2024</p>
                <a href="{{ route('category') }}" class="btn">DETAIL</a>
            </div>

            <div class="box">
                <img src="{{ asset('images/promo3.jpg') }}" alt="">
                <h3>Aneka Snack & Kebutuhan Masak</h3>
                <p>Promo Aneka Snack,Kebutuhan Memasak berlaku pada 20 Februari 2024 - 10 Maret 2024</p>
                <a href="{{ route('category') }}" class="btn">DETAIL</a>
            </div>

            <div class="box">
                <img src="{{ asset('images/promo5.jpg') }}" alt="">
                <h3>Parcel Lebaran</h3>
                <p>Promo Parcel Lebaran,Kebutuhan Rumah berlaku pada 20 Februari 2024 - 10 Maret 2024</p>
                <a href="{{ route('category') }}" class="btn">DETAIL</a>
            </div>


        </div>


    </section>
@endsection
<!-- <section class="products">

                       <h1 class="title">latest products</h1>

                       <div class="box-container">


                       </div>

                    </section> -->
