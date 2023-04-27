<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create rooms</h2>
    <form action="/rooms/create" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="description">
            Descriptions:
            <input type="text" name="description">
        </label><br><br>
        <label for="price">
            Price:
            <input type="text" name="price">
        </label><br><br>
        <label for="image">
            Image:
            <input type="text" name="image">
        </label><br><br>
        <button type="submit">Create room</button>
    </form>
    @if(isset($data))
    <div class="card">
        <img src="{{ asset('images/room.jpg') }}" class="card-img-top" alt="Ảnh phòng">
        <div class="card-body">
            <h5 class="card-title">{{ $data['name'] }}</h5>
            <p class="card-text">{{ $data['description'] }}</p>
            <p class="card-text">Giá: {{ number_format($data['price']) }} đồng/đêm</p>
            <a href="{{ url()->previous() }}" class="btn btn-primary">Quay lại</a>
        </div>
    </div>
    @endif

</body>
</html>
