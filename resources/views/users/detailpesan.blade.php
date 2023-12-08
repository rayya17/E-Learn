<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-YBHcDleTAgHLQh8g"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    /* Global Rules */

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        background-color: #f7f7f7;
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .img-responsive {
        width: 50px;
    }

    .card {
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    }

    .cancel {
        font-size: 17px;
        padding: 0.2em 2em;
        border: transparent;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        background: #F03333;
        color: white;
        border-radius: 4px;
    }

    .cancel:hover {
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgb(255, 34, 30) 0%, rgb(255, 72, 0) 100%);
    }

    .cancel:active {
        transform: translate(0em, 0.2em);
    }

    /* End Global Rules  */

    .buy-now-btn {
        font-size: 17px;
        padding: 0.5em 2em;
        border: transparent;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        background: dodgerblue;
        color: white;
        border-radius: 4px;
    }

    .buy-now-btn:hover {
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(30, 144, 255, 1) 0%, rgba(0, 212, 255, 1) 100%);
    }

    .buy-now-btn:active {
        transform: translate(0em, 0.2em);
    }

    .plan {
        background-color: #efefef;
    }
</style>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 my-5">
                <div class="card">
                    <img src="{{ url('storage/student.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body px-4 text-center">
                        <h5 class="card-title  mt-1">Detail Checkout</h5>
                        <p class="card-text text-muted mt-3">
                            Silahakan CheckOut jika anda yakin ingin membeli Kelas Ini
                        </p>
                        <div class="alert alert-light row plan ">
                            <div class="col-3">
                                <img src="{{ url('storage/books.png') }}" class="img-responsive" alt="">
                            </div>
                            <div class="col-6">
                                <div class="fw-bold">{{ $orderview['nama_materi'] }}</div>
                                <div style="font-family:sans-serif;">Total : Rp {{ number_format($orderview['harga']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <button class="btn btn btn-lg col-12 buy-now-btn" id="pay-button">CheckOut</button>
                            <a href="{{ url()->previous() }}" class="btn btn btn-sm col-12 mt-3 cancel "
                                style="font-weight: 700;">Cancel</a>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        // Ambil elemen tombol pembayaran berdasarkan ID
        var payButton = document.getElementById('pay-button');

        // Tambahkan event listener untuk menanggapi klik pada tombol pembayaran
        payButton.addEventListener('click', function() {
            // Jalankan window.snap.pay saat tombol diklik
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    // Tampilkan notifikasi SweetAlert untuk memberi tahu pengguna bahwa pembayaran berhasil
                    Swal.fire({
                        icon: 'success',
                        title: 'Pembayaran Berhasil!',
                        text: 'Terima kasih atas pembayarannya.',
                    }).then(function() {
                        // Jalankan fungsi callback di sini menggunakan Ajax
                        // Menggunakan library fetch API tanpa jQuery
                        fetch('{{ route('callback') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Jangan lupa untuk menyertakan CSRF token jika Anda menggunakan Laravel
                                },
                                body: JSON.stringify({
                                    order_id: '{{ $order->id }}',
                                    status_code: 200,
                                }),
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log(data); // Log response jika perlu
                                // Setelah menyelesaikan pemanggilan Ajax, lakukan redirect
                                window.location.href = '{{ route('HomePage') }}';
                            })
                            .catch(error => {
                                console.error(error); // Log error jika perlu
                                // Setelah menyelesaikan pemanggilan Ajax, lakukan redirect
                                window.location.href = '{{ route('HomePage') }}';
                            });
                    });
                }
            });
        });
    </script>

</body>

</html>
