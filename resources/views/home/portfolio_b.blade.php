<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title> @yield('title') </title>

    <!-- CSS  -->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div id="main-body">

{{-- Navigation  --}}
<div class="navbar-fixed">
    <nav class="indigo-darken-4">
        <ul class="right hide-on-med-and-down" id="top-menu">
            <li class="active"><a href="#" class="waves-effect waves-teal nav-link link" data-id="profile">Profile</a></li>
            <li><a href="#experience" class="waves-effect waves-teal nav-link link" data-id="experience">Experience</a></li>
            <li><a href="#projects" class="waves-effect waves-teal nav-link link" data-id="projects">Projects</a></li>
            <li><a href="#skills" class="waves-effect waves-teal nav-link link" data-id="skills">Skills</a></li>
            <li><a href="#education" class="waves-effect waves-teal nav-link link" data-id="education">Education</a></li>
            <li><a href="#contact" class="waves-effect waves-teal nav-link link" data-id="contact">Contact</a></li>
        </ul>

        {{-- Mobile Navigation --}}
        <ul id="slide-out" class="side-nav">
            <li><a href="#" class="waves-effect waves-teal nav-link" data-id="profile">Profile</a></li>
            <li><a href="#" class="waves-effect waves-teal nav-link" data-id="experience">Experience</a></li>
            <li><a href="#" class="waves-effect waves-teal nav-link" data-id="projects">Projects</a></li>
            <li><a href="#" class="waves-effect waves-teal nav-link" data-id="skills">Skills</a></li>
            <li><a href="#" class="waves-effect waves-teal nav-link" data-id="contact">Contact</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </nav>
</div>

