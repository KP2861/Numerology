<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Agra', 'Ahmedabad', 'Ahmednagar', 'Aizawl', 'Ajmer',
            'Akola', 'Aligarh', 'Allahabad', 'Amravati', 'Amritsar',
            'Anantapur', 'Aurangabad', 'Bagalkot', 'Bangalore', 'Bareilly',
            'Baroda', 'Belagavi', 'Belgaum', 'Bhopal', 'Bhubaneswar',
            'Bikaner', 'Bilaspur', 'Bokaro', 'Chandigarh', 'Chennai',
            'Chhapra', 'Coimbatore', 'Cuttack', 'Dehradun', 'Dhanbad',
            'Dharwad', 'Dibrugarh', 'Dumka', 'Faridabad', 'Firozabad',
            'Gandhinagar', 'Gaya', 'Ghaziabad', 'Gwalior', 'Guwahati',
            'Hapur', 'Hosur', 'Howrah', 'Indore', 'Itanagar',
            'Jaipur', 'Jaisalmer', 'Jammu', 'Jamshedpur', 'Jodhpur',
            'Kalyan', 'Kalyan-Dombivli', 'Kanpur', 'Karnal', 'Kochi',
            'Kolar', 'Kolhapur', 'Kota', 'Kozhikode', 'Lucknow',
            'Ludhiana', 'Madhurai', 'Mangaluru', 'Mysuru', 'Nagapattinam',
            'Nagpur', 'Nanded', 'Nashik', 'Navi Mumbai', 'Neemuch',
            'Noida', 'Palakkad', 'Panaji', 'Patiala', 'Patna',
            'Puducherry', 'Pune', 'Raipur', 'Rajkot', 'Ranchi',
            'Raurkela', 'Rohtak', 'Saharanpur', 'Salem', 'Sangli',
            'Satara', 'Shimla', 'Srinagar', 'Surat', 'Thane',
            'Thiruvananthapuram', 'Tirupati', 'Udaipur', 'Ujjain',
            'Varanasi', 'Vijayawada', 'Visakhapatnam', 'Warangal', 'Yamunanagar',
            'Agartala', 'Durgapur', 'Kharagpur', 'Haldia', 'Jalgaon',
            'Jalna', 'Karimnagar', 'Katihar', 'Khammam',
            'Krishna', 'Kurnool', 'Madhubani', 'Mahabubnagar', 'Malappuram',
            'Mangalagiri', 'Moradabad', 'Muzaffarpur', 'Nellore', 'Nizamabad',
            'Panchkula', 'Pithoragarh', 'Rae Bareli', 'Rajamahendravaram', 'Rourkela',
            'Sagar', 'Sangrur', 'Secunderabad', 'Siliguri', 'Sonipat',
            'Tirunelveli', 'Yavatmal', 'Bhind', 'Hoshangabad', 'Itarsi',
            'Khandwa', 'Latur', 'Maharajganj', 'Purnia',
            'Raigarh', 'Rewa', 'Saharsa', 'Saran', 'Sitapur',
            'Sonbhadra', 'Tiruvannamalai', 'Waidhan', 'Yamuna Nagar',
            'Asansol', 'Durg', 'Ranchi', 'Jabalpur',
            'Bhilai', 'Bhopal', 'Bikaner', 'Faridkot', 'Tirupur',
            'Nellore', 'Hosur', 'Amritsar', 'Karur',
            'Ambala', 'Bhatinda', 'Nizamabad', 'Belgaum', 'Kottayam',
            'Kollam', 'Malappuram', 'Nagaon', 'Nandurbar', 'Palakkad',
            'Panchkula', 'Porbandar', 'Rajkot', 'Rudrapur', 'Shivamogga',
            'Thane', 'Thiruvananthapuram', 'Vadodara', 'Vellore', 'Yavatmal'
        ];

        $cities = array_unique($cities);

        // Optional: Reindex the array
        $cities = array_values($cities);

        foreach ($cities as $city) {
            DB::table('cities')->insert(['name' => $city]);
        }
    }
}
