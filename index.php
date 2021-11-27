<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>KGI Tour</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!--header start-->
    <?php include_once("header.php")?>
    <!-- header end-->


    <!--Slide show start-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Plan Your Trip</h5>
                    <p>We Guide You...</p>
                    <a class="btn btn-dark" href="contact.php" role="button">Contact Us</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/e.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Friends Trip</h5>
                    <p>Enjoyment with Your Friends...</p>
                    <a class="btn btn-dark" href="contact.php" role="button">Contact Us</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/d.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Solo Trip</h5>
                    <p>Advancer & Historical is Amazing Expriance in Solo Trip.</p>
                    <a class="btn btn-dark" href="contact.php" role="button">Contact Us</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Slide show end-->
    <!--Row and Colum start-->
    <div class="container">
        <div class="row row-cols-2">
            <div class="col">
                <br>
                <h3>What is Lorem Ipsum?</h3>
                <p style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
            </div>
            <div class="col">
                <br>
                <h3>Why do we use it?</h3>
                <p style="text-align:justify">It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                    a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                    making it look like readable English. Many desktop publishing packages and web page editors now use
                    Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites
                    still in their infancy. Various versions have evolved over the years, sometimes by accident,
                    sometimes on purpose (injected humour and the like).</p>
            </div>
            <div class="col">
                <h3>Where does it come from?</h3>
                <p style="text-align:justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                    roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                    McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                    obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the
                    word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                    1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                    written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                    section 1.10.32.</p>
            </div>
            <div class="col">
                <h3>Where can I get some?</h3>
                <p style="text-align:justify">There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered alteration in some form, by injected humour, or randomised words which don't
                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                    there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
                    the Internet tend to repeat predefined chunks as necessary, making this the first true generator on
                    the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
                    sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
                    therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
            </div>
        </div>
    </div>
    <!--Row and colum end-->
    <img src="img/d.jpg" class="img-fluid" alt="...">
    <!--image-->
    <div class="container">
        <p class="lead">
        <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
        <p style="text-align:justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit anim id est laborum."</p>

        <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
        <p style="text-align:justify">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
            beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
            est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis
            nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
            autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum
            qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
    </div>
    <!--Footer Start-->
    <?php include_once("footer.php")?>
    <!--Footer End-->
</body>
</html>