{{-- Main Container --}}
<div class="container">

    <div class="message">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <div class="alert alert-{{ $msg }} z-depth-1">
                        <div class="alert-message">{{ Session::get('alert-' . $msg) }}</div>
                        <div class="right-align"><i class="fa fa-times alert-close"></i></div>
                    </div>
                @endif
            @endforeach
        </div> <!-- end .flash-message -->
        @if (count($errors) > 0)
            <!-- Form Error List -->
            <div class="alert alert-danger z-depth-1 nav-link" data-id="contact">
                <strong>Whoops! Something went wrong!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    {{-- Profile --}}
    <div class="row box" id="profile">
        <div class="col s12">
            <div class="card indigo-lighten-5 z-depth-1">
                <div class="card-content center-align">
                    <span class="card-title left-align"><h4>Profile</h4></span>
                    <p class="profile-p">
                        Hello! I'm <strong class="cust-font">Ye Lin Htun</strong>
                        and I am a <strong>Website and Application Developer</strong> based in Singapore.
                        I enjoy working on <strong class="cust-font">usable, clean and practical</strong> web sites.
                        I have 4 years of hands-on-experience in the IT industry,
                        specialized in the area of developing application using C#, ASP.NET MVC, AngularJS, PHP, AWS
                        as well as few open source technologies. I am highly motivated to give my full commitment to my work.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Experience --}}
    <div class="row box" id="experience">
        <div class="col s12">
            <div class="card indigo-lighten-5 z-depth-1">
                <div class="card-content">
                    <span class="card-title"><h4>Experience</h4></span>
                    <div class="card-row">
                        <div class="card-company">
                            <a href="http://www.lexia-analytics.com/" target="_blank">Lexia Analytics</a>
                            <span class="card-year">2014 - Today</span>
                        </div>
                        <div class="right-align cust-font">
                            Software Engineer
                        </div>
                        <div>
                            <ul class="ul-bullet">
                                <li>Developing the Web enterprise application using C#, .NET MVC and MSSQL Server</li>
                                <li>Developing the Dashboard & Reporting Interface using C#, .NET MVC, Fusioncharts and MSSQL Server</li>
                            </ul>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-row">
                        <div class="card-company">
                            <a href="http://www.iappsasia.com/" target="_blank">iApps</a>
                            <span class="card-year">2012 - 2014</span>
                        </div>
                        <div class="right-align cust-font">
                            Senior Software Developer
                        </div>
                        <div>
                            <ul class="ul-bullet">
                                <li>Implemented APIs and Websites using CodeIgniter, PHP and Twitter Bootstrap</li>
                                <li>Database design and managed MySQL databases</li>
                                <li>Managed AWS Services - EC2, S3, RDS, SQS, SES, VPC, ElastiCache, ELB, IAM and CloudWatch</li>
                            </ul>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-row">
                        <div class="card-company">
                            <a href="http://paywhere.com/" target="_blank">Paywhere</a>
                            <span class="card-year">2012 - 2012</span>
                        </div>
                        <div class="right-align cust-font">
                            Internship
                        </div>
                        <div>
                            <ul class="ul-bullet">
                                <li>Implemented New feed activity system, Tagging system and Advanced product search function</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Projects Card --}}
    <div class="row box" id="projects">
        <div class="col s12">
            <div class="card indigo-lighten-5 z-depth-1">
                <div class="card-content">
                    <span class="card-title"><h4>Projects</h4></span>
                    <div class="card-row project-row">
                        <i class="fa fa-circle fa-custom"></i>
                        <div class="card-project">
                            <a href="http://www.lexia-analytics.com/trade-promotion-management-tpm/" target="_blank">
                                Trade Promotion Management (TPM)
                            </a>
                            <span class="card-year">
                                <a href="http://www.lexia-analytics.com/" target="_blank">
                                    Lexia Analytics
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="card-row project-row">
                        <i class="fa fa-circle fa-custom"></i>
                        <div class="card-project">
                            <a href="http://www.lexia-analytics.com/dashboard-reporting-interface-dri/" target="_blank">
                                Dashboard & Reporting Interface (DRI)
                            </a>
                            <span class="card-year">
                                <a href="http://www.lexia-analytics.com/" target="_blank">
                                    Lexia Analytics
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="card-row project-row">
                        <i class="fa fa-circle fa-custom"></i>
                        <div class="card-project">
                            <a href="https://www.myactivesg.com/" target="_blank">ActiveSG</a>
                            <span class="card-year">
                                <a href="http://www.lexia-analytics.com/" target="_blank">
                                    iApps
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="card-row project-row">
                        <i class="fa fa-circle fa-custom"></i>
                        <div class="card-project">
                            <a href="http://www.sgrating.com/web/index.php" target="_blank">SGRating</a>
                            <span class="card-year">
                                <a href="http://www.lexia-analytics.com/" target="_blank">
                                    iApps
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="card-row project-row">
                        <i class="fa fa-circle fa-custom"></i>
                        <div class="card-project">
                            <a href="https://www.ihype.sg/" target="_blank">iHype</a>
                            <span class="card-year">
                                <a href="http://www.lexia-analytics.com/" target="_blank">
                                    iApps
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Skills --}}
    <div class="row box" id="skills">
        <div class="col s12">
            <div class="card indigo-lighten-5 z-depth-1">
                <div class="card-content">
                    <span class="card-title"><h4>Skills</h4></span>
                    <div class="row">
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/ms_asp.net.png" alt="" class="responsive-img skill-logo">
                            <div class="skill-text">ASP.NET (C#)</div>
                        </div>
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/php-logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">PHP</h6>
                        </div>
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/angular-logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">AngularJS</h6>
                        </div>
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/aws-logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">AWS</h6>
                        </div>
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/javascript-logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">JavaScript</h6>
                        </div>
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/jquery-logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">jQuery</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/github-logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">Github</h6>
                        </div>
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/laravel-logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">Laravel</h6>
                        </div>
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/SQLServer-logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">MSSQL</h6>
                        </div>
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/mysql_logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">MySQL</h6>
                        </div>
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/html5-logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">HTML5</h6>
                        </div>
                        <div class="col m2 s4 center-align img-wrap">
                            <img src="/images/css3-logo.png" alt="" class="responsive-img skill-logo">
                            <h6 class="skill-text">CSS3</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Education --}}
    <div class="row box" id="education">
        <div class="col s12">
            <div class="card indigo-lighten-5 z-depth-1">
                <div class="card-content">
                    <span class="card-title"><h4>Education</h4></span>
                    <div class="card-row">
                        <div class="card-company">
                            National University of Singapore, ISS
                            <span class="card-year">2011 - 2012</span>
                        </div>
                        <div class="right-align cust-font">
                            Systems Analysis
                        </div>
                        <div class="contect-list">
                            <i class="material-icons prefix">location_on</i>
                            <div>
                                Singapore
                            </div>
                        </div>
                        <div class="contect-list">
                            <i class="material-icons prefix">web</i>
                            <div>
                                <a href="https://www.iss.nus.edu.sg/" target="_blank">
                                    iss.nus.edu.sg
                                </a>
                            </div>
                        </div>
                        <div class="contect-list">
                            <i class="material-icons prefix">book</i>
                            <div>
                                Graduate Diploma in Systems Analysis
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="card-row">
                        <div class="card-company">
                            University of Computer Studies, Yangon
                            <span class="card-year">2003 - 2007</span>
                        </div>
                        <div class="right-align cust-font">
                            Computer Science
                        </div>
                        <div class="contect-list">
                            <i class="material-icons prefix">location_on</i>
                            <div>
                                Myanmar, Yangon
                            </div>
                        </div>
                        <div class="contect-list">
                            <i class="material-icons prefix">web</i>
                            <div>
                                <a href="http://www.ucsy.edu.mm/ucsy/" target="_blank">
                                    www.ucsy.edu.mm
                                </a>
                            </div>
                        </div>
                        <div class="contect-list">
                            <i class="material-icons prefix">book</i>
                            <div>
                                Bachelor of Computer Science (Honours)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact --}}
    <div class="row box" id="contact">
        <div class="col s12">
            <div class="card indigo-lighten-5 z-depth-1">
                <div class="card-content">
                    <span class="card-title"><h4>Let's Get In Touch</h4></span>
                    <div class="row">
                        <div class="col m4 s12">
                            <div class="row">
                                <div class="col s12">
                                    <p>
                                        Do you need a website, have a question or comment?
                                        Please feel free to send me an email or fill in this handy contact form.
                                        My aim is to reply within 24 hours.
                                    </p>
                                    <div class="contect-list">
                                        <i class="material-icons prefix">phone</i>
                                        <div>
                                            <a href="tel:+6593372343" target="_top">+65 - 9337 2343</a>
                                        </div>
                                    </div>
                                    <div class="contect-list">
                                        <i class="material-icons prefix">email</i>
                                        <div>
                                            <a href="mailto:yelinhtun1987@gmail.com" target="_top">yelinhtun1987@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col m8 s12">
                            <div class="row">
                                {!! Form::open(array('url' => '/contact/submit', 'method'=> 'post', 'class' => 'col s12')) !!}
                                    <div class="row">
                                        <div class="input-field col s10">
                                            <i class="material-icons prefix">account_circle</i>
                                            {!! Form::text('name', null,
                                                array('required',
                                                    'class'=>'validate')) !!}
                                            {!! Form::label('name', 'Name', array('class' => 'icon_prefix')) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s10">
                                            <i class="material-icons prefix">email</i>
                                            {!! Form::email('email', null,
                                                array('required',
                                                    'class'=>'validate')) !!}
                                            {!! Form::label('email', 'Email', array('class' => 'icon_prefix')) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s10">
                                            <i class="material-icons prefix">subject</i>
                                            {!! Form::text('subject', null,
                                                array('required',
                                                    'class'=>'validate')) !!}
                                            {!! Form::label('subject', 'Subject', array('class' => 'icon_prefix')) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s10">
                                            <i class="material-icons prefix">message</i>
                                            {!! Form::textarea('message', null,
                                                array('required',
                                                    'class'=>'materialize-textarea')) !!}
                                            {!! Form::label('message', 'Message', array('class' => 'materialize-textarea')) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button class="btn waves-effect waves-light indigo-darken-4" type="submit" name="action">Submit
                                        <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Footer --}}
<footer class="page-footer indigo-darken-4">
    <div>
        <div class="row">
            <div class="col s12 center-align">
                <h5 class="white-text">LET'S SOCIALIZE</h5>
                <p class="grey-text text-lighten-4">
                    I'd love to hear from you! Feel free to send me an email, find me on Google Plus, follow me on Twitter and join me on Facebook.
                </p>
                <div class="follow_us">
                    <a href="https://twitter.com/facelesslucifer" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/ylinhtun" target="_blank">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/yelinhtun" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/facelesslucifer" target="_blank">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-copyright center-align">
            &copy;2015 Copyright Text
        </div>
    </div>
</footer>


{{-- Fixed Action Button --}}
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">view_headline</i>
    </a>
    <ul>
        <li>
            <a class="btn tooltipped btn-floating green nav-link"
                data-position="left" data-delay="1" data-tooltip="Go to Top"
                data-id="profile">
                <i class="fa fa-arrow-up"></i>
            </a>
        </li>
        <li>
            <a class="btn tooltipped btn-floating yellow darken-1 nav-link"
                data-position="left" data-delay="1" data-tooltip="Contact"
                data-id="contact">
                <i class="material-icons">format_quote</i>
            </a>
        </li>
        <li>
            <a class="btn tooltipped btn-floating blue"
                href="https://app.box.com/s/n70jpqyp65ynszs0ey7m3cqcngzi1wwn"
                data-position="left" data-delay="1" data-tooltip="Download CV"
                target="_blank">
                <i class="fa fa-download"></i>
            </a>
        </li>
    </ul>
</div>
</div>

<!--  Scripts-->
<script src="/js/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.js"></script>

<script src="/greensock-js/TweenMax.min.js"></script>

<script src="/js/init.js"></script>

</body>
</html>