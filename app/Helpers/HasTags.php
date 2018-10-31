<?php

namespace App\Helpers;

use App\Tag;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasTags
{
    /**
     * @return \App\Tag[]
     */
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    /**
     * @param \App\Tag[]|int[] $tags
     */
    public function syncTags(array $tags)
    {
        $this->save();
        $this->tagsRelation()->sync($tags);
    }

    public function removeTags()
    {
        $this->tagsRelation()->detach();
    }

    public function tagsRelation(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
    }
}
