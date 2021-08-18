$(document).ready(function(){
$('.chatIcon').click(function(event){
    $('.chatBox').toggleClass('active');
  });

  $('.conv-form-wrapper').convform({selectInputStyle: 'disable'});
})

function popupFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
    }

