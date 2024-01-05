@extends('layouts.layoutAdmin')

@section('content')
<main id="main" class="main">
    <div class="pagetitle mt-4">
        <h1>Persetujuan</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="row">
                                <table>
                                    <thead id="example1">
                                        <tr>
                                            <th scope="col" style="text-align: center; border-top-left-radius:10px;">No</th>
                                            <th scope="col" style="text-align: center;">Foto Anda</th>
                                            <th scope="col" style="text-align: center;">Nama</th>
                                            <th scope="col" style="text-align: center;">Pendidikan Terakhir</th>
                                            <th scope="col" style="text-align: center;">No Telp</th>
                                            <th scope="col" style="text-align: center;">Tanggal Lahir</th>
                                            <th scope="col" style="text-align: center;">Alamat</th>
                                            <th scope="col" style="text-align: center; border-top-right-radius:10px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = ($calonguru->currentPage() - 1) * $calonguru->perPage() + 1;
                                        @endphp
                                        @forelse ($calonguru as $data)
                                        <tr>
                                            <td style="text-align: center;">{{ $no++ }}</td>
                                            <td style="text-align: center;"><img width="120px" height="100px"
                                                    src="{{ asset('storage/profile/' . $data->user->foto_user)}}" alt=""></td>
                                            <td style="text-align: center;">{{ $data->user->name }}</td>
                                            <td style="text-align: center;">{{ $data->pendidikan }}</td>
                                            <td style="text-align: center;">{{ $data->user->no_telepon }}</td>
                                            <td style="text-align: center;">{{ date('d F Y', strtotime($data->tanggal_lahir)) }}</td>
                                            <td style="text-align: center;">{{ Str::limit($data->alamat, 10) }}</td>
                                            <td class="d-flex mt-4" style="text-align: center;">
                                                <form action="{{ route('terimaguru', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-outline-success"
                                                        style="margin-right: 2px;"><i class="fa-solid fa-check"></i></button>
                                                </form>
                                                <form class="d-flex" id="delete-form-{{ $data->id }}"
                                                    action="{{ route('tolakguru', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger btn-sm me-2 delete-btn"
                                                        style="padding: 6px 12px;" data-id="{{ $data->id }}"><i
                                                            class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="8" style="text-align: center;"><h7>Data Tidak Ada</h7></td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                <!-- Display Pagination Links with Inline Styles -->
                                <div class="d-flex justify-content-center">
                                    {!! $calonguru->links('pagination::bootstrap-4')->with([
                                        'class' => 'pagination',
                                        'style' => 'margin-top: 20px;'
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    // Tambahkan event listener untuk tombol delete dengan class 'delete-btn'
    document.querySelectorAll('.delete-btn').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var id = this.getAttribute('data-id');

            Swal.fire({
                title: 'Apakah anda yakin?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Lanjutkan!',
                cancelButtonText: 'Batalkan!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika user mengonfirmasi, submit form delete dengan ID yang sesuai
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        });
    });
</script>

</main><!-- End #main -->
@endsection
