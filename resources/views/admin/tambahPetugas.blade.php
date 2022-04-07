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
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlFile1">name</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">username</label>
                            <input name="username" type="text" class="form-control" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">email</label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">role</label>
                              <select name="role" class="custom-select">
                                  <option value="manager">manager</option>
                                  <option value="resepsionis">resepsionis</option>
                                  <option value="staff">staff</option>
                                  <option value="user">user</option>
                            </select>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
        <!-- Footer -->
        @include("admin.partials.footer")