<section class="project-one">
    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>Our Projects Work<span
                    class="sec-title__tagline__right"></span></h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title">Our Previous Projects</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="project-one__carousel tolak-owl__carousel tolak-owl__carousel--basic-nav owl-carousel"
             data-owl-options='{
			"items": 1,
			"margin": 30,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": true,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"768": {
					"items": 2
				},
				"1200": {
					"items": 3
				},
				"1600": {
					"items": 4
				}
			}
			}'>
            <?php
            $fetch_work = $db_handle->runQuery("select * from previous_works order by id desc");
            $no_fetch_work = $db_handle->numRows("select * from previous_works order by id desc");
            for ($i=0; $i<$no_fetch_work; $i++){
                ?>
                <div class="item">
                    <div class="project-one__item">
                        <div class="project-one__item__image">
                            <div class="project-one__item__image__border"></div>
                            <img src="admin/<?php echo $fetch_work[$i]['file'];?>" alt="tolak">
                            <a href="#" class="project-one__item__image__rm"><span
                                    class="icofont-link"></span></a>
                            <div class="project-one__item__image__border-bottom"></div>
                        </div>
                        <div class="project-one__item__content">
                            <div class="project-one__item__number"></div>
                            <h3 class="project-one__item__title"><a href="#"><?php echo $fetch_work[$i]['title'];?></a>
                            </h3>
                            <p class="project-one__item__text">
                                <?php echo $fetch_work[$i]['small_desc'];?>
                            </p>
                        </div>
                    </div><!-- /.project-one__item -->
                </div>
                <?php
            }
            ?>
            <!-- /.item -->
    </div><!-- /.container -->
</section>