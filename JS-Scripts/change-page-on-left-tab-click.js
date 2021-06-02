
$('.CT-content').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

      if (e.type === 'keyup') {
            if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
        if( $this.val() === '' ) {
            label.removeClass('active highlight'); 
            } else {
            label.removeClass('highlight');   
            }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
            label.removeClass('highlight'); 
            } 
      else if( $this.val() !== '' ) {
            label.addClass('highlight');
            }
    }

});

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}


// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



$(document).ready(function(){
  var username=sessionStorage.getItem("currentloggedin")
  if (username!=null) {
    document.querySelector('#logged').innerHTML = 'Log Out'; //mette al posto di login 'logout'
    document.querySelector('#bottoneTorneo').style.display = "block";
  }
   
  
});
//da qui sono loggato
function logged() {
  if (document.querySelector('#logged').innerHTML == 'Log Out') { //premo logout
    sessionStorage.clear()
    window.location.href = "/card.php";
  }
  else {
    window.location.href = "/Sign-up/index.html";
  }
}

