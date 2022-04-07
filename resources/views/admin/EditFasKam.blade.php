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
                    <form method="POST" action="{{ $route }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="exampleInputPassword1">tipe</label>
                            <input name="tipe" type="text" class="form-control" id="exampleInputPassword1">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">fasilitas</label>
                            <textarea name="fasilitas" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    <!-- End Card -->
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include("admin.partials.footer")