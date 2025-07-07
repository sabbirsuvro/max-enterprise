<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Hero;
use App\Models\Cleaning;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Tesimonial;
use App\Models\Video;
use App\Models\Website;
use App\Models\Clientcontact;
use App\Models\Codepush;

class AdminController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }

    public function ckupload(Request $request){

        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/uploads', $filename);

            $url = Storage::url($path);

            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }

        return response()->json([
            'uploaded' => false,
            'error' => [
                'message' => 'No file uploaded.'
            ]
        ]);
    }

    public function heromanage(){
        $hero = Hero::first();
        return view('backend.pages.hero.manage', compact('hero'));
    }

    public function heroedit($id) {
        $hero = Hero::findorfail($id);
        return view('backend.pages.hero.edit', compact('hero')) ;
    }

    public function heroupdate($id, Request $request) {

        $post = Hero::findorfail($id);
        $validated = $request->validate([
            'bgimg' => 'nullable',
            'img' => 'nullable',
            'title1' => 'nullable',
            'title2' => 'nullable',
            'wave' => 'nullable',
            'project' => 'nullable',
            'cleaner' => 'nullable',
            'customer' => 'nullable',

        ]);

        $input = $request->all();

        if ($image = $request->file('bgimg')) {
            $destinationPath = 'image/hero/';
            $profileImage = date('YmdHis') . "_bg." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['bgimg'] = "$profileImage";
        }else{
            unset($input['bgimg']);
        }

        if ($image = $request->file('img')) {
            $destinationPath = 'image/hero/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }else{
            unset($input['img']);
        }

        $post->update($input);

        return redirect()->route('heromanage')->with('alert', 'post updated');
    }

    public function cleaningmanage(){
        $cleaning = Cleaning::all();
        return view('backend.pages.cleaning.manage', compact('cleaning'));
    }

    public function cleaningcreate(){
        return view('backend.pages.cleaning.create');
    }

    public function cleaningstore(Request $request) {

        $validated = $request->validate([
            'name' => 'nullable',
            'sdes' => 'nullable',
            'des' => 'nullable',
            'img' => 'nullable',
            'type' => 'nullable',
        ]);

        $input = $request->all();
        if ($image = $request->file('img')) {
            $destinationPath = 'image/cleaning/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }
        Cleaning::create($input);

        return redirect()->route('cleaningmanage')->with('alert', 'post created');
    }

    public function cleaningedit($id) {
        $cleaning = Cleaning::findorfail($id);
        return view('backend.pages.cleaning.edit', compact('cleaning')) ;
    }

    public function cleaningupdate($id, Request $request) {

        $post = Cleaning::findorfail($id);
        $validated = $request->validate([
            'name' => 'nullable',
            'sdes' => 'nullable',
            'des' => 'nullable',
            'img' => 'nullable',
            'type' => 'nullable',
        ]);

        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'image/cleaning/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }else{
            unset($input['img']);
        }

        $post->update($input);

        return redirect()->route('cleaningmanage')->with('alert', 'post updated');
    }

    public function aboutmanage(){
        $about = About::first();
        return view('backend.pages.about.manage', compact('about'));
    }

    public function aboutedit($id) {
        $about = About::findorfail($id);
        return view('backend.pages.about.edit', compact('about')) ;
    }

    public function aboutupdate($id, Request $request) {

        $post = About::findorfail($id);
        $validated = $request->validate([
            'img1' => 'nullable',
            'img2' => 'nullable',
            'img3' => 'nullable',
            'video' => 'nullable',
            'year' => 'nullable',
            'des' => 'nullable',
            'wptitle1' => 'nullable',
            'wptitle2' => 'nullable',
            'wptitle3' => 'nullable',
            'wptitle4' => 'nullable',
            'wpdes1' => 'nullable',
            'wpdes2' => 'nullable',
            'wpdes3' => 'nullable',
            'wpdes4' => 'nullable',
        ]);

        $input = $request->all();

        if ($image = $request->file('img1')) {
            $destinationPath = 'image/about/';
            $profileImage = date('YmdHis') . "left." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img1'] = "$profileImage";
        }else{
            unset($input['img1']);
        }
        if ($image = $request->file('img2')) {
            $destinationPath = 'image/about/';
            $profileImage = date('YmdHis') . "vimg." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img2'] = "$profileImage";
        }else{
            unset($input['img2']);
        }
        if ($image = $request->file('img3')) {
            $destinationPath = 'image/about/';
            $profileImage = date('YmdHis') . "right." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img3'] = "$profileImage";
        }else{
            unset($input['img3']);
        }
        $post->update($input);

        return redirect()->route('aboutmanage')->with('alert', 'post updated');
    }

    public function portfoliomanage(){
        $portfolio = Portfolio::all();
        return view('backend.pages.portfolio.manage', compact('portfolio'));
    }

    public function portfoliocreate(){
        $cleaning = Cleaning::whereIn('type', ['cleaning_service', 'pestcontrol_service', 'manpower_service'])
                    ->latest()
                    ->get();

        return view('backend.pages.portfolio.create', compact('cleaning'));
    }

    public function portfoliostore(Request $request) {

        $validated = $request->validate([
            'title' => 'nullable',
            'service' => 'nullable',
            'img' => 'nullable',
        ]);

        $input = $request->all();
        if ($image = $request->file('img')) {
            $destinationPath = 'image/portfolio/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }
        Portfolio::create($input);

        return redirect()->route('portfoliomanage')->with('alert', 'post created');
    }

    public function portfolioedit($id) {
        $portfolio = Portfolio::findorfail($id);
        $cleaning = Cleaning::whereIn('type', ['cleaning_service', 'pestcontrol_service', 'manpower_service'])
                    ->latest()
                    ->get();
        return view('backend.pages.portfolio.edit', compact('portfolio','cleaning')) ;
    }

    public function portfolioupdate($id, Request $request) {

        $post = Portfolio::findorfail($id);
        $validated = $request->validate([
            'title' => 'nullable',
            'service' => 'nullable',
            'img' => 'nullable',
        ]);

        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'image/portfolio/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }else{
            unset($input['img']);
        }

        $post->update($input);

        return redirect()->route('portfoliomanage')->with('alert', 'post updated');
    }

    public function portfoliodelete($id) {
        $post = Portfolio::findorfail($id);
        $post->delete();
        return redirect()->route('portfoliomanage')->with('alert', 'post deleted');
    }

    public function tesimonialmanage(){
        $tesimonial = Tesimonial::all();
        return view('backend.pages.tesimonial.manage', compact('tesimonial'));
    }

    public function tesimonialcreate(){
        $cleaning = Cleaning::whereIn('type', ['cleaning_service', 'pestcontrol_service', 'manpower_service'])
                    ->latest()
                    ->get();

        return view('backend.pages.tesimonial.create', compact('cleaning'));
    }

    public function tesimonialstore(Request $request) {

        $validated = $request->validate([
            'name' => 'nullable',
            'desig' => 'nullable',
            'service' => 'nullable',
            'review' => 'nullable',
        ]);

        $input = $request->all();

        Tesimonial::create($input);

        return redirect()->route('tesimonialmanage')->with('alert', 'post created');
    }

    public function tesimonialedit($id) {
        $tesimonial = Tesimonial::findorfail($id);
        $cleaning = Cleaning::whereIn('type', ['cleaning_service', 'pestcontrol_service', 'manpower_service'])
                    ->latest()
                    ->get();
        return view('backend.pages.tesimonial.edit', compact('tesimonial','cleaning')) ;
    }

    public function tesimonialupdate($id, Request $request) {

        $post = Tesimonial::findorfail($id);
        $validated = $request->validate([
            'name' => 'nullable',
            'desig' => 'nullable',
            'service' => 'nullable',
            'review' => 'nullable',
        ]);

        $input = $request->all();
        $post->update($input);

        return redirect()->route('tesimonialmanage')->with('alert', 'post updated');
    }

    public function tesimonialdelete($id) {
        $post = Tesimonial::findorfail($id);
        $post->delete();
        return redirect()->route('tesimonialmanage')->with('alert', 'post deleted');
    }

    public function videomanage(){
        $video = Video::with('cleaning')->get();
        return view('backend.pages.video.manage', compact('video'));
    }

    public function videocreate(){
        $cleaning = Cleaning::whereIn('type', ['cleaning_service', 'pestcontrol_service', 'manpower_service'])
                    ->latest()
                    ->get();

        return view('backend.pages.video.create', compact('cleaning'));
    }

    public function videostore(Request $request) {

        $validated = $request->validate([
            'service' => 'nullable',
            'embedid' => 'nullable',
        ]);

        $input = $request->all();

        Video::create($input);

        return redirect()->route('videomanage')->with('alert', 'post created');
    }

    public function videoedit($id) {
        $video = Video::findorfail($id);
        $cleaning = Cleaning::whereIn('type', ['cleaning_service', 'pestcontrol_service', 'manpower_service'])
                    ->latest()
                    ->get();
        return view('backend.pages.video.edit', compact('video','cleaning')) ;
    }

    public function videoupdate($id, Request $request) {

        $post = Video::findorfail($id);
        $validated = $request->validate([
            'service' => 'nullable',
            'embedid' => 'nullable',
        ]);

        $input = $request->all();
        $post->update($input);

        return redirect()->route('videomanage')->with('alert', 'post updated');
    }

    public function videodelete($id) {
        $post = Video::findorfail($id);
        $post->delete();
        return redirect()->route('videomanage')->with('alert', 'post deleted');
    }

    public function websitemanage(){
        $website = Website::first();
        return view('backend.pages.website.manage', compact('website'));
    }

    public function websiteedit($id) {
        $website = Website::findorfail($id);
        return view('backend.pages.website.edit', compact('website')) ;
    }

    public function websiteupdate($id, Request $request) {

        $post = Website::findorfail($id);
        $validated = $request->validate([
            'name'     => 'nullable',
            'slogan'   => 'nullable',
            'address'  => 'nullable',
            'phone'    => 'nullable',
            'hour'     => 'nullable',
            'email'    => 'nullable',
            'fb'       => 'nullable',
            'twitter'  => 'nullable',
            'linkedin' => 'nullable',
            'insta'    => 'nullable',
            'youtube'  => 'nullable',
            'logo'     => 'nullable',
            'icon'     => 'nullable',
        ]);

        $input = $request->all();

        if ($image = $request->file('logo')) {
            $destinationPath = 'image/website/';
            $profileImage = date('YmdHis') . "_logo." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['logo'] = "$profileImage";
        }else{
            unset($input['logo']);
        }

        if ($image = $request->file('icon')) {
            $destinationPath = 'image/website/';
            $profileImage = date('YmdHis') . "icon." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['icon'] = "$profileImage";
        }else{
            unset($input['icon']);
        }

        $post->update($input);

        return redirect()->route('websitemanage')->with('alert', 'post updated');
    }


    public function clientcontactmanage(){
        $clientcontact = Clientcontact::all();
        return view('backend.pages.clientcontact.manage', compact('clientcontact'));
    }

    public function clientcontactdelete($id) {
        $post = Clientcontact::findorfail($id);
        $post->delete();
        return redirect()->route('clientcontactmanage')->with('alert', 'post deleted');
    }

    public function codepushmanage(){
        $codepush = Codepush::all();
        return view('backend.pages.codepush.manage', compact('codepush'));
    }

    public function codepushedit($id) {
        $codepush = Codepush::findorfail($id);
        return view('backend.pages.codepush.edit', compact('codepush')) ;
    }

    public function codepushupdate($id, Request $request) {

        $post = Codepush::findorfail($id);
        $validated = $request->validate([
            'header' => 'nullable',
            'body' => 'nullable',
            'footer' => 'nullable',
        ]);

        $input = $request->all();
        $post->update($input);

        return redirect()->route('codepushmanage')->with('alert', 'post updated');
    }

}
