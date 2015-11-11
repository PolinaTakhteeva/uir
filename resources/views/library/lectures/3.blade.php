<!DOCTYPE html>
<html lang="en">
<head>
    <title>Лекция 3</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    {!! HTML::style('css/bootstrap.css') !!}
    {!! HTML::style('css/materialadmin.css') !!}
    {!! HTML::style('css/font-awesome.min.css') !!}
    {!! HTML::style('css/material-design-iconic-font.min.css') !!}
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {!! HTML::script('js/libs/utils/html5shiv.js') !!}
    {!! HTML::script('js/libs/utils/respond.min.js') !!}
    <![endif]-->


</head>
<body>
<section>

<div class="col-md-12 col-sm-6 card style-primary text-center">
    <h1 class="text-default-bright">Библиотека</h1>
</div>

<!-- BEGIN CONTENT-->
<div id="content">

<!-- BEGIN BLANK SECTION -->
<section>
    <div class="section-header">
        <ol class="breadcrumb">
            <li>{!! HTML::linkRoute('home', 'Главная') !!}</li>
            <li>{!! HTML::linkRoute('library_index', 'Библиотека') !!}</li>
            <li class="active">Лекция 3. Теоремы Шеннона.</li>
        </ol>
    </div><!--end .section-header -->
    <div class="section-body">
    </div><!--end .section-body -->
</section>
<div class="card card-tiles style-default-light" style="margin-left:2%; margin-right:2%">
<article class="style-default-bright">
<div class="card-body">
<article style="margin-left:10%; margin-right:10%; text-align: justify">
			
<p><strong><u>Теорема&nbsp; Шеннона №1 </u></strong></p>

<p><strong>Всякая машина Тьюринга <em>А</em> может быть преобразована в эквивалентную машину <em>В</em> не более чем с двумя внутренними состояниями.</strong></p>

<p style="margin-left:9pt"><strong><u>Доказательство</u></strong></p>

<p>Доказательством теоремы будет схема построения такой машины. Причем строить будем, по сути, универсальную машину Тьюринга, использующую одну ленту и имеющую лишь два внутренних состояния, которая сможет моделировать работу любой машины Тьюринга.</p>

<p>Пусть машина <strong><em>А</em></strong> содержит:</p>

<ul>
	<li><strong>m</strong> символов внешнего алфавита <strong>a</strong><strong><sub>1,&hellip;,</sub></strong><strong><sub>j</sub></strong><strong><sub>,&hellip;,</sub></strong><strong><sub>m</sub></strong>,</li>
</ul>

<ul>
	<li><strong>n</strong> внутренних состояний <strong>S</strong><strong><sub>1,&hellip;,</sub></strong><strong><sub>i</sub></strong><strong><sub>,&hellip;,</sub></strong><strong><sub>n</sub></strong>,</li>
</ul>

<p>Тогда машина <strong><em>В</em></strong> будет содержать:</p>

<ul>
	<li>два&nbsp; внутренних состояния<strong> &alpha;</strong> и <strong>&beta;</strong>,</li>
	<li><strong>m</strong> обычных символов внешнего алфавита <strong>b<sub>i</sub></strong> , являющихся аналогами <strong>a<sub>i</sub></strong>,</li>
	<li><strong>4</strong><strong>mn</strong> особенных символов <strong>b</strong>, за счет которых производится расширение внутренней памяти.</li>
</ul>

<p><strong>Общая идея построения</strong></p>

<p>В общих чертах метод построения таков. Для произ&shy;вольной машины Тьюринга <strong><em>А</em></strong> с алфавитом из <strong><em>m</em></strong> букв (сим&shy;волов, записываемых на ленте, включая пустой символ) и с <strong><em>n</em></strong> внутренними состояниями мы построим машину <strong><em>В</em></strong> с двумя внутренними состояниями и алфавитом не более чем из <strong>4</strong><strong><em>mn</em></strong><strong>+</strong><strong><em>m</em></strong> символов. Машина <strong><em>В</em></strong> будет работать, по суще&shy;ству, так же, как и машина <strong><em>А</em></strong>. Во всех клетках ленты, кроме воспринимаемого считывающей головкой и одного смежного с ним, на ленте машины <strong><em>В</em></strong> записано то же, что и на ленте машины <strong><em>А</em></strong> в соответствующие такты работы двух машин.</p>

