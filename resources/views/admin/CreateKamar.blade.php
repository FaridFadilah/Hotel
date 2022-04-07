@include("admin.partials.header")
<!-- Header -->
@include("admin.partials.navbar")
<!-- End Header -->

<main class="main">
    <!-- Sidebar Nav -->
    @include("admin.partials.sidebar")
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">

            <!-- Info -->
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">{{ $title }}</div>
            </div>
            <!-- Card -->
            <div class="row">
                <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                    <!-- Card -->
                    
                <form enctype="multipart/form-data" method="POST" action="{{ $route }}">
                        @csrf
                        <input type="hidden" name="no_kamar">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar</label>
                            <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Harga</label>
                            <input name="harga" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="exampleInputPassword1">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">type</label>
                              <select name="tipe_id" class="custom-select">
                                  @foreach($fasilitas as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                  @endforeach
                            </select>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form><br>
                        <a href="{{ route("fas.umu.tambah") }}" class="btn btn-outline-success">Tambah Fasilitas Umum</a><br>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
        <!-- Footer -->
        @include("admin.partials.footer")