<?php $this->extend("master/general") ?>

<?php $this->section("title"); echo "Info Rute"; $this->endSection(); ?>

<?php $this->section("konten") ?>

<style>
    .display-rute {
        padding: 0;
        text-align: center;
        font-family: sans-serif;
        margin: 10rem 5rem 0 4rem;
    }

    .rute {
        border-top: 1.25rem solid #fd2828;
        display: flex;
        list-style: none;
        padding-top: 2.25rem;
        padding-left: 0;
        justify-content: space-between;
        align-items: stretch;
        align-content: stretch;
    }

    .halte {
        position: relative;
        width: 100%;
        color: black;
        font-size:1rem;
        font-family: 'Inter', sans-serif;
        line-height:1;
        font-weight:600;
    }

    .halte:first-child {
        margin-left: -4rem;
        font-size:1.25rem;
        font-weight: bold;
    }

    .halte:last-child {
        margin-right: -4rem;
        font-size:1.25rem;
        font-weight: bold;
    }

    .halte::after {
        content: "";
        width: 1.25rem;
        height: 1.25rem;
        background: #fff;
        position: absolute;
        border-radius: 100%;
        top: -3.5rem;
        border: 2px solid black;
    }

    .halte > .nama-halte {
        margin-top: -11.5rem;
        margin-right: -10rem;
        margin-left: -2rem;
        text-align: left;
        white-space:nowrap;
        transform: rotate(-60deg);
    }

    .halte:last-child > .nama-halte {
        margin-top: -10rem;
        margin-right: -5rem;
        text-align: left;
        white-space:nowrap;
        transform: rotate(-60deg);
    }

    .halte > .rute-transit {
        margin-top: 8.75rem;
    }

    .anda-disini {
        font-size:1rem;
        font-weight: 600;
        margin-top: -13rem;
    }

    .halte:first-child::after {
        width: 1.25rem;
        height: 4rem;
        background: #FFEB3C;
        position: absolute;
        border-radius: 4rem;
        top: -5rem;
        left: 50%;
        transform: translatex(-50%);
        border: 2px solid black;
    }

    .halte:last-child::after {
        width: 3rem;
        height: 3rem;
        background: #fd2828;
        position: absolute;
        border-radius: 100%;
        top: -4.5rem;
        left: 50%;
        transform: translatex(-50%);
        border: none;
        content: "1";
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.25rem;
        color: #fff;
        font-weight: bold;
    }
</style>

<div class="content content-full bg-black p-0 m-0">
    <div class="row align-items-center items-push m-0">
        <div class="text-center px-3 py-0 m-0" style="width:15%">
            <div class="block bg-black shadow-none p-0">
                <div class="block-content">
                    <i class="fa fa-arrow-right-long text-white" style="font-size:6rem;margin-left:0.5rem;margin-top:-1.5rem;"></i>
                    <div class="fw-bolder text-white" style="font-size:3rem;">PINTU</div>
                    <div class="fst-italic fw-semibold text-white" style="font-size:2rem;">GATE</div>
                </div>

                <div class="block block-rounded m-3" style="border-radius:15%;">
                    <span class="fw-bolder" style="font-size:6rem;">4A</span>
                </div>
            </div>
        </div>

        <div class="bg-body-light m-0 p-3" style="width:85%; height:400px;">
            <div class="block bg-body-light shadow-none">
                <div class="block-content m-0 p-0">
                    <div class="display-rute">
                        <ul class="rute">
                            <li class="halte">
                                Terminal Intermoda Joyoboyo
                                <div class="anda-disini text-danger">Anda di sini</div>
                            </li>
                            <li class="halte">
                                <div class="nama-halte">Taman Bungkul</div>
                            </li>
                            <li class="halte">
                                <div class="nama-halte">Rumah Sakit Darmo</div>
                            </li>
                            <li class="halte">
                                <div class="nama-halte">Mojopahit</div>
                            </li>
                            <li class="halte">
                                <div class="nama-halte">Pandegiling</div>
                            </li>
                            <li class="halte">
                                <div class="nama-halte">Urip Sumoharjo</div>
                            </li>
                            <li class="halte">
                                <div class="nama-halte">Tunjungan</div>
                                <div class="rute-transit">
                                    <canvas class="rute1" width="80" height="80" style="width:2rem; height:2rem;"></canvas>
                                    <canvas class="rute2" width="80" height="80" style="width:2rem; height:2rem;"></canvas>
                                    <canvas class="rute3" width="80" height="80" style="width:2rem; height:2rem;"></canvas>
                                    <canvas class="rute4" width="80" height="80" style="width:2rem; height:2rem;"></canvas>
                                    <canvas class="rute5" width="80" height="80" style="width:2rem; height:2rem;"></canvas>
                                    <canvas class="rute6" width="80" height="80" style="width:2rem; height:2rem;"></canvas>
                                </div>
                            </li>
                            <li class="halte">
                                <div class="nama-halte">Praban</div>
                            </li>
                            <li class="halte">
                                <div class="nama-halte">Pirngadi</div>
                            </li>
                            <li class="halte">
                                <div class="nama-halte">Tugu Pahlawan</div>
                            </li>
                            <li class="halte">
                                <div class="nama-halte">Rajawali</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row me-2 py-0">
                <div class="col-2">
                </div>
                <div class="col-7 d-flex align-items-center">
                    <canvas class="rute1" width="80" height="80" style="width:3rem; height:3rem; margin-right:0.5rem;"></canvas>
                    <div class="fw-semibold" style="font-size:1.5rem;line-height:1;margin-left:0.5rem;">Terminal Purabaya <=> Rajawali</div>
                </div>
                <div class="col-3">
                    <div class="" style="font-size:1rem;">
                        Operasional: <span class="fw-bold">Senin - Minggu</span>
                    </div>
                    <div class="d-flex bg-black text-white p-2 align-items-center mt-1" style="font-size:1rem;">
                        <i class="far fa-clock fw-bold" style="font-size:1rem;margin-right:0.5rem;"></i>
                        <span class="">05.00-10.00 | 15.00-22.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>

<?php $this->section("js") ?>

<script type="text/javascript">
    let rute = [];
    let font = new FontFace('inter', 'url(tema/assets/fonts/inter/inter-v11-latin-regular.woff2)');

    let rute1 = document.getElementsByClassName("rute1");
    let rute2 = document.getElementsByClassName("rute2");
    let rute3 = document.getElementsByClassName("rute3");
    let rute4 = document.getElementsByClassName("rute4");
    let rute5 = document.getElementsByClassName("rute5");
    let rute6 = document.getElementsByClassName("rute6");

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
        rute(rute2, "#80d7ae", "1A");
        rute(rute3, "#1aab87", "1B");
        rute(rute4, "#ffb452", "3F");
        rute(rute5, "#a449e5", "13C");
        rute(rute6, "#cb84ff", "13D");
    });
</script>

<?php $this->endSection(); ?>