<?php
$pid = $_GET['pid'];
require_once "settings.php";
$connection = new mysqli(DB_HOST, DB_USER_NAME, DB_PASS, DB_NAME);
if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
}
$query = "select id,category,subcategory,company,model,title,url from master where id=$pid";
if($result = $connection->query($query)) {
  $data = $result->fetch_assoc();

  $id = $pid;
  $category = $data['category'];
  $subcategory = $data['subcategory'];
  $company = $data['company'];
  $model = $data['model'];
  $title = $data['title'];
  $page_url = $data['url'];
} else {
  //wrong pid which will be redirected to homepage.
  header('Location: ' . BASE_URL);
  exit();
}
$today = date("F j, Y");
//Create all variables necessary in the head section
$meta_desc = "Discover $title with Technical Specifications and sample photos taken using the camera. Find lowest online price of $title in India as on $today";
$page_title = "$title Price in India with Sample Photos as on $today valid in Bangalore, Chennai, Mumbai, Delhi, Hyderabad and Pune";

//For BreadCrumbs
if($subcategory == 'digital-camera') $subcat_display = "Digital Cameras";
else if($subcategory == 'digital-slr-camera') $subcat_display = "Digital SLR Cameras";
$active_crumb = "$title ";
?>
<?php
include "head.php";
?>
<body> 
  <div class="container">
<?php include "menu.php"; ?>
<?php include "breadcrumb.php";?>
    <div class="row">
      <?php include "single_sidebar.php";?>
    <div class="span9">
      <div class="row">
        <div class="span3">
          <div class="row">
            <div class="span3">
              <div class="thumbnail">
              <img class="" src="http://img8a.flixcart.com/image/camera/v/p/v/nikon-coolpix-l27-point-shoot-275x275-imadg4kfqby5bjss.jpeg"  alt="Buy Nikon Coolpix L27 Point &amp; Shoot: Camera" title="Nikon Coolpix L27 Point &amp; Shoot: Camera">
              <div class="caption"><small>Sony Cybershot 2100 xyz point &amp; shoot camera digital</small></div>
              </div>
            </div>
          </div>
      <!--<div class="row">
        <div class="span3">
          <div class="text-center"><small>Sony Cybershot 2100</small></div>
        </div>
      </div> -->

    </div>
    <div class="span6">
      <h4>Sony Cyber-shot S5000 Point &amp; Shoot</h4><!-- Place this tag where you want the +1 button to render. -->
      <ul class="inline">
        <li>
          <div class="g-plusone"></div>

          <!-- Place this tag after the last +1 button tag. -->
          <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
          </script>
        </li>
        </ul>

    <ul class="inline">
      <li><i class="icon-ok-circle"></i> 12 MP Camera</li>
      <li><i class="icon-ok-circle"></i> 12 MP Camera</li>
      <li><i class="icon-ok-circle"></i> 12 MP Camera</li>
      <li><i class="icon-ok-circle"></i> 12 MP Camera</li>
    </ul>
    <p>The lowest Price of Canon Cybershot S1500 is <span class="bigfont boldfont bestprice">Rs. 5600</span>.</p>
  </div>
</div>
<div class="row">
  <div class="span9 mainsection">
    <h5>Key Features of Canon Sybershot S5300</h5>
    <ul>
      <li>
        16 MP camera
      </li>
      <li>3.7 Inch Display LCD</li>
      <li>CMOS Sensor for better clarity</li>
      <li>HD Video recording Capability</li>
      <li>10X optical zoom</li>
      <li>Image Stabilization</li>
      <li>Best in Class Interfaces.</li>
    </ul>
  </div>
</div>
<div class="row">
  <div class="span9 mainsection">
    <h5>Product Description of Canon Sybershot S5300</h5>
   <p>The SX150 IS digital camera will be an exciting buy if you are a photography enthusiast. This Canon point and shoot camera has a focal length of 5 - 60mm, with a 35 mm equivalent focal length of 28 - 336 mm. The SX150 IS has a 12x optical zoom and 4x digital zoom, which in combination, let you zoom up to 48x closer to your subject.
   With the CCD image sensor of this Canon PowerShot digital camera, you can take images at 14.1 megapixel resolution. With full Manual controls and HD movie recording at 1280 x 720 dot pixels, this camera is feature packed to your heart's content.

   The Canon PowerShot SX150 IS weighs 306 g and has a sophisticated metal body design. This bridge camera has ergonomic contours that fit comfortably in your hands. The control buttons on the back panel are conveniently accessible while shooting, making this an easy-to-use camera.</p>
 </div>
