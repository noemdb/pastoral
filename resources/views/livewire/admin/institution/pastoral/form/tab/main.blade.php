<ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab" role="tablist">
    <li class="nav-item flex-auto" role="presentation">
        <a href="#tabs-general" class="active dark:bg-gray-800 bg-gray-50 text-center nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent dark:bg-gray-800" id="tabs-general-tab" data-bs-toggle="pill" data-bs-target="#tabs-general" role="tab" aria-controls="tabs-general" aria-selected="true">
            General
        </a>
    </li>
    <li class="nav-item flex-auto" role="presentation">
        <a href="#tabs-details" class="dark:bg-gray-800 bg-gray-50 text-center nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent dark:bg-gray-800" id="tabs-details-tab" data-bs-toggle="pill" data-bs-target="#tabs-details" role="tab" aria-controls="tabs-details" aria-selected="false">
            Detalles
        </a>
    </li>
    <li class="nav-item flex-auto" role="presentation">
        <a href="#tabs-codehtml" class="dark:bg-gray-800 bg-gray-50 text-center nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent dark:bg-gray-800" id="tabs-codehtml-tab" data-bs-toggle="pill" data-bs-target="#tabs-codehtml" role="tab" aria-controls="tabs-codehtml" aria-selected="false">
            HTML
        </a>
    </li>
</ul>
<div class="tab-content" id="tabs-tabContent">
    <div class="tab-pane fade show active" id="tabs-general" role="tabpanel" aria-labelledby="tabs-general-tab">
        @include('livewire.admin.institution.pastoral.form.tab.fields.general')
    </div>
    <div class="tab-pane fade" id="tabs-details" role="tabpanel" aria-labelledby="tabs-details-tab">
        @include('livewire.admin.institution.pastoral.form.tab.fields.details')
    </div>
    <div class="tab-pane fade" id="tabs-codehtml" role="tabpanel" aria-labelledby="tabs-details-tab">
        @include('livewire.admin.institution.pastoral.form.tab.fields.codehtml')
    </div>
</div>
