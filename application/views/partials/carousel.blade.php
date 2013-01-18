@section('carousel')
	<br/><br/>
	<div class="row">


			<div id="myCarousel" class="carousel slide" style="height:300px">
            	<div class="carousel-inner">
              		<div class="item active">
               			 <img src="img/Screen-shot-2011-03-01-at-4.29.43-PM.png" alt="">
              		</div>
              		<div class="item">
                		<img src="img/l4131.png" alt="">
             		</div>
              		<div class="item">
               			 <img src="img/starwars.gif" alt="">
              		</div>
            	</div>
          </div>

    </div>

    <script type="text/javascript">
		$(document).ready(function () {
		    $('.carousel').carousel({
		        interval: 3000
		    });

		    $('.carousel').carousel('cycle');
		});
	</script>

	<br/><br/>
@endsection