<?php

// Type of db: "mssql", "mysql", "sqlite" or "postgresql"
$db_type = 'mysql';
// Password to login to stats.php. Change this!!!
$stats_password = 'qN6VMLahsz7bRYUA';
// If set to true, test IDs will be obfuscated to prevent users from guessing URLs of other tests
$enable_id_obfuscation = true;
// If set to true, IP addresses will be redacted from IP and ISP info fields, as well as the log
$redact_ip_addresses = false;

// Sqlite3 settings
$Sqlite_db_file = '../../speedtest_telemetry.sql';

// mssql settings
$MsSql_server = 'roipmars.org.my';
$MsSql_databasename = 'DB_NAME';
$MsSql_WindowsAuthentication = true;   #true or false
$MsSql_username = 'speedtest';          #not used if MsSql_WindowsAuthentication is true
$MsSql_password = 'Re6dwZTfQqUmF3yG';          #not used if MsSql_WindowsAuthentication is true
$MsSql_TrustServerCertificate = true;  #true, false or comment out for driver default
#Download driver from https://docs.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server?view=sql-server-ver16

// Mysql settings
$MySql_username = 'speedtest';
$MySql_password = 'Re6dwZTfQqUmF3yG';
$MySql_hostname = 'roipmars.org.my';
$MySql_databasename = 'speed';
$MySql_port = '3306';

// Postgresql settings
$PostgreSql_username = 'speedtest';
$PostgreSql_password = 'Re6dwZTfQqUmF3yG';
$PostgreSql_hostname = 'roipmars.org.my';
$PostgreSql_databasename = 'speed';
