<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CkeEditorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\LandingSectionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConstantsController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\StaticPageController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UserSubscriptionsController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'admin.','middleware' => 'localization'], function () {

});





