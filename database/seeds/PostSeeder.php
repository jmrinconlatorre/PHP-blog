<?php


use Phinx\Seed\AbstractSeed;

class PostSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for($i=0;$i<10;$i++){
            $data[]=[
                'title'=>$faker->word,
                'body'=>$faker->text(250),
                'id_user'=> 0,//tipo de encriptación sha1
                'created_at'=>date('Y-m-d H:i:s')
                //el updated_at no lo ponemos porque no es obligatorio
            ];
        }
        $this->insert('posts',$data);
    }
}
