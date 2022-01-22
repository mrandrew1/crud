<div class="table__container">
    <div class="table__row">
        <div class="table__cell">Имя</div>
        <div class="table__cell">Фамилия</div>
        <div class="table__cell">Город</div>
        <div class="table__cell"></div>
    </div>
    @foreach($children as $child)
    <div class="table__row">
        <div class="table__cell name"> {{$child->name}}</div>
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
