//   service slider js

$('.serv-slide').slick({
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          arrows: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

//   testimonials slider js

   $('.testimonials').slick({
        infinite: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });



// dropdown menu navigation
      document.addEventListener("DOMContentLoaded", function(){
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {
        
          // close all inner dropdowns when parent is closed
          document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
            everydropdown.addEventListener('hidden.bs.dropdown', function () {
              // after dropdown is hidden, then find all submenus
                this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                  // hide every submenu as well
                  everysubmenu.style.display = 'none';
                });
            })
          });
        
          document.querySelectorAll('.dropdown-menu a').forEach(function(element){
            element.addEventListener('click', function (e) {
                let nextEl = this.nextElementSibling;
                if(nextEl && nextEl.classList.contains('submenu')) {	
                  // prevent opening link if link needs to open dropdown
                  e.preventDefault();
                  if(nextEl.style.display == 'block'){
                    nextEl.style.display = 'none';
                  } else {
                    nextEl.style.display = 'block';
                  }
        
                }
            });
          })
        }
        // end if innerWidth
        }); 
        // DOMContentLoaded  end


// counter sec

        $('.counter').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            
            $({ countNum: $this.text()}).animate({
              countNum: countTo
            },
          
            {
          
              duration: 8000,
              easing:'linear',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }
          
            });  
            
            
          
          });

// Blogs loadmore

   jQuery(document).ready(function(){
   jQuery(".content").slice(0, 3).show();
   jQuery("#loadMore").on("click", function(e){
     e.preventDefault();
     jQuery(".content:hidden").slice(0, 3).slideDown();
     if(jQuery(".content:hidden").length == 0) {
   	jQuery("#loadMore").text("Load More").addClass("noContent");
     }
   });
})

  // homepage service js

  $(function() {
    $("#servtabs").tabs({
      show: { effect: "blind", direction: "right", duration: 300 }
    });
    $("#servaccordion").accordion();

    var servbtn = $('#servaccordion li a');
    var servtabLineImg = $('.servtab-line img');

    servbtn.on('click', function() {
      servbtn.removeClass('active');
      servbtn.parent().find('.servaddon').removeClass('fadein');

      $(this).addClass('active');
      $(this).parent().find('.servaddon').addClass('fadein');

      // Check if the clicked tab is the fifth one
      if ($(this).attr('href') === '#servtabs-5') {
        servtabLineImg.css('height', '280px'); // Set your reduced height here
      } else {
        servtabLineImg.css('height', '415px'); // Set the original height here
      }
    });
  });

// zendesk chat

// var dtm = window.parent.document.createElement('script'); dtm.type="text/javascript"; dtm.id = 'ze-snippet'; dtm.src='https://static.zdassets.com/ekr/snippet.js?key=1a12342a-513e-43bb-8530-8cc919fea1ea'; var d = window.parent.document.getElementsByTagName('head')[0]; d.appendChild(dtm); var dtmf = window.parent.document.createElement('script'); dtmf.type="text/javascript"; dtmf.id = '_adobe_dtm_script_footer_tag'; dtmf.text='_satellite.pageBottom();'; var bd = window.parent.document.getElementsByTagName('body')[0];
   
    
// function setButtonURL() {
//     $zopim.livechat.window.show();
// }
// function toggleChat() {
//     $zopim.livechat.window.show();
// }

// window.$zopim||function(a,d){
// var b=$zopim=function(a){b._.push(a)},c=b.s=a.createElement(d);
// a=a.getElementsByTagName(d)[0];
// b.set=function(a){b.set._.push(a)};b._=[];b.set._=[];c.async=!0;c.setAttribute("charset","utf-8");c.src="";b.t=+new Date;c.type="text/javascript";a.parentNode.insertBefore(c,a)}
// (document,"script");

// $zopim(function(){function a(a){1<=a&&$zopim.livechat.window.show()}$zopim.livechat.setOnUnreadMsgs(a)});


// function setButtonURL(){
// javascript:$zopim.livechat.window.show();
// }

//   $(window).on('load', function() {
//     setTimeout(function() {
//         $('#exampleModal').modal('show');
//     }, 4000);
// });