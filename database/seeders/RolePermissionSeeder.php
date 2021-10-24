<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuperAdmin = Role::where('name','superAdmin')->first();
        $roleAdmin = Role::create(['name'=>'admin']);
        $roleUser = Role::create(['name'=>'user']);

        // Permission List as array
        $permissions = [

            //Dashboard Permissions
            [
                'group_name' =>'dashboard',
                'permissions' => [
                    'admin.dashboard',
                ]
            ],


            // Role Permissions
            [
                'group_name' =>'roles',
                'permissions' => [
                    'roles.index',
                    'roles.create',
                    'roles.edit',
                    'roles.destroy',
                ]
            ],

            // User Permissions
            // here user is admin
            [
                'group_name' =>'users',
                'permissions' => [
                    'users.index',
                    'users.create',
                    'users.show',
                    'users.edit',
                    'users.destroy',
                    'users.guest',
                ]
            ],

            // Profile Permissions
            [
                'group_name' =>'profile',
                'permissions' => [
                    'profile.index',
                    'profile.edit',
                ]
            ],

            // Quiz Category Permissions
            [
                'group_name' =>'quizCategory',
                'permissions' => [
                    'quizCategory.index',
                    'quizCategory.create',
                    'quizCategory.edit',
                    'quizCategory.destroy',
                ]
            ],

            // Question Permissions
            [
                'group_name' =>'question',
                'permissions' => [
                    'question.index',
                    'question.create',
                    'question.edit',
                    'question.destroy',
                    'question.pendding.active',
                ]
            ],

            // Course Permissions
            [
                'group_name' =>'Course',
                'permissions' => [
                    'admin.course',
                    'admin.course.create',
                    'admin.course.edit',
                    'admin.course.delete',
                    'admin.course.category',
                    'admin.course.category.delete',
                ]
            ],

            // News Permissions
            [
                'group_name' =>'News',
                'permissions' => [
                    'admin.news',
                    'admin.news.create',
                    'admin.news.edit',
                    'admin.news.delete',
                    'admin.news.tag',
                    'admin.news.tag.delete'
                ]
            ],

            // Admission Permissions
            [
                'group_name' =>'Admission',
                'permissions' => [
                    'admin.admission',
                    'admin.admission.create',
                    'admin.admission.edit',
                    'admin.admission.delete',
                    'admin.admission.subject',
                    'admin.admission.subject.delete'
                ]
            ],

            // Teacher Permissions
            [
                'group_name' =>'Teacher',
                'permissions' => [
                    'admin.teacher',
                    'admin.teacher.create',
                    'admin.teacher.edit',
                    'admin.teacher.delete',
                ]
            ],

            // STEM Permissions
            [
                'group_name' =>'STEM',
                'permissions' => [
                    'admin.stem',
                    'admin.stem.create',
                    'admin.stem.edit',
                    'admin.stem.delete',
                    'admin.stem.subject',
                    'admin.stem.subject.delete'
                ]
            ],

            // Testimonial Permissions
            [
                'group_name' =>'Testimonial',
                'permissions' => [
                    'admin.testimonial',
                    'admin.testimonial.delete',
                ]
            ],

        ];

        // Assign and Create Permissions
        // Permission::create(['name' => 'dashboard.index']);

        for($i=0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];

            for($p=0; $p < count($permissions[$i]['permissions']); $p++) {

                // Create Permissions
               $permission = Permission::create(['name' => $permissions[$i]['permissions'][$p], 'group_name' => $permissionGroup ]);
               $roleSuperAdmin->givePermissionTo($permission);
               $permission->assignRole($roleSuperAdmin);
            }
        }
    }
}
