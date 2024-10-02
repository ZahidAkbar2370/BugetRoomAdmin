<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;

class AdsController extends Controller
{
    // show data
    public function index()
    {
        $allAds = Ads::orderBy('id', 'DESC')->get();

        if(isset($_GET['publication_status']) && $_GET['publication_status'] != ''){
            $allAds = Ads::where('publication_status', $_GET['publication_status'])->orderBy('id', 'DESC')->get();
        }

        if(isset($_GET['ads_listing_payment_status']) && $_GET['ads_listing_payment_status'] != ''){
            $allAds = Ads::where('ads_listing_payment_status', $_GET['ads_listing_payment_status'])->orderBy('id', 'DESC')->get();
        }

        if(isset($_GET['ads_listing_type']) && $_GET['ads_listing_type'] != ''){
            $allAds = Ads::where('ads_listing_type', $_GET['ads_listing_type'])->orderBy('id', 'DESC')->get();
        }

        return view('admin.ads.view', compact('allAds'));
    }

    public function show($id)
    {
        $ad = Ads::find($id);
        return view('admin.ads.shows', compact('ad'));
    }

    public function updatePaymentStatus(Request $request)
    {

        $ad = Ads::find($request->ad_id);
        $ad->ads_listing_payment_status = $request->status;
        $ad->save();

        return response()->json(['message' => 'Payment status updated successfully']);
    }

    public function updatePublicationStatus(Request $request)
    {

        $ad = Ads::find($request->ad_id);
        $ad->publication_status = $request->status;
        $ad->save();

        return response()->json(['message' => 'Publication status updated successfully']);
    }

}
