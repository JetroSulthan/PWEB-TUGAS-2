<?php

// Auth
Router::url('login', 'get', 'c_auth::login');
Router::url('login', 'post', 'c_auth::sessionLogin');
Router::url('register', 'get', 'c_auth::register');
Router::url('register', 'post', 'c_auth::newRegister');
Router::url('logout', 'get', 'c_auth::logout');

// Dashboard
Router::url('dashboard', 'get', 'c_dashboard::index');
Router::url('dashboard/tambah/contact', 'get', 'c_contact::addindex');
Router::url('dashboard/tambah/contact', 'post', 'c_contact::createContact');
Router::url('dashboard/edit/contact', 'get', 'c_contact::updateindex');
Router::url('dashboard/edit/contact', 'post', 'c_contact::updateContact');
Router::url('dashboard/delete-contact', 'get', 'c_contact::deleteContact');



Router::url('/', 'get', function () {
    header('Location: login');
});