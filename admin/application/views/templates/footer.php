<footer class="footer bg-dark">
      <div class="container text-white">
	  <div class="mt-2">
        <span>
		<br/>Made With <i class="fa fa-heart" style="color:#ff501b;"></i> By OURCITRUS TEAM.<br/><br/>
		<address>
		<strong>OurCitrus Office</strong> <i class="fa fa-connectdevelop" aria-hidden="true"></i><br>
		Mutiara Regency Blok A-1 / No.55<br>
		Sidoarjo, Jawa Timur 61225<br>
		<abbr title="Telepon Kantor">Phone :</abbr> 031 - 9971 5225
		</address>
		</span><br/>
		</div>
      </div>
    </footer>


<!-- Optional JavaScript -->
	
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
<script type="text/javascript">

 var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>

<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
	
  </body>
</html>