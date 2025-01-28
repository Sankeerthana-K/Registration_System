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

Auth::routes();
// Issue Token
Route::get('/issue_token', 'IssueTokenController@index');
Route::post('/issue_token_data', 'IssueTokenController@getData');
Route::post('/issue_token_data_branch', 'IssueTokenController@getDataBranch');
Route::post('/issue_token_data_send', 'IssueTokenController@sendData');
Route::post('/issue_token_data_send_branch', 'IssueTokenController@sendDataBranch');
Route::post('/issue_token', 'IssueTokenController@issueToken');
Route::post('/issue_token_officer', 'IssueTokenController@officerName');
Route::post('/issue_token_visit', 'IssueTokenController@visit');
Route::post('/issue_token_visit_update', 'IssueTokenController@visitUpdate');


// Dashboard
Route::get('/', 'DashboardController@index')->middleware('auth');
Route::get('/', 'DashboardController@weekChart');
Route::post('/count_queue', 'DashboardController@countQueue');



// Public
Route::get('/public/add_public', 'PublicController@addPublicIndex');
Route::get('/public/update_public', 'PublicController@updatePublicIndex');
Route::get('/public/view_public_details', 'PublicController@viewPublicIndex');
Route::post('/add_public_data', 'PublicController@addPublicData');
Route::get('/update_public_table', 'PublicController@updatePublicTable');
Route::post('/add_public_key', 'PublicController@addPublicKey');
Route::post('/update_public_key', 'PublicController@updatePublicKey');
Route::post('/update_public_data', 'PublicController@updateData');
Route::post('/update_public_db', 'PublicController@updatePublic');


// Queue
Route::get('/queue', 'QueueController@Index')->middleware('auth');
Route::get('/queue_table', 'QueueController@queueTable');
Route::get('/queue_table_issued', 'QueueController@queueTableIssued');
Route::post('/queue_status', 'QueueController@queueStatusUpdate');
Route::post('/queue_status_action', 'QueueController@queueAction');
Route::post('/queue_status_action2', 'QueueController@queueAction2');



Route::get('/home', 'HomeController@index')->name('home');



// Charts
Route::post('/savestatetab', 'ChartController@saveStateTab');
Route::get('/chart', 'ChartController@Index')->middleware('isAdmin');
Route::get('/chart', 'ChartController@monthchart')->middleware('isAdmin');



// Report
Route::get('/report', 'ReportController@Index')->middleware('isAdmin');
Route::get('/report_accounts', 'ReportController@reportAccounts')->middleware('isAdmin');
Route::get('/report_social', 'ReportController@reportSocial')->middleware('isAdmin');
Route::get('/report_register', 'ReportController@reportRegister')->middleware('isAdmin');
Route::get('/report_womenandchild', 'ReportController@reportWomenAndChild')->middleware('isAdmin');
Route::get('/report_admin', 'ReportController@reportAdmin')->middleware('isAdmin');
Route::get('/report_planning', 'ReportController@reportPlanning')->middleware('isAdmin');
Route::get('/report_land', 'ReportController@reportLand')->middleware('isAdmin');
Route::get('/report_samoorthi', 'ReportController@reportSamoorthi')->middleware('isAdmin');



// Branch/Service
Route::get('/branch_service/add_branch_service', 'BranchServiceController@Index');
Route::get('/branch_service/update_branch_service', 'BranchServiceController@Index1');
Route::get('/branch_service/view_branch_service', 'BranchServiceController@Index2');
Route::get('/add_branch_table', 'BranchServiceController@addBranchTable');
Route::get('/add_service_table', 'BranchServiceController@addServiceTable');
Route::post('/add_branch', 'BranchServiceController@addBranch');
Route::post('/add_service', 'BranchServiceController@addService');
Route::post('/select_branch', 'BranchServiceController@selectBranch');
Route::post('/update_service_data', 'BranchServiceController@updateServiceData');
Route::post('/update_service', 'BranchServiceController@updateService');


// Side Bar Toggle Save State
Route::post('savestate', 'SideBarController@saveState');


// Settings
Route::get('/settings/general', 'SettingsController@index')->name('Settings')->middleware('isAdmin');
Route::get('/settings/profile_settings', 'SettingsController@index2')->name('Settings');
Route::get('/user/user_management', 'SettingsController@index3')->name('Settings')->middleware('isAdmin');
Route::get('/user/add_user', 'SettingsController@index4')->name('Settings')->middleware('isAdmin');
Route::post('/add_user', 'SettingsController@addUser')->name('Settings')->middleware('isAdmin');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
