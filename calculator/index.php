<html>
    <head>
        <title>Calculator</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="public/js/script.js"></script>
    </head>
    <body>
    <div class="container">
        <h2>Calculator</h2>
        <form>
            <div class="form-group">
                <label for="value">Estimated value of the car</label><input type="text" class="form-control value-class" id="value" />
            </div>
            <div class="form-group">
                <label for="tax">Tax percentage</label><input type="text" class="form-control tax-class" id="tax" />
            </div>
            <div class="form-group">
                <label for="instalments">Number of instalments</label><input type="text" class="form-control instalments-class" id="instalments" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary float-right" id="calculate">Calculate</button>
            </div>
        </form>
        </div>
        <div id="calculation-result"></div>
    </body>
</html>
