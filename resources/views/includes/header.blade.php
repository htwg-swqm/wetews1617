<div class="row">
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Mein Perfekter Garten</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/species_search">Pflanzenlexikon</a></li>
                        <li><a href="#">Mein Garten</a></li>
                        <li><a href="#">Pflege</a></li>
                    </ul>
                    @if (Auth::check())
                        <ul class="nav navbar-bar navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle underline" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <form method="POST" action="/logout" accept-charset="UTF-8" name="logout-form" id="logout-form">
                                    <li>
                                            {{ csrf_field() }}
                                            <button type="submit">Log Out</button>
                                    </li>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle underline" data-toggle="dropdown"
                                   role="button"
                                   aria-haspopup="true" aria-expanded="true">Einloggen <span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/register" class="btn">Registrieren</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Anmelden</li>
                                    <li>
                                        <div class="col-md-12">
                                            <form action="/login" role="form" method="POST">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label class="control-label"
                                                           for="exampleInputEmail1">Email-Adresse</label>
                                                    <input class="form-control" id="exampleInputEmail1"
                                                           placeholder="Enter email" type="email" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label"
                                                           for="exampleInputPassword1">Passwort</label>
                                                    <input class="form-control" id="exampleInputPassword1"
                                                           placeholder="Password" type="password" name="password">
                                                </div>
                                                <button type="submit" class="btn btn-default">Anmelden!
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
    </header>
</div>