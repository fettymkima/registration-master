<?php
 use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;


 // by machumu...
Breadcrumbs::register('home', function ($trail) {
    $trail->push('Home', url('/'));
});
   Breadcrumbs::register('user', function ($trail) {
       $trail->parent('home');
       $trail->push('User', url('/user'));
   });
Breadcrumbs::register('register', function ($trail) {
    $trail->parent('user');
    $trail->push('Register', url('user/register'));
});


Breadcrumbs::register('report',function ($trail){

    $trail->push('Report',url('report'));

});


Breadcrumbs::register('report_select',function ($trail){

    $trail->parent('report');
    $trail->push('Select',url('report/select'));

});

Breadcrumbs::register('report_get',function ($trail){

    $trail->parent('report_select');
    $trail->push('Get',url('report/select'));

});

Breadcrumbs::register('response',function ($trail){

    $trail->push('Response',url('response'));

});

Breadcrumbs::register('response_attend',function ($trail){

    $trail->parent('response');
    $trail->push('Attend',url('response/attend'));

});

Breadcrumbs::register('complaint',function ($trail){

    $trail->push('Complaint',url('complaint'));

});

Breadcrumbs::register('complaint_create',function ($trail){

    $trail->parent('complaint');

    $trail->push('Create',url('complaint/create'));

});

Breadcrumbs::register('advanced_search',function ($trail){

    $trail->parent('home');
    $trail->push('Search',url('search/form'));
});
Breadcrumbs::register('form_search',function ($trail){
    $trail->parent('advanced_search');

    $trail->push('Form',url('search/form'));
});

//fetty
Breadcrumbs::register('role', function ($trait)
{
    $trait->push('Role', url('role'));
});

Breadcrumbs::register('role/create', function ($trail)
{
   $trail->parent('role');
   $trail->push('Create', url('role/create'));
});
Breadcrumbs::register('assign/role', function ($trail) {
    $trail->parent('role');
    $trail->push('roleProfile', url('roleProfile/assign/role'));
});


Breadcrumbs::register('roleProfile', function ($trail) {
    $trail->push('RoleProfile', url('roleProfile'));
});

Breadcrumbs::register('assign/profile', function ($trail) {
    $trail->parent('roleProfile');
    $trail->push('Assign/Profile', url('assign/profile'));
});

Breadcrumbs::register('advance_search', function ($trail)
{
   $trail->parent('home');
   $trail->push('search', url('search/form'));
});


Breadcrumbs::register('followup', function ($trail)
{
    $trail->parent('home');
    $trail->push('followup', url('complaints/followups'));
});


