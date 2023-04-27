<!doctype html>
<html lang="en">

<head>

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

<form  method="POST">
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@include ('error')
<div>
    @if  (isset ($info))
    <p>Name: {{$info['name']}}</p>
    <p>Name: {{$info['age']}}</p>
    <p>Name: {{$info['date']}}</p>
    <p>Name: {{$info['phone']}}</p>
    <p>Name: {{$info['web']}}</p>
    <p>Name: {{$info['address']}}</p>
    @endif
</div>

</body>

</html>