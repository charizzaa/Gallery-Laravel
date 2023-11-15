<@php
    session_start();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />   
</head>

<body>
    <div id="navbar-container">
        <div id="navbar"> 
            <h4>CV WEBSITE</h4>
            <ul id="list-konten">
                <li><a href="">Home</a></li>
                <li><a href="">About Me</a></li>
                <li><a href="">Portofolio</a></li>
                <li><a href="">Contact</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
            </ul>
        </div>
    </div>

    <section id="data-diri">

        <div id="container-1">

            <div id="content1-kiri">
                    <h4>Hello, </h4>
                    <h1>I'm Charizza Thunjung Sukmana Putra</h1>
                    <p>Software Engineering Student</p>

                <div class="d-block p-2  start-50 top-0">
                    <div class="d-inline p-2  start-50 top-0">
                        <img id="images-1" src="images/google.png" class="img-thumbnail" alt="...">
                    </div>
                    <div class="d-inline p-2  start-50 top-0">
                        <img id="images-1" src="images/facebook.png" class="img-thumbnail" alt="...">
                    </div>
                    <div class="d-inline p-2  start-50 top-0">
                        <img id="images-1" src="images/linkedin.png" class="img-thumbnail" alt="...">
                    </div>
                    <div class="d-inline p-2  start-50 top-0">
                        <img id="images-1" src="images/instagram.png" class="img-thumbnail" alt="...">
                    </div>
                </div>

            </div>

            <div id="content1-kanan">
                <div class="d-flex justify-content-center">
                    <img src="images/Charizza.png" alt="profile">
                </div>
            </div>

        </div>    

    </section>

    <section id="latar-belakang">
        <h2>About Me</h2>
        <div id="container-2">

            <div id="content2-kiri">
                <h5> A Software Engineering Technology student at Vocational School of Gadjah Mada University. 
                    Has experiences in campus organizations. Familiar with secretarial tasks, event planning, 
                    graphic design, and web development. Interested in graphic design and web development. 
                    I am a reliable individual who excels both in solo work and team collaborations. 
                    I am detail-oriented, persistent, adaptable, critical thinker.</h2>
                </h2>
                </h2>
                </div>

            <div id="content2-kanan">
                <h5>Programming</h5>
                <div id="progress-bar">
                    <div id="progress-1"></div>
                </div>
                <h5>Communication</h5>
                <div id="progress-bar">
                    <div id="progress-2"></div>
                </div>
                <h5>Teamwork</h5>
                <div id="progress-bar">
                    <div id="progress-3"></div>
                </div>
                <h5>Technical</h5>
                <div id="progress-bar">
                    <div id="progress-4"></div>
                </div>
            </div>
        </div>

    </section>

    <section id="portofolio">
        <h2>My Portofolio</h2>
        <div id="content-3">
            <div class="card text-bg-light text-center mb-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Mobile App Redesign</h5>
                  <p class="card-text">Redesigning Starbucks' mobile app to become more efficient</p>
                  <img src="images/mobileappsredesign.png" alt="starbucks">
                </div>
            </div>  
            <div class="card text-center text-bg-light mb-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Instagram Carrousel</h5>
                  <p class="card-text">Designing Instagram posts for Pameo.</p>
                  <img src="images/igpost.png" alt="pameo">
                </div>
            </div> 
            <div class="card text-center text-bg-light mb-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">SkinDiary</h5>
                  <p class="card-text">Designing Beauty App</p>
                  <img src="images/SkinDiary.png" alt="SkinDiary">
                </div>
            </div> 
        </div>
    </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>