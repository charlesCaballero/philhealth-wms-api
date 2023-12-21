<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class LaravelPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $custodianRole = Role::create(['name' => 'custodian']);
        $userRole = Role::create(['name' => 'user']);

        // Create permissions
        $accessPendingRequest = Permission::create(['name' => 'access-module-pending-requests']);
        $accessOngoingRequest = Permission::create(['name' => 'access-module-ongoing-requests']);
        $accessStorageRequest = Permission::create(['name' => 'access-module-storage-requests']);
        $accessWithdrawalRequest = Permission::create(['name' => 'access-module-withdrawal-requests']);
        $accessReturnRequest = Permission::create(['name' => 'access-module-return-requests']);
        $accessDisposalRequest = Permission::create(['name' => 'access-module-disposal-requests']);
        $accessInventory = Permission::create(['name' => 'access-module-inventory']);
        $accessInventoryReports = Permission::create(['name' => 'access-module-inventory-reports']);
        $accessOffices = Permission::create(['name' => 'access-module-offices']);
        $accessUsers = Permission::create(['name' => 'access-module-users']);
        $accessMaps = Permission::create(['name' => 'access-module-maps']);
        $accessGlossary = Permission::create(['name' => 'access-module-glossary']);

        // Assign permissions to roles
        // Assign multiple permissions to the admin role
        $adminRole->givePermissionTo([
            $accessPendingRequest ,
            $accessOngoingRequest ,
            $accessStorageRequest ,
            $accessWithdrawalRequest ,
            $accessReturnRequest,
            $accessDisposalRequest ,
            $accessInventory ,
            $accessInventoryReports,
            $accessOffices ,
            $accessUsers ,
            $accessMaps ,
            $accessGlossary
        ]);
        $custodianRole->givePermissionTo([
            $accessPendingRequest ,
            $accessMaps ,
            $accessGlossary
        ]);
        $userRole->givePermissionTo([
            $accessStorageRequest ,
            $accessWithdrawalRequest ,
            $accessReturnRequest,
            $accessDisposalRequest ,
            $accessInventory ,
            $accessInventoryReports,
            $accessMaps ,
            $accessGlossary
        ]);
    }
}
