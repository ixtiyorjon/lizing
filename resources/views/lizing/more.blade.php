@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/12.png');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Лизинг техника</h2>
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
          <li class="breadcrumb-item active" aria-current="page">Лизинг техника</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Team Member Area Start ##### -->
  <section class="team-member-area mb-50 pukav" >
    <div class="container">
      <div class="row">
          
          <div class="col-12 col-sm-12 col-lg-5">
                <div class="detail-gallery">
                    <div class="mid">
                      <img src="/img/bg-img/19.jpg" alt=""/>
                    </div>
                    <div class="gallery-control">
                      <div class="carousel"  data-visible="4">
                        <ul class="list-none">
                          <li><a href="#" class="active"><img src="/img/bg-img/19.jpg" alt=""/></a></li>
                          <li><a href="#"><img src="/img/bg-img/20.jpg" alt=""/></a></li>
                          <li><a href="#"><img src="/img/bg-img/21.jpg" alt=""/></a></li>
                        </ul>
                      </div>
                      <a href="#" class="prev"><i class="icon ion-ios-arrow-thin-left"></i></a>
                      <a href="#" class="next"><i class="icon ion-ios-arrow-thin-right"></i></a>
                    </div>
                </div>
                  <!-- End Gallery -->
          </div>
          
          <div class="col-12 col-sm-12 col-lg-7">
              <div class="tinfo mb-30 listpro">
                  <div class="tinfoname">
                      Трактор сельскохозяйственный Agroplus 410F с базовым оснащением
                  </div>
                  <div class="tinfosumm">
                      <ul>  
                        <li>Техника нархи:  <span>585 210 000 мл,сум</span></li>
                        <li>Аванс суммаси:   <span>117 042 000 мл,сум</span></li>
                        <li>Аванс:           <span>20%</span></li>
                        <li>йиллик маржа:    <span>7%</span></li>
                        <li>Лизинг муддати:   <span>7,10,12 йилгача</span></li>
                        <li>Техника етказиб муддати:   <span> 120 кун</span></li>
                      </ul>
                      <!-- <div class="tinfopad d-flex tpaoku justify-content-between">
                          <a href="#" class="detailskonkulatr">Калькулятор</a>
                          <a href="#">Оформить</a>
                      </div> -->
                  </div>
              </div>
          </div>

          <div class="col-12 col-sm-12 col-lg-12">
              <table class="table table-striped tavatble">
                  <!-- <thead>
                    <tr>
                        <th colspan="2" >
                          <p>Трактор сельскохозяйственный Agroplus 410F с базовым оснащением </p>
                        </th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <th scope="col">Параметр</th>
                      <th scope="col">Значение</th>
                    </tr>
                    <tr>
                      <td>Макс. конструктивная скорость (км/ч)</td>
                      <td>	40</td>
                    </tr>
                    <tr>
                        <td>Код вида ТС</td>
                        <td>	53001</td>
                    </tr>
                    <tr>
                        <td>Масса</td>
                        <td> 3000</td>
                    </tr>
                    <tr>
                        <td>Срок полезного использования (классификатор амортизационных групп), лет</td>
                        <td>	5</td>
                    </tr>
                    <tr>
                        <td> Мощность двигателя (л.с.)</td>
                        <td> 	85</td>
                    </tr>
                    <tr>
                        <td> Доступен по программе ОПТ</td>
                        <td> 	Да</td>
                    </tr>
                    <tr>
                        <td> Срок отгрузки (с даты отгрузочной разнарядки), дней:</td>
                        <td> 	30</td>
                    </tr>
                    <tr>
                        <td>Максимальный срок договора лизинга:</td>
                        <td> 	5</td>
                    </tr>

                  </tbody>
                </table>
          </div>
            
    </div>
  </section>
  <!-- ##### Team Member Area End ##### -->

@endsection