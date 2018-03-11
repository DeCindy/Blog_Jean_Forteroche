// \\\ SLIDER \\\ //

$(document).ready(function(){
      $('.slider').slider({indicators : false, height : 350, interval : 4000, transition: 800});
});

// \\\ COLLAPSIBLE ACCORDION \\\ //

$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
});

// \\\ BUTTON INFO \\\ //

$(".button-collapse").sideNav();  

// \\\ COMMENT BUTTON \\\ //

$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});        