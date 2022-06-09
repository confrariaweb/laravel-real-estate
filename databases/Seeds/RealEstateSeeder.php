<?php

namespace ConfrariaWeb\RealEstate\Databases\Seeds;

use App\Models\User;
use Carbon\Carbon;
use ConfrariaWeb\RealEstate\Models\Property;
use ConfrariaWeb\RealEstate\Models\PropertyFinality;
use ConfrariaWeb\RealEstate\Models\PropertyFeature;
use ConfrariaWeb\RealEstate\Models\PropertyType;
use ConfrariaWeb\Site\Models\SiteType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class RealEstateSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->createPlans();
        $this->createAccounts();
        $this->createRoles();
        $this->createPermissions();
        $this->createUsers();
        //$this->createPropertyFinality();
        //$this->createPropertyTypes();
        //$this->createPropertyFeatures();
        //$this->createProperties();
        //$this->createTemplates();
        //$this->createSites();
        //$this->createDomains();
    }

    public function createSites(){
        $types = [
            [
                'name' => 'Landing Page',
                'slug' => 'landing-page'
            ],
            [
                'name' => 'Site',
                'slug' => 'site'
            ]
        ];
        foreach ($types as $type) {
            if (SiteType::where('slug', $type['slug'])->doesntExist()) {
                SiteType::create($type);
            }
        }
    }

    public function createPropertyTypes(){
        $types = [
            [
                'name' => 'Apartamento',
                'slug' => 'apartamento',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Casa',
                'slug' => 'casa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($types as $type) {
            if (PropertyType::where('name', $type['name'])->doesntExist()) {
                PropertyType::create($type);
            }
        }
    }

    public function createPropertyFeatures(){
        $features = [
            [
                'name' => 'Portaria 24Hrs',
                'slug' => 'portaria24hrs',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Playground',
                'slug' => 'playground',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($features as $feature) {
            if (PropertyFeature::where('name', $feature['name'])->doesntExist()) {
                PropertyFeature::create($feature);
            }
        }
    }

    public function createPropertyFinality(){
        $finalities = [
            [
                'name' => 'Vender',
                'slug' => 'vender',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Alugar',
                'slug' => 'alugar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Alugar',
                'slug' => 'alugar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($finalities as $b) {
            if (PropertyFinality::where('name', $b['name'])->doesntExist()) {
                PropertyFinality::create($b);
            }
        }
    }

    public function createProperties(){
        $properties = [
            [
                'type_id' => 1,
                'user_id' => 1,
                'code' => '010203040506070809',
                'title' => 'Titulo do imovel 001',
                'slug' => 'titulo-do-imovel',
                'description' => 'Teste de descrição do imovel',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($properties as $p) {
            if (Property::where('slug', $p['slug'])->doesntExist()) {
                Property::create($p);
            }
        }
    }

    public function createPlans(){
        if (DB::table('account_plans')->where('id', 1)->doesntExist()) {
            $plans = [
                [
                    'status' => 1,
                    'name' => 'Free',
                    'description' => 'Plano free',
                    'price' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'status' => 1,
                    'name' => 'Basico',
                    'description' => 'Plano basico',
                    'price' => 99.00,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            ];
            foreach ($plans as $plan) {
                DB::table('account_plans')->insert($plan);
            }
        }
    }

    public function createAccounts(){
        if (DB::table('accounts')->where('id', 1)->doesntExist()) {
            $accounts = [
                [
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            ];
            foreach ($accounts as $account) {
                DB::table('accounts')->insert($account);
            }
        }
    }

    public function createUsers()
    {
        $users = [
            [
                'name' => 'Rafael Zingano',
                'account_id' => 1,
                'email' => 'confrariaweb@gmail.com',
                'password' => Hash::make('123456789'),
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($users as $user) {
            if (User::where('email', $user['email'])->doesntExist()) {
                User::create($user);
            }
        }
    }

    public function createTemplates(){
        $templates = [
            [
                'title' => 'Agents',
                'slug' => 'agents',
                'user_id' => NULL,
                'path' => 'agents',
                'status' => 1,
                'options' => json_encode([
                    'color' => ['label' => 'Cor', 'type' => 'color'],
                    'main_title' => ['label' => 'Título principal', 'type' => 'text'],
                    'sub_title' => ['label' => 'Sub-título', 'type' => 'text'],
                ]),
            ]
        ];

        foreach ($templates as $template) {
            if (DB::table('templates')->where('slug', $template['slug'])->doesntExist()) {
                DB::table('templates')->insert($template);
            }
        }
    }

    private function createRoles()
    {
        $roles_table = config('cw_acl.roles_table', 'acl_roles');
        $roles = [
            [
                'name' => 'administrator',
                'display_name' => 'Administrador',
                'description' => 'Administrador do sistema'
            ],
            [
                'name' => 'guest',
                'display_name' => 'Convidado',
                'description' => 'Convidado do sistema'
            ],
        ];
        foreach ($roles as $role) {
            if (DB::table($roles_table)->where('name', $role['name'])->doesntExist()) {
                DB::table($roles_table)->insert($role);
            }
        }
    }

    private function createPermissions()
    {
        $permissions_table = config('cw_acl.permissions_table', 'acl_permissions');
        $permissions = [
            [
                'name' => 'dashboard',
                'display_name' => 'Dashboard',
                'description' => 'Dashboard',
            ],
            [
                'name' => 'dashboard.roles.index',
                'display_name' => 'Lista de perfis',
                'description' => 'Lista de perfis',
            ],
            [
                'name' => 'dashboard.roles.create',
                'display_name' => 'Criar perfil',
                'description' => 'Criar perfil',
            ],
            [
                'name' => 'dashboard.roles.show',
                'display_name' => 'Ver perfil',
                'description' => 'Ver perfil',
            ],
            [
                'name' => 'dashboard.roles.edit',
                'display_name' => 'Editar perfil',
                'description' => 'Editar perfil',
            ],
            [
                'name' => 'dashboard.roles.destroy',
                'display_name' => 'Deletar perfil',
                'description' => 'Deletar perfil',
            ],
        ];
        foreach ($permissions as $permission) {
            if (DB::table($permissions_table)->where('name', $permission['name'])->doesntExist()) {
                DB::table($permissions_table)->insert($permission);
            }
        }
    }

    private function createDomains()
    {
        $domains = [
            [
                'domain' => 'localhost.com',
                'user_id' => 1,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'domain' => 'localhost.com.br',
                'user_id' => 1,
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'domain' => 'localhost.io',
                'user_id' => 1,
                'status' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($domains as $domain) {
            if (DB::table('domains')->where('domain', $domain['domain'])->doesntExist()) {
                DB::table('domains')->insert($domain);
            }
        }
    }

}
