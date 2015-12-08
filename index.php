

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="forms.js"></script> <!-- Конфликтовал с js.js (Надо ставить выше)-->
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<!--     <link rel="stylesheet" href="css/media.css"> -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        (function(){
            if (typeof carrotquest === 'undefined') {
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
                s.src = '//cdn.carrotquest.io/api.min.js';
                var x = document.getElementsByTagName('head')[0]; x.appendChild(s);

                carrotquest = {}; window.carrotquestasync = []; carrotquest.settings = {};
                m = ['connect', 'identify', 'track', 'auth'];
                function Build(name, args){return function(){window.carrotquestasync.push(name, arguments);} }
                for (var i = 0; i < m.length; i++) carrotquest[m[i]] = Build(m[i]);
            }
        })();
        carrotquest.connect('1758-2e30ce1ab118168801855c0305e');
    </script>

</head>
<body>
<div id="wrapper">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="logo col-lg-2 col-md-3 col-sm-3 col-xs-3 hidden-xs">
                    <a href="https://astralm.ru/"> <img src="images/logo.png" alt="logo"></a>
                </div>




                <div id="h-search" class="col-lg-7 col-md-5 col-sm-5 col-xs-5 hidden-xs" >
                    <form action="/search/index.php" id="h-search-form" name="search">
                        <input type="text" id="q" name="q"  value="" placeholder="Поиск по сайту">
                        <input type="submit" id="s" name="s"  value="">
                    </form>
                </div>

                <div class="h-contakt col-lg-3 col-md-4 col-sm-4 col-xs-4 hidden-xs">
                    <div class="h-phone">
                        <p>Телефон в Москве</p>
                        <p>+7 (499) 649-30-42</p>
                    </div>
                    <div class="h-phone">
                        <p>Техподдержка</p>
                        <p>8 (800) 700 86 68</p>
                    </div>
                    <div class="h-phone">
                        <a href="#" class="top-btn" id="top-btn">Заказать звонок</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="row">
        <div class="navbar navbar-inverse" id="menu">
            <div class="container">
                <div class="navbar-header">
                    <a href="https://astralm.ru/" class="navbar-brand hidden-lg hidden-md hidden-sm visible-xs"><img src="images/logo-long.png" height="30" width="100" style="margin-top:-7px;"></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Открыть навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="/products/">Продукты </a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/esignature/">Электронная подпись</a></li>
                                <li><a href="/products/report/">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/">1С-Отчетность</a></li>
                                <li><a href="/products/security/">Защита информации</a></li>
                                <li><a href="/products/alco/">Росалкоголь регулирование</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/">Сервис 1С-ЭТП</a></li>
                                <li><a href="/bg/">Банковская гарантия</a></li>
                                <li><a href="/sverka_nds/">Сверка НДС</a></li>
                                <li><a href="/1c-navigator/">1С:Бизнес-Навигатор</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/about/partnership/">Партнерам</a>
                        </li>
                        <li class="dropdown">
                            <a href="/news/">Новости</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/news/">Все новости</a></li>
                                <li><a href="/news/electronic-reports/">Электронная отчетность</a></li>
                                <li><a href="/news/certification_center/">Электронная подпись</a></li>
                                <li><a href="/news/astral-report/">1С-Отчетность</a></li>
                                <li><a href="/news/1c-report/">Астрал Отчет</a></li>
                                <li><a href="/news/buh-report/">Бухгалтерская отчетность</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/blog/">Блоги</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/blog/accountant_report/">Бухгалтерская отчетность</a></li>
                                <li><a href="/blog/electronic_reports/">Электронная отчетность</a></li>
                                <li><a href="/blog/astral_report/">Астрал Отчет</a></li>
                                <li><a href="/blog/1c-reports/">1С-Отчетность</a></li>
                                <li><a href="/blog/certification_center/">Электронная подпись</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/about/">О компании</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/about/">О компании</a></li>
                                <li><a href="/about/clients/">Бизнес-партнеры</a></li>
                                <li><a href="/about/reviews/">Отзывы клиентов</a></li>
                                <li><a href="/about/vacancy/">Вакансии</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/contacts/">Контакты</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--    END MENU    -->


  

    <div class="container">
        <aside class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div id="left-menu-ecp">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>1 test</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">2 test</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">3 test</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">4 test</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">4 test</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">5 test</a><br>
                </div>
                <div class="clear"></div>
            </div>
        </aside>











        <div class="open_menu hidden-lg hidden-md">
        </div>
        <aside id="aside-ecp" class="col-lg-3 col-md-3">
            <a class="ac_popap_close close_menu" href="#"></a>
            <div id="left-menu-ecp" class=" modal_menu">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>ЭЦП</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>ЭЦП для ЕГАИС</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>ВОПРОСЫ И ОТВЕТЫ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>ПРИМЕНЕНИЕ</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">Отчетность</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">Документооборот</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">Торги</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">Закупки</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">Личная подпись</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/ceny/"><span>ЦЕНЫ</span></a><br>
                    <a href="/esignature/ceny/tarify/">Тарифы</a><br>
                    <a href="/esignature/ceny/dopolnitelno/">Дополнительно</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/poryadok-polucheniya/"><span>ПОРЯДОК ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/mesta-polucheniya/"><span>МЕСТА ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/soprovozhdenie-torgov/"><span>СОПРОВОЖДЕНИЕ ТОРГОВ</span></a>
                    <a href=""></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/spisok-ploshchadok/"><span>СПИСОК ПЛОЩАДОК</span></a>
                </div>
                <div class="clear"></div>

            </div>
        </aside>









  <!-- #WORK AREA# -->
        <section id="right-content-ecp" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

            <!-- Navigation over header -->
            <nav class="navigation-container hidden-xs">
                <ul>
                    <li><a href="#" class="links">Главная</a></li>
                    <li><a href="#" class="links">Электронная отчетность</a></li>
                    <li><a href="#" class="links">Предоставление отчетности</a></li>
                    <li><a href="#" class="links active-link">Налоговый режим</a></li>
                </ul>
            </nav>
            <!-- //Navigation over header -->

            <!-- First div description -->
            <div class="main-content-law">
                <div class="main-title-article">
                    <h1>
                        Налоговые режимы
                    </h1>
                    <h4 class="main-title-type">
                        Виды налоговых режимов
                    </h4>
                </div>
               <div class="main-type-description">
                   <!--  <dl>
                        <dt>Налоговые режимы</dt>
                        <dd>
                            это порядок исчисления и уплаты налогов для индивидуального предпринимателя или
                            юридического лица, осуществляющего предпринимательскую деятельность. 
                        </dd>
                    </dl> -->
                    <p>
                        Налоговые режимы - это порядок исчисления и уплаты налогов для индивидуального предпринимателя или 
                        юридического лица, осуществляющего предпринимательскую деятельность.
                    </p>
                    <p>
                        Действующее законодательство устанавливает следующие виды налоговых режимов:
                    </p>
                    <!-- Types Laws -->
                    <div class="main-types-list">
                        <div class="list clearfix">
                            <span class="header-types">1. ОСНО</span> (общая система налогообложения). 
                            Используется при налогообложении предприятий и организаций крупного и среднего бизнеса, при этом уплате подлежат следующие виды налогов:
                            <div class="types-laws-category hidden-xs">
                                <ul>
                                   <div class="category-block">
                                        <li>
                                           <p>
                                               НДС
                                           </p>
                                       </li>
                                       <li>
                                           <p>
                                               Налог на имущество организаций
                                            </p>
                                       </li>
                                       <li>
                                          <p>
                                            НДФЛ(для ИП)
                                          </p>
                                       </li>
                                   </div>
                                   <div class="category-block">
                                        <li>
                                           <p>
                                               Налог на прибыль организаций (индивидуальные
                                               предприниматели, работающие на ОСНО,
                                               освобождаются от его уплаты)
                                            </p>
                                       </li>
                                   </div>
                                </ul>
                            </div>
                            <p>
                                С ее использованием работают предприятия, не принявшие решения о применении специальных режимов
                                налогообложения, или не имеющие права на их применение.
                            </p>
                        </div>
                        <div class="list">
                            <span class="header-types">2. УСН</span> (упрощенная система налогообложения). 
                            Может применяться на предприятиях, отвечающих определенным законодательным требованиям, касающимся
                            среднесписочной численности сотрудников, а также размера полученного за налоговый период дохода. Кроме того,
                            законодатель делает невозможным применения этой системы на предприятиях, осуществляющих свою
                            деятельность в определенных сферах.
                        </div>
                        <div class="list">
                            <span class="header-types">3. ЕСХН</span> (единый сельскохозяйственный налог). 
                            Может быть использован организациями, являющимися производителями продукции сельского хозяйства, причем доля такой продукции в общем объеме реализации должна быть не менее 70%
                        </div>
                        <div class="list">
                            <span class="header-types">4. ЕНВД</span> (единый налог на вмененный доход). 
                            Законодателем установлен перечень объектов налогообложения, которые могут облагаться таким налогом. При этом
                            на ЕНВД переводится не вся организация в целом, а лишь та ее деятельность, которая подпадает под действие
                            закона. 
                        </div>
                        <div class="list">
                            <span class="header-types">5. ПСН</span> (патентная система налогообложения). 
                            Эта система может быть использована только индивидуальными предпринимателями и только в определенных
                            сферах, перечень которых установлен законодательством. 
                        </div>
                    </div>
                    <!-- //Types Laws -->
               </div>

                <!-- Second div description -->
                <div class="sub-title-article">
                    <h2>
                        Предоставление электронной отчетности 
                        в зависимости от налогового режима 
                    </h2>
                    <h4 class="sub-title-types">Формы налоговой отчетности</h4>
                </div>
                <div class="sub-content-description">
                    <div class="sub-work-description">
                        <p>
                            Налогообложения работает организация. Электронная форма отчетности, обязательной к представлению в
                            соответствии с требованиями законодательства, установлена только для плательщиков НДС, которыми являются
                            организации, работающие на ОСН. 
                        </p>
                        <p>
                            Предприятия, отчитывающиеся по УСН, ЕНВД и другим системам налогообложения, имеют право выбора формы
                            отчетности. В том случае, если документация будет сдаваться в электронном виде, получить актуальную
                            информацию о том, как выглядит форма отчетности в соответствии с требованиями законодательства, можно с
                            помощью специализированного программного обеспечения, постоянно загружающего обновления с сервера
                            разработчика.
                        </p>
                    </div>
                    <div class="sub-work-types clearfix">
                        <div class="work-types-block">
                            <img class="img-responsive" src="images/tz-7/УСНО.png" width="119" height="120" alt="УСНО">
                            <h2>
                                Упрощенная система налогообложения
                            </h2>
                            <p>
                                Электронная отчетность
                                УСН включает в себя
                                декларацию по УСН, которую
                                необходимо подавать один
                                раз в год, и пакет
                                бухгалтерской отчетности
                            </p>
                        </div>
                        <div class="work-types-block">
                            <img class="img-responsive" src="images/tz-7/ОСНО.png" width="119" height="120" alt="ОСНО">
                            <h2>
                                Общая система налогообложения
                            </h2>
                            <p>
                                Электронная отчетность
                                ОСНО включает в себя:
                                декларации на НДС, по налогу
                                на прибыль/НДФЛ, по налогу
                                на имущество. Обязательной
                                является сдача бухгалтерской
                                отчетности.
                            </p>
                        </div>
                        <div class="work-types-block">
                            <img class="img-responsive" src="images/tz-7/ЕНДВ.png" width="119" height="120" alt="ЕНДВ">
                            <h2>
                                Единый налого на временный доход
                            </h2>
                            <p>
                                Электронная отчетность ЕНВД
                                состоит из декларации ЕНВД,
                                представляемой в ФНС раз в
                                квартал, иных налогов (в случае,
                                если в организации имеется
                                соответствующий объект
                                налогообложения),
                                бухгалтерской отчетности.
                            </p>
                        </div>
                    </div>
                    <!-- Footer Section -->
                    <div class="footer-section-description">
                        <p class="law-description-footer">
                           Выбирая программное обеспечение, позволяющее формировать и передавать отчетность в
                           контролирующие органы, стоит  обратить внимание на его функционал. Стоимость программы
                           напрямую зависит от ее возможностей: чем выше цена, тем больше видов отчетности она позволяет
                           сформировать. Выбирая программный пакет, следует точно определить, какую отчетность
                           необходимо сдавать в контролирующие органы, и, исходя из полученной информации, приобрести
                           подходящее ПО.
                        </p>
                        <p class="law-description-footer">
                           В зависимости от применяемого в организации режима налогообложения, изменяется порядок
                           формирования и сдачи отчетности в контролирующие органы. Во-первых, существуют различия в
                           перечне документации, подлежащей сдаче. Во-вторых, различаются сроки, отведенные на передачу
                           отчетности. В-третьих,  различаются способы ведения текущего учета, на основании которого
                           осуществляется формирование итоговой отчетности.
                        </p>
                        <p class="helper-description">
                            Получить консультацию по подбору подходящего программного обеспечения можно, позвонив по телефону.
                            Дежурный специалист ответит на все возникшие вопросы и поможет приобрести выбранную программу.
                        </p>
                        <a class="btn-order">Оставить завяку на заказ</a>
                    </div>
                <!-- // Footer Section -->
                </div>
            <!-- // Second div description -->
            </div>
            <!-- // Main-content-law -->
    



        </section>
    
