( function( $, undefined ) {

    var $pointers = $('.pointer'),
        pointerID = 1, //идентификатор выбранной точки на графике
        tween, motionPath;

    TweenMax.set("#boat", {transformOrigin:"center", xPercent:0, yPercent:0});

    //инициализация начального состояния графика
    $( initPoints() );

    //инициализация графика
    function initPoints() {
        var $pointerBox = $('#point_1');

        //подсвечиваем первую вешку по умолчанию при загрузке страницы
        checkPointer( $pointerBox );
    }

    $pointers.on('mouseover', function() {
        var $pointer = $(this);

        //подсвечиваем вешку под мышкой
        checkPointer( $pointer.parent('g') );
    });

    $pointers.on('mouseout', function() {
        var $pointer = $(this);

        //выходим из функции, если текущй элемент выбран
        if( parseInt($pointer.parent('g').attr('id').split('_')[1]) === pointerID ) return;

        //приводим элемент к неактивному виду
        uncheckPointer( $pointer.parent('g') );

    });

    //функция обрабатывает поведение при клике на вешку графика
    $pointers.on('click', function() {
        var $pointer = $(this),
            $pointerBox, startPoint,
            $historyList = $('#history-container').find('ul'),
            listH = $historyList.find('li').eq(0).innerHeight();

        //если клик прошел по уже выбранной вешке, выходим
        if( parseInt($pointer.parent('g').attr('id').split('_')[1]) === pointerID ) return;

        //находим родителя текущей вешки
        $pointerBox = $('#point_' + pointerID);
        //и деактивируем ее
        uncheckPointer( $pointerBox );
        //активируем новую выбранную вешку
        checkPointer( $pointer.parent('g') );
        //запоминаем идентификатор вешки
        startPoint = pointerID;
        //присваиваем переменной идентификатор новой вешки
        pointerID = parseInt($pointer.parent('g').attr('id').split('_')[1]);
        //вызываем анимацию кораблика
        moveBoard( startPoint, pointerID );
        //прокручиваем список под графиком согласно новому идентификатору
        $historyList.animate({ top: -1 * ( pointerID - 1 ) * listH }, 500);

    });

    //функция подсвечмвает активный элемент
    function uncheckPointer( pointerBox ) {
        pointerBox.find('circle').css('fill', '#44A2C9');
        pointerBox.find('rect').css('fill', 'none');
        pointerBox.find('text').css('fill', '#000000');
    }

    //функция подсвечмвает активный элемент
    function checkPointer( pointerBox ) {
        pointerBox.find('circle').css('fill', '#E31E24');
        pointerBox.find('rect').css('fill', '#E31E24');
        pointerBox.find('text').css('fill', '#FFFFFF');
    }

    function moveBoard( startPoint, endPoint, direction ) {
        var pathL = [20, 15, 17, 14, 19, 21], //условные длины каждого отрезка пути между вешками
            v = 20, i, delay = 0; //v-скорость кораблика (условная)

        if( endPoint - startPoint > 0 ) { //если новая вешка левее предыдущей, двигаем кораблик вперед
            while( startPoint < endPoint ) { //запускаем анимацию для каждого отрезка пути, пока не дойдем до конечной точки

                motionPath = MorphSVGPlugin.pathDataToBezier("#path_" + startPoint, {align: "#boat"}); //задаем текущий отрезок пути из svg
                tween = TweenMax.to("#boat", pathL[startPoint - 1] / v, { //расчитываем время прохождения отрезка для поддержки услвно одинаковой скорости на всем пути по формуле t = S / v
                    delay: delay, //устанавливаем общую задержку предыдущих отрезков  перед началом анимации следующего отрезка для непрерывного движения на стыках путей
                    bezier: {values: motionPath, type: "cubic", autoRotate: 18},
                    ease: Linear.easeNone,
                    repeat: 0
                });
                delay += pathL[startPoint - 1] / v; //суммируем задержки всех предыдущих путей для текущего отрезка
                startPoint++; //переходим на следующую точку
            }
        } else { //иначе, двигаем назад
            while( startPoint > endPoint ) { //двигаем от большей вешки к меньшей
                startPoint--;
                motionPath = MorphSVGPlugin.pathDataToBezier("#path_" + startPoint, {align: "#boat"});
                tween = TweenMax.from("#boat", pathL[startPoint - 1] / v, { //расчитываем время прохождения отрезка в обратном направлении
                    delay: delay,
                    bezier: {values: motionPath, type: "cubic", autoRotate: 18},
                    ease: Linear.easeNone,
                    repeat: 0
                });
                delay += pathL[startPoint - 1] / v;
            }
        }

    }

})(jQuery);