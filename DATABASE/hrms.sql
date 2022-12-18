
CREATE DATABASE hrms;

/*Employee Database*/;
CREATE TABLE `hrms`.`employee` (`Sno.` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `password` VARCHAR(20) NOT NULL , `Mobile` DOUBLE NOT NULL , `Email` VARCHAR(30) NOT NULL , `DOB` VARCHAR(15) NOT NULL , `DOJ` DATE NOT NULL , `Role` VARCHAR(15) NOT NULL , `Authorization` VARCHAR(10) NOT NULL , `Address` VARCHAR(30) NOT NULL , `Salary` INT NOT NULL , `Feedback` VARCHAR(100) NOT NULL , PRIMARY KEY (`Sno.`)) ENGINE = InnoDB;

INSERT INTO `admin` (`Sno.`, `name`, `password`, `Mobile`, `Email`, `DOB`, `DOJ`, `Role`, `Authorization`, `Address`, `Salary`, `Feedback`) VALUES ('1', 'Somay Das', '123456', '9748537451', 'somaydas@gmail.com', '11-07-2002', '2022-11-02', 'Design', 'no', 'Kolkata', '', 'Hi, I am Somay');

/*Docs Database*/;
CREATE TABLE `hrms`.`docs` (`Sno` INT NOT NULL AUTO_INCREMENT , `pdf` VARCHAR(300) NOT NULL , PRIMARY KEY (`Sno`)) ENGINE = InnoDB;

/*Admin Database*/;
CREATE TABLE `hrms`.`admin` (`Sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , `Authorization` VARCHAR(30) NOT NULL , PRIMARY KEY (`Sno`)) ENGINE = InnoDB;

INSERT INTO `admin` (`Sno`, `name`, `password`, `Authorization`) VALUES ('1', 'admin1', 'admin', 'yes');