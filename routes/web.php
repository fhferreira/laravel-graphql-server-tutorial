<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	return view('welcome');
});

//http://127.0.0.1:8000/graphql?query={users{id,email,name}}
//http://127.0.0.1:8000/graphql?query={user(id:1){id,email,name}}
//http://127.0.0.1:8000/graphql?query={%20users(count:2)%20{%20paginatorInfo%20{%20total%20hasMorePages%20}%20data%20{%20id%20name%20email%20}%20}%20}
//http://127.0.0.1:8000/graphql?query={%20user(id:1)%20{%20articles%20{%20id%20title%20}%20}%20}
//http://127.0.0.1:8000/graphql?query={%20articles(count:2)%20{%20paginatorInfo%20{%20total%20hasMorePages%20}%20data%20{%20id%20title%20author%20{%20name%20email%20}%20}%20}%20}
//http://127.0.0.1:8000/graphql?query=mutation { createUser( name:"John Doe" email:"john.doe@example.com" password: "secret" ) { id name email } }
//http://localhost:8000/graphql?query=mutation%20{%20login(email:%22graphql@test.com%22,%20password:%22secret%22)%20}
//http://localhost:8000/graphql?query={%20me%20{%20email%20articles%20{%20id%20title%20}%20}%20}

//https://www.toptal.com/graphql/laravel-graphql-server-tutorial?utm_campaign=Toptal%20Engineering%20Blog&utm_source=hs_email&utm_medium=email&utm_content=72742736&_hsenc=p2ANqtz-8dxzrC7EGp5L4V6LgPnSO8h7Mvy7iVmOmhsbx-uOmCOphtKUYmvt7Fuk_XxtErrJ6fAEdBD-HU50xLEMS1PW2dBiGqkXT98FjSGxfqHwNR85NxF6c&_hsmi=72742736
