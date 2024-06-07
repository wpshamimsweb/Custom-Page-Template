

jQuery(document).ready(function($){
    $('.lightbox').click(function(e){
        e.preventDefault();
        var images = [];
        var currentIndex = 0;

        // Collect image URLs
        $('.lightbox').each(function(index){
            images.push($(this).attr('href'));
            if($(this).attr('href') === $(this).attr('href')) {
                currentIndex = index;
            }
        });

        // Create lightbox gallery HTML
        var lightboxHTML = '<div class="lightbox-gallery">';
        lightboxHTML += '<div class="overlay"></div>'; // Add overlay
        lightboxHTML += '<div class="lightbox-container">';
        lightboxHTML += '<img src="' + images[currentIndex] + '" alt="Large Image">';
        lightboxHTML += '<span class="close-btn">&times;</span>';
        lightboxHTML += '</div>';
        lightboxHTML += '<div class="lightbox-nav">';
        lightboxHTML += '<button class="prev-btn">&lt;</button>';
        lightboxHTML += '<button class="next-btn">&gt;</button>';
        lightboxHTML += '</div>';
        lightboxHTML += '</div>';

        // Append lightbox gallery HTML
        $('body').append(lightboxHTML);

        // Show lightbox gallery with opacity screen
        $('.overlay, .lightbox-container').fadeIn();

        // Handle navigation buttons
        $('.prev-btn').click(function(){
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            $('.lightbox-container img').attr('src', images[currentIndex]);
        });

        $('.next-btn').click(function(){
            currentIndex = (currentIndex + 1) % images.length;
            $('.lightbox-container img').attr('src', images[currentIndex]);
        });

        // Close lightbox gallery
        $('.overlay, .close-btn').click(function(){
            $('.lightbox-gallery').fadeOut(function(){
                $(this).remove();
            });
            $('.overlay').fadeOut();
        });
    });
});




jQuery(document).ready(function($) {
    // Disable automatic menu item highlighting
    $('.menu-item a').on('click', function(event) {
        $('.menu-item').removeClass('current-menu-item');
    });
});


