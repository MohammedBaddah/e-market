<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8"/>
    <!-- compatibilitiy Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <!--first Mobile Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHOPE</title>
</head>
<body onload="hideLoading()" style="font-family: Segoe UI!important;">

<style>
    .ui-loader {
        display: none !important;
    }
    .loading-page{
        background-color: #ffffff;
        position: fixed;
        left: 0;
        bottom: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 10002;
        color: #ff6600;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .loading-img{
        max-width: 350px;
        position: fixed;
    }
</style>

<div class="loading-page">
    <img src="vendor/ايقونات الكاتوجريز/1.png" class="loading-img">
</div>    

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href='./vendor/bootstrap/css/bootstrap.min.css' />
<link rel="stylesheet" href="./vendor/bxslider-4-4.2.12/dist/jquery.bxslider.css" />

<link rel="stylesheet"  href="css/style.css"/>
<link rel="stylesheet"  href="css/NewStyle.css"/>

<div id="mainPage">

<!-- navBottom navBottom navBottom navBottom --> 
<div class="tab tabcon fixed-bottom text-muted">
    <div class="tab__link  ">                          
  <button class="tablinks  active" onclick="opentabs(event, 'Control')"> <i class="fa fa-cogs" aria-hidden="true"></i> <span class="nav__text d-none d-md-block">Control</span></button>    
  </div>
                                       
    <div class="tab__link ">
 <button class="tablinks" onclick="opentabs(event, 'Discount')">  <i class="fas fa-tags" aria-hidden="true"></i> <span class="nav__text d-none d-md-block">Discount</span></button>
  </div>

    <div class="tab__link ">                              
        <button class="tablinks" onclick="opentabs(event, 'support')"> <i class="fa fa-envelope"></i> <span class="nav__text d-none d-md-block">Support</span></button>
     </div>
    
    <div class="tab__link ">               
 <button class="tablinks" onclick="opentabs(event, 'cart')"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="nav__text d-none d-md-block">My Cart</span></button>
 </div>

     <div class="tab__link "> 
        <button class="tablinks" id="defult" onclick="opentabs(event, 'home'); redrawSlider();"><i class="fa fa-home" aria-hidden="true"></i> <span class="nav__text d-none d-md-block">Home</span></button>
      </div>
</div>
    


<!-- home    home    home    home-->
<div id="home" class="tabcontent">
    
<!-- navTop   navTop   navTop   navTop-->    
<nav class="nav navbar navbar-fixed-top myNavBar">
    <div class="container-fluid " >
        <div class="d-flex justify-content-between align-items-center ">
            <img src="vendor/ايقونات الكاتوجريز/11.png" class="rounded-circle p-1" 
                   style="width: 50px; ">  
            <a href="#" title="Go Homepage" style="text-decoration: none;">
                <h4 class="font-weight-normal ml-md-3" style="color: #1887b8; color: #ea5d00; margin: auto;">SHOPE</h4></a>
        </div>
        
        <div class="">
            <button class=" btn btn-warning rounded bconlog" onclick="document.getElementById('login1').style.display='block'" 
                    style="width:auto; color: #ffffff; font-weight: 600;">Login</button>
            <!--<span style="font-size:30px;cursor:pointer; color: #ff6600; " onclick="openSideNav()">&#9776;</span>
            <span style="font-size:30px;cursor:pointer; color: #ff6600;" onclick="openothersidenav()" class="fa fa-filter"></span>-->
        </div>
        
    </div>
</nav>

    <br>
    <div class="wrapper" style="height: 100%;">
        <ul id="slider-area">
            <li style="background-image: url(vendor/TB1TAdKeuH2gK0jSZFEXXcqMpXa-990-400.jpg)">
                
            </li>
            <li style="background-image: url(vendor/TB1x8x9eEY1gK0jSZFMXXaWcVXa-990-400.jpg)">
                
            </li>
            <li style="background-image: url(vendor/TB1xqocXlFR4u4jSZFPXXanzFXa-990-400.jpg)">
                
            </li>
        </ul>    
    </div>
    
