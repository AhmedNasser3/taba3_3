{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
@if (auth()->check() && auth()->user()->role == 0)
@elseif(auth()->check() && auth()->user()->role == 1)
    <x-backpack::menu-item title="المستخدمين" icon="la la-question" :link="backpack_url('user')" />
    <x-backpack::menu-item title="الطباعين" icon="la la-question" :link="backpack_url('moderator')" />
    <x-backpack::menu-item title="طلبات الطباعة" icon="la la-question" :link="backpack_url('print-service')" />
@endif
<x-backpack::menu-item title="خدمات الطباعة المعلقة" icon="la la-question" :link="backpack_url('printservicepending')" />
<x-backpack::menu-item title="خدمات الطباعة قيد التنفيذ" icon="la la-question" :link="backpack_url('printserviceinprogress')" />
<x-backpack::menu-item title="خدمات الطباعة التي تمت" icon="la la-question" :link="backpack_url('printservicompleted')" />



