$('#Buildings ' + window.location.hash).addClass('active');
console.log('#Buildings ' + window.location.hash);
$('#Buildings path').click(function () {
    $('#Buildings path').removeClass('active');
    $(this).addClass('active');
    window.location.hash = $(this).attr('id');
});

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

buildingPan = svgPanZoom('#mainmap', {
    zoomEnabled: true
    , controlIconsEnabled: false
    , fit: true
    , minZoom: 0.8
    , maxZoom: 5
    , center: true
    , zoom: 0.9
    , dblClickZoomEnabled: false
    , customEventsHandler: eventsHandler
});

document.getElementById('zoom-in').addEventListener('click', function (ev) {
    ev.preventDefault()
    buildingPan.zoomIn();
});
document.getElementById('zoom-out').addEventListener('click', function (ev) {
    ev.preventDefault()
    buildingPan.zoomOut();
});
document.getElementById('reset').addEventListener('click', function (ev) {
    ev.preventDefault()
    buildingPan.resetZoom();
    buildingPan.resetPan();
});