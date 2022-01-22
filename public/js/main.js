let form = document.querySelector('.form')
let add__btn = form.querySelector('.submit')

let btns = document.querySelectorAll('.buttons')

add__btn.addEventListener("click", () => {
    let name = form.querySelector('#name').value
    let lastname = form.querySelector('#lastname').value
    let city = form.querySelector('#city').value

        var str =
            'name=' + name +
            '&lastname=' + lastname +
            '&city=' + city

        $.ajax({
            type: "POST",
            url: "/send",
            data: str,
            cache: false,
            processData: false,
            success: function (response) {
                /* очистка формы */
                document.querySelector('#name').value = ''
                document.querySelector('#lastname').value = ''
                document.querySelector('#city').value = ''
                /* показ сообщения */
                document.querySelector('.alert').innerHTML = 'запись добавлена'
                document.querySelector('.alert').classList.add('shown')

                function alert_close() {
                    document.querySelector('.alert').classList.remove('shown')
                }
                setTimeout(alert_close, 3000);

                /* обновить таблицу */
                document.querySelector('.table').innerHTML = response
            },
            error: function (response) {
                document.querySelector('.alert2').innerHTML = 'Ошибка: запись не добавлена'
                document.querySelector('.alert2').classList.add('shown')

                function alert_close() {
                    document.querySelector('.alert2').classList.remove('shown')
                }
                setTimeout(alert_close, 3000);
            },

        });
        
        
})



/* for (let i = 0; i < btns.length; i++) {

    btns[i].querySelector('.btn_del').addEventListener("click", () => {
        delete_note(btns[i].dataset.id)
    })
    btns[i].querySelector('.btn_correct').addEventListener("click", () => {
        correct_note(btns[i].dataset.id, i)
    })
} */
/*  */

function correct_note(id, i) {
    form.querySelector('#name').value = event.currentTarget.parentElement.parentElement.parentElement.querySelector('.name').innerHTML
    form.querySelector('#lastname').value = event.currentTarget.parentElement.parentElement.parentElement.querySelector('.lastname').innerHTML
    form.querySelector('#city').value = event.currentTarget.parentElement.parentElement.parentElement.querySelector('.city').innerHTML
    form.querySelector('.button').innerHTML = 'редактировать запись'
    /* form.querySelector('.button').classList.add('hidden') */
    form.querySelector('.correct').classList.remove('hidden')


    let correct__btn = form.querySelector('.correct')
    correct__btn.addEventListener("click", () => {
        let name = form.querySelector('#name').value
        let lastname = form.querySelector('#lastname').value
        let city = form.querySelector('#city').value
        console.log(id)

        var str =
            'name=' + name +
            '&lastname=' + lastname +
            '&city=' + city +
            '&id=' + id

        $.ajax({
            type: "POST",
            url: "/correct",
            data: str,
            cache: false,
            processData: false,
            success: function (response) {
                /* очистка формы */
                document.querySelector('#name').value = ''
                document.querySelector('#lastname').value = ''
                document.querySelector('#city').value = ''
                /* показ сообщения */
                document.querySelector('.alert').innerHTML = 'запись отредактирована'
                document.querySelector('.alert').classList.add('shown')

                function alert_close() {
                    document.querySelector('.alert').classList.remove('shown')
                    form.querySelector('.correct').classList.add('hidden')
                }
                setTimeout(alert_close, 3000);

                /* обновить таблицу */
                document.querySelector('.table').innerHTML = response
            },
            error: function (response) {
                document.querySelector('.alert2').innerHTML = 'Ошибка: запись не отредактирована'
                document.querySelector('.alert2').classList.add('shown')

                function alert_close() {
                    document.querySelector('.alert2').classList.remove('shown')
                }
                setTimeout(alert_close, 3000);
            },

        });
    })


}

/*  */


function delete_note(id) {


        var str =
            'id=' + id

        $.ajax({
            type: "POST",
            url: "/del",
            data: str,
            cache: false,
            processData: false,
            success: function (response) {
                // показ сообщения 
                document.querySelector('.alert').innerHTML = 'запись удалена'
                document.querySelector('.alert').classList.add('shown')

                function alert_close() {
                    document.querySelector('.alert').classList.remove('shown')
                }
                setTimeout(alert_close, 3000);

                // обновить таблицу 
                document.querySelector('.table').innerHTML = response
            },
            error: function (response) {
                document.querySelector('.alert2').innerHTML = 'Ошибка: запись не удалена'
                document.querySelector('.alert2').classList.add('shown')

                function alert_close() {
                    document.querySelector('.alert2').classList.remove('shown')
                }
                setTimeout(alert_close, 3000);
            },

        });
        

    
}