<?php $this->extend("master/general") ?>

<?php $this->section("title"); echo "Info Rute"; $this->endSection(); ?>

<?php $this->section("konten") ?>
<style>
    .peta {
        display: flex;
        align-items: center;
        justify-content: start;
        position: relative;
        margin-top: 12rem;
        margin-left: 5rem;
    }

    .garis {
        width: 8.25rem;
        padding: 0;
        margin-left: -0.625rem;
        margin-right: -0.625rem;
        border: 0.625rem solid #fd2828;
        background: #fd2828;
        z-index: 1;
    }

    .halte {
        width: 1.25rem;
        height: 1.25rem;
        background: white;
        border-radius: 1.25rem;
        border-style: solid;
        position: relative;
        z-index: 2;
    }

    .halte:first-child {
        width: 1.25rem;
        height: 4rem;
        background: white;
        border-radius: 4rem;
        border-style: solid;
    }

    .halte:last-child::before {
        width: 3rem;
        height: 3rem;
        background: #fd2828;
        border-radius: 3rem;
        border-style: none;
        margin-top: -1rem;
        margin-left: -1rem;

        content: "1";
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.25rem;
        color: #fff;
        font-weight: bold;
    }

    .nama-halte {
        margin-top: -8rem;
        margin-right: -15rem;
        margin-left: -2.5rem;
        text-align: left;
        font-weight: 500;
        transform: rotate(-45deg);
        padding-left: 1.5rem;
        text-indent: -1.5rem;
        line-height: 1.1;
        font-size: 1.25rem;
    }

    .nama-halte-awal{
        margin-left: -5rem;
        margin-right: -5rem;
        margin-top: 4.5rem;
        text-align: center;
        font-weight: bold;
        line-height: 1;
        font-size: 2rem;
        text-shadow:
                -3px -3px 0 #fff,
                0   -3px 0 #fff,
                3px -3px 0 #fff,
                3px  0   0 #fff,
                3px  3px 0 #fff,
                0    3px 0 #fff,
                -3px  3px 0 #fff,
                -3px  0   0 #fff;
    }

    .nama-halte-akhir{
        margin-top: -7.5rem;
        margin-right: -5rem;
        margin-left: 1rem;
        text-align: left;
        font-weight: bold;
        transform: rotate(-45deg);
        line-height: 1;
        font-size: 2rem;
    }

    .rute-transit {
        margin-top: 8.5rem;
        margin-left: -3rem;
        margin-right: -3rem;
        text-align: center;
    }

    .rute-transit-akhir {
        position: absolute;
        margin-right: -10rem;
        margin-left: -1rem;
        top: 2.5rem;
    }

    .sini {
        margin-left: -2.75rem;
        margin-right: -2.75rem;
        line-height: 1;
        text-align: center;
        background: #eff1f2;
        padding: 0.25rem;
        color: red;
        font-weight: 500;
        font-size: 1rem;
        position: absolute;
        left: 0.25rem;
        z-index: 1;
    }

    .sini-id {
        top: -12.5rem;
    }

    .sini-en {
        top: 14.75rem;
    }

    .stabilo {
        background-color: #fff200;
        opacity: 100%;
        width: 1.5rem;
        height: 27rem;
        position: absolute;
        left: -0.15rem;
        top: -11.5rem;
        z-index: 0;
    }

    .segitiga {
        width: 0;
        height: 0;
        border-left: 1rem solid transparent;
        border-right: 1rem solid transparent;
        text-align: center;
        position: absolute;
        left: -0.55rem;
        z-index: 1;
    }

    .segitiga-naik {
        border-top: 1.5rem solid #f00;
        top: -10.5rem;
    }

    .segitiga-turun {
        border-bottom: 1.5rem solid #f00;
        top: 12.75rem;
    }

    .informasi {
        columns: 2;
        position: relative;
        top: 7rem;
        left: 12rem;
    }

    .rute-sekarang{
        display: flex;
        align-items: center;
        align-content: center;
        margin-top: 1rem;
    }

    .nama-rute {
        margin-left: 0.75rem;
        font-weight: 600;
        font-size: 1.5rem;
        margin-right: -10rem;
    }

    .operasional {
        position: relative;
        top: 1rem;
        left: 10rem;
        max-width: 15rem;
    }

    .hari-operasi {
        display: inline-block;
        font-weight: bold;
        margin-bottom: 0.25rem;
    }

    .waktu-operasi {
        background-color: #000;
        color: #fff;
        padding: 0.25rem;
    }

    .transit-rute-halte {
        width: 2rem;
        height: 2rem;
    }

    .text-pintu {
        margin-top: -1rem;
        font-size: 4rem;
        font-weight: bold;
        color: #fff;
    }

    .text-gate {
        margin-top: -1.5rem;
        font-size: 3rem;
        font-weight: bold;
        color: #fff;
    }

    .kode-pintu {
        font-size: 7rem;
        font-weight: bold;
    }
</style>

