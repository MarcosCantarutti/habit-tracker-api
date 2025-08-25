<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $habits = [
            "Acordar cedo",
            "Beber mais água",
            "Ler todos os dias",
            "Praticar exercícios",
            "Meditar",
            "Dormir 8 horas",
            "Anotar tarefas do dia",
            "Estudar 30 minutos",
            "Evitar redes sociais pela manhã",
            "Comer de forma saudável",
            "Fazer alongamento",
            "Economizar dinheiro",
            "Manter postura correta",
            "Praticar gratidão",
            "Aprender algo novo"
        ];


        return [
            'user_id' => User::factory(),
            'uuid' => fake()->uuid(),
            'title' => fake()->randomElement($habits),
        ];
    }
}
