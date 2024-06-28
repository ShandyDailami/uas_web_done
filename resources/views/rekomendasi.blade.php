<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL('storage/images/ULM.png') }}" type="image/x-icon">
    <title>Halaman e-Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            font-family: 'Poppins', sans-serif;
        }

        body {
            width: 100%;
            height: 100%;
        }

        header {
            width: 100%;
            position: static;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px #E6EBF2 solid
        }

        .left {
            display: flex;
            align-items: center;
            padding: 20px;
            gap: 65px
        }

        .left .univ {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .left .univ img {
            width: 40px;
        }

        .right,
        .profile {
            display: flex;
            align-items: center;
        }

        .right {
            margin-right: 70px;
        }

        .right i {
            background-color: #E0F2FE;
            color: #35B4ED;
            padding: 5px 9px;
            border-radius: 20px;
            cursor: pointer;
        }

        .profile {
            cursor: pointer;
        }

        .profile img {
            margin: 0 10px 0 20px;
            width: 32px;
            height: 32px;
            border-radius: 20px;
        }

        .univ-text p:nth-child(1) {
            font-size: .9rem;
            font-weight: 600;
        }

        .univ-text p:nth-child(2) {
            font-size: .7rem;
            font-weight: 500;
            color: #8592A4;
        }

        form i {
            color: #9FACBF;
            font-size: 1.2rem;
        }

        form input {
            border: none;
            outline: none;
            padding-left: 10px;
        }

        form input::placeholder {
            color: #9FACBF;
        }

        section {
            display: flex;
        }

        nav {
            width: 650px;
            height: 100%;
            padding: 20px 18px;
        }

        .btn {
            display: flex;
            align-items: center;
        }

        .menu p,
        .layanan p,
        .other p {
            color: #CDD7E3;
            font-size: 1rem;
        }

        .menu a {
            width: 100%;
            display: block;
            margin: 10px 0;
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 8px;
            color: #91A0B6;
            font-weight: 500;
        }

        .menu i {
            color: #91A0B6;
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .layanan a,
        .other a {
            display: block;
            margin: 10px 0;
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 8px;
            color: #91A0B6;
            font-weight: 500;
        }

        .menu a:hover,
        .layanan a:hover,
        .other a:hover {
            background-color: #F1F5F9;
        }

        .layanan i,
        .other i {
            font-size: 1.2rem;
            color: #91A0B6;
            margin-right: 15px;
        }

        .active {
            color: #0E8BCA !important;
            background-color: #BAE6FD;
        }

        .active i {
            color: #0E8BCA !important;
        }

        .active:hover {
            background-color: #BAE6FD !important;
        }

        main {
            width: 100%;
            height: 100%;
            background-color: #F8FAFC;
            padding: 30px 20px;
        }

        .title {
            display: flex;
            align-items: center;
        }

        .title i {
            margin-right: 15px;
            padding: 12px 20px;
            border-radius: 5px;
            color: #35B4ED;
            background-color: #fff;
            font-size: 2rem;
        }

        .text p:nth-child(1) {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .text p:nth-child(2) {
            font-size: .9rem;
            color: #91A0B6;
        }

        .container {
            background-color: #fff;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <header>
        <div class="left">
            <div class="univ">
                <img src="{{ URL('storage/images/ULM.png') }}" alt="">
                <div class="univ-text">
                    <p>Fakultas Teknik</p>
                    <p>Universitas Lambung Mangkurat</p>
                </div>
            </div>
            <form action="">
                <i class="bi bi-search"></i>
                <input type="text" name="layanan" id="layanan" placeholder="Cari Layanan..">
            </form>
        </div>
        <div class="right">
            <i class="bi bi-bell"></i>
            <div class="profile">
                <img src="{{ URL('storage/images/Shandy.jpg') }}" alt="">
                <p>Shandy</p>
            </div>
        </div>
    </header>
    <section>
        <nav>
            <div class="menu">
                <p>Menu</p>
                <div class="btn">
                    <a href="{{ route('/dashboard') }}"><i class="bi bi-grid"></i> Dashboard</a>
                </div>
            </div>
            <div class="layanan">
                <p>Layanan</p>
                <a class="active" href="{{ route('/e-service') }}"><i class="bi bi-envelope"></i> e-Service</a>
                <a href=""><i class="bi bi-chat-square-text"></i> e-Command Center</a>
                <a href=""><i class="bi bi-display"></i></i> e-Response</a>
                <a href=""><i class="bi bi-credit-card"></i> e-Commerce</a>
                <a href=""><i class="bi bi-suitcase-lg"></i> e-Office</a>
            </div>
            <div class="other">
                <p>Other</p>
                <a href=""><i class="bi bi-clipboard2-check"></i> Kuisioner</a>
                <a href=""><i class="bi bi-question-circle"></i> FAQ</a>
                <a href=""><i class="bi bi-person"></i> Profile</a>
                <a href=""><i class="bi bi-box-arrow-in-left"></i> Logout</a>
            </div>
        </nav>
        <main>
            <div class="container">
                <header>
                    <a href="{{ route('/e-service') }}"><i class="bi bi-chevron-left"></i> Kembali</a>
                </header>
                <div class="wrap-content">
                    <div class="content-1">
                        <div class="card">
                            <div class="card-text">
                                <p>e-Service</p>
                                <p>Surat Tugas KP/TA</p>
                            </div>
                        </div>
                        <p>Surat Rekomendasi Mahasiswa</p>
                        <p>Pengajuan Surat Rekomendasi untuk beberapa keperluan seperti keperluan Lomba, Beasiswa,
                            Pengajuan Cuti Akademik, dan lainnya.</p>
                    </div>
                    <div class="content-2">
                        <p>Deskripsi</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores cupiditate corrupti quasi,
                            voluptas et ut fuga quidem officiis? Ipsam nulla nemo officiis doloremque ut cupiditate
                            eveniet dolorum quasi consequuntur modi!</p>
                    </div>
                    <div class="content-3">
                        <p>Alur Pengajuan</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores cupiditate corrupti quasi,
                            voluptas et ut fuga quidem officiis? Ipsam nulla nemo officiis doloremque ut cupiditate
                            eveniet dolorum quasi consequuntur modi!</p>
                    </div>
                    <div class="content-4">
                        <div class="header-content-4">
                            <p>Tabel Pengajuan</p>
                            <button><i class="bi bi-plus-lg"></i> Tambah Pengajuan</button>
                        </div>
                        <table>
                            <tr>
                                <th>No</th>
                                <th>ID Pengajuan</th>
                                <th>Jenis Pengajuan</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>
</body>

</html>
