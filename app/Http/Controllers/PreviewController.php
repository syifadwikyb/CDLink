<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preview;

class PreviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'displayPreviewClass' => 'required|string',
            'bannerPreview' => 'required|string',
            'profilePreview' => 'required|string',
            'titlePreview' => 'required|string',
            'aboutPreview' => 'required|string',
        ]);

        $preview = new Preview();
        $preview->display_preview_class = $request->displayPreviewClass; // Corrected
        $preview->banner_preview = $request->bannerPreview;
        $preview->profile_preview = $request->profilePreview;
        $preview->title_preview = $request->titlePreview;
        $preview->about_preview = $request->aboutPreview;
        $preview->save();

        return redirect()->back()->with('success', 'Previews saved successfully!');
    }
}
