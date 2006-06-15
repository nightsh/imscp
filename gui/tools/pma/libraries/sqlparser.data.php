<?php
/* $Id: sqlparser.data.php,v 2.23.4.1 2006/03/26 11:54:14 lem9 Exp $ */
// vim: expandtab sw=4 ts=4 sts=4:


/** SQL Parser Matching Data
 *
 * Copyright 2002 Robin Johnson <robbat2@users.sourceforge.net>
 * http://www.orbis-terrarum.net/?l=people.robbat2
 *
 * This data is used by the SQL Parser to recognize keywords
 *
 * It has been extracted from the lex.h file in the MySQL BK tree
 * (around 4.0.2) as well as the MySQL documentation.
 *
 * Note: before adding a value in the arrays, ensure that you respect
 * proper sorting, especially with underscores. And don't forget to
 * update the _cnt variable at the end of each array.
 */

$PMA_SQPdata_function_name = array (
    'ABS',
    'ACOS',
    'ADDDATE',
    'ADDTIME',
    'AES_DECRYPT',
    'AES_ENCRYPT',
    'Area',                     // polygon-property-functions.html
    'ASCII',
    'ASIN',
    'ATAN',
    'ATAN2',
    'AVG',
    'BENCHMARK',
    'BIN',
    'BIT_AND',
    'BIT_COUNT',
    'BIT_LENGTH',
    'BIT_OR',
    'BIT_XOR',                  // group-by-functions.html
    'Boundary',                 // general-geometry-property-functions.html
    'CAST',
    'CEIL',
    'CEILING',
    'Centroid',                 // multipolygon-property-functions.html
    'CHAR',                     // string-functions.html
    'CHARACTER_LENGTH',
    'CHARSET',                  // information-functions.html
    'CHAR_LENGTH',
    'COALESCE',
    'COERCIBILITY',             // information-functions.html
    'COLLATION',                // information-functions.html
    'COMPRESS',                 // string-functions.html
    'CONCAT',
    'CONCAT_WS',
    'CONNECTION_ID',
    'CONV',
    'CONVERT',
    'CONVERT_TZ',
    'COS',
    'COT',
    'COUNT',
    'CRC32',                    // mathematical-functions.html
    'CURDATE',
    'CURRENT_DATE',
    'CURRENT_TIME',
    'CURRENT_TIMESTAMP',
    'CURRENT_USER',
    'CURTIME',
    'DATABASE',
    'DATE',                     // date-and-time-functions.html
    'DATEDIFF',                 // date-and-time-functions.html
    'DATE_ADD',
    'DATE_DIFF',
    'DATE_FORMAT',
    'DATE_SUB',
    'DAY',
    'DAYNAME',
    'DAYOFMONTH',
    'DAYOFWEEK',
    'DAYOFYEAR',
    'DECODE',
    'DEFAULT',                  // miscellaneous-functions.html
    'DEGREES',
    'DES_DECRYPT',
    'DES_ENCRYPT',
    'Dimension',                // general-geometry-property-functions.html
    'ELT',
    'ENCODE',
    'ENCRYPT',
    'EndPoint',                 // linestring-property-functions.html
    'Envelope',                 // general-geometry-property-functions.html
    'EXP',
    'EXPORT_SET',
    'ExteriorRing',             // polygon-property-functions.html
    'EXTRACT',
    'FIELD',
    'FIND_IN_SET',
    'FLOOR',
    'FORMAT',
    'FOUND_ROWS',
    'FROM_DAYS',
    'FROM_UNIXTIME',
    'GeometryN',                // geometrycollection-property-functions.html
    'GeometryType',             // general-geometry-property-functions.html
    'GET_FORMAT',
    'GET_LOCK',
    'GLength',                  // linestring-property-functions.html
    'GREATEST',
    'GROUP_CONCAT',
    'GROUP_UNIQUE_USERS',
    'HEX',
    'HOUR',
    'IF',                       //control-flow-functions.html
    'IFNULL',
    'INET_ATON',
    'INET_NTOA',
    'INSERT',                   // string-functions.html
    'INSTR',
    'InteriorRingN',            // polygon-property-functions.html
    'INTERVAL',
    'ISNULL',
    'IsClosed',                 // multilinestring-property-functions.html
    'IsEmpty',                  // general-geometry-property-functions.html
    'IsRing',                   // linestring-property-functions.html
    'IsSimple',                 // general-geometry-property-functions.html
    'IS_FREE_LOCK',
    'IS_USED_LOCK',             // miscellaneous-functions.html
    'LAST_DAY',
    'LAST_INSERT_ID',
    'LCASE',
    'LEAST',
    'LEFT',
    'LENGTH',
    'LN',
    'LOAD_FILE',
    'LOCALTIME',
    'LOCALTIMESTAMP',
    'LOCATE',
    'LOG',
    'LOG10',
    'LOG2',
    'LOWER',
    'LPAD',
    'LTRIM',
    'MAKEDATE',
    'MAKETIME',
    'MAKE_SET',
    'MASTER_POS_WAIT',
    'MAX',
    'MD5',
    'MICROSECOND',
    'MID',
    'MIN',
    'MINUTE',
    'MOD',
    'MONTH',
    'MONTHNAME',
    'NOW',
    'NULLIF',
    'NumGeometries',            // geometrycollection-property-functions.html
    'NumInteriorRings',         // polygon-property-functions.html
    'NumPoints',                // linestring-property-functions.html
    'OCT',
    'OCTET_LENGTH',
    'OLD_PASSWORD',
    'ORD',
    'PASSWORD',
    'PERIOD_ADD',
    'PERIOD_DIFF',
    'PI',
    'PointN',                   // linestring-property-functions.html
    'PointOnSurface',           // multipolygon-property-functions.html
    'POSITION',
    'POW',
    'POWER',
    'QUARTER',
    'QUOTE',
    'RADIANS',
    'RAND',
    'RELEASE_LOCK',
    'REPEAT',
    'REPLACE',                  // string-functions.html
    'REVERSE',
    'RIGHT',
    'ROUND',
    'ROW_COUNT',                // information-functions.html
    'RPAD',
    'RTRIM',
    'SCHEMA',                   // information-functions.html
    'SECOND',
    'SEC_TO_TIME',
    'SESSION_USER',
    'SHA',
    'SHA1',
    'SIGN',
    'SIN',
    'SLEEP',                    // miscellaneous-functions.html
    'SOUNDEX',
    'SPACE',
    'SQRT',
    'SRID',                     // general-geometry-property-functions.html
    'StartPoint',               // linestring-property-functions.html
    'STD',
    'STDDEV',
    'STDDEV_POP',               // group-by-functions.html
    'STDDEV_SAMP',              // group-by-functions.html
    'STRCMP',
    'STR_TO_DATE',
    'SUBDATE',
    'SUBSTRING',
    'SUBSTRING_INDEX',
    'SUBTIME',
    'SUM',
    'SYSDATE',
    'SYSTEM_USER',
    'TAN',
    'TIME',
    'TIMEDIFF',
    'TIMESTAMP',
    'TIMESTAMPADD',
    'TIMESTAMPDIFF',
    'TIME_FORMAT',
    'TIME_TO_SEC',
    'TO_DAYS',
    'TRIM',
    'TRUNCATE',                 // mathematical-functions.html
    'UCASE',
    'UNCOMPRESS',               // string-functions.html
    'UNCOMPRESSED_LENGTH',      // string-functions.html
    'UNHEX',                    // string-functions.html
    'UNIQUE_USERS',
    'UNIX_TIMESTAMP',
    'UPPER',
    'USER',
    'UTC_DATE',
    'UTC_TIME',
    'UTC_TIMESTAMP',
    'UUID',                     // miscellaneous-functions.html
    'VARIANCE',                 // group-by-functions.html
    'VAR_POP',                  // group-by-functions.html
    'VAR_SAMP',                 // group-by-functions.html
    'VERSION',
    'WEEK',
    'WEEKDAY',
    'WEEKOFYEAR',
    'X',                        // point-property-functions.html
    'Y',                        // point-property-functions.html
    'YEAR',
    'YEARWEEK'
);
//$PMA_SQPdata_function_name_cnt = count($PMA_SQPdata_function_name);
$PMA_SQPdata_function_name_cnt = 229;

