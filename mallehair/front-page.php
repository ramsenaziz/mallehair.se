<?php include'header.php'; ?>

        <section class="intro-section">
          <div class="container-fluid">
            <div class="row">
              <div class="col"></div>
              <div class="col">
                <div class="row">
                  <div class="intro-text">
                    <h1>Your hair our passion</h1>  
                    <p>MalleHair strävar alltid efter att kunden ska känna sig trygg under klippningen och bli nöjd med resultatet.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="intro-text">
                    <p>Du är välkommen att droppa in eller ringa <a href="tel:08884584" id="tel-link">08-88 45 84</a> för att boka en tid.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="call-button-container">
                    <p>
                      <a href="tel:08884584" id="call-button" class="text-center">Ring för att boka tid &raquo;</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col"></div> 
            </div>
          </div>
        </section> <!--end intro-section-->


        <section class="open-hours-section" id="open-hours-section">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm-6">
                <h2>Öppettider</h2>
                <p>Vardagar 9-18</p>
                <p>Lördag 9-15</p>
                <p>Söndag Stängt</p>
              </div>
              <div class="col-sm"></div>
            </div>
          </div>
        </section> <!--end open-hours-section-->


        <div class="insta-section">
          <div class="insta-container">
            <div class='instagrid section' id='Instagram'>
              <div class='instagrid.css' data-version='1' id='instagridz'>
                <div id='ody'></div>
              </div>
            </div>
          </div>
        </div> <!--end insta-section-->


        <section class="blog-columns-section" id="blog-columns-section">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm-6">
                <h2>Aktuellt</h2>
              </div>
              <div class="col-sm"></div>
            </div>

            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm-6">
                <div class="column">
                  <?php while(have_posts()) : the_post() ?>
                    <div class="blog-post">
                      <a style="background-image: url(<?php the_post_thumbnail_url(); ?>)" class="thumbnail" href="<?php the_permalink() ?>">     
                      </a>
                      <a class="title" href="<?php the_permalink() ?>">
                        <h3><?php the_title(); ?></h3>
                      </a>
                      <p><?php the_content(); ?></p>
                      <span class="date">
                        <?php echo get_the_date(); ?>
                      </span>
                    </div>
                  <?php endwhile ?>
                </div>
              </div>
              <div class="col-sm"></div>
            </div>
          </div>
        </section> <!--end blog-section-->


        <section class="crew-section" id="crew-section">
         <div class="container-fluid">
           <div class="row">
             <div class="col-sm"></div>
             <div class="col-sm-6">
               <h2>The Crew</h2>
               <p>Vi är ett erfaret team med hairstylister som besitter varsin unika kompetens.</p>
               </div>
               <div class="col-sm"></div>
           </div>

           <div class="row"> 
             <div class="col">
                <div class="crew-profile-container text-center">

                  <div class="crew-box">
                     <div class="crew-profile text-center">
                       <img src="<?php bloginfo('template_url'); ?>/assets/images/tomas.jpg" class="rounded" alt="Profil bild på personal Tomas">
                       <h3>Tomas</h3>
                       <p class="crew-title">- Hårstylist | Barberare -</p>
                     </div>

                    <div class="crew-profile text-center">
                       <img src="<?php bloginfo('template_url'); ?>/assets/images/jessi.jpg" class="rounded" alt="Profil bild på personal Jessi">
                       <h3>Jessi</h3>
                       <p class="crew-title">- Hårstylist -</p>
                     </div>

                     <div class="crew-profile text-center">
                       <img src="<?php bloginfo('template_url'); ?>/assets/images/nuran.jpg" class="rounded" alt="Profil bild på personal Nuran">
                       <h3>Nuran</h3>
                       <p class="crew-title">- Hårstylist -</p>
                     </div>
                     
                     <div class="crew-profile text-center">
                       <img src="<?php bloginfo('template_url'); ?>/assets/images/helen.jpg" class="rounded" alt="Profil bild på personal Helen">
                       <h3>Helen</h3>
                       <p class="crew-title">- Hårstylist -</p>
                     </div>

                     <div class="crew-profile text-center">
                       <img src="<?php bloginfo('template_url'); ?>/assets/images/milat.jpg" class="rounded" alt="Profil bild på personal Milat">
                       <h3>Milat</h3>
                       <p class="crew-title">- Hårstylist -</p>
                     </div>

                     <div class="crew-profile text-center">
                       <img src="<?php bloginfo('template_url'); ?>/assets/images/gabi.jpg" class="rounded" alt="Profil bild på personal Gabi">
                       <h3>Gabi</h3>
                       <p class="crew-title">- Hårstylist | Barberare -</p>
                     </div>        
                  </div> <!--end crew-box-->
               </div> 
             </div> 
           </div> 
          </div>
        </section> <!--end crew-section-->


        <section class="pricelist-section" id="pricelist-section">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm-6">
                <h2>Prislista</h2>
              </div>
              <div class="col-sm"></div>
            </div>
            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm">
                  <!--Klippning-->
                  <table class="table table-striped table-hover table-responsive">
                    <thead class="thead-inverse">
                      <tr>
                        <th>Klippning</th>
                        <th>Pris</th>
                        <th>Kommentar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Vuxen</td>
                        <td>fr. 310-360</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Pensionär</td>
                        <td>fr. 220-260</td>
                        <td>Gäller mellan kl 9-12</td>
                      </tr>
                      <tr>
                        <td>Barn</td>
                        <td>250</td>
                        <td>Under 10 år</td>
                      </tr>
                    </tbody>
                  
                  <!--Herrar-->
                   <thead class="thead-inverse">
                    <tr>
                      <th>Herrar</th>
                      <th>Pris</th>
                      <th>Kommentar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Slätrakning huvud</td>
                      <td>200</td>
                      <td>Med kniv</td>
                    </tr>
                    <tr>
                      <td>Traditionell rakning</td>
                      <td>200</td>
                      <td>Hals & kinder med kniv</td>
                    </tr>
                    <tr>
                      <td>Ansiktsrakning</td>
                      <td>200</td>
                      <td>Med kniv</td>
                    </tr>
                    <tr>
                      <td>Skäggtrimning</td>
                      <td>100</td>
                      <td></td>
                    </tr>
                  </tbody>

                  <!--Behandlingar-->
                   <thead class="thead-inverse">
                    <tr>
                      <th>Behandlingar</th>
                      <th>Pris</th>
                      <th>Kommentar</th>
                    </tr>
                  </thead>
                  <tbody>  
                    <tr>
                      <td>Slingor i folie</td>
                      <td>fr. 950</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Permanent</td>
                      <td>fr. 990</td>
                      <td>Inkl. klipp & lägg</td>
                    </tr>
                    <tr>
                      <td>Hår färgning</td>
                      <td>fr. 690</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Toning</td>
                      <td>fr. 690</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Hätta slingor</td>
                      <td>fr. 650</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Inpackningskur</td>
                      <td>fr. 350</td>
                      <td>Inkl finfön</td>
                    </tr>
                  </tbody>

                <!--Övrigt-->
                  <thead class="thead-inverse">
                    <tr>
                      <th>Övrigt</th>
                      <th>Pris</th>
                      <th>Kommentar</th>
                    </tr>
                  </thead>
                  <tbody>  
                    <tr>
                      <td>Hårstyling</td>
                      <td>fr. 200</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Ögonbryn färgning</td>
                      <td>fr. 120</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Fransar färgning</td>
                      <td>fr. 120</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Ögonbryn</td>
                      <td>fr. 120</td>
                      <td>Plock/trådning</td>
                    </tr>
                    <tr>
                      <td>Trådning Ansikte</td>
                      <td>fr. 290</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Trådning Ögonbryn</td>
                      <td>fr. 120</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Trådning Mustasch</td>
                      <td>fr. 100</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Tvätt med luftföning</td>
                      <td>100</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Håltagning 1 st</td>
                      <td>150</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-sm"></div>
            </div> <!--end pricelist row -->
          </div> <!--end pricelist container-fluid-->
        </section> <!--end pricelist-section -->


         <div id="bg-interior">
           <div class="container-fluid"></div>
         </div> <!--end bg-interior-->


         <section class="hairproducts-section" id="hairproducts-section">
           <div class="container-fluid">
             <div class="row">
               <div class="col-sm"></div>
               <div class="col-sm-6">
                 <h2>Produkter</h2>
                 <p>I salongen erbjuder vi ett stort utbud av välkända hårprodukter från nedanstående varumärken.</p>
               </div>
               <div class="col-sm"></div>
             </div>

             <div class="row">
               <div class="col-md">
                 <div class="product-gallery">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/moroccanoil.png" class="img-fluid product" alt="Moroccanoil">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/prosebastian.png" class="img-fluid product" alt="Pro sebastian">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/uniqone.png" class="img-fluid product" alt="Uniq-one">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/american-crew.png" class="img-fluid product" alt="American crew">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/revion.png" class="img-fluid product" alt="Revion">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/lanza.png" class="img-fluid product" alt="Lanza">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/eleven-australia.png" class="img-fluid product" alt="Eleven australia">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/kerastase.png" class="img-fluid product" alt="Kerastase">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/matrix.png" class="img-fluid product" alt="Matrix">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/waterclouds.png" class="img-fluid product" alt="Waterclouds">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/maria-nila.png" class="img-fluid product" alt="Maria nila">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/loreal.png" class="img-fluid product" alt="Loreal">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/toppik.png" class="img-fluid product" alt="Toppik">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/renati.png" class="img-fluid product" alt="Renati">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/orofluido.png" class="img-fluid product" alt="Orofluido">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/olaplex.png" class="img-fluid product" alt="Olaplex">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/hardsomfan.png" class="img-fluid product" alt="Hårdsomfan">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/goldwell.png" class="img-fluid product" alt="Goldwell">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/gentlemen-of-sweden.png" class="img-fluid product" alt="Gentlemen of sweden">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/fudge.png" class="img-fluid product" alt="Fudge">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/fanola.png" class="img-fluid product" alt="Fanola">
                   <img src="<?php bloginfo('template_url'); ?>/assets/images/e46.png" class="img-fluid product" alt="E+46">
                 </div>
               </div>
             </div>
           </div>
         </section> <!--end hairproducts-section-->


         <section class="find-us-section" id="find-us-section">
           <div class="container-fluid">
             <div class="row">
               <div class="col-sm"></div>
               <div class="col-sm-6">
                 <h2 class="find-us-header">Hitta hit</h2>
                   <p>T-bana: Fruängen</p>
                   <p>Adress: Fruängsgången 5, 129 52 Hägersten</p>
               </div>
               <div class="col-sm"></div>
             </div>
           </div>
         </section> <!--end find-us-section-->


         <div class="google-maps-section" id="google-maps-section">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2037.8380780387304!2d17.961954116406844!3d59.285559281643614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f770ef5a71a27%3A0x52194083d5e277f4!2zRnJ1w6RuZ3Nnw6VuZ2VuIDUsIDEyOSA1MiBIw6RnZXJzdGVu!5e0!3m2!1ssv!2sse!4v1506204641644" allowfullscreen></iframe>
         </div> <!--end google-maps-section-->


         <section class="contact-us-section" id="contact-us-section">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm-6">
                <h2 class="contact-us-header">Kontakta oss</h2>
                <p>Det går bra att skriva till oss via vårt kontaktformulär.</p>
                <p><a id="tel-link-small" href="tel:08884584">Ring oss</a>&nbsp;för att boka eller avboka en befintlig tid.</p>
              </div>
              <div class="col-sm"></div>
            </div>
            <div class="row">
              <div class="col-sm"></div>
              <div class="col-sm-6">
                <div class="form-container">
                  <?php echo do_shortcode( '[contact-form-7 id="44" title="Contact form 1"]' ); ?> 
                </div>
              </div>
              <div class="col-sm"></div>
            </div>  
          </div>
        </section> <!--end contact-us-section-->    

<?php include'footer.php'; ?>