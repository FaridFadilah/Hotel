@include("resepsionis.partials.header")

{{-- Header --}}
@include("resepsionis.partials.navbar")
<!-- End Header -->

<main class="main">
    <!-- Sidebar Nav -->
@include("resepsionis.partials.sidebar")
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">{{ $title }}</div>
                <form method="GET" action="{{ route("resepsionis") }}">
                    <div class="input-group">
                        <input class="ml-5 form-control-plaintext" name="search" placeholder="Search..." type="text" value="{{ request("search") }}">
                    <div>
                      <button type="submit" class="btn btn-sm btn-outline-primary" href="#">Search</button>
                    </div>    
                  </div>
                </form>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                    <!-- Widget -->
                    <div class="card flex-row align-items-center p-3 p-md-4">
                        <div class="icon icon-lg bg-soft-primary rounded-circle mr-3">
                            <i class="fa fa-user icon-text d-inline-block text-primary"></i>
                        </div>
                        <div>
                            <h4 class="lh-1 mb-1">{{ $tamu }}</h4>
                            <h6 class="mb-0">Jumlah Tamu</h6>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                    <!-- Widget -->
                    <div class="card flex-row align-items-center p-3 p-md-4">
                        <div class="icon icon-lg bg-soft-primary rounded-circle mr-3">
                            <i class="fa fa-bed icon-text d-inline-block text-primary"></i>
                        </div>
                        <div>
                            <h4 class="lh-1 mb-1">{{ $kamar }}</h4>
                            <h6 class="mb-0">Jumlah Kamar</h6>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                    <!-- Widget -->
                    <div class="card flex-row align-items-center p-3 p-md-4">
                        <div class="icon icon-lg bg-soft-primary rounded-circle mr-3">
                            <i class="fa fa-user icon-text d-inline-block text-primary"></i>
                        </div>
                        <div>
                            <h4 class="lh-1 mb-1">{{ $accept }}</h4>
                            <h6 class="mb-0">Tamu check in</h6>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 mb-md-4">
                        <div class="card-header">
                            <h5 class="font-weight-semi-bold mb-0">Jumlah Tamu 1</h5>
                            <p>data yang tampil dari {{ $reservasi->firstItem() }} - {{ $reservasi->lastItem() }} dari {{ $reservasi->total() }}</p>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive-xl">
                                <table class="table text-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th class="font-weight-semi-bold border-top-0 py-2">ID</th>
                                            <th class="font-weight-semi-bold border-top-0 py-2">Customer</th>
                                            <th class="font-weight-semi-bold border-top-0 py-2">Email</th>
                                            <th class="font-weight-semi-bold border-top-0 py-2">No Kamar</th>
                                            <th class="font-weight-semi-bold border-top-0 py-2">Status</th>
                                            <th class="font-weight-semi-bold border-top-0 py-2">check in</th>
                                            <th class="font-weight-semi-bold border-top-0 py-2">check out</th>
                                            <th class="font-weight-semi-bold border-top-0 py-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $i = 0 @endphp
                                    @foreach($reservasi as $data)
                                    @php $i++ @endphp
                                    <tr>
                                        <td class="py-3">{{ $data->id }}</td>
                                        <td class="py-3">
                                            <div>{{ $data->user->name }}</div>
                                        </td>
                                        <td class="py-3">{{ $data->user->email }}</td>
                                        <td class="py-3">{{ $data->kamar->no_kamar }}</td>
                                        <td class="py-3">
                                            @if ($data->status == "Pending")
                                            <span class="badge badge-warning"> {{ $data->status }}</span>
                                            @endif
                                            @if ($data->status == "Accept")
                                            <span class="badge badge-success"> {{ $data->status }}</span>
                                            @endif
                                        </td>
                                        <td class="py-3">{{ $data->check_in }}</td>
                                        <td class="py-3">{{ $data->check_out }}</td>
                                        <td class="py-3">
                                            @if($data->status == "Pending")
                                            <a href="{{ route("resepsionis.update.status", $data->id) }}"><i class="fa fa-check unfold-item-icon mr-3"></i></a>
                                            @endif
                                                <a href="{{ route("resepsionis.destroy", $data->id) }}"><i class="fa fa-trash unfold-item-icon mr-3"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach       
                                    </tbody>
                                </table>
                                {{ $reservasi->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{-- <form action="{{ route('resepsionis.destroy', $data->id) }}" method="POST" >
                                            @csrf
                                            @method("DELETE")
                                        <td class="py-3">
                                        </td>
                                            </form> --}}
        <!-- Footer -->
        @include("resepsionis.partials.footer")