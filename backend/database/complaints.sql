CREATE TABLE IF NOT EXISTS `complaints` (
  `complaint_id` INT NOT NULL AUTO_INCREMENT,
  `intern_id` INT NOT NULL,
  `stage_id` INT NOT NULL,
  `message` TEXT NOT NULL,
  PRIMARY KEY (`complaint_id`, `intern_id`, `stage_id`),
  INDEX `fk_complaints_interns1_idx` (`intern_id` ASC, `stage_id` ASC) VISIBLE,
  CONSTRAINT `fk_complaints_interns1`
    FOREIGN KEY (`intern_id` , `stage_id`)
    REFERENCES `interns` (`intern_id` , `stage_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB