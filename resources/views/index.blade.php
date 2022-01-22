@extends("layouts.app")

@section("content")
<div class="wrapper">
    <div class="header"> Тестовое задание Гусева Андрея</div>
    <div class="form">
        <div class="form__wrapper">
            <input type="text" class="form__input" id="name" placeholder="name">
            <input type="text" class="form__input" id="lastname" placeholder="lastname">
            <input type="text" class="form__input" id="city" placeholder="city">
            <div class="button correct hidden"> изменить запись </div>
            <div class="button submit"> добавить новую запись </div>
        </div>
        <div class="alert"> В список добавлен новый ребенок</div>
        <div class="alert2"> Заполните все поля формы</div>
    </div>
    <div class="table">
        <div class="table__container">
            <div class="table__row">
                <div class="table__cell">Имя</div>
                <div class="table__cell">Фамилия</div>
                <div class="table__cell">Город</div>
                <div class="table__cell"></div>
            </div>
            @foreach($children as $child)
            <div class="table__row">
                <div class="table__cell name">{{$child->name}}</div>
                <div class="table__cell lastname">{{$child->lastname}}</div>
                <div class="table__cell city">{{$child->city}}</div>
                <div class="table__cell">
                    <div class="buttons" data-id="{{$child->id}}">
                        <button class="btn btn_del" onclick="delete_note({{$child->id}})">Удалить</button>
                        <button class="btn btn_correct" onclick="correct_note({{$child->id}})">Изменить</button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</div>

@endsection