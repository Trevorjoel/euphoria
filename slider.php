

<div class="slider container-fluid" id="slider">


<div class=" w3-display-container" id="slider" style="max-width: 700px">
<img class="mySlides" src="http://localhost:1234/dinosophy/wordpress/wp-content/uploads/2017/01/euphorialogo.jpg"
		style="width: 100%" alt=""> <img class="mySlides"
				src="images/SAM_2733a.jpg" style="width: 100%" alt=""> <img
				class="mySlides"
						src="images/12718336_1103817749636508_897393087672940351_n.jpg"
								style="width: 100%" alt="">
								<div
								class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft"
										style="width: 100%">
										<div class="w3-left w3-padding-left w3-hover-text-khaki"
												onclick="plusDivs(-1)">&#10094;</div>
												<div class="w3-right w3-padding-right w3-hover-text-khaki"
														onclick="plusDivs(1)">&#10095;</div>
														<span class="w3-badge demo w3-border w3-transparent w3-hover-white"
																onclick="currentDiv(1)"></span> <span
																class="w3-badge demo w3-border w3-transparent w3-hover-white"
																		onclick="currentDiv(2)"></span> <span
																		class="w3-badge demo w3-border w3-transparent w3-hover-white"
																				onclick="currentDiv(3)"></span>
																				</div>
																				</div>
																				</div>
																				<script type="text/javascript">
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function currentDiv(n) {
			showDivs(slideIndex = n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			if (n > x.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = x.length
			}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" w3-white", "");
			}
			x[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " w3-white";
		}
	</script>

