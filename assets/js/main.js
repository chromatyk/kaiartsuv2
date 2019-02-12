

            $(document).ready(function () {
                $("#contenuLoader").delay(2000).fadeOut(200);
                $("#fadeSite").delay(500).fadeIn(1000);                
                setTimeout(function () {
                    $('body').css('overflow', 'unset');
                    $('body').css('overflow-x', 'hidden');
                    ScrollReveal().reveal('.dispear', {delay: 500, useDelay: 'onload', reset: true, duration: 2000});
                    $.scrollify({section: ".sectionScroll"});
                    $( ".linkNav" ).click(function() {
                        $("#fadeSite").fadeOut(150);
                        $("#fadeSite").fadeIn(1);
                    });
                    $("a").click(function(e) {
                        var link = $(this).attr("href");
                        setTimeout(function() {
                            window.location.href = link;                            
                        }, 100);
                        e.preventDefault();
                    });
                }, 2600);
            })
            var scene = document.getElementById('scene');
            var parallaxInstance = new Parallax(scene, {
                relativeInput: true
            });
          