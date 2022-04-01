<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;
use GuzzleHttp\Client;

class CurrencyController extends Controller
{
    public function test()
    {
        $client = new Client();
        $renponse = $client -> get('https://openexchangerates.org/api/currencies.json');
        if($renponse-> getStatusCode() == 200){
            $result = json_decode($renponse->getBody(), true);
            foreach($result as $key => $value)
            {
                Currency::create([
                    'short_name' => $key,
                    'country' => $value
                ]);
            }
        }
        return veiw('test', ['currency' ->$result]);
    }
}
