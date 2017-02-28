$(document).ready(function () {
    number_init();
    var select_seq = 0;
    $('#btn_create').click(function () {
        var game_count = Number($('#select_count').val());
        var result_row = Number($('.result tr').length);
        // 만들어질 숫자가 현재 결과보다 많을경우 결과창 초기화
        if (game_count + result_row > 10) {
            number_remove();
        }
        for (var i = 0; i < game_count; i++) {
            var num = create_number();
            view_number(num);
            add_number(num);
        }
    })
    $('#btn_option').click(function () {
        $('.option_container').slideToggle('slow');
    })
    $('#btn_reset').click(function () {
        number_remove();
    })
    $('#btn_select').click(function () {
        if (select_seq === 0) {
            $('.option_number td').attr('class', 'number_unchecked');
            $('#btn_select').val('전체선택');
            select_seq = 1;
        }
        else {
            $('.option_number td').attr('class', 'number_checked');
            $('#btn_select').val('전체해제');
            select_seq = 0;
        }
    })
    $('.option_number td').click(function () {
        $(this).toggleClass('number_checked number_unchecked');
    })

    function number_remove() {
        $('.result tr').remove();
        $('.number td').empty().css('background-color', 'white');
    }

    function get_unchecked_number() {
        var unchecked_number = new Array();
        var arr = $('.option_number td');
        for (var i = 0; i < 45; i++) {
            if (arr[i].className === 'number_unchecked') {
                unchecked_number.push(Number(arr[i].textContent));
            }
        }
        return unchecked_number;
    }

    function create_number() {
        var num = new Array();
        var game_count = $('#select_count').val();
        var unchecked_number = get_unchecked_number();
        if (unchecked_number.length > 35) {
            alert("최소 10개의 숫자를 선택해야 합니다.")
        }
        else {
            while (num.length < 6) {
                temp = Math.floor(Math.random() * 45) + 1;
                if (unchecked_number.indexOf(temp) === -1 && num.indexOf(temp) === -1) {
                    num.push(temp);
                }
            }
            return num.sort(function (a, b) {
                return a - b;
            })
        }
    }

    function view_number(arr) {
        var background;
        for (var i = 0; i < 6; i++) {
            if (arr[i] <= 10) {
                background = '#FFEB5A';
            }
            else if (arr[i] <= 20) {
                background = '#3CA0FF';
            }
            else if (arr[i] <= 30) {
                background = '#FF4646';
            }
            else if (arr[i] <= 40) {
                background = '#5a5a5a';
            }
            else if (arr[i] <= 45) {
                background = '#3CA03C';
            }
            $('.number td').eq(i).text(arr[i]).css('background', background);
        }
    }

    function add_number(arr) {
        var row = '<tr>';
        for (var i = 0; i < 6; i++) {
            row += '<td>' + arr[i] + '</td>';
        }
        row += '</tr>';
        // 오름차순
        // $('.result > tbody:last').prepend(row);
        // 내림차순
        $('.result > tbody:last').append(row);
    }

    function number_init() {
        $('.option_number td').attr('class', 'number_checked');
    }
});