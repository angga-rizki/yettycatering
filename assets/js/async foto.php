<script>
    $("#thumbnail img").on("click", function () {

        var modalFoto = $('#modalFoto'),
                fotoJSON = <?php
foreach ($menu as $data_menu) {
    $foto[$data_menu->slug] = $data_menu->foto;
}
echo json_encode($foto);
?>,
                slug = $(this).parent().parent().attr("id"),
                foto_ini = fotoJSON[slug],
                nomor = 1;
        if (foto_ini != null && foto_ini != "") {
            var array_foto_ini = foto_ini.split(",");

            for (var i = 0; i < array_foto_ini.length; i++) {


                var fotoSrc = '<?= base_url() . "/../assets/foto/" ?>' + array_foto_ini[i],
                        foto = new Image();
                foto.onload = function () {
                    if (nomor == 1) {
                        $("#carouselFoto ol").append(
                                '<li data-target="#carouselFoto" data-slide-to="' + nomor + '" class="active"></li>'
                                );
                        $("#carouselFoto .carousel-inner").append(
                                '<div class="carousel-item active">' +
                                '<img src="' + this.src + '" class="d-block w-100" alt="Foto ' + nomor + '">' +
                                '</div>'
                                );
                    } else {
                        $("#carouselFoto ol").append(
                                '<li data-target="#carouselFoto" data-slide-to="' + nomor + '"></li>'
                                );
                        $("#carouselFoto .carousel-inner").append(
                                '<div class="carousel-item">' +
                                '<img src="' + this.src + '" class="d-block w-100" alt="Foto ' + nomor + '">' +
                                '</div>'
                                );
                    }
                    $("#loading").css({"opacity": "0"});
                    nomor++;
                }

                foto.src = fotoSrc;

            }
            modalFoto.modal('show');
            $(".carousel-item img").on("load", function () {
                $("#loading").css({"opacity": "0"});
            });
        }
        modalFoto.on('hidden.bs.modal', function () {
            $("#carouselFoto ol li").remove();
            $("#carouselFoto .carousel-item").remove();
            $("#loading").css({"opacity": "1"});
            nomor = 1;
        });
    });

    modalFoto.on('hidden.bs.modal', function () {
        $("#carouselFoto ol li").remove();
        $("#carouselFoto .carousel-item").remove();
        $("#loading").css({"opacity": "1"});
        nomor = 1;
    });
</script>