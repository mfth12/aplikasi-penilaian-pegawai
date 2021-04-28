<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
|
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['about'] = 'about';
// $route['contact'] = 'contact';

//ini untuk link adres    
$route['admin'] = 'admin/overview'; 
$route['user'] = 'user/overview_user'; 
$route['kepsek'] = 'kepsek/overview_kepsek'; 
//ini adalah direktori tujuan yg dieksekusi
// ini rutes untuk mengganti direktori
$route['data_penilaian'] = 'admin/data_penilaian'; // mengubah admin-datapenilaian -> menjadi data penilaian aja yaa
// $route['admin/proses_penilaian'] = 'admin/proses_penilaian'; 
// $route['admin/data_jabatan'] = 'admin/data_jabatan'; 
// $route['admin/pengajuan_jabatan'] = 'admin/pengajuan_jabatan'; 
// $route['admin/data_pegawai'] = 'admin/data_pegawai'; 
// $route['profile'] = 'profile'; 

