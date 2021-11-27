<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact Us</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--header start-->
    <?php include_once("header.php")?>
    <!--header end-->
    <div class="card mb-3">
        <img src="img/b.jpg" class="card-img-top" alt="...">
        <!--Image end-->
        <div class="container">
            <h3 style="text-align:center">Contact Us</h3>
            <p style="text-align:justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and
                1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of
                Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        </div>
        <div class="container" style="text-align:left; width: 20%;">
            <form action="#">
                <fieldset>
                    <legend>Get in Touch:</legend>
                    <label for="fname">First Name:</label><br>
                    <input type="text" id="fname" name="fname" placeholder="Enter Your First Name" required><br>
                    <label for="lname">Last Name:</label><br>
                    <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name" required><br>
                    <label for="phone">Your Phone Number:</label><br>
                    <input type="phone" id="phone" name="phone" placeholder="Enter Your Phone No." required><br>
                    <label for="email">Email id:</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email id" required><br>
                    <label for="message">Message:</label><br>
                    <textarea name="msg" id="msg" cols="23" rows="5" placeholder="Enter Your Message"
                        required></textarea><br><br>
                    <button type="button" class="btn btn-outline-dark">Submit</button>
                </fieldset>
            </form>
        </div>
        <hr>
        <!--Footer Start-->
        <?php include_once("footer.php")?>
        <!--Footer End-->
</body>
</html>