

            $(document).ready(function () {
                $("#contenuPage").css("display", "none");
                $("#contenuPage").delay(500).fadeIn(1000);
                setTimeout(function () {
                    $('body').css('overflow', 'unset');
                    $('body').css('overflow-x', 'hidden');
                    ScrollReveal().reveal('.dispear', {delay: 500, useDelay: 'onload', reset: true, duration: 2000});
                    $.scrollify({section: ".sectionScroll"});
                }, 2600);
            })
            
            var scene = document.getElementById('scene');
            var parallaxInstance = new Parallax(scene, {
                relativeInput: true
            });