$PMA_SQPdata_column_attrib = array (
    'ARCHIVE',          // Engine
    'ASCII',
    'AUTO_INCREMENT',
    'BDB',              // Engine
    'BERKELEYDB',       // Engine alias BDB
    'BINARY',
    'BLACKHOLE',        // Engine
    'CSV',              // Engine
    'DEFAULT',
    'EXAMPLE',          // Engine
    'FEDERATED',        // Engine
    'HEAP',             // Engine
    'INNOBASE',         // Engine alias InnoDB
    'INNODB',           // Engine InnoDB
    'ISAM',             // Engine
    'MEMORY',           // Engine alias HEAP, but preferred
    'MERGE',            // Engine
    'MRG_ISAM',         // Engine
    'MRG_MYISAM',       // Engine alias MERGE
    'MYISAM',           // Engine MyISAM
    'NATIONAL',
    'NDB',              // Engine alias NDBCLUSTER
    'NDBCLUSTER',       // Engine
    'PRECISION',
    'UNDEFINED',
    'UNICODE',
    'UNSIGNED',
    'VARYING',
    'ZEROFILL'
);
//$PMA_SQPdata_column_attrib_cnt = count($PMA_SQPdata_column_attrib);
$PMA_SQPdata_column_attrib_cnt = 29;

