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
                        @csrf @method("PUT")
                        @foreach ($kamar as $data) 
                        <input type="hidden" name="no_kamar">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">gambar</label>
                            <input name="gambar" value="{{ $data->gambar }}" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">harga</label>
                            <input name="harga" type="text" value="{{ $data->harga }}" class="form-control" id="exampleInputPassword1">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $data->deskripsi }}</textarea>
                        </div>
                      @endforeach
                        <div class="form-group">
                            <label for="exampleInputEmail1">tipe</label>
                              <select name="tipe_id" class="custom-select">
                                @foreach ($tipe as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    <!-- End Card -->
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include("admin.partials.footer")