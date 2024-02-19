/* ---------------------------------------------------- */
/*  Generated by Enterprise Architect Version 15.2 		*/
/*  Created On : 09-Feb-2024 6:47:58 PM 				*/
/*  DBMS       : MySql 						*/
/* ---------------------------------------------------- */

SET FOREIGN_KEY_CHECKS=0
;
/* Drop Tables */



DROP TABLE IF EXISTS `Jobs`
;

DROP TABLE IF EXISTS `Order`
;

DROP TABLE IF EXISTS `prices`
;

DROP TABLE IF EXISTS `product`
;



DROP TABLE IF EXISTS `product_group`
;

DROP TABLE IF EXISTS `Suppliers`
;

DROP TABLE IF EXISTS `Users`
;

DROP TABLE IF EXISTS `Customer`
;
DROP TABLE IF EXISTS `product_category`
;
/* Create Tables */

CREATE TABLE `Customer`
(
	`code` VARCHAR(50) NOT NULL,
	`name` VARCHAR(50) NULL,
	`address1` VARCHAR(50) NULL,
	`address2` VARCHAR(50) NULL,
	`address3` VARCHAR(50) NULL,
	`address4` VARCHAR(50) NULL,
	`address5` VARCHAR(50) NULL,
	`address6` VARCHAR(50) NULL,
	`postcode` VARCHAR(50) NULL,
	`countrycode` VARCHAR(50) NULL,
	`contact` VARCHAR(50) NULL,
	`telephone` VARCHAR(50) NULL,
	`email` VARCHAR(50) NULL,
	`best_name` VARCHAR(50) NULL,
	`country` VARCHAR(50) NULL,
	`despatch_method` VARCHAR(50) NULL,
	`despatch_method_name` VARCHAR(50) NULL,
	`despatch_customer_code` VARCHAR(50) NULL,
	`despatch_customer_address_id` VARCHAR(50) NULL,
	`line` VARCHAR(50) NULL,
	`main_contact_firstname` VARCHAR(50) NULL,
	`main_contact_surname` VARCHAR(50) NULL,
	`main_contact_title` VARCHAR(50) NULL,
	`main_contact_email` VARCHAR(50) NULL,
	`main_contact_telephone` VARCHAR(50) NULL,
	`invoice_contact_firstname` VARCHAR(50) NULL,
	`invoice_contact_surname` VARCHAR(50) NULL,
	`invoice_contact_title` VARCHAR(50) NULL,
	`invoice_contact_email` VARCHAR(50) NULL,
	`invoice_contact_telephone` VARCHAR(50) NULL,
	`vat_number` VARCHAR(50) NULL,
	CONSTRAINT `PK_Customer` PRIMARY KEY (`code` ASC)
)

;

CREATE TABLE `Jobs`
(
	`id` INT NOT NULL AUTO_INCREMENT,
	`addresses` VARCHAR(50) NULL,
	`product_code` VARCHAR(50) NULL,
	`idUser` INT NULL,
	`idOrder` VARCHAR(50) NULL,
	`idSuppliers` INT NULL,
	`data_no` VARCHAR(50) NULL,
	`customer` VARCHAR(50) NULL,
	`print_ref` VARCHAR(50) NULL,
	`project` VARCHAR(50) NULL,
	`qty` VARCHAR(50) NULL,
	`supplier` VARCHAR(50) NULL,
	`c_order_date` VARCHAR(50) NULL,
	`po_sent` DATE NULL,
	`approval_sent` DATE NULL,
	`s_despatch_sent` DATE NULL,
	`c_due_date` DATE NULL,
	`artwork_pre_approved` VARCHAR(50) NULL,
	`c_artwork` VARCHAR(50) NULL,
	`c_artwork_visual` TEXT NULL,
	`c_approved_pdf` VARCHAR(50) NULL,
	`box_no` VARCHAR(50) NULL,
	`act_despatch_date` DATE NULL,
	`uk_trading_no` VARCHAR(50) NULL,
	`delivered_date` DATE NULL,
	`nett_sale` VARCHAR(50) NULL,
	`customer_reference_1` VARCHAR(50) NULL,
	`s_ref` VARCHAR(50) NULL,
	`s_email` VARCHAR(50) NULL,
	`item` VARCHAR(50) NULL,
	`size` VARCHAR(50) NULL,
	`material` VARCHAR(50) NULL,
	`weigth_thickness_Capacity` VARCHAR(50) NULL,
	`print` VARCHAR(50) NULL,
	`coverage` FLOAT(2,2) NULL,
	`print_style` VARCHAR(50) NULL,
	`finish_1` VARCHAR(50) NULL,
	`finish_2` VARCHAR(50) NULL,
	`finish_3` VARCHAR(50) NULL,
	`service_level` VARCHAR(50) NULL,
	`status` VARCHAR(50) NULL,
	`notes` VARCHAR(50) NULL,
	`note` VARCHAR(50) NULL,
	`company_name` VARCHAR(50) NULL,
	`attn` VARCHAR(50) NULL,
	`tel` VARCHAR(50) NULL,
	`email` VARCHAR(50) NULL,
	`delivery_address` VARCHAR(50) NULL,
	`uk_track_link` VARCHAR(50) NULL,
	`delivery_image` VARCHAR(50) NULL,
	`product_image` VARCHAR(50) NULL,
	`not_sure` VARCHAR(50) NULL,
	`po_received` VARCHAR(50) NULL,
	CONSTRAINT `PK_Jobs` PRIMARY KEY (`id` ASC)
)

