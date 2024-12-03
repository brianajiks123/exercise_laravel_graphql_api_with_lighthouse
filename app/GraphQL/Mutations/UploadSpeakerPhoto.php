<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Speaker;

final readonly class UploadSpeakerPhoto
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $file = $args["photo"];

        $speaker = Speaker::find($args["id"]);

        $path = $file->storePublicly("public/speakers", "local");

        $speaker->update([
            'photo' => $path
        ]);

        return $speaker;
    }
}
