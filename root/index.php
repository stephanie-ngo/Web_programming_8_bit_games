<!DOCTYPE html>
<html>
<head>
    <title>Project Part 1 - Online Store Product Page</title>
    <link rel="stylesheet"  href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
       <?php include('header.php'); ?>

<!--
    block for index page
-->
    <!--
      Promotion banner
      -->
    <div class="promotion" style="width: 100vw; height: 50px; background-color: rgba(137, 142, 146, 1);">
        <a class="text" href="#">CHECK OUR DISCOUNTS FOR STUDENTS!</a>
        <a class="cta" href="#"><button>Learn More</button></a>
    </div>

        <!--The grid box holding the featured products-->
       
            <div class="grid-featured">
                    <div class="grid-element" id="nintendo"><a href="nintendo.html"><img src="images/nintendo2.png" alt="Nintendo" class="desaturate thumbnail" style="width: 300px; height: 300px">
                        <div class="content">
                            <div class="text">Nintendo</div>
                        </div></a>
                    </div> <!--Photo by <a href="https://unsplash.com/@16bitspixelz?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Kamil S</a> on <a href="https://unsplash.com/s/photos/nintendo?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>-->
                    
                    <div class="grid-element" id="playstation"><a href="playstation.html"><img src="images/playstation.jpg" alt="Playstation" class="desaturate thumbnail" style="width: 300px; height: 300px">
                        <div class="content">
                            <div class="text">Playstation</div>
                        </div></a>
                    </div> <!--Photo by <a href="https://unsplash.com/@helloimnik?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Hello I'm Nik</a> on <a href="https://unsplash.com/s/photos/playstation-1?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>-->
                    
                    <div class="grid-element" id="xbox"><a href="xbox.html"><img src="images/xbox2.png" alt="Xbox" class="desaturate thumbnail" style="width: 300px; height: 300px">
                        <div class="content">
                            <div class="text">Xbox</div>
                        </div></a>
                    </div><!--Photo by <a href="https://unsplash.com/@christaljaard?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Chris Taljaard</a> on <a href="https://unsplash.com/s/photos/xbox-360?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>-->
                    
                    <div class="grid-element" id="atari"><a href="atari.html"><img src="images/atari2.png" alt="Atari" class="desaturate thumbnail" style="width: 300px; height: 300px">
                        <div class="content">
                            <div class="text">Atari</div>
                        </div></a>
                    </div> <!--https://media.wired.com/photos/5cb1174e4af32a21e8b0eff4/master/w_2560%2Cc_limit/WI050119_GL_BenchmarkAtari_01.jpg-->
                    
                    <div class="grid-element" id="sega"><a href="sega.html"><img src="images/sega2.png" alt="Sega" class="desaturate thumbnail" style="width: 300px; height: 300px">
                        <div class="content">
                            <div class="text">Sega</div>
                        </div></a>
                    </div><!--Photo by <a href="https://unsplash.com/@usualmorals?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Taylor R</a> on <a href="https://unsplash.com/s/photos/sega?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>-->
                    
                    <div class="grid-element" id="repair"><a href="repair.html"><img src="images/RepairParts2.png" alt="Repair" class="desaturate thumbnail" style="width: 300px; height: 300px">
                        <div class="content">
                            <div class="text">Repair</div>
                        </div></a>
                    </div> <!-- Photo founded in https://medium.com/@unmakr/lets-dive-inside-the-original-gameboy-8cd953a4ff83#.5c9srlc0t-->
                    
                    <div class="grid-element" id="grid-element-peripherals"><a href="peripherals.html"><img src="images/peripherals2.png" alt="Peripherals" class="desaturate thumbnail" style="width: 300px; height: 300px">
                        <div class="content">
                            <div class="text">Peripherals</div>
                        </div></a>
                    </div><!--Photo by <a href="https://unsplash.com/@helloimnik?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Hello I'm Nik</a> on <a href="https://unsplash.com/s/photos/videogame-peripherals?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>-->
                    
                    <div class="grid-element" id="games"><a href="games.html"><img src="images/games.png" alt="Games" class="desaturate thumbnail" style="width: 300px; height: 300px">
                        <div class="content">
                            <div class="text">Games</div>
                        </div></a>
                    </div><!--Photo by <a href="https://unsplash.com/@mills_digital_imaging?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Adam Mills</a> on <a href="https://unsplash.com/s/photos/nintendo-games?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>-->    
            </div>
        

        <!--
          footer
          -->
        <div class="footer">
            <div class="footertext">
              <p>
              <h3>Contact Information</h3>
              </p>
              <p>Email: CST8285@algonquinlive.com</p>
              <p>Phone: 613-555-5555</p>
              <div class="social">
                <a href="#">INSTAGRAM </a>
                <a href="#">FACEBOOK </a>
                <a href="#">TWITTER </a>
              </div>
            </div>
            
        </div>
</body>
</html>