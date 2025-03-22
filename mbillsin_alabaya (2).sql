-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2025 at 05:35 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbillsin_alabayav3`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_employee`
--

CREATE TABLE `category_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_accounts`
--

CREATE TABLE `crm_accounts` (
  `id` int(11) NOT NULL,
  `account` varchar(200) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `company` varchar(200) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `o` int(11) NOT NULL DEFAULT '0',
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `balance` decimal(16,2) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `notes` text NOT NULL,
  `tags` text NOT NULL,
  `password` text NOT NULL,
  `token` text NOT NULL,
  `ts` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `web` varchar(200) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `skype` varchar(100) DEFAULT NULL,
  `tax_number` varchar(100) DEFAULT NULL,
  `gst_no` varchar(50) DEFAULT NULL,
  `pan` varchar(50) NOT NULL,
  `entity_number` varchar(100) DEFAULT NULL,
  `currency` int(11) DEFAULT '0',
  `pmethod` varchar(100) DEFAULT NULL,
  `autologin` varchar(100) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `lastloginip` varchar(100) DEFAULT NULL,
  `stage` varchar(50) DEFAULT NULL,
  `timezone` varchar(50) DEFAULT NULL,
  `isp` varchar(100) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lon` varchar(50) DEFAULT NULL,
  `gname` varchar(200) DEFAULT NULL,
  `gid` int(11) NOT NULL DEFAULT '0',
  `sid` varchar(200) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL,
  `country_code` varchar(20) DEFAULT NULL,
  `country_idd` varchar(20) DEFAULT NULL,
  `signed_up_by` varchar(100) DEFAULT NULL,
  `signed_up_ip` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `ct` varchar(200) DEFAULT NULL,
  `assistant` varchar(200) DEFAULT NULL,
  `asst_phone` varchar(100) DEFAULT NULL,
  `second_email` varchar(100) DEFAULT NULL,
  `second_phone` varchar(100) DEFAULT NULL,
  `taxexempt` varchar(50) DEFAULT NULL,
  `latefeeoveride` varchar(50) DEFAULT NULL,
  `overideduenotices` varchar(50) DEFAULT NULL,
  `separateinvoices` varchar(50) DEFAULT NULL,
  `disableautocc` varchar(50) DEFAULT NULL,
  `billingcid` int(10) NOT NULL DEFAULT '0',
  `securityqid` int(10) NOT NULL DEFAULT '0',
  `securityqans` text,
  `cardtype` varchar(200) DEFAULT NULL,
  `cardlastfour` varchar(20) DEFAULT NULL,
  `cardnum` text,
  `startdate` varchar(50) DEFAULT NULL,
  `expdate` varchar(50) DEFAULT NULL,
  `issuenumber` varchar(200) DEFAULT NULL,
  `bankname` varchar(200) DEFAULT NULL,
  `banktype` varchar(200) DEFAULT NULL,
  `bankcode` varchar(200) DEFAULT NULL,
  `bankacct` varchar(200) DEFAULT NULL,
  `gatewayid` int(10) NOT NULL DEFAULT '0',
  `language` text,
  `pwresetkey` varchar(100) DEFAULT NULL,
  `emailoptout` varchar(50) DEFAULT NULL,
  `email_verified` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `pwresetexpiry` datetime DEFAULT NULL,
  `c1` varchar(200) DEFAULT NULL,
  `c2` varchar(200) DEFAULT NULL,
  `c3` varchar(200) DEFAULT NULL,
  `c4` varchar(200) DEFAULT NULL,
  `c5` varchar(200) DEFAULT NULL,
  `measurements` longtext,
  `salery_type` varchar(25) DEFAULT NULL,
  `salery_amt` varchar(255) DEFAULT NULL,
  `employee_category_id` int(11) DEFAULT NULL,
  `emp_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_customfields`
--

CREATE TABLE `crm_customfields` (
  `id` int(10) NOT NULL,
  `ctype` text,
  `relid` int(10) NOT NULL DEFAULT '0',
  `fieldname` text,
  `fieldtype` text,
  `description` text,
  `fieldoptions` text,
  `regexpr` text,
  `adminonly` text,
  `required` text,
  `showorder` text,
  `showinvoice` text,
  `sorder` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_customfieldsvalues`
--

CREATE TABLE `crm_customfieldsvalues` (
  `id` int(10) NOT NULL,
  `fieldid` int(10) NOT NULL,
  `relid` int(10) NOT NULL,
  `fvalue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_domain_hosting_logs`
--

CREATE TABLE `crm_domain_hosting_logs` (
  `id` int(11) NOT NULL,
  `dh_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `plan` int(11) NOT NULL,
  `renewal_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `created` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_domain_n_hosting`
--

CREATE TABLE `crm_domain_n_hosting` (
  `id` int(11) NOT NULL,
  `account` int(11) DEFAULT NULL,
  `domain_name` varchar(100) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `plan` int(11) NOT NULL COMMENT 'Plan in Months',
  `d_h_plan_yearly` varchar(50) DEFAULT NULL,
  `service_plan_monthly` varchar(50) DEFAULT NULL,
  `register_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `created` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_groups`
--

CREATE TABLE `crm_groups` (
  `id` int(11) NOT NULL,
  `gname` varchar(200) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `parent` varchar(200) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  `exempt` text,
  `description` text,
  `separateinvoices` text,
  `sorder` int(10) DEFAULT NULL,
  `c1` varchar(200) DEFAULT NULL,
  `c2` varchar(200) DEFAULT NULL,
  `c3` varchar(200) DEFAULT NULL,
  `c4` varchar(200) DEFAULT NULL,
  `c5` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crm_sales`
--

CREATE TABLE `crm_sales` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `service_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `duration_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `domain` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8_unicode_ci,
  `ragister_date` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_date` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expire_date` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_terminated` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_sales_logs`
--

CREATE TABLE `crm_sales_logs` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `action` longtext COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_sales_transaction`
--

CREATE TABLE `crm_sales_transaction` (
  `id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `sale_trans_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT 'sale transaction code',
  `sale_data` longtext COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_timesheet`
--

CREATE TABLE `crm_timesheet` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `emp_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checkin` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT '0.00' COMMENT 'per hour / piece qty',
  `amount` float DEFAULT '0' COMMENT 'per hour / piece rate',
  `earn_amount` decimal(10,2) DEFAULT '0.00',
  `remarks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_alocation_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `transaction_id` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_attendance`
--

CREATE TABLE `hrm_attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `eid` int(11) NOT NULL,
  `ename` varchar(200) NOT NULL,
  `ent` datetime NOT NULL,
  `ex` datetime NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hrm_employees`
--

CREATE TABLE `hrm_employees` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_alocation`
--

CREATE TABLE `invoice_alocation` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `email_status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pl_assets`
--

CREATE TABLE `pl_assets` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(14,2) NOT NULL,
  `total` decimal(14,2) NOT NULL,
  `pdate` date NOT NULL,
  `memo` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_accounts`
--

CREATE TABLE `sys_accounts` (
  `id` int(11) NOT NULL,
  `account` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `balance` decimal(18,2) NOT NULL DEFAULT '0.00',
  `bank_name` varchar(200) DEFAULT NULL,
  `account_number` varchar(200) DEFAULT NULL,
  `ifsc` varchar(20) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `branch` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `gstin` varchar(20) DEFAULT NULL,
  `pan` varchar(20) DEFAULT NULL,
  `contact_person` varchar(200) DEFAULT NULL,
  `contact_phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `company_logo` varchar(200) DEFAULT NULL,
  `company_stamp` varchar(250) DEFAULT NULL,
  `company_signature` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `ib_url` varchar(200) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `notes` text,
  `sorder` int(11) DEFAULT NULL,
  `e` varchar(200) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_activity`
--

CREATE TABLE `sys_activity` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `msg` text NOT NULL,
  `icon` varchar(100) NOT NULL DEFAULT '',
  `stime` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `o` int(11) NOT NULL DEFAULT '0',
  `oname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_api`
--

CREATE TABLE `sys_api` (
  `id` int(11) NOT NULL,
  `label` text,
  `ip` text,
  `apikey` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_appconfig`
--

CREATE TABLE `sys_appconfig` (
  `id` int(11) NOT NULL,
  `setting` text NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_calls`
--

CREATE TABLE `sys_calls` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `summary` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_cases`
--

CREATE TABLE `sys_cases` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `status` enum('Open','Closed') NOT NULL DEFAULT 'Open',
  `description` text NOT NULL,
  `source` text NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `cid` int(11) NOT NULL DEFAULT '0',
  `account` text NOT NULL,
  `aid` int(11) NOT NULL DEFAULT '0',
  `tags` text NOT NULL,
  `o` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_cats`
--

CREATE TABLE `sys_cats` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('Income','Expense') NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_cloths`
--

CREATE TABLE `sys_cloths` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `timestamp` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_companies`
--

CREATE TABLE `sys_companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `logo_url` varchar(200) DEFAULT NULL,
  `logo_path` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `emails` text,
  `phones` text,
  `tags` text,
  `description` text,
  `notes` text,
  `address1` varchar(200) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `added_from` varchar(200) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `oid` int(11) NOT NULL DEFAULT '0',
  `rid` int(11) NOT NULL DEFAULT '0',
  `assigned` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `last_contact` datetime DEFAULT NULL,
  `last_contact_by` varchar(200) DEFAULT NULL,
  `ratings` varchar(50) DEFAULT NULL,
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0',
  `c1` text,
  `c2` text,
  `c3` text,
  `c4` text,
  `c5` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_currencies`
--

CREATE TABLE `sys_currencies` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `iso_code` varchar(10) DEFAULT NULL,
  `symbol` varchar(20) DEFAULT NULL,
  `rate` decimal(11,4) NOT NULL DEFAULT '1.0000',
  `prefix` varchar(20) DEFAULT NULL,
  `suffix` varchar(20) DEFAULT NULL,
  `format` varchar(100) DEFAULT NULL,
  `decimal_separator` varchar(10) DEFAULT NULL,
  `thousand_separator` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `available_in` text,
  `isdefault` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_designs`
--

CREATE TABLE `sys_designs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` longtext,
  `price` decimal(16,2) DEFAULT NULL,
  `description` longtext,
  `cloth_id` int(11) DEFAULT NULL,
  `fabrics` longtext,
  `stones` longtext,
  `handworks` longtext,
  `others` longtext,
  `category_pricing` longtext,
  `timestamp` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_emailconfig`
--

CREATE TABLE `sys_emailconfig` (
  `id` int(11) NOT NULL,
  `method` varchar(50) NOT NULL,
  `host` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `apikey` varchar(200) NOT NULL,
  `port` varchar(10) NOT NULL,
  `secure` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_email_logs`
--

CREATE TABLE `sys_email_logs` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `iid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_email_templates`
--

CREATE TABLE `sys_email_templates` (
  `id` int(11) NOT NULL,
  `tplname` varchar(128) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT '1',
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `send` varchar(50) DEFAULT 'Active',
  `core` enum('Yes','No') DEFAULT 'Yes',
  `hidden` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_employees`
--

CREATE TABLE `sys_employees` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `hiredate` date NOT NULL,
  `emid` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `payroll` enum('Salary','Hourly','Commission','Other') NOT NULL,
  `etype` enum('FullTime','PartTime','Other') NOT NULL,
  `classf` enum('Parmanent','Seasonal','Temp','Contract') NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `hphone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `emname` varchar(100) NOT NULL,
  `emcontact` varchar(100) NOT NULL,
  `emrelation` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  `nextreview` date NOT NULL,
  `separation` date NOT NULL,
  `notes` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_events`
--

CREATE TABLE `sys_events` (
  `id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `contacts` text,
  `deals` text,
  `owner` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `etype` varchar(200) DEFAULT NULL,
  `priority` varchar(200) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `iid` int(11) NOT NULL DEFAULT '0',
  `oid` int(11) NOT NULL DEFAULT '0',
  `rid` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `allday` int(1) NOT NULL DEFAULT '0',
  `notification` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_invoiceitems`
--

CREATE TABLE `sys_invoiceitems` (
  `id` int(10) NOT NULL,
  `invoiceid` int(10) NOT NULL DEFAULT '0',
  `userid` int(10) NOT NULL,
  `type` text,
  `relid` int(10) DEFAULT NULL,
  `itemcode` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `qty` varchar(20) NOT NULL DEFAULT '1',
  `amount` decimal(14,2) NOT NULL DEFAULT '0.00',
  `taxrate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax_id` int(10) NOT NULL,
  `taxamount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total` decimal(14,2) NOT NULL DEFAULT '0.00',
  `duedate` date DEFAULT NULL,
  `paymentmethod` text,
  `notes` text,
  `product_id` varchar(20) DEFAULT NULL,
  `design_id` int(11) DEFAULT NULL,
  `item_type` varchar(40) DEFAULT NULL,
  `item_img` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_invoices`
--

CREATE TABLE `sys_invoices` (
  `id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `sale_trans_code` varchar(60) DEFAULT NULL,
  `account` varchar(200) NOT NULL,
  `company_id` int(11) NOT NULL,
  `cn` varchar(100) NOT NULL DEFAULT '',
  `invoicenum` text NOT NULL,
  `date` date DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `datepaid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` decimal(18,2) NOT NULL DEFAULT '0.00',
  `taxamt` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount_type` varchar(1) NOT NULL DEFAULT 'f',
  `discount_value` decimal(14,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(14,2) NOT NULL DEFAULT '0.00',
  `credit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `taxid` int(11) DEFAULT NULL,
  `status` text NOT NULL,
  `delivery_status` varchar(20) DEFAULT 'pending',
  `reminder_date` date DEFAULT NULL,
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL,
  `vtoken` varchar(20) NOT NULL,
  `ptoken` varchar(20) NOT NULL,
  `r` varchar(100) NOT NULL DEFAULT '0',
  `nd` date DEFAULT NULL,
  `eid` int(10) NOT NULL DEFAULT '0',
  `ename` varchar(200) DEFAULT NULL,
  `vid` int(11) NOT NULL DEFAULT '0',
  `currency` int(11) NOT NULL DEFAULT '0',
  `currency_symbol` varchar(10) DEFAULT NULL,
  `currency_prefix` varchar(10) DEFAULT NULL,
  `currency_suffix` varchar(10) DEFAULT NULL,
  `currency_rate` decimal(11,4) NOT NULL DEFAULT '1.0000',
  `recurring` tinyint(1) NOT NULL DEFAULT '0',
  `recurring_ends` date DEFAULT NULL,
  `last_recurring_date` date DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `sale_agent` int(11) NOT NULL DEFAULT '0',
  `last_overdue_reminder` date DEFAULT NULL,
  `allowed_payment_methods` text,
  `billing_street` varchar(200) DEFAULT NULL,
  `billing_city` varchar(100) DEFAULT NULL,
  `billing_state` varchar(100) DEFAULT NULL,
  `billing_zip` varchar(50) DEFAULT NULL,
  `billing_country` varchar(100) DEFAULT NULL,
  `shipping_street` varchar(200) DEFAULT NULL,
  `shipping_city` varchar(100) DEFAULT NULL,
  `shipping_state` varchar(100) DEFAULT NULL,
  `shipping_zip` varchar(100) DEFAULT NULL,
  `shipping_country` varchar(100) DEFAULT NULL,
  `q_hide` tinyint(1) NOT NULL DEFAULT '0',
  `show_quantity_as` int(11) NOT NULL DEFAULT '1',
  `pid` int(11) NOT NULL DEFAULT '0',
  `d_measure` varchar(10) DEFAULT NULL,
  `additional_imgs` longtext,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_invoices_status`
--

CREATE TABLE `sys_invoices_status` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `delivery_status` varchar(60) NOT NULL,
  `notes` longtext,
  `timestamp` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_items`
--

CREATE TABLE `sys_items` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `unit` varchar(100) NOT NULL DEFAULT '',
  `sales_price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `item_number` varchar(100) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `type` enum('Service','Product') NOT NULL,
  `type2` varchar(25) DEFAULT NULL,
  `track_inventroy` enum('Yes','No') NOT NULL DEFAULT 'No',
  `negative_stock` enum('Yes','No') NOT NULL DEFAULT 'No',
  `available` int(11) NOT NULL DEFAULT '0',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `added` date NOT NULL,
  `last_sold` date NOT NULL,
  `e` mediumtext NOT NULL,
  `purchase_price` decimal(16,2) DEFAULT NULL,
  `product_type` varchar(50) DEFAULT NULL,
  `product_category` varchar(50) DEFAULT NULL,
  `product_stock` int(11) DEFAULT NULL,
  `product_stock_type` varchar(50) DEFAULT NULL,
  `product_image` longtext,
  `design_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_items_category`
--

CREATE TABLE `sys_items_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_items_stock`
--

CREATE TABLE `sys_items_stock` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL COMMENT 'product id',
  `invoice_id` int(11) DEFAULT NULL,
  `parent_item_id` int(11) DEFAULT NULL,
  `stock` float NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `purchase_price` decimal(18,2) DEFAULT NULL,
  `timestamp` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_leads`
--

CREATE TABLE `sys_leads` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `added_from` varchar(200) DEFAULT NULL,
  `o` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `iid` int(11) NOT NULL DEFAULT '0',
  `oid` int(11) NOT NULL DEFAULT '0',
  `rid` int(11) NOT NULL DEFAULT '0',
  `sorder` int(11) NOT NULL DEFAULT '0',
  `assigned` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `last_contact` datetime DEFAULT NULL,
  `last_contact_by` varchar(200) DEFAULT NULL,
  `date_converted` datetime DEFAULT NULL,
  `public` int(1) NOT NULL DEFAULT '0',
  `ratings` varchar(50) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  `lost` int(1) NOT NULL DEFAULT '0',
  `junk` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_logs`
--

CREATE TABLE `sys_logs` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `userid` int(10) NOT NULL,
  `ip` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_notes`
--

CREATE TABLE `sys_notes` (
  `id` int(11) NOT NULL,
  `contents` mediumtext NOT NULL,
  `type` enum('Private','Public') NOT NULL DEFAULT 'Private',
  `o` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `uo` int(11) NOT NULL,
  `vtoken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_orgs`
--

CREATE TABLE `sys_orgs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contacts` mediumtext NOT NULL,
  `phone` varchar(100) NOT NULL,
  `phones` mediumtext NOT NULL,
  `email` varchar(100) NOT NULL,
  `emails` mediumtext NOT NULL,
  `web` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `notes` mediumtext NOT NULL,
  `tags` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_payee`
--

CREATE TABLE `sys_payee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_payers`
--

CREATE TABLE `sys_payers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_performa`
--

CREATE TABLE `sys_performa` (
  `id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `inv_id` int(11) DEFAULT NULL,
  `userid` int(10) NOT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `sale_trans_code` varchar(60) DEFAULT NULL,
  `account` varchar(200) NOT NULL,
  `company_id` int(11) NOT NULL,
  `cn` varchar(100) NOT NULL DEFAULT '',
  `invoicenum` text NOT NULL,
  `date` date DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `datepaid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` decimal(18,2) NOT NULL DEFAULT '0.00',
  `taxamt` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount_type` varchar(1) NOT NULL DEFAULT 'f',
  `discount_value` decimal(14,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(14,2) NOT NULL DEFAULT '0.00',
  `credit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `taxid` int(11) DEFAULT NULL,
  `status` text NOT NULL,
  `invoice_status` int(1) NOT NULL DEFAULT '0',
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL,
  `vtoken` varchar(20) NOT NULL,
  `ptoken` varchar(20) NOT NULL,
  `r` varchar(100) NOT NULL DEFAULT '0',
  `nd` date DEFAULT NULL,
  `eid` int(10) NOT NULL DEFAULT '0',
  `ename` varchar(200) DEFAULT NULL,
  `vid` int(11) NOT NULL DEFAULT '0',
  `currency` int(11) NOT NULL DEFAULT '0',
  `currency_symbol` varchar(10) DEFAULT NULL,
  `currency_prefix` varchar(10) DEFAULT NULL,
  `currency_suffix` varchar(10) DEFAULT NULL,
  `currency_rate` decimal(11,4) NOT NULL DEFAULT '1.0000',
  `recurring` tinyint(1) NOT NULL DEFAULT '0',
  `recurring_ends` date DEFAULT NULL,
  `last_recurring_date` date DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `sale_agent` int(11) NOT NULL DEFAULT '0',
  `last_overdue_reminder` date DEFAULT NULL,
  `allowed_payment_methods` text,
  `billing_street` varchar(200) DEFAULT NULL,
  `billing_city` varchar(100) DEFAULT NULL,
  `billing_state` varchar(100) DEFAULT NULL,
  `billing_zip` varchar(50) DEFAULT NULL,
  `billing_country` varchar(100) DEFAULT NULL,
  `shipping_street` varchar(200) DEFAULT NULL,
  `shipping_city` varchar(100) DEFAULT NULL,
  `shipping_state` varchar(100) DEFAULT NULL,
  `shipping_zip` varchar(100) DEFAULT NULL,
  `shipping_country` varchar(100) DEFAULT NULL,
  `q_hide` tinyint(1) NOT NULL DEFAULT '0',
  `show_quantity_as` int(11) NOT NULL DEFAULT '1',
  `pid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_performaitems`
--

CREATE TABLE `sys_performaitems` (
  `id` int(10) NOT NULL,
  `invoiceid` int(10) NOT NULL DEFAULT '0',
  `userid` int(10) NOT NULL,
  `type` text,
  `relid` int(10) DEFAULT NULL,
  `itemcode` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `qty` varchar(20) NOT NULL DEFAULT '1',
  `amount` decimal(14,2) NOT NULL DEFAULT '0.00',
  `taxrate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax_id` int(10) NOT NULL,
  `taxamount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total` decimal(14,2) NOT NULL DEFAULT '0.00',
  `duedate` date DEFAULT NULL,
  `paymentmethod` text,
  `notes` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_permissions`
--

CREATE TABLE `sys_permissions` (
  `id` int(11) NOT NULL,
  `pname` varchar(200) DEFAULT NULL,
  `shortname` varchar(200) DEFAULT NULL,
  `available` int(1) NOT NULL DEFAULT '0',
  `core` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_pg`
--

CREATE TABLE `sys_pg` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `settings` text NOT NULL,
  `value` text NOT NULL,
  `processor` text NOT NULL,
  `ins` text NOT NULL,
  `c1` text NOT NULL,
  `c2` text NOT NULL,
  `c3` text NOT NULL,
  `c4` text NOT NULL,
  `c5` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `sorder` int(2) NOT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `mode` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_pl`
--

CREATE TABLE `sys_pl` (
  `id` int(11) NOT NULL,
  `c` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `sorder` int(11) NOT NULL DEFAULT '0',
  `build` int(10) DEFAULT '1',
  `c1` text,
  `c2` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_pmethods`
--

CREATE TABLE `sys_pmethods` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_proforma_email_logs`
--

CREATE TABLE `sys_proforma_email_logs` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `iid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_proforma_transactions`
--

CREATE TABLE `sys_proforma_transactions` (
  `id` int(11) NOT NULL,
  `iid` int(11) NOT NULL DEFAULT '0',
  `account` varchar(200) NOT NULL,
  `type` enum('Income','Expense','Transfer') NOT NULL,
  `category` varchar(200) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `payer` varchar(200) NOT NULL,
  `payee` varchar(200) NOT NULL,
  `payerid` int(11) NOT NULL DEFAULT '0',
  `payeeid` int(11) NOT NULL DEFAULT '0',
  `method` varchar(200) NOT NULL,
  `ref` varchar(200) NOT NULL,
  `status` enum('Cleared','Uncleared','Reconciled','Void') NOT NULL DEFAULT 'Cleared',
  `description` mediumtext NOT NULL,
  `tags` mediumtext NOT NULL,
  `tax` decimal(18,2) NOT NULL DEFAULT '0.00',
  `date` date NOT NULL,
  `dr` decimal(18,2) NOT NULL DEFAULT '0.00',
  `cr` decimal(18,2) NOT NULL DEFAULT '0.00',
  `bal` decimal(18,2) NOT NULL DEFAULT '0.00',
  `currency` int(11) NOT NULL DEFAULT '0',
  `currency_symbol` varchar(10) DEFAULT NULL,
  `currency_prefix` varchar(10) DEFAULT NULL,
  `currency_suffix` varchar(10) DEFAULT NULL,
  `currency_rate` decimal(11,4) NOT NULL DEFAULT '1.0000',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `vid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) DEFAULT NULL,
  `attachments` text,
  `source` varchar(200) DEFAULT NULL,
  `rid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `flag` int(1) NOT NULL DEFAULT '0',
  `c1` text,
  `c2` text,
  `c3` text,
  `c4` text,
  `c5` text,
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_projects`
--

CREATE TABLE `sys_projects` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `status` enum('Open','Closed') NOT NULL DEFAULT 'Open',
  `description` text NOT NULL,
  `source` text NOT NULL,
  `started` date NOT NULL,
  `finished` date NOT NULL,
  `totaltime` varchar(20) NOT NULL DEFAULT '0',
  `cid` int(11) NOT NULL DEFAULT '0',
  `account` text NOT NULL,
  `aid` int(11) NOT NULL DEFAULT '0',
  `tags` text NOT NULL,
  `o` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_quoteitems`
--

CREATE TABLE `sys_quoteitems` (
  `id` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `itemid` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `itemcode` text NOT NULL,
  `description` text NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `taxrate` decimal(10,2) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_quotes`
--

CREATE TABLE `sys_quotes` (
  `id` int(10) NOT NULL,
  `subject` text NOT NULL,
  `userid` int(10) NOT NULL,
  `invoicenum` text NOT NULL,
  `cn` text NOT NULL,
  `validuntil` date DEFAULT NULL,
  `stage` enum('Draft','Delivered','On Hold','Accepted','Lost','Dead') NOT NULL,
  `currency` int(10) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  `taxamt` decimal(18,2) NOT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount_type` text NOT NULL,
  `discount_value` decimal(10,2) NOT NULL,
  `discount_amt` decimal(10,2) NOT NULL,
  `proposal` text NOT NULL,
  `customernotes` text NOT NULL,
  `adminnotes` text NOT NULL,
  `datecreated` date NOT NULL,
  `lastmodified` date NOT NULL,
  `datesent` date NOT NULL,
  `dateaccepted` date NOT NULL,
  `vtoken` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_repeating`
--

CREATE TABLE `sys_repeating` (
  `id` int(11) NOT NULL,
  `account` varchar(200) NOT NULL,
  `type` enum('Income','Expense','Transfer') NOT NULL,
  `category` varchar(200) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payer` varchar(200) NOT NULL,
  `payee` varchar(200) NOT NULL,
  `method` varchar(200) NOT NULL,
  `ref` varchar(200) NOT NULL,
  `status` enum('Cleared','Uncleared','Reconciled','Void') NOT NULL DEFAULT 'Uncleared',
  `description` mediumtext NOT NULL,
  `tags` mediumtext NOT NULL,
  `tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `date` date NOT NULL,
  `pdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_roles`
--

CREATE TABLE `sys_roles` (
  `id` int(11) NOT NULL,
  `rname` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_sales`
--

CREATE TABLE `sys_sales` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `oid` int(11) NOT NULL DEFAULT '0',
  `oname` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `amount` decimal(14,2) NOT NULL,
  `term` varchar(100) NOT NULL,
  `milestone` varchar(100) NOT NULL,
  `p` int(11) NOT NULL,
  `o` int(11) NOT NULL,
  `open` date NOT NULL,
  `close` date NOT NULL,
  `status` enum('New','In Progress','Won','Lost') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_schedule`
--

CREATE TABLE `sys_schedule` (
  `id` int(11) NOT NULL,
  `cname` mediumtext NOT NULL,
  `val` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_schedulelogs`
--

CREATE TABLE `sys_schedulelogs` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `logs` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_servers`
--

CREATE TABLE `sys_servers` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` mediumtext NOT NULL,
  `stype` varchar(50) NOT NULL,
  `apikey` mediumtext NOT NULL,
  `memo` mediumtext NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_staffpermissions`
--

CREATE TABLE `sys_staffpermissions` (
  `id` int(11) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `shortname` varchar(50) DEFAULT NULL,
  `can_view` int(1) NOT NULL DEFAULT '0',
  `can_edit` int(1) NOT NULL DEFAULT '0',
  `can_create` int(1) NOT NULL DEFAULT '0',
  `can_delete` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_tags`
--

CREATE TABLE `sys_tags` (
  `id` int(11) NOT NULL,
  `text` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_tasks`
--

CREATE TABLE `sys_tasks` (
  `id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `status` varchar(200) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `oid` int(11) NOT NULL DEFAULT '0',
  `iid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) NOT NULL DEFAULT '0',
  `tid` int(11) NOT NULL DEFAULT '0',
  `eid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `did` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `subscribers` text,
  `assigned_to` text,
  `priority` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `vtoken` varchar(50) DEFAULT NULL,
  `ptoken` varchar(50) DEFAULT NULL,
  `started` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `stime` varchar(50) DEFAULT NULL,
  `dtime` varchar(50) DEFAULT NULL,
  `time_spent` varchar(50) DEFAULT NULL,
  `date_finished` date DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  `finished` int(1) NOT NULL DEFAULT '0',
  `ratings` varchar(50) DEFAULT NULL,
  `rel_type` varchar(50) DEFAULT NULL,
  `rel_id` int(11) DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `is_public` int(1) NOT NULL DEFAULT '0',
  `billable` int(1) NOT NULL DEFAULT '0',
  `billed` int(1) NOT NULL DEFAULT '0',
  `hourly_rate` decimal(14,2) NOT NULL DEFAULT '0.00',
  `milestone` int(11) DEFAULT NULL,
  `progress` int(3) DEFAULT NULL,
  `visible_to_client` int(1) NOT NULL DEFAULT '0',
  `notification` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_tax`
--

CREATE TABLE `sys_tax` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `taxtype` varchar(50) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `state` text,
  `country` text,
  `aid` int(11) DEFAULT NULL,
  `bal` decimal(10,0) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_transactions`
--

CREATE TABLE `sys_transactions` (
  `id` int(11) NOT NULL,
  `iid` int(11) NOT NULL DEFAULT '0',
  `account` varchar(200) NOT NULL,
  `type` enum('Income','Expense','Transfer') NOT NULL,
  `category` varchar(200) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `payer` varchar(200) NOT NULL,
  `payee` varchar(200) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `payerid` int(11) NOT NULL DEFAULT '0',
  `payeeid` int(11) NOT NULL DEFAULT '0',
  `method` varchar(200) NOT NULL,
  `ref` varchar(200) NOT NULL,
  `status` enum('Cleared','Uncleared','Reconciled','Void') NOT NULL DEFAULT 'Cleared',
  `description` mediumtext NOT NULL,
  `tags` mediumtext NOT NULL,
  `tax` decimal(18,2) NOT NULL DEFAULT '0.00',
  `date` date NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `dr` decimal(18,2) NOT NULL DEFAULT '0.00',
  `cr` decimal(18,2) NOT NULL DEFAULT '0.00',
  `bal` decimal(18,2) NOT NULL DEFAULT '0.00',
  `currency` int(11) NOT NULL DEFAULT '0',
  `currency_symbol` varchar(10) DEFAULT NULL,
  `currency_prefix` varchar(10) DEFAULT NULL,
  `currency_suffix` varchar(10) DEFAULT NULL,
  `currency_rate` decimal(11,4) NOT NULL DEFAULT '1.0000',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `vid` int(11) NOT NULL DEFAULT '0',
  `aid` int(11) DEFAULT NULL,
  `attachments` text,
  `source` varchar(200) DEFAULT NULL,
  `rid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `archived` int(1) NOT NULL DEFAULT '0',
  `trash` int(1) NOT NULL DEFAULT '0',
  `flag` int(1) NOT NULL DEFAULT '0',
  `c1` text,
  `c2` text,
  `c3` text,
  `c4` text,
  `c5` text,
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_tt`
--

CREATE TABLE `sys_tt` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `start` varchar(50) NOT NULL DEFAULT '0',
  `end` varchar(50) NOT NULL DEFAULT '0',
  `allday` enum('true','false') NOT NULL DEFAULT 'false',
  `url` varchar(200) NOT NULL DEFAULT '',
  `cid` int(11) NOT NULL DEFAULT '0',
  `tid` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT '',
  `fullname` varchar(45) NOT NULL DEFAULT '',
  `phonenumber` varchar(20) DEFAULT NULL,
  `password` mediumtext NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'Full Access',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `last_login` datetime DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `creationdate` datetime NOT NULL,
  `otp` enum('Yes','No') NOT NULL DEFAULT 'No',
  `pin_enabled` enum('Yes','No') NOT NULL DEFAULT 'No',
  `pin` mediumtext NOT NULL,
  `img` text NOT NULL,
  `api` enum('Yes','No') DEFAULT 'No',
  `pwresetkey` varchar(100) NOT NULL,
  `keyexpire` varchar(100) NOT NULL,
  `roleid` int(11) NOT NULL DEFAULT '0',
  `role` varchar(200) DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `autologin` varchar(200) DEFAULT NULL,
  `at` varchar(200) DEFAULT NULL,
  `landing_page` varchar(200) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `notes` text,
  `c1` text,
  `c2` text,
  `c3` text,
  `c4` text,
  `c5` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wm_sysemails`
--

CREATE TABLE `wm_sysemails` (
  `id` int(11) NOT NULL,
  `email` mediumtext NOT NULL,
  `password` mediumtext NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_employee`
--
ALTER TABLE `category_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_accounts`
--
ALTER TABLE `crm_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_customfields`
--
ALTER TABLE `crm_customfields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_customfieldsvalues`
--
ALTER TABLE `crm_customfieldsvalues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_domain_hosting_logs`
--
ALTER TABLE `crm_domain_hosting_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_domain_n_hosting`
--
ALTER TABLE `crm_domain_n_hosting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_groups`
--
ALTER TABLE `crm_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_sales`
--
ALTER TABLE `crm_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_sales_logs`
--
ALTER TABLE `crm_sales_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_sales_transaction`
--
ALTER TABLE `crm_sales_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_timesheet`
--
ALTER TABLE `crm_timesheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrm_attendance`
--
ALTER TABLE `hrm_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrm_employees`
--
ALTER TABLE `hrm_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_alocation`
--
ALTER TABLE `invoice_alocation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_alocation_invoice_id` (`invoice_id`);

--
-- Indexes for table `pl_assets`
--
ALTER TABLE `pl_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_accounts`
--
ALTER TABLE `sys_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_activity`
--
ALTER TABLE `sys_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_api`
--
ALTER TABLE `sys_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_appconfig`
--
ALTER TABLE `sys_appconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_calls`
--
ALTER TABLE `sys_calls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_cases`
--
ALTER TABLE `sys_cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_cats`
--
ALTER TABLE `sys_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_cloths`
--
ALTER TABLE `sys_cloths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_companies`
--
ALTER TABLE `sys_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_currencies`
--
ALTER TABLE `sys_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_designs`
--
ALTER TABLE `sys_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_emailconfig`
--
ALTER TABLE `sys_emailconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_email_logs`
--
ALTER TABLE `sys_email_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_email_templates`
--
ALTER TABLE `sys_email_templates`
  ADD PRIMARY KEY (`id`,`language_id`),
  ADD KEY `tplname` (`tplname`(32));

--
-- Indexes for table `sys_employees`
--
ALTER TABLE `sys_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_events`
--
ALTER TABLE `sys_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_invoiceitems`
--
ALTER TABLE `sys_invoiceitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoiceid` (`invoiceid`);

--
-- Indexes for table `sys_invoices`
--
ALTER TABLE `sys_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `status` (`status`(3));

--
-- Indexes for table `sys_invoices_status`
--
ALTER TABLE `sys_invoices_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_items`
--
ALTER TABLE `sys_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_items_category`
--
ALTER TABLE `sys_items_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_items_stock`
--
ALTER TABLE `sys_items_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_leads`
--
ALTER TABLE `sys_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_logs`
--
ALTER TABLE `sys_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_notes`
--
ALTER TABLE `sys_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_orgs`
--
ALTER TABLE `sys_orgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_payee`
--
ALTER TABLE `sys_payee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_payers`
--
ALTER TABLE `sys_payers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_performa`
--
ALTER TABLE `sys_performa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `status` (`status`(3));

--
-- Indexes for table `sys_performaitems`
--
ALTER TABLE `sys_performaitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoiceid` (`invoiceid`);

--
-- Indexes for table `sys_permissions`
--
ALTER TABLE `sys_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_pg`
--
ALTER TABLE `sys_pg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gateway_setting` (`name`(32),`processor`(32)),
  ADD KEY `setting_value` (`processor`(32),`ins`(32));

--
-- Indexes for table `sys_pl`
--
ALTER TABLE `sys_pl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_pmethods`
--
ALTER TABLE `sys_pmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_proforma_email_logs`
--
ALTER TABLE `sys_proforma_email_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_proforma_transactions`
--
ALTER TABLE `sys_proforma_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_projects`
--
ALTER TABLE `sys_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_quoteitems`
--
ALTER TABLE `sys_quoteitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_quotes`
--
ALTER TABLE `sys_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_repeating`
--
ALTER TABLE `sys_repeating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_roles`
--
ALTER TABLE `sys_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_sales`
--
ALTER TABLE `sys_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_schedule`
--
ALTER TABLE `sys_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_schedulelogs`
--
ALTER TABLE `sys_schedulelogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_servers`
--
ALTER TABLE `sys_servers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_staffpermissions`
--
ALTER TABLE `sys_staffpermissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tags`
--
ALTER TABLE `sys_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tasks`
--
ALTER TABLE `sys_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tax`
--
ALTER TABLE `sys_tax`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_country` (`state`(32),`country`(2));

--
-- Indexes for table `sys_transactions`
--
ALTER TABLE `sys_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_tt`
--
ALTER TABLE `sys_tt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wm_sysemails`
--
ALTER TABLE `wm_sysemails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_employee`
--
ALTER TABLE `category_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_accounts`
--
ALTER TABLE `crm_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_customfields`
--
ALTER TABLE `crm_customfields`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_customfieldsvalues`
--
ALTER TABLE `crm_customfieldsvalues`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_domain_hosting_logs`
--
ALTER TABLE `crm_domain_hosting_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_domain_n_hosting`
--
ALTER TABLE `crm_domain_n_hosting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_groups`
--
ALTER TABLE `crm_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_sales`
--
ALTER TABLE `crm_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_sales_logs`
--
ALTER TABLE `crm_sales_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_sales_transaction`
--
ALTER TABLE `crm_sales_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_timesheet`
--
ALTER TABLE `crm_timesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrm_attendance`
--
ALTER TABLE `hrm_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrm_employees`
--
ALTER TABLE `hrm_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_alocation`
--
ALTER TABLE `invoice_alocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pl_assets`
--
ALTER TABLE `pl_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_accounts`
--
ALTER TABLE `sys_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_activity`
--
ALTER TABLE `sys_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_api`
--
ALTER TABLE `sys_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_appconfig`
--
ALTER TABLE `sys_appconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_calls`
--
ALTER TABLE `sys_calls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_cases`
--
ALTER TABLE `sys_cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_cats`
--
ALTER TABLE `sys_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_cloths`
--
ALTER TABLE `sys_cloths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_companies`
--
ALTER TABLE `sys_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_currencies`
--
ALTER TABLE `sys_currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_designs`
--
ALTER TABLE `sys_designs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_emailconfig`
--
ALTER TABLE `sys_emailconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_email_logs`
--
ALTER TABLE `sys_email_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_email_templates`
--
ALTER TABLE `sys_email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_employees`
--
ALTER TABLE `sys_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_events`
--
ALTER TABLE `sys_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_invoiceitems`
--
ALTER TABLE `sys_invoiceitems`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_invoices`
--
ALTER TABLE `sys_invoices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_invoices_status`
--
ALTER TABLE `sys_invoices_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_items`
--
ALTER TABLE `sys_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_items_category`
--
ALTER TABLE `sys_items_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_items_stock`
--
ALTER TABLE `sys_items_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_leads`
--
ALTER TABLE `sys_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_logs`
--
ALTER TABLE `sys_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_notes`
--
ALTER TABLE `sys_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_orgs`
--
ALTER TABLE `sys_orgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_payee`
--
ALTER TABLE `sys_payee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_payers`
--
ALTER TABLE `sys_payers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_performa`
--
ALTER TABLE `sys_performa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_performaitems`
--
ALTER TABLE `sys_performaitems`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_permissions`
--
ALTER TABLE `sys_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_pg`
--
ALTER TABLE `sys_pg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_pl`
--
ALTER TABLE `sys_pl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_pmethods`
--
ALTER TABLE `sys_pmethods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_proforma_email_logs`
--
ALTER TABLE `sys_proforma_email_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_proforma_transactions`
--
ALTER TABLE `sys_proforma_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_projects`
--
ALTER TABLE `sys_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_quoteitems`
--
ALTER TABLE `sys_quoteitems`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_quotes`
--
ALTER TABLE `sys_quotes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_repeating`
--
ALTER TABLE `sys_repeating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_roles`
--
ALTER TABLE `sys_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_sales`
--
ALTER TABLE `sys_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_schedule`
--
ALTER TABLE `sys_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_schedulelogs`
--
ALTER TABLE `sys_schedulelogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_servers`
--
ALTER TABLE `sys_servers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_staffpermissions`
--
ALTER TABLE `sys_staffpermissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_tags`
--
ALTER TABLE `sys_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_tasks`
--
ALTER TABLE `sys_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_tax`
--
ALTER TABLE `sys_tax`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_transactions`
--
ALTER TABLE `sys_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_tt`
--
ALTER TABLE `sys_tt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_users`
--
ALTER TABLE `sys_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wm_sysemails`
--
ALTER TABLE `wm_sysemails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
