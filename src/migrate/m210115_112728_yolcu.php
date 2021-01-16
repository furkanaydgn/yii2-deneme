<?php

use yii\db\Migration;

/**
 * Class m210115_112728_yolcu
 */
class m210115_112728_yolcu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('yolcu',[
            'uid'=> $this->primaryKey(),
            'userssim'=> $this->string()->notNull(),
            'useroyisim' => $this->string()->notNull(),
            'useryas' => $this->integer(),
            'usercinsiyet' => $this->string()->notNull(), 
            'fid' => $this->integer(),
            'biletsayisi'  =>$this->integer(),

        ]);
            $this->createIndex('index-yolcu-fid',"yolcu","fid");
        $this->addForeignKey('fk-yolcu-fid',"yolcu","fid","firma","fid");


        $this->batchInsert('yolcu',["userssim","useroyisim","useryas","usercinsiyet","fid","biletsayisi"],[
         ["Furkan","Aydoğan",22,"Erkek",1,2],
         ["Ahmet","Yılmaz",19,"Erkek",3,2],
         ["Gül","Demir",19,"Kadın",5,4],   
        ]);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210115_112728_yolcu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_112728_yolcu cannot be reverted.\n";

        return false;
    }
    */
}
