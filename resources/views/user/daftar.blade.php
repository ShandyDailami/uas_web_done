<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL('storage/images/ULM.png') }}" type="image/x-icon">
    <title>Halaman Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            height: 190vh;
        }

        aside {
            width: 45%;
            display: flex;
            align-items: center
        }

        aside img {
            width: 100%;
            height: 100%;
        }

        main {
            width: 65%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .univ {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 60px;
        }

        .univ img {
            width: 100px;
        }

        .univ-text p:nth-child(1) {
            font-weight: 600;
            font-size: 1.8rem
        }

        .univ-text p:nth-child(2) {
            color: #8592A4;
            font-size: 1.1rem
        }

        header {
            margin-bottom: 50px;
        }

        header p {
            text-align: center
        }

        header p:nth-child(1) {
            font-weight: 600;
            font-size: 1.8rem
        }

        header p:nth-child(2) {
            color: #8592A4;
            font-size: 1.1rem
        }

        span {
            color: red;
        }

        .username,
        .password,
        .handphone,
        .email,
        .sebagai {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .username label,
        .password label,
        .handphone label,
        .email label,
        .sebagai label {
            margin-bottom: 10px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .username input,
        .password input,
        .handphone input,
        .email input,
        .sebagai select,
        option {
            border: 2px #E2E8F0 solid;
            width: 585px;
            height: 60px;
            border-radius: 10px;
            padding-left: 15px;
            font-size: 1rem;
            cursor: pointer;
            outline: none;
        }

        .sebagai select,
        option::placeholder {
            width: 100%;
        }

        .sebagai select option[disabled] {
            color: #E2E8F0;
        }

        .username input::placeholder,
        .password input::placeholder,
        .handphone input::placeholder,
        .email input::placeholder {
            color: #E2E8F0;
        }

        .password a {
            text-align: right;
            font-size: 1.1rem;
            color: #8592A4;
            margin-top: 10px;
        }

        button {
            background-color: #0EA5E9;
            border: none;
            width: 100%;
            height: 60px;
            border-radius: 10px;
            font-size: 1.1rem;
            color: white;
            margin-top: 25px;
        }

        button:hover {
            background-color: #0284C7
        }

        footer p {
            text-align: center;
            font-size: 1.1rem;
            color: #A5B2C3;
            margin-top: 20px;
        }

        footer a {
            color: #000;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <aside>
        <img src="{{ URL('storage/images/aside.png') }}" alt="">
    </aside>
    <main>
        <div class="wrapper">
            <div class="univ">
                <img src="{{ URL('storage/images/ULM.png') }}" alt="">
                <div class="univ-text">
                    <p>Fakultas Teknik</p>
                    <p>Universitas Lambung Mangkurat</p>
                </div>
            </div>
            <form action="" method="POST">
                <header>
                    <p>Buat Sebuah Akun</p>
                    <p>Isi data diri dengan benar!</p>
                </header>
                <div class="username">
                    <label for="username">Username <span>*</span></label>
                    <input type="text" name="username" id="username" placeholder="Masukkan Username">
                </div>
                <div class="handphone">
                    <label for="handphone">No. Handphone <span>*</span></label>
                    <input type="text" name="handphone" id="handphone" placeholder="Masukkan No. Handphone">
                </div>
                <div class="email">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" name="email" id="email" placeholder="Masukkan Email">
                </div>
                <div class="sebagai">
                    <label for="sebagai">Username <span>*</span></label>
                    <select name="sebagai" id="sebagai">
                        <option style="color: #ddd" value="" selected disabled hidden>Pilih Jenis Pengguna
                        </option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="dosen">Dosen</option>
                    </select>
                </div>
                <div class="password">
                    <label for="password">Password <span>*</span></label>
                    <input type="text" name="password" id="password" placeholder="Masukkan Password">
                    <a href="">Lupa password?</a>
                </div>
                <footer>
                    <button type="submit">Daftar</button>
                    <p>Sudah Mempunyai Akun? <a href="{{ route('/') }}">Login</a></p>
                </footer>
            </form>
        </div>
    </main>
</body>

</html>
