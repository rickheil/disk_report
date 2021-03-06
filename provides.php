<?php

return [
    'detail_widgets' =>
    [
        'storage_detail' => [ 'view' => 'storage_detail_widget'],
    ],
    'client_tabs' => [
        'storage-tab' => [
            'view' => 'storage_tab', 
            'i18n' => 'disk_report.storage'
        ],
    ],
    'listings' => [
        'disk' => ['view' => 'disk_listing', 'i18n' => 'disk_report.storage'],
    ],
    'widgets' => [
        'disk_report' => ['view' => 'disk_report_widget'],
        'filevault' => ['view' => 'filevault_widget'],
        'smart_status' => ['view' => 'smart_status_widget'],
        'disk_type' => ['view' => 'disk_type_widget'],
        'filesystem_type' => ['view' => 'filesystem_type_widget'],
        'global_disk_usage' => ['view' => 'global_disk_usage_widget'],
    ],
    'reports' => [
        'storage' => ['view' => 'storage_report', 'i18n' => 'disk_report.report'],
    ],
];
