select * from consumable;

insert into consumable
values(1,'Cake','Food');
insert into consumable
values(2,'Coffee','beverage');
insert into consumable
values(3,'Frap','beverage');

CREATE TABLE `starbucks`.`products` (
  `prod_id` INT NOT NULL,
  `prod_name` VARCHAR(45) NOT NULL,
  `prod_price` VARCHAR(45) NOT NULL,
  `ID_con` INT NULL,
  PRIMARY KEY (`prod_id`),
  INDEX `ID_con_idx` (`ID_con` ASC) VISIBLE,
    FOREIGN KEY (`ID_con`)
    REFERENCES `starbucks`.`consumable` (`ID_con`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
    select * from products;


