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
    <button type="button" class="btn btn-secondary"><a href="{{ url('/admin/home') }}">Все товары</a></button>
    <button type="button" class="btn btn-secondary"><a href="{{ url('/admin/users') }}">Пользователи</a></button>
    <button type="button" class="btn btn-primary"><a href="{{ url('/admin/review') }}">Отзывы</a></button>
    <button type="button" class="btn btn-secondary"><a href="{{ url('/admin/quest') }}">Вопросы</a></button>


<table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>ФИО</th>
                <th>Звезды</th>
                <th>Текст</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
           @foreach($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->name }}</td>
                <td>{{ $review->stars }}</td>
                <td>{{ $review->text }}</td>
                <td>
    <form method="POST" action="{{ route('admin.destroy_review', $review->id) }}" style="display:inline;">
        @csrf
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
</body>
</html>