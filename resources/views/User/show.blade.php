@include("admin.partials.header")
@include("admin.partials.navbar")
<main class="main">
    <!-- Sidebar Nav -->
    @include("admin.partials.sidebar")
    
    <!-- End Sidebar Nav -->

    <div class="content">    
        <div class="py-4 px-3 px-md-4">
            <div class="card mb-3 mb-md-4">
            <!-- Info -->
            <div class="card-body">
                <!-- Breadcrumb -->
                <!-- End Breadcrumb -->
                    <div>
                                    <h1 class="">Periksa Pesanan</h1>
                            
                       
                        <div class="form-row">
                            @foreach ($reservasi as $data)
                            <div class="form-group col-12 col-md-6">
                                <h4></h4>
                                    <ul><li>atas nama : {{ $data->user->name }}</li>
                                    <li>No kamar : {{ $data->kamar->no_kamar }}</li>
                                    <li>Rp 120.000 / Day (Lunas)</li>
                                    <li>tanggal Check In : {{ $data->check_in }}</li>
                                    <li>tanggal Check Out : {{ $data->check_out }}</li></ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card --> 
            </div>
        </div>
        <!-- Footer -->
@include("admin.partials.footer")