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
         $role_admin = App\Models\Role::create(
            [
                'name' => "ADMIN",
                'slug' => 'this-is-the-first-admin-role'
            ]);


            $role_bitfarmer = App\Models\Role::create(
            [
                'name' => "BITFARMER",
                'slug' => 'this-is-the-first-bitfarmer-role'
            ]);

            $role_bitfarmer_enterprise = App\Models\Role::create(
            [
                'name' => "BITFARM ENTERPRISE",
                'slug' => 'this-is-the-first-bitfarmer-enterprise-role'
            ]);








            $user_1 = App\Models\User::create(
                    [
                        'firstName' => 'Domininique',
                        'lastName' => 'DAMBA',
                       // 'username' => 'dominicus',
                        'email' => 'darth@fake.io',
                        'password' => bcrypt('password'),
                        //'role_id' => 1,
                        'status' => true,
                        'remember_token' => 'adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg',
                        'confirm_token' => 'ad87123yyyfkj8ds9e8ea8s9rrf6633qeeg',
                        'reset_token' => "adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg",
                        'slug' => 'dominique-damba-maoundongone-2018'
                    ]
            );


            $user_2 = App\Models\User::create(
                    [
                        'firstName' => 'Takezo',
                        'lastName' => 'Sensei',
                        'email' => 'sensei@fake.io',
                        'password' => bcrypt('password'),
                        //'role_id' => 2,
                        'status' => true,
                        'remember_token' => 'adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg',
                        'confirm_token' => 'ad87123yyyfkj8ds9e8ea8s9rrf6633qeeg',
                        'reset_token' => "adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg",
                        'slug' => 'takezo-sensei-2018'
                    ]
            );

            $enterprise =  App\Models\Enterprise::create(
                  [
                    'name' => 'Bitfarm',
                    'description' => 'Entreprise de biotechnologie',
                    'city' => 'Ndjamena',
                    'facebook' => 'bitfarm.tech',
                    'twitter' => 'bitfarmtech',
                    'instagram' => 'bitfarm.tech',
                    'telephone' => '+235 66 07 07 22',
                    'logo' => 'bitfarm.png',
                    'website' => 'about.bitfarm.co',
                    'user_id' => $user_1->id,
                    'verified' => true,
                    'lng' => '2.777',
                    'lat' => '1.035'
                  ]
            );


            $user_1->update(['enterprise_id' => $enterprise->id]);

            $user_1->roles()->attach($role_admin);
            $user_2->roles()->attach($role_bitfarmer);




    }
}
