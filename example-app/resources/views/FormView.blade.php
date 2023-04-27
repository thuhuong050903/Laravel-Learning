<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album example · Bootstrap</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>
   form {
    max-width: 600px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    }

    form label {
        display: block;
        margin-bottom: 8px;
    }

    form input[type="text"],
    form input[type="number"],
    form input[type="date"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 16px;
    }

    form button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    form button[type="submit"]:hover {
        background-color: #45a049;
    }

  </style>


</head>

<body>

<form action="/process-form" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" name="age" class="form-control" id="age" placeholder="Enter age">
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" name="date" class="form-control" id="date" placeholder="Enter date">
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
    </div>
    <div class="form-group">
        <label for="web">Web:</label>
        <input type="text" name="web" class="form-control" id="web" placeholder="Enter website URL">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="Enter address">
    </div>
    <div>
    @include ('error')
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
    @if  (isset ($info))
    <p>Name: {{$info['name']}}</p>
    <p>Name: {{$info['age']}}</p>
    <p>Name: {{$info['date']}}</p>
    <p>Name: {{$info['phone']}}</p>
    <p>Name: {{$info['web']}}</p>
    <p>Name: {{$info['address']}}</p>
</div>

</body>

</html>