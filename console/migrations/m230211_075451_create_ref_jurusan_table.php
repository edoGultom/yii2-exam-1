<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ref_jurusan}}`.
 */
class m230211_075451_create_ref_jurusan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ref_jurusan}}', [
            'id' => $this->primaryKey(),
            'jurusan' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ref_jurusan}}');
    }
}
