/**
 * Created by bruno on 22/03/18.
 */
/* Para fazer com que os carrosséis não se movimentem automaticamente */

$(document).ready(function () {

   /* $('.carousel').carousel({
        pause: true,
        interval: false
    })*/
    $('.carousel').carousel({			/* Para fazer com que os carrosséis não se movimentem automaticamente */
        pause: true,
        interval: false
    });


    /* Scripts para o cadastro */

    // Get the modal
    var modal = document.getElementById('id01');
    var modal2 = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal || event.target == modal2) {
            modal.style.display = "none";
        }
    }
});
