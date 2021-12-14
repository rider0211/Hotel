<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'production_access',
            ],
            [
                'id'    => 18,
                'title' => 'job_event_create',
            ],
            [
                'id'    => 19,
                'title' => 'job_event_edit',
            ],
            [
                'id'    => 20,
                'title' => 'job_event_show',
            ],
            [
                'id'    => 21,
                'title' => 'job_event_delete',
            ],
            [
                'id'    => 22,
                'title' => 'job_event_access',
            ],
            [
                'id'    => 23,
                'title' => 'customer_status_create',
            ],
            [
                'id'    => 24,
                'title' => 'customer_status_edit',
            ],
            [
                'id'    => 25,
                'title' => 'customer_status_show',
            ],
            [
                'id'    => 26,
                'title' => 'customer_status_delete',
            ],
            [
                'id'    => 27,
                'title' => 'customer_status_access',
            ],
            [
                'id'    => 28,
                'title' => 'customer_access',
            ],
            [
                'id'    => 29,
                'title' => 'sale_access',
            ],
            [
                'id'    => 30,
                'title' => 'lead_create',
            ],
            [
                'id'    => 31,
                'title' => 'lead_edit',
            ],
            [
                'id'    => 32,
                'title' => 'lead_show',
            ],
            [
                'id'    => 33,
                'title' => 'lead_delete',
            ],
            [
                'id'    => 34,
                'title' => 'lead_access',
            ],
            [
                'id'    => 35,
                'title' => 'leads_source_create',
            ],
            [
                'id'    => 36,
                'title' => 'leads_source_edit',
            ],
            [
                'id'    => 37,
                'title' => 'leads_source_show',
            ],
            [
                'id'    => 38,
                'title' => 'leads_source_delete',
            ],
            [
                'id'    => 39,
                'title' => 'leads_source_access',
            ],
            [
                'id'    => 40,
                'title' => 'job_create',
            ],
            [
                'id'    => 41,
                'title' => 'job_edit',
            ],
            [
                'id'    => 42,
                'title' => 'job_show',
            ],
            [
                'id'    => 43,
                'title' => 'job_delete',
            ],
            [
                'id'    => 44,
                'title' => 'job_access',
            ],
            [
                'id'    => 45,
                'title' => 'job_file_create',
            ],
            [
                'id'    => 46,
                'title' => 'job_file_edit',
            ],
            [
                'id'    => 47,
                'title' => 'job_file_show',
            ],
            [
                'id'    => 48,
                'title' => 'job_file_delete',
            ],
            [
                'id'    => 49,
                'title' => 'job_file_access',
            ],
            [
                'id'    => 50,
                'title' => 'job_note_create',
            ],
            [
                'id'    => 51,
                'title' => 'job_note_edit',
            ],
            [
                'id'    => 52,
                'title' => 'job_note_show',
            ],
            [
                'id'    => 53,
                'title' => 'job_note_delete',
            ],
            [
                'id'    => 54,
                'title' => 'job_note_access',
            ],
            [
                'id'    => 55,
                'title' => 'service_access',
            ],
            [
                'id'    => 56,
                'title' => 'crew_create',
            ],
            [
                'id'    => 57,
                'title' => 'crew_edit',
            ],
            [
                'id'    => 58,
                'title' => 'crew_show',
            ],
            [
                'id'    => 59,
                'title' => 'crew_delete',
            ],
            [
                'id'    => 60,
                'title' => 'crew_access',
            ],
            [
                'id'    => 61,
                'title' => 'work_order_create',
            ],
            [
                'id'    => 62,
                'title' => 'work_order_edit',
            ],
            [
                'id'    => 63,
                'title' => 'work_order_show',
            ],
            [
                'id'    => 64,
                'title' => 'work_order_delete',
            ],
            [
                'id'    => 65,
                'title' => 'work_order_access',
            ],
            [
                'id'    => 66,
                'title' => 'parts_order_create',
            ],
            [
                'id'    => 67,
                'title' => 'parts_order_edit',
            ],
            [
                'id'    => 68,
                'title' => 'parts_order_show',
            ],
            [
                'id'    => 69,
                'title' => 'parts_order_delete',
            ],
            [
                'id'    => 70,
                'title' => 'parts_order_access',
            ],
            [
                'id'    => 71,
                'title' => 'lead_file_create',
            ],
            [
                'id'    => 72,
                'title' => 'lead_file_edit',
            ],
            [
                'id'    => 73,
                'title' => 'lead_file_show',
            ],
            [
                'id'    => 74,
                'title' => 'lead_file_delete',
            ],
            [
                'id'    => 75,
                'title' => 'lead_file_access',
            ],
            [
                'id'    => 76,
                'title' => 'lead_note_create',
            ],
            [
                'id'    => 77,
                'title' => 'lead_note_edit',
            ],
            [
                'id'    => 78,
                'title' => 'lead_note_show',
            ],
            [
                'id'    => 79,
                'title' => 'lead_note_delete',
            ],
            [
                'id'    => 80,
                'title' => 'lead_note_access',
            ],
            [
                'id'    => 81,
                'title' => 'financial_access',
            ],
            [
                'id'    => 82,
                'title' => 'payment_create',
            ],
            [
                'id'    => 83,
                'title' => 'payment_edit',
            ],
            [
                'id'    => 84,
                'title' => 'payment_show',
            ],
            [
                'id'    => 85,
                'title' => 'payment_delete',
            ],
            [
                'id'    => 86,
                'title' => 'payment_access',
            ],
            [
                'id'    => 87,
                'title' => 'contract_create',
            ],
            [
                'id'    => 88,
                'title' => 'contract_edit',
            ],
            [
                'id'    => 89,
                'title' => 'contract_show',
            ],
            [
                'id'    => 90,
                'title' => 'contract_delete',
            ],
            [
                'id'    => 91,
                'title' => 'contract_access',
            ],
            [
                'id'    => 92,
                'title' => 'change_order_create',
            ],
            [
                'id'    => 93,
                'title' => 'change_order_edit',
            ],
            [
                'id'    => 94,
                'title' => 'change_order_show',
            ],
            [
                'id'    => 95,
                'title' => 'change_order_delete',
            ],
            [
                'id'    => 96,
                'title' => 'change_order_access',
            ],
            [
                'id'    => 97,
                'title' => 'receiving_create',
            ],
            [
                'id'    => 98,
                'title' => 'receiving_edit',
            ],
            [
                'id'    => 99,
                'title' => 'receiving_show',
            ],
            [
                'id'    => 100,
                'title' => 'receiving_delete',
            ],
            [
                'id'    => 101,
                'title' => 'receiving_access',
            ],
            [
                'id'    => 102,
                'title' => 'activity_management_access',
            ],
            [
                'id'    => 103,
                'title' => 'activity_create',
            ],
            [
                'id'    => 104,
                'title' => 'activity_edit',
            ],
            [
                'id'    => 105,
                'title' => 'activity_show',
            ],
            [
                'id'    => 106,
                'title' => 'activity_delete',
            ],
            [
                'id'    => 107,
                'title' => 'activity_access',
            ],
            [
                'id'    => 108,
                'title' => 'activity_reference_create',
            ],
            [
                'id'    => 109,
                'title' => 'activity_reference_edit',
            ],
            [
                'id'    => 110,
                'title' => 'activity_reference_show',
            ],
            [
                'id'    => 111,
                'title' => 'activity_reference_delete',
            ],
            [
                'id'    => 112,
                'title' => 'activity_reference_access',
            ],
            [
                'id'    => 113,
                'title' => 'activity_result_create',
            ],
            [
                'id'    => 114,
                'title' => 'activity_result_edit',
            ],
            [
                'id'    => 115,
                'title' => 'activity_result_show',
            ],
            [
                'id'    => 116,
                'title' => 'activity_result_delete',
            ],
            [
                'id'    => 117,
                'title' => 'activity_result_access',
            ],
            [
                'id'    => 118,
                'title' => 'activity_type_create',
            ],
            [
                'id'    => 119,
                'title' => 'activity_type_edit',
            ],
            [
                'id'    => 120,
                'title' => 'activity_type_show',
            ],
            [
                'id'    => 121,
                'title' => 'activity_type_delete',
            ],
            [
                'id'    => 122,
                'title' => 'activity_type_access',
            ],
            [
                'id'    => 123,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 124,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 125,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 126,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 127,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 128,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 129,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 130,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 131,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 132,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 133,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 134,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 135,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 136,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 137,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 138,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 139,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 140,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 141,
                'title' => 'asset_create',
            ],
            [
                'id'    => 142,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 143,
                'title' => 'asset_show',
            ],
            [
                'id'    => 144,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 145,
                'title' => 'asset_access',
            ],
            [
                'id'    => 146,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 147,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 148,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 149,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 150,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 151,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 152,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 153,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 154,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 155,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 156,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 157,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 158,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 159,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 160,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 161,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 162,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 163,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 164,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 165,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 166,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 167,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 168,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 169,
                'title' => 'vendor_link_create',
            ],
            [
                'id'    => 170,
                'title' => 'vendor_link_edit',
            ],
            [
                'id'    => 171,
                'title' => 'vendor_link_show',
            ],
            [
                'id'    => 172,
                'title' => 'vendor_link_delete',
            ],
            [
                'id'    => 173,
                'title' => 'vendor_link_access',
            ],
            [
                'id'    => 174,
                'title' => 'vendor_file_create',
            ],
            [
                'id'    => 175,
                'title' => 'vendor_file_edit',
            ],
            [
                'id'    => 176,
                'title' => 'vendor_file_show',
            ],
            [
                'id'    => 177,
                'title' => 'vendor_file_delete',
            ],
            [
                'id'    => 178,
                'title' => 'vendor_file_access',
            ],
            [
                'id'    => 179,
                'title' => 'appointment_create',
            ],
            [
                'id'    => 180,
                'title' => 'appointment_edit',
            ],
            [
                'id'    => 181,
                'title' => 'appointment_show',
            ],
            [
                'id'    => 182,
                'title' => 'appointment_delete',
            ],
            [
                'id'    => 183,
                'title' => 'appointment_access',
            ],
            [
                'id'    => 184,
                'title' => 'lead_status_create',
            ],
            [
                'id'    => 185,
                'title' => 'lead_status_edit',
            ],
            [
                'id'    => 186,
                'title' => 'lead_status_show',
            ],
            [
                'id'    => 187,
                'title' => 'lead_status_delete',
            ],
            [
                'id'    => 188,
                'title' => 'lead_status_access',
            ],
            [
                'id'    => 189,
                'title' => 'lead_status_manager_create',
            ],
            [
                'id'    => 190,
                'title' => 'lead_status_manager_edit',
            ],
            [
                'id'    => 191,
                'title' => 'lead_status_manager_show',
            ],
            [
                'id'    => 192,
                'title' => 'lead_status_manager_delete',
            ],
            [
                'id'    => 193,
                'title' => 'lead_status_manager_access',
            ],
            [
                'id'    => 194,
                'title' => 'phone_create',
            ],
            [
                'id'    => 195,
                'title' => 'phone_edit',
            ],
            [
                'id'    => 196,
                'title' => 'phone_show',
            ],
            [
                'id'    => 197,
                'title' => 'phone_delete',
            ],
            [
                'id'    => 198,
                'title' => 'phone_access',
            ],
            [
                'id'    => 199,
                'title' => 'estimate_create',
            ],
            [
                'id'    => 200,
                'title' => 'estimate_edit',
            ],
            [
                'id'    => 201,
                'title' => 'estimate_show',
            ],
            [
                'id'    => 202,
                'title' => 'estimate_delete',
            ],
            [
                'id'    => 203,
                'title' => 'estimate_access',
            ],
            [
                'id'    => 204,
                'title' => 'estimate_item_create',
            ],
            [
                'id'    => 205,
                'title' => 'estimate_item_edit',
            ],
            [
                'id'    => 206,
                'title' => 'estimate_item_show',
            ],
            [
                'id'    => 207,
                'title' => 'estimate_item_delete',
            ],
            [
                'id'    => 208,
                'title' => 'estimate_item_access',
            ],
            [
                'id'    => 209,
                'title' => 'customer_contact_create',
            ],
            [
                'id'    => 210,
                'title' => 'customer_contact_edit',
            ],
            [
                'id'    => 211,
                'title' => 'customer_contact_show',
            ],
            [
                'id'    => 212,
                'title' => 'customer_contact_delete',
            ],
            [
                'id'    => 213,
                'title' => 'customer_contact_access',
            ],
            [
                'id'    => 214,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 215,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 216,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 217,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 218,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 219,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 220,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 221,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 222,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 223,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 224,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 225,
                'title' => 'product_create',
            ],
            [
                'id'    => 226,
                'title' => 'product_edit',
            ],
            [
                'id'    => 227,
                'title' => 'product_show',
            ],
            [
                'id'    => 228,
                'title' => 'product_delete',
            ],
            [
                'id'    => 229,
                'title' => 'product_access',
            ],
            [
                'id'    => 230,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
