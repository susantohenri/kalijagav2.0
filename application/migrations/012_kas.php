<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_kas extends CI_Migration {

  function up () {

    $this->db->query("
      CREATE TABLE `kas` (
        `uuid` varchar(255) NOT NULL,
        `orders` INT(11) UNIQUE NOT NULL AUTO_INCREMENT,
        `createdAt` datetime DEFAULT NULL,
        `updatedAt` datetime DEFAULT NULL,
        `tanggal` DATE NOT NULL,
        `deskripsi` varchar(255) NOT NULL,
        `debet` INT(11) NOT NULL,
        `kredit` INT(11) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

  }

  function down () {
    $this->db->query("DROP TABLE IF EXISTS `kas`");
  }

}