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






  
// zendesk chat



zE(function() {
  $zopim.livechat.setOnUnreadMsgs(function(numUnread){

   if(numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
    $zopim.livechat.window.show();
  }
})
});

function setButtonURL(){
  //CUGICHelper.bubbleChat.toggle();
  $zopim.livechat.window.toggle();
  //LC_API.open_chat_window();
  // Tawk_API.toggle();
  //tidioChatApi.open();
  }
