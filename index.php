<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>U11CS1090</title>
<link rel="icon" href="logopreview.png" type="image" />
<link rel="shortcut icon" href="logopreview.png" type="image" />
<script src="js/jquery-1.2.1.pack.js" type="text/javascript"></script>
	<script src="js/jquery-easing.1.2.pack.js" type="text/javascript"></script>
	<script src="js/jquery-easing-compatibility.1.2.pack.js" type="text/javascript"></script>
	<script src="js/coda-slider.1.1.1.pack.js" type="text/javascript"></script>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
		jQuery(window).bind("load", function() {
			jQuery("div#slider1").codaSlider()
			// jQuery("div#slider2").codaSlider()
			// etc, etc. Beware of cross-linking difficulties if using multiple sliders on one page.
		});
	</script>
	
	
<!--sa calendar-->
<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

function makeTwoChars(inp) {
        return String(inp).length < 2 ? "0" + inp : inp;
}

function initialiseInputs() {
        // Clear any old values from the inputs (that might be cached by the browser after a page reload)
        document.getElementById("sd").value = "";
        document.getElementById("ed").value = "";

        // Add the onchange event handler to the start date input
        datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
}

var initAttempts = 0;

function setReservationDates(e) {
        // Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
        // until they become available (a maximum of ten times in case something has gone horribly wrong)

        try {
                var sd = datePickerController.getDatePicker("sd");
                var ed = datePickerController.getDatePicker("ed");
        } catch (err) {
                if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
                return;
        }

        // Check the value of the input is a date of the correct format
        var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

        // If the input's value cannot be parsed as a valid date then return
        if(dt == 0) return;

        // At this stage we have a valid YYYYMMDD date

        // Grab the value set within the endDate input and parse it using the dateFormat method
        // N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
        var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

        // Set the low range of the second datePicker to be the date parsed from the first
        ed.setRangeLow( dt );
        
        // If theres a value already present within the end date input and it's smaller than the start date
        // then clear the end date value
        if(edv < dt) {
                document.getElementById("ed").value = "";
        }
}

function removeInputEvents() {
        // Remove the onchange event handler set within the function initialiseInputs
        datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
}

datePickerController.addEvent(window, 'load', initialiseInputs);
datePickerController.addEvent(window, 'unload', removeInputEvents);

//]]>
</script>