<div class="container">
  <div class="media border p-3 iconsHome">
    <div class="media-body">
        <section class="features text-center ">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="feat hvr-buzz-out">
                        <span class="fa fa-rocket float-left roc" aria-hidden="true"></span>
                        <h6 class="iconDesc">Fast delevery</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feat hvr-rotate">
                        <span class="fa fa-headphones float-left roc"  aria-hidden="true"></span>
                        <h6 class="iconDesc">online support</h6>       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feat hvr-rotate">
                        <span class="fa fa-align-justify float-left roc"  aria-hidden="true"></span>
                        <h6 class="iconDesc">Money guarantee</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feat hvr-bounce-in">
                        <span class=" fa fa-rocket float-left roc" aria-hidden="true"></span>
                        <h6 class="iconDesc">Will Documented</h6>  
                    </div>
                </div>
            </div>
        </section>            
    </div>
  
  </div>
    <br>
  <style>
      .catRow .col-6{
          margin-bottom: 18px;
      }
      .catRow img{
          margin-bottom: 10px;
          box-shadow: 0px 0px 4px 0.5px #666666;
          border-radius: 17px;
      }
  </style>
    <section class=" about text-center"> 
        <div class="container-fluid">
            <div class="row catRow">
                <div class="col-lg-3 col-6" >
                    <a href="./firsvendor.php" ><img src="img/ايقونات اخر شي/15.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">Restaurants</h6>
                    </div>          
                </div>
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/9.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">Clothes & Fashion</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/6.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">Electronic Components</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/2.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">Accessories</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/3.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">Beauty & Care</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/4.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">Shoes and bags</h6>
                    </div>
                </div>   
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/1.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted"> Antiques, Gifts & Toys</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/12.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">kitchen tools</h6>
                    </div>
                            
                </div>
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/11.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">Honey</h6>
                    </div>
                </div>  
                
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/8.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">Furniture</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/14.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">Sport Tools</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" >
                    <a href="#"><img src="img/ايقونات اخر شي/10.png" class="imgcat"></a>
                    <div class="caption">
                        <h6 class="text-muted">Medicines</h6>
                    </div>
                </div>
                
            </div>
    </section>
  </div>
  <br>
  <br>
</div>

    
<!-- cart    cart    cart    cart-->
<div id="cart" class="tabcontent">
        
<!-- navTop   navTop   navTop   navTop-->    
<nav class="nav navbar navbar-fixed-top myNavBar" style="height: 66px;">
        <div class="container-fluid d-flex justify-content-between align-items-center ">
            <h4 class="" style="color: #1887b8; color: 
                #ea5d00; margin: auto; font-weight: 600;">My Cart</h4>
        </div>
    
</nav>

  <div class="d-flex flex-column justify-content-center align-items-center m-auto">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <img src="img/undraw_empty_cart_co35.svg" style="max-width: 300px">
      <br>
      <br>
      <p class="text-muted">Ooops, Empty cart</p>
      <br>
      <br>
      <br>
      <br>
      
    </div>
</div> 


<!-- support    support    support    support-->
<div id="support" class="tabcontent">
    <nav class="nav navbar navbar-fixed-top myNavBar" style="height: 66px;">
        <div class="container-fluid d-flex justify-content-between align-items-center ">
            <h4 class="" style="color: #1887b8; color: 
                #ea5d00; margin: auto; font-weight: 600;">Support</h4>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    
    <div class="container text-center">

        <img src="img/undraw_contact_us_15o2 (1).svg" class="mb-3" style="width: 300px">
        
        <h2>We are here to hear you!</h2>
        <p class="lead">Feel Free to Contact Us </p>
        <br>
        <!--Start Contact Form-->
        <form>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control mb-2" id="name" placeholder="Enter name" name="name">
                    <input type="text" class="form-control mb-2" id="email" placeholder="Enter email" name="email">
                    <input type="number" class="form-control mb-2" id="number" placeholder="Enter phone number" name="number">
                </div>
                <div class="col-md-6 ">
                    <textarea class="form-control mb-2 btcon" placeholder="Enter masseage" name="mass"></textarea>
                    <button type="submit" class="btn mt-3 btn-lg btn-block botcon" 
                            style="background-color: #ff6600; color: #ffffff;">Submit</button>
                </div>
            </div>
        </form>
        <!--End Contact Form-->
    </div>    
    <br>
    <br>
    <br>
    <br>