;

CREATE TABLE `Order`
(
	`id` VARCHAR(50) NOT NULL,
	`created_date` DATE NULL,
	`name` VARCHAR(50) NULL,
	`runtype` VARCHAR(50) NULL,
	`description` VARCHAR(50) NULL,
	`finished_date` DATE NULL,
	`workgroup` VARCHAR(50) NULL,
	CONSTRAINT `PK_Order` PRIMARY KEY (`id` ASC)
)

;

CREATE TABLE `prices`
(
	`id` VARCHAR(50) NOT NULL,
	`selling` VARCHAR(50) NULL,
	`transfer` VARCHAR(50) NULL,
	`production` VARCHAR(50) NULL,
	CONSTRAINT `PK_Table1` PRIMARY KEY (`id` ASC)
)

;

CREATE TABLE `product`
(
	`id` VARCHAR(50) NOT NULL,
	`name` VARCHAR(50) NULL,
	`code` VARCHAR(50) NULL,
	`size` VARCHAR(50) NULL,
	`material` VARCHAR(50) NULL,
	`weigth_thickness_capacity` VARCHAR(50) NULL,
	`print` VARCHAR(50) NULL,
	`coverage` VARCHAR(50) NULL,
	`print_style` VARCHAR(50) NULL,
	`finish1` VARCHAR(50) NULL,
	`finish2` VARCHAR(50) NULL,
	`finish3` VARCHAR(50) NULL,
	CONSTRAINT `PK_Table1` PRIMARY KEY (`id` ASC)
)

;

CREATE TABLE `product_category`
(
	`code` VARCHAR(50) NOT NULL,
	`name` VARCHAR(50) NULL,
	CONSTRAINT `PK_product_category` PRIMARY KEY (`code` ASC)
)

;

CREATE TABLE `product_group`
(
	`code` VARCHAR(50) NOT NULL,
	`name` VARCHAR(50) NULL,
	`prodcat` VARCHAR(50) NULL,
	CONSTRAINT `PK_product_group` PRIMARY KEY (`code` ASC)
)

;

CREATE TABLE `Suppliers`
(
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NULL,
	`email` VARCHAR(50) NULL,
	CONSTRAINT `PK_Suppliers` PRIMARY KEY (`id` ASC)
)

;

CREATE TABLE `Users`
(
	`idUser` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NULL,
	`email` VARCHAR(50) NULL,
	`company` VARCHAR(50) NULL,
	`tel` VARCHAR(50) NULL,
	`password` VARCHAR(50) NULL,
	`images` TEXT NULL,
	`userType` VARCHAR(50) NULL,
	CONSTRAINT `PK_Users` PRIMARY KEY (`idUser` ASC)
)

;

/* Create Primary Keys, Indexes, Uniques, Checks */

ALTER TABLE `Jobs`
 ADD INDEX `IXFK_Jobs_Customer` (`addresses` ASC)
;

ALTER TABLE `Jobs`
 ADD INDEX `IXFK_Jobs_Order` (`idOrder` ASC)
;

ALTER TABLE `Jobs`
 ADD INDEX `IXFK_Jobs_Suppliers` (`idSuppliers` ASC)
;

ALTER TABLE `Jobs`
 ADD INDEX `IXFK_Jobs_Users` (`idUser` ASC)
;

ALTER TABLE `product`
 ADD INDEX `IXFK_product_product_group` (`code` ASC)
;

/* Create Foreign Key Constraints */

ALTER TABLE `Jobs`
 ADD CONSTRAINT `FK_Jobs_Customer`
	FOREIGN KEY (`addresses`) REFERENCES `Customer` (`code`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Jobs`
 ADD CONSTRAINT `FK_Jobs_Order`
	FOREIGN KEY (`idOrder`) REFERENCES `Order` (`id`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Jobs`
 ADD CONSTRAINT `FK_Jobs_product`
	FOREIGN KEY (`product_code`) REFERENCES `product` (`id`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Jobs`
 ADD CONSTRAINT `FK_Jobs_Suppliers`
	FOREIGN KEY (`idSuppliers`) REFERENCES `Suppliers` (`id`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Jobs`
 ADD CONSTRAINT `FK_Jobs_Users`
	FOREIGN KEY (`idUser`) REFERENCES `Users` (`idUser`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `prices`
 ADD CONSTRAINT `FK_prices_product`
	FOREIGN KEY (`id`) REFERENCES `product` (`id`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `product`
 ADD CONSTRAINT `FK_product_product_group`
	FOREIGN KEY (`code`) REFERENCES `product_group` (`code`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `product_group`
 ADD CONSTRAINT `FK_product_group_product_category`
	FOREIGN KEY (`prodcat`) REFERENCES `product_category` (`code`) ON DELETE Restrict ON UPDATE Restrict
;

SET FOREIGN_KEY_CHECKS=1
; 