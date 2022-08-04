<?php

namespace App\Models;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    public function route($route, $parameters = [], $absolute = true)
    {
        $domain = $this->domains->first()->domain;
     
        $parts = explode('.', $domain);
     
        if (count($parts) === 1) { 
            $domain = Domain::domainFromSubdomain($domain);
        }
     
        return tenant_route($domain, $route, $parameters, $absolute);
    }
}