@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.navbat')</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> @lang('messages.Главная') </a></li>
          <li class="breadcrumb-item active" aria-current="page"> @lang('messages.navbat')</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Team Member Area Start ##### -->
  <section class="team-member-area mb-50">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading"> 
              <h2 class=" bg-white"><span>@lang('messages.Lizing')</span> @lang('messages.navbat')</h2>
              <!-- <img src="img/core-img/decor.png" alt=""> -->
          </div>
        </div>
      </div>

      <form class="search-container">
          <input type="text" id="search-bar" placeholder="What can I help you with today?">
          <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
      </form>
      <table class="table table-striped">
        <thead>
          <tr>
              <th colspan="3" >
                <p>Фермер хужалиги номи </p>
              </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col">1</th>
            <th scope="col">Рустам ва 3-Рейх Фермер хужалиги. Кишлок 69</th>
            <th scope="col">02.05.2019</th>
          </tr>
          <tr>
              <th scope="col">2</th>
              <th scope="col">Азиз ва Лазиз фермер хужалиги</th>
              <th scope="col">02.05.2019</th>
          </tr>
          <tr>
            <th scope="col">3</th>
            <th scope="col">Рустам ва 3-Рейх Фермер хужалиги. Кишлок 69</th>
            <th scope="col">02.05.2019</th>
          </tr>
          <tr>
              <th scope="col">4</th>
              <th scope="col">Азиз ва Лазиз фермер хужалиги</th>
              <th scope="col">02.05.2019</th>
          </tr>
          <tr>
            <th scope="col">6</th>
            <th scope="col">Рустам ва 3-Рейх Фермер хужалиги. Кишлок 69</th>
            <th scope="col">02.05.2019</th>
          </tr>
          <tr>
              <th scope="col">7</th>
              <th scope="col">Азиз ва Лазиз фермер хужалиги</th>
              <th scope="col">02.05.2019</th>
          </tr>
          <tr>
            <th scope="col">8</th>
            <th scope="col">Рустам ва 3-Рейх Фермер хужалиги. Кишлок 69</th>
            <th scope="col">02.05.2019</th>
          </tr>
          <tr>
              <th scope="col">9</th>
              <th scope="col">Азиз ва Лазиз фермер хужалиги</th>
              <th scope="col">02.05.2019</th>
          </tr>
          <tr>
            <th scope="col">10</th>
            <th scope="col">Рустам ва 3-Рейх Фермер хужалиги. Кишлок 69</th>
            <th scope="col">02.05.2019</th>
          </tr>
          <tr>
              <th scope="col">11</th>
              <th scope="col">Азиз ва Лазиз фермер хужалиги</th>
              <th scope="col">02.05.2019</th>
          </tr>
        </tbody>
      </table>

    </div>
  </section>
  <!-- ##### Team Member Area End ##### -->

@endsection