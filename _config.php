<?php
// if (Director::isDev()) {

// if (Director::IsTest()) {

// if (Director::isLive()) {

define('TAURANGI_STYLE', 'firefox');
// define('TAURANGI_STYLE', 'silverstripe');

// if(Director::isLive()) {
// 	define('TAURANGI_ACCESS', false);
// }

// if(Director::isDev()) {
// 	define('TAURANGI_ACCESS', false);
// }

require_once(__DIR__.'/vendor/taurangi/class.taurangi.php');

function pp($input){
	taurangi::prettyPrint($input);
}

Page_Controller::add_extension('DeveloperTools');