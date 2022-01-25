
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body {
            height : 70vh;
            background-image: linear-gradient(to top right,#00C1FE, #FAFFC1);
        }

    </style>
</head>
<body>
    <main style="margin-top: 30vh;">
        <form class="mx-auto bg-light p-4" style="max-width: 400px;border-radius: 15px;">
          <h1 style="" class="ms-4 ps-2 border-start border-4 mb-3 fw-bold border-info" >E-classe</h1>
            <h2 class='text-center h5 mt-4'>SIGN IN</h2>
            <h3 class="mb-5 text-center font-weight-light h6 mt-1 text-secondary">Enter your credentials to access your account</h3>
            
            <label for="floatingInput">Email</label>
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      
            <label for="floatingPassword">Password</label>
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      
          <button class="w-100 mt-3 btn btn-lg btn-info text-white" type="submit">Sign in</button>
            <div class="mt-2 text-center text-black-50">
                <span>Forgot your password? <a class="text-info" href="#">Reset Password</a></span>
            </div>
        </form>
      </main>
</body>
</html>
