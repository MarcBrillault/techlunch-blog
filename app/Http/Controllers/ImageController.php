<?php

namespace App\Http\Controllers;

use App\Post;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    const SIZES = [
        'post'     => [900, 300],
        'postHome' => [750, 300],
    ];

    public function post($id)
    {
        $sizes = self::SIZES['post'];
        $post  = Post::where('id', $id)->firstOrFail();

        return Image::make($post->image)
            ->fit($sizes[0], $sizes[1])
            ->response('jpg', 90);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function postHome($id)
    {
        $sizes = self::SIZES['postHome'];
        $post  = Post::where('id', $id)->firstOrFail();

        return Image::make($post->image)
            ->fit($sizes[0], $sizes[1])
            ->response('jpg', 90);
    }

}
