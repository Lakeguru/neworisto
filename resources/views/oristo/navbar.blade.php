<header>
    <nav class="navbar change navbar-fixed-top p-b-35" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <!-- <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> -->
                    <span class="c-white">MENU</span>
                </button>
                <a class="navbar-brand p-t-5" href="{{ route('index') }}"><img src="assets/img/logo.jpg" class="img-circle width-90 h-80"></a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                
                <ul class="nav navbar-nav navbar-right p-t-20 ul">
                    <li class="f1 m-r-10"><a class="btn bg-browno bd-4 c-white p-t-10 p-b-10" href="{{ route('about') }}">ABOUT</a></li>
                    <li class="f1 m-r-10"><a class="btn bg-browno bd-4 c-white p-t-10 p-b-10" href="{{ route('product') }}">PRODUCTS</a></li>
                    <li class="f1 m-r-10 dropdown show-on-hover">
                        <a href="#" class="btn bg-browno bd-4 c-white p-t-10 p-b-10" data-toggle="dropdown">SERVICES</a>
                        <ul class="dropdown-menu l-_42">
                            <li><a href="service1.html" class=""> SERVICE1 </a></li>
                            <li><a href="service2.html" class="">SERVICE2</a></li>
                            <li><a href="service3.html" class="">SERVICE3</a></li>
                        </ul>
                    </li>
                    <li class="f1 m-r-10"><a class="btn bg-browno bd-4 c-white p-t-10 p-b-10" href="{{ route('gallery') }}">GALLERY</a></li>
                    <li class="f1 m-r-10"><a class="btn bg-browno bd-4 c-white p-t-10 p-b-10" href="{{ route('contact') }}">CONTACT</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</header>
