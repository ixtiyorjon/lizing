@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>таблица</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Главная</a></li>
          <li class="breadcrumb-item active" aria-current="page">таблица</li>
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
              <h2 class=" bg-white"><span>Tablitsa </span></h2>
              <!-- <img src="img/core-img/decor.png" alt=""> -->
          </div>
        </div>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
              <th colspan="5" >
                <p>"МТЗ-1523" русумли ҳайдов тракторлари бўйича маълумот</p>
              </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col">№</th>
            <th scope="col">Вилоятлар номи</th>
            <th scope="col">Туманлар номи</th>
            <th scope="col">Лизинг олувчилар номи</th>
            <th scope="col">санаси</th>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Қашқадарё</td>
            <td>Касби</td>
            <td>Абдурахмонов Аббосбек Нарзуллаевич ф.х</td>
            <td>19.12.2017</td>
          </tr>
          <tr>
              <th scope="row">1</th>
              <td>Қашқадарё</td>
              <td>Касби</td>
              <td>Абдурахмонов Аббосбек Нарзуллаевич ф.х</td>
              <td>19.12.2017</td>
          </tr>
          <tr>
              <th scope="row">1</th>
              <td>Қашқадарё</td>
              <td>Касби</td>
              <td>Абдурахмонов Аббосбек Нарзуллаевич ф.х</td>
              <td>19.12.2017</td>
          </tr>
          <tr>
              <th scope="row">1</th>
              <td>Қашқадарё</td>
              <td>Касби</td>
              <td>Абдурахмонов Аббосбек Нарзуллаевич ф.х</td>
              <td>19.12.2017</td>
          </tr>
          <tr>
              <th scope="row">1</th>
              <td>Қашқадарё</td>
              <td>Касби</td>
              <td>Абдурахмонов Аббосбек Нарзуллаевич ф.х</td>
              <td>19.12.2017</td>
          </tr>
        </tbody>
      </table>

    </div>
  </section>
  <!-- ##### Team Member Area End ##### -->

@endsection