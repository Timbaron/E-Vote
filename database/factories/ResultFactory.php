<?php

namespace Database\Factories;

use App\Models\Poll;
use App\Models\Result;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Result::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $polls = Poll::all()->toArray();
        $poll_ids = Poll::all()->pluck('poll_id')->toArray();
        $user_ids = User::all()->pluck('id')->toArray();
        $candidates = [];
        foreach ($poll_ids as $poll_id)
        {
            // Get candidate from poll
            $poll_id_used = $poll_id;
            $candidates_in_json = Poll::where('poll_id', $poll_id)->pluck('candidates')->toArray();
            // $candidates_in_array = json_decode($candidates_in_json);
            $candidates = array_map('strtolower',json_decode($candidates_in_json[0]));

            // $candidate = explode(',', $candidate_in);
            // $candidate = json_decode($candidate_in_json);
            // Reset poll_id_used to 0
            // $poll_id_used = 0;
            // Remove  special characters from candidate

            
            // return [
            //     'poll_id' => $poll_id,
            // ];
        }
        return [
            'poll_id' => $this->faker->randomElement($poll_ids),
            'user_id' => $this->faker->randomElement($user_ids),
            'candidate' => $this->faker->randomElement($candidates),
        ];
    }
}
