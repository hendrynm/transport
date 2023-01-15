<?php $this->extend("master/general") ?>

<?php $this->section("title"); echo "Tracker Bus Halte"; $this->endSection(); ?>

<?php $this->section("konten") ?>
<style>
    .nama-halte {
        font-size: 3.25rem;
        font-weight: bold;
    }

    .arah-halte {
        margin-top: -0.75rem;
        font-size: 2rem;
        font-weight: bold;
    }

    .rute-transit {
        margin-top: 0.5rem;
    }

    .rute-transit-canvas {
        width: 3.5rem;
        height: 3.5rem;
    }

    .rute-info {
        width: 4rem;
        height: 4rem;
    }

    .tanggal {
        font-size: 1.5rem;
        font-weight: 500;
    }

    .jam {
        margin-top: -0.5rem;
        font-size: 3.5rem;
        font-weight: bold;
    }

    .estimasi-bus {
        font-size: 2rem;
    }

    .tujuan-bus {
        font-weight: 500;
    }

    .kode-bus, .status-bus {
        font-weight: 500;
        text-align: right;
    }
</style>

<div class="content content-full p-0 m-0">
    <div class="row align-items-center pe-3">
        <div class="col-8 px-5 py-3">
            <div class="nama-halte">Terminal Intermoda Joyoboyo</div>
            <div class="arah-halte">arah Rajawali</div>
            <div class="rute-transit">
                <canvas class="rute-transit-canvas rute1" width="80" height="80"></canvas>
                <canvas class="rute-transit-canvas rute2" width="80" height="80"></canvas>
                <canvas class="rute-transit-canvas rute3" width="80" height="80"></canvas>
                <canvas class="rute-transit-canvas rute4" width="80" height="80"></canvas>
                <canvas class="rute-transit-canvas rute5" width="80" height="80"></canvas>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="row align-items-center">
                <div class="col-9">
                    <div class="tanggal"></div>
                    <div class="jam"></div>
                </div>
                <div class="col-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c0/Suroboyo_bus_%28vector%29.svg" alt="logo SB" height="100">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content content-full p-0 estimasi-bus">
    <div class="row">
        <div class="col-8">
            <table class="table table-borderless align-items-center align-middle">
                <tr class="bg-body-dark">
                    <td class="col-1 ps-4 pt-3 pb-1"><canvas class="rute-info rute1" width="80" height="80"></canvas></td>
                    <td class="col-7 tujuan-bus">Rajawali</td>
                    <td class="col-2 kode-bus">SB 26</td>
                    <td class="col-2 status-bus">Tiba</td>
                </tr>
                <tr class="">
                    <td class="col-1 ps-4 pt-3 pb-1"><canvas class="rute-info rute1" width="80" height="80"></canvas></td>
                    <td class="col-7 tujuan-bus">Tugu Pahlawan</td>
                    <td class="col-2 kode-bus">SB 20</td>
                    <td class="col-2 status-bus">5 mnt</td>
                </tr>
                <tr class="bg-body-dark">
                    <td class="col-1 ps-4 pt-3 pb-1"><canvas class="rute-info rute2" width="80" height="80"></canvas></td>
                    <td class="col-7 tujuan-bus">Terminal Intermoda Joyoboyo</td>
                    <td class="col-2 kode-bus">SB 02</td>
                    <td class="col-2 status-bus">8 mnt</td>
                </tr>
                <tr class="">
                    <td class="col-1 ps-4 pt-3 pb-1"><canvas class="rute-info rute1" width="80" height="80"></canvas></td>
                    <td class="col-7 tujuan-bus">Rajawali</td>
                    <td class="col-2 kode-bus">SB 12</td>
                    <td class="col-2 status-bus">15 mnt</td>
                </tr>
                <tr class="bg-body-dark">
                    <td class="col-1 ps-4 pt-3 pb-1"><canvas class="rute-info rute3" width="80" height="80"></canvas></td>
                    <td class="col-7 tujuan-bus">Kenjeran Park via Kertajaya</td>
                    <td class="col-2 kode-bus">SB 16</td>
                    <td class="col-2 status-bus">20 mnt</td>
                </tr>
                <tr class="">
                    <td class="col-1 ps-4 pt-3 pb-1"><canvas class="rute-info rute1" width="80" height="80"></canvas></td>
                    <td class="col-7 tujuan-bus">Rajawali</td>
                    <td class="col-2 kode-bus">SB 11</td>
                    <td class="col-2 status-bus">25 mnt</td>
                </tr>
            </table>
        </div>
        <div class="col-4 p-0 m-0">
            <iframe style="width:100%; height:40vh;" src="https://www.youtube.com/embed/videoseries?list=PLJZ6Ef7B5SrmkV-GmzmG9KbB1U5z7Xv2_&autoplay=0&mute=1&loop=1&controls=0&rel=0&showinfo=0"></iframe>

            <div class="row align-items-center">
                <div class="col-4">
                    <img src="http://api.qrserver.com/v1/create-qr-code/?color=000000&bgcolor=FFFFFF&data=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.dishub.gobissurabaya&qzone=1&margin=0&size=400x400&ecc=L" alt="qr code" style="width:10vw">
                </div>
                <div class="col-8 mt-4">
                    <p class="fs-5">Unduh aplikasi GOBIS Suroboyo Bus sekarang</p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="page-footer" class="bg-dark text-white fw-semibold fs-5" style="min-height: 2rem; max-height:3rem;">
    <div class="content py-0 px-0 align-middle">
        <div class="text-uppercase pt-2">
            <div class="marquee" style="font-size:1.5rem;">Suroboyo Bus atau Bus Surabaya merupakan layanan transportasi bus berfasilitas modern milik Pemerintah Kota Surabaya yang diperuntukkan sebagai transportasi umum serupa bus kota di kawasan metropolitan Kota Surabaya.</div>
        </div>
    </div>
