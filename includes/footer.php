<!-- Footer -->
<div class="container-fluid shadow-lg mt-5 bg-dark">
    <div class="row">
        <div class="col-12">
            <img class="img-fluid mx-auto d-block my-3" src="img/logo/logo_WR.png" style="width: 10rem;"
                title="Logo Weslley Rocha">
        </div>
    </div>

    <!-- Container Dados e Redes Sociais -->
    <div class="container-fluid justify-content-center text-light">

        <div class="row my-3">
            <div class="col">
                <h1 class="text-center text-muted font-weight-light font-italic">"Enquanto uns pensam sempre estarem
                    certos,
                    eu prefiro
                    estar errado, assim posso aprender e evoluir."</h1>
                <p class="text-center text-muted font-weight-lightt font-italic">Guilherme Trentini</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p class="text-center text-light my-2">Desenvolvido por Weslley Rocha </a> &#174;
                    <?php echo date("Y", time()); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Início Botão Whatssap Site -->
<script type="text/javascript">
(function() {
    var options = {
        whatsapp: "+55(19)974207424", // WhatsApp number
        call_to_action: "Fale Conosco Agora!", // Call to action
        position: "right", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol,
        host = "whatshelp.io",
        url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function() {
        WhWidgetSendButton.init(host, proto, options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
})();
</script>
<!-- Final Botão Whatssap Site -->


<!-- Link Externo -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>