<?php get_header(); ?>

<div id="title">    
    <div class="title">
        <h1>Kontakti</h1>
        <div class="title-shadow">
            <h1>Kontakti</h1>
        </div>
    </div>
</div>

<div id="content">
    <div class="item">
        <div class="icon">
            <img src="../wp-content/themes/latgales-zoodarzs/public/img/location.png" alt="">
        </div>
        <div class="text">
            <span>Latgales zoodārzs</span>
            <span>Vienības iela 27, Daugavpils</span>
            <span>Latvija, LV-5401</span>
        </div>
    </div>
    <div class="item">
        <div class="icon">
            <img src="../wp-content/themes/latgales-zoodarzs/public/img/time.png" alt="">
        </div>
        <div class="text">
            <div class="top">
                <div class="left">
                    <span>Pirmdiena</span>
                    <span>Otrdiena</span>
                    <span>Trešdiena</span>
                    <span>Ceturtdiena</span>
                    <span>Piektdiena </span>
                    <span>Sestdiena</span>
                    <span>Svētdiena</span>
                </div>
                <div class="right">
                    <span>Slēgts</span>
                    <span>Slēgts</span>
                    <span>10–18</span>
                    <span>10–18</span>
                    <span>10–18</span>
                    <span>10–18</span>
                    <span>10–18</span>
                </div>
            </div>
            <div class="bot">
                <span><b>Nav apmeklēšanas: Valsts svētkos.</b></span>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="icon">
            <img src="../wp-content/themes/latgales-zoodarzs/public/img/phone.png" alt="">
        </div>
        <div class="text">
            <span><b>Tālrunis:</b> 65 426 789</span>
            <span><b>E-pasts:</b> latgales.zoo@gmail.com</span>
        </div>
    </div>
</div>

<div id="jaunumi">
    <h2>Sazināties</h2>
</div>

<div id="contact">
<?php echo do_shortcode( '[wpforms id="446" title="false" description="false"]' ); ?>
    <div class="right">
        <img src="../wp-content/themes/latgales-zoodarzs/public/img/map.png" alt="">
         <div class="back"></div>
    </div>
</div>

<?php get_footer(); ?>