<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="organization, scheduling, teamwork, checklists">
    <meta name="author" content="Mohamed Abdelkoddous">
    <meta name="theme-color" content="#563d7c">
    <title>Bamzooka | Home</title>

    <link rel="stylesheet" type="text/css" href="src/csscode.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/87d1c020bf.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include "header.php" ?>

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Stop the Choas. Organize Team Work with Process Checklists</h1>
                            <p>Create checklists, schedule them, assign them to your team, watch progress in real-time.
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Try Bamzooka for free</h1>
                            <div class="row">
                                <form class="form-inline m-auto" method="post" action="send_mail.php">
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control" name="email"
                                            placeholder="Your work email">
                                    </div>
                                    <button type="submit" class="btn btn-light ml-2 mb-2"
                                        style="color:#cf4647; font-weight:700">
                                        TRY FOR FREE</button>
                                </form><br>
                            </div>
                            <p style="font-size: 17px;">Already using Bamzooka ? <a href="home.php"><u>Sign in.</u></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>"Bamzooka helps document processes, organize work and improve quality of everything
                                our teams do. It solves quality, consistency, reliability and turn-over challenges many
                                organizations
                                face so that the work is done on time with predictable quality. It is a huge
                                productivity gain for any
                                team, department, and organization of any size."</h1>
                            <p>Serge Dacic, Timingcube - President</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">See more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



        <div class="container marketing">


            <div class="row">
                <div class="col-lg-4">
                    <i class="far fa-window-restore fa-6x"></i>
                    <h2>Checklists & Processes</h2>
                    <p>Describe processes as checklists. E.g.: Employee on-boarding checklist.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <i class="fas fa-cogs fa-6x"></i>
                    <h2>Calendar</h2>
                    <p>Start checklists anytime or use the built-in calendar to schedule repetitive tasks.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <i class="fas fa-globe-americas fa-6x"></i>
                    <h2>Monitor</h2>
                    <p>Watch progress in realtime and see team assignments status.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>




            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Pass / Fail Checks <span class="text-muted">It’ll blow your
                            mind.</span></h2>
                    <p class="lead">Pass / fail checks can be configured to ensure work done meets certain standards.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="/images/thumb-up.png" width="400" height="400" alt="Thumb Up" loading="lazy">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Security <span class="text-muted">See for
                            yourself.</span></h2>
                    <p class="lead">Users are grouped into teams with specific access rights.</p>
                </div>
                <div class="col-md-5 ">
                    <img src="/images/lock.png" width="400" height="400" alt="Lock" loading="lazy">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Smart <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Configure checklists with conditional logic.</p>
                </div>
                <div class="col-md-5">
                    <img src="/images/code-branch.png" width="400" height="400" alt="Code Branch" loading="lazy">
                </div>
            </div>

            <hr class="featurette-divider">



        </div>

        <?php include "footer.php" ?>

    </main>
</body>

</html>