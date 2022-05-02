<main>
      <!-- tekstinis įrašas -->

    <section class="hero">
        <div class="container">
            <h2>Kostiumas neatsiejama personažo charakterio dalis</h2>
        </div>
    </section>

      <!-- slideshow nežinau kaip padaryti, kad rodytų-->
    <div class="slideshow-container">
        <div class="container">

    <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
    <div class="gradient ">
        <img src="../app/img/erorai.jpg" alt="Erorai">
    </div> 
        <div class="text"><h1>SAVA kostiumų dizainas</h1><h3>"įgyvendinkime kūrybinę viziją kartu!"</h3></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
    <div class="gradient ">
        <img src="../app/img/briliantadvencers.jpg" alt="Briliant advenčers">
    </div>
        <div class="text"><h1>SAVA kostiumų dizainas</h1><h3>"įgyvendinkime kūrybinę viziją kartu!"</h3></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
    <div class="gradient ">    
        <img src="../app/img/briliantadvencers3.jpg" alt="Briliant advenčers">
    </div>    
        <div class="text"><h1>SAVA kostiumų dizainas</h1><h3>"įgyvendinkime kūrybinę viziją kartu!"</h3></div>
  </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
    <div class="gradient ">
        <img src="../app/img/plutonas.jpg" alt="Putoas">
    </div>
        <div class="text"><h1>SAVA kostiumų dizainas</h1><h3>"įgyvendinkime kūrybinę viziją kartu!"</h3></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
<div class="gradient ">
    <img src="../app/img/plutonas3.jpg" alt="Plutonas">
</div>
    <div class="text"><h1>SAVA kostiumų dizainas</h1><h3>"įgyvendinkime kūrybinę viziją kartu!"</h3></div>
</div>
</div>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div> 

      <!-- sub navigacija -->

    <section class="sub-nav">
    <nav class="sub-nav">
        <ul class="container">
            <li><i class="fa-solid fa-table-cells-large"></i> <a href="#">Projektai</a></li>
        </ul>
    </nav>
    </section>

     <!-- projektų santrauka -->

    <section class="lastpro">
        <div class="container flex-container">
            <div class="projektai">
                <div class="nukreipimas">
                    <a href="#"></a><i class="fa-solid fa-magnifying-glass-plus"></i>
                    <img src="../app/img/briliantadvencers2.jpg" alt="Briliant advenčers">
            </div>
            <div class="proinfo">
                <h2>Briliant advenčers</h2> 
                <p>Premjera 2021 gegužės 7 d.<br>Meno ir mokslo laboratorija</p>
              </div>
            </div>
            <div class="projektai">
                <div class="nukreipimas">
                    <a href="#"></a><i class="fa-solid fa-magnifying-glass-plus"></i>
                    <img src="../app/img/plutonas2.jpg" alt="Plutonas">
            </div>
            <div class="proinfo">
                <h2>Plutonas</h2>
                <p>Premjera 2020 vasario 21 d.<br>Lietuvos Etnokosmologijos muziejuje</p>
                </div>
            </div>
            <div class="projektai">
                <div class="nukreipimas">
                    <a href="#"></a><i class="fa-solid fa-magnifying-glass-plus"></i>
                    <img src="../app/img/zuvedra2.jpg" alt="Žuvėdra">
                </div>
            <div class="proinfo">
                <h2>Žuvėdra (Remix)</h2>
                <p> Premjera 2019 spalio 19 d.<br>Menų spaustuvė</p>
            </div>
            </div>
        </div>
    </section>

     <!-- sub navigacija --> 
     <!-- komentarai iš tinklų -->
     <section class="nav-com">
        <div class="container flex-container">
            <div class="įrašai">
                <a href="#"><i class="fas fa-rss"></i>Blogo įrašai</a>
                <div class="langelis">
            <div class="postas">       
                <h3>Lorem ipsum dolor sit amet consectetur </h3><h4>paskelbta <time><?php echo date('d F, Y'); ?></time></h4> <p>adipisicing elit. Nisi a labore eos quo voluptate vero quis sequi libero sed, commodi odio, culpa eligendi debitis magnam ipsam enim! Obcaecati, maxime et?<br><a href="#">Skaityti daugiau>></a></p>
            </div>
            </div>
        </div>
            <div class="įrašai">
                <a href="#"><i class="fab fa-twitter"></i>Tweet'ai</a>
        <div class="langelis">
            <div class="tweetas-1">
                <p><span class="bold"><?php date('Y-m-d H:i:s',strtotime('-24 hours')); echo "prieš 24 val." ?></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia repellat officia culpa  expedita perferendis rerum ex molestias a excepturi commodi</p>
            </div>      
            <div class="tweetas-2">    
                <p><span class="bold">prieš vieną dieną</span>  ullam amet in quo blanditiis, asperiores repellendus odio consequatur pariatur!</p>
            </div>    
            </div>
            </div>
            <div class="įrašai">
                <a href="#"><i class="fa-solid fa-at"></i>Sekti</a>
                <div class="langelis">
                <h2>Prenumeruokite naujienlaiškį ir viską sužinokite pirmas!</h2>
                <form>
                    <input type="text" placeholder="Jūsų el.pašto adresas" name="mail" required>
                    <input type="submit" value="Sekti">
                  </form>
                </div>
            </div>
        </div>
    </section>
</main>