<!--sa error trapping-->
<script type="text/javascript">
function validateForm()
{
var x=document.forms["index"]["start"].value;
if (x==null || x=="")
  {
  alert("you must enter your check in Date(click the calendar icon)");
  return false;
  }
var y=document.forms["index"]["end"].value;
if (y==null || y=="")
  {
  alert("you must enter your check out Date(click the calendar icon)");
  return false;
  }
}
</script>
<script type="text/javascript">
function validateForm1()
{
var a=document.forms["contact"]["name"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter your Name");
  return false;
  }
var b=document.forms["contact"]["email"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter your Email");
  return false;
  }
var c=document.forms["contact"]["message"].value;
if (c==null || c=="")
  {
  alert("Pls. Enter your Message");
  return false;
  }
var atpos=b.indexOf("@");
var dotpos=b.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=b.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>

<!--sa galerry nga css-->
<link rel="stylesheet" href="css/style.css" />

<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<style type="text/css">
<!--
a img {border: none; }
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #006600;
	font-style:italic;
	text-decoration: none;
}
a:active {
	color: #006600;
	text-decoration: none;
}
.style1 {color: #000000}
-->
</style>
</head>

<body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l">
	<div style="margin-top: 225px; margin-right: 10px;">
	<a href="#1" class="cross-link">Home</a><br />

  <a href="#3" class="cross-link">Contact Us</a><br />
  <a href="#4" class="cross-link">About Us</a><br />
    <a href="admin_index.php">Login</a><br />
	</div>
	
	
	</div>
	<div class="r">
	
	
	
	
	<div class="right3">
  
    <div class="slider-wrap">
      <div id="slider1" class="csw">
        <div class="panelContainer">
          <div class="panel" title="Panel 1">
            <div class="wrapper">
              <div style="font-family:Arial, Helvetica, sans-serif;">
                <p><img src="newimages/IndexPic.png" alt="description" style="float: left; height: 210px;" /></p>
                 <p align="center"><strong>Welcome                       to BenueLinks                        Website!</strong></p>
                <p align="justify">BENUELINKS, &quot;Your number one choice in road transport; is hereTo provide safe, reliable, comfortable and affordable transport service.</&hellip;.<br />
                  <i>You are welcome on board, take a trip with us and you will never regret you did.</i></</p>
                <p align="justify"><br />
                </p>
              </div>
              <div>
                <div style="float: left; width: 374px; height: 224px; margin-top: -32px; margin-left: 7px;"><img src="img/c.png" alt="featured"  style="margin-top: -3px;"/></div>
                
              </div>
            </div>
          </div>
          <div class="panel" title="Panel 2">
            <div class="wrapper">
              <ul class="hoverbox">
                <a href="img/1.JPG" rel="facebox"><img src="img/1.JPG" alt="description" /></a> <a href="img/2.JPG" rel="facebox"><img src="img/2.JPG" alt="description" /></a> <a href="img/3.JPG" rel="facebox"><img src="img/3.JPG" alt="description" /></a> <a href="img/4.JPG" rel="facebox"><img src="img/4.JPG" alt="description" /></a> <a href="img/5.JPG" rel="facebox"><img src="img/5.JPG" alt="description" /></a> <a href="img/6.JPG" rel="facebox"><img src="img/6.JPG" alt="description" /></a> <a href="img/7.JPG" rel="facebox"><img src="img/7.JPG" alt="description" /></a> <a href="img/8.JPG" rel="facebox"><img src="img/8.JPG" alt="description" /></a> <a href="img/9.JPG" rel="facebox"><img src="img/9.JPG" alt="description" /></a> <a href="img/10.JPG" rel="facebox"><img src="img/10.JPG" alt="description" /></a> <a href="img/11.JPG" rel="facebox"><img src="img/11.JPG" alt="description" /></a> <a href="img/12.JPG" rel="facebox"><img src="img/12.JPG" alt="description" /></a> <a href="img/13.JPG" rel="facebox"><img src="img/13.JPG" alt="description" /></a> <a href="img/14.JPG" rel="facebox"><img src="img/14.JPG" alt="description" /></a> <a href="img/15.JPG" rel="facebox"><img src="img/15.JPG" alt="description" /></a> <a href="img/16.JPG" rel="facebox"><img src="img/16.JPG" alt="description" /></a> <a href="img/17.JPG" rel="facebox"><img src="img/17.JPG" alt="description" /></a> <a href="img/18.JPG" rel="facebox"><img src="img/18.JPG" alt="description" /></a> <a href="img/19.JPG" rel="facebox"><img src="img/19.JPG" alt="description" /></a> <a href="img/20.JPG" rel="facebox"><img src="img/20.JPG" alt="description" /></a>
              </ul>
            </div>
          </div>
          <div class="panel" title="Panel 3">
            <div class="wrapper">
              <div class="contact">
                <div class="cleft">
                  <form action="savecomment.php" method="post" onsubmit="return validateForm1()" name="contact">
                    <p>Name:<br />
                        <input name="name" type="text" class="ed" />
                        <br />
                      Email Address:<br />
                      <input name="email" type="text" class="ed" />
                      <br />
                      Messages:<br />
                      <textarea name="message" rows="8" cols="23" class="ed"></textarea>
                      <br />
                      <input name="Input" type="submit" value="Submit" id="button1" />
                    </p>
                  </form>
                </div>
                <div class="cright">
                  <div align="center"><img src="photos/Untitled-1.png" alt="ssdsds" width="400" height="225" /></div>
                  <div align="justify"><br />
                   If you have any questions, comments or concerns about our services, please don't hesitate to contact us. We ensure that we will make your trip here an enjoyable and pleasant experience.<br />
                    <br />
                    Telephone: +50(037)456-1606<br />
                    Telefax: +50(037) 709-0886<br />
                    Mobile: 08135057694<br />
                    Address: BENUE LINKS (NIG) LIMITED MAIN TERMINUS GBOKO ROAD, NEAR THE FOOD BASKET ROUNDABOUT, PMB 463 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel" title="Panel 4">
            <div class="wrapper">
              <div class="view1">
                <div align="justify"><img src="Untitled-1" alt="" style="float:right;" /> &nbsp;<span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;Benue  Links Nig. Ltd is one of the biggest transport companies in Nigeria, the  company is 100 percent owned by the state Government, the  head Office is situated along Gboko road near the foodbasket roundabout, Wurukum Makurdi, Benue State. The company has   branches in all the major cities across the country..<br />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Company took off in Feb 1988  with an initial fleet of only 10  burem buses offering transport services only within the state, The  company grew and expanded  across the country. Thus, by late 2000's  it has over 20 Marcopolo buses to boost its operations. The company now offers individuals and corporate organisations the opportunity to register   vehicles under the &quot;leased vehicle&quot; arrangement. Today, the company has about 900 vehicles under its fleet.</span></div>
              </div>
            </div>
          </div>
          
              <div id="wrapper">
                <div id="fullsize">
                  <div id="imgprev" class="imgnav" title="Previous Image"></div>
                  <div id="imglink"></div>
                  <div id="imgnext" class="imgnav" title="Next Image"></div>
                  <div id="image"></div>
                  <div id="information">
                    <h3></h3>
                    <p></p>
                  </div>
                </div>
                <div id="thumbnails">
                  <div id="slideleft" title="Slide Left"></div>
                  <div id="slidearea">
                    <div id="slider"></div>
                  </div>
                  <div id="slideright" title="Slide Right"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel" title="Panel 6">
            <div class="wrapper">
              <div class="amenitiesleft">
                <div align="justify">
                  
              </div>
              <div class="amenitiesright" align="center"> <a rel="facebox" href="mainamenities.php?id=1"><img src="amenities/SmIconAC.png" border="0" /></a> <a rel="facebox" href="mainamenities.php?id=2"><img src="amenities/SmIconBkfst.png" border="0" style="padding-left: 30px; padding-right: 30px;" /></a> <a rel="facebox" href="mainamenities.php?id=3"><img src="amenities/SmIconCocktail.png" border="0" /></a><br />
                  <a rel="facebox" href="mainamenities.php?id=4"><img src="amenities/SmIconFunction.png" border="0" /></a> <a rel="facebox" href="mainamenities.php?id=5"><img src="amenities/SmIconGen.png" border="0" style="padding-left: 30px; padding-right: 30px;" /></a> <a rel="facebox" href="mainamenities.php?id=6"><img src="amenities/SmIconLaundry.png" border="0" /></a><br />
                  <a rel="facebox" href="mainamenities.php?id=7"><img src="amenities/SmIconLongDist.png" border="0" /></a> <a rel="facebox" href="mainamenities.php?id=8"><img src="amenities/SmIconRest.png" border="0" style="padding-left: 30px; padding-right: 30px;" /></a> <a rel="facebox" href="mainamenities.php?id=9"><img src="amenities/SmIconShower.png" border="0" /></a><br />
                <a rel="facebox" href="mainamenities.php?id=10"><img src="amenities/SmIconTaxi.png" border="0" /></a> <a rel="facebox" href="mainamenities.php?id=11"><img src="amenities/SmIconTv.png" border="0" style="padding-left: 30px; padding-right: 30px;" /></a> <a rel="facebox" href="mainamenities.php?id=12"><img src="amenities/SmIconWiFi.png" border="0" /></a> </div>
            </div>
          </div>
          <div class="panel" title="Panel 7">
            <div class="wrapper">
              <!--map-->
              <iframe width="680" height="428" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Tamera+plaza+inn+Bacolod+City,+Western+Visayas,+Philippines&amp;aq=&amp;sll=10.662189,122.948567&amp;sspn=0.004955,0.010568&amp;ie=UTF8&amp;hq=Tamera+plaza+inn&amp;hnear=Bacolod+City,+Negros+Occidental,+Western+Visayas,+Philippines&amp;ll=10.662658,122.947693&amp;spn=0.008819,0.006295&amp;output=embed"></iframe>
              <br />
            </div>
          </div>
        </div>
        <!-- .panelContainer -->
      </div>
      <!-- #slider1 -->
</div>
  </div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother">
  
  <div class="reservation">
	  <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION</strong></div>
	<div style="margin-top: 14px;">
	<form method="post" action="selectroom.php" name="index" onsubmit="return validateForm()">
  
      <label style="margin-left: 8px;">Start Date : </label>
     <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="start" id="sd" value="" maxlength="10" readonly />
      <BR />
	 <label style="margin-left: 15px;">End Date : </label>
      <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="end" id="ed" value="" maxlength="10" readonly />
	  <BR />
	  
	  <input name="" type="submit" value="Check Availability" id="button" />
  </form>
    <div align="center"><br />
      <a rel="facebox" href="modifyindex.php">Modify</a> / <a href="cancelindex.php">Cancel</a> Reservation   </div>
	</div>
	
	
	</div>
  
 </div>
  
  
  
  
  
  
</div>

<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright � u11cs1090 project All Rights reserved</div>
<script type="text/javascript" src="compressed.js"></script>
<script type="text/javascript">
	$('slideshow').style.display='none';
	$('wrapper').style.display='block';
	var slideshow=new TINY.slideshow("slideshow");
	window.onload=function(){
		slideshow.auto=true;
		slideshow.speed=4;
		slideshow.link="linkhover";
		slideshow.info="information";
		slideshow.thumbs="slider";
		slideshow.left="slideleft";
		slideshow.right="slideright";
		slideshow.scrollSpeed=4;
		slideshow.spacing=4;
		slideshow.active="#fff";
		slideshow.init("slideshow","image","imgprev","imgnext","imglink");
	}
</script>
</body>
</html>
