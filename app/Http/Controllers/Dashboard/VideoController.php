<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index(){

        $videos= video::get();

        return view('dashboard.video.index',compact('videos'));
    }


    public function create(){

        return view('dashboard.video.create');
    }


    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
        $video = new Video;
        $video->title = $request->title;
        if ($request->hasFile('video'))
        {
            $path = $request->file('video')->store('video', 'public');
            $video->video = $path;
        }
        $video->save();
        return redirect()->route('admin.videos.index');
    }

    public function edit(Video $video)
    {
        $data['tag'] = $video;
        return view('dashboard.tags.edit', $data);
    }
    public function update(Request $request, Video $video)
    {
        if ($request->hasFile('video')) {
            $vid = $request->file('video')->store('video', 'public');
            Storage::disk('public')->delete($video->image_path);
            $data['image_path'] = $vid;
        }
        $video->update($data);
        session()->flash('success', __("video updated"));
        return redirect()->route('admin.videos.index');
    }
    public function destroy(Video $video)
    {
        $video->delete();
        session()->flash('warning', __("Video  deleted !!"));
        return redirect()->route('admin.videos.index');
    }

}
