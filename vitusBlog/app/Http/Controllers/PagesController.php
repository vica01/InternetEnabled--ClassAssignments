<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
  public function getHome(){
    $first = 'Emmanuel';
    $second = 'Vitus';
    $log='blog';
    $full = $first . " " . $second;
    $mail = 'emmanuelvitus01@gmail.com';
    $blog = $first . "'s " . $log;

    $data = [];
    $data['email'] = $mail;
    $data['fullname']= $full;
    $data['tlog']=$blog;

    return view('pages.home')->withInfo($data);
  }

  public function getAbout(){

    $first = 'Emmanuel';
    $second = 'Vitus';
    $log='blog';
    $full = $first . " " . $second;
    $mail = 'emmanuelvitus01@gmail.com';
    $blog = $first . "'s " . $log;


    $data = [];
    $data['email'] = $mail;
    $data['fullname']= $full;
    $data['tlog']=$blog;

    return view('pages.about')->withInfo($data);
  }

  public function getContact(){
    return view('pages.contact');
  }
}
