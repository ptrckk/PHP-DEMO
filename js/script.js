// Hamburger menu
(function () {
    var hamburger = {

        navToggle: document.querySelector('.hamburgermenu'),
        nav: document.querySelector('nav'),

        doToggle: function (e) {
            e.preventDefault();
            this.navToggle.classList.toggle('active');
            this.nav.classList.toggle('expanded');
        }
    };

    hamburger.navToggle.addEventListener('click', function (e) {
        hamburger.doToggle(e);
    });

}());

// Maximaal aantal tekens voor postsForm
$(document).ready(function() {
    var text_count = 255;
    $('#textarea_message').html('&#x1F601; Je hebt <strong>' + text_count + '</strong> tekens om je mening te geven.');

    $('#formarea').keyup(function() {
        var text_length = $('#formarea').val().length;
        var text_remaining = text_count - text_length;

        if(text_remaining >= 100) {
            $('#textarea_message').html('&#x1F627; Je hebt nog <strong>' + text_remaining + '</strong> tekens over...');
        } else {
            $('#textarea_message').html('&#x1F629; WATCH OUT! Je hebt nog maar <strong>' + text_remaining + '</strong> tekens over...');
        }
        
    });
});

// Link stijl voor huidige pagina
$(document).ready(function() {
    $("[href]").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("activeLink");
        }
    });
});