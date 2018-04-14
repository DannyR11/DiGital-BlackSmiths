/*
TO DO:
- add data partaining to the languages
- add data partaining to encoding schemes
- specify directories
- research and decide on proper file growth
- decide on proper max size
- wait for database files from vincent to determine database size
*/

CREATE DATABASE Thutong
ON
PRIMARY ( NAME = Thutong_dat,
	FILENAME = 'C:\Thutong Data\Thutongdat.mdf',
SIZE = 10MB,
MAXSIZE = 50MB,
FILEGROWTH=5%)
GO

USE Thutong;
GO

CREATE SCHEMA Marketing AUTHORIZATION DBO
GO

CREATE SCHEMA People AUTHORIZATION DBO
GO

CREATE SCHEMA Academic AUTHORIZATION DBO
GO

CREATE SCHEMA Location AUTHORIZATION DBO
GO