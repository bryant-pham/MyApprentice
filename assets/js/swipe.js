$(document).on('pageinit', function() {
    $("body").on( 'swiperight', ( function() {
        $( "#side_panel" ).panel( "open" );
        })
    );

    $("body").on( 'swipeleft', ( function() {
        $( "#side_panel" ).panel( "close" );
        })
    );
});