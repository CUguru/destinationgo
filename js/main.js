$(document).ready(function() {
    
    $('body').click(function(e) {
        $('#pin-1-box').css('display', 'none');
        $('#pin-2-box').css('display', 'none');
        $('#pin-3-box').css('display', 'none');
        $('#arrow-1').css('display', 'none');
        $('#arrow-2').css('display', 'none');
        $('#arrow-3').css('display', 'none');
    });
    
    $('#pin-1').click(function(e) {
        $('#pin-1-box').css('display', 'block');
        $('#arrow-1').css('display', 'block');
        mapAdjust();
        e.stopPropagation();
    });
    
    $('#pin-2').click(function(e) {
        $('#pin-2-box').css('display', 'block');
        $('#arrow-2').css('display', 'block');
        mapAdjust();
        e.stopPropagation();
    });
    
    $('#pin-3').click(function(e) {
        $('#pin-3-box').css('display', 'block');
        $('#arrow-3').css('display', 'block');
        mapAdjust();
        e.stopPropagation();
    });
    
    var windowW;
    
    var pin1_top = 40;
    var pin1_left = 57;
    var pin1box_left;
    var arrow1_top;
    
    var pin2_top = 28;
    var pin2_left = 33;
    var arrow2_left;
    
    var pin3_top = 22;
    var pin3_left = 70;
    var pin3box_left;
    
    $(window).on('resize', function() {
        windowW = $(window).width();
        
        // locations with right arrows
        pin1box_left = (3/4) * windowW - 432.5;
        arrow1_top = (1/6) * windowW + 21.67;
        
        pin3box_left;
        
        // locations with left arrows
        arrow2_left = (12/31) * windowW - 1.29;
        
        mapAdjust(); 
        console.log(windowW);
    }).trigger('resize');

    function mapAdjust() {
        
        // positioning pin
        if (windowW > 770) {
            $('#pin-1').css({
                'top': pin1_top + '%',
                'left': pin1_left + '%',
            });
            $('#pin-2').css({
                'top': pin2_top + '%',
                'left': pin2_left + '%',
            });
            $('#pin-3').css({
                'top': pin3_top + '%',
                'left': pin3_left + '%',
            });
        } else if (windowW > 580 && windowW <= 770) {
            $('#pin-1').css({
                'top': pin1_top - 0.5 + '%',
                'left': pin1_left - 1 + '%',
            });
            $('#pin-2').css({
                'top': pin2_top - 0.5 + '%',
                'left': pin2_left - 1 + '%',
            });  
            $('#pin-3').css({
                'top': pin3_top - 0.5 + '%',
                'left': pin3_left - 1 + '%',
            });  
        } else if (windowW > 460 && windowW <= 580) {
            $('#pin-1').css({
                'top': pin1_top - 2 + '%',
                'left': pin1_left - 2 + '%',
            });
            $('#pin-2').css({
                'top': pin2_top - 2 + '%',
                'left': pin2_left - 2 + '%',
            }); 
            $('#pin-3').css({
                'top': pin3_top - 2 + '%',
                'left': pin3_left - 2 + '%',
            }); 
        } else {
            $('#pin-1').css({
                'top': pin1_top - 2 + '%',
                'left': pin1_left - 2.5 + '%',
            });
            $('#pin-2').css({
                'top': pin2_top - 2 + '%',
                'left': pin2_left - 2.5 + '%',
            });
            $('#pin-3').css({
                'top': pin3_top - 2 + '%',
                'left': pin3_left - 2.5 + '%',
            });
        }
        
        // positioning pin-box and arrow
        if (windowW > 830) {
            $('#arrow-1').css({
                'top': '165px',
                'left': '440px',
            });
            $('#pin-1-box').css({
                'top': '20px',
                'left': '190px',
            });
            
            $('#arrow-2').css({
                'top': '120px',
                'left': '320px',
            });
            $('#pin-2-box').css({
                'top': '0',
                'left': '340px',
            });
            
            $('#arrow-3').css({
                'top': '90px',
                'left': '540px',
            });
            $('#pin-3-box').css({
                'top': '0',
                'left': '290px',
            });
        } else if (windowW <= 830) {
            $('#arrow-1').css({
                'top': arrow1_top + 'px',
                'left': pin1box_left + 250 + 'px',
            });
            $('#pin-1-box').css({
                'top': '20px',
                'left': pin1box_left + 'px',
            });
            
            $('#arrow-2').css({
                'top': arrow1_top - 45 + 'px',
                'left': arrow2_left + 'px',
            });
            $('#pin-2-box').css({
                'top': '0',
                'left': arrow2_left + 20 + 'px',
            });
            
            $('#arrow-3').css({
                'top': arrow1_top - 70 + 'px',
                'left': pin1box_left + 100 + 250 + 'px',
            });
            $('#pin-3-box').css({
                'top': '20px',
                'left': pin1box_left + 100 + 'px',
            });
        }
    }

}) // end ready