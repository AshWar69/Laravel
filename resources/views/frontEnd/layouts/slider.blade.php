<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset('frontEnd/images/home/ban1.jpg')}}" class=" img" style="width: 100%;" alt="" />
                        </div>
                        <div class="item">
                                <img src="{{asset('frontEnd/images/home/ban2.jpg')}}"  class=" img" alt=""  style="width: 100%; height: 50%;"/>
                        </div>

                        <div class="item">
                                <img src="{{asset('frontEnd/images/home/ban3.jpg')}}" class=" img" alt=""  style="width: 100%; height: 50%;"/>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
