<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admins',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'مدراء النظام',
                'parent_id' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'admins-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:23',
                'display_name' => 'رؤية المدراء',
                'parent_id' => 1,
            ),
            2 =>
            array (
                'id' => 4,
                'name' => 'admins-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:07',
                'display_name' => 'اضافة تعديل مدير',
                'parent_id' => 1,
            ),
            3 =>
            array (
                'id' => 5,
                'name' => 'admins-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:58',
                'display_name' => 'تغيير حالة المدراء',
                'parent_id' => 1,
            ),
            4 =>
            array (
                'id' => 6,
                'name' => 'admins-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:47',
                'display_name' => 'حذف المدراء',
                'parent_id' => 1,
            ),
            5 =>
            array (
                'id' => 7,
                'name' => 'users',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'المستخدمين',
                'parent_id' => NULL,
            ),
            6 =>
            array (
                'id' => 8,
                'name' => 'users-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:40',
                'display_name' => 'رؤية المستخدمين',
                'parent_id' => 7,
            ),
//            7 =>
//            array (
//                'id' => 10,
//                'name' => 'users-store',
//                'guard_name' => 'admin',
//                'created_at' => '2021-12-15 11:18:23',
//                'updated_at' => '2021-12-15 11:32:21',
//                'display_name' => 'اضافة وتعديل المستخدمين',
//                'parent_id' => 7,
//            ),
            8 =>
            array (
                'id' => 11,
                'name' => 'users-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:09',
                'display_name' => 'تغيير حالة المستخدمين',
                'parent_id' => 7,
            ),
            9 =>
            array (
                'id' => 12,
                'name' => 'users-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:02',
                'display_name' => 'حذف المستخدمين',
                'parent_id' => 7,
            ),
            // categories
            10 =>
            array (
                'id' => 13,
                'name' => 'interests',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'الاهتمامات',
                'parent_id' => NULL,
            ),
            11 =>
            array (
                'id' => 14,
                'name' => 'interests-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:31:05',
                'display_name' => 'رؤية الاهتمامات',
                'parent_id' => 13,
            ),
            12 =>
            array (
                'id' => 15,
                'name' => 'interests-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:53',
                'display_name' => 'اضافة وتعديل الاهتمام',
                'parent_id' => 13,
            ),
            13 =>
            array (
                'id' => 16,
                'name' => 'interests-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:42',
                'display_name' => 'تغيير حالة الاهتمام',
                'parent_id' => 13,
            ),
            14 =>
            array (
                'id' => 18,
                'name' => 'interests-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:24',
                'display_name' => 'حذف الاهتمام',
                'parent_id' => 13,
            ),
            // Activities
            15 =>
            array (
                'id' => 19,
                'name' => 'activities',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'الأنشطة والفترات',
                'parent_id' => NULL,
            ),
            16 =>
            array (
                'id' => 20,
                'name' => 'activities-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:16',
                'display_name' => 'رؤية الأنشطة',
                'parent_id' => 19,
            ),
//            17 =>
//            array (
//                'id' => 21,
//                'name' => 'activities-store',
//                'guard_name' => 'admin',
//                'created_at' => '2021-12-15 11:18:23',
//                'updated_at' => '2021-12-15 11:30:08',
//                'display_name' => 'اضافة تعديل النشاط',
//                'parent_id' => 19,
//            ),
//            18 =>
//            array (
//                'id' => 22,
//                'name' => 'activities-status',
//                'guard_name' => 'admin',
//                'created_at' => '2021-12-15 11:18:23',
//                'updated_at' => '2021-12-15 11:29:54',
//                'display_name' => 'تغيير حالة  النشاط',
//                'parent_id' => 19,
//            ),
//            19 =>
//            array (
//                'id' => 23,
//                'name' => 'activities-delete',
//                'guard_name' => 'admin',
//                'created_at' => '2021-12-15 11:18:23',
//                'updated_at' => '2021-12-15 11:29:46',
//                'display_name' => 'حذف النشاط',
//                'parent_id' => 19,
//            ),
            // Reservations
            20 =>
            array (
                'id' => 24,
                'name' => 'reservations',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'الحجوزات',
                'parent_id' => NULL,
            ),
            21 =>
            array (
                'id' => 25,
                'name' => 'reservations-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:39',
                'display_name' => 'رؤية الحجوزات',
                'parent_id' => 24,
            ),