<p>Машина <strong><em>В</em></strong> моделирует поведение машины <strong><em>А</em></strong>, но хранит информацию о внутреннем состоянии машины <strong><em>А</em></strong> с помощью символов, записанных в клетке под считывающей головкой, и в клетке, которую считывающая головка машины <strong><em>А</em></strong> собирается посетить. Основная задача &mdash; своевременно освежать эту информацию и держать ее под считывающей го&shy;ловкой. Если последняя передвигается, то информацию о состоянии надо перенести в новый квадрат, используя всего два внутренних состояния машины <strong><em>В</em></strong><em>.</em> Пусть, например, следующим состоянием машины <strong><em>А</em></strong> должно быть состояние 17 (согласно какой-нибудь системе счисления). Чтобы пере&shy;нести его символ, считывающая головка &quot;качается&quot; вперед - назад между старой и новой клеткой 17 раз (точнее 18 раз в новую клетку и 17 раз назад в старую). В течение этого процесса символ, стоящий в новой клетке, про&shy;бегает своего рода последовательность счета, которая оканчивается символом, соответствующим состоянию 17 и в то же время сохраняющим информацию о предыдущем символе в этой клетке. Процесс качания возвращает также старую клетку к одному из элементарных символов (находящихся во взаимно однозначном соответствии с сим&shy;волами, используемыми машиной <strong><em>А</em></strong>), а именно к тому эле&shy;ментарному символу, который должен быть записан в этой клетке после окончания данной операции.</p>

<p><strong>Формальная схема построения</strong></p>

<p>Формально машина <strong><em>В</em></strong> строится так. Пусть символы алфавита машины <strong><em>А</em></strong> суть <em>a</em><em><sub>1</sub></em><em>, </em><em>a</em><em><sub>2</sub></em><em>, </em>..., <em>a<sub>m</sub></em> и пусть ее состояния <em>S</em><sub>1</sub><em>, </em><em>S</em><sub>2</sub><em>, </em>..., <em>S<sub>n</sub></em>. В машине <strong><em>В</em></strong> мы поставим в соответствие алфавиту машины <strong><em>А</em></strong> <strong><em>m</em></strong> элементарных символов <em>b</em><sub>1</sub>, <em>b</em><sub>2</sub>, ..., <em>b<sub>m</sub></em> . Затем определим <strong>4</strong><strong>mn</strong> новых символов, соответствующих парам из состояния и символа машины <strong>А</strong>, снабженных двумя новыми двузначными индексами.&nbsp;&nbsp;&nbsp; Такие новые символы будем называть <strong><em>особыми</em></strong>. Особый знак машины <strong><em>В </em></strong>имеет формат <strong>b</strong> <strong><sub>ijxy</sub></strong><strong>, </strong>где:</p>

<p><strong>i</strong>- номер ленточного символа, i=1,2,&hellip;,m</p>

<p><strong>j</strong>- номер внутреннего состояния машины <strong><em>А</em></strong>, j=1,2,&hellip;,n&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p><strong>x</strong>- назначение (роль) клетки: если клетка передает информацию во время &laquo;качания&raquo;, то х = &rdquo;+&rdquo;, а если получает &ndash; то х = &rdquo;-&rdquo;. Сами клетки назовем соответственно: передатчик / приёмник.</p>

<p><strong>y</strong>- положение другой особой клетки (машина <strong><em>В</em></strong> не может запомнить откуда она ушла): в зависимости от того, вправо или влево от воспринимаемой клетке должна передвинуться считывающая головка при качании, y = R или L.</p>

<p>Два состояния машины <strong><em>В</em></strong> назовем <strong>&alpha;</strong> и <strong>&beta;</strong>. Эти состояния используются двояко. Во-первых, при первом шаге качания они переносят в ближайшую подлежащую посещению клетку информацию о том, вправо (<strong>&alpha;</strong>) или влево (<strong>&beta;</strong>) от новой клетки лежит старая клетка. Эта информация нужна в новой клетке, чтобы управляющий элемент передвинул считывающую головку назад в нужном направлении. После первого шага информация об этом сохраняется в новой клетке с помощью записанного там символа (последний индекс <strong>у</strong><em>). </em>Во-вторых, состояния <strong>&alpha;</strong> и <strong>&beta;</strong> используются, чтобы сообщить из старой клетки в новый o факте окончания качания. После первого шага качания состояние <strong>&beta;</strong> переносится в новую клетку вплоть до конца качания, когда переносится <strong>&alpha;</strong><em>. </em>Это означает конец операции, и новая клетка начинает затем действовать как передатчик и управляет следующим шагом вычисления.</p>

<p>Команда машины <strong><em>А</em></strong> указывает, что она при считывании конфигурации выполняет три действия: запись нового символа, пе&shy;реход в новое состояние и передвижение считывающей головки вправо или влево. Соответствующий фрагмент программы машины <strong><em>В</em></strong>:</p>

