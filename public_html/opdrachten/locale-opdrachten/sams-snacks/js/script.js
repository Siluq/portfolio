$(document).ready(function () { // als de pagina geladen is
    $('.thumb').on({            // zoek dan de elementen met class .thumb
        'click': function () {  // als op een van de .thumbs geklikt wordt
            // geef dan het src-attribuut van deze .thumb (this) door
            // aan het element met class ".vergroting" 
            $('.vergroting').attr('src', $(this).attr('src'));
        }
    });
});