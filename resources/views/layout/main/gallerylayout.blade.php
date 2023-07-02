@extends('layout.main.layout')
@section('title', 'Gallery')
@section('gallery')
<!--==================================================-->
<!-- Start print shop  Section  -->
<!--==================================================-->
<div class="shop-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="print_shop-section-title text-center mb-40 mt-30">
                    <h1> Our Best Of {{$category_name}} </h1>
                </div>
            </div>
            <div class="col-lg-12 ">
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class=" col-lg-8 row">
                        @foreach($bestimages as $b)
                        <div class="col-6">
                            <img style="height:600px; width:400px;" src="{{asset('storage/img/'.$b->images)}}" alt="">
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-2">

                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="print_shop-section-title text-center mb-40 mt-40">
                    <h1> {{$category_name}}s </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- nav button -->
                <div class="items-button">

                </div>
                <!-- start tab-->
                <div class="tab">
                    <div class="catalog-filter">
                        <form action="#">
                            <select name="cars" id="cars">
                                <option value="7days">Default Sorting</option>
                                <option value="8days">Sort by popularity</option>
                                <option value="9days">Sort by average rating</option>
                                <option value="5days">Sort by latest</option>
                                <option value="5days">Sort by price: low to high</option>
                                <option value="5days">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                    <!-- / tabs -->
                    <ul class="tabs">
                        <li><a href="#"> <i class="bi bi-x-diamond"></i> </a></li>
                        <li><a href="#"> <i class="bi bi-text-left"></i> </a></li>
                    </ul>
                    <!-- tab content -->
                    <div class="tab_content">
                        <!-- / tabs_item -->
                        @yield('products')
                        <!-- women -->
                        @yield('women')

                        <!-- shop shirts women-->
                        @yield('shirts')

                        <!-- shop shirts women -->
                        @yield('skirts')

                        <!-- shop frock women -->
                        @yield('frocks')

                        <!-- shop t_shirts women -->
                        @yield('t_shirts')

                        <!-- shop track_pants women -->
                        @yield('track_pants')

                        <!-- shop P.T Shorts women -->
                        @yield('pt_shorts')

                        <!-- shop belts women -->
                        @yield('belts')

                        <!-- shop ties women -->
                        @yield('ties')

                        <!-- shop logos women -->
                        @yield('logos')

                        <!-- shop socks women -->
                        @yield('socks')

                        <!-- men -->
                        @yield('men')

                        <!-- shop shirts men-->
                        @yield('shirts_men')

                        <!-- shop t_shirts_men men -->
                        @yield('t_shirts_men')

                        <!-- shop track_pants men -->
                        @yield('track_pants_men')
                        <!-- shop P.T Shorts men -->
                        @yield('pt_shorts_men')

                        <!-- shop belts men -->
                        @yield('belts_men')

                        <!-- shop ties men -->
                        @yield('ties_men')

                        <!-- shop logos men -->
                        @yield('logos_men')

                        <!-- shop socks men -->
                        @yield('socks_men')

                        <!-- / tabs_item -->
                    </div> <!-- / tab_content -->
                </div>
                <!-- end tab -->
                <div class="col-lg-12">
                    <div class="pagination-menu">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                        </ul>
                        <ul>
                            <li><a href="#">1</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">2</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">3</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End print shop  Section -->
<!--==================================================-->
<!--==================================================-->
@endsection