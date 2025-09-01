<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');

    }
    // End of Method



    public function webdevelopment()
    {
        return view('frontend.Services.webdevelopment');
    } //End of Method

 
    // Service Section menu

    public function customsoftware()
    {
        return view('frontend.Services.customsoftware');
    } //End of Method


    public function MobileApps()
    {
        return view('frontend.Services.MobileApps');
    } //End of Method


    public function websitehosting()
    {
        return view('frontend.Services.websitehosting');
    } //End of Method

    public function graphicdesigning()
    {
        return view('frontend.Services.graphicdesigning');
    } //End of Method

    public function computerhardware()
    {
        return view('frontend.Services.computerhardware');
    } //End of Method


    public function itconsulting()
    {
        return view('frontend.Services.itconsulting');
    } //End of Method


    public function digitalmarketing()
    {
        return view('frontend.Services.digitalmarketing');
    } //End of Method

    public function cybersecurityservice()
    {
        return view('frontend.Services.cybersecurityservice');
    } //End of Method


    public function printingservice()
    {
        return view('frontend.Services.printingservice');
    } //End of Method

    public function uiuxdesigning()
    {
        return view('frontend.Services.uiuxdesigning');
    } //End of Method


 // Industry Section Menu

    public function healthcare()
    {
        return view('frontend.industry.healthcare');
    } //End of Method

    public function realestate()
    {
        return view('frontend.industry.realestate');
    } //End of Method


    public function hotel_hospitality()
    {
        return view('frontend.industry.hotel_hospitality');
    } //End of Method


    
    public function education()
    {
        return view('frontend.industry.education');
    } //End of Method

    public function finance_fintech()
    {
        return view('frontend.industry.finance_fintech');
    } //End of Method



    public function retail()
    {
        return view('frontend.industry.retail');
    } //End of Method


    public function agriculture()
    {
        return view('frontend.industry.agriculture');
    } //End of Method


    // About Us Section Menu 

    public function aboutus()
    {
        return view('frontend.about_us.aboutus');
    } //End of Method

    public function teammember()
    {
        return view('frontend.about_us.teammember');
    } //End of Method

    public function carrers()
    {
        return view('frontend.about_us.carrers');
    } //End of Method


    // Current Projects Section  Menu //

    public function projects()
    {
        return view('frontend.current_project.projects');
    } //End of Method



    public function Contactus()
    {
        return view('frontend.about_us.Contactus');
    } //End of Method


}
