<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->limpiarTablas([
    		'users',
    		'profesion'
    	]);
        $this->call(AgregarProfesionSeeder::class);
        $this->call(AgregarUsuarioSeeder::class);

    }

    protected function limpiarTablas(array $tablas){

    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    	foreach ($tablas as $tabla) {
    		DB::table($tabla)->truncate();
    	}
    	
    	DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    	
    }
}