</div>
<div class="row">
  <div class="span9 mainsection">
    <ul id="myTab" class="nav nav-tabs">
      <li class=""><a href="#techspec" data-toggle="tab">Technical Specification</a></li>
      <li class="active"><a href="#photos" data-toggle="tab">Sample Photos</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade" id="techspec">
         <h5>Technical Specification of Canon Sybershot S5300</h5>
    <table class="table table-bordered table-condensed">
<tbody><tr><th colspan="2">Display</th></tr><tr><td class="mspkey">Type:</td><td class="mspvalue">Super AMOLED</td></tr><tr><td class="mspkey">Size:</td><td class="mspvalue">5.55 Inches</td></tr><tr><td class="mspkey">Resolution:</td><td class="mspvalue">HD, 1280 x 720 Pixels</td></tr><tr><td class="mspkey">Colors:</td><td class="mspvalue">16 M</td></tr><tr><th colspan="2">Camera</th></tr><tr><td class="mspkey">Primary Camera:</td><td class="mspvalue">Yes, 8 Megapixel</td></tr><tr><td class="mspkey">Secondary Camera:</td><td class="mspvalue">Yes, 1.9 Megapixel</td></tr><tr><td class="mspkey">Video Recording:</td><td class="mspvalue">Yes, 1920 x 1080, 30 fps</td></tr><tr><td class="mspkey">Flash:</td><td class="mspvalue">LED</td></tr><tr><td class="mspkey">Other Camera Features:</td><td class="mspvalue">Auto Focus, Geo-tagging, Face and Smile Detection, Touch Focus, Image Stabilization, Image Editor</td></tr><tr><td class="mspkey">HD Recording:</td><td class="mspvalue">HD, Full HD</td></tr><tr><th colspan="2">Dimensions</th></tr><tr><td class="mspkey">Size:</td><td class="mspvalue">80.5 x  151.1 x  9.4 mm</td></tr><tr><td class="mspkey">Weight:</td><td class="mspvalue">180 g</td></tr><tr><th colspan="2">Battery</th></tr><tr><td class="mspkey">Type:</td><td class="mspvalue">Li-Ion, 3100 mAh</td></tr><tr><th colspan="2">Memory and Storage</th></tr><tr><td class="mspkey">Internal:</td><td class="mspvalue">16 GB</td></tr><tr><td class="mspkey">Expandable Memory Slot:</td><td class="mspvalue">microSD, upto 64 GB</td></tr><tr><th colspan="2">Internet &amp; Connectivity</th></tr><tr><td class="mspkey">Internet Features:</td><td class="mspvalue">Email</td></tr><tr><td class="mspkey">GPRS:</td><td class="mspvalue">Yes</td></tr><tr><td class="mspkey">3G:</td><td class="mspvalue">Yes, 21 Mbps HSDPA, 5.76 Mbps HSUPA</td></tr><tr><td class="mspkey">Edge:</td><td class="mspvalue">Yes</td></tr><tr><td class="mspkey">Wifi:</td><td class="mspvalue">Yes, 802.11 a/b/g/n</td></tr><tr><td class="mspkey">Tethering:</td><td class="mspvalue">Wi-fi Hotspot</td></tr><tr><td class="mspkey">USB connectivity:</td><td class="mspvalue">Yes, micro USB, v2</td></tr><tr><td class="mspkey">Bluetooth:</td><td class="mspvalue">Yes, v4</td></tr><tr><td class="mspkey">GPS Support:</td><td class="mspvalue">Yes, A-GPS, GLONASS with Google Maps</td></tr><tr><td class="mspkey">Audio Jack:</td><td class="mspvalue">3.5 mm</td></tr><tr><td class="mspkey">DLNA:</td><td class="mspvalue">Yes</td></tr><tr><th colspan="2">Multimedia</th></tr><tr><td class="mspkey">Music Player:</td><td class="mspvalue">Yes, Supports MP3, MIDI, eACC+, WAV, FLAC</td></tr><tr><td class="mspkey">Video Player:</td><td class="mspvalue">Yes, Supports MP4, DivX, XviD, WMV, AVI, FLV, MKV, WebM, H.264, H.263, HD Video Playback</td></tr><tr><td class="mspkey">FM:</td><td class="mspvalue">Yes</td></tr><tr><td class="mspkey">Ringtone:</td><td class="mspvalue">MP3, WAV</td></tr><tr><th colspan="2">Platform</th></tr><tr><td class="mspkey">OS:</td><td class="mspvalue">Android v4.1 (Jelly Bean)</td></tr><tr><td class="mspkey">Java:</td><td class="mspvalue">Yes</td></tr><tr><td class="mspkey">User Interface:</td><td class="mspvalue">TouchWiz</td></tr><tr><td class="mspkey">Processor:</td><td class="mspvalue">1.6 GHz Cortex-A9</td></tr><tr><td class="mspkey">Graphics:</td><td class="mspvalue">Mali-400MP</td></tr><tr><td class="mspkey">Operating Freq:</td><td class="mspvalue">GSM - 850, 900, 1800, 1900; UMTS - 2100</td></tr><tr><th colspan="2">General Features</th></tr><tr><td class="mspkey">Form:</td><td class="mspvalue">Bar</td></tr><tr><td class="mspkey">SIM:</td><td class="mspvalue">Single SIM, GSM</td></tr><tr><td class="mspkey">Keypad:</td><td class="mspvalue">No</td></tr><tr><td class="mspkey">Call Features:</td><td class="mspvalue">Loudspeaker</td></tr><tr><td class="mspkey">Touch Screen:</td><td class="mspvalue">Yes, Capacitive</td></tr><tr><td class="mspkey">Business Features:</td><td class="mspvalue">Document Viewer, Document Editor, Pushmail</td></tr><tr><th colspan="2">Other Features</th></tr><tr><td class="mspkey">Call Memory:</td><td class="mspvalue">Yes</td></tr><tr><td class="mspkey">SMS Memory:</td><td class="mspvalue">Yes</td></tr><tr><td class="mspkey">Sensors:</td><td class="mspvalue">Accelerometer, Proximity Sensor, Compass, Gyro Sensor, Barometer, Geo-magnetic, Light Sensor</td></tr><tr><td class="mspkey">Phonebook Memory:</td><td class="mspvalue">Yes</td></tr><tr><td class="mspkey">Additional Features:</td><td class="mspvalue">S Pen, Air View, Popup Note, Quick Command, Easy Clip, Handwritten Notes via Email, S Note, Voice Input</td></tr><tr><td class="mspkey">Important Apps:</td><td class="mspvalue">Twitter, Samsung Apps</td></tr><tr><td class="mspkey">SAR Value:</td><td class="mspvalue">0.171 W/Kg</td></tr></tbody></table>
      </div>
      <div class="tab-pane fade in active" id="photos">
        <h5>Photos taken in Canon Powershot S5000</h5>
        <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="/images/bootstrap-mdo-sfmoma-01.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="/images/bootstrap-mdo-sfmoma-02.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="/images/bootstrap-mdo-sfmoma-03.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>
      </div>

    </div>
   
 </div>
</div>
<?php include "comments.php"; ?>

<div class="row">
  <div class="span9 mainsection">
    <h5>Disclaimer &amp; Notes</h5>
    <ul>
      <li>The latest price of Canon Powershot is collected from MySmartPrice as on 28th February 2013.</li>
      <li>If you find any discrepency in the Technical Specification or price information of Canon Powershot, Please let us know.</li>
      <li>The Latest best price of Canon Powershot may be different now. Please validate with the shop before purchasing</li>
      <li>We do not own any rights over the images or information showed. No Copywrite intended</li>
    </ul>
  </div>
</div>

</div>
</div>
<div class="breadcrumb text-center">
  The Latest Price of Canon Powershot in India is Rs. 6500.
</div>
<?php include "footer.php"; ?>
</div> <!-- Container -->
</body>
</html>
