<?php

namespace App\Http\Controllers\Offer;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeOffer;
use App\Mail\CreateOfferForSUbCateogry;
use App\Models\Category;
use App\Models\Offer;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OfferController extends Controller
{
    public function index()
    {
    }
    public function createForSubCategory()
    {
        $sub_categories = Category::all();
        return view('Admin.Categories.SubCategory.add-offer-sub-category', compact('sub_categories'));
    }

    public function store(storeOffer $request)
    {
        try {
            $new_offer = $this->saveDate($request);

            $this->sendEmailToAllClient($new_offer);

            return redirect()->route('admin.calendar');
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function saveDate($request)
    {
        $new_offer = new Offer();

        $file = $request->file('img');

        $new_offer->fill([
            'OfferName' => ['en' => trim($request->get('OfferName_en')), 'ar' => trim($request->get('OfferName_ar'))],
            'desc' => ['en' => trim($request->get('desc_en')), 'ar' => trim($request->get('desc_ar'))],
            'startDate' => Carbon::parse($request->get('startdate')),
            'EndDate' => Carbon::parse($request->get('EndDate')),
            'DiscountPercentage' => trim($request->get('DiscountPercentage')),
            'pathImg' => 'uploads/imgOffer/' . $file->getClientOriginalName(),
        ]);

        $destinationPath = 'uploads/imgOffer';

        if ($file->move($destinationPath, $file->getClientOriginalName())) {

            $new_offer->save();

            if (!$new_offer) {
                throw new Exception('Failed to save offer.');
            } else {
                return $new_offer;
            }
        } else {
            throw new Exception('Error with save img');
        }
    }

    public function sendEmailToAllClient($new_offer)
    {
        Mail::to(Auth::guard('admin')->user()->email)->send(new CreateOfferForSUbCateogry($new_offer));
        $users = User::all();
        foreach ($users as $key => $user) {
            Mail::to($user->email)->send(new CreateOfferForSUbCateogry($new_offer));
        }
    }


    public function saveImg($request, $new_offer)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function show(string $id)
    {
    }

    public function showCalendar()
    {
        $allOffer = Offer::all();
        return view('Admin.Calendar.calender', compact('allOffer'));
    }


    public function destroy(string $id)
    {
    }
}
