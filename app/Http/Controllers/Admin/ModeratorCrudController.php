<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ModeratorCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        CRUD::setModel(User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/moderator');
        CRUD::setEntityNameStrings('مشرف', 'المشرفين');

        // ✅ فلترة تلقائية: فقط المستخدمين اللي role = 1
        CRUD::addClause('where', 'role', 1);
    }

    protected function setupListOperation()
    {
        CRUD::addColumn(['name' => 'name', 'label' => 'الاسم']);
        CRUD::addColumn(['name' => 'email', 'label' => 'البريد الإلكتروني']);
        CRUD::addColumn(['name' => 'phone_number', 'label' => 'الهاتف']);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserRequest::class);

        CRUD::addField(['name' => 'name', 'label' => 'الاسم', 'type' => 'text']);
        CRUD::addField(['name' => 'email', 'label' => 'الإيميل', 'type' => 'email']);
        CRUD::addField(['name' => 'phone_number', 'label' => 'الهاتف', 'type' => 'text']);
        CRUD::addField(['name' => 'password', 'label' => 'كلمة المرور', 'type' => 'password']);

        // ✅ نجبر الدور إنه يكون دائمًا 1
        CRUD::addField([
            'name' => 'role',
            'type' => 'hidden',
            'value' => 1,
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
