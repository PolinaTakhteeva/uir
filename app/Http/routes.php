<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::bind('questions', function($id_question){
    return \App\Question::whereId_question($id_question)->first();
});*/


Route::filter('csrf-ajax', function()
{
    if (Session::token() != Request::header('x-csrf-token'))
    {
        throw new Illuminate\Session\TokenMismatchException;
    }
});

Route::get('/', function() {
    return redirect('home');
});
Route::get('home', ['as' => 'home', function() {
    if(Auth::check()) {
        return view('main', ['first_name' => Auth::user()['first_name']]);
    }
    else {
        return view('welcome');
    }
}]);


Route::get('in-process', ['as' => 'in_process', function() {
    return view('in_process');
}]);

// Авторизация
Route::post('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/login', ['as' => 'login', function(){
    return view('welcome');
}]);
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Регистрация
Route::post('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);

//модуль тестирования для студентов
Route::get('tests', ['as' => 'tests', 'uses' => 'TestController@index', 'middleware' => 'general_auth']);
Route::get('questions/show-test/{id_test}', ['as' => 'question_showtest', 'uses' => 'TestController@showViews', 'middleware' => ['general_auth', 'single_test', 'have_attempts']]);
Route::patch('questions/check-test', ['as' => 'question_checktest', 'uses' => 'TestController@checkTest']);
Route::get('tests/drop', ['as' => 'drop_test', 'uses' => 'TestController@dropTest', 'middleware' => 'general_auth']);

//модуль тестирования для курса ИнСист
Route::get('fish', ['as' => 'fish', 'uses' => 'FishController@index', 'middleware' => ['general_auth', 'fish']]);

//модуль тестирования для преподавателей
Route::get('questions', ['as' => 'question_index', 'uses' => 'QuestionController@index', 'middleware' => ['general_auth', 'admin']]);
Route::get('questions/create', ['as' => 'question_create', 'uses' => 'QuestionController@create', 'middleware' => ['general_auth','admin']]);
Route::post('get-theme', array('as'=>'get_theme', 'uses'=>'QuestionController@getTheme'));
Route::post('get-type', array('as'=>'get_type', 'uses'=>'QuestionController@getType'));
Route::post('questions/create', ['as' => 'question_add', 'uses' => 'QuestionController@add']);
Route::get('tests/create', ['as' => 'test_create', 'uses' => 'TestController@create', 'middleware' => ['general_auth', 'admin']]);
Route::post('get-theme-for-test', array('as'=>'get_theme_for_test', 'uses'=>'TestController@getTheme'));
Route::post('get-amount', array('as'=>'get_amount', 'uses'=>'TestController@getAmount'));
Route::post('tests/create', ['as' => 'test_add', 'uses' => 'TestController@add']);


//электронная библиотека
Route::get('library', ['as' => 'library_index', 'uses' => 'LibraryController@index']);
Route::get('library/definitions', ['as' => 'library_definitions', 'uses' => 'LibraryController@definitions']);
Route::get('library/theorems', ['as' => 'library_theorems', 'uses' => 'LibraryController@theorems']);
Route::get('library/lecture/{index}{anchor?}', ['as' => 'lecture', 'uses' => 'LibraryController@lecture'])->where('anchor', '[a-z0-9-]+');
Route::get('library/persons', ['as' => 'library_persons', 'uses' => 'LibraryController@persons']);
Route::get('library/persons/{person}', ['as' => 'person', 'uses' => 'LibraryController@person']);
Route::get('library/extra', ['as' => 'library_extra', 'uses' => 'LibraryController@extra']);

//модуль books библиотеки
/*Route::get('library/books', ['as' => 'books', 'uses' => 'BooksController@index']);
Route::post('library/books/search', ['as' => 'library_search', 'uses' => 'BooksController@search']);
Route::get('library/book/{id}', ['as' => 'book', 'uses' => 'BooksController@getBook']);
Route::get('library/lection/{id}', ['as' => 'lection', 'uses' => 'BooksController@lection']);
Route::get('library/ebooks', ['as' => 'ebooks', 'uses' => 'BooksController@ebookindex']);
Route::post('library/ebooks/search', ['as' => 'library_esearch', 'uses' => 'BooksController@esearch']);
Route::post('library/book/{book_id}/order', ['as' => 'book_order', 'uses' => 'BooksController@order']);
// TODO: Мише и Стасу: Перенести в секцию админки и добавить авторизацию (админка библиотеки)
Route::get('teacher_account/library_calendar', ['as' => 'library_calendar', 'uses' => 'BooksController@library_calendar']);
Route::post('teacher_account/date_create', ['as' => 'library_date_create', 'uses' => 'BooksController@create_date']);
Route::get('teacher_account/library_order_list', ['as' => 'library_order_list', 'uses' => 'BooksController@library_order_list']);
Route::post('teacher_account/library_order_list_elem_delete', ['as' => 'order_list_delete', 'uses' => 'BooksController@order_list_delete']);*/

//модуль генерации вариантов
Route::get('generator', ['as' => 'generator_index', 'uses' => 'GeneratorController@index', 'middleware' => ['general_auth', 'admin']]);
Route::post('generator/pdf', ['as' => 'generator_pdf', 'uses' => 'GeneratorController@pdfTest', 'middleware' => ['general_auth', 'admin']]);
Route::get('generator/pdf', ['as' => 'generator_ex', 'uses' => 'GeneratorController@pdf', 'middleware' => ['general_auth', 'admin']]);

//личный кабинет
Route::get('personal_account', ['as' => 'personal_account', 'uses' => 'PersonalAccount@showPA', 'middleware' => 'general_auth']);
Route::get('teacher_account', ['as' => 'teacher_account', 'uses' => 'PersonalAccount@showTeacherPA', 'middleware' => 'general_auth']);