<center>{!! HTML::image('img/library/Pic/3.1.JPG') !!}</center>

<p>Эти&nbsp;&nbsp; операции&nbsp;&nbsp; пока&nbsp;&nbsp; что&nbsp;&nbsp; никак&nbsp;&nbsp; не&nbsp;&nbsp; зависят&nbsp;&nbsp; от таблицы работы&nbsp;&nbsp; машины&nbsp;&nbsp; <strong><em>А</em></strong>&nbsp;&nbsp; (кроме&nbsp;&nbsp; числа&nbsp;&nbsp; используемых&nbsp;&nbsp; символов). Операции&nbsp;&nbsp; же&nbsp;&nbsp;&nbsp; следующего&nbsp;&nbsp; и&nbsp;&nbsp; последнего&nbsp;&nbsp;&nbsp; типа,&nbsp;&nbsp;&nbsp; формули&shy;руются в терминах таблицы работы моделируемой машины. Предположим, что машина <strong><em>A</em></strong> имеет команду:</p>

<p>{!! HTML::image('img/library/Pic/3.2.jpg', 'a picture', array('style' => 'height:60px; width:180px')) !!}&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>Тогда машина <strong><em>В</em></strong> будет иметь команду:</p>

<p>{!! HTML::image('img/library/Pic/3.3.jpg', 'a picture', array('style' => 'height:65px; width:300px')) !!}&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>Чтобы заставить машину <strong><em>В</em></strong> работать аналогично машине <strong><em>А</em></strong><em>, </em>мы заполняем начальную ленту машины <strong><em>В</em></strong> соответственно начальной ленте машины <strong><em>А</em></strong> (с заменой a<em><sub>i</sub></em> на b<em><sub>i</sub></em>)<em>, </em>за исключением клетки, занимаемой считывающей головкой в на&shy;чальный момент. Если <em>S<sub>j</sub></em><em> - </em>начальное состояние машины <strong><em>А</em></strong> и a<em><sub>i</sub></em> начальный символ в этом квадрате, то в соответствующем квадрате ленты машины <strong><em>В</em></strong> записываем <em>b<sub>i</sub><sub>,j,-,y</sub></em> и приводим машину <strong><em>В</em></strong> в состояние <strong>&alpha;</strong>. Далее инструкция машины <strong><em>А</em></strong> заменяется приведенной выше инструкцией для машины <strong><em>В</em></strong>. Машина <strong><em>В</em> </strong>работает вплоть до момента, когда вместо особого символа в одной из двух особых клеток окажется записанным элементарный символ, соответствующий символу из внешнего алфавита машины <strong><em>А</em></strong>. Т.о. будет произведен набор действий, эквивалентный первой команде (инструкции) машины <strong><em>А.</em></strong> Далее аналогично эмулируется вторая команда и т.д. вплоть до остановки машины <strong><em>А</em></strong> и эквивалентной её машины <strong><em>В</em></strong>. Таким образом показано, как машина <strong><em>А</em></strong> преобразуется в эквивалентную ей машину <strong><em>В </em></strong>с двумя внутренними состояниями, <strong>Q.E.D.</strong></p>



<p><strong><u>Теорема Шеннона №2 </u></strong></p>

<p><strong>Всякая машина Тьюринга <em>А</em> может быть преобразована в эквивалентную машину <em>С</em> не более чем с двумя знаками внешнего алфавита.</strong></p>

<p style="margin-left:45pt"><strong><u>Доказательство</u></strong></p>

<p>Как и в случае Теоремы 1.4.(1), доказательством будет схема построения. Покажем,&nbsp;&nbsp; что можно&nbsp; построить&nbsp;&nbsp; ма&shy;шину <strong><em>С</em></strong><em>,&nbsp;&nbsp;&nbsp; </em>работающую&nbsp;&nbsp;&nbsp; подобно&nbsp;&nbsp; любой&nbsp;&nbsp; заданной&nbsp;&nbsp; машине Тьюринга <strong><em>А</em></strong> и использующую только два символа внешний алфавит, например символы 0 и 1.</p>

<p>Пусть машина <strong><em>А</em></strong> содержит:</p>

<ul>
	<li><strong><em>n</em></strong> внутренних состояний <strong><em>S<sub>j</sub></em></strong>,</li>
	<li><strong><em>m</em></strong> символов внешнего алфавита <strong>a<em><sub>i</sub></em></strong>,</li>
</ul>

<p>Тогда машина <strong>С </strong>будет содержать:</p>