$PMA_SQPdata_reserved_word = array (
    'ACTION',
    'ADD',
    'AFTER',
    'AGAINST',
    'AGGREGATE',
    'ALGORITHM',
    'ALL',
    'ALTER',
    'ANALYSE',
    'ANALYZE',
    'AND',
    'AS',
    'ASC',
    'AUTOCOMMIT',
    'AUTO_INCREMENT',
    'AVG_ROW_LENGTH',
    'BACKUP',
    'BEGIN',
    'BETWEEN',
    'BINLOG',
    'BOTH',
    'BY',
    'CASCADE',
    'CASE',
    'CHANGE',
    'CHANGED',
    'CHARSET',
    'CHECK',
    'CHECKSUM',
    'CLIENT',
    'COLLATE',
    'COLLATION',
    'COLUMN',
    'COLUMNS',
    'COMMENT',
    'COMMIT',
    'COMMITTED',
    'COMPRESSED',
    'CONCURRENT',
    'CONSTRAINT',
    'CONVERT',
    'CREATE',
    'CROSS',
    'CURRENT_TIMESTAMP',
    'DATA',
    'DATABASE',
    'DATABASES',
    'DAY',
    'DAY_HOUR',
    'DAY_MINUTE',
    'DAY_SECOND',
    'DELAYED',
    'DELAY_KEY_WRITE',
    'DELETE',
    'DESC',
    'DESCRIBE',
    'DISTINCT',
    'DISTINCTROW',
    'DIV',
    'DO',
    'DROP',
    'DUMPFILE',
    'DYNAMIC',
    'ELSE',
    'ENCLOSED',
    'END',
    'ENGINE',
    'ENGINES',
    'ESCAPE',
    'ESCAPED',
    'EVENTS',
    'EXECUTE',
    'EXISTS',
    'EXPLAIN',
    'EXTENDED',
    'FAST',
    'FIELDS',
    'FILE',
    'FIRST',
    'FIXED',
    'FLUSH',
    'FOR',
    'FORCE',
    'FOREIGN',
    'FROM',
    'FULL',
    'FULLTEXT',
    'FUNCTION',
    'GEMINI',
    'GEMINI_SPIN_RETRIES',
    'GLOBAL',
    'GRANT',
    'GRANTS',
    'GROUP',
    'HAVING',
    'HEAP',
    'HIGH_PRIORITY',
    'HOSTS',
    'HOUR',
    'HOUR_MINUTE',
    'HOUR_SECOND',
    'IDENTIFIED',
    'IF',
    'IGNORE',
    'IN',
    'INDEX',
    'INDEXES',
    'INFILE',
    'INNER',
    'INSERT',
    'INSERT_ID',
    'INSERT_METHOD',
    'INTERVAL',
    'INTO',
    'IS',
    'ISOLATION',
    'JOIN',
    'KEY',
    'KEYS',
    'KILL',
    'LAST_INSERT_ID',
    'LEADING',
    'LEFT',
    'LEVEL',
    'LIKE',
    'LIMIT',
    'LINES',
    'LOAD',
    'LOCAL',
    'LOCK',
    'LOCKS',
    'LOGS',
    'LOW_PRIORITY',
    'MASTER',
    'MASTER_CONNECT_RETRY',
    'MASTER_HOST',
    'MASTER_LOG_FILE',
    'MASTER_LOG_POS',
    'MASTER_PASSWORD',
    'MASTER_PORT',
    'MASTER_USER',
    'MATCH',
    'MAX_CONNECTIONS_PER_HOUR',
    'MAX_QUERIES_PER_HOUR',
    'MAX_ROWS',
    'MAX_UPDATES_PER_HOUR',
    'MAX_USER_CONNECTIONS',
    'MEDIUM',
    'MERGE',
    'MIN_ROWS',
    'MINUTE',
    'MINUTE_SECOND',
    'MODE',
    'MODIFY',
    'MONTH',
    'MRG_MYISAM',
    'MYISAM',
    'NAMES',
    'NATURAL',
    // 'NO' is not allowed in SQL-99 but is allowed in MySQL
    //'NO',
    'NOT',
    'NULL',
    'OFFSET',
    'ON',
    'OPEN',
    'OPTIMIZE',
    'OPTION',
    'OPTIONALLY',
    'OR',
    'ORDER',
    'OUTER',
    'OUTFILE',
    'PACK_KEYS',
    'PARTIAL',
    'PASSWORD',
    'PRIMARY',
    'PRIVILEGES',
    'PROCEDURE',
    'PROCESS',
    'PROCESSLIST',
    'PURGE',
    'QUICK',
    'RAID0',
    'RAID_CHUNKS',
    'RAID_CHUNKSIZE',
    'RAID_TYPE',
    'READ',
    'REFERENCES',
    'REGEXP',
    'RELOAD',
    'RENAME',
    'REPAIR',
    'REPEATABLE',
    'REPLACE',
    'REPLICATION',
    'RESET',
    'RESTORE',
    'RESTRICT',
    'RETURN',
    'RETURNS',
    'REVOKE',
    'RIGHT',
    'RLIKE',
    'ROLLBACK',
    'ROW',
    'ROW_FORMAT',
    'ROWS',
    'SECOND',
    'SELECT',
    'SEPARATOR',
    'SERIALIZABLE',
    'SESSION',
    'SHARE',
    'SHOW',
    'SHUTDOWN',
    'SLAVE',
    'SONAME',
    'SOUNDS',                   // string-functions.html
    'SQL_AUTO_IS_NULL',
    'SQL_BIG_RESULT',
    'SQL_BIG_SELECTS',
    'SQL_BIG_TABLES',
    'SQL_BUFFER_RESULT',
    'SQL_CACHE',
    'SQL_CALC_FOUND_ROWS',
    'SQL_LOG_BIN',
    'SQL_LOG_OFF',
    'SQL_LOG_UPDATE',
    'SQL_LOW_PRIORITY_UPDATES',
    'SQL_MAX_JOIN_SIZE',
    'SQL_NO_CACHE',
    'SQL_QUOTE_SHOW_CREATE',
    'SQL_SAFE_UPDATES',
    'SQL_SELECT_LIMIT',
    'SQL_SLAVE_SKIP_COUNTER',
    'SQL_SMALL_RESULT',
    'SQL_WARNINGS',
    'START',
    'STARTING',
    'STATUS',
    'STOP',
    'STORAGE',
    'STRAIGHT_JOIN',
    'STRING',
    'STRIPED',
    'SUPER',
    'TABLE',
    'TABLES',
    'TEMPORARY',
    'TERMINATED',
    'THEN',
    'TO',
    'TRAILING',
    'TRUNCATE',
    'TYPE',
    'TYPES',
    'UNCOMMITTED',
    'UNION',
    'UNIQUE',
    'UNLOCK',
    'UPDATE',
    'USAGE',
    'USE',
    'USING',
    'VALUES',
    'VARIABLES',
    'VIEW',
    'WHEN',
    'WHERE',
    'WITH',
    'WORK',
    'WRITE',
    'XOR',
    'YEAR_MONTH'
);
//$PMA_SQPdata_reserved_word_cnt = count($PMA_SQPdata_reserved_word);
$PMA_SQPdata_reserved_word_cnt = 273;

