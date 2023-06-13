<?php

namespace App\Http\Controllers;

class AppleAssociationController extends Controller
{
    public function index()
    {
        return response()->json(json_decode('{
          "applinks": {
            "apps": [],
            "details": [
            {
              "appID": "R7N9R7LVRM.com.app.uFree",
              "paths": ["*"]
            }
            ]
          }
        }'));
    }
}
