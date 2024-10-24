<?php require_once('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saintek Presma 2024</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body onload="cekJaringan()">
    <div class="loading" id="loading">
        <div class="loading-container">
            <img class="logo" src="assets/icon_rpl.png" draggable="false" /><br>
            <span class="dots"></span>
            <span class="dots"></span>
            <span class="dots"></span>
        </div>
    </div>
    <div class="welcome" id="welcome">
        <div class="welcome-container">
            <img class="logo" src="assets/icon_rpl.png" draggable="false" /><br>
            <p>Selamat datang di booth Rekayasa Perangkat Lunak</p>
            <h1>Berikan Kesan Pesanmu pada<br>Saintek Prestasi Prima 2024</h1>
            <button class="btn btn-start" onclick="BtnMulai()" disabled>Mulai</button>
        </div>
    </div>
    <form action="input_process.php" name="input-st" method="POST">
        <div class="form" id="form">
            <div class="form-container">
                <h2>Oke! Kami perlu mengidentifikasi siapa anda.</h2>
                <div class="options">
                    <label class="option">
                        <input type="radio" name="role" id="siswa" value="SISWA" checked>
                        <p class="radio">
                            <span><i class="fas fa-user-graduate"></i><br>Saya Siswa</span>
                        </p>
                    </label>
                    <label class="option">
                        <input type="radio" name="role" id="guru" value="GURU">
                        <p class="radio">
                            <span><i class="fas fa-chalkboard-teacher"></i><br>Saya Guru</span>
                        </p>
                    </label>
                    <label class="option">
                        <input type="radio" name="role" id="pengunjung" value="PENGUNJUNG">
                        <p class="radio">
                            <span><i class="fas fa-user-friends"></i><br>Saya Pengunjung</span>
                        </p>
                    </label>
                </div>
                <button class="btn btn-home" onclick="window.location.reload()" disabled>Home</button>&nbsp;
                <button class="btn btn-next" onclick="BtnGo()" disabled>Next</button>
            </div>
        </div>

        <!-- FORM SISWA -->
        <div class="form2" id="form2">
            <div class="form-container">
                <h2>Halo siswa/i Prestasi Prima \(o ᴗ o )<br><span class="sub">Silahkan tulis nama dan pilih kelas anda.</span></h2>
                <input type="text" name="username-siswa" id="username-siswa" maxlength="64" spellcheck="false" placeholder="Masukkan nama kamu disini...">
                <br>
                <div class="select-option">
                    <select class="chooser" name="level" onchange="showJurusan(this.value)">
                        <option value="" disabled selected>Jenjang</option>
                        <option value="XI">XI</option>
                        <option value="X">X</option>
                    </select>
                    <select class="chooser" name="jurusan" onchange="showNomor(this.value)" disabled>
                        <option value="" disabled selected>Jurusan</option>
                        <option value="PPLG">PPLG</option>
                        <option value="TJKT">TJKT</option>
                        <option value="DKV">DKV</option>
                        <option value="BCF">BCF</option>
                        <option value="SMA">SMA</option>
                    </select>
                    <select class="chooser" name="nomor" disabled>
                        <option value="" disabled selected>Nomor</option>
                    </select>
                </div>
                <div class="holder-button">
                    <button class="btn btn-back1" onclick="BtnBack1a()" disabled>Back</button>&nbsp;
                    <button class="btn btn-next1" onclick="BtnNext1a()" disabled>Next</button>
                </div>
            </div>
        </div>
        <!-- FORM GURU -->
        <div class="form3" id="form3">
            <div class="form-container">
                <h2>Halo guru Prestasi Prima \(o ᴗ o )<br><span class="sub">Silahkan tulis nama dan jabatan anda.</span></h2>
                <input type="text" name="username-guru" id="username-guru" maxlength="64" spellcheck="false" placeholder="Masukkan Nama, e.g. Sir Agus"><br>
                <input type="text" name="jabatan" maxlength="64" spellcheck="false" placeholder="Masukkan Jabatan, e.g. Guru RPL">
                <div class="holder-button">
                    <button class="btn btn-back2" onclick="BtnBack1b()" disabled>Back</button>&nbsp;
                    <button class="btn btn-next2" onclick="BtnNext1b()" disabled>Next</button>
                </div>
            </div>
        </div>
        <!-- FORM PENGUNJUNG -->
        <div class="form4" id="form4">
            <div class="form-container">
                <h2>Halo pengunjung Prestasi Prima \(o ᴗ o )<br><span class="sub">Silahkan tulis nama anda.</span></h2>
                <input type="text" name="username-pengunjung" id="username-pengunjung" maxlength="64" spellcheck="false" placeholder="Masukkan Nama..."><br>
                <div class="holder-button">
                    <button class="btn btn-back3" onclick="BtnBack1c()" disabled>Back</button>&nbsp;
                    <button class="btn btn-next3" onclick="BtnNext1c()" disabled>Next</button>
                </div>
            </div>
        </div>

        <!-- KESAN PESAN SISWA -->
         <div class="kesan-pesan1" id="kesan-pesan1">
            <div class="form-container">
                <h2>Apa kesan pesan anda saat mengikuti saintek fair?</h2>
                <textarea name="input-kp1" class="text-pesan" id="input-kp1" cols="64" spellcheck="false" maxlength="960"></textarea>
                <div class="holder-button">
                    <button class="btn btn-back4" onclick="BtnBack2a()" disabled>Back</button>&nbsp;
                    <input type="submit" class="btn btn-submit" onclick="BtnSub2a()" disabled></button>
                </div>
            </div>
         </div>
    </form>
</body>
<script src="script.js"></script>
</html>
