
function openSideNav() {
  document.getElementById("mySidenavNew").style.width = "400px";
  

}

function closeSideNav() {
  document.getElementById("mySidenavNew").style.width = "0";
    
}

function openothersidenav() {
  document.getElementById("myotherside").style.width = "400px";
  

}

function closeothersidenav () {
  document.getElementById("myotherside").style.width = "0";
    
}

$(document).ready(function (){
    document.getElementById("defult").click();
});


$(document).mouseup(function(e){
    var container = $(".popupAlertDiv");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        
        container.hide();
        $('.popupAlert').hide();
    }
    
    var sideNav = $('#mySidenavNew');
    if (!sideNav.is(e.target) && sideNav.has(e.target).length === 0) 
    {
       if(sideNav.css('display') === 'block'){ 
            document.getElementById("mySidenavNew").style.width = "0";
        }
    }
});

$(document).mouseup(function(e) {
    var container = $(".popupAlertDiv");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        
        container.hide();
        $('.popupAlert').hide();
    }
    
    var sideNav = $('#myotherside');
    if (!sideNav.is(e.target) && sideNav.has(e.target).length === 0) 
    {
       if(sideNav.css('display') === 'block'){ 
            document.getElementById("myotherside").style.width = "0";
        }
    }
});


function opentabs(evt, tabsname){
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabsname).style.display = "block";
  evt.currentTarget.className += " active";
};

$(document).ready(function(){

//$(".loading-overlay").fadOut(4000);
setTimeout(function(){

  $(".loading-overlay").fadeOut(500);

},4000);

});
 