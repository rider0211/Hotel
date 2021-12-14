<?php

Route::view('/', 'welcome');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', '2fa', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');
    Route::post('users/ckmedia', 'UsersController@storeCKEditorImages')->name('users.storeCKEditorImages');
    Route::post('users/parse-csv-import', 'UsersController@parseCsvImport')->name('users.parseCsvImport');
    Route::post('users/process-csv-import', 'UsersController@processCsvImport')->name('users.processCsvImport');
    Route::resource('users', 'UsersController');

    // Job Events
    Route::delete('job-events/destroy', 'JobEventsController@massDestroy')->name('job-events.massDestroy');
    Route::post('job-events/media', 'JobEventsController@storeMedia')->name('job-events.storeMedia');
    Route::post('job-events/ckmedia', 'JobEventsController@storeCKEditorImages')->name('job-events.storeCKEditorImages');
    Route::post('job-events/parse-csv-import', 'JobEventsController@parseCsvImport')->name('job-events.parseCsvImport');
    Route::post('job-events/process-csv-import', 'JobEventsController@processCsvImport')->name('job-events.processCsvImport');
    Route::resource('job-events', 'JobEventsController');

    // Customer Status
    Route::delete('customer-statuses/destroy', 'CustomerStatusController@massDestroy')->name('customer-statuses.massDestroy');
    Route::post('customer-statuses/parse-csv-import', 'CustomerStatusController@parseCsvImport')->name('customer-statuses.parseCsvImport');
    Route::post('customer-statuses/process-csv-import', 'CustomerStatusController@processCsvImport')->name('customer-statuses.processCsvImport');
    Route::resource('customer-statuses', 'CustomerStatusController');

    // Leads
    Route::delete('leads/destroy', 'LeadsController@massDestroy')->name('leads.massDestroy');
    Route::post('leads/parse-csv-import', 'LeadsController@parseCsvImport')->name('leads.parseCsvImport');
    Route::post('leads/process-csv-import', 'LeadsController@processCsvImport')->name('leads.processCsvImport');
    Route::resource('leads', 'LeadsController');

    // Leads Source
    Route::delete('leads-sources/destroy', 'LeadsSourceController@massDestroy')->name('leads-sources.massDestroy');
    Route::post('leads-sources/parse-csv-import', 'LeadsSourceController@parseCsvImport')->name('leads-sources.parseCsvImport');
    Route::post('leads-sources/process-csv-import', 'LeadsSourceController@processCsvImport')->name('leads-sources.processCsvImport');
    Route::resource('leads-sources', 'LeadsSourceController');

    // Jobs
    Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    Route::resource('jobs', 'JobsController');

    // Job Files
    Route::delete('job-files/destroy', 'JobFilesController@massDestroy')->name('job-files.massDestroy');
    Route::post('job-files/media', 'JobFilesController@storeMedia')->name('job-files.storeMedia');
    Route::post('job-files/ckmedia', 'JobFilesController@storeCKEditorImages')->name('job-files.storeCKEditorImages');
    Route::resource('job-files', 'JobFilesController');

    // Job Note
    Route::delete('job-notes/destroy', 'JobNoteController@massDestroy')->name('job-notes.massDestroy');
    Route::post('job-notes/media', 'JobNoteController@storeMedia')->name('job-notes.storeMedia');
    Route::post('job-notes/ckmedia', 'JobNoteController@storeCKEditorImages')->name('job-notes.storeCKEditorImages');
    Route::resource('job-notes', 'JobNoteController');

    // Crews
    Route::delete('crews/destroy', 'CrewsController@massDestroy')->name('crews.massDestroy');
    Route::resource('crews', 'CrewsController');

    // Work Orders
    Route::delete('work-orders/destroy', 'WorkOrdersController@massDestroy')->name('work-orders.massDestroy');
    Route::post('work-orders/parse-csv-import', 'WorkOrdersController@parseCsvImport')->name('work-orders.parseCsvImport');
    Route::post('work-orders/process-csv-import', 'WorkOrdersController@processCsvImport')->name('work-orders.processCsvImport');
    Route::resource('work-orders', 'WorkOrdersController');

    // Parts Order
    Route::delete('parts-orders/destroy', 'PartsOrderController@massDestroy')->name('parts-orders.massDestroy');
    Route::resource('parts-orders', 'PartsOrderController');

    // Lead Files
    Route::delete('lead-files/destroy', 'LeadFilesController@massDestroy')->name('lead-files.massDestroy');
    Route::post('lead-files/media', 'LeadFilesController@storeMedia')->name('lead-files.storeMedia');
    Route::post('lead-files/ckmedia', 'LeadFilesController@storeCKEditorImages')->name('lead-files.storeCKEditorImages');
    Route::post('lead-files/parse-csv-import', 'LeadFilesController@parseCsvImport')->name('lead-files.parseCsvImport');
    Route::post('lead-files/process-csv-import', 'LeadFilesController@processCsvImport')->name('lead-files.processCsvImport');
    Route::resource('lead-files', 'LeadFilesController');

    // Lead Note
    Route::delete('lead-notes/destroy', 'LeadNoteController@massDestroy')->name('lead-notes.massDestroy');
    Route::post('lead-notes/media', 'LeadNoteController@storeMedia')->name('lead-notes.storeMedia');
    Route::post('lead-notes/ckmedia', 'LeadNoteController@storeCKEditorImages')->name('lead-notes.storeCKEditorImages');
    Route::post('lead-notes/parse-csv-import', 'LeadNoteController@parseCsvImport')->name('lead-notes.parseCsvImport');
    Route::post('lead-notes/process-csv-import', 'LeadNoteController@processCsvImport')->name('lead-notes.processCsvImport');
    Route::resource('lead-notes', 'LeadNoteController');

    // Payments
    Route::delete('payments/destroy', 'PaymentsController@massDestroy')->name('payments.massDestroy');
    Route::resource('payments', 'PaymentsController');

    // Contracts
    Route::delete('contracts/destroy', 'ContractsController@massDestroy')->name('contracts.massDestroy');
    Route::resource('contracts', 'ContractsController');

    // Change Order
    Route::delete('change-orders/destroy', 'ChangeOrderController@massDestroy')->name('change-orders.massDestroy');
    Route::post('change-orders/media', 'ChangeOrderController@storeMedia')->name('change-orders.storeMedia');
    Route::post('change-orders/ckmedia', 'ChangeOrderController@storeCKEditorImages')->name('change-orders.storeCKEditorImages');
    Route::resource('change-orders', 'ChangeOrderController');

    // Receiving
    Route::delete('receivings/destroy', 'ReceivingController@massDestroy')->name('receivings.massDestroy');
    Route::resource('receivings', 'ReceivingController');

    // Activity
    Route::delete('activities/destroy', 'ActivityController@massDestroy')->name('activities.massDestroy');
    Route::post('activities/media', 'ActivityController@storeMedia')->name('activities.storeMedia');
    Route::post('activities/ckmedia', 'ActivityController@storeCKEditorImages')->name('activities.storeCKEditorImages');
    Route::post('activities/parse-csv-import', 'ActivityController@parseCsvImport')->name('activities.parseCsvImport');
    Route::post('activities/process-csv-import', 'ActivityController@processCsvImport')->name('activities.processCsvImport');
    Route::resource('activities', 'ActivityController');

    // Activity Reference
    Route::delete('activity-references/destroy', 'ActivityReferenceController@massDestroy')->name('activity-references.massDestroy');
    Route::post('activity-references/media', 'ActivityReferenceController@storeMedia')->name('activity-references.storeMedia');
    Route::post('activity-references/ckmedia', 'ActivityReferenceController@storeCKEditorImages')->name('activity-references.storeCKEditorImages');
    Route::resource('activity-references', 'ActivityReferenceController');

    // Activity Result
    Route::delete('activity-results/destroy', 'ActivityResultController@massDestroy')->name('activity-results.massDestroy');
    Route::resource('activity-results', 'ActivityResultController');

    // Activity Type
    Route::delete('activity-types/destroy', 'ActivityTypeController@massDestroy')->name('activity-types.massDestroy');
    Route::post('activity-types/parse-csv-import', 'ActivityTypeController@parseCsvImport')->name('activity-types.parseCsvImport');
    Route::post('activity-types/process-csv-import', 'ActivityTypeController@processCsvImport')->name('activity-types.processCsvImport');
    Route::resource('activity-types', 'ActivityTypeController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Asset Category
    Route::delete('asset-categories/destroy', 'AssetCategoryController@massDestroy')->name('asset-categories.massDestroy');
    Route::resource('asset-categories', 'AssetCategoryController');

    // Asset Location
    Route::delete('asset-locations/destroy', 'AssetLocationController@massDestroy')->name('asset-locations.massDestroy');
    Route::resource('asset-locations', 'AssetLocationController');

    // Asset Status
    Route::delete('asset-statuses/destroy', 'AssetStatusController@massDestroy')->name('asset-statuses.massDestroy');
    Route::resource('asset-statuses', 'AssetStatusController');

    // Asset
    Route::delete('assets/destroy', 'AssetController@massDestroy')->name('assets.massDestroy');
    Route::post('assets/media', 'AssetController@storeMedia')->name('assets.storeMedia');
    Route::post('assets/ckmedia', 'AssetController@storeCKEditorImages')->name('assets.storeCKEditorImages');
    Route::resource('assets', 'AssetController');

    // Assets History
    Route::resource('assets-histories', 'AssetsHistoryController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Contact Company
    Route::delete('contact-companies/destroy', 'ContactCompanyController@massDestroy')->name('contact-companies.massDestroy');
    Route::post('contact-companies/parse-csv-import', 'ContactCompanyController@parseCsvImport')->name('contact-companies.parseCsvImport');
    Route::post('contact-companies/process-csv-import', 'ContactCompanyController@processCsvImport')->name('contact-companies.processCsvImport');
    Route::resource('contact-companies', 'ContactCompanyController');

    // Contact Contacts
    Route::delete('contact-contacts/destroy', 'ContactContactsController@massDestroy')->name('contact-contacts.massDestroy');
    Route::resource('contact-contacts', 'ContactContactsController');

    // Faq Category
    Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');

    // Faq Question
    Route::delete('faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    Route::resource('faq-questions', 'FaqQuestionController');

    // Vendor Links
    Route::delete('vendor-links/destroy', 'VendorLinksController@massDestroy')->name('vendor-links.massDestroy');
    Route::post('vendor-links/parse-csv-import', 'VendorLinksController@parseCsvImport')->name('vendor-links.parseCsvImport');
    Route::post('vendor-links/process-csv-import', 'VendorLinksController@processCsvImport')->name('vendor-links.processCsvImport');
    Route::resource('vendor-links', 'VendorLinksController');

    // Vendor Files
    Route::delete('vendor-files/destroy', 'VendorFilesController@massDestroy')->name('vendor-files.massDestroy');
    Route::post('vendor-files/media', 'VendorFilesController@storeMedia')->name('vendor-files.storeMedia');
    Route::post('vendor-files/ckmedia', 'VendorFilesController@storeCKEditorImages')->name('vendor-files.storeCKEditorImages');
    Route::post('vendor-files/parse-csv-import', 'VendorFilesController@parseCsvImport')->name('vendor-files.parseCsvImport');
    Route::post('vendor-files/process-csv-import', 'VendorFilesController@processCsvImport')->name('vendor-files.processCsvImport');
    Route::resource('vendor-files', 'VendorFilesController');

    // Appointments
    Route::delete('appointments/destroy', 'AppointmentsController@massDestroy')->name('appointments.massDestroy');
    Route::post('appointments/parse-csv-import', 'AppointmentsController@parseCsvImport')->name('appointments.parseCsvImport');
    Route::post('appointments/process-csv-import', 'AppointmentsController@processCsvImport')->name('appointments.processCsvImport');
    Route::resource('appointments', 'AppointmentsController');

    // Lead Status
    Route::delete('lead-statuses/destroy', 'LeadStatusController@massDestroy')->name('lead-statuses.massDestroy');
    Route::post('lead-statuses/parse-csv-import', 'LeadStatusController@parseCsvImport')->name('lead-statuses.parseCsvImport');
    Route::post('lead-statuses/process-csv-import', 'LeadStatusController@processCsvImport')->name('lead-statuses.processCsvImport');
    Route::resource('lead-statuses', 'LeadStatusController');

    // Lead Status Manager
    Route::delete('lead-status-managers/destroy', 'LeadStatusManagerController@massDestroy')->name('lead-status-managers.massDestroy');
    Route::post('lead-status-managers/parse-csv-import', 'LeadStatusManagerController@parseCsvImport')->name('lead-status-managers.parseCsvImport');
    Route::post('lead-status-managers/process-csv-import', 'LeadStatusManagerController@processCsvImport')->name('lead-status-managers.processCsvImport');
    Route::resource('lead-status-managers', 'LeadStatusManagerController');

    // Phones
    Route::delete('phones/destroy', 'PhonesController@massDestroy')->name('phones.massDestroy');
    Route::post('phones/parse-csv-import', 'PhonesController@parseCsvImport')->name('phones.parseCsvImport');
    Route::post('phones/process-csv-import', 'PhonesController@processCsvImport')->name('phones.processCsvImport');
    Route::resource('phones', 'PhonesController');

    // Estimates
    Route::delete('estimates/destroy', 'EstimatesController@massDestroy')->name('estimates.massDestroy');
    Route::post('estimates/media', 'EstimatesController@storeMedia')->name('estimates.storeMedia');
    Route::post('estimates/ckmedia', 'EstimatesController@storeCKEditorImages')->name('estimates.storeCKEditorImages');
    Route::post('estimates/parse-csv-import', 'EstimatesController@parseCsvImport')->name('estimates.parseCsvImport');
    Route::post('estimates/process-csv-import', 'EstimatesController@processCsvImport')->name('estimates.processCsvImport');
    Route::resource('estimates', 'EstimatesController');

    // Estimate Items
    Route::delete('estimate-items/destroy', 'EstimateItemsController@massDestroy')->name('estimate-items.massDestroy');
    Route::post('estimate-items/parse-csv-import', 'EstimateItemsController@parseCsvImport')->name('estimate-items.parseCsvImport');
    Route::post('estimate-items/process-csv-import', 'EstimateItemsController@processCsvImport')->name('estimate-items.processCsvImport');
    Route::resource('estimate-items', 'EstimateItemsController');

    // Customer Contacts
    Route::delete('customer-contacts/destroy', 'CustomerContactsController@massDestroy')->name('customer-contacts.massDestroy');
    Route::post('customer-contacts/parse-csv-import', 'CustomerContactsController@parseCsvImport')->name('customer-contacts.parseCsvImport');
    Route::post('customer-contacts/process-csv-import', 'CustomerContactsController@processCsvImport')->name('customer-contacts.processCsvImport');
    Route::resource('customer-contacts', 'CustomerContactsController');

    // Product Category
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');
    Route::resource('product-categories', 'ProductCategoryController');

    // Product Tag
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::resource('product-tags', 'ProductTagController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth', '2fa']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
        Route::post('profile/two-factor', 'ChangePasswordController@toggleTwoFactor')->name('password.toggleTwoFactor');
    }
});
Route::group(['as' => 'frontend.', 'namespace' => 'Frontend', 'middleware' => ['auth', '2fa']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');
    Route::post('users/ckmedia', 'UsersController@storeCKEditorImages')->name('users.storeCKEditorImages');
    Route::resource('users', 'UsersController');

    // Job Events
    Route::delete('job-events/destroy', 'JobEventsController@massDestroy')->name('job-events.massDestroy');
    Route::post('job-events/media', 'JobEventsController@storeMedia')->name('job-events.storeMedia');
    Route::post('job-events/ckmedia', 'JobEventsController@storeCKEditorImages')->name('job-events.storeCKEditorImages');
    Route::resource('job-events', 'JobEventsController');

    // Customer Status
    Route::delete('customer-statuses/destroy', 'CustomerStatusController@massDestroy')->name('customer-statuses.massDestroy');
    Route::resource('customer-statuses', 'CustomerStatusController');

    // Leads
    Route::delete('leads/destroy', 'LeadsController@massDestroy')->name('leads.massDestroy');
    Route::resource('leads', 'LeadsController');

    // Leads Source
    Route::delete('leads-sources/destroy', 'LeadsSourceController@massDestroy')->name('leads-sources.massDestroy');
    Route::resource('leads-sources', 'LeadsSourceController');

    // Jobs
    Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    Route::resource('jobs', 'JobsController');

    // Job Files
    Route::delete('job-files/destroy', 'JobFilesController@massDestroy')->name('job-files.massDestroy');
    Route::post('job-files/media', 'JobFilesController@storeMedia')->name('job-files.storeMedia');
    Route::post('job-files/ckmedia', 'JobFilesController@storeCKEditorImages')->name('job-files.storeCKEditorImages');
    Route::resource('job-files', 'JobFilesController');

    // Job Note
    Route::delete('job-notes/destroy', 'JobNoteController@massDestroy')->name('job-notes.massDestroy');
    Route::post('job-notes/media', 'JobNoteController@storeMedia')->name('job-notes.storeMedia');
    Route::post('job-notes/ckmedia', 'JobNoteController@storeCKEditorImages')->name('job-notes.storeCKEditorImages');
    Route::resource('job-notes', 'JobNoteController');

    // Crews
    Route::delete('crews/destroy', 'CrewsController@massDestroy')->name('crews.massDestroy');
    Route::resource('crews', 'CrewsController');

    // Work Orders
    Route::delete('work-orders/destroy', 'WorkOrdersController@massDestroy')->name('work-orders.massDestroy');
    Route::resource('work-orders', 'WorkOrdersController');

    // Parts Order
    Route::delete('parts-orders/destroy', 'PartsOrderController@massDestroy')->name('parts-orders.massDestroy');
    Route::resource('parts-orders', 'PartsOrderController');

    // Lead Files
    Route::delete('lead-files/destroy', 'LeadFilesController@massDestroy')->name('lead-files.massDestroy');
    Route::post('lead-files/media', 'LeadFilesController@storeMedia')->name('lead-files.storeMedia');
    Route::post('lead-files/ckmedia', 'LeadFilesController@storeCKEditorImages')->name('lead-files.storeCKEditorImages');
    Route::resource('lead-files', 'LeadFilesController');

    // Lead Note
    Route::delete('lead-notes/destroy', 'LeadNoteController@massDestroy')->name('lead-notes.massDestroy');
    Route::post('lead-notes/media', 'LeadNoteController@storeMedia')->name('lead-notes.storeMedia');
    Route::post('lead-notes/ckmedia', 'LeadNoteController@storeCKEditorImages')->name('lead-notes.storeCKEditorImages');
    Route::resource('lead-notes', 'LeadNoteController');

    // Payments
    Route::delete('payments/destroy', 'PaymentsController@massDestroy')->name('payments.massDestroy');
    Route::resource('payments', 'PaymentsController');

    // Contracts
    Route::delete('contracts/destroy', 'ContractsController@massDestroy')->name('contracts.massDestroy');
    Route::resource('contracts', 'ContractsController');

    // Change Order
    Route::delete('change-orders/destroy', 'ChangeOrderController@massDestroy')->name('change-orders.massDestroy');
    Route::post('change-orders/media', 'ChangeOrderController@storeMedia')->name('change-orders.storeMedia');
    Route::post('change-orders/ckmedia', 'ChangeOrderController@storeCKEditorImages')->name('change-orders.storeCKEditorImages');
    Route::resource('change-orders', 'ChangeOrderController');

    // Receiving
    Route::delete('receivings/destroy', 'ReceivingController@massDestroy')->name('receivings.massDestroy');
    Route::resource('receivings', 'ReceivingController');

    // Activity
    Route::delete('activities/destroy', 'ActivityController@massDestroy')->name('activities.massDestroy');
    Route::post('activities/media', 'ActivityController@storeMedia')->name('activities.storeMedia');
    Route::post('activities/ckmedia', 'ActivityController@storeCKEditorImages')->name('activities.storeCKEditorImages');
    Route::resource('activities', 'ActivityController');

    // Activity Reference
    Route::delete('activity-references/destroy', 'ActivityReferenceController@massDestroy')->name('activity-references.massDestroy');
    Route::post('activity-references/media', 'ActivityReferenceController@storeMedia')->name('activity-references.storeMedia');
    Route::post('activity-references/ckmedia', 'ActivityReferenceController@storeCKEditorImages')->name('activity-references.storeCKEditorImages');
    Route::resource('activity-references', 'ActivityReferenceController');

    // Activity Result
    Route::delete('activity-results/destroy', 'ActivityResultController@massDestroy')->name('activity-results.massDestroy');
    Route::resource('activity-results', 'ActivityResultController');

    // Activity Type
    Route::delete('activity-types/destroy', 'ActivityTypeController@massDestroy')->name('activity-types.massDestroy');
    Route::resource('activity-types', 'ActivityTypeController');

    // Asset Category
    Route::delete('asset-categories/destroy', 'AssetCategoryController@massDestroy')->name('asset-categories.massDestroy');
    Route::resource('asset-categories', 'AssetCategoryController');

    // Asset Location
    Route::delete('asset-locations/destroy', 'AssetLocationController@massDestroy')->name('asset-locations.massDestroy');
    Route::resource('asset-locations', 'AssetLocationController');

    // Asset Status
    Route::delete('asset-statuses/destroy', 'AssetStatusController@massDestroy')->name('asset-statuses.massDestroy');
    Route::resource('asset-statuses', 'AssetStatusController');

    // Asset
    Route::delete('assets/destroy', 'AssetController@massDestroy')->name('assets.massDestroy');
    Route::post('assets/media', 'AssetController@storeMedia')->name('assets.storeMedia');
    Route::post('assets/ckmedia', 'AssetController@storeCKEditorImages')->name('assets.storeCKEditorImages');
    Route::resource('assets', 'AssetController');

    // Assets History
    Route::resource('assets-histories', 'AssetsHistoryController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Contact Company
    Route::delete('contact-companies/destroy', 'ContactCompanyController@massDestroy')->name('contact-companies.massDestroy');
    Route::resource('contact-companies', 'ContactCompanyController');

    // Contact Contacts
    Route::delete('contact-contacts/destroy', 'ContactContactsController@massDestroy')->name('contact-contacts.massDestroy');
    Route::resource('contact-contacts', 'ContactContactsController');

    // Faq Category
    Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');

    // Faq Question
    Route::delete('faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    Route::resource('faq-questions', 'FaqQuestionController');

    // Vendor Links
    Route::delete('vendor-links/destroy', 'VendorLinksController@massDestroy')->name('vendor-links.massDestroy');
    Route::resource('vendor-links', 'VendorLinksController');

    // Vendor Files
    Route::delete('vendor-files/destroy', 'VendorFilesController@massDestroy')->name('vendor-files.massDestroy');
    Route::post('vendor-files/media', 'VendorFilesController@storeMedia')->name('vendor-files.storeMedia');
    Route::post('vendor-files/ckmedia', 'VendorFilesController@storeCKEditorImages')->name('vendor-files.storeCKEditorImages');
    Route::resource('vendor-files', 'VendorFilesController');

    // Appointments
    Route::delete('appointments/destroy', 'AppointmentsController@massDestroy')->name('appointments.massDestroy');
    Route::resource('appointments', 'AppointmentsController');

    // Lead Status
    Route::delete('lead-statuses/destroy', 'LeadStatusController@massDestroy')->name('lead-statuses.massDestroy');
    Route::resource('lead-statuses', 'LeadStatusController');

    // Lead Status Manager
    Route::delete('lead-status-managers/destroy', 'LeadStatusManagerController@massDestroy')->name('lead-status-managers.massDestroy');
    Route::resource('lead-status-managers', 'LeadStatusManagerController');

    // Phones
    Route::delete('phones/destroy', 'PhonesController@massDestroy')->name('phones.massDestroy');
    Route::resource('phones', 'PhonesController');

    // Estimates
    Route::delete('estimates/destroy', 'EstimatesController@massDestroy')->name('estimates.massDestroy');
    Route::post('estimates/media', 'EstimatesController@storeMedia')->name('estimates.storeMedia');
    Route::post('estimates/ckmedia', 'EstimatesController@storeCKEditorImages')->name('estimates.storeCKEditorImages');
    Route::resource('estimates', 'EstimatesController');

    // Estimate Items
    Route::delete('estimate-items/destroy', 'EstimateItemsController@massDestroy')->name('estimate-items.massDestroy');
    Route::resource('estimate-items', 'EstimateItemsController');

    // Customer Contacts
    Route::delete('customer-contacts/destroy', 'CustomerContactsController@massDestroy')->name('customer-contacts.massDestroy');
    Route::resource('customer-contacts', 'CustomerContactsController');

    // Product Category
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');
    Route::resource('product-categories', 'ProductCategoryController');

    // Product Tag
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::resource('product-tags', 'ProductTagController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController');

    Route::get('frontend/profile', 'ProfileController@index')->name('profile.index');
    Route::post('frontend/profile', 'ProfileController@update')->name('profile.update');
    Route::post('frontend/profile/destroy', 'ProfileController@destroy')->name('profile.destroy');
    Route::post('frontend/profile/password', 'ProfileController@password')->name('profile.password');
    Route::post('profile/toggle-two-factor', 'ProfileController@toggleTwoFactor')->name('profile.toggle-two-factor');
});
Route::group(['namespace' => 'Auth', 'middleware' => ['auth', '2fa']], function () {
    // Two Factor Authentication
    if (file_exists(app_path('Http/Controllers/Auth/TwoFactorController.php'))) {
        Route::get('two-factor', 'TwoFactorController@show')->name('twoFactor.show');
        Route::post('two-factor', 'TwoFactorController@check')->name('twoFactor.check');
        Route::get('two-factor/resend', 'TwoFactorController@resend')->name('twoFactor.resend');
    }
});
