<?php

use yii\db\Migration;

/**
 * Class m210115_022610_firma
 */
class m210115_022610_firma extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('firma',[
            'fid'=> $this->primaryKey(),
            'fad' => $this->string()->notNull(),
            'kalkisnoktasi' => $this->string()->notNull(),
            'varisnoktasi' => $this->string()->notNull(), 
            'biletucret'=>$this->integer(),
            'cagrımerkezi' => $this->string(),
            'koltuksayisi'=>$this->integer(),

        ]);

     
        $this->batchInsert('firma',["fad","kalkisnoktasi","varisnoktasi","biletucret","cagrımerkezi","koltuksayisi"],[
         ["KamilKoç","İstanbul","Bartın",100,"444 0 562",50],
         ["Metro Turizm","Cankırı","Ankara",40,"0 (850) 222 34 55",40],
         ["Pamukkale Turizm","Ankara","Van",120,"(0850) 333 35 35",50],
         ["Ulusoy Turizm","İstanbul","Kayseri",90,"0 (850) 811 18 88",45],
         ["	Seç Turizm","Gaziantep","Cankırı",90,"0 (342) 444 44 27",40],
     
        ]);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       return $this->dropTable('firma');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_022610_firma cannot be reverted.\n";

        return false;
    }
    */
}
