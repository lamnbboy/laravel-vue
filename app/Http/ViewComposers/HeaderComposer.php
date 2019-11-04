<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\User;

/**
 *  
 */
class HeaderComposer
{
  
  protected $user_login;

  function __construct()
  {
    $user_login = User::where('id', 1)->first();
  }

  public function compose(View $view)
  {
    $view->with('user_login', $this->user_login);
  }
}