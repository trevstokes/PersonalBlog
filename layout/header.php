<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>A Blog by Trevor Stokes</title>

        <link rel='stylesheet' type='text/css' href='/css/style.css' />
        <link rel='stylesheet' type='text/css' href='/css/bootstrap-theme.css' />
        <link rel='stylesheet' type='text/css' href='/css/bootstrap.css' />
        <link rel='stylesheet' type='text/css' href='/css/bootstrap-theme.min.css' />
        <link rel='stylesheet' type='text/css' href='/css/bootstrap.min.css' />

        <script type='text/javascript' href='/js/bootstrap.js'></script>
        <script type='text/javascript' href='/js/jquery.js'></script>
        <script type='text/javascript' href='/js/bootstrap.min.js'></script>
        <script type='text/javascript' href='/js/jquery.min.js'></script>
        <script type='text/javascript' href='/js/respond.min.js'></script>
        <script type='text/javascript' href='/js/html5shiv.js'></script>

    </head>
    <body>
		<div class="page-header" style="padding-left:20px">
			<h1>Business and Technology - A Reasoned View <br><small>by Trevor Stokes</small></h1>
		</div>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if ($_SERVER['REQUEST_URI'] == "/") echo "class='active'"; ?>><a href="/">Home</a></li>
                        <li <?php if (strpos("//" . $_SERVER['REQUEST_URI'], "posts")) echo "class='active'"; ?>><a href="/posts/">Blog Posts</a></li>
                        <li <?php if (strpos("//" . $_SERVER['REQUEST_URI'], "about")) echo "class='active'"; ?>><a href="/about/">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
