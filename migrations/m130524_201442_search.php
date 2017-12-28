<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_sample extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
		CREATE USER 'suser'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON *.* TO 'suser'@'localhost' IDENTIFIED BY '1234'
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{Author}}', [
            'id' => $this->int NOT NULL AUTO_INCREMENT,
            'name' => $this->varchar(30)->notNull(),
			'description' => $this->text()->notNull(),
            'surname ' => $this->varchar(30)->notNull(),
			'description' => $this->text()->notNull(),
		'id' => $this->int,
        ], $tableOptions);
	    
	    

        $this->createTable('{{Book}}', [
           'id' => $this->int NOT NULL AUTO_INCREMENT,
            'name' => $this->varchar(30)->notNull(),
			'description' => $this->text()->notNull(),
            'public_date ' => $this->date(30)->notNull(),
		 'category' => $this->int(30)->notNull(),
			'description' => $this->text()->notNull(),
            'numberpage ' => $this->int(30)->notNull(),
		
        ], $tableOptions);
	    
	    
	    
	      $this->createTable('{{Category}}', [
           'id' => $this->int NOT NULL AUTO_INCREMENT,
            'name' => $this->varchar(30)->notNull(),
		
        ], $tableOptions);

	    
	     $this->createTable('{{Publisher}}', [
            'id' => $this->int NOT NULL AUTO_INCREMENT,
            'name' => $this->varchar(30)->notNull(),
			'description' => $this->text()->notNull(),
            'adress ' => $this->varchar(60)->notNull(),
			'description' => $this->text()->notNull(),
		
        ], $tableOptions);

	    
        $this->createIndex(
            'idx_sample_data_sample_id-1',
            'sample_data',
            'sample_id'
        );

        $this->addForeignKey(
        FOREIGN KEY (book_id) REFERENCES book(id)  ,
	FOREIGN KEY (category) REFERENCES category(id)
        );

    }

    public function down()
    {
        $this->dropForeignKey('`category`(`name`) VALUES ("Programming")');
        $this->dropTable(book`(`name`, `public_date`, `category`, `numberpage`) VALUES ("Java",'2016-08-10',2,5)
'');
        $this->dropTable('{{%sample_data}}');
        $this->dropTable('{{%samples}}');
    }
}
