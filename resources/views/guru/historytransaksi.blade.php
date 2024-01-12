@extends('layouts.layoutGuru')

@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="row">
                <div class="col-md-12 col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <!-- Left side columns -->
                            <div class="col-lg-12">
                                <div class="row">
                                    <table>
                                        <thead style="background-color: #4FA987;">
                                            <tr>
                                                <th scope="col" style="text-align: center; border-top-left-radius:10px;">
                                                    no</th>
                                                <th scope="col" style="text-align: center;">tujuan</th>
                                                <th scope="col" style="text-align: center;">Nominal</th>
                                                <th scope="col" style="border-top-right-radius:10px; text-align: center">Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($history as $hs)
                                                <tr>
                                                    <td style="text-align: center;">{{ $loop->iteration }}</td>
                                                    <td style="text-align: center;">{{ $hs->tujuan_pengajuan }}</td>
                                                    <td style="text-align: center;">Rp. {{ number_format($hs->nominal)}}</td>
                                                    <td style="text-align: center;">{{ now()->format('d F Y') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- <div class="d-flex justify-content-center">
                                        {!! $history->links('pagination::bootstrap-4')->with([
                                            'class' => 'pagination',
                                            'style' => 'margin-top: 20px;'
                                        ]) !!}
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
