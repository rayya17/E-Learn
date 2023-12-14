@extends('layouts.sidebar')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 1000px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .card-header {
            background-color: #f5f5f5;
            padding: 10px;
            text-align: center; /* Memastikan teks di tengah-tengah */
            font-size: 18px;
            border-bottom: 1px solid #ddd;
            flex: 0 0 auto; /* Ini akan memastikan card header tidak melebar */
        }

        .card-body {
            padding: 20px;
            flex: 1 1 auto; /* Ini akan memberi ruang yang tersisa untuk card body */
        }

        iframe {
            width: 100%;
            height: 300px; /* Sesuaikan tinggi sesuai kebutuhan Anda */
            border: none;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header justify-content-center align-items-center">
            <h1>Materi</h1>
        </div>
        <div class="card-body">
            <embed src="{{ asset('assets/images/jurnal_siswa.pdf')}}" width="800" height="600">
        </div>
    </div>
</body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Dapatkan elemen iframe
        var iframe = document.querySelector('iframe');

        // Tambahkan event listener ketika konten iframe dimuat
        iframe.addEventListener('load', function () {
            // Atur tinggi iframe sesuai dengan tinggi konten PDF
            iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
        });
    });
</script>

@endsection
