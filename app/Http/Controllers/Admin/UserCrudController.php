<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('مستخدم', 'مستخدمين');
    }

    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name'  => 'name',
            'label' => 'الاسم',
        ]);

        CRUD::addColumn([
            'name'  => 'email',
            'label' => 'البريد الإلكتروني',
        ]);

        CRUD::addColumn([
            'name'  => 'phone_number',
            'label' => 'رقم الجوال',
        ]);

        CRUD::addColumn([
            'name'  => 'current_job',
            'label' => 'الوظيفة الحالية',
        ]);

        CRUD::addColumn([
            'name'  => 'address',
            'label' => 'العنوان',
        ]);

        CRUD::addColumn([
            'name'  => 'order',
            'label' => 'رقم الطلب',
        ]);

        CRUD::addColumn([
            'name'  => 'parent_id',
            'label' => 'الـ Parent ID',
        ]);

        CRUD::addColumn([
            'name' => 'role',
            'label' => 'الدور',
            'type' => 'select_from_array',
            'options' => [
                0 => 'مستخدم عادي',
                1 => 'طباع',
                2 => 'مدير',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserRequest::class);

        CRUD::addField([
            'name'  => 'name',
            'label' => 'الاسم',
            'type'  => 'text',
        ]);

        CRUD::addField([
            'name'  => 'email',
            'label' => 'البريد الإلكتروني',
            'type'  => 'email',
        ]);

        CRUD::addField([
            'name'  => 'phone_number',
            'label' => 'رقم الهاتف',
            'type'  => 'text',
        ]);

        CRUD::addField([
            'name'  => 'current_job',
            'label' => 'الوظيفة الحالية',
            'type'  => 'text',
        ]);

        CRUD::addField([
            'name'  => 'address',
            'label' => 'العنوان',
            'type'  => 'textarea',
        ]);

        CRUD::addField([
            'name'  => 'password',
            'label' => 'كلمة المرور',
            'type'  => 'password',
        ]);

        CRUD::addField([
            'name' => 'role',
            'label' => 'الدور (Role)',
            'type' => 'select_from_array',
            'options' => [
                0 => 'مستخدم عادي',
                1 => 'مشرف',
                2 => 'مدير',
            ],
            'default' => 0,
            'allows_null' => false,
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation(); // نعيد استخدام نفس الحقول

        // إضافة حقل role أيضًا هنا بشكل صريح إذا حبيت
        CRUD::addField([
            'name' => 'role',
            'label' => 'الدور (Role)',
            'type' => 'select_from_array',
            'options' => [
                0 => 'مستخدم عادي',
                1 => 'مشرف',
                2 => 'مدير',
            ],
            'default' => 0,
            'allows_null' => false,
        ]);
    }

    protected function setupReorderOperation()
    {
        CRUD::set('reorder.label', 'name');
        CRUD::set('reorder.order_field', 'order');
    }
}