// words forbidden to be used as column or table name,
// as seen in http://dev.mysql.com/doc/mysql/en/reserved-words.html
$PMA_SQPdata_forbidden_word = array (
    'ACTION',
    'ADD',
    'AFTER',
    'AGAINST',
    'AGGREGATE',
    'ALGORITHM',
    'ALL',
    'ALTER',
    'ANALYZE',
    'AND',
    'ANY',
    'AS',
    'ASC',
    'ASCII',
    'ASENSITIVE',
    'AUTO_INCREMENT',
    'AVG',
    'AVG_ROW_LENGTH',
    'BACKUP',
    'BDB',
    'BEFORE',
    'BEGIN',
    'BERKELEYDB',
    'BETWEEN',
    'BIGINT',
    'BINARY',
    'BINLOG',
    'BIT',
    'BLOB',
    'BOOL',
    'BOOLEAN',
    'BOTH',
    'BTREE',
    'BY',
    'BYTE',
    'CACHE',
    'CALL',
    'CASCADE',
    'CASCADED',
    'CASE',
    'CHAIN',
    'CHANGE',
    'CHANGED',
    'CHAR',
    'CHARACTER',
    'CHARSET',
    'CHECK',
    'CHECKSUM',
    'CIPHER',
    'CLIENT',
    'CLOSE',
    'COLLATE',
    'COLLATION',
    'COLUMN',
    'COLUMNS',
    'COMMENT',
    'COMMIT',
    'COMMITTED',
    'COMPACT',
    'COMPRESSED',
    'CONCURRENT',
    'CONDITION',
    'CONNECTION',
    'CONSISTENT',
    'CONSTRAINT',
    'CONTAINS',
    'CONTINUE',
    'CONVERT',
    'CREATE',
    'CROSS',
    'CUBE',
    'CURRENT_DATE',
    'CURRENT_TIME',
    'CURRENT_TIMESTAMP',
    'CURRENT_USER',
    'CURSOR',
    'DATA',
    'DATABASE',
    'DATABASES',
    'DATE',
    'DATETIME',
    'DAY',
    'DAY_HOUR',
    'DAY_MICROSECOND',
    'DAY_MINUTE',
    'DAY_SECOND',
    'DEALLOCATE',
    'DEC',
    'DECIMAL',
    'DECLARE',
    'DEFAULT',
    'DEFINER',
    'DELAYED',
    'DELAY_KEY_WRITE',
    'DELETE',
    'DESC',
    'DESCRIBE',
    'DES_KEY_FILE',
    'DETERMINISTIC',
    'DIRECTORY',
    'DISABLE',
    'DISCARD',
    'DISTINCT',
    'DISTINCTROW',
    'DIV',
    'DO',
    'DOUBLE',
    'DROP',
    'DUAL',
    'DUMPFILE',
    'DUPLICATE',
    'DYNAMIC',
    'EACH',
    'ELSE',
    'ELSEIF',
    'ENABLE',
    'ENCLOSED',
    'END',
    'ENGINE',
    'ENGINES',
    'ENUM',
    'ERRORS',
    'ESCAPE',
    'ESCAPED',
    'EVENTS',
    'EXECUTE',
    'EXISTS',
    'EXIT',
    'EXPANSION',
    'EXPLAIN',
    'EXTENDED',
    'FALSE',
    'FAST',
    'FETCH',
    'FIELDS',
    'FILE',
    'FIRST',
    'FIXED',
    'FLOAT',
    'FLOAT4',
    'FLOAT8',
    'FLUSH',
    'FOR',
    'FORCE',
    'FOREIGN',
    'FOUND',
    'FRAC_SECOND',
    'FROM',
    'FULL',
    'FULLTEXT',
    'FUNCTION',
    'GEOMETRY',
    'GEOMETRYCOLLECTION',
    'GET_FORMAT',
    'GLOBAL',
    'GOTO',
    'GRANT',
    'GRANTS',
    'GROUP',
    'HANDLER',
    'HASH',
    'HAVING',
    'HELP',
    'HIGH_PRIORITY',
    'HOSTS',
    'HOUR',
    'HOUR_MICROSECOND',
    'HOUR_MINUTE',
    'HOUR_SECOND',
    'IDENTIFIED',
    'IF',
    'IGNORE',
    'IMPORT',
    'IN',
    'INDEX',
    'INDEXES',
    'INFILE',
    'INNER',
    'INNOBASE',
    'INNODB',
    'INOUT',
    'INSENSITIVE',
    'INSERT',
    'INSERT_METHOD',
    'INT',
    'INT1',
    'INT2',
    'INT3',
    'INT4',
    'INT8',
    'INTEGER',
    'INTERVAL',
    'INTO',
    'INVOKER',
    'IO_THREAD',
    'IS',
    'ISOLATION',
    'ISSUER',
    'ITERATE',
    'JOIN',
    'KEY',
    'KEYS',
    'KILL',
    'LABEL',
    'LANGUAGE',
    'LAST',
    'LEADING',
    'LEAVE',
    'LEAVES',
    'LEFT',
    'LEVEL',
    'LIKE',
    'LIMIT',
    'LINES',
    'LINESTRING',
    'LOAD',
    'LOCAL',
    'LOCALTIME',
    'LOCALTIMESTAMP',
    'LOCK',
    'LOCKS',
    'LOGS',
    'LONG',
    'LONGBLOB',
    'LONGTEXT',
    'LOOP',
    'LOW_PRIORITY',
    'MASTER',
    'MASTER_CONNECT_RETRY',
    'MASTER_HOST',
    'MASTER_LOG_FILE',
    'MASTER_LOG_POS',
    'MASTER_PASSWORD',
    'MASTER_PORT',
    'MASTER_SERVER_ID',
    'MASTER_SSL',
    'MASTER_SSL_CA',
    'MASTER_SSL_CAPATH',
    'MASTER_SSL_CERT',
    'MASTER_SSL_CIPHER',
    'MASTER_SSL_KEY',
    'MASTER_USER',
    'MATCH',
    'MAX_CONNECTIONS_PER_HOUR',
    'MAX_QUERIES_PER_HOUR',
    'MAX_ROWS',
    'MAX_UPDATES_PER_HOUR',
    'MAX_USER_CONNECTIONS',
    'MEDIUM',
    'MEDIUMBLOB',
    'MEDIUMINT',
    'MEDIUMTEXT',
    'MERGE',
    'MICROSECOND',
    'MIDDLEINT',
    'MIGRATE',
    'MINUTE',
    'MINUTE_MICROSECOND',
    'MINUTE_SECOND',
    'MIN_ROWS',
    'MOD',
    'MODE',
    'MODIFIES',
    'MODIFY',
    'MONTH',
    'MULTILINESTRING',
    'MULTIPOINT',
    'MULTIPOLYGON',
    'MUTEX',
    'NAME',
    'NAMES',
    'NATIONAL',
    'NATURAL',
    'NCHAR',
    'NDB',
    'NDBCLUSTER',
    'NEW',
    'NEXT',
    'NO',
    'NONE',
    'NOT',
    'NO_WRITE_TO_BINLOG',
    'NULL',
    'NUMERIC',
    'NVARCHAR',
    'OFFSET',
    'OLD_PASSWORD',
    'ON',
    'ONE',
    'ONE_SHOT',
    'OPEN',
    'OPTIMIZE',
    'OPTION',
    'OPTIONALLY',
    'OR',
    'ORDER',
    'OUT',
    'OUTER',
    'OUTFILE',
    'PACK_KEYS',
    'PARTIAL',
    'PASSWORD',
    'PHASE',
    'POINT',
    'POLYGON',
    'PRECISION',
    'PREPARE',
    'PREV',
    'PRIMARY',
    'PRIVILEGES',
    'PROCEDURE',
    'PROCESSLIST',
    'PURGE',
    'QUARTER',
    'QUERY',
    'QUICK',
    'RAID0',
    'RAID_CHUNKS',
    'RAID_CHUNKSIZE',
    'RAID_TYPE',
    'READ',
    'READS',
    'REAL',
    'RECOVER',
    'REDUNDANT',
    'REFERENCES',
    'REGEXP',
    'RELAY_LOG_FILE',
    'RELAY_LOG_POS',
    'RELAY_THREAD',
    'RELEASE',
    'RELOAD',
    'RENAME',
    'REPAIR',
    'REPEAT',
    'REPEATABLE',
    'REPLACE',
    'REPLICATION',
    'REQUIRE',
    'RESET',
    'RESTORE',
    'RESTRICT',
    'RESUME',
    'RETURN',
    'RETURNS',
    'REVOKE',
    'RIGHT',
    'RLIKE',
    'ROLLBACK',
    'ROLLUP',
    'ROUTINE',
    'ROW',
    'ROWS',
    'ROW_FORMAT',
    'RTREE',
    'SAVEPOINT',
    'SCHEMA',
    'SCHEMAS',
    'SECOND',
    'SECOND_MICROSECOND',
    'SECURITY',
    'SELECT',
    'SENSITIVE',
    'SEPARATOR',
    'SERIAL',
    'SERIALIZABLE',
    'SESSION',
    'SET',
    'SHARE',
    'SHOW',
    'SHUTDOWN',
    'SIGNED',
    'SIMPLE',
    'SLAVE',
    'SMALLINT',
    'SNAPSHOT',
    'SOME',
    'SONAME',
    'SOUNDS',
    'SPATIAL',
    'SPECIFIC',
    'SQL',
    'SQLEXCEPTION',
    'SQLSTATE',
    'SQLWARNING',
    'SQL_BIG_RESULT',
    'SQL_BUFFER_RESULT',
    'SQL_CACHE',
    'SQL_CALC_FOUND_ROWS',
    'SQL_NO_CACHE',
    'SQL_SMALL_RESULT',
    'SQL_THREAD',
    'SQL_TSI_DAY',
    'SQL_TSI_FRAC_SECOND',
    'SQL_TSI_HOUR',
    'SQL_TSI_MINUTE',
    'SQL_TSI_MONTH',
    'SQL_TSI_QUARTER',
    'SQL_TSI_SECOND',
    'SQL_TSI_WEEK',
    'SQL_TSI_YEAR',
    'SSL',
    'START',
    'STARTING',
    'STATUS',
    'STOP',
    'STORAGE',
    'STRAIGHT_JOIN',
    'STRING',
    'STRIPED',
    'SUBJECT',
    'SUPER',
    'SUSPEND',
    'TABLE',
    'TABLES',
    'TABLESPACE',
    'TEMPORARY',
    'TEMPTABLE',
    'TERMINATED',
    'TEXT',
    'THEN',
    'TIME',
    'TIMESTAMP',
    'TIMESTAMPADD',
    'TIMESTAMPDIFF',
    'TINYBLOB',
    'TINYINT',
    'TINYTEXT',
    'TO',
    'TRAILING',
    'TRANSACTION',
    'TRIGGER',
    'TRIGGERS',
    'TRUE',
    'TRUNCATE',
    'TYPE',
    'TYPES',
    'UNCOMMITTED',
    'UNDEFINED',
    'UNDO',
    'UNICODE',
    'UNION',
    'UNIQUE',
    'UNKNOWN',
    'UNLOCK',
    'UNSIGNED',
    'UNTIL',
    'UPDATE',
    'USAGE',
    'USE',
    'USER',
    'USER_RESOURCES',
    'USE_FRM',
    'USING',
    'UTC_DATE',
    'UTC_TIME',
    'UTC_TIMESTAMP',
    'VALUE',
    'VALUES',
    'VARBINARY',
    'VARCHAR',
    'VARCHARACTER',
    'VARIABLES',
    'VARYING',
    'VIEW',
    'WARNINGS',
    'WEEK',
    'WHEN',
    'WHERE',
    'WHILE',
    'WITH',
    'WORK',
    'WRITE',
    'X509',
    'XA',
    'XOR',
    'YEAR',
    'YEAR_MONTH',
    'ZEROFILL'
);
// echo count($PMA_SQPdata_forbidden_word);
$PMA_SQPdata_forbidden_word_cnt = 479;

