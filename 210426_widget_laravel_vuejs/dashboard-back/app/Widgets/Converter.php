<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use AshAllenDesign\LaravelExchangeRates\ExchangeRate;
use Guzzle\Http\Exception\ClientErrorResponseException;
use carbon\Carbon;

class Converter extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //code here

        return view('widgets.converter', [
            'config' => $this->config,
        ]);

    }
    public function exchangeCurrency(Request $request) {

      $amount = ($request->amount)?($request->amount):(1);

      $apikey = '3bee40da1950fd9e69d4';

      $from_Currency = urlencode($request->from_currency);
      $to_Currency = urlencode($request->to_currency);
      $query = "{$from_Currency}_{$to_Currency}";

      $json = file_get_contents("https://free.currconv.com/api/v7/convert?q=USD_PHP&compact=ultra&apiKey=3bee40da1950fd9e69d4");

      $obj = json_decode($json, true);

      $val = $obj["$query"];

      $total = $val['val'] * 1;

      $formatValue = number_format($total, 2, '.', '');

      $data = "$amount $from_Currency = $to_Currency $formatValue";

      echo $data; die;

   }
}

?>
