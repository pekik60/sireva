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

// Route::get('/', 'HomepageController@index')->name('homepage');
// Auth::routes();
Route::get('/', 'Auth\loginController@index_login')->name('index_login');
Route::get('/login', 'Auth\loginController@index_login')->name('index_login');
Route::get('/register', 'Auth\loginController@index_register')->name('index_register');
Route::get('/login_proces', 'Auth\loginController@login')->name('login');
Route::get('/register_proces', 'Auth\loginController@register')->name('register');
Route::post('/logout', 'Auth\loginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

// Arsip Data Revisi
Route::get('/arsip_data_revisi', 'arsip_data_revisiController@arsip_data_revisi')->name('arsip_data_revisi');
Route::get('/arsip_data_revisi/save', 'arsip_data_revisiController@arsip_data_revisi_save')->name('arsip_data_revisi_save');
Route::get('/arsip_data_revisi/edit', 'arsip_data_revisiController@arsip_data_revisi_edit')->name('arsip_data_revisi_edit');
Route::get('/arsip_data_revisi/update', 'arsip_data_revisiController@arsip_data_revisi_update')->name('arsip_data_revisi_update');
Route::get('/arsip_data_revisi/delete', 'arsip_data_revisiController@arsip_data_revisi_delete')->name('arsip_data_revisi_delete');

// Proses Baru
Route::post('/pengajuan_revisi', 'pengajuan_revisiController@pengajuan_revisi')->name('pengajuan_revisi');
Route::post('/proses_pengajuan_revisi', 'proses_pengajuan_revisiController@proses_pengajuan_revisi')->name('proses_pengajuan_revisi');
Route::get('/proses_baru', 'proses_baruController@proses_baru')->name('proses_baru');
Route::get('/proses_baru/save', 'proses_baruController@proses_baru_save')->name('proses_baru_save');
Route::get('/proses_baru/edit', 'proses_baruController@proses_baru_edit')->name('proses_baru_edit');
Route::get('/proses_baru/update', 'proses_baruController@proses_baru_update')->name('proses_baru_update');
Route::get('/proses_baru/delete', 'proses_baruController@proses_baru_delete')->name('proses_baru_delete');
Route::get('/proses_baru/datatable', 'proses_baruController@proses_baru_datatable')->name('proses_baru_datatable');

// department
Route::get('/master/department', 'master\departmentController@department')->name('department');
Route::get('/master/department/save', 'master\departmentController@department_save')->name('department_save');
Route::get('/master/department/edit', 'master\departmentController@department_edit')->name('department_edit');
Route::get('/master/department/update', 'master\departmentController@department_update')->name('department_update');
Route::get('/master/department/delete', 'master\departmentController@department_delete')->name('department_delete');
Route::get('/master/department/datatable', 'master\departmentController@department_datatable')->name('department_datatable');

// unit
Route::get('/master/unit', 'master\unitController@unit')->name('unit');
Route::get('/master/unit/save', 'master\unitController@unit_save')->name('unit_save');
Route::get('/master/unit/edit', 'master\unitController@unit_edit')->name('unit_edit');
Route::get('/master/unit/update', 'master\unitController@unit_update')->name('unit_update');
Route::get('/master/unit/delete', 'master\unitController@unit_delete')->name('unit_delete');
Route::get('/master/unit/datatable', 'master\unitController@unit_datatable')->name('unit_datatable');

// program
Route::get('/master/program', 'master\programController@program')->name('program');
Route::get('/master/program/save', 'master\programController@program_save')->name('program_save');
Route::get('/master/program/edit', 'master\programController@program_edit')->name('program_edit');
Route::get('/master/program/update', 'master\programController@program_update')->name('program_update');
Route::get('/master/program/delete', 'master\programController@program_delete')->name('program_delete');
Route::get('/master/program/datatable', 'master\programController@program_datatable')->name('program_datatable');

// kegiatan
Route::get('/master/kegiatan', 'master\kegiatanController@kegiatan')->name('kegiatan');
Route::get('/master/kegiatan/save', 'master\kegiatanController@kegiatan_save')->name('kegiatan_save');
Route::get('/master/kegiatan/edit', 'master\kegiatanController@kegiatan_edit')->name('kegiatan_edit');
Route::get('/master/kegiatan/update', 'master\kegiatanController@kegiatan_update')->name('kegiatan_update');
Route::get('/master/kegiatan/delete', 'master\kegiatanController@kegiatan_delete')->name('kegiatan_delete');
Route::get('/master/kegiatan/datatable', 'master\kegiatanController@kegiatan_datatable')->name('kegiatan_datatable');

// output
Route::get('/master/output', 'master\outputController@output')->name('output');
Route::get('/master/output/save', 'master\outputController@output_save')->name('output_save');
Route::get('/master/output/edit', 'master\outputController@output_edit')->name('output_edit');
Route::get('/master/output/update', 'master\outputController@output_update')->name('output_update');
Route::get('/master/output/delete', 'master\outputController@output_delete')->name('output_delete');
Route::get('/master/output/datatable', 'master\outputController@output_datatable')->name('output_datatable');

// sub_output
Route::get('/master/sub_output', 'master\sub_outputController@sub_output')->name('sub_output');
Route::get('/master/sub_output/save', 'master\sub_outputController@sub_output_save')->name('sub_output_save');
Route::get('/master/sub_output/edit', 'master\sub_outputController@sub_output_edit')->name('sub_output_edit');
Route::get('/master/sub_output/update', 'master\sub_outputController@sub_output_update')->name('sub_output_update');
Route::get('/master/sub_output/delete', 'master\sub_outputController@sub_output_delete')->name('sub_output_delete');
Route::get('/master/sub_output/datatable', 'master\sub_outputController@sub_output_datatable')->name('sub_output_datatable');

// komponen
Route::get('/master/komponen', 'master\komponenController@komponen')->name('komponen');
Route::get('/master/komponen/save', 'master\komponenController@komponen_save')->name('komponen_save');
Route::get('/master/komponen/edit', 'master\komponenController@komponen_edit')->name('komponen_edit');
Route::get('/master/komponen/update', 'master\komponenController@komponen_update')->name('komponen_update');
Route::get('/master/komponen/delete', 'master\komponenController@komponen_delete')->name('komponen_delete');
Route::get('/master/komponen/datatable', 'master\komponenController@komponen_datatable')->name('komponen_datatable');

// Dashboard
Route::get('/dashboard', 'dashboardController@dashboard')->name('dashboard');
Route::get('/dashboard/save', 'dashboardController@dashboard_save')->name('dashboard_save');
Route::get('/dashboard/edit', 'dashboardController@dashboard_edit')->name('dashboard_edit');
Route::get('/dashboard/update', 'dashboardController@dashboard_update')->name('dashboard_update');
Route::get('/dashboard/delete', 'dashboardController@dashboard_delete')->name('dashboard_delete');
Route::get('/dashboard/datatable', 'dashboardController@dashboard_datatable')->name('dashboard_datatable');

// Tugas
Route::get('/tugas', 'tugasController@tugas')->name('tugas');
Route::get('/tugas/save', 'tugasController@tugas_save')->name('tugas_save');
Route::get('/tugas/edit', 'tugasController@tugas_edit')->name('tugas_edit');
Route::get('/tugas/update', 'tugasController@tugas_update')->name('tugas_update');
Route::get('/tugas/delete', 'tugasController@tugas_delete')->name('tugas_delete');
Route::get('/tugas/datatable', 'tugasController@tugas_datatable')->name('tugas_datatable');

// Riwayat
Route::get('/riwayat', 'riwayatController@riwayat')->name('riwayat');
Route::get('/riwayat/save', 'riwayatController@riwayat_save')->name('riwayat_save');
Route::get('/riwayat/edit', 'riwayatController@riwayat_edit')->name('riwayat_edit');
Route::get('/riwayat/update', 'riwayatController@riwayat_update')->name('riwayat_update');
Route::get('/riwayat/delete', 'riwayatController@riwayat_delete')->name('riwayat_delete');
Route::get('/riwayat/datatable', 'riwayatController@riwayat_datatable')->name('riwayat_datatable');

// Panduan
Route::get('/panduan', 'panduanController@panduan')->name('panduan');
Route::get('/panduan/save', 'panduanController@panduan_save')->name('panduan_save');
Route::get('/panduan/edit', 'panduanController@panduan_edit')->name('panduan_edit');
Route::get('/panduan/update', 'panduanController@panduan_update')->name('panduan_update');
Route::get('/panduan/delete', 'panduanController@panduan_delete')->name('panduan_delete');
Route::get('/panduan/datatable', 'panduanController@panduan_datatable')->name('panduan_datatable');

// Detil
Route::get('/detil', 'detilController@detil')->name('detil');
