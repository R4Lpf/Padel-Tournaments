
//SPOSTA LE SCRITTE DEI LABEL NEI FORM UNA VOLTA CHE VENGONO COMPILATI

$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
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
  

//  CAMBIA IL TAB ATTIVO DA REGISTRAZIONE AD ACCEDI E VICEVERSA

  $('.tab a').on('click', function (e) {
    
    e.preventDefault();
    
   $(this).parent().addClass('active');
   $(this).parent().siblings().removeClass('active');
   
   target = $(this).attr('href');
  
   $('.tab-content > div').not(target).hide();
   
   $(target).fadeIn(600);
    
  });

  
// SALVA IN LOCAL STORAGE L'USERNAME DELL'UTENTE APPENA LOGGATO
 function local_storage() {
  var user = document.getElementById('username12').value;
    sessionStorage.setItem('currentloggedin',user);
    
 }