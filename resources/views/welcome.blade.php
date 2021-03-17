<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Student</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/faculty">Faculty</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
            <div class="col col-8 col-sm-8 col-md-6 col-lg-6 col-xl-6">
            <table class="table">
                <tr>
                    <td>NAME</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>ROLL NO</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>ADMISSION NO</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>COLLEGE</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-outline-success">SUBMIT</button></td>
                </tr>
            </table>
            </div>
            <div class="col col-2 col-sm-2 col-md-3 col-lg-3 col-xl-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>