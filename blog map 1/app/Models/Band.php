<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Band extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'imgname','admins','band_leden','band_omschrijving','band_achtergrond_kleur','band_letter_kleur','youtube_video1','youtube_video2','youtube_video3'
    ];


    public static function getBandsByAdmin($user_id){
      $bands = Band::where('admins', '=', $user_id);
      return $bands;
    }

    public function isAdmin() {
      $user = Auth::user();
      if ($user != null) {
        foreach ($this->users as $admin) {
          if ($admin->id ==$user->id) {
            return true;
          }
        }
      }
      return false;
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public static function myBands($user_id){
        return   Band::join('band_user', 'bands.id', '=', 'band_user.band_id')->where('band_user.user_id', '=', $user_id)->get();
    }
}
