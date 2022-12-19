<style>
    #banner {
        box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.2), 0 4px 12px 0 rgba(0, 0, 0, 0.19);
    }
    #mainContainer {
        white-space: nowrap;
        position: relative;
    }
    #sidenav { 
        margin: 1.5rem;
        vertical-align: top;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    #content {
        vertical-align: top;
        width: calc(100% - 3rem - 185px);
    }
    #content img:hover {
        cursor: pointer;
    }
    #thumbnail img {
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.5), 0 4px 4px 0 rgba(0, 0, 0, 0.5);
    }
    
    .paket-menu {
        margin: 1.2rem;
    }
    
    /** transparansi bakground image #top **/
    #top {
        position: relative;
    }
    #top::after {
        content: "";
        background: url('<?= base_url(); ?>/../assets/top-bg.jpg') left bottom;
        box-shadow: 0 0 15px 15px white inset;;
        opacity: 0.5;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        position: absolute;
        z-index: -1;   
    }
    /** end background **/
</style>

<!-- BANNER -->
<div id="banner" class="carousel slide mb-4" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#banner" data-slide-to="0" class="active"></li>
        <li data-target="#banner" data-slide-to="1"></li>
        <li data-target="#banner" data-slide-to="2"></li>
        <li data-target="#banner" data-slide-to="3"></li>
    </ol>
    <div id="banner" class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url(); ?>/../assets/banner/banner1.jpg" alt="Banner 1">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url(); ?>/../assets/banner/banner2.jpg" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url(); ?>/../assets/banner/banner3.jpg" alt="Banner 3">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url(); ?>/../assets/banner/banner4.jpg" alt="Banner 4">
        </div>
    </div>
    <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- MAIN CONTENT -->
