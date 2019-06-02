<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('links')) {
        	App\Link::create([
        		'title' => 'Ўзбекистон Республикаси Конституцияси',
        		'image'  => 'https://gov.uz/media/4547c694-58cc-8ec9-aef6-1b9a2939748e.png',
        		'url' => 'http://constitution.uz/uz'
        	]);
        	App\Link::create([
        		'title' => 'Ягона интерактив давлат хизматлари портали',
        		'image'  => 'https://gov.uz/media/9cf1edbf-8d08-0a43-1f73-f89c7ef8c9f7.png',
        		'url' => 'https://my.gov.uz/'
        	]);
        	App\Link::create([
        		'title' => 'Ўзбекистон Республикаси очиқ маълумотлар портали',
        		'image'  => 'https://gov.uz/media/41c1e031-fe7c-e01e-2ce6-00271a597fd1.png',
        		'url' => 'https://dxarid.uzex.uz/'
        	]);
        	App\Link::create([
        		'title' => 'eStat 3.0 автоматлаштирилган ахборот тизими',
        		'image'  => 'https://gov.uz/media/1b32726c-e232-fbd8-cf3f-4d0a09bd4518.png',
        		'url' => 'http://stat.uz/index.php/hizmatlar/elektronnaya-otchetnost'
        	]);
        	App\Link::create([
        		'title' => 'Ўзбекистон Республикаси Қонун ҳужжатлари маълумотлари миллий базаси',
        		'image'  => 'https://gov.uz/media/be03e7fc-a81d-ee71-8897-2dc4029ff3ff.png',
        		'url' => 'http://www.lex.uz/'
        	]);
        	App\Link::create([
        		'title' => 'Ўзбeкистон Рeспубликасида элeктрон лицензиялаш',
        		'image'  => 'https://gov.uz/media/2fef45e4-9982-97b8-499e-05f566bcae57.png',
        		'url' => 'https://license.gov.uz/'
        	]);
        	App\Link::create([
        		'title' => 'Электрон почта хизмати',
        		'image'  => 'https://gov.uz/media/4b333371-195d-0b46-07fa-f3c0b25098ca.png',
        		'url' => 'http://www.umail.uz/uz_latn'
        	]);
        	App\Link::create([
        		'title' => 'Ягона идентификация тизими',
        		'image'  => 'https://gov.uz/media/a9b29887-3396-1d1b-341d-0d9d115c3730.png',
        		'url' => 'https://id.gov.uz/'
        	]);
        	App\Link::create([
        		'title' => 'Давлат ахборот ресурслари ва давлат органларининг ахборот тизимлари реестри',
        		'image'  => 'https://gov.uz/media/b90d6bb9-2847-b49d-78e2-a6dffc3570bd.png" class="newProjectIcon projectIcon10',
        		'url' => 'http://reestr.uz/'
        	]);
        	App\Link::create([
        		'title' => 'Солиқ ва молиявий ҳисоботларини электрон шаклда тақдим этиш тизими',
        		'image'  => 'https://gov.uz/media/cf4bb4e4-9654-d2d1-7eff-003c5f8a8e1f.png',
        		'url' => 'http://hisobot.uz/index/index/index/1;jsessionid=E4E0B477F468599EFA7692776EFDCA7A?lang=uz'
        	]);
        	App\Link::create([
        		'title' => 'Таълим портали',
        		'image'  => 'https://gov.uz/media/e8fe705c-efeb-fece-b6c7-c2262577d5fe.png',
        		'url' => 'http://ziyonet.uz/uzc'
        	]);
        	App\Link::create([
        		'title' => 'Корпоратив харидлар савдо тизими',
        		'image'  => 'https://gov.uz/media/6ae8db81-ea08-2a7b-c9f0-585c66f38fda.png',
        		'url' => 'https://exarid.uzex.uz/'
        	]);
        	App\Link::create([
        		'title' => 'Ўзбекистон Республикаси норматив ҳуқуқий ҳужжатларнинг муҳокамаси',
        		'image'  => 'https://gov.uz/media/4933dd71-a7f1-3dec-fca9-7794cf6cabee.png',
        		'url' => 'http://regulation.gov.uz/uz'
        	]);
        	App\Link::create([
        		'title' => 'Декларантлар портали',
        		'image'  => 'https://gov.uz/media/cc637049-fae0-42e0-6999-0f2b68e46e99.png',
        		'url' => 'http://www.customs.uz/uz/'
        	]);
        	App\Link::create([
        		'title' => 'Компьютер саводхонлигини баҳолаш тизими ',
        		'image'  => 'https://gov.uz/media/ee3e9c7f-2c2d-03a1-d825-a50c9b042368.png',
        		'url' => 'http://ksbt.uz/'
        	]);
        }
    }
}