<!-- # END WORK AREA# -->
















    </div>
    <!--    FOOTER    -->
    <footer id="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Основные разделы</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/products/" class="nav_link"Продукты</a></li>
                                <li><a href="/about/partnership/" class="nav_link">Партнерам</a></li>
                                <li><a href="/news/" class="nav_link">Новости</a></li>
                                <li><a href="/blog/" class="nav_link">Блоги</a></li>
                                <li><a href="/about/" class="nav_link">О компании</a></li>
                                <li><a href="/contacts/" class="nav_link">Контакты</a></li>
                                <li><a href="/privacy_security/" class="nav_link">Конфидициальность</a></li>
                                <li><a href="/feedback/" class="nav_link">Обратная связь</a></li>
                                <li><a href="/about/vacancy/" class="nav_link">Вакансии</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Продукты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/esignature/" class="nav_link">Электронная подпись</a></li>
                                <li><a href="/products/report/" class="nav_link">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/" class="nav_link">1С-Отчетность</a></li>
                                <li><a href="/products/security/" class="nav_link">Защита информации</a></li>
                                <li><a href="/products/alco/" class="nav_link">РАР</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/" class="nav_link">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/" class="nav_link">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/" class="nav_link">Сервис 1С-ЭТП</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Техническая поддержка</h4>
                        <nav class="footer_nav tp">
                            <ul>
                                <li>
                                    <div><span>«Астрал Отчет»</span><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет">+7 (495) 663-73-58, доб. 10</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет"><a href="mailto:#">support@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«1С Отчетность»</span><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность">+7 (495) 663-73-58, доб. 20</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность"><a href="mailto:#">1c@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«Электронные торги»</span><br/></div>
                                    <div><abbr title="Электронные торги">+7 (495) 663-73-58, доб. 11</abbr><br/></div>
                                </li>
                                <li>
                                    <div><span>Техподдержка</span><br/></div>
                                    <div><abbr title="Техподдержка">8 (800) 700-86-68</abbr><br/></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Контакты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li>
                                    <address id="add-phone">
                                        <b>Остались вопросы?</b><br>
                                        <abbr title="Телефон в Москве"><b>+7 (499) 649-30-42</b></abbr>
                                    </address>
                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">ООО «Астрал-М»</strong><br>
                                        111123, г. Москва, Шоссе Энтузиастов д. 56, стр. 32<br>
                                        офис 211 <br>
                                        <a href="mailto:#">moscow@astralnalog.ru</a>
                                    </address>

                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">Рабочие дни:</strong><br>
                                        Понедельник-Пятница<br>
                                        с 9:00 до 18:00<br>
                                    </address>
                                </li>
                                <li><a href="/contacts/">Все контакты</a></li>
                                <li><a href="/search/map.php">Карта сайта</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
        <!-- ARROW FIXED -->
        <div class="arrow_up_fix_none" id="arrow_up"></div>
        <!-- ARROW FIXED -->
        <div class="social">
            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Рабочие дни:</h5>
                <div class="f-social centered">
                    <p class="footer_span">Понедельник-Пятница<br></p>
                    <p class="footer_span">с 9:00 до 18:00</p>
                </div>
            </div>

            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Телефон</h5>
                <div class="f-social">
                    <abbr title="Phone"><b>+7 (499) 649-30-42</b></abbr>
                </div>
            </div>
            <br/>
            <h5 class="footer_link">Мы в социальных сетях</h5>
            <div class="f-social">
                <a href="http://vk.com/astralm" class="social_link social_link_vk" target="_blank">&nbsp;</a>
                <a href="http://facebook.com/astralmoscow" class="social_link social_link_fb" target="_blank">&nbsp;</a>
                <a href="http://twitter.com/MoscowAstral" class="social_link social_link_google" target="_blank">&nbsp;</a>
                <a href="http://www.youtube.com/channel/UCCzvlCiq1AlX_HiH31LXPvg/" class="social_link social_link_youtube" target="_blank">&nbsp;</a>
            </div>
        </div>
        <!-- <a href="#x" class="overlay" id="win1" style="opacity: 1;z-index: 1 !important;cursor: pointer;"></a> -->
    </footer>























    <script src="js/Modal-mine.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery-css-transform.min.js"></script>
    <script src="js/jquery-animate-css-rotate-scale.min.js"></script>
    <script src="js/jquery.quicksand.min.js"></script>

</body>
</html>