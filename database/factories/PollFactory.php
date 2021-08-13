<?php

namespace Database\Factories;

use App\Models\Poll;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PollFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Poll::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // all users id
        $users = User::all()->pluck('id');
        $positions = ['President','Governor','Class Rep','Administrator','PRO','Treasurer'];
        $candidates = [];
        for ($i = 0; $i <= 5; $i++) {
            $candidates[] = $this->faker->name;
        }
        
        return [
            'user_id' => $this->faker->randomElement($users),
            'poll_id' => 'BV'.rand(00,99). rand(000,999),
            'position' => $this->faker->randomElement($positions),
            'visibility' => 0,
            'start_date' => $this->faker->date(),
            // 'start_date' => $this->faker->between(Carbon::now()->subDays(1), Carbon::now()->addDays(7)),
            'end_date' => $this->faker->date($min = Carbon::now(), $max=null),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            // 'end_time' => $this->faker('time')->between(Carbon::now()->subMinutes(1), Carbon::now()->addHour(7)),
            'candidates' => json_encode($candidates),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
