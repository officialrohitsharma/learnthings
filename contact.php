<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <link rel="stylesheet" type="text/css"
        href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/css/mdb.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-addons-4.19.2.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/Contactform.css">
    <link rel="stylesheet" href="assets/css/footerstyle.css">

    <title>Learn Things :: Contact</title>

</head>

<body>
    <?php include 'include/_header.php';?>
    <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message"/>
                    </div>
                </div>
            </form>
</div>
    <?php include 'include/_footer.php';?>

    <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/js/jquery.min.js"></script>
    <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/js/popper.min.js"></script>
    <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/js/bootstrap.min.js"></script>
    <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/js/mdb.min.js"></script>
    <script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.2/compiled-addons.min.js">
    </script>
</body>

</html>