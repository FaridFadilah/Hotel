@include("User.partials.header")
@include("User.partials.navbar")
<!-- End Header -->

<main class="main">
    <!-- Sidebar Nav -->
    @include("User.partials.sidebar")
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">

            <!-- Info -->
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">data reservasi</div>
            </div>
            
            <!-- Card -->
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
                </thead>.
                <tbody>
                    @php $i = 0 @endphp
                    @foreach($reservasi as $tamu)
                    @php $i++ @endphp
                <tr>
                    <td class="py-3">{{ $tamu->id }}</td>
                    <td class="py-3">
                        <div>{{ $tamu->user->name }}</div>
                    </td>
                    <td class="py-3">{{ $tamu->user->email }}</td>
                    <td class="py-3">{{ $tamu->kamar->no_kamar }}</td>
                    <td class="py-3">
                        @if ($tamu->status == "Pending")
                        <span class="badge badge-warning"> {{ $tamu->status }}</span>
                        @endif
                        @if ($tamu->status == "Accept")
                        <span class="badge badge-success"> {{ $tamu->status }}</span>
                        @endif
                    </td>
                    <td class="py-3">{{ $tamu->check_in }}</td>
                    <td class="py-3">{{ $tamu->check_out }}</td>
                    <td class="py-3">
                        @if($tamu->status == "Accept")
                        <a href="{{ route("pdf", $tamu->id) }}">Cetak pesanan</a>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        <!-- Footer -->
        @include("User.partials.footer")
        {{-- end Footer --}}