$(document).ready(function() {
    
    $('body').click(function(e) {
        $('#pin-1-box').css('display', 'none');
    });
    
    $('#pin-1').click(function(e) {
        $('#pin-1-box').css('display', 'block');
        e.stopPropagation();
    });
    
}) // end ready