@include("admin.partials.header")
@include("admin.partials.navbar")
<main class="main">
    <!-- Sidebar Nav -->
    @include("admin.partials.sidebar")
    <!-- End Sidebar Nav -->

    <div class="content">    
        <div class="py-4 px-3 px-md-4">

            <!-- Info -->
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">{{ $title }}</div>
                <form action="{{-- route("resepsionis.search") --}}" method="get">
                    <div class="input-group">
                    <input class="ml-5 form-control-plaintext" name="search" placeholder="Enter user name.." type="text">
                    <div>
                      <button class="btn btn-sm btn-outline-primary" href="#">Search</button>
                    </div>
                  </div>
                </form>
            </div>
                <a href="{{ $route }}">Tambah Kamar</a>
            <!-- Card -->
            <div class="row">
                @php $i = 0 @endphp
                @foreach ($kamar as $data)
                @php $i++ @endphp
                <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                    <!-- Card -->                        
                    <div class="card " width="18rem">
                        <img src="{{ asset("storage/img/gambar/" . $data->gambar) }}" alt="" class="" width="100%" height="250">
                            <div class="card-body p-0">
                                <div class="media align-items-center px-3 px-md-4 mb-3 mb-md-4">
                                <div class="media-body">
                                    <h3 class="card-title ">{{ $data->tipe->name }}</h3>
                                    <h3 class="card-title ">{{ $data->no_kamar }}</h3>
                                    <p class="card-text">{{ $data->tipe->slug }}</p>
                                    @if ($data->status == "tidak terisi")                  
                                    <p class="card-title " style="color: skyblue;">{{ $data->status }}</p>
                                    @endif
                                    @if ($data->status == "terisi")                  
                                    <p class="card-title" style="color: red;">{{ $data->status }}</p>
                                    @endif
                                    <a href="{{ route("kamar.lihat", $data->id) }}">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                @endforeach
                    <!-- End Card -->
                </div> 
                    <div class="row">
                    @php $i = 0 @endphp 
                    @foreach ($umum as $data) 
                    @php $i++ @endphp 
                     <div class="col-md-6 col-xl-4 mb-3 mb-md-4"> 
                        <!-- Card -->                        
                        <div class="card " width="18rem">
                            <img src="{{ asset("storage/img/gambar/" . $data->gambar) }}" alt="" class="" width="100%" height="250">
                                <div class="card-body p-0"> 
                                    <div class="media align-items-center px-3 px-md-4 mb-3 mb-md-4"> 
                                    <div class="media-body"> 
                                                <a href="{{ route("fas.umu.edit",$data->id) }}" class="">Edit</a> 
                                        <form action="{{ route("fas.umu.destroy",$data->id) }}"  method="post"> 
                                        @csrf 
                                         @method("DELETE") 
                                            <button type="submit" class="">Delete</button> 
                                        </form> 
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div> 
                     @endforeach 
                        <!-- End Card -->
                    </div>
            </div>
        </div>

        <!-- Footer -->

@include("admin.partials.footer")