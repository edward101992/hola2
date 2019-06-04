<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios')
            ->assertSee('juan')
            ->assertSee('maria')
            ->assertSee('pedro');
           
    }




    /** @test */
     function usuarios2listaVacia()
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios2?vacio')
            ->assertStatus(200)
            ->assertSee('No hay Usuarios');
    }

    /** @test */
     function al_cargar_pagina_crear()
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios/crear')
            ->assertStatus(200)
            ->assertSee('Aqui se crea el usuario');
    }


     /** @test */
     function usuario_con_codigo()
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('El usuario numero : 5');
    }

 /** @test */
     function usuario_con_nombre_apellido_edad()
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios/ed/ra/12')
            ->assertStatus(200)
            ->assertSee('Hola usuario Ed Ra de 12');
    }

/** @test */
     function usuario_peticion()
    {
        $this->withoutExceptionHandling();
        $this->get('/user/insertar')
            ->assertStatus(200)
            ->assertSee('La peticion fue : insertar');
    }

    /** @test */
     function usuario_dos_apellidos()
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios/ed/ra/ba')
            ->assertStatus(200)
            ->assertSee('Hola ed ra ba - El usuario si tiene dos apellidos');
    }

     /** @test */
     function usuario_un_apellido()
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios/ed/ra/')
            ->assertStatus(200)
            ->assertSee('El usuario solo tiene un apellido');
    }

}
