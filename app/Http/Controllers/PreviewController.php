<?php
// app/Http/Controllers/PreviewController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Preview;
use App\Models\Button;

class PreviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'displayPreviewClass' => 'required|string',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titlePreview' => 'required|string',
            'aboutPreview' => 'required|string',
            'socialButtons' => 'nullable|array',
            'linkButtons' => 'nullable|array',
        ]);

        $bannerPath = $request->file('banner')->store('uploads', 'public');
        $profilePath = $request->file('profile')->store('uploads', 'public');

        $preview = new Preview();
        $preview->display_preview_class = $request->displayPreviewClass;
        $preview->banner_preview = Storage::url($bannerPath);
        $preview->profile_preview = Storage::url($profilePath);
        $preview->title_preview = $request->titlePreview;
        $preview->about_preview = $request->aboutPreview;
        $preview->save();

        if ($request->has('socialButtons')) {
            foreach ($request->socialButtons as $socialButton) {
                Button::create([
                    'preview_id' => $preview->id,
                    'type' => 'social',
                    'url' => $socialButton,
                ]);
            }
        }

        if ($request->has('linkButtons')) {
            foreach ($request->linkButtons as $linkButton) {
                Button::create([
                    'preview_id' => $preview->id,
                    'type' => 'link',
                    'text' => $linkButton['text'],
                    'url' => $linkButton['url'],
                ]);
            }
        }

        return redirect()->back()->with('success', 'Previews saved successfully!');
    }
}

