<?php

use yii\db\Migration;

/**
 * Class m190627_180717_tbl_advert
 */
class m190627_180717_tbl_advert extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `advert` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `price` mediumint(11) DEFAULT NULL,
      `address` varchar(255) DEFAULT NULL,
      `fk_agent` mediumint(11) DEFAULT NULL,
      `bedroom` smallint(1) DEFAULT NULL,
      `livingroom` smallint(1) DEFAULT NULL,
      `parking` smallint(1) DEFAULT NULL,
      `kitchen` smallint(1) DEFAULT NULL,
      `general_image` varchar(200) DEFAULT NULL,
      `description` text,
      `location` varchar(30) DEFAULT NULL,
      `hot` smallint(1) DEFAULT NULL,
      `sold` smallint(1) DEFAULT NULL,
      `type` varchar(50) DEFAULT NULL,
      `recommend` smallint(1) DEFAULT NULL,
      `created_at` int(11) NOT NULL,
      `updated_at` int(11) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;
        ");
    }

    public function down()
    {
        $this->dropTable('{{%advert}}');
    }
}
