<!--Footer-->
<div id="footer">
 <?php echo do_shortcode('[wpforms id="447" title="false" description="false"]'); ?>
    <div class="top">
        <span>Par mums</span>
        <p>Latgales Zoodārzs ir neliels municipāls zoodārzs, Daugavpils pilsētas Domes budžeta iestāde.</p>
        <p>Zoodārzs īsteno Daugavpils pilsētas iedzīvotāju: bērnu un pieaugušo ekoloģisko audzināšanu un
            izglītošanu, garīgās un kulturālās attīstības nolūkos. Latgales zoodārzs ir ekoloģiskas kultūras
            institūcija, kuru dibinātājs ir Daugavpils Dome.</p>
    </div>
    <div class="bot">
        <div class="left">
            <span>Ātrās saites</span>
            <?php
            $defaults = array(
              'container' => '', 
              'menu_class' => 'menu', 
              'menu' => 'Main Menu'
            );
            wp_nav_menu($defaults); ?>
        </div>
        <div class="mid">
            <span>Kontakti</span>
            <p>Latgales zoodārzs</p>
            <p>Vienības iela 27, Daugavpils </p>
            <p>Latvija, LV-5401 </p>
            <p>Tālrunis: 65 426 789</p>
            <p>E-pasts: latgales.zoo@gmail.com</p>
        </div>
        <div class="right">
            <span>Seko mums</span>
            <div class="social">
                <a href="https://www.facebook.com/LatgalesZoo/" target="_blank"><img src="../wp-content/themes/latgales-zoodarzs/public/img/facebook.png" alt=""></a>
                <a href="https://www.draugiem.lv/latgaleszoo/" target="_blank"><img src="../wp-content/themes/latgales-zoodarzs/public/img/draugiem.png" alt=""></a>
                <a href="https://www.tripadvisor.ru/Attraction_Review-g274962-d3823499-Reviews-Latgale_Zoological_Garden-Daugavpils_Latgale_Region.html" target="_blank"><img src="../wp-content/themes/latgales-zoodarzs/public/img/tripadvisor.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

<!--Font Awesome-->
<script src="https://kit.fontawesome.com/c1eceba457.js" crossorigin="anonymous"></script>

<!--jQuery-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!--JS-->
<script src="../wp-content/themes/latgales-zoodarzs/main.js"></script>
</body>

</html>