//            22 =>
//            array (
//                'id' => 26,
//                'name' => 'reservations-store',
//                'guard_name' => 'admin',
//                'created_at' => '2021-12-15 11:18:24',
//                'updated_at' => '2021-12-15 11:29:32',
//                'display_name' => 'اضافة وتعديل الحجوزات',
//                'parent_id' => 24,
//            ),
//            23 =>
//            array (
//                'id' => 27,
//                'name' => 'reservations-status',
//                'guard_name' => 'admin',
//                'created_at' => '2021-12-15 11:18:24',
//                'updated_at' => '2021-12-15 11:29:21',
//                'display_name' => 'تغيير حالة الحجوزات',
//                'parent_id' => 24,
//            ),
            24 =>
            array (
                'id' => 28,
                'name' => 'reservations-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:29:12',
                'display_name' => 'حذف الحجوزات',
                'parent_id' => 24,
            ),
            // subscriptions
            25 =>
            array (
                'id' => 29,
                'name' => 'subscriptions',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'الاشتراكات',
                'parent_id' => NULL,
            ),
            26 =>
            array (
                'id' => 30,
                'name' => 'subscriptions-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:29:05',
                'display_name' => 'عرض الاشتراكات',
                'parent_id' => 29,
            ),



            40 =>
                array (
                    'id' => 39,
                    'name' => 'tags',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 11:18:24',
                    'updated_at' => '2021-12-15 11:18:24',
                    'display_name' => 'الثوابت',
                    'parent_id' => NULL,
                ),
            41 =>
                array (
                    'id' => 40,
                    'name' => 'tags-view',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 11:18:24',
                    'updated_at' => '2021-12-15 11:28:21',
                    'display_name' => 'رؤية الثوابت',
                    'parent_id' => 39,
                ),
            42 =>
                array (
                    'id' => 41,
                    'name' => 'tags-store',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 11:18:24',
                    'updated_at' => '2021-12-15 11:28:10',
                    'display_name' => 'اضافة وتعديل الثوابت',
                    'parent_id' => 39,
                ),
            43 =>
                array (
                    'id' => 42,
                    'name' => 'tags-status',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 11:18:24',
                    'updated_at' => '2021-12-15 11:27:52',
                    'display_name' => 'تغيير حالة الثوابت',
                    'parent_id' => 39,
                ),
            44 =>
                array (
                    'id' => 43,
                    'name' => 'tags-delete',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 11:18:24',
                    'updated_at' => '2021-12-15 11:27:44',
                    'display_name' => 'حذف الثوابت',
                    'parent_id' => 39,
                ),

            65 =>
            array (
                'id' => 71,
                'name' => 'contacts',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'رسائل اتصل بنا',
                'parent_id' => NULL,
            ),
            66 =>
            array (
                'id' => 72,
                'name' => 'contacts-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:22:02',
                'display_name' => 'عرض رسائل اتصل',
                'parent_id' => 71,
            ),
            67 =>
            array (
                'id' => 73,
                'name' => 'contacts-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:21:52',
                'display_name' => 'حذف رسائل اتصل بنا',
                'parent_id' => 71,
            ),
            68 =>
            array (
                'id' => 74,
                'name' => 'settings',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'الإعدادات',
                'parent_id' => NULL,
            ),
            69 =>
            array (
                'id' => 75,
                'name' => 'settings-edit',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:20:48',
                'display_name' => 'تعديل إعدادات النظام',
                'parent_id' => 74,
            ),


            78 =>
            array (
                'id' => 101,
                'name' => 'roles',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 00:00:00',
                'updated_at' => NULL,
                'display_name' => 'الأدوار',
                'parent_id' => NULL,
            ),
            79 =>
            array (
                'id' => 102,
                'name' => 'roles-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'رؤية الأدوار',
                'parent_id' => 101,
            ),
            80 =>
            array (
                'id' => 103,
                'name' => 'roles-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'اضافة وتعديل دور',
                'parent_id' => 101,
            ),
            81 =>
            array (
                'id' => 104,
                'name' => 'roles-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'حذف الأدوار',
                'parent_id' => 101,
            ),
