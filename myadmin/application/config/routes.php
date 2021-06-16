<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['tempat']                                = 'dashboard/tempat';
$route['tempat/view-data/(:any)']               = 'dashboard/action_tempat';
$route['tempat/tambah-data']                    = 'dashboard/tambah_tempat';
$route['tempat/simpan-data']                    = 'dashboard/simpan_tempat';

// kategori
$route['kategori']                                = 'dashboard/kategori';
$route['kategori/view-data/(:any)']               = 'dashboard/action_kategori';
$route['kategori/tambah-data']                    = 'dashboard/tambah_kategori';
$route['kategori/simpan-data']                    = 'dashboard/simpan_kategori';


// pasien
$route['pasien']                                = 'dashboard/pasien';
$route['pasien/tambah-data']                    = 'dashboard/tambah_pasien';
$route['pasien/simpan-data']                    = 'dashboard/simpan_pasien';
$route['pasien/view-data/(:any)']               = 'dashboard/action_pasien';
$route['pasien/edit-data/(:any)']               = 'dashboard/action_pasien';
$route['pasien/update-data']                    = 'dashboard/update_pasien';
$route['pasien/hapus-data/(:any)']              = 'dashboard/hapus_pasien';

// daftar
$route['daftar']                                = 'dashboard/daftar';
$route['daftar/simpan-data']                    = 'dashboard/simpan_daftar';

// dokter
$route['dokter']                                = 'dashboard/dokter';
$route['dokter/tambah-data']                    = 'dashboard/tambah_dokter';
$route['dokter/simpan-data']                    = 'dashboard/simpan_dokter';
$route['dokter/view-data/(:any)']               = 'dashboard/action_dokter';
$route['dokter/edit-data/(:any)']               = 'dashboard/action_dokter';
$route['dokter/update-data']                    = 'dashboard/update_dokter';
$route['dokter/hapus-data/(:any)']              = 'dashboard/hapus_dokter';
$route['dokter/data/(:any)']                    = 'dashboard/data_dokter';

// poli
$route['poli']                                = 'dashboard/poli';
$route['poli/tambah-data']                    = 'dashboard/tambah_poli';
$route['poli/simpan-data']                    = 'dashboard/simpan_poli';
$route['poli/view-data/(:any)']               = 'dashboard/action_poli';
$route['poli/edit-data/(:any)']               = 'dashboard/action_poli';
$route['poli/update-data']                    = 'dashboard/update_poli';
$route['poli/hapus-data/(:any)']              = 'dashboard/hapus_poli';

// poli
$route['periksa']                               = 'dashboard/periksa';
$route['periksa/check-up/(:any)']               = 'dashboard/checkup';
$route['periksa/simpan-data']                   = 'dashboard/simpan_periksa';

// resep
$route['resep/simpan-data']                     = 'dashboard/simpan_resep';
$route['resep/view-data']                       = 'dashboard/view_resep';
