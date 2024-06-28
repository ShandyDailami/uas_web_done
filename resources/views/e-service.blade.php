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

        .urut {
            text-align: right;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .urut label {
            margin-bottom: 10px;
            font-weight: 500;
            font-size: .9rem;
            color: #b2b8c0;
        }

        .urut select,
        option {
            border: 2px #E2E8F0 solid;
            width: 230px;
            height: 50px;
            border-radius: 10px;
            padding-left: 15px;
            font-size: .9rem;
            cursor: pointer;
            outline: none;
        }

        .urut select,
        option::placeholder {
            color: #caced4;
        }

        .fitur-card-wrapper {
            width: 1000px;
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
        }

        .fitur-card {
            width: 295px;
            background-color: #fff;
            border-radius: 5px;
            border-radius: 5px
        }

        .card-img {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 120px;
            padding: 0 20px;
            background-color: #EAB308;
            border-radius: 5px 5px 0 0;
        }

        .card-img p:nth-child(1) {
            color: #fff;
            font-weight: normal;
            font-size: .9rem;
            margin-bottom: 5px;
        }

        .card-img p:nth-child(2) {
            color: #fff;
            font-weight: 600;
            width: 45%;
            font-size: .9rem;
            line-height: 17px;
        }

        .card-text {
            padding: 20px 25px;
        }

        .card-text p {
            text-align: center;
        }

        .card-text p:nth-child(1) {
            color: #000;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .card-text p:nth-child(2) {
            font-size: .7rem;
            color: #848B95;
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
            <div class="title">
                <i class="bi bi-envelope"></i>
                <div class="text">
                    <p>Layanan e-Service</p>
                    <p>Inovasi Layanan Publik Eksternal/Internal FT ULM</p>
                </div>
            </div>

            <div class="urut">
                <label for="urut">Urutkan sesuai : </label>
                <select name="urut" id="urut">
                    <option value="" disabled selected>Nama Layanan (A-Z)</option>
                </select>
            </div>
            <div class="fitur">
                <div class="fitur-card-wrapper">
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Pengantar Izin Pkl</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Pengantar Izin Pkl</p>
                            <p>Bersiaplah untuk Pengalaman Belajar di Dunia Nyata, manfaatkan Laayanan Pengajuan Surat
                                Pengantarr izin PKL kami</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Pengantar Izin Pkl</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Pengantar Izin Pkl</p>
                            <p>Bersiaplah untuk Pengalaman Belajar di Dunia Nyata, manfaatkan Laayanan Pengajuan Surat
                                Pengantarr izin PKL kami</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <a href="{{ route('/e-service/rekomendasi') }}" class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </a>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan Surat Kelulusanmu dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus
                                Kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
</body>

</html>
