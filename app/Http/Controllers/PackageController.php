<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

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
                $packageCard .= "<x-package-card route='dashboard'>
                                    <x-slot name='title'>$package->name</x-slot>
                                    <li>$package->price</li>
                                    <li>$package->personCount</li>
                                    <li>$package->dayPart</li>
                                    <x-slot name='button'>View Details</x-slot>
                                </x-package-card>";
            }
        }


        $data = [
            'packageCard' => $packageCard,
        ];
        return view('welcome', $data);
    }
}
