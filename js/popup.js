function togglePopup(content='',type='object'){
    if(type=='room'){
        $('.popup[data-type="room"]').toggleClass('active')
        $('.popup[data-type="room"] .popup__content').html(content);
    }else{
        $('.popup[data-type="object"]').toggleClass('active');
        $('.popup[data-type="object"] .popup__content').html(content);
        $('.overlay').toggleClass('active')
    }


}
$('.popup__close').click(function(){
    togglePopup('',$(this).parent().data('type'));
    if($(this).parent().data('type')=='room' && window.roomPan!=undefined)
        window.disablePan();
    else
        $('#control_buttons #reset').click();


});
$('.overlay').click(function(){
    togglePopup('','object');
});

$('body').on('click','.levels--open .level--current #Cameras > *',function(){
    id = $(this).attr('id').split('-')[1];
    $.ajax({
        url: 'views/camera.php',
        type: 'POST',
        data: {floor: getCurrentLevel(), id: id},
        success: function( data ) {
            togglePopup(data, 'object');
        }
    });

});

$('body').on('click','.levels--open .level--current #Racks > *,.room #Racks > *',function(){
    id = $(this).attr('id').split('-')[1];
    $.ajax({
        url: 'views/rack.php',
        type: 'POST',
        data: {floor: getCurrentLevel(), id: id},
        success: function( data ) {
            togglePopup(data, 'object');
        }
    });

});

$('body').on('click','.levels--open .level--current #ACS > *,.room #ACS > *',function(){
    id = $(this).attr('id').split('-')[1];
    $.ajax({
        url: 'views/acs.php',
        type: 'POST',
        data: {floor: getCurrentLevel(), id: id},
        success: function( data ) {
            togglePopup(data, 'object');
        }
    });

});

$('body').on('click','.levels--open .level--current #Rooms > *',function(){
    id = $(this).attr('id').split('-')[1];
    $.ajax({
        url: 'views/rooms/room.php',
        type: 'POST',
        data: {floor: getCurrentLevel(), id: id},
        success: function( data ) {
            togglePopup(data, 'room');
        }
    });

});