<ul>
	<li><strong><em>n</em></strong> внутренних состояний <strong><em>T<sub>j</sub></em></strong>, являющихся аналогами <strong><em>S<sub>j</sub></em></strong>,</li>
	<li>не более чем <strong><em>8</em></strong><strong><em>nm</em></strong> специальных&nbsp; внутренних состояний,</li>
	<li>2 символа&nbsp; внешнего алфавита: 0 и 1.</li>
</ul>

<p><strong>Общая идея построения</strong></p>

<p>Пусть <em>l</em> - наи&shy;меньшее целое число, для которого m&le;2<em><sup>l</sup></em>. Тогда символам машины <strong><em>А</em></strong> можно сопоставить двоичные последовательности длины <em>l</em> таким образом, что различным символам будут соответствовать различные же последовательности. При этом&nbsp; пустому символу машины <strong><em>А</em></strong> мы ставим в соответствие последовательность из <em>l</em> нулей. Машина <strong><em>С</em></strong>&nbsp; будет работать с дво&shy;ичными последовательностями. Элементарная операция ма&shy;шины <strong><em>А</em></strong> будет соответствовать в машине <strong><em>С</em></strong> переходу счи&shy;тывающей головки на <em>l</em> - 1 клеток вправо (c сохранением считанной информации во внутреннем состоянии головки), затем обратному переходу на <em>l</em> - 1 клеток влево, записи новых символов по пути и, наконец, движению вправо или влево на <em>l</em> клеток, в соответствии с движением считывающей головки машины <strong><em>А</em></strong><em>. </em>В течение этого процесса состояние машины <strong><em>А</em></strong><em>, </em>конечно, сохраняется и в машине <strong><em>С</em></strong><em>. </em>Замена старого состояния новым происходит в конце опера&shy;ции считывания.</p>

<p><strong>Формальная схема построения</strong></p>

<p>Начальная лента машины <strong><em>С</em></strong> представляет собой начальную&nbsp;&nbsp; ленту&nbsp;&nbsp; машины&nbsp;&nbsp; <strong><em>А</em></strong><em>,&nbsp;&nbsp; </em>где&nbsp;&nbsp; каждый символ замещен соответствующей ему двоичной&nbsp; последовательностью. Если работа машины <strong><em>А</em></strong> начинается с какого-то определенного символа, то работа машины <strong><em>С</em></strong> начнется с самого левого двоичного символа соответствующей группы. Если машина <strong><em>А</em></strong> начинает работу в состоянии <em>S<sub>j</sub></em><em>,&nbsp; </em>то <strong><em>С</em></strong> начнет работу в со&shy;стоянии <em>T</em><em><sub>j</sub></em><em>. </em></p>

<p>Формально машина <strong><em>С</em></strong> строится так. Состояниям <em>S</em><em><sub>1</sub></em><em>, </em><em>S</em><em><sub>2</sub></em><em>, </em>..., <em>S<sub>n</sub></em> машины <strong><em>А</em></strong> мы ставим в соответствие состояния <em>T</em><em><sub>1</sub></em><em>, Т<sub>2</sub>,&hellip;,Т<sub>п</sub> </em>машины <strong><em>С</em></strong> (последние будут встречаться, когда машина <strong><em>С</em></strong> начинает операцию, считывая первый символ в двоичной последовательности длины <em>l</em>). Для каждого из этих <em>Т</em><em><sub>j</sub></em> определим два состояния <em>T<sub>j</sub></em><em><sub>0</sub></em> и <em>Т</em><em><sub>j</sub></em><em><sub>1</sub></em><em>. </em>Если машина <strong><em>С</em></strong> находится в состоянии <em>Т</em><em><sub>j</sub></em>&nbsp; и читает символ 0, то она движется вправо и переходит в состояние <em>T<sub>jo</sub></em><em>. </em>Если она читает 1, то движется вправо и переходит в состояние <em>Т</em><em><sub>j</sub></em><em><sub>1</sub></em>. Таким обра&shy;зом, с помощью этих двух состояний машина запоминает, каким был первый символ двоичной последовательности. Для каждого из этих <em>T<sub>j</sub></em><em><sub>0</sub></em> и <em>Т</em><em><sub>j</sub></em><em><sub>1 </sub></em>&nbsp;определим опять по два состояния: <em>T<sub>j</sub></em><em><sub>00</sub></em><em>, </em><em>T<sub>j</sub></em><em><sub>01 </sub></em>и <em>T<sub>j</sub></em><em><sub>10</sub></em><em>, </em><em>T<sub>j</sub></em><em><sub>11</sub></em>. Если, например, машина находится в состоянии <em>T<sub>j</sub></em><em><sub>0</sub></em> и читает символ 0, то она переходит в состояние <em>T<sub>j</sub></em><em><sub>00</sub></em> и т. д. Таким образом, c помощью этих состояний запоминается начальное состояние и два первых символа, прочитанных в процессе работы машины. Продол&shy;жим такое построение состояний вплоть до <em>l</em>-1 шагов. Получившееся в итоге разнообразие состояний можно обозначить через <em>T<sub>j</sub></em><em><sub>, </sub></em><em><sub>x</sub></em><em><sub>1, </sub></em><em><sub>x</sub></em><em><sub>2, &hellip;, </sub></em><em><sub>xs</sub></em>, где <em>j</em>=1,2,&hellip;,<em>n</em>;&nbsp; <em>x</em><sub>j</sub>=0,1;&nbsp; <em>s</em>=1,&hellip;, <em>l</em> - 1.</p>

