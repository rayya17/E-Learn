@extends('layouts.layoutUser')

@section('content')
<style>
    /* Styling for tabs */
    .tab-container {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .nav-tabs {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      background-color: #ffff;
      border-radius: 5px;
      overflow: hidden;
    }

    .tab {
      padding: 80px 120px; /* Sesuaikan dengan kebutuhan desain Anda */
      cursor: pointer;
      border: none;
      border-radius: 5px 5px 0 0;
      background-color: #ffff;
      font-size: 16px;
      text-decoration: none;
      color: #4FA987;
      transition: background-color 0.3s;
    }

    .tab:hover {
      background-color: #4FA987;
    }

    .tab.active {
      background-color: #4FA987;
      color: #ffff;
      border-bottom: 2px solid #4FA987;
    }

    .tab-content {
      display: none;
      padding: 20px;
      border: 1px solid #ffff;
      border-radius: 0 0 5px 5px;
    }

    /* Show the selected tab content */
    .tab-content.active {
      display: block;
    }

    /* Container untuk komentar sebagai card */
    .comment-card {
      display: flex;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
    }

    /* Foto profil */
    .profile-picture {
      border-radius: 50%;
      margin-right: 15px;
      width: 80px;
      height: 80px;
    }

    /* Informasi komentar (nama dan tanggal) */
    .comment-info {
      flex-grow: 1;
    }

    /* Nama pengguna */
    .username {
      font-weight: bold;
      font-size: 1.2em;
    }

    /* Isi komentar */
    .comment-text {
      font-size: 1.1em;
      margin-top: 8px;
    }

    /* Tanggal komentar */
    .comment-date {
      font-size: 0.9em;
      color: #777;
      margin-top: 8px;
    }
</style>

<div class="tab-container">
  <ul class="nav-tabs">
    <li class="nav-item">
      <a href="#" class="tab active" onclick="openTab(event, 'detailmateriTab')">Detail Materi</a>
    </li>
    <li class="nav-item">
      <a href="#" class="tab" onclick="openTab(event, 'reviewTab')">Ulasan</a>
    </li>
  </ul>
</div>

<div id="detailmateriTab" class="tab-content active">
    <div>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="cover">
            <img style="width: 700px;" src="/storage/default/defaultmateri.jpeg">
        </div>
        <div class="title" style="margin-bottom: 50px;">
            <div class="kelas d-flex">
                <h4 style="margin-right:auto">Bahasa Indonesia</h4>
                <h6>Kelas 10</h6>
            </div>
            <h1 style="font-size: 80px;"><strong>Perkalian</strong></h1>
            <div class="content">
                <p style="font-size: 20px;">Kita mengajari materi ini dengan baik dan jelas, kita bisa saling sharing melalui komentar yang telah di sediakan</p>
                <p><strong>Pemateri : Sulastri</strong></p>
            </div>
            <button style="background-color: #354942; margin: 10px; margin-top:40px; color: #fff; border: none; padding: 10px 55px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease; font-size: 20px;">Materi</button>
        </div>
    </div>
</div>

<div id="reviewTab" class="tab-content">
  <!-- Isi konten ulasan di sini -->
  <h2>Ulasan Pengguna</h2>
<!-- Komentar pertama -->
    <div class="comment-card">
        <img src="path/to/profile-picture.jpg" alt="Profile Picture" class="profile-picture">
        <div class="comment-info">
            <span class="username">Nama Pengguna</span>
            <p class="comment-text">Isi komentar akan ditampilkan di sini. Ini bisa menjadi komentar yang cukup panjang untuk menunjukkan bagaimana tata letak ini menangani teks yang lebih banyak.</p>
            <span class="comment-date">08 Desember 2023</span>
        </div>
    </div>

    <!-- Komentar kedua -->
    <div class="comment-card">
        <img src="path/to/another-profile-picture.jpg" alt="Profile Picture" class="profile-picture">
        <div class="comment-info">
            <span class="username">PenggunaLain123</span>
            <p class="comment-text">Ini adalah komentar lainnya. Mungkin lebih singkat.</p>
            <span class="comment-date">08 Desember 2023</span>
        </div>
    </div>
</div>

<script>
  function openTab(evt, tabName) {
    // Hide all tab contents
    var tabContents = document.getElementsByClassName("tab-content");
    for (var i = 0; i < tabContents.length; i++) {
      tabContents[i].style.display = "none";
    }

    // Remove the "active" class from all tabs
    var tabs = document.getElementsByClassName("tab");
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove("active");
    }

    // Show the selected tab content and mark the tab as active
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.classList.add("active");
  }
</script>

@endsection
