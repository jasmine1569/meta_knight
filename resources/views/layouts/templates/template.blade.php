@extends('layouts.master')
@section('title', 'Write Page Name Here') 
@section('structure')
<div class="section__banner">
  <div class="container">
    <div class="col-md-12">
        													{{-- BANNER --}}
      <div class="banner__img" style="background-image: url(https://pbs.twimg.com/media/DC3Xke3XUAMX7iv.jpg);">
        <div class="container pre-overlay">
          <div class="col-md-12">
            <div class="banner__flex--cover">
               <h1 class="banner__flex--title type--white">BANNER NAME</h1>
            </div>
          </div>
        </div>
        <div class="black-overlay"></div>
      </div>
    </div> {{--col-md-12 --}}
  </div> {{--container --}}
</div> {{--section --}}
															{{-- BUTTONS --}}
<div class="section__button">
  <div class="container__button">  
    <a href="#" target="_blank" class="button__right type--link type--red"><i class="fa fa-long-arrow-left margin-right" aria-hidden="true"></i>Button</a>
    <a href="#" target="_blank" class="pull-right button__left type--link type--red" id="type--plus">Button<i class="fa fa-long-arrow-right margin-left" aria-hidden="true"></i></a>
  </div>
</div>
															{{-- END BUTTONS --}}
<div class="section__knight">
  <div class="container__knight">

    <div class="meta-md-6">
      <div class="container__img--right" data-aos="slide-right">
        <div class="blue-box" >
          <div class="img__main">
            <img class="img__side" src="http://78.media.tumblr.com/26f1db79797aaf8577a32e288c5afefd/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg" alt="Side Image">
          </div>
        </div>
      </div>
    </div>

    <div class="meta-md-6">
      <div class="container__content">
        <div class="parallax" data-aos="fade-down">
          <img src="../public/img/D.svg" class="parallax__img" alt="">
        </div>

        <div class="intro">
          <h4>HELLO WORLD</h4>
          <div class="title__bar"></div>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores ullam dolor iusto, ipsam ad incidunt aliquam placeat necessitatibus! Blanditiis laboriosam dicta sint nobis. Eveniet corrupti amet voluptas porro quos?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores ullam dolor iusto, ipsam ad incidunt aliquam placeat necessitatibus! Blanditiis laboriosam dicta sint nobis. Eveniet corrupti amet voluptas porro quos?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores ullam dolor iusto, ipsam ad incidunt aliquam placeat necessitatibus! Blanditiis laboriosam dicta sint nobis. Eveniet corrupti amet voluptas porro quos?</p>

        </div>
      </div>
    </div>

  </div>
</div>

<div class="section__knight">
  <div class="container__knight">

    <div class="meta-md-6">
      <div class="container__content">
        <div class="parallax" data-aos="fade-down">
          <img src="../public/img/F.svg" class="parallax__img" alt="">
        </div>

        <div class="intro">
          <h4>HELLO WORLD</h4>
          <div class="title__bar"></div>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores ullam dolor iusto, ipsam ad incidunt aliquam placeat necessitatibus! Blanditiis laboriosam dicta sint nobis. Eveniet corrupti amet voluptas porro quos?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores ullam dolor iusto, ipsam ad incidunt aliquam placeat necessitatibus! Blanditiis laboriosam dicta sint nobis. Eveniet corrupti amet voluptas porro quos?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores ullam dolor iusto, ipsam ad incidunt aliquam placeat necessitatibus! Blanditiis laboriosam dicta sint nobis. Eveniet corrupti amet voluptas porro quos?</p>

        </div>
      </div>
    </div>

    <div class="meta-md-6">
      <div class="container__img--left" data-aos="slide-left">
        <div class="blue-box pull-right">
          <div class="img__main">
            <img class="img__side pull-right" src="http://torontoparadise.com/wp-content/uploads/2015/06/unsplash.jpg" alt="Side Image">
          </div>
        </div>
      </div>
    </div>
{{-- Closes Parallax and col-md-6 --}}

  </div> {{--closes container--}}
</div> {{--closes section--}}

<div class="section__knight">
  <div class="container__knight">

    <div class="meta-md-6">
      <div class="container__img--right" data-aos="slide-right">
        <div class="blue-box">
          <div class="img__main">
            <img class="img__side" src="https://cdn.betakit.com/wp-content/uploads/2017/05/unsplash-hq-03.jpg" alt="Side Image">
          </div>
        </div>
      </div>
    </div>

    <div class="meta-md-6">
      <div class="container__content">
        <div class="parallax" data-aos="fade-down">
          <img src="../public/img/B.svg" class="parallax__img" alt="">
        </div>

        <div class="intro">
          <h4>HELLO WORLD</h4>
          <div class="title__bar"></div>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores ullam dolor iusto, ipsam ad incidunt aliquam placeat necessitatibus! Blanditiis laboriosam dicta sint nobis. Eveniet corrupti amet voluptas porro quos?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores ullam dolor iusto, ipsam ad incidunt aliquam placeat necessitatibus! Blanditiis laboriosam dicta sint nobis. Eveniet corrupti amet voluptas porro quos?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat asperiores ullam dolor iusto, ipsam ad incidunt aliquam placeat necessitatibus! Blanditiis laboriosam dicta sint nobis. Eveniet corrupti amet voluptas porro quos?</p>

        </div>
      </div>
    </div>

  </div>
</div>


@endsection

	