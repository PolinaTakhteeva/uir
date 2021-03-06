/**
 * Created by Станислав on 07.09.15.
 */
    count = $('#num-rows').val();
function sleepTheme(arg){
    return arg.parent().next().children().children().val();
}

/**
 * подгружаем данные в зависимости от выбранного типа вопроса
 */
$('#question-table').on('change','.select-section', function(){
    choice = $(this).val();
    var tempCount = $(this).parent().parent().attr('id').substring(4);
    token = $('.form').children().eq(0).val();
    $.ajax({
        cache: false,
        type: 'POST',
        url:   '/get-theme-for-test',
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: { choice: choice, token: 'token' },
        success: function(data){
            $('#container-'+tempCount).html(data);
        }
    });
    return false;
});

/**
 * добавление строки в таблицу
 */
$('#add-row').click(function(){
    $('#row-1').clone().appendTo('#question-table');                                                                    //копируем первую строку и добавляем в конец таблицы
    count++;
    $('tr').last().attr('id', 'row-'+count);                                                                            //добавляем идентифицирующие id
    $('tr').last().children().eq(2).children().attr('id','container-'+count);                                           //колонка темы
    $('tr').last().children().last().attr('id', 'amount-container-'+count);                                             //колонка всего вопросов такого типа
    $('tr').last().children().first().children().attr('id', 'num-'+count);                                              //колонка количества вопросов
});

/**
 * удаление строки из таблицы
 */
$('#del-row').click(function(){
    if (count > 1){
        $('#row-'+count).remove();
        count--;
    }
});


/**
 * Определение количества вопросов по указанному фильтру (Раздел, Тема, Тип)
 */
$('#question-table').on('change','.select-type, .select-theme, .select-section', function(){
    if ($('#training').prop('checked')){
        testType = 'Тренировочный';
    }
    else {
        testType = 'Контрольный';
    }
    if ($('#only-for-print').prop('checked')) {
        printable = 1;
    }
    else {
        printable = 0;
    }
    if ($(this).attr('name') == 'section[]'){                                                                           //если изменили раздел
        section = $(this).val();
        theme = 'Любая';
        type = $(this).parent().next().next().children().val();
        tempCount = $(this).parent().parent().attr('id').substring(4);
    }
    if ($(this).attr('name') == 'theme[]'){                                                                             //если изменили тему
        section = $(this).parent().parent().prev().children().val();
        theme = $(this).val();
        type = $(this).parent().parent().next().children().val();
        tempCount = $(this).parent().parent().parent().attr('id').substring(4);
    }
    if ($(this).attr('name') == 'type[]'){                                                                              //если изменили тип
        section = $(this).parent().prev().prev().children().val();
        theme = $(this).parent().prev().children().children().val();
        type = $(this).val();
        tempCount = $(this).parent().parent().attr('id').substring(4);
    }
        token = $('.form').children().eq(0).val();

    $.ajax({
        cache: false,
        type: 'POST',
        url:   '/get-amount',
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: { section: section, theme: theme, type: type, test_type: testType, printable: printable, token: 'token' },
        success: function(data){
            $('#amount-container-'+tempCount).html(data);
            $('#num-'+tempCount).attr('max', data);
        }
    });
    return false;
});

$('#page').on('change', '#only-for-print, #training', function(){
    if ($('#training').prop('checked')){
        testType = 'Тренировочный';
    }
    else testType = 'Контрольный';
    if ($('#only-for-print').prop('checked')) {
        printable = 1;
    }
    else printable = 0;
    $('.test-structure').each(function(){
        section = $(this).find('.select-section').val();
        theme = $(this).find('.select-theme').val();
        type = $(this).find('.select-type').val();

        token = $('.form').children().eq(0).val();
        var ind = $(this).find('.num').attr('id').substring(4);
        myBlurFunction(1);
        $.ajax({
            cache: false,
            type: 'POST',
            url:   '/get-amount',
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: { section: section, theme: theme, type: type, test_type: testType, printable: printable, token: 'token' },
            success: function(data){
                myBlurFunction(0);
                $('#amount-container-'+ind).html(data);
                $('#num-'+ind).attr('max', data);
            }
        });
    });
});


var myBlurFunction = function(state) {
    /* state can be 1 or 0 */
    var containerElement = document.getElementById('page');
    var overlayEle = document.getElementById('overlay');

    if (state) {
        var winHeight = $(window).height()/2 - 24;
        winHeight = winHeight.toString()

        overlayEle.style.display = 'block';
        overlayEle.style.top = winHeight.concat('px');
        containerElement.setAttribute('class', 'blur');
    } else {
        overlayEle.style.display = 'none';
        containerElement.setAttribute('class', null);
    }
};