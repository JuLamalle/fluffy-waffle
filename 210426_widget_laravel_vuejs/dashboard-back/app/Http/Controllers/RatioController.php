<?php
namespace App\Http\Controllers;
use App\Ratio;
use Illuminate\Http\Request;

class RatioController extends Controller
{

// a method for fetching the desired ratio from the database
    public function get_ratios(Request $request)
    {
      $validated = $request->validate([
        'currency_from' => 'required|int',
        'currency_to' => 'required|int',
      ]);
      $ratio = Ratio::where('currency_from_id', $validated['currency_from'])
          ->where('currency_to_id', $validated['currency_to'])
          ->first();

      return response()->json($ratio);
    }

// a method for adding new get_ratios.
    public function set_ratios(Request $request)
    {
      $validated = $request->validate([
        'currency_from' => 'required|int',
        'currency_to' => 'required|int',
        'ratio' => 'required|numeric'
      ]);

// check if the currencies pair is comprised from different currencies
      if ($validated['currency_from'] == $validated['currency_to']) {
        return response()->json();
      }
// check if the pair already exists in the db
      $ratio = Ratio::where('currency_from_id', $validated['currency_from'])
          ->where('currency_to_id', $validated['currency_to'])
          ->first();
// if the pair does not exist create a new pair
      if ($ratio == null) {
        $ratio1 = new Ratio;
        $ratio1->currency_from_id = $validated['currency_from'];
        $ratio1->currency_to_id = $validated['currency_to'];
        $ratio1->ratio = $validated['ratio'];
        $ratio1->save();

        $ratio2 = new Ratio;
        $ratio2->currency_from_id = $validated['currency_to'];
        $ratio2->currency_to_id = $validated['currency_from'];
        $ratio2->ratio = (1/$validated['ratio']);
        $ratio2->save();

      } else {
        $ratio1 = Ratio::where('currency_from_id', $validated['currency_from'])
            ->where('currency_to_id', $validated['currency_to'])
            ->first();
        $ratio1->ratio = $validated['ratio'];
        $ratio1->save();

        $ratio2 = Ratio::where('currency_to_id', $validated['currency_from'])
            ->where('currency_from_id', $validated['currency_to'])
            ->first();
        $ratio2->ratio = (1/$validated['ratio']);
        $ratio2->save();
      }
      return response()->json();
    }

}
