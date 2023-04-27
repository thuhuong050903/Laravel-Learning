<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function covidByContinent()
    {
        // Lấy dữ liệu từ API covid19api.com
        $covidData = Http::get('https://api.covid19api.com/summary')->json();

        // Lấy dữ liệu từ API restcountries.com
        $countryData = Http::get('https://restcountries.com/v2/all?fields=name,region')->json();

        // Tạo một mảng rỗng để lưu tổng số người nhiễm COVID-19 tại mỗi châu lục
        $covidByContinent = [
            'Asia' => 0,
            'Europe' => 0,
            'Africa' => 0,
            'Americas' => 0,
            'Oceania' => 0,
        ];

        // Lọc các nước theo châu lục và tính tổng số người nhiễm COVID-19 tại mỗi châu lục
        foreach ($covidData['Countries'] as $country) {
            foreach ($countryData as $data) {
                if ($country['Country'] == $data['name']) {
                    $continent = $data['region'];

                    switch ($continent) {
                        case 'Asia':
                            $covidByContinent['Asia'] += $country['TotalConfirmed'];
                            break;
                        case 'Europe':
                            $covidByContinent['Europe'] += $country['TotalConfirmed'];
                            break;
                        case 'Africa':
                            $covidByContinent['Africa'] += $country['TotalConfirmed'];
                            break;
                        case 'Americas':
                            $covidByContinent['Americas'] += $country['TotalConfirmed'];
                            break;
                        case 'Oceania':
                            $covidByContinent['Oceania'] += $country['TotalConfirmed'];
                            break;
                        default:
                            break;
                    }
                }
            }
        }

        // Trả về view với dữ liệu đã tính toán
        return view('hienThiAPI', ['covidByContinent' => $covidByContinent]);
    }
}
