<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li>
                    <select class="searchable-field form-control">

                    </select>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/users*") ? "menu-open" : "" }} {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/audit-logs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.auditLog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('customer_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/customer-contacts*") ? "menu-open" : "" }} {{ request()->is("admin/phones*") ? "menu-open" : "" }} {{ request()->is("admin/customer-statuses*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-user-alt">

                            </i>
                            <p>
                                {{ trans('cruds.customer.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('customer_contact_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.customer-contacts.index") }}" class="nav-link {{ request()->is("admin/customer-contacts") || request()->is("admin/customer-contacts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user-plus">

                                        </i>
                                        <p>
                                            {{ trans('cruds.customerContact.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('phone_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.phones.index") }}" class="nav-link {{ request()->is("admin/phones") || request()->is("admin/phones/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-phone-square">

                                        </i>
                                        <p>
                                            {{ trans('cruds.phone.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('customer_status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.customer-statuses.index") }}" class="nav-link {{ request()->is("admin/customer-statuses") || request()->is("admin/customer-statuses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.customerStatus.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('sale_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/appointments*") ? "menu-open" : "" }} {{ request()->is("admin/leads*") ? "menu-open" : "" }} {{ request()->is("admin/lead-files*") ? "menu-open" : "" }} {{ request()->is("admin/lead-notes*") ? "menu-open" : "" }} {{ request()->is("admin/leads-sources*") ? "menu-open" : "" }} {{ request()->is("admin/lead-statuses*") ? "menu-open" : "" }} {{ request()->is("admin/lead-status-managers*") ? "menu-open" : "" }} {{ request()->is("admin/estimates*") ? "menu-open" : "" }} {{ request()->is("admin/estimate-items*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-filter">

                            </i>
                            <p>
                                {{ trans('cruds.sale.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('appointment_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.appointments.index") }}" class="nav-link {{ request()->is("admin/appointments") || request()->is("admin/appointments/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-calendar-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.appointment.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('lead_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.leads.index") }}" class="nav-link {{ request()->is("admin/leads") || request()->is("admin/leads/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user-plus">

                                        </i>
                                        <p>
                                            {{ trans('cruds.lead.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('lead_file_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.lead-files.index") }}" class="nav-link {{ request()->is("admin/lead-files") || request()->is("admin/lead-files/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-folder-open">

                                        </i>
                                        <p>
                                            {{ trans('cruds.leadFile.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('lead_note_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.lead-notes.index") }}" class="nav-link {{ request()->is("admin/lead-notes") || request()->is("admin/lead-notes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-sticky-note">

                                        </i>
                                        <p>
                                            {{ trans('cruds.leadNote.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('leads_source_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.leads-sources.index") }}" class="nav-link {{ request()->is("admin/leads-sources") || request()->is("admin/leads-sources/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.leadsSource.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('lead_status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.lead-statuses.index") }}" class="nav-link {{ request()->is("admin/lead-statuses") || request()->is("admin/lead-statuses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.leadStatus.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('lead_status_manager_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.lead-status-managers.index") }}" class="nav-link {{ request()->is("admin/lead-status-managers") || request()->is("admin/lead-status-managers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.leadStatusManager.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('estimate_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.estimates.index") }}" class="nav-link {{ request()->is("admin/estimates") || request()->is("admin/estimates/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-money-check-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.estimate.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('estimate_item_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.estimate-items.index") }}" class="nav-link {{ request()->is("admin/estimate-items") || request()->is("admin/estimate-items/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.estimateItem.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('production_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/jobs*") ? "menu-open" : "" }} {{ request()->is("admin/job-events*") ? "menu-open" : "" }} {{ request()->is("admin/job-files*") ? "menu-open" : "" }} {{ request()->is("admin/job-notes*") ? "menu-open" : "" }} {{ request()->is("admin/change-orders*") ? "menu-open" : "" }} {{ request()->is("admin/receivings*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-paint-roller">

                            </i>
                            <p>
                                {{ trans('cruds.production.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('job_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.jobs.index") }}" class="nav-link {{ request()->is("admin/jobs") || request()->is("admin/jobs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-folder-open">

                                        </i>
                                        <p>
                                            {{ trans('cruds.job.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('job_event_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.job-events.index") }}" class="nav-link {{ request()->is("admin/job-events") || request()->is("admin/job-events/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-calendar-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.jobEvent.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('job_file_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.job-files.index") }}" class="nav-link {{ request()->is("admin/job-files") || request()->is("admin/job-files/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.jobFile.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('job_note_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.job-notes.index") }}" class="nav-link {{ request()->is("admin/job-notes") || request()->is("admin/job-notes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-sticky-note">

                                        </i>
                                        <p>
                                            {{ trans('cruds.jobNote.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('change_order_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.change-orders.index") }}" class="nav-link {{ request()->is("admin/change-orders") || request()->is("admin/change-orders/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-edit">

                                        </i>
                                        <p>
                                            {{ trans('cruds.changeOrder.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('receiving_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.receivings.index") }}" class="nav-link {{ request()->is("admin/receivings") || request()->is("admin/receivings/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-truck">

                                        </i>
                                        <p>
                                            {{ trans('cruds.receiving.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('service_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/crews*") ? "menu-open" : "" }} {{ request()->is("admin/work-orders*") ? "menu-open" : "" }} {{ request()->is("admin/parts-orders*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.service.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('crew_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.crews.index") }}" class="nav-link {{ request()->is("admin/crews") || request()->is("admin/crews/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-people-carry">

                                        </i>
                                        <p>
                                            {{ trans('cruds.crew.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('work_order_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.work-orders.index") }}" class="nav-link {{ request()->is("admin/work-orders") || request()->is("admin/work-orders/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-folder-open">

                                        </i>
                                        <p>
                                            {{ trans('cruds.workOrder.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('parts_order_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.parts-orders.index") }}" class="nav-link {{ request()->is("admin/parts-orders") || request()->is("admin/parts-orders/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-folder-open">

                                        </i>
                                        <p>
                                            {{ trans('cruds.partsOrder.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('financial_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/payments*") ? "menu-open" : "" }} {{ request()->is("admin/contracts*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon far fa-credit-card">

                            </i>
                            <p>
                                {{ trans('cruds.financial.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('payment_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.payments.index") }}" class="nav-link {{ request()->is("admin/payments") || request()->is("admin/payments/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-credit-card">

                                        </i>
                                        <p>
                                            {{ trans('cruds.payment.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('contract_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.contracts.index") }}" class="nav-link {{ request()->is("admin/contracts") || request()->is("admin/contracts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.contract.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('activity_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/activities*") ? "menu-open" : "" }} {{ request()->is("admin/activity-references*") ? "menu-open" : "" }} {{ request()->is("admin/activity-results*") ? "menu-open" : "" }} {{ request()->is("admin/activity-types*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-tasks">

                            </i>
                            <p>
                                {{ trans('cruds.activityManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('activity_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.activities.index") }}" class="nav-link {{ request()->is("admin/activities") || request()->is("admin/activities/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.activity.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('activity_reference_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.activity-references.index") }}" class="nav-link {{ request()->is("admin/activity-references") || request()->is("admin/activity-references/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.activityReference.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('activity_result_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.activity-results.index") }}" class="nav-link {{ request()->is("admin/activity-results") || request()->is("admin/activity-results/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.activityResult.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('activity_type_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.activity-types.index") }}" class="nav-link {{ request()->is("admin/activity-types") || request()->is("admin/activity-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.activityType.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('asset_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/asset-categories*") ? "menu-open" : "" }} {{ request()->is("admin/asset-locations*") ? "menu-open" : "" }} {{ request()->is("admin/asset-statuses*") ? "menu-open" : "" }} {{ request()->is("admin/assets*") ? "menu-open" : "" }} {{ request()->is("admin/assets-histories*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-book">

                            </i>
                            <p>
                                {{ trans('cruds.assetManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('asset_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.asset-categories.index") }}" class="nav-link {{ request()->is("admin/asset-categories") || request()->is("admin/asset-categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-tags">

                                        </i>
                                        <p>
                                            {{ trans('cruds.assetCategory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('asset_location_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.asset-locations.index") }}" class="nav-link {{ request()->is("admin/asset-locations") || request()->is("admin/asset-locations/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-map-marker">

                                        </i>
                                        <p>
                                            {{ trans('cruds.assetLocation.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('asset_status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.asset-statuses.index") }}" class="nav-link {{ request()->is("admin/asset-statuses") || request()->is("admin/asset-statuses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-server">

                                        </i>
                                        <p>
                                            {{ trans('cruds.assetStatus.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('asset_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.assets.index") }}" class="nav-link {{ request()->is("admin/assets") || request()->is("admin/assets/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-book">

                                        </i>
                                        <p>
                                            {{ trans('cruds.asset.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('assets_history_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.assets-histories.index") }}" class="nav-link {{ request()->is("admin/assets-histories") || request()->is("admin/assets-histories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-th-list">

                                        </i>
                                        <p>
                                            {{ trans('cruds.assetsHistory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('contact_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/contact-companies*") ? "menu-open" : "" }} {{ request()->is("admin/contact-contacts*") ? "menu-open" : "" }} {{ request()->is("admin/vendor-links*") ? "menu-open" : "" }} {{ request()->is("admin/vendor-files*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-phone-square">

                            </i>
                            <p>
                                {{ trans('cruds.contactManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('contact_company_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.contact-companies.index") }}" class="nav-link {{ request()->is("admin/contact-companies") || request()->is("admin/contact-companies/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-building">

                                        </i>
                                        <p>
                                            {{ trans('cruds.contactCompany.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('contact_contact_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.contact-contacts.index") }}" class="nav-link {{ request()->is("admin/contact-contacts") || request()->is("admin/contact-contacts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user-plus">

                                        </i>
                                        <p>
                                            {{ trans('cruds.contactContact.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('vendor_link_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.vendor-links.index") }}" class="nav-link {{ request()->is("admin/vendor-links") || request()->is("admin/vendor-links/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-link">

                                        </i>
                                        <p>
                                            {{ trans('cruds.vendorLink.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('vendor_file_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.vendor-files.index") }}" class="nav-link {{ request()->is("admin/vendor-files") || request()->is("admin/vendor-files/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-folder-open">

                                        </i>
                                        <p>
                                            {{ trans('cruds.vendorFile.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('faq_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/faq-categories*") ? "menu-open" : "" }} {{ request()->is("admin/faq-questions*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-question">

                            </i>
                            <p>
                                {{ trans('cruds.faqManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('faq_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.faq-categories.index") }}" class="nav-link {{ request()->is("admin/faq-categories") || request()->is("admin/faq-categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.faqCategory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('faq_question_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.faq-questions.index") }}" class="nav-link {{ request()->is("admin/faq-questions") || request()->is("admin/faq-questions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-question">

                                        </i>
                                        <p>
                                            {{ trans('cruds.faqQuestion.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('product_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/product-categories*") ? "menu-open" : "" }} {{ request()->is("admin/product-tags*") ? "menu-open" : "" }} {{ request()->is("admin/products*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-shopping-cart">

                            </i>
                            <p>
                                {{ trans('cruds.productManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('product_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.product-categories.index") }}" class="nav-link {{ request()->is("admin/product-categories") || request()->is("admin/product-categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-folder">

                                        </i>
                                        <p>
                                            {{ trans('cruds.productCategory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('product_tag_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.product-tags.index") }}" class="nav-link {{ request()->is("admin/product-tags") || request()->is("admin/product-tags/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-folder">

                                        </i>
                                        <p>
                                            {{ trans('cruds.productTag.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('product_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-shopping-cart">

                                        </i>
                                        <p>
                                            {{ trans('cruds.product.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="{{ route("admin.systemCalendar") }}" class="nav-link {{ request()->is("admin/system-calendar") || request()->is("admin/system-calendar/*") ? "active" : "" }}">
                        <i class="fas fa-fw fa-calendar nav-icon">

                        </i>
                        <p>
                            {{ trans('global.systemCalendar') }}
                        </p>
                    </a>
                </li>
                @php($unread = \App\Models\QaTopic::unreadCount())
                    <li class="nav-item">
                        <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "active" : "" }} nav-link">
                            <i class="fa-fw fa fa-envelope nav-icon">

                            </i>
                            <p>{{ trans('global.messages') }}</p>
                            @if($unread > 0)
                                <strong>( {{ $unread }} )</strong>
                            @endif

                        </a>
                    </li>
                    @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                        @can('profile_password_edit')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                    <i class="fa-fw fas fa-key nav-icon">
                                    </i>
                                    <p>
                                        {{ trans('global.change_password') }}
                                    </p>
                                </a>
                            </li>
                        @endcan
                    @endif
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <p>
                                <i class="fas fa-fw fa-sign-out-alt nav-icon">

                                </i>
                                <p>{{ trans('global.logout') }}</p>
                            </p>
                        </a>
                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>