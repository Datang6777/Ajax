/**
 * Created by sks on 2016/5/24.
 */

(function () {
    var container = $("#container");

    container.load("content.htm",function( response, status, xhr ) {
        if ( status == "error" ) {
            var msg = "Sorry but there was an error: ";
            container.html( msg + xhr.status + " " + xhr.statusText );
        }
    });
}());
