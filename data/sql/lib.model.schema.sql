
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- garage
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `garage`;


CREATE TABLE `garage`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`raison_sociale` VARCHAR(255),
	`adresse` TEXT,
	`tel` VARCHAR(50),
	`fax` VARCHAR(50),
	`email` VARCHAR(50),
	`web` VARCHAR(255),
	`code_tva` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- vehicule
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `vehicule`;


CREATE TABLE `vehicule`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`immatricule` VARCHAR(50),
	`modele_id` INTEGER,
	`proprietaire_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `vehicule_FI_1` (`modele_id`),
	CONSTRAINT `vehicule_FK_1`
		FOREIGN KEY (`modele_id`)
		REFERENCES `modele` (`id`),
	INDEX `vehicule_FI_2` (`proprietaire_id`),
	CONSTRAINT `vehicule_FK_2`
		FOREIGN KEY (`proprietaire_id`)
		REFERENCES `proprietaire` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- marque
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `marque`;


CREATE TABLE `marque`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nom` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- modele
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `modele`;


CREATE TABLE `modele`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nom` VARCHAR(50),
	`marque_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `modele_FI_1` (`marque_id`),
	CONSTRAINT `modele_FK_1`
		FOREIGN KEY (`marque_id`)
		REFERENCES `marque` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- proprietaire
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `proprietaire`;


CREATE TABLE `proprietaire`
(
	`nom` VARCHAR(50),
	`prenom` VARCHAR(50),
	`raison_sociale` VARCHAR(255),
	`code_tva` VARCHAR(50),
	`personne_physique` TINYINT,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- intervention
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `intervention`;


CREATE TABLE `intervention`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`vehicule_id` INTEGER,
	`type_operation` TEXT,
	`date_intervention` DATE,
	`employe_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `intervention_FI_1` (`vehicule_id`),
	CONSTRAINT `intervention_FK_1`
		FOREIGN KEY (`vehicule_id`)
		REFERENCES `vehicule` (`id`),
	INDEX `intervention_FI_2` (`employe_id`),
	CONSTRAINT `intervention_FK_2`
		FOREIGN KEY (`employe_id`)
		REFERENCES `employe` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- employe
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `employe`;


CREATE TABLE `employe`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nom` VARCHAR(50),
	`prenom` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
