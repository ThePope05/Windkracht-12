<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PackageController extends Controller
{
    private $packageModel;

    public function __construct(Package $packageModel)
    {
        $this->packageModel = $packageModel;
    }

    public function index()
    {
        $result = $this->packageModel->getPackages();


        if ($result->isEmpty()) {
            $packageCard = '';
        } else {
            $packageCard = '';

            foreach ($result as $package) {
                $xpackagecard = View::make(
                    'components.package-card',
                    [
                        'title' => $package->name,
                        'attributes' => [
                            'route' => 'dashboard',
                        ],
                        'slot' => "<li>$package->price</li>
                            <li>$package->personCount</li>
                            <li>$package->dayPart</li>",
                        'button' => 'View Details',
                    ]
                )->render();

                $packageCard .= $xpackagecard;
            }
        }


        $data = [
            'packageCard' => $packageCard,
        ];

        return view('welcome', $data);
    }
}
