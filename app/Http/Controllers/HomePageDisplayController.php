<?php

namespace App\Http\Controllers;

use App\Repositories\HomePageRepository;
use Illuminate\Http\Request;

class HomePageDisplayController extends Controller
{
  public function __construct(private HomePageRepository $repo)
  {
  }

  public function index()
  {
    $data = $this->repo->get();

    return view('home', ['data' => $data->first()]);
  }
}
