<?php


use Phinx\Seed\AbstractSeed;

class FillFields extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = array(

            array(
                'title'=>'Война и мир',
                'author'=> 'Толстой Л.Н.',
                'amount'=>10
            ),
            array(
                'title'=>'Стихотворения',
                'author'=> 'Сергей Есенин',
                'amount'=>7
            ),
            array(
                'title'=>'Пиковая дама',
                'author'=> 'Пушкин А.С.',
                'amount'=>3
            )
        );

        $table = $this->table('books');
        $table->insert($data)->save();
    }
}
