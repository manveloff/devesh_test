<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

//---------//
// General //
//---------//

  /** Table name */
  protected $table = 'bubbles.posts';

  /** Timestamps auto maintenance on/off */
  public $timestamps = true;

  /** Mass assignment white list */
  protected $fillable = [
    'title',
    'description'
  ];

  /** Columns to hide when converting a model to an array/json */
  protected $hidden = [
    'updated_at'
  ];

  /** Columns to append */
  protected $appends = [];

}
