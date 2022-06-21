<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Front');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
//$routes->set404Override();
$routes->set404Override(function () {
	$data = [
		'title_meta' => view('partials/title-meta', ['title' => 'Error_404'])
	];
	return view('pages-404', $data);
});
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Authentication Routing ---- Removed 

$routes->get('/', 'Front::index');
$routes->get('/aboutus', 'Front::aboutus');

// Later will be commented because myth auth
// $routes->get('login', 'Auth::login');
// $routes->get('register', 'Auth::register');
// $routes->get('forgot', 'Auth::forgotpassword');
// $routes->get('reset-password', 'Auth::resetpassword');
$routes->get('confirm-mail', 'Auth::emailactivation');

$routes->get('welcomegaiss', 'Firsttimeprofile::profile_form', ['filter' => 'role:admin, KEKL19']);
$routes->post('welcomegaiss/edit-data-action/(:num)', 'Firsttimeprofile::profile_edit_data_action/$1', ['filter' => 'role:admin, KEKL19']);


$routes->get('dashboard', 'Dashboard::index', ['filter' => 'role:admin, KEKL19']);
$routes->get('contact-list', 'Dashboard::contact_list', ['filter' => 'role:admin, KEKL19']);
$routes->get('contact-grid', 'Dashboard::contact_grid', ['filter' => 'role:admin, KEKL19']);
$routes->get('contact-profile/(:any)', 'Dashboard::contact_profile/$1', ['filter' => 'role:admin, KEKL19']);
$routes->get('profile-wizard', 'Dashboard::profile_wizard', ['filter' => 'role:admin, KEKL19']);
$routes->get('profile-form', 'Dashboard::profile_form', ['filter' => 'role:admin, KEKL19']);
$routes->get('profile', 'Dashboard::profile', ['filter' => 'role:admin, KEKL19']);
$routes->post('profile/edit-data-action/(:num)', 'Dashboard::profile_edit_data_action/$1', ['filter' => 'role:admin, KEKL19']);
$routes->post('profile/edit-image-action/(:num)', 'Dashboard::profile_edit_image_action/$1', ['filter' => 'role:admin, KEKL19']);

// News
$routes->get('admin-news', 'Dashboard::admin_news', ['filter' => 'role:admin']);
$routes->get('admin-news/detail/(:any)', 'Dashboard::admin_news_detail/$1', ['filter' => 'role:admin']);
$routes->get('admin-news/add', 'Dashboard::admin_news_add', ['filter' => 'role:admin']);
$routes->post('admin-news/add-action', 'Dashboard::admin_news_add_action', ['filter' => 'role:admin']);
$routes->delete('admin-news/(:num)', 'Dashboard::admin_news_delete/$1', ['filter' => 'role:admin']);
$routes->post('admin-news/edit/(:any)', 'Dashboard::admin_news_edit/$1', ['filter' => 'role:admin']);
$routes->post('admin-news/edit-action/(:num)', 'Dashboard::admin_news_edit_action/$1', ['filter' => 'role:admin']);
$routes->post('admin-news/publish-action/(:num)', 'Dashboard::admin_news_publish_action/$1', ['filter' => 'role:admin']);
$routes->post('admin-news/unpublish-action/(:num)', 'Dashboard::admin_news_unpublish_action/$1', ['filter' => 'role:admin']);
$routes->get('news-event', 'Dashboard::user_news', ['filter' => 'role:admin, KEKL19']);

// Admin Contact List
$routes->get('admin-contact-list', 'Dashboard::admin_contact_list', ['filter' => 'role:admin, KEKL19']);
$routes->post('admin-contact-list/band-action/(:num)', 'Dashboard::admin_member_ban_action/$1', ['filter' => 'role:admin']);
$routes->post('admin-contact-list/unband-action/(:num)', 'Dashboard::admin_member_unban_action/$1', ['filter' => 'role:admin']);
$routes->post('admin-contact-list/activate-action/(:num)', 'Dashboard::admin_member_activate_action/$1', ['filter' => 'role:admin']);
$routes->post('admin-contact-list/deactivate-action/(:num)', 'Dashboard::admin_member_deactivate_action/$1', ['filter' => 'role:admin']);

