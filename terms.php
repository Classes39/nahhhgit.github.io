<!DOCTYPE html>
<html>
<head>
    <title>Agree to Terms and Conditions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Terms and Conditions</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod, urna id aliquet ultrices, nunc nunc tincidunt nunc, id aliquam nunc nunc vitae nunc.</p>
        <p>Please read the <a href="terms.html" target="_blank">terms and conditions</a> before agreeing.</p>
        <form action="process.php" method="post">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="agree" id="agree">
                <label class="form-check-label" for="agree">
                    I agree to the terms and conditions
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
