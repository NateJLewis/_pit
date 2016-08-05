(function($) {
    "use strict";
    $(document).ready(function() {
        var twitter_text_max = 70;
        $('.twitter_excerpt label').html('Twitter Excerpt - ' + twitter_text_max + ' characters remaining');
        $('.twitter_excerpt textarea').keyup(function() {
            var self = $(this),
                twitter_text_length = self.val().length,
                twitter_text_remaining = twitter_text_max - twitter_text_length;
            $('.twitter_excerpt label').html('Twitter Excerpt - ' + twitter_text_remaining  + ' characters remaining');
        });

        var facebook_text_max = 250;
        $('.facebook_excerpt label').html('Facebook Excerpt - ' + facebook_text_max + ' characters remaining');
        $('.facebook_excerpt textarea').keyup(function() {
            var self = $(this),
                facebook_text_length = self.val().length,
                facebook_text_remaining = facebook_text_max - facebook_text_length;
            $('.facebook_excerpt label').html('Facebook Excerpt - ' + facebook_text_remaining  + ' characters remaining');
        });

        $('#acf-field_57755c5c26236').keyup( function() {
            $('#acf-_post_title').val( $(this).val() );
            $('.product_name').text( $(this).val() );
        });
        $('#acf-field_57746d604c195').keyup( function() {
            $('.product_description').text( $(this).val() );

        });

        $('#acf-field_577407d4a6c99').keyup( function() {
            var price = $(this).val();
            $('.product_price').html( '$' + price + '.00');
        }).change( function() {
            var price = $(this).val();
            $('.product_price').html( '$' + price + '.00');
        })
        var input = acf.fields.image.$input;
        input.on('change', function() {
            $('.product_img').attr('src', acf.fields.image.$img.attr('src'))
        })
    });

})(jQuery);
