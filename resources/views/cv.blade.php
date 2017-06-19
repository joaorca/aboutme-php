<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$pageTitle}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-xs-12">
            <div id="photo-header" class="text-center">
                <div id="photo">
                    <img src="img/avatar.jpg" alt="avatar">
                </div>
                <div id="text-header">
                    <h1>Olá,<br> meu nome é <span>{{$myName}}</span> e isso é um pouco sobre mim</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-7">

            <!-- ABOUT ME -->
            <div class="box">
                <h2>About Me</h2>
                <p>{{$aboutMe}}</p>
            </div>

            <!-- EDUCATION -->
            <div class="box">
                <h2>Formação</h2>
                <ul id="education" class="clearfix">
                    @foreach ($formacao as $item)
                    <li>
                        <div class="year pull-left">{{$item['ano']}}</div>
                        <div class="description pull-right">
                            <h3>{{$item['titulo']}}</h3>
                            <p>{{$item['nivel']}}, {{$item['instituicao']}}</p>
                        </div>
                    </li>
                  @endforeach
                </ul>
            </div>

            <!-- EXPERIENCES -->
            <div class="box">
                <h2>Experiências</h2>
                @foreach ($experiencias as $item)
                <div class="job clearfix">
                    <div class="col-xs-3">
                        <div class="where">{{$item['where']}}</div>
                        <div class="year">{{$item['year']}}</div>
                    </div>
                    <div class="col-xs-9">
                        <div class="profession">{{$item['profession']}}</div>
                        <div class="description">{{$item['description']}}</div>
                    </div>
                </div>
              @endforeach
            </div>

            <div class="box">
                <h2>Cursos Livres</h2>
                @foreach ($cursosLivres as $item)
                  <div class="job clearfix">
                      <div class="col-xs-12">
                          <div class="profession">{{$item['info1']}}</div>
                          <div class="description">{{$item['info2']}}</div>
                      </div>
                  </div>
                @endforeach
            </div>

        </div>

        <div class="col-xs-12 col-sm-5">

            <!-- CONTACT -->
            <div class="box clearfix">
                <h2>Contatos</h2>
                @foreach ($contact as $item)
                  <div class="contact-item">
                      <div class="icon pull-left text-center">
                        <span class="fa fa-{{$item['icon']}} fa-fw"></span>
                      </div>
                      @if (isset($item['title']))
                      <div class="title @if (!isset($item['description'])) only @endif pull-right">
                        {{$item['title']}}
                      </div>
                      @endif
                      @if (isset($item['description']))
                      <div class="description @if (!isset($item['title'])) only @endif pull-right">
                        {{$item['description']}}
                      </div>
                      @endif
                  </div>
                @endforeach
            </div>

            <!-- SKILLS -->
            <div class="box">
                <h2>Skills</h2>
                <div class="skills">
                    @foreach ($skills as $item)
                      <div class="item-skills" data-percent="{{$item['percent']}}">
                        {{$item['description']}}
                      </div>
                    @endforeach
                    <div class="skills-legend clearfix">
                        <div class="legend-left legend">Beginner</div>
                        <div class="legend-left legend"><span>Proficient</span></div>
                        <div class="legend-right legend"><span>Expert</span></div>
                        <div class="legend-right legend">Master</div>
                    </div>
                </div>
            </div>

            <!-- LANGUAGES -->
            <div class="box">
                <h2>Idiomas</h2>
                <div id="language-skills">
                @foreach ($languages as $item)
                  <div class="skill">{{$item['language']}}
                      <div class="icons pull-right">
                          <div style="width: {{$item['percent']}}%;" class="icons-red"></div>
                      </div>
                  </div>
                @endforeach
                </div>
            </div>

            <!-- HOBBIES -->
            <div class="box">
                <h2>Hobbies</h2>
                @foreach ($hobbies as $item)
                  <div class="hobby">{{$item}}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- JQUERY -->
<script src="js/jquery.min.js"></script>
<!-- BOOTSTRAP -->
<script src="js/bootstrap.min.js"></script>
<!-- SCRIPTS -->
<script src="js/scripts.js"></script>

</body>
</html>
