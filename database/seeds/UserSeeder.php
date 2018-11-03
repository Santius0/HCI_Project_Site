<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
//        Developers
        factory(User::class)->create([
            'name' => 'Sergio Mathurin',
            'email' => 'sergio@example.com',
            'username' => 'sergio_dev',
            'password' => bcrypt('password'),
            'user_type' => User::DEVELOPER,
            'bio' => "Web developer and document management. Responsible for the construction of the <b><i>My UWI</i></b> project website and content and technical editing of documents."
        ]);

        factory(User::class)->create([
            'name' => 'Maya Bannis',
            'email' => 'maya@example.com',
            'username' => 'maya_dev',
            'password' => bcrypt('password'),
            'user_type' => User::DEVELOPER,
            'bio' => "UX design and application content lead. Responsible for application prototype implementation and broad application functionality."
        ]);

        factory(User::class)->create([
            'name' => 'Liam Gilbert',
            'email' => 'liam@example.com',
            'username' => 'liam_dev',
            'password' => bcrypt('password'),
            'user_type' => User::DEVELOPER,
            'bio' => "UX designer and data collection. Responsible for application prototype implementation and data collection through the use of the specified research methods."
        ]);

        factory(User::class)->create([
            'name' => 'Keneil Spencer',
            'email' => 'keneil@example.com',
            'username' => 'keneil_dev',
            'password' => bcrypt('password'),
            'user_type' => 2,
            'bio' => "Data collection lead. Responsible for the collection and organisation of user data, using the specified research methods."
        ]);


//        Test Users
        factory(User::class)->create([
            'name' => 'Keisha-Ann',
            'email' => 'keisha-ann@example.com',
            'username' => 'keisha-ann_user',
            'password' => bcrypt('password'),
            'user_type' => User::TEST_USER,
            'bio' => "Avid android user, current UWI student. Average user."
        ]);

        factory(User::class)->create([
            'name' => 'Andre',
            'email' => 'andre@example.com',
            'username' => 'andre_user',
            'password' => bcrypt('password'),
            'user_type' => User::TEST_USER,
            'bio' => "Information Technology major, current UWI student. Technically adept user."
        ]);

        factory(User::class)->create([
            'name' => 'Afiesha',
            'email' => 'afriesha@example.com',
            'username' => 'afriesha_user',
            'password' => bcrypt('password'),
            'user_type' => User::DEVELOPER,
            'bio' => "Bsc. Management minor in Computer Science, 2nd year UWI student. Technically adept user"
        ]);

        factory(User::class)->create([
            'name' => 'Nikita',
            'email' => 'nikita@example.com',
            'username' => 'nikita_user',
            'password' => bcrypt('password'),
            'user_type' => User::TEST_USER,
            'bio' => "Bsc. Psychology, 1st year UWI student. Average user"
        ]);

        factory(User::class)->create([
            'name' => 'Gabriella',
            'email' => 'gabriella@example.com',
            'username' => 'gabriella_user',
            'password' => bcrypt('password'),
            'user_type' => User::TEST_USER,
            'bio' => "Bsc. Bio-Chemistry, current UWI student. Average user"
        ]);

        factory(User::class)->create([
            'name' => 'Todah-Joy',
            'email' => 'todah@example.com',
            'username' => 'todah_user',
            'password' => bcrypt('password'),
            'user_type' => User::TEST_USER,
            'bio' => "Bsc. Bio-Chemistry, current UWI student. Average user"
        ]);
    }
}