</div>

<!-- Discount    Discount    Discount    Discount-->
<div id="Discount" class="tabcontent">
    <nav class="nav navbar navbar-fixed-top myNavBar" style="height: 66px;">
        <div class="container-fluid d-flex justify-content-between align-items-center ">
            <h4 class="" style="color: #1887b8; color: 
                #ea5d00; margin: auto; font-weight: 600;">Discounts</h4>
        </div>
    </nav>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <img src="img/undraw_discount_d4bd.svg" style="margin-top: 200px; max-width: 350px">
        <br>
        <br>
        <p class="text-muted">No discounts available :(</p>
    </div>
    
</div>


<!-- Control    Control    Control    Control-->
<div id="Control" class="tabcontent">
    
    
    <div id="mainControl" class="container-fluid p-0 position-absolute">
        <nav class="nav navbar navbar-fixed-top myNavBar" style="height: 66px;">
            <div class="container-fluid d-flex justify-content-between align-items-center ">
                <h4 class="" style="color: #1887b8; color: 
                    #ea5d00; margin: auto; font-weight: 600;">SHOPE</h4>
            </div>
        </nav>
        <div class="pl-5 pr-5  text-center">
            <img src="vendor/ايقونات الكاتوجريز/11.png" class="rounded-circle mt-5  pt-4" style="max-width: 200px;">

            <p class="text-muted text-center pl-4 pr-4 pt-3 pb-1">Copyright &COPY; 2020 SHOPE Company, All rights reserved. </p>

        </div>

        <div class="container d-flex flex-column justify-content-center controlList pl-4 pr-4">
            <div class="d-flex flex-column justify-content-around">
                <a href="#" class="popMneuBtn" onclick="openControlTab('#myProfile')"><i class="fas fa-user-alt"></i>
                    <span style="padding: 0px 0px 0px 30px;">My Profile</span>
                    <i class="fa fa-chevron-right ml-auto" style="font-size: medium; color:rgba(0, 0, 0, 0.38);"></i></a>
                    
                <a href="#" class="popMneuBtn" onclick="openControlTab('#mOrders')"><i class="fas fa-tasks "></i>
                    <span style="padding: 0px 0px 0px 30px;">Manage Orders</span>
                    <i class="fa fa-chevron-right ml-auto" style="font-size: medium; color:rgba(0, 0, 0, 0.38);"></i></a>
                    
                <a href="#" class="popMneuBtn" onclick="openControlTab('#myLocations')"><i class="fas fa-map-marker-alt"></i>
                    <span style="padding: 0px 0px 0px 35px;">My Locations</span>
                    <i class="fa fa-chevron-right ml-auto" style="font-size: medium; color:rgba(0, 0, 0, 0.38);"></i></a>
                    
                <a href="#" class="popMneuBtn" onclick="openControlTab('#aboutComp')"><i class="fas fa-info-circle"></i>
                    <span style="padding: 0px 0px 0px 30px;">About SHOPE</span>
                    <i class="fa fa-chevron-right ml-auto" style="font-size: medium; color:rgba(0, 0, 0, 0.38);"></i></a>
                    
                <a href="#" class="popMneuBtn" onclick="openControlTab('#choseLan')"><i class="fas fa-language"></i>
                    <span style="padding: 0px 0px 0px 25px;">Change Language</span>
                    <i class="fa fa-chevron-right ml-auto" style="font-size: medium; color:rgba(0, 0, 0, 0.38);"></i></a>

                <a href="myprofile.php" class="bg-secondary mt-3 justify-content-center border-0 text-white p-2 mb-3">Sign Out</a>

            </div>
        </div>
    </div>
    <div id="myProfile"  class="container-fluid p-0 forEnableSliding">
        <nav class="nav navbar navbar-fixed-top" style="height: 66px; width: 100%">
            <div class="container-fluid d-flex justify-content-between align-items-center ">
                <i class="fa fa-chevron-left" style="color:rgba(0, 0, 0, 0.6); "
                   onclick="closeControlTab('#myProfile')"></i>
                <h4 class="" style="color: #1887b8; color: 
                    #ea5d00; margin: auto; font-weight: 600;">My Profile</h4>
            </div>
        </nav>
        
        <br>
        <br>
        <br>
        <div class="container text-center  pt-5" style="background-color: #f5f5f5; margin-top: 8rem;
             border-top-left-radius: 45px; border-top-right-radius: 45px;">
            <img src="img/undraw_profile_pic_ic5t.svg" class="rounded-circle profileImg " >
            <br>
            <br>
            <br>
            
            <br>
            <form>
                <div class='row mb-2'>
                    <div class="col-6">
                        <input type="text" class="form-control profileFormTextInput" placeholder="First Name">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control profileFormTextInput" placeholder="Last Name">
                    </div>
                </div>
                <div class='row mb-2'>
                    <div class="col-12">
                        <input type="text" class="form-control profileFormTextInput" placeholder="e-mail">
                    </div>
                </div>
                <div class='row mb-2'>
                    <div class="col-12">
                        <input type="number" class="form-control profileFormTextInput" placeholder="Phone Number">
                    </div>
                </div>
                <div class='row mb-2'>
                    <div class="col-12">
                        <input type="date" class="form-control profileFormTextInput">
                    </div>
                </div>
                <div class='row mb-2'>
                    <div class="col-6">
                        <input type="button" class="form-control profileFormBtnInput" value="Male">
                    </div>
                    <div class="col-6">
                        <input type="button" class="form-control profileFormBtnInput" value="Female">
                    </div>
                </div>
                <div class='row mb-2 mt-4'>
                    <div class="col-12">
                        <input type="button" class="form-control profileSubmitBtn " value="Save Changes">
                    </div>
                </div>
            </form>
            
            <br>
            
            <br>
            <br>
        </div>
        
    </div>
    <div id="mOrders"   class="container-fluid p-0 forEnableSliding">
        <nav class="nav navbar navbar-fixed-top" style="height: 66px; width: 100%">
            <div class="container-fluid d-flex justify-content-between align-items-center ">
                <i class="fa fa-chevron-left" style="color:rgba(0, 0, 0, 0.6); "
                   onclick="closeControlTab('#mOrders')"></i>
                <h4 class="" style="color: #1887b8; color: 
                    #ea5d00; margin: auto; font-weight: 600;">Manage Orders</h4>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <div class="text-center mt-5 align-self-center">
            <img src="img/undraw_no_data_qbuo.svg" style="width: 200px;">
            <p class="text-muted mt-5">You've not made any Order :(</p>
        </div>        
    </div>
    
    <div id="myLocations"  class="container-fluid p-0 forEnableSliding">
        <nav class="nav navbar navbar-fixed-top" style="height: 66px; width: 100%">
            <div class="container-fluid d-flex justify-content-between align-items-center ">
                <i class="fa fa-chevron-left" style="color:rgba(0, 0, 0, 0.6); "
                   onclick="closeControlTab('#myLocations')"></i>
                <h4 class="" style="color: #1887b8; color: 
                    #ea5d00; margin: auto; font-weight: 600;">My Locations</h4>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <div class="text-center mt-5">
            <br>
            <img src="img/undraw_my_location_f9pr.svg" style="width: 200px;">
            <p class="text-muted mt-4">Add a location and start the Journey !</p>
            <br>
            <button class="btn" style="width: 50%; border: 1.1px #ea5d00 solid;
                    background-color: rgba(0,0,0,0); color: #ea5d00;">Add New Location</button>
        </div>
        
    </div>
    
    <div id="aboutComp"  class="container-fluid p-0 forEnableSliding">
        <nav class="nav navbar navbar-fixed-top" style="height: 66px; width: 100%">
            <div class="container-fluid d-flex justify-content-between align-items-center ">
                <i class="fa fa-chevron-left" style="color:rgba(0, 0, 0, 0.6); "
                   onclick="closeControlTab('#aboutComp')"></i>
                <h4 class="" style="color: #1887b8; color: 
                    #ea5d00; margin: auto; font-weight: 600;">About</h4>
            </div>
        </nav>
        
        
    </div>
    <div id="choseLan"  class="container-fluid p-0 forEnableSliding">
        <nav class="nav navbar navbar-fixed-top" style="height: 66px; width: 100%">
            <div class="container-fluid d-flex justify-content-between align-items-center ">
                <i class="fa fa-chevron-left" style="color:rgba(0, 0, 0, 0.6); "
                   onclick="closeControlTab('#choseLan')"></i>
                <h4 class="" style="color: #1887b8; color: 
                    #ea5d00; margin: auto; font-weight: 600;">Languages</h4>
            </div>
        </nav>
        
        
    </div>
    
    
    
    <br>
    <br>
</div>


<!-- popLogin    popLogin    popLogin    popLogin-->
<div id="login1" class="modal">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <i class="fa fa-arrow-left arrcon" aria-hidden="true" onclick="$('#login1').fadeOut(500);"></i>
            
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>
            <h2 class="inactive underlineHover">Sign Up </h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="vendor/ايقونات الكاتوجريز/1.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form>
              <input type="text" id="login" class="fadeIn second" name="login" placeholder="login" required>
              <input type="text" id="password" class="fadeIn third" name="login" placeholder="password" required>
              <input type="submit" class="fadeIn fourth" value="Log In" style="background-color: #ff6600;">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
              <a class="underlineHover" href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>


</div>

<div id="secondPage" style="display: none;">
    
</div>

<script>
       
    
    
    
function hideMain()    {
    $('#mainPage').hide();
    $('#secondPage').show();
}

function displayMain(){
    $('#secondPage').hide();
    $('#mainPage').show();
}



// Get the modal
var modal = document.getElementById('login1');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        
    }
};

