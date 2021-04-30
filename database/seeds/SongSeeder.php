<?php

use Illuminate\Database\Seeder;
use App\Laravel\Models\Song;
class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = Song::firstOrNew([
            'artist' => "Maroon 5",
            'title' => 'She will Be Love',
            'lyrics' => "Beauty queen of only eighteen, she had some trouble with herself
							He was always there to help her, she always belonged to someone else
							I drove for miles and miles, and wound up at your door
							I've had you so many times, but somehow I want more

							I don't mind spending every day
							Out on your corner in the pouring rain
							Look for the girl with the broken smile
							Ask her if she wants to stay a while
							And she will be loved
							And she will be loved

							Tap on my window, knock on my door, I want to make you feel beautiful
							I know I tend to get so insecure, it doesn't matter anymore
							It's not always rainbows and butterflies, it's compromise that moves us along, yeah
							My heart is full and my door's always open, you come anytime you want, yeah

							I don't mind spending every day
							Out on…", 
  
        ]);

          $song->save();
    }
}
