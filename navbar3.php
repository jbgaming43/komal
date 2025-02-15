
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<style>
    nav h5{
        font: normal 30px 'Cookie', cursive;
    }
    nav #info{
        font-size: 18px;
        font-family: cursive;
        font-weight: bold;
        margin-left: -200px;
    }
    #navbar4{
            max-height: 3rem;
    }
    @media only screen and (max-width : 1024px) { 
        nav #info{
            margin-left: 0;
        }
        #navbar4{
            max-height: none;
        }

    }
</style>

<!-- navabar -->
<nav class="navbar navbar-expand-lg bg-light" id="navbar4">
        <div class="container-fluid">
            <img src="../images/logo.png" style="width: 3rem; margin-right: 1.1rem;">
            <h5 style="margin-top: 0.3rem;">Berkah Jaya Baby Shop </h5>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-5 col d-flex justify-content-center mb-lg-0" id="info">
                    <li class="nav-item active"><a href="../index.php" class="nav-link text-uppercase font-weight-bold">Home</a></li>
                            <li class="nav-item"><a href="../About_us.php" class="nav-link text-uppercase font-weight-bold">About us</a></li>
                            <li class="nav-item"><a href="./index.php" class="nav-link text-uppercase font-weight-bold">Catalog</a></li>
                </ul>
                <div class="navbar-icons">
                    <a href="../login/index.php"><i class="fa-solid fa-circle-user fa-2xl" style="color: black;"></i></a>
                </div>
            </div>
        </div>
    </nav>
