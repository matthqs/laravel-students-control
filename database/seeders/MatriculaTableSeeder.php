<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Matricula;
use App\Models\User;

class MatriculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('admin'),
        ]);

        // Create 15 Aluno records
        for ($i = 1; $i <= 15; $i++) {
            Aluno::create([
                'nome' => 'Aluno ' . $i,
                'email' => 'email_' . $i . '@example.com',
                'data_nascimento' => '1990-01-01', // Assuming a static date for simplicity
            ]);
        }

        // Create 5 Curso records
        for ($i = 1; $i <= 5; $i++) {
            Curso::create([
                'titulo' => 'Curso ' . $i,
                'descricao' => 'Descrição do Curso ' . $i,
            ]);
        }

        // Create 10 Matricula records
        for ($i = 0; $i < 10; $i++) {
            // For simplicity, here we randomly choose aluno_id and curso_id
            $alunoId = Aluno::inRandomOrder()->first()->id;
            $cursoId = Curso::inRandomOrder()->first()->id;

            Matricula::create([
                'aluno_id' => $alunoId,
                'curso_id' => $cursoId,
                // Add other fields as needed
            ]);
        }
    }
}
