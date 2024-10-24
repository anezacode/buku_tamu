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
    setTimeout(function() {
        kp1.style.transition = 'opacity 0.5s';
        kp1.style.opacity = 0;
        setTimeout(function() {
            kp1.style.display = 'none';
            form2.style.display = 'block';
            form2.style.opacity = 0;
            setTimeout(function() {
                form2.style.opacity = 1;
                document.querySelector('.btn-next').disabled = false;
                document.querySelector('.btn-home').disabled = false;
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