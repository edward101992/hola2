<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TetsCargarPaginas extends TestCase
{
    /** @test */
     function al_cargar_pagina_crear()
    {
        $this->get('/usuarios/crear')
	        ->assertStatus(200)
	        ->assertSee('Aqui se crea edssdl usuario');
    }


     /** @test */
     function usuario_con_codigo()
    {
        $this->get('/usuarios/5')
	        ->assertStatus(200)
	        ->assertSee('El usuario numero : 5');
    }
}
