<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Панель администратора</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('css/adstyle.css') }}" />
</head>
<body>
<header>
    <h2>Панель администратора</h2>
    <hr>
</header>
<main>
<div class="back_to_site">
    <button type="button" class="btn btn-primary"><a href="{{ url('/home') }}">Вернуться на сайт</a></button>
</div>
    <button type="button" class="btn btn-primary"><a href="{{ url('/admin/home') }}">Все товары</a></button>
    <button type="button" class="btn btn-secondary"><a href="{{ url('/admin/users') }}">Пользователи</a></button>
    <button type="button" class="btn btn-secondary"><a href="{{ url('/admin/review') }}">Отзывы</a></button>
    <button type="button" class="btn btn-secondary"><a href="{{ url('/admin/quest') }}">Вопросы</a></button>




    <h3>Добавить карточку товара</h3>

<form method="POST" action="/admin/home" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
  <label for="formFile" class="form-label">Пример ввода файла по умолчанию</label>
  <input class="form-control" type="file" id="formFile" name="img" required>
</div>
  <div class="mb-3">
    <label for="albumName" class="form-label">Введите название альбома</label>
    <input type="text" class="form-control" id="albumName" name="name" required>
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">Введите автора</label>
    <input type="text" class="form-control" id="author" name="author" required>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Введите цену</label>
    <input type="number" class="form-control" id="price" name="price" required>
  </div>
    <div class="mb-3">
    <label for="popular" class="form-label">Popular</label>
    <input type="number" class="form-control" id="popular" name="popular" required>
  </div>
    <div class="mb-3">
    <label for="soundtrack" class="form-label">Soundtrack</label>
    <input type="number" class="form-control" id="soundtrack" name="soundtrack" required>
  </div>
  <div class="mb-3">
  <label for="songs" class="form-label">Названия песен (через запятую)</label>
  <input type="text" class="form-control" id="songs" name="songs" placeholder="Песня 1, Песня 2, Песня 3" required>
</div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>


    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Изображение</th>
                <th>Название</th>
                <th>Автор</th>
                <th>Цена</th>
                <th>Popular</th>
                <th>Soundtrack</th>
                <th>Песни</th>
            </tr>
        </thead>
        <tbody>
           @foreach($albums as $album)
            <tr>
                <td>{{ $album->id }}</td>
                <td><img src="{{ asset($album->img) }}" width="100px"></td>
                <td>{{ $album->name }}</td>
                <td>{{ $album->author }}</td>
                <td>{{ $album->price }}</td>
                <td>{{ $album->popular }}</td>
                <td>{{ $album->soundtrack }}</td>
                <td>
                    @foreach($album->songs as $song)
                        <div>{{ $song->song }}</div>
                    @endforeach
                </td>
                <td>
    <form method="POST" action="{{ route('admin.destroy', $album->id) }}" style="display:inline;">
        @csrf
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>

    <form method="GET" action="{{ route('admin.edit', $album->id) }}" style="display:inline;">
        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
</body>
</html>