// Report
$routes->get('admin-report', 'Dashboard::admin_report', ['filter' => 'role:admin']);
$routes->delete('admin-report/(:num)', 'Dashboard::admin_report_delete/$1', ['filter' => 'role:admin']);
$routes->post('admin-report/edit/(:num)', 'Dashboard::admin_report_edit/$1', ['filter' => 'role:admin']);
$routes->post('admin-report/edit-action/(:num)', 'Dashboard::admin_report_edit_action/$1', ['filter' => 'role:admin']);
$routes->post('admin-report/answer-action/(:num)', 'Dashboard::admin_report_answer_action/$1', ['filter' => 'role:admin']);
$routes->post('admin-report/unanswer-action/(:num)', 'Dashboard::admin_report_unanswer_action/$1', ['filter' => 'role:admin']);
$routes->get('report', 'Dashboard::report', ['filter' => 'role:admin, KEKL19']);
$routes->get('report/add', 'Dashboard::report_add', ['filter' => 'role:admin, KEKL19']);
$routes->post('report/add-action', 'Dashboard::report_add_action', ['filter' => 'role:admin, KEKL19']);

// 2016
$routes->get('popsila-2016', 'Dashboard::popsila_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('career-day-2016', 'Dashboard::career_day_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('classmeet-2016', 'Dashboard::classmeet_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('daftar-ulang-2016', 'Dashboard::daftar_ulang_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('dbl-2016', 'Dashboard::dbl_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('lc-zone-2016', 'Dashboard::lc_zone_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('lef-2016', 'Dashboard::lef_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('losaac-2016', 'Dashboard::losaac_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('malam-sosial-2016', 'Dashboard::malam_sosial_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('pelantikan-paskibra-2016', 'Dashboard::pelantikan_paskibra_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('pesta-nama-2016', 'Dashboard::pesta_nama_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('pitulasan-2016', 'Dashboard::pitulasan_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('sarasehan-2016', 'Dashboard::sarasehan_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('sarasehan-paskibra-2016', 'Dashboard::sarasehan_paskibra_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('seleksi-loparte-2016', 'Dashboard::seleksi_loparte_2016', ['filter' => 'role:admin, KEKL19']);
$routes->get('upacara-2016', 'Dashboard::upacara_2016', ['filter' => 'role:admin, KEKL19']);

// 2017
$routes->get('classmeet-2017', 'Dashboard::classmeet_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('dkkl-2017', 'Dashboard::dkkl_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('konser-soepra-jakarta-2017', 'Dashboard::konser_soepra_jakarta_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('konser-soepra-lawangsewu-2017', 'Dashboard::konser_soepra_lawangsewu_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('lc-got-talent-2017', 'Dashboard::lc_got_talent_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('lc-zone-2017', 'Dashboard::lc_zone_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('leadership-camp-2017', 'Dashboard::leadership_camp_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('lef-2017', 'Dashboard::lef_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('live-in-2017', 'Dashboard::live_in_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('losaac-2017', 'Dashboard::losaac_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('momento-2017', 'Dashboard::momento_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('pesta-natal-2017', 'Dashboard::pesta_natal_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('popsila-2017', 'Dashboard::popsila_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('rekoleksi-2017', 'Dashboard::rekoleksi_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('suloco-2017', 'Dashboard::suloco_2017', ['filter' => 'role:admin, KEKL19']);
$routes->get('teacher-day-2017', 'Dashboard::teacher_day_2017', ['filter' => 'role:admin, KEKL19']);

// 2018
$routes->get('bali-2018', 'Dashboard::bali_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('basket-2018', 'Dashboard::basket_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('classmeet-2018', 'Dashboard::classmeet_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('ekskursi-2018', 'Dashboard::ekskursi_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('fesfias-2018', 'Dashboard::fesfias_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('infinite-2018', 'Dashboard::infinite_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('karnaval-paskah-2018', 'Dashboard::karnaval_paskah_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('konser-lv-2018', 'Dashboard::konser_lv_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('lc-zone-2018', 'Dashboard::lc_zone_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('lef-2018', 'Dashboard::lef_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('lpl-2018', 'Dashboard::lpl_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('malam-musik-2018', 'Dashboard::malam_musik_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('pasar-murah-2018', 'Dashboard::pasar_murah_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('paskibra-2018', 'Dashboard::paskibra_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('pesiri-2018', 'Dashboard::pesiri_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('pesta-nama-2018', 'Dashboard::pesta_nama_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('pesta-natal-2018', 'Dashboard::pesta_natal_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('popsila-2018', 'Dashboard::popsila_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('retret-2018', 'Dashboard::retret_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('sadaco-2018', 'Dashboard::sadaco_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('sadar-lingkungan-2018', 'Dashboard::sadar_lingkungan_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('suloco-2018', 'Dashboard::suloco_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('teloco-2018', 'Dashboard::teloco_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('temu-kolese-2018', 'Dashboard::temu_kolese_2018', ['filter' => 'role:admin, KEKL19']);
$routes->get('upacara-2018', 'Dashboard::upacara_2018', ['filter' => 'role:admin, KEKL19']);

// 2019
$routes->get('euforia-2019', 'Dashboard::euforia_2019', ['filter' => 'role:admin, KEKL19']);
$routes->get('gelar-karya-2019', 'Dashboard::gelar_karya_2019', ['filter' => 'role:admin, KEKL19']);
$routes->get('konser-lv-2019', 'Dashboard::konser_lv_2019', ['filter' => 'role:admin, KEKL19']);

// KKL67
$routes->get('kkl67-1', 'Dashboard::kkl67_1', ['filter' => 'role:admin, KEKL19']);
$routes->get('kkl67-2', 'Dashboard::kkl67_2', ['filter' => 'role:admin, KEKL19']);
$routes->get('kkl67-3', 'Dashboard::kkl67_3', ['filter' => 'role:admin, KEKL19']);
$routes->get('kkl67-4', 'Dashboard::kkl67_4', ['filter' => 'role:admin, KEKL19']);
$routes->get('kkl67-5', 'Dashboard::kkl67_5', ['filter' => 'role:admin, KEKL19']);
$routes->get('kkl67-6', 'Dashboard::kkl67_6', ['filter' => 'role:admin, KEKL19']);
$routes->get('kkl67-7', 'Dashboard::kkl67_7', ['filter' => 'role:admin, KEKL19']);
$routes->get('kkl67-8', 'Dashboard::kkl67_8', ['filter' => 'role:admin, KEKL19']);
$routes->get('kkl67-video', 'Dashboard::kkl67_video', ['filter' => 'role:admin, KEKL19']);

// KEKL19
$routes->get('kekl19-bandung', 'Dashboard::kekl19_bandung', ['filter' => 'role:admin, KEKL19']);
$routes->get('kekl19-jakarta', 'Dashboard::kekl19_jakarta', ['filter' => 'role:admin, KEKL19']);
$routes->get('kekl19-jogjasolo', 'Dashboard::kekl19_jogjasolo', ['filter' => 'role:admin, KEKL19']);
$routes->get('kekl19-malang', 'Dashboard::kekl19_malang', ['filter' => 'role:admin, KEKL19']);
$routes->get('kekl19-semarang', 'Dashboard::kekl19_semarang', ['filter' => 'role:admin, KEKL19']);
$routes->get('kekl19-surabaya', 'Dashboard::kekl19_surabaya', ['filter' => 'role:admin, KEKL19']);
$routes->get('kekl19-temukangen', 'Dashboard::kekl19_temukangen', ['filter' => 'role:admin, KEKL19']);

// Yearbook
$routes->get('yearbook-xiia', 'Dashboard::yearbook_xiia', ['filter' => 'role:admin, KEKL19']);
$routes->get('yearbook-xiib', 'Dashboard::yearbook_xiib', ['filter' => 'role:admin, KEKL19']);
$routes->get('yearbook-xiic', 'Dashboard::yearbook_xiic', ['filter' => 'role:admin, KEKL19']);
$routes->get('yearbook-xiid', 'Dashboard::yearbook_xiid', ['filter' => 'role:admin, KEKL19']);
$routes->get('yearbook-xiie', 'Dashboard::yearbook_xiie', ['filter' => 'role:admin, KEKL19']);
$routes->get('yearbook-xiif', 'Dashboard::yearbook_xiif', ['filter' => 'role:admin, KEKL19']);
$routes->get('yearbook-xiig', 'Dashboard::yearbook_xiig', ['filter' => 'role:admin, KEKL19']);
$routes->get('yearbook-xiih', 'Dashboard::yearbook_xiih', ['filter' => 'role:admin, KEKL19']);
$routes->get('yearbook-xiii', 'Dashboard::yearbook_xiii', ['filter' => 'role:admin, KEKL19']);

$routes->get('video-mh', 'Dashboard::video_mh', ['filter' => 'role:admin, KEKL19']);
$routes->get('uncategorized-mh', 'Dashboard::uncategorized_mh', ['filter' => 'role:admin, KEKL19']);

// $routes->get('/', 'Home::index');
// $routes->get('/home', 'Home::index');
// $routes->get('index-dark', 'Home::show_index_dark');
// $routes->get('index-rtl', 'Home::show_index_rtl');
// $routes->get('layouts-boxed', 'Home::show_layouts_boxed');
// $routes->get('layouts-colored-sidebar', 'Home::show_colored_sidebar');
// $routes->get('layouts-compact-sidebar', 'Home::show_compact_sidebar');
// $routes->get('layouts-dark-sidebar', 'Home::show_dark_sidebar');
// $routes->get('layouts-icon-sidebar', 'Home::show_icon_sidebar');
// $routes->get('layouts-scrollable', 'Home::show_layouts_scrollable');


// //Multi-language functionality 
// $routes->get('/lang/{locale}', 'Language::index');

// // //Layout section routing
// $routes->get('layouts-horizontal', 'Home::show_layouts_horizontal');
// $routes->get('layouts-horizontal-boxed', 'Home::show_layouts_horizontal_boxed');
// $routes->get('layouts-horizontal-dark', 'Home::show_layouts_horizontal_dark');
// $routes->get('layouts-horizontal-rtl', 'Home::show_layouts_horizontal_rtl');
// $routes->get('layouts-horizontal-scrollable', 'Home::show_layouts_horizontal_scrollable');
// $routes->get('layouts-horizontal-dark-topbar', 'Home::show_layouts_dark_topbar');


// // //App section routing
// $routes->get('apps-calendar', 'Home::show_calendar');

// $routes->get('apps-chat', 'Home::show_chat');

// $routes->get('apps-email-inbox', 'Home::show_email_inbox');
// $routes->get('apps-email-read', 'Home::show_email_read');

// $routes->get('apps-invoices-list', 'Home::show_invoices_list');
// $routes->get('apps-invoices-detail', 'Home::show_invoices_detail');

// $routes->get('apps-contacts-grid', 'Home::show_contacts_grid');
// $routes->get('apps-contacts-list', 'Home::show_contacts_list');
// $routes->get('apps-contacts-profile', 'Home::show_contacts_profile');

// // Pages
// $routes->get('auth-login', 'Home::show_auth_login');
// $routes->get('auth-register', 'Home::show_auth_register');
// $routes->get('auth-recoverpw', 'Home::show_auth_recoverpw');
// $routes->get('auth-lock-screen', 'Home::show_auth_lock_screen');
// $routes->get('auth-confirm-mail', 'Home::show_auth_confirm_mail');
// $routes->get('auth-email-verification', 'Home::show_auth_email_verification');
// $routes->get('auth-two-step-verification', 'Home::show_auth_two_step_verification');


// $routes->get('pages-starter', 'Home::show_pages_starter');
// $routes->get('pages-invoice', 'Home::show_pages_invoice');
// $routes->get('pages-profile', 'Home::show_pages_profile');
// $routes->get('pages-maintenance', 'Home::show_pages_maintenance');
// $routes->get('pages-comingsoon', 'Home::show_pages_comingsoon');
// $routes->get('pages-timeline', 'Home::show_pages_timeline');
// $routes->get('pages-faqs', 'Home::show_pages_faqs');
// $routes->get('pages-pricing', 'Home::show_pages_pricing');
// $routes->get('pages-404', 'Home::show_pages_404');
// $routes->get('pages-500', 'Home::show_pages_500');

// // UI Elements
// $routes->get('ui-alerts', 'Home::show_ui_alerts');
// $routes->get('ui-buttons', 'Home::show_ui_buttons');
// $routes->get('ui-cards', 'Home::show_ui_cards');
// $routes->get('ui-carousel', 'Home::show_ui_carousel');
// $routes->get('ui-dropdowns', 'Home::show_ui_dropdowns');
// $routes->get('ui-grid', 'Home::show_ui_grid');
// $routes->get('ui-images', 'Home::show_ui_images');
// $routes->get('ui-modals', 'Home::show_ui_modals');
// $routes->get('ui-progressbars', 'Home::show_ui_progressbars');
// $routes->get('ui-tabs-accordions', 'Home::show_ui_tabs_accordions');
// $routes->get('ui-typography', 'Home::show_ui_typography');
// $routes->get('ui-video', 'Home::show_ui_video');
// $routes->get('ui-general', 'Home::show_ui_general');
// $routes->get('ui-colors', 'Home::show_ui_colors');
// $routes->get('ui-offcanvas', 'Home::show_ui_offcanvas');

// //Extended
// $routes->get('extended-lightbox', 'Home::show_extended_lightbox');
// $routes->get('extended-rangeslider', 'Home::show_extended_rangeslider');
// $routes->get('extended-session-timeout', 'Home::show_extended_session_timeout');
// $routes->get('extended-sweet-alert', 'Home::show_extended_sweet_alert');
// $routes->get('extended-rating', 'Home::show_extended_rating');
// $routes->get('extended-notifications', 'Home::show_extended_notification');

// // Forms
// $routes->get('form-elements', 'Home::show_form_elements');
// $routes->get('form-validation', 'Home::show_form_validation');
// $routes->get('form-advanced', 'Home::show_form_advanced');
// $routes->get('form-editors', 'Home::show_form_editors');
// $routes->get('form-uploads', 'Home::show_form_uploads');
// $routes->get('form-xeditable', 'Home::show_form_xeditable');
// $routes->get('form-repeater', 'Home::show_form_repeater');
// $routes->get('form-wizard', 'Home::show_form_wizard');
// $routes->get('form-mask', 'Home::show_form_mask');

// // Tables
// $routes->get('tables-basic', 'Home::show_tables_basic');
// $routes->get('tables-datatable', 'Home::show_tables_datatable');
// $routes->get('tables-responsive', 'Home::show_tables_responsive');
// $routes->get('tables-editable', 'Home::show_tables_editable');

// // Charts
// $routes->get('charts-apex', 'Home::show_charts_apex');
// $routes->get('charts-chartjs', 'Home::show_charts_chartjs');
// $routes->get('charts-echart', 'Home::show_charts_echart');
// $routes->get('charts-knob', 'Home::show_charts_knob');
// $routes->get('charts-sparkline', 'Home::show_charts_sparkline');

// // Icons
// $routes->get('icons-boxicons', 'Home::show_icons_boxicons');
// $routes->get('icons-materialdesign', 'Home::show_icons_materialdesign');
// $routes->get('icons-dripicons', 'Home::show_icons_dripicons');
// $routes->get('icons-fontawesome', 'Home::show_icons_fontawesome');

// // Maps
// $routes->get('maps-google', 'Home::show_maps_google');
// $routes->get('maps-vector', 'Home::show_maps_vector');
// $routes->get('maps-leaflet', 'Home::show_maps_leaflet');



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
