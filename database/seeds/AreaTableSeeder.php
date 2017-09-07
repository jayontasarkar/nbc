<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
        	[
	        	'name' => 'Barisal',
	        	'tag'  => 'বরিশাল',
	        	'children' => [
        			['name' => 'Barisal', 'tag'  => 'বরিশাল'],
        			['name' => 'Barguna', 'tag' => 'বরগুনা'],
        			['name' => 'Bhola', 'tag' => 'ভোলা'],
        			['name' => 'Jhalokati', 'tag' => 'ঝালকাঠি'],
        			['name' => 'Patuakhali', 'tag' => 'পটুয়াখালী'],
        			['name' => 'Pirojpur', 'tag' => 'পিরোজপুর']
	        	],
	        ],	
        	[
        		'name' => 'Chittagong',
        		'tag'  => 'চট্টগ্রাম',
        		'children' => [
        			['name' => 'Chittagong', 'tag'  => 'চট্টগ্রাম'],
        			['name' => 'Bandarban', 'tag' => 'বান্দরবান'],
        			['name' => 'Brahmanbaria', 'tag' => 'ব্রাহ্মণবাড়িয়া'],
        			['name' => 'Chandpur', 'tag' => 'চাঁদপুর'],
        			['name' => 'Comilla', 'tag' => 'কুমিল্লা'],
        			['name' => 'Cox\'s Bazar', 'tag' => 'কক্স বাজার'],
        			['name' => 'Feni', 'tag' => 'ফেনী'],
        			['name' => 'Khagrachhari', 'tag' => 'খাগড়াছড়ি'],
        			['name' => 'Lakshmipur', 'tag' => 'লক্ষ্মীপুর'],
        			['name' => 'Noakhali', 'tag' => 'নোয়াখালী'],
        			['name' => 'Rangamati', 'tag' => 'রাঙ্গামাটি']
        		]
        	],
        	[
        		'name' => 'Dhaka',
        		'tag'  => 'ঢাকা',
        		'children' => [
        			['name' => 'Dhaka', 'tag'  => 'ঢাকা'],
        			['name' => 'Faridpur', 'tag' => 'ফরিদপুর'],
        			['name' => 'Gazipur', 'tag' => 'গাজীপুর'],
        			['name' => 'Gopalganj', 'tag' => 'গোপালগঞ্জ'],
        			['name' => 'Kishoreganj', 'tag' => 'কিশোরগঞ্জ'],
        			['name' => 'Madaripur', 'tag' => 'মাদারীপুর'],
        			['name' => 'Manikganj', 'tag' => 'মানিকগঞ্জ'],
        			['name' => 'Munshiganj', 'tag' => 'মুন্সিগঞ্জ'],
        			['name' => 'Narayanganj', 'tag' => 'নারায়াণগঞ্জ'],
        			['name' => 'Narsingdi', 'tag' => 'নরসিংদী'],
        			['name' => 'Rajbari', 'tag' => 'রাজবাড়ি'],
        			['name' => 'Shariatpur', 'tag' => 'শরীয়তপুর'],
        			['name' => 'Tangail', 'tag' => 'টাঙ্গাইল']
        		]
        	],
        	[
        		'name' => 'Khulna',
        		'tag'  => 'খুলনা',
        		'children' => [
        			['name' => 'Khulna', 'tag'  => 'খুলনা'],
        			['name' => 'Bagerhat', 'tag' => 'বাগেরহাট'],
        			['name' => 'Chuadanga', 'tag' => 'চুয়াডাঙ্গা'],
        			['name' => 'Jessore', 'tag' => 'যশোর'],
        			['name' => 'Jhenaidah', 'tag' => 'ঝিনাইদহ'],
        			['name' => 'Kushtia', 'tag' => 'কুষ্টিয়া'],
        			['name' => 'Magura', 'tag' => 'মাগুরা'],
        			['name' => 'Meherpur', 'tag' => 'মেহেরপুর'],
        			['name' => 'Narail', 'tag' => 'নড়াইল'],
        			['name' => 'Satkhira', 'tag' => 'সাতক্ষীরা']
        		]
        	],
        	[
        		'name' => 'Mymensingh',
        		'tag'  => 'ময়মনসিং',
        		'children' => [
        			['name' => 'Mymensingh', 'tag'  => 'ময়মনসিং'],
        			['name' => 'Jamalpur', 'tag' => 'জামালপুর'],
        			['name' => 'Netrokona', 'tag' => 'নেত্রকোনা'],
        			['name' => 'Sherpur', 'tag' => 'শেরপুর']
        		]
        	],
        	[
        		'name' => 'Rajshahi',
        		'tag'  => 'রাজশাহী',
        		'children' => [
        			['name' => 'Rajshahi', 'tag'  => 'রাজশাহী'],
        			['name' => 'Bogra', 'tag' => 'বগুড়া'],
        			['name' => 'Jaipurhat', 'tag' => 'জয়পুরহাট'],
        			['name' => 'Naogaon', 'tag' => 'নওগাঁ'],
        			['name' => 'Natore', 'tag' => 'নাটোর'],
        			['name' => 'Chapai Nawabganj', 'tag' => 'চাঁপাই নবাবগঞ্জ'],
        			['name' => 'Pabna', 'tag' => 'পাবনা'],
        			['name' => 'Sirajganj', 'tag' => 'সিরাজগঞ্জ'],
        		]
        	],
        	[
        		'name' => 'Rangpur',
        		'tag'  => 'রংপুর',
        		'children' => [
        			['name' => 'Rangpur', 'tag'  => 'রংপুর'],
        			['name' => 'Dinajpur', 'tag' => 'দিনাজপুর'],
        			['name' => 'Gaibandha', 'tag' => 'গাইবান্ধা'],
        			['name' => 'Kurigram', 'tag' => 'কুড়িগ্রাম'],
        			['name' => 'Lalmonirhat', 'tag' => 'লালমনিরহাট'],
        			['name' => 'Nilphamari', 'tag' => 'নীলফামারী'],
        			['name' => 'Panchagarh', 'tag' => 'পঞ্চগড়'],
        			['name' => 'Thakurgaon', 'tag' => 'ঠাকুরগাঁও'],
        		]
        	],
        	[
        		'name' => 'Sylhet',
        		'tag'  => 'সিলেট',
        		'children' => [
        			['name' => 'Sylhet', 'tag'  => 'সিলেট'],
        			['name' => 'Habiganj', 'tag' => 'হবিগঞ্জ'],
        			['name' => 'Moulvibazar', 'tag' => 'মৌলভীবাজার'],
        			['name' => 'Sunamganj', 'tag' => 'সুনামগঞ্জ']
        		]
        	]		
        ];
        
        foreach($areas as $area){
        	\App\Area::create($area);
        }
    }
}