<div class="content content-full bg-black p-0 m-0">
    <div class="row align-items-center items-push m-0">
        <div class="text-center px-3 py-0 m-0" style="width:15%">
            <div class="block bg-black shadow-none p-0">
                <div class="block-content">
                    <i class="fa fa-arrow-right-long text-white" style="font-size:8rem;margin-left:0.5rem;margin-top:-1.5rem;"></i>
                    <div class="text-pintu">PINTU</div>
                    <div class="text-gate">GATE</div>
                </div>

                <div class="block block-rounded" style="border-radius:10%; margin: 2rem;">
                    <span class="kode-pintu">3A</span>
                </div>
            </div>
        </div>

        <div class="bg-body-light m-0 p-3" style="width:85%; height:480px;">
            <div class="block bg-body-light shadow-none">
                <div class="block-content m-0 p-0">
                    <div class="peta">
                        <div class="halte">
                            <div class="nama-halte-awal">Terminal Intermoda Joyoboyo</div>
                            <div class="sini sini-id">Anda di sini</div>
                            <div class="segitiga segitiga-naik"></div>
                            <div class="segitiga segitiga-turun"></div>
                            <div class="sini sini-en">You're here</div>
                        </div>
                        <div class="stabilo"></div>
                        <div class="garis"></div>
                        <div class="halte">
                            <div class="nama-halte">Rumah Sakit Darmo</div>
                            <div class="rute-transit">
                                <canvas class="transit-rute-halte rute5" width="80" height="80"></canvas>
                            </div>
                        </div>
                        <div class="garis"></div>
                        <div class="halte">
                            <div class="nama-halte">Terminal Intermoda Joyoboyo</div>
                        </div>
                        <div class="garis"></div>
                        <div class="halte">
                            <div class="nama-halte">Pandegiling</div>
                        </div>
                        <div class="garis"></div>
                        <div class="halte">
                            <div class="nama-halte">Urip Sumoharjo</div>
                        </div>
                        <div class="garis"></div>
                        <div class="halte">
                            <div class="nama-halte">Tunjungan</div>
                            <div class="rute-transit">
                                <canvas class="transit-rute-halte rute2" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute3" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute4" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute5" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute6" width="80" height="80"></canvas>
                            </div>
                        </div>
                        <div class="garis"></div>
                        <div class="halte">
                            <div class="nama-halte">Embong Malang</div>
                            <div class="rute-transit">
                                <canvas class="transit-rute-halte rute2" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute3" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute4" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute5" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute6" width="80" height="80"></canvas>
                            </div>
                        </div>
                        <div class="garis"></div>
                        <div class="halte">
                            <div class="nama-halte">Praban</div>
                        </div>
                        <div class="garis"></div>
                        <div class="halte">
                            <div class="nama-halte">Pirngadi</div>
                        </div>
                        <div class="garis"></div>
                        <div class="halte">
                            <div class="nama-halte">Tugu Pahlawan</div>
                            <div class="rute-transit">
                                <canvas class="transit-rute-halte rute2" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute3" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute4" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute5" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute6" width="80" height="80"></canvas>
                            </div>
                        </div>
                        <div class="garis"></div>
                        <div class="halte">
                            <div class="nama-halte-akhir">Rajawali</div>
                            <div class="rute-transit-akhir">
                                <canvas class="transit-rute-halte rute2" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute3" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute4" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute5" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute6" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute2" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute3" width="80" height="80"></canvas>
                                <canvas class="transit-rute-halte rute4" width="80" height="80"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="informasi">
                        <div class="rute-sekarang">
                            <canvas class="rute1" width="80" height="80" style="width:3rem; height:3rem;"></canvas>
                            <div class="nama-rute">Terminal Purabaya <=> Terminal Intermoda Joyoboyo</div>
                        </div>

                        <div class="operasional">
                            Operasional:
                            <div class="hari-operasi">Senin - Minggu</div>
                            <div class="waktu-operasi">
                                <i class="far fa-clock fw-bold" style="font-size:1rem;margin-right:0.25rem;margin-left:0.25rem;"></i>
                                05.00-10.00 | 15.00-22.00
                            </div>
                        </div>
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

    let haltex = document.getElementsByClassName("haltex");
    let halte_x = Array.prototype.slice.call(haltex);
    halte_x.forEach(function (list)
    {
        let ctx = list.getContext("2d");
        let w = 32;
        let b = 3;
        let w1 = 250;

        ctx.beginPath();
        ctx.fillStyle = '#fd2828';
        ctx.rect(0, 0, w1, w);
        ctx.fill();

        ctx.beginPath();
        ctx.fillStyle = '#ffffff';
        ctx.arc(w1-(w/2), w/2, w/2-(b/2), 0, 2 * Math.PI, false);
        ctx.fill();
        ctx.lineWidth = b;
        ctx.strokeStyle = "#000000";
        ctx.stroke();
    });
</script>

<?php $this->endSection(); ?>
