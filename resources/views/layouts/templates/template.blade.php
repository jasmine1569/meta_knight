@extends('layouts.master')
@section('title', 'Write Page Name Here') 
@section('structure')
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        													{{-- BANNER --}}
        <div class="banner__img" style="background-image: url(https://pbs.twimg.com/media/DC3Xke3XUAMX7iv.jpg);">
          <div class="container pre-overlay">
            <div class="row">
              <div class="col-md-12">
                <div class="banner__flex--cover">
                   <h1 class="banner__flex--title type--white">BANNER NAME</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="black-overlay"></div>
        </div>
      </div> {{--col-md-12 --}}
    </div> {{--row --}}
  </div> {{--container --}}
</div> {{--section --}}
															{{-- BUTTONS --}}
<div class="section">
  <div class="nav-container">  
    <a href="#" target="_blank" class="button__right type--link type--red"><i class="fa fa-long-arrow-left margin-right" aria-hidden="true"></i>Button</a>
    <a href="#" target="_blank" class="pull-right button__left type--link type--red" id="type--plus">Button<i class="fa fa-long-arrow-right margin-left" aria-hidden="true"></i></a>
  </div>
</div>
															{{-- END BUTTONS --}}
{{-- <div class="section">
	<div class="container">
		
		<div class="col-md-6 container__full--left">
      <div class="blue-bar">
        <div class="img">
            <img class="img__side-image" src="https://pbs.twimg.com/media/DC3Xke3XUAMX7iv.jpg" alt="Side Image">
        </div>
      </div>
		</div>
			

			<div class="col-md-6">
				<div class="parallax"></div>

					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque hic, eligendi veniam, laudantium, eius a molestias in quis numquam id et animi, temporibus aspernatur rerum. Sunt, reiciendis libero minima!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id porro iusto, numquam quod neque, necessitatibus laboriosam cupiditate mollitia unde voluptatum! Rerum laboriosam nemo possimus atque, necessitatibus, sit earum quaerat soluta.</p>

			</div>

	</div>
</div> --}}

<div class="section">
  <div class="container">

    <div class="col-md-6">
      <div class="blue-bar">
        <div class="img">
          <img class="img__side-image" src="https://pbs.twimg.com/media/DNOFvxkUMAAV_5x.jpg" alt="Side Image">
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="parallax">
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





@endsection

	