</footer>

<?php $this->endSection(); ?>

<?php $this->section("js") ?>

<script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.6.0/jquery.marquee.min.js" type="text/javascript"></script>

<script type="text/javascript">
    let serverTime = new Date();

    function updateTime() {
        serverTime = new Date(serverTime.getTime() + 1000);
        $(".jam").html(serverTime.toLocaleTimeString("id-ID", { hour: "2-digit", minute: "2-digit", timeZoneName: "short" }));
        $(".tanggal").html(serverTime.toLocaleString("id-ID", { dateStyle: "full" }))
    }

    $(function() {
        updateTime();
        setInterval(updateTime, 1000);
    });

    $('.marquee').marquee({
        duration: 25000,
        gap: 0,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true
    });

    let rute = [];

    let rute1 = document.getElementsByClassName("rute1");
    let rute2 = document.getElementsByClassName("rute2");
    let rute3 = document.getElementsByClassName("rute3");
    let rute4 = document.getElementsByClassName("rute4");
    let rute5 = document.getElementsByClassName("rute5");

    font.load().then(function (font)
    {
        document.fonts.add(font);

        let rute = function (rute, warna, text)
        {
            let rx = Array.prototype.slice.call(rute);
            rx.forEach(function (list)
            {
                let ctx = list.getContext("2d");
                let w = 80;

                ctx.beginPath();
                ctx.fillStyle = warna;
                ctx.arc(w/2, w/2, w/2, 0, 2 * Math.PI, false);
                ctx.fill();

                ctx.font = 'bold 2.25rem Inter';
                ctx.fillStyle = 'white';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.fillText(text,w/2,w/2);
            });
        }
        rute(rute1, "#fd2828", "1");
        rute(rute2, "#1aab87", "1B");
        rute(rute3, "#fdd03a", "3");
        rute(rute4, "#ffb452", "3F");
        rute(rute5, "#a449e5", "13C");
    });
</script>

<?php $this->endSection(); ?>