$PMA_SQPdata_column_type = array (
    'BIGINT',
    'BINARY',
    'BIT',
    'BLOB',
    'BOOL',
    'BOOLEAN',                  // numeric-type-overview.html
    'CHAR',
    'CHARACTER',
    'DATE',
    'DATETIME',
    'DEC',
    'DECIMAL',
    'DOUBLE',
    'ENUM',
    'FLOAT',
    'FLOAT4',
    'FLOAT8',
    'INT',
    'INT1',
    'INT2',
    'INT3',
    'INT4',
    'INT8',
    'INTEGER',
    'LONG',
    'LONGBLOB',
    'LONGTEXT',
    'MEDIUMBLOB',
    'MEDIUMINT',
    'MEDIUMTEXT',
    'MIDDLEINT',
    'NCHAR',
    'NUMERIC',
    'REAL',
    'SERIAL',           //BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE
    'SET',
    'SMALLINT',
    'TEXT',
    'TIME',
    'TIMESTAMP',
    'TINYBLOB',
    'TINYINT',
    'TINYTEXT',
    'VARBINARY',
    'VARCHAR',
    'YEAR'
);
//$PMA_SQPdata_column_type_cnt = count($PMA_SQPdata_column_type);
$PMA_SQPdata_column_type_cnt = 46;

// check counts
/*
foreach ( $GLOBALS as $n => $a ) {
    echo is_array( $a ) ? $n . ': ' . count( $a ) . '<br />' : '';
}
*/
?>
