<!DOCTYPE html>

<html lang="en">
<head>
    <title>Лекция 1</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
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
							<li class="active">Лекция 1. Основные понятия.</li>
						</ol>
					</div><!--end .section-header -->
					<div class="section-body">
					</div><!--end .section-body -->
				</section>
	<div class="card card-tiles style-default-light" style="margin-left:2%; margin-right:2%">
	<article class="style-default-bright">
		<div class="card-body"> 
		<article style="margin-left:10%; margin-right:10%; text-align: justify">
			
		
<p><b>Введение.</b></p>
<p>Еще на самых ранних ступенях развития математики в ней стали возникать различные вычислительные процессы чисто механического характера. С их помощью искомые величины ряда задач вычислялись из исходных величин по определенным правилам и инструкциям. Со временем все такие процессы в математике получили название алгоритмов.</p>
<p>Первоначально теория алгоритмов возникла в связи с внутренними потребностями теоретической математики. Математическая логика, алгебра, геометрия и анализ являются  основными областями приложения теории алгоритмов.</p>
<p>Другая область теории алгоритмов возникла в 40-х годах в связи с созданием быстродействующих электронных вычислительных и управляющих машин. Появление ЭВМ способствовало развитию теории алгоритмов, вызвало к жизни разделы этой теории (алгоритмические системы и алгоритмические языки), имеющие ярко выраженную прикладную направленность. Наконец, теория алгоритмов оказалась тесно связанной и с рядом областей лингвистики, экономики, физиологии мозга и психологии, философии, естествознания. Примером одной из задач этой области может служить точное описание алгоритмов, реализуемых человеком в процессе умственной деятельности.</p>
<p>Задача нахождения единообразной формы записи алгоритмов, решающих различные задачи, является одной из основных задач теории алгоритмов. В настоящей книге будут рассмотрены следующие  подходы: </p>
<ul>
<li>Определение алгоритма через понятие вычислительной машины (машины Тьюринга, предложено Тьюрингом в 1937г.);</li>
<li>Определение алгоритма через процедуру переработки слов по заданным правилам (нормальные  алгоритмы, предложены Марковым в 1956г.);</li>
<li>Определение алгоритма через рекурсивную функцию (предложено Клини и Геделем в 1936г.).</li> </ul>
<p>Как вскоре выяснилось, все эти понятия эквивалентны, что в некоторой степени свидетельствует о правильном направлении исследований в этой области. </p>
<p><b>Алгоритмы: определение и основные свойства</b></p>
<p>Понятие алгоритма является одним из основных понятий современной математики. Само слово “алгоритм” является производным от имени среднеазиатского ученого Аль Хорезми, уроженца Хивы, жившего в IX веке нашей эры. </p>
<p>Чтобы иметь возможность более уверенно решать алгоритмические  задачи, возникающие в различных разделах теоретической и прикладной математики, необходимо иметь достаточно  развитую теорию алгоритмов.</p>
<p><i><b><a name="algorithm">Алгоритм</a></b> - это точное предписание о выполнении в некотором порядке системы операций, определяющих процесс перехода от исходных данных к искомому результату для решения  задачи  данного типа.</i></p>
<p>Это понятие относится к исходным математическим понятиям, которые не могут быть определены через другие, более простые понятия. Иногда такое или подобное определение называют <i><b>интуитивным</b></i>, т.е. понятным из опыта. </p>
<ul> Предписание считается алгоритмом, если оно обладает следующими <i><b>свойствами</b></i>:
<li>определенностью, то есть общепонятностью и точностью, не оставляющими место произволу,</li>
<li>массовостью, то есть возможностью исходить из меняющихся в известных пределах значений исходных данных,</li>
<li>результативностью, то есть направленностью на получение искомого результата,</li>
<li>элементарностью шагов, на который разбивается последовательность операций. </li> </ul>
<ul>Каждый алгоритм, в общем случае, должен задаваться следующими параметрами:
<li>множеством допустимых исходных данных,</li>
<li>начальным состоянием,</li>
<li>множеством допустимых промежуточных состояний, </li>
<li>правилами перехода из одного состояния в другое,</li>
<li>множеством конечных результатов,</li>
<li>конечным состоянием. </li>
</ul>
<p>Перечисленных свойств вполне достаточно, чтобы можно было определить, является ли данное конкретное предписание алгоритмом. </p>
<p>На протяжении многих веков понятие алгоритма связывалось с числами и относительно простыми действиями над ними, да и сама математика была, по большей части, наукой о вычислениях, наукой прикладной. Чаще всего алгоритмы представлялись в виде математических формул. Порядок элементарных шагов алгоритма задавался расстановкой скобок, а сами шаги заключались в выполнении арифметических операций и операций отношения (проверки равенства, неравенства и т.д.). Часто вычисления были громоздкими, а вычисления вручную – трудоемкими, но суть самого вычислительного процесса оставалась очевидной. У математиков не возникала потребность в осознании и строгом определении понятия алгоритма, в его обобщении. Но с развитием математики появлялись новые объекты, которыми приходилось оперировать: векторы, графы, матрицы, множества и др. Как определить для них однозначность или как установить конечность алгоритма, какие шаги считать элементарными? В 1920-х задача точного определения понятия алгоритма стала одной из центральных проблем математики. В то время существовало две точки зрения на математические проблемы:</p>
<ul><li>Все проблемы алгоритмически разрешимы, но для некоторых алгоритм еще не найден, поскольку еще не развиты соответствующие разделы математики.</li>
<li>Есть проблемы, для которых алгоритм вообще не может существовать. </li> </ul>
<p>Идея о существовании алгоритмически неразрешимых проблем оказалась верной, но для того, чтобы ее обосновать, необходимо было дать точное определение алгоритма. Попытки выработать такое определение привели к возникновению теории алгоритмов. </p>
<p>Кроме того математики стремились создавать более общие алгоритмы, которые могли решать разные классы задач. Возник вопрос: "А нельзя ли создать Всеобщий Алгоритм, который решал бы любую математическую задачу аксиоматической теории?". Известный математик Г.В.Лейбниц считал, что такой алгоритм будет найден. Однако в 1936 году американский ученый Черч формально доказал, что Всеобщего Алгоритма не существует.</p>
<p>В любом случае возникла необходимость рассматривать алгоритм как математический объект, что оказалось невозможным, так как не было формального определения алгоритма. </p>
<p>В 1935 американский математик Эмиль Пост опубликовал в «Журнале символической логики» статью «Финитные комбинаторные процессы, формулировка 1». В этой статье и в появившейся одновременно в Трудах Лондонского математического общества статье английского математика Тьюринга «О вычислимых числах с приложением к проблеме решения» были даны первые уточнения понятия «алгоритм». Важность идей Поста и Тьюринга состоит в том, что был предложен простейший способ преобразования информации,  построена алгоритмическая система.</p>
<p>В теории алгоритмов предполагается, что каждый шаг алгоритма таков, что его может выполнить достаточно простое устройство (машина). Желательно, чтобы это устройство было универсальным, т.е. чтобы на нем можно было выполнять любой алгоритм. Механизм работы машины должен быть максимально простым по логической структуре, но настолько точным, чтобы эта структура могла служить предметом математического исследования. </p>
<p><b>Классические машины Тьюринга</b></p>
<p>Определение <i><b>алгоритма</b></i> через понятие вычислительной машины основано на понимании эффективной процедуры, представляющей собой множество сообщаемых исполнителю время от времени правил, которые точно определяют его поведение. Чтобы решить проблему интерпретации (понимания) правил необходимо установить:</p>
<ul>
<li>язык, на котором описывается множество правил поведения,</li>
<li>конструкцию интерпретирующего устройства, которое может «понимать» утверждения, сделанные на этом языке, и таким образом, выполнять шаг за шагом каждый точно определенный процесс.</li>
</ul>
<p>Таким образом, задача описания алгоритма может быть сведена к построению машины некоторого типа, которая способна воспринимать набор правил, выраженных на некотором языке, и делать то, что предписано этими правилами.</p>
<p>Английский математик А.М.Тьюринг в 1937 году предложил модель  вычислительной машины, известной теперь под названием <i>машина Тьюринга</i>.</p>
<p><i><b><a name="mashina">Машина Тьюринга </a></b>- абстрактная (воображаемая) "вычислительная машина" некоторого точно охарактеризованного типа, дающая пригодное для целей математического рассмотрения уточнение общего интуитивного представления об алгоритме. </i></p>
<p>
С помощью машины Тьюринга можно доказать существование или не существование алгоритмов решения различных задач. Так как машина выполняет определенный алгоритм, то к машине предъявляются требования, вытекающие из свойств алгоритмов. Во-первых, машина должна быть полностью детерминированной (вычисления должны быть точные и общепонятные) и действовать в соответствии с заданной системой правил. Во-вторых, она должна допускать ввод различных “начальных  данных” (соответствующих различным задачам из данного класса задач). В-третьих, заданная система правил работы машины и класс решаемых задач должны быть согласованы так, чтобы всегда можно было “прочитать” результат работы машины. 
</p>
<p>Исследования в этом же направлении примерно в то же самое время велись и американским математиком Э. Л. Постом, который  дал одно из первых  определений понятия алгоритма в терминах "абстрактной вычислительной машины" и сформулировал основной тезис теории алгоритмов о возможности описать любой конкретный алгоритм посредством этого определения. Впоследствии стало принято считать, что алгоритмы этого класса осуществляются особыми машинами, называемыми в настоящее время машинами Тьюринга-Поста или, иногда, просто машинами Тьюринга. Машины Тьюринга копируют в существенных чертах работу человека, решающего некоторую логическую задачу, и часто рассматриваются в качестве математической модели для изучения функционирования человеческого мозга.</p>
<p>Обе машины являются абстрактными вычислительными моделями, тем не менее в 1970 машина Поста была разработана в металле в Симферопольском университете, а машина Тьюринга была физически построена чуть позже - в 1973 в Малой Крымской Академии Наук. </p>
<p><b>Одноленточная машина Тьюринга</b></p>
<p>Классической моделью считается <i><b>одноленточная машина Тьюринга</b></i>. Под одноленточной машиной Тьюринга понимают кибернетическое устройство, состоящее из следующих элементов:</p>
<ul>
<li>бесконечной ленты, разделенной на ячейки, </li>
<li>управляющей головки, способной читать символы, содержащиеся в ячейках ленты, и записывать символы в эти ячейки,</li>
<li>выделенной ячейки памяти, содержащей символ внутреннего алфавита, задающий состояние машины Тьюринга, </li>
<li>механического устройства управления, обеспечивающего перемещение головки относительно ленты,</li>
<li>функциональной схемы — области памяти, содержащей команды (программу) машины Тьюринга (эта область доступна только для чтения).</li>
</ul>
<p>Обычно машина Тьюринга схематично изображается в виде ленты с отмеченной указателем ячейкой (рис.1.1).</p>
<center>{!! HTML::image('img/library/Pic/2.jpeg') !!}</center>
<p style="text-align: center">Рис. 1.1. Схематичное изображение машины Тьюринга.</p>
<p><b>Лента</b></p>
<p>Поскольку бесконечную ленту физически смоделировать затруднительно, обычно предполагается что она конечная, например, магнитная дорожка или бумажная лента типа типографной, и  разбита на конечное число ячеек. В процессе работы к  существующим ячейкам машина может пристраивать новые ячейки, так что лента может считаться потенциально неограниченной в обе стороны. Каждая ячейка ленты может находиться в одном из конечного множества состояний. Эти состояния мы будем обозначать символами a<sub>0</sub>, a<sub>1</sub>, …, a<sub>m</sub> или другими символами. По сути это и есть символы, записанные в ячейках ленты. Совокупность таких символов называется <i><b>внешним алфавитом</b></i> машины, а сама лента часто называется <i><b>внешней памятью</b></i> машины. Если ячейка пустая, будем считать, что в ней записан условный символ λ. В процессе работы машины ячейки ленты могут изменять свое содержимое, но могут и не делать этого. Все вновь пристраиваемые  ячейки пристраиваются пустыми (содержат условный символ λ). Без ограничения общности ленту можно считать бесконечной лишь с одной стороны (рис.1.2). В этом случае для удобства введем специальный символ ∂, обозначающий начало ленты. Этот символ имеет строго определенное место, его нельзя ни стирать, ни сдвигать. Тогда ленту можно считать однонаправленной (бесконечной вправо) и ее ячейки удобно просматривать слева направо.</p>
<center>{!! HTML::image('img/library/Pic/3.jpg') !!}</center>
<p style="text-align: center">Рис. 1.2. Преобразование двусторонне-бесконечной ленты в односторонне-бесконечную.</p>
<p><b><a name="golovka">Управляющая головка </a></b></p>
<p><i><b>Управляющая головка</b> - это некоторое устройство, которое может перемещаться вдоль ленты так, что в каждый рассматриваемый момент времени оно находится напротив определенной ячейки ленты.</i></p>
<p>Иногда, наоборот, считают управляющую головку неподвижной, а движущейся частью становится лента. В таком случае предполагается, что в управляющую головку вводится то одна, то другая ячейка ленты. Если какая-нибудь ячейка находится в управляющей головке, то говорят также, что машина в данный момент «воспринимает» или «обозревает» эту ячейку.</p>
<p><b><a name="inside_memory">Внутренняя память</a></b></p>
<p><i><b>Внутренняя память машины </b>– это выделенная ячейка памяти, которая в каждый рассматриваемый момент находится в некотором «состоянии». </i></p>
<p>Предполагается, что число возможных состояний внутренней памяти конечное и для каждой машины фиксированное. Состояние внутренней памяти мы будем обозначать символами S<sub>0</sub> S<sub>1</sub>, …, S<sub>n</sub> или любыми другими символами, не входящими во внешний алфавит машины. Совокупность символов, обозначающих состояния внутренней памяти, называется <i><b>внутренним алфавитом</i></b> машины или <i><b>внутренними состояниями</i></b> машины. Одно из этих состояний называется <i><b>начальным</i></b>, с него начинает работу любая машина, пусть это будет состояние S<sub>0</sub>. В процессе работы машина может какое-то количество шагов оставаться в состоянии S<sub>0</sub> или возвращаться в него позднее. Еще одно специальное состояние -  <i><b>заключительное</i></b>. Символ, обозначающий заключительное состояние, будет называться <i><b>стоп - символом</i></b>. Роль стоп - символа далее будет играть символ Ω. Если в какой-то момент времени внутренняя память машины приходит в заключительное состояние Ω, то дальнейших изменений в машине не происходит и машина называется <i><b>остановившейся</i></b>. Может случиться, что в машине никогда не будет происходить никаких изменений и при каком-то другом внутреннем состоянии  S<sub>i</sub>. Однако в этом случае мы будем говорить, что машина продолжает работать «вечно». В большинстве случаев е останавливающиеся машины не имеют никакой ценности, так как невозможно запротоколировать факт окончания выполнения алгоритма и, соответственно, считать полученный ответ. Обычно говорят, что, если машина Т не останавливается на входном слове t, то она к этому слову <i><b>неприменима</i></b>.</p>
<center>{!! HTML::image('img/library/Pic/4.JPG') !!}</center>
<p style="text-align: center">Рис.1.3 Устройство машины Тьюринга.</p>
<p><b>Механическое устройство</b></p>
<p>Предполагается, что машина снабжена особым механизмом, который в зависимости от символа в воспринимаемой ячейке и состояния внутренней памяти может выполнить следующие действия:</p>
<ul>
<li>изменить состояние внутренней памяти,</li>
<li>одновременно изменить содержимое воспринимаемой ячейки,</li>
<li>сдвинуть (вправо, влево) управляющую головку в соседнюю ячейку. </li>
</ul>
<p>В частном случае содержимое воспринимаемой ячейки и/или состояние внутренней памяти  могут оставаться неизменными, а управляющая головка – неподвижной (Н). Если управляющая головка находится в самой правой ячейке и по ходу работы машина должна сдвинуть управляющую головку в соседнюю справа (отсутствующую) ячейку, то предполагается, что, сдвигая головку, машина одновременно пристроит недостающую ячейку с пустым символом. Аналогично работает машина и в случае, когда головка воспринимает самую левую ячейку и по ходу дела машине надо сдвинуть головку еще левее. Впрочем, далее в книге предполагается, что лента бесконечна вправо, а ее самая левая ячейка занята специальным символом начала ленты, обозначаемым ∂.</p>
<p><i><b><a name="config">Конфигурация машины Тьюринга</a></b>  -  совокупность, образованная содержимым текущей обозреваемой ячейки aj  и состоянием внутренней памяти  S<sub>i</sub>.</i></p>
<p>Работа машины состоит в том, что она из данного «состояния» по истечении одного такта работы механического устройства переходит в следующее «состояние», затем из этого состояния по истечении такта работы переходит в новое состояние и так далее. Т.о. если машина, имея внутреннее состояние S<sub>i</sub> и воспринимая ячейку ленты с символом  a<sub>j</sub>, изменяет свое внутреннее состояние на  S<sub>q</sub> и одновременно содержимое воспринимаемой ячейки заменяет символом  a<sub>r</sub>, а управляющая головка сдвинется на одну ячейку вправо (R),  то говорят, что машина выполняет команду соответственно S<sub>i</sub> a<sub>j</sub>→a<sub>γ</sub> R S<sub>q</sub>. Если управляющая головка сдвинется влево (L) или останется неподвижной (Н), то команды записываются соответственно:</p>
<p>S<sub>i</sub> a<sub>j</sub>→ a<sub>γ</sub> L S<sub>q</sub> </p>
<p>S<sub>i</sub> a<sub>j</sub>→ a<sub>γ</sub> H S<sub>q</sub> </p>
<p><b><a name="MTprog">Программа машины Тьюринга</a></b></p>
<p><i><b>Программа машины Тьюринга </b>- совокупность  команд установленного формата.</i></p>
<p> Так как работа машины по условию целиком определяется состоянием в данный момент ее внутренней памяти S<sub>i</sub> и содержимым воспринимаемой ячейки a<sub>j</sub>, то для каждых S<sub>i</sub> a<sub>j</sub> (<i>i=1, …, n; j=1, …, m</i>), программа машины должна содержать одну и только одну команду, начинающуюся словом S<sub>i</sub> a<sub>j</sub>. Таким образом, программа машины с символами{<i>a<sub>0</sub>, a<sub>1</sub>, …, a<sub>n</sub> </i>} и состояниями {<i>S<sub>0</sub>, S<sub>1</sub>, …, S<sub>m</sub> </i> } содержит максимум <i>n∙m</i> команд. При этом некоторые команды являются «мертвыми», в том случае, если  ни при каких входных словах в данном алфавите невозможно наступление этой конфигурации. В грамотной, с точки зрения реализации, программе таких строк быть не должно, хотя формально их наличие ошибкой не является.</p>
<p><i><b><a name="tesis">Тезис Тьюринга</a></b> - любой алгоритм можно преобразовать в машину Тьюринга. </i></p>
<p>Эту гипотезу невозможно доказать, потому что она оперирует неформальным понятием алгоритма. Однако обоснование гипотезы есть: все алгоритмы, придуманные в течение столетий, могут быть реализованы на машине Тьюринга. Кроме того, эквивалентность всех формальных определений алгоритма неслучайна и говорит в пользу гипотезы. Чтобы опровергнуть основную гипотезу необходимо придумать такой алгоритм, который невозможно было бы реализовать на машине Тьюринга, но пока такого алгоритма нет. </p>
<p><b><i>Глоссарий </i></b></p>
<ul style="list-style: circle">
<li>Алгоритм – это точное предписание о выполнении в некотором порядке системы операций, определяющих процесс перехода от исходных данных к искомому результату для решения  задачи  данного типа</li>
<li>Машина Тьюринга - абстрактная (воображаемая) "вычислительная машина" некоторого точно охарактеризованного типа, дающая пригодное для целей математического рассмотрения уточнение общего интуитивного представления об алгоритме</li>
<li>Управляющая головка – это некоторое устройство, которое может перемещаться вдоль ленты так, что в каждый рассматриваемый момент времени оно находится напротив определенной ячейки ленты</li>
<li>Внутренняя память машины – это выделенная ячейка памяти, которая в каждый рассматриваемый момент находится в некотором «состоянии».</li>
<li>Конфигурация машины Тьюринга – совокупность, образованная содержимым текущей обозреваемой ячейки a<sub>j</sub>  и состоянием внутренней памяти  S<sub>i</sub>.</li>
<li>Программа машины Тьюринга – совокупность  команд установленного формата</li>
<li>Тезис Тьюринга – любой алгоритм можно преобразовать в машину Тьюринга</li>
</ul>

			</article></article>	</div></div>

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
