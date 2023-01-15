<?php $this->extend("master/general") ?>

<?php $this->section("title"); echo "Info Pintu"; $this->endSection(); ?>

<?php $this->section("konten") ?>
<style>
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

    .info-rute {
        width: 6rem;
        height: 6rem;
        margin-right: 0.5rem;
    }

    .tujuan-bus {
        font-size: 3.5rem;
        line-height: 1.2;
        margin-left: 1rem;
        font-weight: bold;
    }

    .transit {
        max-width: 50%;
    }
</style>

<div class="content content-full bg-black p-0 m-0">
    <div class="row align-items-center items-push m-0">
        <div class="text-center px-3 m-0" style="width:15%">
            <div class="block bg-black shadow-none">
                <div class="block-content">
                    <div class="text-pintu">PINTU</div>
                    <div class="text-gate">GATE</div>
                </div>

                <div class="block block-rounded" style="border-radius:10%; margin: 2rem;">
                    <span class="kode-pintu">3A</span>
                </div>
            </div>
        </div>

        <div class="d-flex bg-body-light align-items-center my-auto" style="width:70%; height:480px;">
            <div class="block bg-body-light shadow-none">
                <div class="block-content">
                    <div class="row">
                        <div class="col-6 m-0 p-2">
                            <div class="row mb-5">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="transit">
                                        <canvas class="info-rute rute1" width="120" height="120"></canvas>
                                    </div>
                                    <div class="tujuan-bus">Rajawali</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="transit">
                                        <canvas class="info-rute rute2" width="120" height="120"></canvas>
                                    </div>
                                    <div class="tujuan-bus">SIER</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 m-0 p-2">
                            <div class="row">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="transit">
                                        <canvas class="info-rute rute3" width="120" height="120"></canvas>
                                        <canvas class="info-rute rute4" width="120" height="120"></canvas>
                                        <canvas class="info-rute rute5" width="120" height="120"></canvas>
                                        <canvas class="info-rute rute6" width="120" height="120"></canvas>
                                    </div>
                                    <div class="tujuan-bus">Terminal Intermoda Joyoboyo</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center m-0" style="width:15%">
            <div class="block-content shadow-none">
                <span class="fa fa-arrow-down-long text-white" style="font-size:15rem;"></span>
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
                let w = 120;

                ctx.beginPath();
                ctx.fillStyle = warna;
                ctx.arc(w/2, w/2, w/2, 0, 2 * Math.PI, false);
                ctx.fill();

                ctx.font = 'bold 3.5rem Inter';
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
