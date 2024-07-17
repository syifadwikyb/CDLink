<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preview;
use App\Models\Button;
use Illuminate\Support\Facades\Storage;

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
            'socialButtons.*.url' => 'nullable|string',
            'socialButtons.*.icon' => 'nullable|string',
            'linkButtons.*.text' => 'nullable|string',
            'linkButtons.*.url' => 'nullable|string',
        ]);

        $bannerPath = $request->file('banner')->store('uploads', 'public');
        $profilePath = $request->file('profile')->store('uploads', 'public');

        $preview = Preview::updateOrCreate(
            ['user_id' => $request->user()->id],
            [
                'display_preview_class' => $request->displayPreviewClass,
                'banner_preview' => Storage::url($bannerPath),
                'profile_preview' => Storage::url($profilePath),
                'title_preview' => $request->titlePreview,
                'about_preview' => $request->aboutPreview,
            ]
        );

        if ($request->has('socialButtons')) {
            foreach ($request->socialButtons as $socialButton) {
                Button::updateOrCreate(
                    ['preview_id' => $preview->id, 'url' => $socialButton['url']],
                    [
                        'type' => 'social',
                        'text' => $socialButton['icon'],
                        'url' => $socialButton['url'],
                    ]
                );
            }
        }

        if ($request->has('linkButtons')) {
            foreach ($request->linkButtons as $linkButton) {
                Button::updateOrCreate(
                    ['preview_id' => $preview->id, 'url' => $linkButton['url']],
                    [
                        'type' => 'link',
                        'text' => $linkButton['text'],
                        'url' => $linkButton['url'],
                    ]
                );
            }
        }

        return redirect()->back()->with('success', 'Previews saved successfully!');
    }
}
