<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['home'] = 'welcome/home';
$route['event'] = 'welcome/event';
$route['event_statistik'] = 'welcome/event_statistik';
$route['event_log'] = 'welcome/event_log';
$route['lihat_event'] = 'welcome/lihat_event';
$route['tambah_event'] = 'welcome/tambah_event';
$route['edit_event'] = 'welcome/edit_event';
$route['tambah_peserta'] = 'welcome/tambah_peserta';
$route['modul'] = 'welcome/modul';
$route['tambah_modul'] = 'welcome/tambah_modul';
$route['subtest'] = 'welcome/subtest';
$route['data_pegawai'] = 'welcome/data_pegawai';
$route['daftar_pegawai'] = 'welcome/daftar_pegawai';

$route['verifikasi'] = 'test/verifikasi';
$route['subtes1'] = 'test/subtes_1';
$route['subtes2'] = 'test/subtes_2';
$route['subtes3'] = 'test/subtes_3';
$route['subtes4'] = 'test/subtes_4';
$route['subtes5'] = 'test/subtes_5';
$route['subtes6'] = 'test/subtes_6';
$route['subtes7'] = 'test/subtes_7';
$route['selamat_datang'] = 'test/selamat_datang';
$route['subtes_1_soal'] = 'test/subtes_1_soal';
$route['subtes_1_soal_20'] = 'test/subtes_1_soal_20';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
