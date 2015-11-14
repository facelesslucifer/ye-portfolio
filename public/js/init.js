(function($){
  $(function(){
    // Show sideNav
    $('.button-collapse').sideNav({
        closeOnClick: true
    });

    $('ul#slide-out li').click(function(e){
        $('#sidenav-overlay').remove();
    });

    $('#sidenav-overlay').click(function(e) {
        this.remove();
    });

    $(".nav-link").click(function() {
        $('html, body').animate({
            scrollTop: $("#" + $(this).attr("data-id")).offset().top - 70
        }, 1000);
    });

    $('.link').on('click', function (e) {
        $('a').each(function () {
            $(this).parent().removeClass('active');
        })
        $(this).parent().addClass('active');
    });

    $('.alert-close').click(function() {
        $('.alert').hide('slow', function(){ $('.alert').remove(); });
    });

    // Cache selectors
    var topMenu = $("#top-menu"),
        topMenuHeight = topMenu.outerHeight() + 100,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
          var item = $($(this).attr("href"));
          if (item.length) { return item; }
    });

    // Bind to scroll
    $(window).scroll(function(){
       // Get container scroll position
       var fromTop = $(this).scrollTop()+topMenuHeight;

       // Get id of current scroll item
       var cur = scrollItems.map(function(){
         if ($(this).offset().top < fromTop)
           return this;
       });

       // Get the id of the current element
       cur = cur[cur.length-1];
       var id = cur && cur.length ? cur[0].id : "";
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space