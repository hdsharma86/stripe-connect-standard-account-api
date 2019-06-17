<html>
    <head>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <div style="width:30%; border:1px solid #999; border-radius:10px;margin-top:20px;padding:20px;" class="container">
            <h3>Stripe Payment : Vendor Registration</h3>
            <hr />
             <form action="/payment_processor.php" method="post">
                <div class="form-group">
                    <label for="pwd">First Name:</label>
                    <input type="text" id="first_name" name="first_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="pwd">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form> 
        </div>
        
    </body>
</html>