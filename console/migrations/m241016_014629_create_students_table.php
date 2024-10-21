<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%students}}`.
 */
class m241016_014629_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%students}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'group' => $this->string()->notNull(),
            'height' => $this->integer()->notNull(),
            'birth_date' => $this->date()->notNull(),
            'average_score' => $this->float(3, 2)->notNull(),
            'library_member' => $this->boolean()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%students}}');
    }
}
