<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Permission::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $permissions = [
            'super admin',
            
            // RA Roles
            'lihat ra',
            'edit ra',
            'hapus ra',
            'tambah ra',
            'detail ra',
            'kelulusan ra',
            'laporan ra',
            
            // MTS Roles
            'lihat mts',
            'edit mts',
            'hapus mts',
            'tambah mts',
            'detail mts',
            'kelulusan mts',
            'laporan mts',

            // SMP Roles
            'lihat smp',
            'edit smp',
            'hapus smp',
            'tambah smp',
            'detail smp',
            'kelulusan smp',
            'laporan smp',

            // SMA Roles
            'lihat sma',
            'edit sma',
            'hapus sma',
            'tambah sma',
            'detail sma',
            'kelulusan sma',
            'laporan sma',

            // MA Roles
            'lihat ma',
            'edit ma',
            'hapus ma',
            'tambah ma',
            'detail ma',
            'kelulusan ma',
            'laporan ma',

            // SMK Roles
            'lihat smk',
            'edit smk',
            'hapus smk',
            'tambah smk',
            'detail smk',
            'kelulusan smk',
            'laporan smk',
        ];
        foreach($permissions as $permission)
        {
            if(!Permission::where('name',$permission)->exists())
                Permission::create(['guard_name' => 'web', 'name' => $permission]);
        }
    }
}
