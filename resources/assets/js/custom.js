$(document).ready(function() {
    "use strict";


    //Hide Loading Box (Preloader)
    function handlePreloader() {
        if($('.preloader').length){
            $('.preloader').delay(200).fadeOut(500);
        }
    }

/* ==========================================================================
   When document is loading, do
   ========================================================================== */
    
    $(window).on('load', function() {
        handlePreloader();
    }); 


    /*------------------------------------------------------------------
     Slider
     -------------------------------------------------------------------*/

    $('.main_slider').owlCarousel({
        items: 1,
        animateIn: 'pulse',
        autoplay: true,
        loop: true,
        margin: 10,
        nav: true
    });

    /*------------------------------------------------------------------
     PrettyPhoto
     -------------------------------------------------------------------*/

        $("a.zoom").prettyPhoto({
            social_tools: ''
        });


    /*------------------------------------------------------------------
     Accordion
     -------------------------------------------------------------------*/

    $( "#accordion" ).accordion();

    /*------------------------------------------------------------------
     Parallax
     -------------------------------------------------------------------*/

    function parallaxInit() {
        $('.bg1').parallax("10%", 0.6);
        $('.bg2').parallax("10%", 0.6);
    }
    parallaxInit();

    

    /*------------------------------------------------------------------
     Testimonials
     -------------------------------------------------------------------*/

    $('.testi_slider').cycle({
        fx:      'scrollHorz',
        next:   '.left',
        prev:   '.right'
    });

    $('.slides').cycle({
        fx:      'scrollHorz',
        next:   '.lft',
        prev:   '.rht'
    });

    $('.serv_slide').cycle({
        fx:      'scrollHorz',
        pager:   '.pagers'
    });

    $('.testimonial_slide').cycle({
        fx:      'scrollHorz',
        pager:   '.pagerss'
    });

    $('.testim_slides').cycle({
        fx:      'scrollHorz',
        pager:   '.pagersss'
    });


    /*------------------------------------------------------------------
     Animation
     -------------------------------------------------------------------*/

    $(window).load(function(){

        var width = $(window).width();
        if(width < 480)
        {
            $(".animated").removeClass('animated, slide');
            $(".animated").removeClass('animated, fade');
            $(".animated").removeClass('animated, hatch');
            $(".animated").removeClass('animated, entrance');
        }

    });


    jQuery('.animated').appear();
    jQuery(document.body).on('appear', '.fade', function() {
        jQuery(this).each(function(){ jQuery(this).addClass('ae-animation-fade') });
    });
    jQuery(document.body).on('appear', '.slide', function() {
        jQuery(this).each(function(){ jQuery(this).addClass('ae-animation-slide') });
    });
    jQuery(document.body).on('appear', '.hatch', function() {
        jQuery(this).each(function(){ jQuery(this).addClass('ae-animation-hatch') });
    });
    jQuery(document.body).on('appear', '.entrance', function() {
        jQuery(this).each(function(){ jQuery(this).addClass('ae-animation-entrance') });
    });


    /*------------------------------------------------------------------
     Counter
     -------------------------------------------------------------------*/

    jQuery('.statistics').appear();

    jQuery(document.body).on('appear', function() {
        $({someValue: 1000}).animate({someValue: 5649}, {
            duration: 3000,
            easing:'easeInQuint',
            step: function() {
                $('#counter1 a').text(Math.round(this.someValue));
            }
        });
    });

    jQuery(document.body).on('appear', function() {
        $({someValue: 100}).animate({someValue: 340}, {
            duration: 3000,
            easing:'easeInQuint',
            step: function() {
                $('#counter2 a').text(Math.round(this.someValue));
            }
        });
    });

    jQuery(document.body).on('appear', function() {
        $({someValue: 100}).animate({someValue: 240}, {
            duration: 3000,
            easing:'easeInQuint',
            step: function() {
                $('#counter3 a').text(Math.round(this.someValue));
            }
        });
    });

    jQuery(document.body).on('appear', function() {
        $({someValue: 100}).animate({someValue: 240}, {
            duration: 3000,
            easing:'easeInQuint',
            step: function() {
                $('#counter4 a').text(Math.round(this.someValue));
            }
        });
    });



    /*------------------------------------------------------------------
     Validate
     -------------------------------------------------------------------*/

    $( "#submit" ).on( "click", function() {
        var errors = "";

        var contact_name = document.getElementById("contact_name");
        var contact_email_address = document.getElementById("contact_email");

        if(contact_name.value == ""){
            errors+= 'Please provide your name.';
        }
        else if(contact_email_address.value == ""){
            errors+= 'Please provide an email address.';
        }
        else if(contact_email_address.value == ""){
            errors+= 'Please provide a valid email address.';
        }


        if(errors)
        {
            document.getElementById("error").style.display = "block";
            document.getElementById("error").innerHTML = errors;
            return false;
        }

        else{

            $.ajax({
                type: "POST",
                url: 'process.php',
                data: $("#contact_form").serialize(),
                success: function(msg)
                {
                    if(msg == 'success')
                    {
                        document.getElementById("error").style.display = "none";
                        document.getElementById("contact_name").value = "";
                        document.getElementById("contact_email").value = "";
                        document.getElementById("message").value = "";
                        $("#contact_form").hide();
                        document.getElementById("success").style.display = "block";
                        document.getElementById("success").innerHTML = "Thank You! We'll contact you shortly.";
                    }else{
                        document.getElementById("error").style.display = "block";
                        document.getElementById("error").innerHTML = "Oops! Something went wrong while prceeding.";
                    }
                }

            });

        }
    });



    /*------------------------------------------------------------------
        Validate Newsletter
     -------------------------------------------------------------------*/

    $( "#subcribe" ).on( "click", function() {
        var errors = "";

        var contact_email_address = document.getElementById("newletter_email");

        if(contact_email_address.value == ""){
            errors+= 'Please provide an email address.';
        }
        else if(contact_email_address.value == ""){
            errors+= 'Please provide a valid email address.';
        }


        if(errors)
        {
            document.getElementById("error").style.display = "block";
            document.getElementById("error").innerHTML = errors;
            return false;
        }

        else{

            $.ajax({
                type: "POST",
                url: 'process.php',
                data: $("#newsletter_form").serialize(),
                success: function(msg)
                {
                    if(msg == 'success')
                    {
                        document.getElementById("error").style.display = "none";
                        document.getElementById("contact_email").value = "";
                        document.getElementById("message").value = "";
                        $("#newsletter_form").hide();
                        document.getElementById("success").style.display = "block";
                        document.getElementById("success").innerHTML = "Thank You! We'll contact you shortly.";
                    }else{
                        document.getElementById("error").style.display = "block";
                        document.getElementById("error").innerHTML = "Oops! Something went wrong while prceeding.";
                    }
                }

            });

        }
    });


    /*------------------------------------------------------------------
        Validate form home-4
    -------------------------------------------------------------------*/

    $( "#submit" ).on( "click", function() {
        var errors = "";

        var contact_name = document.getElementById("name");
        var contact_email_address = document.getElementById("email");

        if(contact_name.value == ""){
            errors+= 'Please provide your name.';
        }
        else if(contact_email_address.value == ""){
            errors+= 'Please provide an email address.';
        }
        else if(contact_email_address.value == ""){
            errors+= 'Please provide a valid email address.';
        }


        if(errors)
        {
            document.getElementById("error").style.display = "block";
            document.getElementById("error").innerHTML = errors;
            return false;
        }

        else{

            $.ajax({
                type: "POST",
                url: 'process.php',
                data: $("#appointment_form").serialize(),
                success: function(msg)
                {
                    if(msg == 'success')
                    {
                        document.getElementById("error").style.display = "none";
                        document.getElementById("contact_name").value = "";
                        document.getElementById("contact_email").value = "";
                        document.getElementById("message").value = "";
                        $("#appointment_form").hide();
                        document.getElementById("success").style.display = "block";
                        document.getElementById("success").innerHTML = "Thank You! We'll contact you shortly.";
                    }else{
                        document.getElementById("error").style.display = "block";
                        document.getElementById("error").innerHTML = "Oops! Something went wrong while prceeding.";
                    }
                }

            });

        }
    });


    /*------------------------------------------------------------------
        Instant Quote
    -------------------------------------------------------------------*/

    $( "#get_quote" ).on( "click", function() {
        var errors = "";

        var contact_name = document.getElementById("user_name");
        var contact_email_address = document.getElementById("user_email");

        if(contact_name.value == ""){
            errors+= 'Please provide your name.';
        }
        else if(contact_email_address.value == ""){
            errors+= 'Please provide an email address.';
        }
        else if(contact_email_address.value == ""){
            errors+= 'Please provide a valid email address.';
        }


        if(errors)
        {
            document.getElementById("error").style.display = "block";
            document.getElementById("error").innerHTML = errors;
            return false;
        }

        else{

            $.ajax({
                type: "POST",
                url: 'process.php',
                data: $("#quote_form").serialize(),
                success: function(msg)
                {
                    if(msg == 'success')
                    {
                        document.getElementById("error").style.display = "none";
                        document.getElementById("contact_name").value = "";
                        document.getElementById("contact_email").value = "";
                        document.getElementById("message").value = "";
                        $("#quote_form").hide();
                        document.getElementById("success").style.display = "block";
                        document.getElementById("success").innerHTML = "Thank You! We'll contact you shortly.";
                    }else{
                        document.getElementById("error").style.display = "block";
                        document.getElementById("error").innerHTML = "Oops! Something went wrong while prceeding.";
                    }
                }

            });

        }
    });

    /*------------------------------------------------------------------
     Back to Top
     -------------------------------------------------------------------*/

    jQuery(document).ready(function($){
        // browser window scroll (in pixels) after which the "back to top" link is shown
        var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
            offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
            scroll_top_duration = 1400,
        //grab the "back to top" link
            $back_to_top = $('.cd-top');

        //hide or show the "back to top" link
        $(window).scroll(function(){
            ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if( $(this).scrollTop() > offset_opacity ) {
                $back_to_top.addClass('cd-fade-out');
            }
        });

        //smooth scroll to top
        $back_to_top.on('click', function(event){
            event.preventDefault();
            $('body,html').animate({
                    scrollTop: 0
                }, scroll_top_duration
            );
        });

    });


    /*------------------------------------------------------------------
     Isotopes/Filtration
     -------------------------------------------------------------------*/

    var $container = $('#project-eliment');

    $container.isotope({
        itemSelector : '.item'
    });

    var $optionSets = $('.my-selector'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.on('click',function(){
        var $this = $(this);
        if ( $this.hasClass('selected') ) {
            return false;
        }
        var $optionSet = $this.parents('.my-selector');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
            changeLayoutMode( $this, options )
        } else {
            $container.isotope( options );
        }

        return false;
    });


    


});