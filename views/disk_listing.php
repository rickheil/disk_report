<?php 

$this->view('listings/default',
[
	"i18n_title" => 'disk_report.report',
	"js_link" => "module/disk_report/js/format_storage",
	"not_null_column" => "freespace",
	"table" => [
		[
			"column" => "machine.computer_name",
			"i18n_header" => "listing.computername",
			"formatter" => "clientDetail",
			"tab_link" => "storage-tab"
		],
		[
			"column" => "reportdata.serial_number",
			"i18n_header" => "serial",
		],
		[
			"column" => "reportdata.long_username",
			"i18n_header" => "username",
		],
		[
			"column" => "diskreport.mountpoint",
			"i18n_header" => "disk_report.mountpoint",
		],
		[
			"column" => "diskreport.media_type",
			"i18n_header" => "disk_report.media_type",
			"formatter" => "upperCase",
		],
		[
			"column" => "diskreport.volumetype",
			"i18n_header" => "disk_report.volume_type",
			"formatter" => "formatVolumeType",
		],
		[
			"column" => "diskreport.freespace",
			"i18n_header" => "disk_report.free",
			"formatter" => "fileSize",
			"filter" => "freeSpaceFilter"
		],
		[
			"column" => "diskreport.totalsize",
			"i18n_header" => "disk_report.total_size",
			"formatter" => "fileSize",
		],
		[
			"column" => "diskreport.smartstatus",
			"i18n_header" => "disk_report.smartstatus",
			"formatter" => "smartStatus"
		],
		[
			"column" => "diskreport.encrypted",
			"i18n_header" => "disk_report.encryption_status",
			"formatter" => "encryptionStatus",
		],
	]
]);
