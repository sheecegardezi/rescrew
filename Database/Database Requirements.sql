CREATE SCHEMA `rescrewdb` ;


CREATE TABLE `rescrewdb`.`Client` (
  `user_name` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,

  `unit` VARCHAR(45) NOT NULL,
  `road` VARCHAR(100) NOT NULL,
  `suburb` VARCHAR(100) NOT NULL,
  `postalcode` VARCHAR(10) NOT NULL,
  `state` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,

  `creditcard_name` VARCHAR(45) NOT NULL,
  `creditcard_number` VARCHAR(45) NOT NULL,
  `creditcard_cvv` VARCHAR(5) NOT NULL,
  `creditcard_expire_month` VARCHAR(5) NOT NULL,
  `creditcard_expire_year` VARCHAR(5) NOT NULL,

  `activation_code` VARCHAR(45)  NULL,
  `account_status` VARCHAR(45)  NULL,
  `gps_location_ latitude` VARCHAR(45) NULL,
  `gps_location_ longitude` VARCHAR(45) NULL,
  
  `rating_count` VARCHAR(45) NULL,
  `rated_cumulative_sum` VARCHAR(45) NULL,
  
  `photo_url` VARCHAR(45) NULL,
  `date_account_created` VARCHAR(50) NULL,
  
  PRIMARY KEY (`user_name`));


CREATE TABLE `rescrewdb`.`Worker` (

  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `photo_url` VARCHAR(45) NULL,
  `date_of_birth` VARCHAR(50) NULL,
  `phone` INT NOT NULL,
  `email` VARCHAR(100) NOT NULL,

  `licenece_number` VARCHAR(100) NOT NULL,
  `qualification` VARCHAR(100)  NULL,
  `profession` VARCHAR(45) NOT NULL,
  
  `activation_code` VARCHAR(45) NULL,
  `account_status` VARCHAR(45) NULL,
  
  `rated_cumulative_sum` VARCHAR(45) NULL,
  `rating_count` VARCHAR(45) NULL,
  
  `gps_location_ latitude` VARCHAR(45) NULL,
  `gps_location_ longitude` VARCHAR(45) NULL,
  
  
  `abn` VARCHAR(45) NOT NULL,
  `bank_account_name` VARCHAR(45) NOT NULL,
  `bank_account_number` VARCHAR(45) NOT NULL,
  `bank_account_bsb` VARCHAR(45) NOT NULL,
  
  `user_name` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,

  PRIMARY KEY (`user_name`));

CREATE TABLE `rescrewdb`.`Worker_Speciality` (
  -- id will be worker forgin key
  `worker_id` VARCHAR(45) NOT NULL,
  `speciality` VARCHAR(45) NOT NULL,
-- primary key in going to be the combination of spacilty and id
  PRIMARY KEY (`worker_id`,`speciality`),
  FOREIGN KEY (`worker_id`) REFERENCES Worker(`user_name`)
  );


-- maybe add weather he does not want to take work
CREATE TABLE `rescrewdb`.`Worker_Availability` (
	`worker_id` VARCHAR(45) NOT NULL,
	`date` VARCHAR(45) NOT NULL,
	`time_01` Boolean NULL,
	`time_02` Boolean NULL,
	`time_03` Boolean NULL,
	`time_04` Boolean NULL,
	`time_05` Boolean NULL,
	`time_06` Boolean NULL,
	`time_07` Boolean NULL,
	`time_08` Boolean NULL,
	`time_09` Boolean NULL,
	`time_10` Boolean NULL,
	`time_11` Boolean NULL,
	`time_12` Boolean NULL,
	`time_13` Boolean NULL,
	`time_14` Boolean NULL,
	`time_15` Boolean NULL,
	`time_16` Boolean NULL,
	`time_17` Boolean NULL,
	`time_18` Boolean NULL,
	`time_19` Boolean NULL,
	`time_20` Boolean NULL,
	`time_21` Boolean NULL,
	`time_22` Boolean NULL,
	`time_23` Boolean NULL,
	`time_24` Boolean NULL,
  PRIMARY KEY (`worker_id`,`date`),
  FOREIGN KEY (`worker_id`) REFERENCES Worker(`user_name`)
  );

CREATE TABLE `rescrewdb`.`Job` (
  `id` INT NOT NULL,

  `profession` VARCHAR(45) NULL,
  `speciality` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,

  `client_id` VARCHAR(45) NOT NULL,
  `worker_id` VARCHAR(45) NOT NULL,

  `immediate_booking` Boolean NULL,
  `advance_booking` Boolean NULL,
  `emergence_booking` Boolean NULL,

   `suburb` VARCHAR(100) NOT NULL,

  `job_accepted` Boolean NULL,
  `time_difference_worker_client_location` VARCHAR(45) NULL,
  `date_of_commencement` VARCHAR(45)  NULL,
  `time_of_commencement` INT  NULL,


  `start_time` INT  NULL,
  `end_time` INT  NULL,
  `time_taken` INT  NULL,
   
  -- forgin key payment id
  `payment_id` INT  NULL,
  `checked_by_client` Boolean NULL,

  PRIMARY KEY (`id`),
  FOREIGN KEY (`worker_id`) REFERENCES Worker(`user_name`),
  FOREIGN KEY (`client_id`) REFERENCES Client(`user_name`)
  );

CREATE TABLE `rescrewdb`.`Payment` (
  `id` INT NOT NULL,
  `worker_id` VARCHAR(45) NOT NULL,
  `client_id` VARCHAR(45) NOT NULL,
  `amount` INT NOT NULL,
  `status`  BOOLEAN NOT NULL,

  PRIMARY KEY (`id`),
  FOREIGN KEY (`worker_id`) REFERENCES Worker(`user_name`),
  FOREIGN KEY (`client_id`) REFERENCES Client(`user_name`)
  );

CREATE TABLE `rescrewdb`.`Ledger` (
  `payment_id` INT  NOT NULL,
  `type_of_payment` VARCHAR(100) NOT NULL,
  `worker_id` VARCHAR(45) NOT NULL,
  `client_id` VARCHAR(45) NOT NULL,
  `amount` INT NOT NULL,

  PRIMARY KEY (`payment_id`),
  FOREIGN KEY (`worker_id`) REFERENCES Worker(`user_name`),
  FOREIGN KEY (`client_id`) REFERENCES Client(`user_name`)
  );