
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
    document.querySelector('#logged').innerHTML = 'Log Out';
    document.querySelector('#bottoneTorneo').style.display = "block";
  }
   
  
});

function logged() {
  if (document.querySelector('#logged').innerHTML == 'Log Out') { //SE PREMO IL TASTO LOGOUT
    console.log("entronell'if")
    sessionStorage.clear()
    window.location.href = "/card.php";
  }
  else {
    console.log("entronell'else")
    window.location.href = "/Sign-up/index.html";
  }
}