<div id="mainContainer" class="container-fluid p-4">

    <!-- SIDE NAVIGASI -->
    <nav id="sidenav" class="nav flex-column d-inline-block border rounded p-2 font-weight-bold bg-white">

        <a class="nav-link text-dark" href="#top">Top</a>

        <div class="dropdown-divider"></div>
        <?php if (!empty($kategori) && is_array($kategori)): ?>
            <?php foreach ($kategori as $data_kategori): ?>

                <a class="nav-link text-dark" href="#<?= $data_kategori->nama_kategori; ?>"><?= $data_kategori->nama_kategori; ?></a>
                <div class="dropdown-divider"></div>

            <?php endforeach; ?>
        <?php endif; ?>

        <a class="nav-link text-dark" href="#hubungi-kami">Hubungi Kami</a>

    </nav>

    <div id="content" class="d-inline-block">

        <!-- TOP -->
        <div id="top" class="d-table w-100 mb-4 p-4">

            <!-- LOGO -->
            <img class="d-block mb-4 mx-auto" src="<?= base_url(); ?>/../assets/logo/full.png">

            <div class="d-table py-3 px-4 pr-5 mx-auto mb-4" style="white-space: nowrap; border: 2px solid #000; border-radius: 7px;">

                <!-- MELAYANI -->
                <h3 class="font-weight-bold text-center">Melayani :</h3>
                <ul class="d-inline-block m-0 font-weight-bold" style="font-size: 1.2rem">
                    <li>Pesta</li>
                    <li>Pernikahan</li>
                    <li>Hajatan</li>
                    <li>Snack / Nasi Box</li>
                </ul>
                <ul class="d-inline-block m-0 font-weight-bold" style="font-size: 1.2rem">
                    <li>Pengajian</li>
                    <li>Tumpeng</li>
                    <li>Arisan</li>
                    <li>Rapat, dll</li>
                </ul>
            </div>

            <!-- ALAMAT -->
            <b class="d-block text-center">Jetis RT. 03 RW. 03, Gadingan, Mojolaban, Sukoharjo <br> (Timur SDN Gadingan 3)</b>

        </div>

        <?php if (!empty($kategori) && is_array($kategori)) : ?>
            <?php foreach ($kategori as $data_kategori): ?>

                <!-- MENU KATEGORI -->
                <div id="<?= esc($data_kategori->nama_kategori); ?>" class="mb-4 p-2" style="white-space: normal;">

                    <!-- NAMA MENU -->
                    <h3 class="font-weight-bold"><?= $data_kategori->nama_kategori; ?></h3>

                    <?php if (!empty($menu) && is_array($menu)) : ?>
                        <?php foreach ($menu as $data_menu): ?>
                            <?php if ($data_menu->kategori == $data_kategori->nama_kategori) : ?>

                                <!-- PAKET MENU -->
                                <div id="<?= $data_menu->slug ?>" class="d-inline-block p-4 text-center bg-white paket-menu" style="vertical-align: top; white-space: nowrap; border: 1px solid black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                                    <!-- NAMA PAKET -->
                                    <h4 class="mb-4 font-weight-bold"><?= $data_menu->nama; ?></h4>

                                    <!-- DESKRIPSI PAKET -->
                                    <?php if (!empty($data_menu->body)) : ?>
                                        <div class="menu-text d-inline-block mr-3 text-left" style="white-space: normal; word-wrap: break-word; max-width: 200px;"><?= $data_menu->body; ?></div>
                                    <?php endif; ?>

                                    <!-- THUMBNAIL -->
                                    <div id="thumbnail" class="d-inline-block" style="vertical-align: top;">
                                        <?php if (empty($data_menu->thumbnail)): ?>
                                            <img src="<?= base_url(); ?>/../assets/no-image.png" width="180px">
                                        <?php else: ?>
                                            <img src="<?= base_url() . '/../assets/thumbnail/' . $data_menu->thumbnail ?>" width="180px">
                                        <?php endif; ?>

                                        <?php if (!empty($data_menu->harga)): ?>
                                            <span class="d-block font-weight-bold mt-4 py-1" style="border: 2px solid #28a745; border-radius: 50%; font-size: 1.25rem; color: rgb(250, 89, 29);"><?= 'Rp ' . number_format($data_menu->harga, 0, '.', '.') ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>

                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif ?>
                </div>
            <?php endforeach; ?>
        <?php endif ?>

        <!-- HUBUNGI KAMI -->
        <div id="hubungi-kami" class="d-inline-block text-center p-4 my-5 bg-white" style="white-space: normal; border: 3px solid black; border-radius: 5px;">

            <h4 class="text-center font-weight-bold mb-4">TAMBAHAN GUBUG PRASMANAN <br> HANYA <span style="color: red;">Rp. 100.000,-</span></h4>

            <!-- NB -->
            <div class="d-inline-block mb-4" style="font-size: 1.1rem">
                <h6 class="font-weight-bold text-left">NB :</h6>
                <ul class="text-left">
                    <li>Harga sewaktu-waktu dapat berubah (menyesuaikan pasar)</li>
                    <li>Luar kota tambah biaya transportasi</li>
                    <li>DP / uang muka 1 minggu sebelum hari h 75%</li>
                    <li>Kami juga melayani menu sesuai keinginan Anda</li>
                    <li>Hubungi kami untuk komposisi menu yang Anda kehendaki dan akan kami kalkulasikan harga terlebih dahulu</li>
                </ul>
            </div>
            <br>
            <!-- KONTAK -->

            <div class="d-inline-block mx-auto text-center" style="padding: 1.5rem 3rem 1.5rem 3rem; border: 3px solid #33cc00; border-radius: 20px; font-size: 1.5rem">
                <span class="d-block p-3 px-4 mb-3 font-weight-bold" style="border: 3px solid #ff3333; border-radius: 50%;">HUBUNGI KAMI</span>

                <img class="mr-2" src="<?= base_url(); ?>/../assets/wa-icon.png" width="30px"><b>081 393 256 363</b><img class="ml-2" src="<?= base_url(); ?>/../assets/sms-icon.png" width="30px"><br>
                <img class="mr-2" src="<?= base_url(); ?>/../assets/wa-icon.png" width="30px"><b>087 836 477 114</b><img class="ml-2" src="<?= base_url(); ?>/../assets/sms-icon.png" width="30px">
            </div>
        </div>
    </div>

    <div id="modalFoto" class="modal fade" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: fixed; top: 0; right: 0; margin: 1em; z-index: 99;">
            <span class="text-white" style="font-size: 2.5em; padding: .5em;">&times;</span>
        </button>
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content" style="background: none; border: none;">
                <div id="carouselFoto" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    </ol>
                    <div class="carousel-inner" style="min-width: 300px; min-height: 300px;">
                        <div id="loading" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #f1f1f1; font-size: 7em; transition: opacity .5s ease-in, visibility .5s; z-index: 99;">
                            <i class="fa fa-circle-o-notch fa-spin"></i>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselFoto" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselFoto" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#banner').carousel({
            interval: 4000,
            //membuat slideshow tidak pause saat mouse hover di gambar
            pause: false
        });
        $('#carouselFoto').carousel({
            //mematikan slideshow
            interval: false,
            touch: false
        });

        //sidenav follow
        $(window).on("load", function () {
            var $sidebar = $("#sidenav"),
                    $window = $(window),
                    offsetSidebar = $sidebar.offset(),
                    offsetFooter = $("footer").offset(),
                    offsetTopContent = $("#top").offset(),
                    heightSidebar = $sidebar.height(),
                    heightFooter = $("footer").height(),
                    topPadding = 0.10 * window.innerHeight;

            $window.scroll(function () {
                if ($window.scrollTop() > offsetSidebar.top && $window.scrollTop() + heightSidebar + heightFooter < offsetFooter.top) {
                    $sidebar.stop().animate({
                        marginTop: $window.scrollTop() - offsetSidebar.top + topPadding
                    });
                }
                if ($window.scrollTop() < offsetTopContent.top) {
                    $sidebar.stop().animate({
                        marginTop: "1.5rem"
                    });
                }
            });
        });

        //membuka modal box gallery foto
        $("#thumbnail img").on("click", function () {

            var modalFoto = $('#modalFoto'),
                    //membuat JSON dari $data['menu'] yang dikirim dari controller. "slug" sebagai key dan "foto" sebagai value.
                    fotoJSON = <?php
        foreach ($menu as $data_menu) {
            $foto[$data_menu->slug] = $data_menu->foto;
        }
        echo json_encode($foto);
        ?>,
                    //mengambil nilai "slug" dari nilai ID elemen parent DIV
                    slug = $(this).parent().parent().attr("id"),
                    //menentukan foto dari thumbnail yang diklik dicari berdasarkan "slug"
                    foto_ini = fotoJSON[slug];
            if (foto_ini != null && foto_ini != "") {
                //membuat array foto jika foto lebih dari satu dengan pemisah ","
                var array_foto_ini = foto_ini.split(",");

                //looping array foto
                for (var i = 0; i < array_foto_ini.length; i++) {
                    var fotoSrc = '<?= base_url() . "/../assets/foto/" ?>' + array_foto_ini[i],
                            nomor = i + 1;
                    //apabila foto pertama
                    if (i == 0) {
                        //menambahkan element <li> dan <div class='carousel-item'> ke gallery untuk menampilkan foto
                        $("#carouselFoto ol").append(
                                '<li data-target="#carouselFoto" data-slide-to="' + nomor + '" class="active"></li>'
                                );
                        $("#carouselFoto .carousel-inner").append(
                                '<div class="carousel-item active">' +
                                '<img src="' + fotoSrc + '" class="d-block w-100" alt="Foto ' + nomor + '">' +
                                '</div>'
                                );
                    } else {
                        $("#carouselFoto ol").append(
                                '<li data-target="#carouselFoto" data-slide-to="' + nomor + '"></li>'
                                );
                        $("#carouselFoto .carousel-inner").append(
                                '<div class="carousel-item">' +
                                '<img src="' + fotoSrc + '" class="d-block w-100" alt="Foto ' + nomor + '">' +
                                '</div>'
                                );
                    }
                }
                //menampilkan modal
                modalFoto.modal('show');
                $(".carousel-item img").on("load", function () {
                    $("#loading").css({"opacity": "0"});
                });
            }
            modalFoto.on('hidden.bs.modal', function () {
                $("#carouselFoto ol li").remove();
                $("#carouselFoto .carousel-item").remove();
                $("#loading").css({"opacity": "1"});
            });
        });
    </script>