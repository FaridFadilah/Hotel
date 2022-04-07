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
                       
                        <div class="form-row">
                            @foreach ($kamar as $kamars)
                                
                            <img width="500" src="{{ asset("storage/img/gambar/" . $kamars->gambar) }}" class="img-thumbnail" alt="Test">
                            <div class="form-group col-12 col-md-6">

                                <h4>No kamar: {{ $kamars->no_kamar }}</h4>
                                <p>{{ $kamars->deskripsi }}</p>
                                <p>{{ $kamars->harga }} / Day</p>
                                <ul> @foreach ($kamars->fkamar as $data)
                                    <li>{{ $data["fasilitas"] }}  <a href="{{ route("fas.kam.destroy", $data["id"]) }}"> Delete</a></li>
                                    @endforeach </ul>
                                <ul><li><a href="{{ route("kamar.edit", $kamars->id) }}">Edit</a></li><li><a href="{{ route("kamar.destroy", $kamars->id) }}">Hapus</a></li>
                                <li><a href="{{ route("fas.kam.tambah", $kamars->id) }}">Tambah Fasilitas Kamar</a></li></ul>
                                
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