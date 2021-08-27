
    <body id="body" style="background:#f2f5f8;">
        <input type="hidden" value="<?= $_GET['i']; ?>" id="i" name="i" />
        
        

        <section style="background:#f2f5f8;" id="topbar"></section>
        
        <header style="background:#f2f5f8;" id="header">
            <div class="container"> </div>
        </header>
        <section id="intro" class="elevation-2">    
            <div class="intro-content">
                <img src="<?=ASSETS.SRC.IMG?>imagen.png" class="product-img" style="height: 30%;">
                <h1 class="mt-2 font-weight-bold text-orange"> Editor Fotográfico </h1>
                <div>
                <a href="#" class="btn-projects trigger-btn" onclick="openModal('modal-login');">
                    Iniciar sesión
                </a>
                </div>
            </div>
            <div id="intro-carousel" class="owl-carousel">
                <div class="item" style="background-image: url('<?=ASSETS.SRC.IMG?>img_login.jpg');"></div>
            </div>
        </section>
        
        <script type="text/javascript" src="<?=ASSETS.SRC.JS?>JsLogin.js"></script>