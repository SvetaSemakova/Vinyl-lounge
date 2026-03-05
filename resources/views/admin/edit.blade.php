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
<h3>Редактировать альбом</h3>
<form method="POST" action="{{ route('admin.update', $album->id) }}">
    @csrf
    <div class="mb-3">
        <label for="name">Название</label>
        <input type="text" name="name" value="{{ $album->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="author">Автор</label>
        <input type="text" name="author" value="{{ $album->author }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="price">Цена</label>
        <input type="text" name="price" value="{{ $album->price }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="popular">Popular</label>
        <input type="text" name="popular" value="{{ $album->popular }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="soundtrack">Soundtrack</label>
        <input type="text" name="soundtrack" value="{{ $album->soundtrack }}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="songs">Песни (через запятую)</label>
    <input type="text" name="songs" value="{{ $songsString ?? '' }}" class="form-control" placeholder="Введите песни через запятую">
</div>

    <button type="submit" class="btn btn-primary">Обновить</button>
</form>
</main>