<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Highscore;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@admin.com',
        ]);

        $categories_data = [
            [
                "category" => "City"
            ],
            [
                "category" => "World"
            ],
            [
                "category" => "Movie"
            ],
            [
                "category" => "History"
            ],
        ];

        foreach ($categories_data as $category) {
            Categorie::create([
                'category' => $category['category']
            ]);
        }


        $quiz_data = [
            [
                "question" => "What is the capital of France?",
                "answers" => ["London", "Berlin", "Paris", "Madrid"],
                "correct_answer" => "c",
                "level" => "easy"
            ],
            [
                "question" => "Which planet is known as the Red Planet?",
                "answers" => ["Venus", "Mars", "Jupiter", "Saturn"],
                "correct_answer" => "b",
                "level" => "easy"
            ],
            [
                "question" => "Who wrote 'Romeo and Juliet'?",
                "answers" => ["Charles Dickens", "William Shakespeare", "Jane Austen", "Mark Twain"],
                "correct_answer" => "b",
                "level" => "easy"
            ],
            [
                "question" => "What is the largest mammal in the world?",
                "answers" => ["Elephant", "Giraffe", "Blue whale", "Dolphin"],
                "correct_answer" => "c",
                "level" => "easy"
            ],
            [
                "question" => "In which year did World War II end?",
                "answers" => ["1945", "1918", "1939", "1941"],
                "correct_answer" => "a",
                "level" => "easy"
            ],
            [
                "question" => "What is the chemical symbol for gold?",
                "answers" => ["Au", "Ag", "Fe", "Hg"],
                "correct_answer" => "a",
                "level" => "easy"
            ],
            [
                "question" => "Which element does 'O' represent in the periodic table?",
                "answers" => ["Oxygen", "Osmium", "Uranium", "Radon"],
                "correct_answer" => "a",
                "level" => "easy"
            ],
            [
                "question" => "What is the capital of Japan?",
                "answers" => ["Beijing", "Seoul", "Tokyo", "Bangkok"],
                "correct_answer" => "c",
                "level" => "easy"
            ],
            [
                "question" => "Who painted the Mona Lisa?",
                "answers" => ["Vincent van Gogh", "Leonardo da Vinci", "Pablo Picasso", "Claude Monet"],
                "correct_answer" => "b",
                "level" => "easy"
            ],
            [
                "question" => "What is the largest ocean on Earth?",
                "answers" => ["Atlantic Ocean", "Indian Ocean", "Southern Ocean", "Pacific Ocean"],
                "correct_answer" => "d",
                "level" => "easy"
            ],
            [
                "question" => "What is the currency of Germany?",
                "answers" => ["Pound", "Euro", "Yen", "Dollar"],
                "correct_answer" => "b",
                "level" => "middle"
            ],
            [
                "question" => "Who is known as the 'Father of Computer Science'?",
                "answers" => ["Alan Turing", "Bill Gates", "Steve Jobs", "Mark Zuckerberg"],
                "correct_answer" => "a",
                "level" => "middle"
            ],
            [
                "question" => "Which country is famous for the pyramids?",
                "answers" => ["Greece", "Italy", "Egypt", "Mexico"],
                "correct_answer" => "c",
                "level" => "middle"
            ],
            [
                "question" => "What is the powerhouse of the cell?",
                "answers" => ["Nucleus", "Mitochondria", "Ribosome", "Endoplasmic reticulum"],
                "correct_answer" => "b",
                "level" => "middle"
            ],
            [
                "question" => "Which gas do plants absorb from the atmosphere during photosynthesis?",
                "answers" => ["Oxygen", "Carbon dioxide", "Nitrogen", "Hydrogen"],
                "correct_answer" => "b",
                "level" => "middle"
            ],
            [
                "question" => "Who wrote 'To Kill a Mockingbird'?",
                "answers" => ["Ernest Hemingway", "Harper Lee", "J.K. Rowling", "George Orwell"],
                "correct_answer" => "b",
                "level" => "middle"
            ],
            [
                "question" => "What is the largest continent on Earth?",
                "answers" => ["Africa", "Europe", "Asia", "South America"],
                "correct_answer" => "c",
                "level" => "middle"
            ],
            [
                "question" => "Which is the smallest prime number?",
                "answers" => ["0", "1", "2", "3"],
                "correct_answer" => "c",
                "level" => "middle"
            ],
            [
                "question" => "In which year did Christopher Columbus reach the Americas?",
                "answers" => ["1492", "1620", "1776", "1848"],
                "correct_answer" => "a",
                "level" => "middle"
            ],
            [
                "question" => "What is the chemical symbol for water?",
                "answers" => ["H2O", "CO2", "O2", "NaCl"],
                "correct_answer" => "a",
                "level" => "middle"
            ],
            [
                "question" => "Who is the author of the Harry Potter series?",
                "answers" => ["J.R.R. Tolkien", "J.K. Rowling", "George R.R. Martin", "Suzanne Collins"],
                "correct_answer" => "b",
                "level" => "hard"
            ],
            [
                "question" => "What is the main ingredient in guacamole?",
                "answers" => ["Tomato", "Avocado", "Onion", "Garlic"],
                "correct_answer" => "b",
                "level" => "hard"
            ],
            [
                "question" => "Which planet is known as the 'Morning Star' or 'Evening Star'?",
                "answers" => ["Mars", "Venus", "Jupiter", "Saturn"],
                "correct_answer" => "b",
                "level" => "hard"
            ],
            [
                "question" => "What is the largest organ in the human body?",
                "answers" => ["Heart", "Liver", "Skin", "Lungs"],
                "correct_answer" => "c",
                "level" => "hard"
            ],
            [
                "question" => "Who discovered penicillin?",
                "answers" => ["Alexander Fleming", "Louis Pasteur", "Marie Curie", "Joseph Lister"],
                "correct_answer" => "a",
                "level" => "hard"
            ],
            [
                "question" => "What is the capital of Brazil?",
                "answers" => ["Rio de Janeiro", "Brasília", "São Paulo", "Buenos Aires"],
                "correct_answer" => "b",
                "level" => "hard"
            ],
            [
                "question" => "Which ocean is the largest by surface area?",
                "answers" => ["Atlantic Ocean", "Indian Ocean", "Southern Ocean", "Pacific Ocean"],
                "correct_answer" => "d",
                "level" => "hard"
            ],
            [
                "question" => "What is the largest desert in the world?",
                "answers" => ["Sahara Desert", "Gobi Desert", "Antarctic Desert", "Arctic Desert"],
                "correct_answer" => "d",
                "level" => "hard"
            ],
            [
                "question" => "Who wrote '1984'?",
                "answers" => ["Aldous Huxley", "George Orwell", "Ray Bradbury", "H.G. Wells"],
                "correct_answer" => "b",
                "level" => "hard"
            ],
            [
                "question" => "What is the speed of light in a vacuum?",
                "answers" => ["300,000 km/s", "150,000 km/s", "500,000 km/s", "1,000,000 km/s"],
                "correct_answer" => "a",
                "level" => "hard"
            ]
        ];

        foreach ($quiz_data as $quiz) {
            Quiz::create([
                    'question' => $quiz['question'],
                    'a' => $quiz['answers'][0],
                    'b' => $quiz['answers'][1],
                    'c' => $quiz['answers'][2],
                    'd' => $quiz['answers'][3],
                    'correct' => $quiz['correct_answer'],
                    'level' => $quiz['level'],
                    'categorie_id' => rand(1, 4),
                ]
            );
        }

        Highscore::create([
            'name' => 'Schottstaedt.net',
            'level' => 'all',
            'categorie_id' => 0,
            'score' => 99999,
        ]);
    }
}
