
    <div class="container">
        <div class="item">
            <div class="row row2">
                <h3>Available Courses</h3>
                <?php foreach($courses as $course): ?>
                <div class="col-sm-3" style="margin-bottom: 20px;"><div class="col-item">
                        <div class="photo">
                            <img src="<?php echo base_url().'assets/course_image/'.$course->course_image; ?>" class="img-responsive" alt="<?php echo $course->course_image; ?>" />
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-6">
                                    <h5>
                                        <?php echo $course->course_title; ?></h5>

                                    <h5 class="price-text-color">
                                        <?php echo $course->course_price; ?></h5>
                                </div>
                                <br/>
                                <div class="rating hidden-sm col-md-6">
                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                    </i><i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                <p class="btn-details">
                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
        <hr/>
