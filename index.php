<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saintek Presma 2024</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap');

#loading {
    display: block;
}
#welcome {
    display: none;
}
#form, #form2, #form3, #form4 {
    display: none;
}

#kesan-pesan1 {
    display: none;
}

select[name=jurusan], select[name=nomor] {
    display: inline-block;
}

*, html {
    padding: 0;
    margin: 0;
    zoom: 1;
    box-sizing: border-box;
}

::selection {
    background-color: rgb(200, 0, 0);
    color: yellow;
}

body {
    background: linear-gradient(to top, rgb(0, 40, 60), rgb(0, 80, 130)) no-repeat;
    color: white;
    font-family: 'Open Sans', sans-serif;
}

button, img, label, input, select, br {
    user-select: none;
}

h2 {
    margin-bottom: 10px;
}

div.loading {
    background: rgba(0, 0, 0, 0.5);
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    text-align: center;
    user-select: none;
}

div.loading-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

span.dots {
    display: inline-block;
    vertical-align: middle;
    width: .6em;
    height: .6em;
    margin: .19em;
    background: #c9c619;
    border-radius: .6em;
    filter: drop-shadow(0 0 5px #222);
    animation: loading 0.5s infinite alternate;
}

span.dots:nth-of-type(2) {
    background: #ffffff;
    animation-delay: 0.2s;
}

span.dots:nth-of-type(3) {
    background: #6598f7;
    animation-delay: 0.4s;
}

@keyframes loading {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
}

div.loading img.logo {
    max-width: 100px;
    width: 80%;
    height: auto;
    filter: drop-shadow(0 0 5px #222);
}

div.welcome {
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    text-align: center;
    animation: welcome 1s linear alternate;
    transition: 1s;
}

div.welcome-container {
    width: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

@keyframes welcome {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

div.welcome img.logo {
    max-width: 50px;
    width: 90%;
    height: auto;
}

button.btn, input.btn-submit {
    outline: none;
    border: none;
    border-radius: 20px;
    background-color: #c9c619;
    color: white;
    font-weight: bold;
    width: 100px;
    height: 40px;
    margin-top: 10px;
    transition: 0.5s;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    text-transform: uppercase;
    cursor: pointer;
}

button.btn:hover, input.btn-submit:hover {
    background-color: #aca91c;
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
}

button.btn:active, input.btn-submit:active {
    transform: scale(0.95);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

button.btn:disabled, input.btn-submit:disabled {
    filter: brightness(0.5);
}

div.form, div.form2, div.form3, div.form4 {
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    text-align: center;
    animation: form 1s linear alternate;
}

div.kesan-pesan1 {
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    text-align: center;
    animation: form 1s linear alternate;
}

div.form-container {
    width: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

@keyframes form {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

p.radio {
    display: inline-block;
    max-width: 150px;
    width: 100%;
    height: 150px;
    border-radius: 5px;
    margin: 5px;
    cursor: pointer;
    background-color: #477cdf;
    color: white;
    transition: 0.5s;
    user-select: none;
}

p.radio:hover {
    background-color: #3862b4;
}

p.radio:active {
    transform: scale(0.9);
}

p.radio span {
    position: relative;
    top: 35%;
}

input[type=radio] {
    display: none;
}

input[type=radio]:checked + p.radio {
    background-color: white;
    color: #477cdf;
}

div.form-container h2 {
    line-height: 0.9;
}

span.sub {
    font-size: small;
}

input[type=text] {
    max-width: 360px;
    width: 90%;
    height: 40px;
    border: none;
    border-radius: 20px;
    margin-top: 10px;
    padding: 10px;
}

input[name='username-siswa'], input[name='username-guru'] {
    text-transform: uppercase;
}

input[name=jabatan] {
    text-transform: capitalize;
}

input[name=username-siswa]::placeholder, input[name=username-guru]::placeholder {
    text-transform: none;
}

input[name=jabatan]::placeholder {
    text-transform: none;
}

input[type=text]:focus {
    outline: 1px solid #6598f7;
    box-shadow: 0 0 8px #6598f7;
}

div.select-option {
    background-color: white;
    max-width: 360px;
    margin: auto;
    margin-top: 10px;
    border-radius: 20px;
    user-select: none;
}

div.select-option:hover {
    outline: 1px solid #6598f7;
    box-shadow: 0 0 8px #6598f7;
}

select.chooser {
    background: none;
    width: 105px;
    padding: 10px;
    border: none;
    cursor: pointer;
    user-select: none;
}

select.chooser:focus {
    outline: none;
}

button.btn-back1, button.btn-back2, button.btn-back3, button.btn-back4, button.btn-home {
    background-color: #fb652e;
}

button.btn-back1:hover, button.btn-back2:hover, button.btn-back3:hover, button.btn-home:hover {
    background-color: #c94a1c;
}

div.holder-button {
    user-select: none;
}

textarea.text-pesan {
    font-family: 'Open sans', sans-serif;
    margin-top: 5px;
    padding: 5px;
    resize: vertical;
    height: 120px;
    min-height: 60px;
    max-height: 240px;
    border-radius: 10px;
}

textarea.text-pesan:focus {
    outline: 1px solid #6598f7;
    box-shadow: 0 0 8px #6598f7;
}
</style>
<body>
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
                <input type="text" name="asal-instansi" id="asal-instansi" maxlength="64" spellcheck="false" placeholder="Asal Instansi...">
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
<!-- <script src="script.js"></script> -->
 <script>
    const loading = document.getElementById('loading');
const welcome = document.getElementById('welcome');
const form = document.getElementById('form');
const form2 = document.getElementById('form2');
const form3 = document.getElementById('form3');
const form4 = document.getElementById('form4');
const kp1 = document.getElementById('kesan-pesan1');
document.querySelectorAll('.btn').disabled = true;

function BtnBack2a() {
    kp1.style.opacity = 1;
    document.querySelector('.btn-submit').disabled = true;
    document.querySelector('.btn-back4').disabled = true;
    document.getElementById('input-kp1').removeAttribute('required');
    setTimeout(function() {
        kp1.style.transition = 'opacity 0.5s';
        kp1.style.opacity = 0;
        setTimeout(function() {
            kp1.style.display = 'none';
            form2.style.display = 'block';
            form2.style.opacity = 0;
            setTimeout(function() {
                form2.style.opacity = 1;
                document.querySelector('.btn-next1').disabled = false;
                document.querySelector('.btn-back1').disabled = false; // Tombol back pada form2 diaktifkan kembali
            }, 500);
        }, 500);
    }, 500);
}

function BtnBack1c() {
    form4.style.opacity = 1;
    document.querySelector('.btn-next3').disabled = true;
    document.querySelector('.btn-back3').disabled = true;
    document.getElementById('username-pengunjung').removeAttribute('required', '');
    setTimeout(function() {
        form4.style.transition = 'opacity 0.5s';
        form4.style.opacity = 0;
        setTimeout(function() {
            form4.style.display = 'none';
            form.style.display = 'block';
            form.style.opacity = 0;
            setTimeout(function() {
                form.style.opacity = 1;
                document.querySelector('.btn-next').disabled = false;
                document.querySelector('.btn-home').disabled = false;
            }, 500);
        }, 500);
    }, 500);
}

function BtnBack1b() {
    form3.style.opacity = 1;
    document.querySelector('.btn-next2').disabled = true;
    document.querySelector('.btn-back2').disabled = true;
    document.getElementById('username-guru').removeAttribute('required', '');
    setTimeout(function() {
        form3.style.transition = 'opacity 0.5s';
        form3.style.opacity = 0;
        setTimeout(function() {
            form3.style.display = 'none';
            form.style.display = 'block';
            form.style.opacity = 0;
            setTimeout(function() {
                form.style.opacity = 1;
                document.querySelector('.btn-next').disabled = false;
                document.querySelector('.btn-home').disabled = false;
            }, 500);
        }, 500);
    }, 500);
}

function BtnBack1a() {
    form2.style.opacity = 1;
    document.querySelector('.btn-next1').disabled = true;
    document.querySelector('.btn-back1').disabled = true;
    document.getElementById('username-siswa').removeAttribute('required', '');
    setTimeout(function() {
        form2.style.transition = 'opacity 0.5s';
        form2.style.opacity = 0;
        setTimeout(function() {
            form2.style.display = 'none';
            form.style.display = 'block';
            form.style.opacity = 0;
            setTimeout(function() {
                form.style.opacity = 1;
                document.querySelector('.btn-next').disabled = false;
                document.querySelector('.btn-home').disabled = false;
            }, 500);
        }, 500);
    }, 500);
}

function BtnNext1a() {
    form2.style.opacity = 1;
    const usernameSiswa = document.getElementById('username-siswa').value;
    const jurusan = document.getElementsByName("jurusan")[0].value;
    const nomor = document.getElementsByName("nomor")[0].value;
    if (usernameSiswa !== "" && jurusan !== "" && nomor !== "") {
        document.querySelector('.btn-next1').disabled = true;
        document.querySelector('.btn-back1').disabled = true;
        document.getElementById('input-kp1').setAttribute('required', '');
        setTimeout(function() {
            form2.style.transition = 'opacity 0.5s';
            form2.style.opacity = 0;
            setTimeout(function() {
                form2.style.display = 'none';
                kp1.style.display = 'block';
                kp1.style.opacity = 0;
                setTimeout(function() {
                    kp1.style.opacity = 1;
                    document.querySelector('.btn-submit').disabled = false;
                    document.querySelector('.btn-back4').disabled = false;
                }, 500);
            }, 500);
        }, 500);
    }
}

function BtnNext1b() {
    form3.style.opacity = 1;
    const usernameGuru = document.getElementById('username-guru').value;
    const jabatan = document.getElementsByName('jabatan').value;
    if (usernameGuru !== "" && jabatan !== "") {
        document.querySelector('.btn-next2').disabled = true;
        document.querySelector('.btn-back2').disabled = true;
        document.getElementById('input-kp1').setAttribute('required', '');
        setTimeout(function() {
            form3.style.transition = 'opacity 0.5s';
            form3.style.opacity = 0;
            setTimeout(function() {
                form3.style.display = 'none';
                kp1.style.display = 'block';
                kp1.style.opacity = 0;
                setTimeout(function() {
                    kp1.style.opacity = 1;
                    document.querySelector('.btn-submit').disabled = false;
                    document.querySelector('.btn-back4').disabled = false;
                }, 500);
            }, 500);
        }, 500);
    }
}

function BtnNext1c() {
    form4.style.opacity = 1;
    const usernamePengunjung = document.getElementById('username-pengunjung').value;
    const asalInstansi = document.getElementById('asal-instansi').value;
    if (usernamePengunjung !== "" && asalInstansi !== "") {
        document.querySelector('.btn-next3').disabled = true;
        document.querySelector('.btn-back3').disabled = true;
        document.getElementById('input-kp1').setAttribute('required', '');
        setTimeout(function() {
            form4.style.transition = 'opacity 0.5s';
            form4.style.opacity = 0;
            setTimeout(function() {
                form4.style.display = 'none';
                kp1.style.display = 'block';
                kp1.style.opacity = 0;
                setTimeout(function() {
                    kp1.style.opacity = 1;
                    document.querySelector('.btn-submit').disabled = false;
                    document.querySelector('.btn-back4').disabled = false;
                }, 500);
            }, 500);
        }, 500);
    }
}

function BtnGo() {
    form.style.opacity = 1;
    document.querySelector('.btn-next').disabled = true;
    document.querySelector('.btn-home').disabled = true;
    setTimeout(function() {
        form.style.transition = 'opacity 0.5s';
        form.style.opacity = 0;
        setTimeout(function() {
            form.style.display = 'none';
            const student = document.querySelector('input[id="siswa"]:checked');
            const teacher = document.querySelector('input[id="guru"]:checked');
            const visitor = document.querySelector('input[id="pengunjung"]:checked');
            
            if (student) {
                document.getElementById('username-siswa').value = "";
                document.getElementById('username-siswa').setAttribute('required', '');
                document.querySelectorAll('select.chooser').forEach(select => select.setAttribute('required', ''));

                const drops = document.querySelector('select[name="level"]');
                const dropj = document.querySelector('select[name="jurusan"]');
                const dropn = document.querySelector('select[name="nomor"]');
                drops.selectedIndex = 0;
                dropj.selectedIndex = 0;
                dropj.disabled = true;
                dropn.selectedIndex = 0;
                dropn.disabled = true;

                form2.style.display = 'block';
                form2.style.opacity = 0;
                setTimeout(function() {     
                    form2.style.opacity = 1;
                    document.querySelector('.btn-next1').disabled = false;
                    document.querySelector('.btn-back1').disabled = false;
                }, 500);
            } else if (teacher) {
                document.getElementById('username-guru').value = "";
                document.getElementById('username-guru').setAttribute('required', '');
                form3.style.display = 'block';
                form3.style.opacity = 0;
                setTimeout(function() {
                    form3.style.opacity = 1;
                    document.querySelector('.btn-next2').disabled = false;
                    document.querySelector('.btn-back2').disabled = false;
                }, 500);
            } else if (visitor) {
                document.getElementById('username-pengunjung').value = "";
                document.getElementById('username-pengunjung').setAttribute('required', '');
                form4.style.display = 'block';
                form4.style.opacity = 0;
                setTimeout(function() {
                    form4.style.opacity = 1;
                    document.querySelector('.btn-next3').disabled = false;
                    document.querySelector('.btn-back3').disabled = false;
                }, 500);
            }
        }, 500);
    }, 500);
}

// Tombol Mulai
function BtnMulai() {
    welcome.style.opacity = 1;
    document.querySelector('.btn-start').disabled = true;
    setTimeout(function() {
        welcome.style.transition = 'opacity 0.5s';
        welcome.style.opacity = 0;
        setTimeout(function() {
            welcome.style.display = 'none';
            form.style.display = 'block';
            setTimeout(function() {
                document.querySelector('.btn-next').disabled = false;
                document.querySelector('.btn-home').disabled = false;
            }, 500);
        }, 500);
    }, 500);
}

function cekJaringan() {
    loading.style.display = 'block';
    loading.style.opacity = 1;
    loading.style.transition = 'opacity 0.5s';

    welcome.style.display = 'none';
    form.style.display = 'none';
    form2.style.display = 'none';
    form3.style.display = 'none';

    function cekOnline() {
        if (navigator.onLine) {
            // Start Transition
            setTimeout(function() {
                loading.style.opacity = 0;
                setTimeout(function() {
                    loading.style.display = 'none';
                    welcome.style.display = 'block';
                    setTimeout(function() {
                        document.querySelector('.btn-start').disabled = false;
                    }, 500);
                }, 500);
            }, 1000);
        } else {
            setTimeout(checkNetwork, 1000);
        }
    }

    cekOnline();
}

window.onload = cekJaringan;
window.ononline = cekJaringan;
window.onoffline = cekJaringan;
window.onpopstate = cekJaringan;
window.onhashchange = cekJaringan;

function showJurusan(value) {
    if (value !== "") {
        document.getElementsByName("jurusan")[0].disabled = false;
    } else {
        document.getElementsByName("jurusan")[0].disabled = true;
        document.getElementsByName("nomor")[0].disabled = true;
    }
}
function showNomor(value) {
    let nomorSelect = document.getElementsByName("nomor")[0];
    nomorSelect.innerHTML = "<option value='' disabled selected>Nomor</option>";
    if (value === "PPLG" || value === "TJKT" || value === "BCF") {
        for (let i = 1; i <= 2; i++) {
            nomorSelect.options[nomorSelect.options.length] = new Option(i, i);
        }
    } else if (value === "DKV") {
        for (let i = 1; i <= 3; i++) {
            nomorSelect.options[nomorSelect.options.length] = new Option(i, i);
        }
    } else if (value === "SMA") {
        for (let i = 1; i <= 15; i++) {
            nomorSelect.options[nomorSelect.options.length] = new Option(i, i);
        }
    }
    nomorSelect.disabled = false;
    nomorSelect.style.display = "inline-block";
}

 </script>
</html>