<p>Если машина находится в одном из этих состояний <em>(</em><em>s</em> &lt; <em>l</em>-1) и&nbsp;&nbsp; читает 0 или 1, то она движется вправо и 0 или 1 делается дальнейшим&nbsp; индексом состояния. В тот момент, когда&nbsp; <em>s</em> становится равен <em>l</em> &ndash; 1, машина читает последний символ последовательности длины <em>l</em><em>. </em>Теперь&nbsp;&nbsp; правила&nbsp;&nbsp; операций&nbsp;&nbsp; зависят&nbsp;&nbsp; от&nbsp;&nbsp; конкретных&nbsp;&nbsp; правил машины&nbsp;&nbsp; <strong><em>А</em></strong><em>.&nbsp;&nbsp;&nbsp; </em></p>

<p>Допустим, текущей инструкцией машины <strong><em>А</em></strong> была команда</p>

<p>{!! HTML::image('img/library/Pic/3.4.jpg', 'a picture', array('style' => 'height:77px; width:200px')) !!}</p>

<p>Машина <strong><em>С</em></strong> уже готова к выполнению соответствующей инструкции,&nbsp; а значит в дальнейших состояниях должна быть закодирована информация о трех параметрах:</p>

<p>&middot;&nbsp;&nbsp; о новом символе <em>a<sub>k</sub></em>, который следует записать на место старого символа <em>a<sub>i</sub></em>,</p>

<p>&middot;&nbsp;&nbsp; о направлении дальнейшего движения машины:&nbsp; R или L,</p>

<p>&middot;&nbsp;&nbsp; о номере нового состояния S<sub>p</sub>.</p>

<p>Новый символ <em>a<sub>k</sub></em> может быть закодирован двузначным кодом в виде последовательности <em>y</em><em><sub>1, </sub></em>&nbsp;<em>y</em><em><sub>2</sub></em><em>, &hellip;, </em><em>y<sub>s</sub></em><em><sub>-1</sub></em><em>, </em><em>y<sub>s</sub></em><em>, </em>где <em>y<sub>i</sub></em>=0,1<em>. </em>Определим&nbsp;&nbsp; два&nbsp;&nbsp; новых&nbsp;&nbsp; множества состояний, которые&nbsp;&nbsp; несколько&nbsp;&nbsp; похожи&nbsp;&nbsp; на&nbsp;&nbsp; введенное&nbsp;&nbsp; выше&nbsp;&nbsp; множество состояний&nbsp; <em>Т, </em>но соответствуют не считыванию,&nbsp; а записи: <em>R<sub>p</sub></em><em><sub>, </sub></em><em><sub>y</sub></em><em><sub>1, </sub></em><em><sub>y</sub></em><em><sub>2, &hellip;, </sub></em><em><sub>ys</sub></em>&nbsp; и L<em><sub>p</sub></em><em><sub>, </sub></em><em><sub>y</sub></em><em><sub>1, </sub></em><em><sub>y</sub></em><em><sub>2, &hellip;, </sub></em><em><sub>ys</sub></em>. Название состояния (R или L) будет индикатором движения машины <strong><em>А</em></strong>, первое число в индексе (p) &ndash; будет показывать номер нового состояния S<sub>p</sub> машины <strong><em>А</em></strong>, а индексы <em>y</em><em><sub>1, </sub></em>&nbsp;<em>y</em><em><sub>2</sub></em><em>, &hellip;, </em><em>y<sub>s</sub></em><em><sub>-1</sub></em><em>, </em><em>y<sub>s</sub></em>&nbsp; - значения кода нового символе a<sub>k</sub>.</p>