//            82 =>
//                array (
//                    'id' => 105,
//                    'name' => 'constants',
//                    'guard_name' => 'admin',
//                    'created_at' => '2021-12-15 00:00:00',
//                    'updated_at' => NULL,
//                    'display_name' => 'الثوابت',
//                    'parent_id' => NULL,
//                ),
//            83 =>
//                array (
//                    'id' => 106,
//                    'name' => 'constants-view',
//                    'guard_name' => 'admin',
//                    'created_at' => '2021-12-15 13:47:29',
//                    'updated_at' => '2021-12-15 13:47:29',
//                    'display_name' => 'رؤية الثوابت',
//                    'parent_id' => 105,
//                ),
//            84 =>
//                array (
//                    'id' => 107,
//                    'name' => 'constants-store',
//                    'guard_name' => 'admin',
//                    'created_at' => '2021-12-15 13:47:29',
//                    'updated_at' => '2021-12-15 13:47:29',
//                    'display_name' => 'اضافة وتعديل الثوابت',
//                    'parent_id' => 105,
//                ),
//            85 =>
//                array (
//                    'id' => 108,
//                    'name' => 'constants-delete',
//                    'guard_name' => 'admin',
//                    'created_at' => '2021-12-15 13:47:29',
//                    'updated_at' => '2021-12-15 13:47:29',
//                    'display_name' => 'حذف الثوابت',
//                    'parent_id' => 105,
//                ),
            86 =>
                array (
                    'id' => 109,
                    'name' => 'groups',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'المجموعـات',
                    'parent_id' => NULL,
                ),
            87 =>
                array (
                    'id' => 110,
                    'name' => 'groups-view',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'عرض المجموعـات',
                    'parent_id' => 109,
                ),
            88 =>
                array (
                    'id' => 111,
                    'name' => 'faqs',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 00:00:00',
                    'updated_at' => NULL,
                    'display_name' => 'الأسئلة الشائعة',
                    'parent_id' => NULL,
                ),
            89 =>
                array (
                    'id' => 112,
                    'name' => 'faqs-view',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'رؤية الأسئلة الشائعة',
                    'parent_id' => 111,
                ),
            90 =>
                array (
                    'id' => 113,
                    'name' => 'faqs-store',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'اضافة وتعديل الأسئلة الشائعة',
                    'parent_id' => 111,
                ),
            91 =>
                array (
                    'id' => 114,
                    'name' => 'faqs-delete',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'حذف الأسئلة الشائعة',
                    'parent_id' => 111,
                ),
            92 =>
                array (
                    'id' => 115,
                    'name' => 'faqs-status',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'حالة الأسئلة الشائعة',
                    'parent_id' => 111,
                ),
            93 => array(
                'id' => 116,
                'name' => 'user_subscriptions-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'اشتراكات المستخدمين',
                'parent_id' => NULL,
            ),
             94 =>
                array (
                    'id' => 117,
                    'name' => 'features',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 00:00:00',
                    'updated_at' => NULL,
                    'display_name' => 'مميزات الموقع',
                    'parent_id' => NULL,
                ),
            95 =>
                array (
                    'id' => 118,
                    'name' => 'features-view',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'رؤية المميزات',
                    'parent_id' => 117,
                ),
            96 =>
                array (
                    'id' => 119,
                    'name' => 'features-store',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'اضافة وتعديل المميزات',
                    'parent_id' => 117,
                ),
            97 =>
                array (
                    'id' => 120,
                    'name' => 'features-delete',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'حذف المميزات',
                    'parent_id' => 117,
                ),
            98 =>
                array (
                    'id' => 121,
                    'name' => 'features-status',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'حالة المميزات',
                    'parent_id' => 117,
                ),
            99 =>
                array (
                    'id' => 122,
                    'name' => 'services',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 00:00:00',
                    'updated_at' => NULL,
                    'display_name' => ' الخدمات',
                    'parent_id' => NULL,
                ),
            100 =>
                array (
                    'id' => 123,
                    'name' => 'services-view',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'رؤية الخدمات',
                    'parent_id' => 122,
                ),
            101 =>
                array (
                    'id' => 124,
                    'name' => 'services-store',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'اضافة وتعديل الخدمات',
                    'parent_id' => 122,
                ),
            102 =>
                array (
                    'id' => 125,
                    'name' => 'services-delete',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'حذف الخدمات',
                    'parent_id' => 122,
                ),
            103 =>
                array (
                    'id' => 126,
                    'name' => 'services-status',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'حالة الخدمات',
                    'parent_id' => 122,
                ),

            104 =>
                array (
                    'id' => 127,
                    'name' => 'notifications',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 00:00:00',
                    'updated_at' => NULL,
                    'display_name' => ' الاشعارات',
                    'parent_id' => NULL,
                ),
            105 =>
                array (
                    'id' => 128,
                    'name' => 'notifications-view',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'رؤية الاشعارات',
                    'parent_id' => 127,
                ),
            106 =>
                array (
                    'id' => 129,
                    'name' => 'notifications-send',
                    'guard_name' => 'admin',
                    'created_at' => '2021-12-15 13:47:29',
                    'updated_at' => '2021-12-15 13:47:29',
                    'display_name' => 'ارسال الاشعارات',
                    'parent_id' => 127,
                ),
        ));


    }
}
