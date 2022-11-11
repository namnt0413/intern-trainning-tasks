<?php

namespace App\Services;

class TestService {

    public function showCurrentTime() {
        $now =  now();
        return view('test',compact('now'))->render();
    }
}
?>
