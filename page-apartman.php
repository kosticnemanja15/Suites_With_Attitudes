<?php
/*
*
* Template Name: Apartman
*/

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>



 <div class="container">
    <div class="col-md-12">
       <div class="slider-apartman-box">


            


        <?php 

          $images = get_field('galerija');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)

          if( $images ): ?>
        
               <div class="slider-apartman-nav">
                    <?php foreach( $images as $image ): ?>
                         <div><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
                    <?php endforeach; ?>
               </div><!-- slider-apartman-nav -->


               <div class="slider-apartman">
                      <?php foreach( $images as $image ): ?>
                            <div><div class="slider-apartman-img-border"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div> </div>
                       <?php endforeach; ?>
               </div><!--slider-apartman-->
             

        <?php endif; ?>


           </div> 
     </div><!-- col-md-12 -->
  </div><!-- container -->


<main class="apartman-main">
  <div class="container">
     <div class="col-md-12">

       <div class="apartman-naslov">
         <div class="apartman-naslov-h"><h1><?php the_field('ime_apartmana'); ?></h1></div>
         <div class="apartman-naslov-cena"><h2>od <?php the_field('poc_cena'); ?>€</h2></div>
       </div><!-- apartman-naslov -->
 
      <div class="apartman-info">
      
        <div class="apartman-info-line">
           <div class="apartman-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/single-app-pin.png"></div> 
           <div class="apartman-info-line-p"><p><?php the_field('adresa'); ?></p></div>
        </div><!-- apartman-info-line row-->

        <div class="apartman-info-line">
           <div class="apartman-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/single-app-povrsina.png"></div> 
           <div class="apartman-info-line-p"><p><?php the_field('povrsina'); ?>m2</p></div>
        </div><!-- apartman-info-line row-->

        <div class="apartman-info-line">
           <div class="apartman-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/single-app-dvosoban.png"></div> 
           <div class="apartman-info-line-p"><p><?php the_field('sobnost'); ?></p></div>
        </div><!-- apartman-info-line row-->
        <break></break>
        <div class="apartman-info-line">
           <div class="apartman-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/single-app-osobe.png"></div> 
           <div class="apartman-info-line-p"><p><?php the_field('kapacitet'); ?></p></div>
        </div><!-- apartman-info-line row-->

        <div class="apartman-info-line">
           <div class="apartman-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/single-app-chek-in.png"></div> 
           <div class="apartman-info-line-p"><p><?php the_field('chack_in'); ?></p></div>
        </div><!-- apartman-info-line row-->

        <div class="apartman-info-line">
           <div class="apartman-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/single-app-chek-out.png"></div> 
           <div class="apartman-info-line-p"><p><?php the_field('chack_out'); ?></p></div>
        </div><!-- apartman-info-line row-->

        <div class="apartman-info-line">
           <div class="apartman-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/single-app-krevet.png"></div> 
           <div class="apartman-info-line-p"><p><?php the_field('krevrti'); ?></p></div>
        </div><!-- apartman-info-line row-->

      </div><!-- apartman-info  -->
     </div><!-- col-md-12 -->



    <div class="opis-rezervacije">
     <div class="col-md-12">
      <div class="row">


        <div class="col-xl-8">
          <div class="opis">
            <h2><?php the_field('naslov'); ?></h2>
            <p><?php the_field('opis_text'); ?></p>
           

            <div class="opis-info">

              
              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/audio muzicki centar.svg"></div>
                <div class="opis-info-line-p"><p>Audio muzički centar</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/fen.svg"></div>
                <div class="opis-info-line-p"><p>Fen</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/fotelja.svg"></div>
                <div class="opis-info-line-p"><p>Fotelja</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/frizider.svg"></div>
                <div class="opis-info-line-p"><p>Frižider</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/grejalica.svg"></div>
                <div class="opis-info-line-p"><p>Grejalica</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/ketler.svg"></div>
                <div class="opis-info-line-p"><p>Ketler</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/klima.svg"></div>
                <div class="opis-info-line-p"><p>Klima</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/lcd.svg"></div>
                <div class="opis-info-line-p"><p>Lcd</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/mikro rerna.svg"></div>
                <div class="opis-info-line-p"><p>Mikro rerna</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/pegla.svg"></div>
                <div class="opis-info-line-p"><p>Pegla</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/podno grejanje.svg"></div>
                <div class="opis-info-line-p"><p>Podno grejanje</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/sporet.svg"></div>
                <div class="opis-info-line-p"><p>Šporet</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/toster.svg"></div>
                <div class="opis-info-line-p"><p>Toster</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/trosed.svg"></div>
                <div class="opis-info-line-p"><p>Trosed</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/tus kabina.svg"></div>
                <div class="opis-info-line-p"><p>Tuš kabina</p></div>
              </div><!-- opis-info-line row -->

              <div class="opis-info-line">
                <div class="opis-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/wifi.svg"></div>
                <div class="opis-info-line-p"><p>Wifi</p></div>
              </div><!-- opis-info-line row -->

            </div><!-- opis-info -->
          </div><!-- opis -->
        </div><!-- col-md-8 -->





        <div class="col-xl-4">
          <div class="rezervacije-box">
            <h2><?php the_field('ap_naslov'); ?>Raspoloživost</h2>
            <p><?php the_field('ap_naslov'); ?>Proverite da li su slobodni dani koje želite da provedete u našim apartmanima. Naše ljubazno osoblje će vas kontaktirati u najkraćem mogućem roku.</p>
            
               <div class="rezervacije-form">
                 <!--  <input type="text" name="" placeholder="Dan">
                  <input type="text" name="" placeholder="Mesec">
                  <input type="text" name="" placeholder="Broj nocenja"> -->
                  <div class='content'>
                   <?php the_content(); ?>
                </div><!-- content -->
               </div><!-- rezervacije form -->


          <!-- <a href="#" class="button btn-orange">Proveri Raspoloživost</a>  -->

          </div><!-- rezervacije-box -->

        </div><!-- col-md-4 -->
      </div>  <!-- row -->
     </div><!-- col-md-12    --> 
    </div><!-- opis-rezervacije -->




      <div class="cene">
        <div class="col-md-12">
          <h2>Cenovnik</h2>
          <div class="cene-boxes">

            <div class="cene-box">
              <p id="cene-box-p-first">1-3 dana</p>
              <h2><?php the_field('cena1'); ?><span>€</span></h2>
              <p><span>po danu</span></p>
            </div><!-- cene-box -->

            <div class="cene-box">
              <p id="cene-box-p-second">3-7 dana</p>
              <h2><?php the_field('cena2'); ?><span>€</span></h2>
              <p><span>po danu</span></p>
            </div><!-- cene-box -->

            <div class="cene-box">
              <p id="cene-box-p-first">7-10 dana</p>
              <h2><?php the_field('cena3'); ?><span>€</span></h2>
              <p><span>po danu</span></p>
            </div><!-- cene-box -->

            <div class="cene-box">
              <p id="cene-box-p-second">10-20 dana</p>
              <h2><?php the_field('cena4'); ?><span>€</span></h2>
              <p><span>po danu</span></p>
            </div><!-- cene-box -->

             <div class="cene-box">
                <p id="cene-box-p-second">20-30 dana</p>
                 <h2><?php the_field('cena5'); ?><span>€</span></h2>
                <p><span>po danu</span></p>
            </div><!-- cene-box -->


          </div><!-- cene-boxes -->
        </div><!-- col-md-12 -->
      </div><!-- cene -->



      <div class="col-md-12">
        <div class="row">
  
          <div class="col-xl-6">
            <div class="mapa-apartman">
              <h2>Lokacija</h2>
              <div class="mapa-apartman-img">
                <img src="<?php the_field('mapa'); ?>">
              </div><!-- mapa-apartman-img -->
             <!--  <div class="map-pin"><img src="img/ion-ios-location-ionicons.png"></div>
              <p>Linije Gradskog Prevoza:<span><?php //the_field('lista_prevoza'); ?></span></p> -->
            </div><!-- mapa apartman -->
          </div><!-- col-xl-6--> 

           <div class="col-xl-6">
            <div class="lokacija-text">
                <p><?php the_field('opis_lokacije'); ?></p>
             </div><!-- lokacija-text -->
           </div><!-- col-xl-6--> 

         </div><!-- row -->
        </div>

 
          <!-- <div class="row"> -->
             <div class="col-md-12">
              <div class="desc_box">
                <h2>Kako do važnih lokacija</h2> 
                <p><?php the_field('distance_tekst'); ?></p>
               </div><!-- desc_box -->
             </div><!-- col-md-12--> 

             <div class="col-md-12">
               <div class="desc_box">
                  <h2>Preporučujemo</h2> 
                  <p><?php the_field('preporucujemo_tekst'); ?></p>
               </div><!-- desc_box -->
            </div><!-- col-md-12--> 
          <!-- </div>row -->








  </div><!-- container   -->  

</main><!-- apartman-main -->









<?php endwhile; ?>
<!-- end the loop -->


<?php get_footer(); ?>
