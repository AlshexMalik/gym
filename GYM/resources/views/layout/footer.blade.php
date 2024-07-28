
 <!-- Start Contact -->
 <section class="contact " id="contact">
    <div class="container">
       <div class="content">
           <div class="box form wow slideInLeft">
              <form>
                 <input type="text" placeholder="Enter Name">
                 <input type="text" placeholder="Enter Email">
                 <input type="text" placeholder="Enter Mobile">
                 <textarea placeholder="Enter Message"></textarea>
                 <button type="submit">Send Message</button>
              </form>
           </div>
           <div class="box text wow slideInRight">
                <h2>Get Connected with Gym</h2>
                 <p class="title-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                 <div class="info">
                     <ul>
                         <li><span class="fa fa-map-marker"></span> Gali no 11, House no 11, Lahore</li>
                         <li><span class="fa fa-phone"></span> 92 9999999999</li>
                         <li><span class="fa fa-envelope"></span> info@gym.com</li>
                     </ul>
                 </div>
                 <div class="social">
                      <a href=""><span class="fa fa-facebook"></span></a>
                      <a href=""><span class="fa fa-linkedin"></span></a>
                      <a href=""><span class="fa fa-skype"></span></a>
                      <a href=""><span class="fa fa-youtube-play"></span></a>
                 </div>

                 <div class="copy">
                     PowerBy &copy; Ali Ahmad
                 </div>
           </div>
       </div>
    </div>
 </section>
<!-- End Contact -->



<!-- jquery -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
   $(document).ready(function(){

     $(".ham-burger, .nav ul li a").click(function(){
      
       $(".nav").toggleClass("open")

       $(".ham-burger").toggleClass("active");
     })      
     $(".accordian-container").click(function(){
         $(".accordian-container").children(".body").slideUp();
         $(".accordian-container").removeClass("active")
         $(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
         $(this).children(".body").slideDown();
         $(this).addClass("active")
         $(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
     })

      $(".nav ul li a, .go-down").click(function(event){
        if(this.hash !== ""){

             event.preventDefault();

             var hash=this.hash; 

             $('html,body').animate({
               scrollTop:$(hash).offset().top
             },800 , function(){
                window.location.hash=hash;
             });

             // add active class in navigation
             $(".nav ul li a").removeClass("active")
             $(this).addClass("active")
        }
     })
})

</script>
<script src="{{asset('../js/wow.min.js')}}"></script>
<script>
   wow = new WOW(
     {
       animateClass: 'animated',
       offset:       0,
     }
   );
   wow.init();
 </script>
</body>
</html>






