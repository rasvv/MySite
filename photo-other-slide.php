<!DOCTYPE html>
<html lang="ru">
    <?php
		include "head.php"
	?>
<body>
 	<?php
		include "menu.php"
    ?>   

    <a class="a_to_slide" href="photo-other.php">Галерея</a>
    <section class="slider-top">

        <div class="slider">
            <div class="slider__item" style="background-image: url(img/Other/Full/1.jpg);"></div>
            <div class="slider__item" style="background-image: url(img/Other/Full/2.jpg);"></div>
            <div class="slider__item" style="background-image: url(img/Other/Full/3.jpg);"></div>
            <div class="slider__item" style="background-image: url(img/Other/Full/4.jpg);"></div>
            <div class="slider__item" style="background-image: url(img/Other/Full/5.jpg);"></div>
            <div class="slider__item" style="background-image: url(img/Other/Full/6.jpg);"></div>
            <div class="slider__item" style="background-image: url(img/Other/Full/7.jpg);"></div>
        </div>
    </section>

    <?php
		include "footer.php"
  ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
