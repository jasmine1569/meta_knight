@extends('layouts.master')
@section('title', 'Write Page Name Here') 
@section('structure')
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
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
        <a href="#" target="_blank" class="button__right type--link type--red"><i class="fa fa-long-arrow-left margin-right" aria-hidden="true"></i>Button</a>
        <a href="#" target="_blank" class="pull-right button__left type--link type--red" id="type--plus">Button<i class="fa fa-long-arrow-right margin-left" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

	