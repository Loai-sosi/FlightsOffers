<?php

use App\Enums\SettingsEnums;

return [

    'title' => [
        'localization_key' => 'general.title',
        'default_value' => env('APP_NAME'),
        'rules' => 'required|string||max:200',
        'type' => SettingsEnums::STRING
    ],

    'description' => [
        'localization_key' => 'general.description',
        'default_value' => '',
        'rules' => 'required|string|max:250',
        'type' => SettingsEnums::TEXT
    ],

    'title_en' => [
        'localization_key' => 'general.title_en',
        'default_value' => env('APP_NAME'),
        'rules' => 'required|string|max:200',
        'type' => SettingsEnums::STRING
    ],

    'description_en' => [
        'localization_key' => 'general.description_en',
        'default_value' => '',
        'rules' => 'required|string|max:250',
        'type' => SettingsEnums::TEXT
    ],

    'email' => [
        'localization_key' => 'general.email',
        'default_value' => env('SETTINGS_EMAIL'),
        'rules' => 'required|email',
        'type' => SettingsEnums::STRING
    ],

    'mobile' => [
        'localization_key' => 'general.mobile',
        'default_value' => env('SETTINGS_MOBILE'),
        'rules' => 'required|digits_between:10,14',
        'type' => SettingsEnums::STRING
    ],

    'address' => [
        'localization_key' => 'general.address',
        'default_value' => env('SETTINGS_ADDRESS'),
        'rules' => 'required|string',
        'type' => SettingsEnums::STRING
    ],

    'address_en' => [
        'localization_key' => 'general.address_en',
        'default_value' => env('SETTINGS_ADDRESS'),
        'rules' => 'required|string',
        'type' => SettingsEnums::STRING
    ],

    'twitter' => [
        'localization_key' => 'general.twitter',
        'default_value' => env('SETTINGS_TWITTER'),
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],

    'instagram' => [
        'localization_key' => 'general.instagram',
        'default_value' => env('SETTINGS_INSTAGRAM'),
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],

    'youtube' => [
        'localization_key' => 'general.youtube',
        'default_value' => env('SETTINGS_YOUTUBE'),
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],

    'whatsapp' => [
        'localization_key' => 'general.whatsapp',
        'default_value' => env('SETTINGS_WHATSAPP'),
        'rules' => 'required',
        'type' => SettingsEnums::STRING
    ],
    
    'facebook' => [
        'localization_key' => 'general.facebook',
        'default_value' => env('SETTINGS_FACEBOOK'),
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],

    'linkedin' => [
        'localization_key' => 'general.linkedin',
        'default_value' => env('SETTINGS_LINKEDIN'),
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],

    'MAX_FEE_TASKS' => [
        'localization_key' => 'الحد الاقصى للمهام المجانية',
        'default_value' => '0',
        'rules' => 'required',
        'type' => SettingsEnums::NUMBER
    ],
    'MAX_FREE_PROJECTS' => [
        'localization_key' => 'الحد الأقصى للمشاريع المجانية',
        'default_value' => '0',
        'rules' => 'required',
        'type' => SettingsEnums::NUMBER
    ],

    'appstore' => [
        'localization_key' => 'general.appstore',
        'default_value' => '',
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],
    'googleplay' => [
        'localization_key' => 'general.googleplay',
        'default_value' => '',
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],
    'appgallery' => [
        'localization_key' => 'general.appgallery',
        'default_value' => '',
        'rules' => 'required|url',
        'type' => SettingsEnums::STRING
    ],


];