function hideLoading(){
    
     setTimeout(function(){ 
        $('.loading-page').fadeOut(500);
     }, 1000); //after 3 second
     setTimeout(function(){ 
        $('body').css('overflow','visible');
     }, 1500); //after 1.5 second
    
}

</script>

</body>

    
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./vendor/jquery-3.5.0/dist/jquery.min.js"></script>
    <script src="./vendor/popper-core-1.16.1/popper.min.js"></script>
    <!--<script src="https://code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>-->
    <script src="./vendor/bootstrap/js/bootstrap.min.js" ></script>
    <script src="./vendor/bxslider-4-4.2.12/dist/jquery.bxslider.js"></script>

<!-- Custom JS    Custom JS    Custom JS    Custom JS  -->
    <script src="js/forslideside.js"></script>
     
    
    <script>
        
        
        var promotionSlider =  $('#slider-area').bxSlider({
            controls: true,
            auto: true,
            /*mode:'fade',
            speed:800,
            pause:2500,*/
            onSlideAfter: function (){
                promotionSlider.startAuto();
            }
        });
        
        
    $(document).on("click","#hideAll", function(){  
        $('#secondPage').load('support.php #getMe');
        $('#mainPage').hide();
        $('#secondPage').show();
        
    //alert('hiii');
    });
    $(document).on("click","#returnMain", function(){  
       
        $('#mainPage').show();
        $('#secondPage').hide();
        
    //alert('hiii');
    });
    
    function redrawSlider(){
       promotionSlider.reloadSlider();
    }
    
    

    
    
$(".forEnableSliding").on("swiperight",function(){

    $(this).fadeOut(400, function() {
        $(this).animate({right: '-150%'}, 300, function (){
        });
    });    
    $("#mainControl").show();
    $("#mainControl").animate({left: '0%'}, 550, function (){
    });
});
    
    
function openControlTab(controlTabName){
    
    $("#mainControl").fadeOut(300, function() {
        $("#mainControl").animate({left: '-150%'});

    });
    $(controlTabName).animate({right: '0%'}, 300,  function (){

    });
    $(controlTabName).show(450);
}

function closeControlTab(controlTabName){
    
    $(controlTabName).fadeOut(400, function() {
        $(controlTabName).animate({right: '-150%'}, 300, function (){
        });
    });    
    $("#mainControl").show();
    $("#mainControl").animate({left: '0%'}, 550, function (){

    });
}
    
    </script>        
</html>