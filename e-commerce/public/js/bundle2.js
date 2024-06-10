jQuery.noConflict();
    jQuery(document).ready(function($) {
        $('.play-icon').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#small-dialog1',
            callbacks: {
                beforeOpen: function() {
                    if($(window).width() < 700) {
                        this.st.focus = false;
                    } else {
                        this.st.focus = '#small-dialog1';
                    }
                }
            }
        });
    });