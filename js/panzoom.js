

var eventsHandler;
eventsHandler = {
    haltEventListeners: ['touchstart', 'touchend', 'touchmove', 'touchleave', 'touchcancel']
    , init: function (options) {
        var instance = options.instance
            , initialScale = 1
            , pannedX = 0
            , pannedY = 0
        // Init Hammer
        // Listen only for pointer and touch events
        this.hammer = Hammer(options.svgElement, {
            inputClass: Hammer.SUPPORT_POINTER_EVENTS ? Hammer.PointerEventInput : Hammer.TouchInput
        })
        // Enable pinch
        this.hammer.get('pinch').set({enable: true})
        // Handle double tap
        this.hammer.on('doubletap', function (ev) {
            instance.zoomIn()
        })
        // Handle pan
        this.hammer.on('panstart panmove', function (ev) {
            // On pan start reset panned variables
            if (ev.type === 'panstart') {
                pannedX = 0
                pannedY = 0
            }
            // Pan only the difference
            instance.panBy({x: ev.deltaX - pannedX, y: ev.deltaY - pannedY})
            pannedX = ev.deltaX
            pannedY = ev.deltaY
        })
        // Handle pinch
        this.hammer.on('pinchstart pinchmove', function (ev) {
            // On pinch start remember initial zoom
            if (ev.type === 'pinchstart') {
                initialScale = instance.getZoom()
                instance.zoom(initialScale * ev.scale)
            }
            instance.zoom(initialScale * ev.scale)
        })
        // Prevent moving the page on some devices when panning over SVG
        options.svgElement.addEventListener('touchmove', function (e) {
            e.preventDefault();
        });
    }
    , destroy: function () {
        this.hammer.destroy()
    }
}

window.levelPan;

window.initPan = function(target) {
    var level = $(target);
    var classL = level.attr('class').split(' ').join('.');
    var selector = '.' + classL + ' > svg';

    window.levelPan = svgPanZoom(selector, {
        zoomEnabled: true
        , controlIconsEnabled: false
        , fit: true
        , minZoom: 0.8
        , maxZoom: 5
        , contain:0
        , center: true
        , zoom: 0.9
        , dblClickZoomEnabled: false
        , customEventsHandler: eventsHandler
    });
    window.levelPan.enablePan();
    $('#control_buttons').show();
}
window.disablePan = function(){
    $('#reset').click();
    window.levelPan.disablePan();
    $('#control_buttons').hide();
}
document.getElementById('zoom-in').addEventListener('click', function (ev) {
    ev.preventDefault()
    window.levelPan.zoomIn();
});
document.getElementById('zoom-out').addEventListener('click', function (ev) {
    ev.preventDefault()
    window.levelPan.zoomOut();
});
document.getElementById('reset').addEventListener('click', function (ev) {
    ev.preventDefault()
    window.levelPan.resetZoom();
    window.levelPan.resetPan();
});