<p>Пусть последовательность <em>x</em><em><sub>1, </sub></em>&nbsp;<em>x</em><em><sub>2</sub></em><em>, &hellip;, </em><em>x<sub>s</sub></em><em><sub>-1</sub></em><em>, </em><em>x<sub>s</sub></em> соответствует некоторому символу машины <strong><em>А</em></strong><em>. </em>Допустим машина <strong><em>А</em></strong> читает этот символ в состоянии <em>Sj</em>, тогда она записывает символ, соответствующий двоичной последователь&shy;ности <em>y</em><em><sub>1, </sub></em>&nbsp;<em>y</em><em><sub>2</sub></em><em>, &hellip;, </em><em>y<sub>s</sub></em><em><sub>-1</sub></em><em>, </em><em>y<sub>s</sub></em><em>, </em>переходит в состояние <em>S<sub>p</sub></em> &nbsp;и дви&shy;жется, скажем, вправо. В этом случае, по определению, машина <strong><em>С</em></strong>, будучи в состоянии <em>T<sub>i</sub></em><em><sub>, </sub></em><em><sub>x</sub></em><em><sub>1, </sub></em><em><sub>x</sub></em><em><sub>2, &hellip;, </sub></em><em><sub>xl</sub></em><em><sub>-1</sub></em> и читая символ <em>x<sub>l</sub></em> , переходит &nbsp;в состояние R<em><sub>i</sub></em><em><sub>, </sub></em><em><sub>x</sub></em><em><sub>1, </sub></em><em><sub>x</sub></em><em><sub>2, &hellip;, </sub></em><em><sub>xl</sub></em><em><sub>-1</sub></em>, записывает символ <em>у</em><em><sub>l</sub></em> и движется влево. В любом из состояний <em>R<sub>p</sub></em><em><sub>, </sub></em><em><sub>y</sub></em><em><sub>1, </sub></em><em><sub>y</sub></em><em><sub>2, &hellip;, </sub></em><em><sub>ys</sub></em>&nbsp;&nbsp; (или L<em><sub>p</sub></em><em><sub>, </sub></em><em><sub>y</sub></em><em><sub>1, </sub></em><em><sub>y</sub></em><em><sub>2, &hellip;, </sub></em><em><sub>ys</sub></em>) машина <strong><em>С</em></strong> записывает <em>y<sub>s</sub></em><em>, </em>движется влево и переходит в состояние <em>R<sub>p</sub></em><em><sub>, </sub></em><em><sub>y</sub></em><em><sub>1, </sub></em><em><sub>y</sub></em><em><sub>2, &hellip;, </sub></em><em><sub>ys</sub></em><em><sub>-1</sub></em>&nbsp;&nbsp; (или L<em><sub>p</sub></em><em><sub>, </sub></em><em><sub>y</sub></em><em><sub>1, </sub></em><em><sub>y</sub></em><em><sub>2, &hellip;, </sub></em><em><sub>ys</sub></em><em><sub>-1</sub></em>). Посредством этого процесса двоичная последовательность, соответствующая новому символу, записывается вместо ста&shy;рой двоичной последовательности. При <em>s</em>=1 эта запись заканчивается на символе <em>y</em><em><sub>1</sub></em><em>. </em>Остается только передвинуть считывающую голову на <em>l</em> клеток вправо или влево, в зависимости от того, находится ли машина в состоянии <em>R</em> или в состоянии <em>L</em><em>. </em>Это делается с помощью множеств состояний <em>U<sub>i</sub></em><em><sub>,</sub></em><em><sub>s</sub></em> и <em>V<sub>i</sub></em><em><sub>,</sub></em><em><sub>s</sub></em> <em>(</em><em>i</em><em>= </em>1, 2, ..., <em>n</em><em>; </em>s= 1, 2,<em> &hellip;, </em><em>l</em><em>-</em>1).&nbsp; В состоянии&nbsp;&nbsp; <em>R<sub>ix</sub></em><em><sub>1</sub></em>&nbsp; машина&nbsp; записывает&nbsp;&nbsp; <em>x</em><em><sub>1</sub></em><em>, </em>движется вправо и переходит в состояние <em>U<sub>i</sub></em><em><sub>1</sub></em><em>.&nbsp;&nbsp; </em>В&nbsp;&nbsp; каждом&nbsp;&nbsp; из состояний <em>U</em> машина&nbsp;&nbsp; продолжает&nbsp; движение вправо, не записывая ничего и переходя в состояние <em>U</em> со следующим по величине индек&shy;сом,&nbsp;&nbsp; пока&nbsp;&nbsp; не будет&nbsp;&nbsp; достигнуто&nbsp;&nbsp; последнее&nbsp;&nbsp; состояние&nbsp;&nbsp; <em>U</em><em>.&nbsp; </em>Таким образом, U<sub>i</sub><sub>,</sub><sub>s</sub> вызывает движение вправо и состояние U<sub>i</sub><sub>,</sub><sub>s</sub><sub>+1</sub> (s&lt;<em>l</em>-1). Наконец состояние U<sub>i</sub><sub>,</sub><em><sub>l</sub></em><sub>-1</sub> приводит после движения&nbsp;&nbsp; вправо к&nbsp;&nbsp; состоянию&nbsp; <em>Т</em><em><sub>i</sub></em><em>,&nbsp;&nbsp; </em>завершая&nbsp;&nbsp; тем самым цикл. Аналогично, <em>L<sub>i</sub></em><em><sub>,</sub></em><em><sub>x</sub></em>&nbsp;&nbsp; приводит к движению влево и состоя&shy;нию <em>V<sub>i</sub></em><em><sub>,1.</sub></em> <em>V<sub>i</sub></em><em><sub>,</sub></em><em><sub>s</sub></em> дает движение влево и <em>V<sub>i</sub></em><em><sub>,</sub></em><em><sub>s</sub></em><em><sub>+</sub></em><em><sub>l</sub></em> (s&lt; <em>l</em> -1), нако&shy;нец, <em>V<sub>i</sub></em><em><sub>,</sub></em><em><sub>l</sub></em><em><sub>-1</sub></em> дает движение влево и&nbsp; <em>Т</em><em><sub>i</sub></em><em>.</em></p>

