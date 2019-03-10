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
});
$('.overlay').click(function(){
    togglePopup('','object');
});

$('#Cameras > *').click(function(){
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

$('#Racks > *').click(function(){
    id = $(this).find('[id]').attr('id').split('-')[1];
    $.ajax({
        url: 'views/rack.php',
        type: 'POST',
        data: {floor: getCurrentLevel(), id: id},
        success: function( data ) {
            togglePopup(data, 'object');
        }
    });

});