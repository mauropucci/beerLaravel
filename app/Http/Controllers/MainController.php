<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller {

   
    public function getLogin() {
        return view('login');
	}
   
   
   
   
   public function apiGetBeers() {
	    $client = new Client();
		$data = null;
		
        // API endpoint URL
        $apiUrl = "https://api.openbrewerydb.org/v1/breweries";

        try {
            // Make a GET request to the OpenWeather API
            $response = $client->get($apiUrl);

            // Get the response body as an array
            $data = json_decode($response->getBody(), true);

            // Handle the retrieved weather data as needed (e.g., pass it to a view)
        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            //return view('api_error', ['error' => $e->getMessage()]);
        }
		return $data;
   }
   
   
   
	public function getIndex() {
		$userId = Auth::id();
		if($userId <= 0) {
			return redirect('/');
		}
	   
        $province="";
		$model="";
		$paginedData = [];
		$data = $this->apiGetBeers();
		$numRecords = count($data);
		$currentPage = 1;
		$numPages = 1;
		$recordsPerPage=9;
		$endIndex=9;
		$startIndex=0;
		while(($numPages * $recordsPerPage) < $numRecords) {
			$numPages = $numPages +1;
		}
		
		for($i=$startIndex; $i<$endIndex; $i++) {
			array_push($paginedData, $data[$i]);
		}
		
		
		return view('home', ['beerData' => $paginedData, 'numPages' => $numPages, 'currentPage' => $currentPage, 'province' => $province, 'model' => $model, 'recordsPerPage' => $recordsPerPage] );
	}
	
	
	
	
	
	
	 public function getIndex2(Request $request) {
		$userId = Auth::id();
		if($userId <= 0) {
			return redirect('/');
		}
		
        $data = $this->apiGetBeers();
		$recordsPerPage = $request->input('IdRecords');
		$province = $request->input('IdCitta');
		$model = $request->input('IdMarca');
		$numRecords=count($data);
		$currentPage = $request->input('CurrentPage');
		$paginedData = [];
		$filteredData = [];
		
		
		foreach($data as $item){
			if(($province=="" || $item['state_province'] == $province) && ($model== "" || strpos($item['name'], $model) > 0)) {
				array_push($filteredData, $item);
			}
		}
		
		$numRecords = count($filteredData);
		//createPagination('beerListPagination', numRecords, 'RicercaBirre', currentPage);
		
		$paginedData = [];		
		$endIndex = $currentPage*$recordsPerPage;
		$startIndex = $endIndex-$recordsPerPage;
		if($endIndex >= count($filteredData)) {
			$endIndex = count($filteredData);
		}
		
		for($i=$startIndex; $i<$endIndex; $i++) {
			array_push($paginedData, $filteredData[$i]);
		}
		
		$numPages = 1;
		while(($numPages * $recordsPerPage) < $numRecords) {
			$numPages = $numPages +1;
		}
		
		return view('home', ['beerData' => $paginedData, 'numPages' => $numPages, 'currentPage' => $currentPage, 'province' => $province, 'model' => $model, 'recordsPerPage' => $recordsPerPage] );
	}
	
	
	
}