<h3>Нормальные алгоритмы</h3>

<p>Если попытаться уйти от наличия самого управляющего механизма машины Тьюринга со своим собственным регистром для записи внутреннего состояния, и перенести информацию о состоянии некоторого агрегата непосредственно на ленту, можно получить новую нотацию для записи алгоритмов. Проблемы движения управляющего механизма в этом случае не существует: для выполнения предписания необходимо будет проанализировать заданное слово и найти первое попавшееся соответствие между левой частью инструкции и каким-либо фрагментом содержимого ленты. Для удобства допустим, что анализ производится укрупнено, не по одному символу, а сразу по несколько. Кроме того, лента является &laquo;растяжимой&raquo; - т.е. вместо одного символа можно вписывать произвольное их количество и наоборот, без процедуры сдвигания части слова.</p>

<p>Таким образом, формируется&nbsp; идея нормального алгоритма переработки входного слова, называемого в литературе <strong><em>алгоритмом Маркова</em></strong>.</p>

<p>&nbsp;</p>

<p style="margin-left:36.0pt"><strong><em>Нормальный алгоритм Маркова</em></strong><em> - математическое построение, предназначенное для уточнения понятия алгоритм, которое задается алфавитом и нормальной схемой подстановок, выполняемых по заранее определенной схеме.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em></p>

<p>Нормальные алгоритмы можно рассматривать как обобщение машины Тьюринга. В свою очередь работу машин Тьюринга можно рассматривать как переработку начального слова некоторого нормального алгоритма. Этот алгоритм получается сразу же из таблицы машины.</p>

<p>Пусть существует следующая машина Тьюринга, которая печатает на чистой ленте последовательность 001001001001&hellip;.</p>

<p>A&lambda; &rarr; 0RB</p>

<p>B&lambda; &rarr; 0RC</p>

<p>C&lambda; &rarr; 1RA</p>

<p>Работа алгоритма происходит следующим образом (через запятую указана пара: символ-состояние)</p>

<p>A, 0B, 00C, 001A</p>

<p>Построим алгоритм Маркова, для чего к внешнему алфавиту {0,1} добавляем внутренний алфавит {A,B,C...}</p>

<p>A &rarr; 0B</p>

<p>B &rarr; 0C</p>

<p>C &rarr; 1A</p>

<p>&Lambda; &rarr; A</p>

<p>Изначально лента пустая (содержит только символ &Lambda;). Последняя строчка выполнится первой, что позволит записать на ленте символ А. Имея на ленте символ&nbsp; А,&nbsp; в процессе работы алгоритма, мы последовательно получим:</p>

<p>&Lambda;</p>

<p>A</p>

<p>0B</p>

<p>00C</p>

<p>001А</p>

<p>0010B</p>

<p>&hellip;и т.д., что, по сути, означает бесконечно&nbsp; написание последовательности 001001001&hellip;</p>

<p>Таким образом, всегда на основе машины Тьюринга довольно легко можно получить работающий алгоритм Маркова.</p>

<p>Любой нормальный алгоритм можно в свою очередь преобразовать в машину Тьюринга, но это более сложно. Сложности связаны с тем, что у Маркова укрупненный алгоритм, т.к. сразу читается и может быть записано несколько символов.</p>

<p>По своей сути основная операция при работе алгоритмов Маркова &ndash; это переработка слов в некотором алфавите. Эта переработка заключается в производстве некоторого количества замен определенных последовательностей символов. Эти замены совершаются в СТРОГО определенном порядке, а именно: <strong><em>после каждой замены алгоритм читается с самого начала, а слово анализируется с самого первого (левого) символа</em></strong>. В отличие от машин Тьюринга, алгоритмы Маркова выполняются без какого &ndash; либо устройства, осуществляющего движения и имеющего внутреннюю память. В данном случае мы можем оперировать только ленточными знаками. Сама лента&nbsp; в этом случае не разделяется на строгие ячейки, а имеет гибкую основу, что позволяет ей растягиваться и сжиматься исходя из того, увеличивается ли в слове число символов или уменьшается.</p>

<p><u>Формат команды</u> (строки) следующий:</p>

<p>{a<sub>i</sub>} &rarr; {b<sub>j</sub>} [&bull;],</p>

<p>где</p>

<p>{a<sub>i</sub>} - последовательность символов, которая ищется в слове,</p>

<p>&rarr;&nbsp;&nbsp; -&nbsp; знак перехода к операции записи,</p>

<p>{b<sub>j</sub>} - последовательность символов, которая записывается вместо найденной последовательности,</p>

<p>&nbsp;[&bull;] - знак принудительного окончания алгоритма (необязательный параметр).</p>

<p>&nbsp;&Lambda; &ndash; служебный знак, обозначающий пустой символ, присутствует везде: изначально на ленте (если она пустая), справа и слева от каждого символа (если на ленте записано слово).</p>

<p>Программа (алгоритм) представляет собой совокупность строк указанного вида, причем порядок строк имеет важнейшее значение. Окончание работы алгоритма происходит в тот момент, когда выполняется строка, содержащая знак принудительной остановки, либо тогда, когда более ни одна строка не может быть выполнена (в слове нет ни одной из искомых последовательностей символов).</p>

<p>&nbsp;</p>

<p style="margin-left:36.0pt"><strong><em>Тезис Маркова</em></strong><em>: любой вычислительный процесс можно преобразовать в нормальный алгоритм.</em></p>

<p>&nbsp;</p>

<p><strong><em>Глоссарий </em></strong></p>

<ul>
	<li style="margin-left: 36pt;"><u>Теорема&nbsp; Шеннона №1 </u>Всякая машина Тьюринга А может быть преобразована в эквивалентную машину В не более чем с двумя внутренними состояниями.</li>
	<li style="margin-left: 36pt;"><span style="line-height:1.6em"></span><u style="line-height:1.6em">Теорема Шеннона №2 </u><span style="line-height:1.6em">Всякая машина Тьюринга А может быть преобразована в эквивалентную машину С не более чем с двумя знаками внешнего алфавита.</span></li>
	<li style="margin-left: 36pt;">Нормальный алгоритм Маркова - математическое построение, предназначенное для уточнения понятия алгоритм, которое задается алфавитом и нормальной схемой подстановок, выполняемых по заранее определенной схеме.</li>
	<li style="margin-left: 36pt;">Тезис Маркова: любой вычислительный процесс можно преобразовать в нормальный алгоритм.</li>
</ul>



			</article>	</article>	</div></div>

<!-- BEGIN JAVASCRIPT -->
{!! HTML::script('js/libs/jquery/jquery-1.11.2.min.js') !!}
{!! HTML::script('js/libs/jquery/jquery-migrate-1.2.1.min.js') !!}
{!! HTML::script('js/libs/bootstrap/bootstrap.min.js') !!}
{!! HTML::script('js/libs/spin.js/spin.min.js') !!}
{!! HTML::script('js/libs/autosize/jquery.autosize.min.js') !!}
{!! HTML::script('js/libs/nanoscroller/jquery.nanoscroller.min.js') !!}
{!! HTML::script('js/core/source/App.js') !!}
{!! HTML::script('js/core/source/AppNavigation.js') !!}
{!! HTML::script('js/core/source/AppOffcanvas.js') !!}
{!! HTML::script('js/core/source/AppCard.js') !!}
{!! HTML::script('js/core/source/AppForm.js') !!}
{!! HTML::script('js/core/source/AppNavSearch.js') !!}
{!! HTML::script('js/core/source/AppVendor.js') !!}
{!! HTML::script('js/core/demo/Demo.js') !!}
<!-- END JAVASCRIPT -->
</section>
</body>
</html>