<?php

namespace App\Lib;

use App\Models\BulkInsert;

class BulkInserts{
    public static function tlink(){
        $arr = array(

            [
                "student_name" => "Nirav",
                "age" => "17",
                "city" => "Mumbai",
            ],

            [
                "student_name" => "Arush",
                "age" => "19",
                "city" => "Delhi",
            ],

            [
                "student_name" => "Manisha",
                "age" => "24",
                "city" => "Banglore",
            ],

            [
                "student_name" => "Bimlesh",
                "age" => "17",
                "city" => "Hyderabad",
            ],

            [
                "student_name" => "Dharam",
                "age" => "21",
                "city" => "Ahemdabad",
            ],

            [
                "student_name" => "Ragni",
                "age" => "22",
                "city" => "Chennai",
            ],

            [
                "student_name" => "Vandana",
                "age" => "23",
                "city" => "Kolkata",
            ],

            [
                "student_name" => "Vaishali",
                "age" => "20",
                "city" => "Surat",
            ],

            [
                "student_name" => "Urvarshi",
                "age" => "24",
                "city" => "Vadodara",
            ],

            [
                "student_name" => "Rishabh",
                "age" => "18",
                "city" => "Pune",
            ],

            [
                "student_name" => "Asma",
                "age" => "19",
                "city" => "Jaipur",
            ],

            [
                "student_name" => "Manisha",
                "age" => "22",
                "city" => "Lucknow",
            ],

            [
                "student_name" => "Seema",
                "age" => "21",
                "city" => "Kanpur",
            ],

            [
                "student_name" => "Shalini",
                "age" => "23",
                "city" => "Nagpur",
            ],

            [
                "student_name" => "Rani",
                "age" => "17",
                "city" => "Indore",
            ],

            [
                "student_name" => "Arti",
                "age" => "18",
                "city" => "Thane",
            ],

            [
                "student_name" => "Namita",
                "age" => "23",
                "city" => "Bhopal",
            ],

            [
                "student_name" => "Shaista",
                "age" => "24",
                "city" => "Vizag",
            ],

            [
                "student_name" => "Suruchi",
                "age" => "18",
                "city" => "Pimpri-chinchwad",
            ],

            [
                "student_name" => "Abhaykant",
                "age" => "19",
                "city" => "Patna",
            ],

            [
                "student_name" => "Kamal",
                "age" => "21",
                "city" => "Ghaziabad",
            ],

            [
                "student_name" => "Santosh",
                "age" => "23",
                "city" => "Ludhiana",
            ],

            [
                "student_name" => "Soniya",
                "age" => "18",
                "city" => "Agra",
            ],

            [
                "student_name" => "Rajeev",
                "age" => "17",
                "city" => "Nashik",
            ],

            [
                "student_name" => "Sudhir",
                "age" => "19",
                "city" => "Faridabad",
            ],

            [
                "student_name" => "Gauri",
                "age" => "20",
                "city" => "Meerut",
            ],

            [
                "student_name" => "Diksha",
                "age" => "21",
                "city" => "Rajkot",
            ],

            [
                "student_name" => "Rekha",
                "age" => "22",
                "city" => "Kalyan",
            ],

            [
                "student_name" => "Jaya",
                "age" => "23",
                "city" => "Vasai",
            ],

            [
                "student_name" => "Sushma",
                "age" => "24",
                "city" => "Varanasi",
            ],

            [
                "student_name" => "Sonia",
                "age" => "22",
                "city" => "Srinagar",
            ],

            [
                "student_name" => "Shweta",
                "age" => "18",
                "city" => "Aurangabad",
            ],

            [
                "student_name" => "Saurabh",
                "age" => "19",
                "city" => "Dhanbad",
            ],

            [
                "student_name" => "Avinash",
                "age" => "22",
                "city" => "Amritsar",
            ],

            [
                "student_name" => "Abhayanand",
                "age" => "21",
                "city" => "Navi Mumbai",
            ],

            [
                "student_name" => "Vrinda",
                "age" => "17",
                "city" => "Allahbad",
            ],

            [
                "student_name" => "Ashraf",
                "age" => "23",
                "city" => "Howrah",
            ],

            [
                "student_name" => "Prabhat",
                "age" => "22",
                "city" => "Ranchi",
            ],

            [
                "student_name" => "Ash",
                "age" => "18",
                "city" => "Gwalior",
            ],

            [
                "student_name" => "Razi",
                "age" => "17",
                "city" => "Jabalpur",
            ],

            [
                "student_name" => "Suraiya",
                "age" => "21",
                "city" => "Coimbatore",
            ],

            [
                "student_name" => "Perwez",
                "age" => "19",
                "city" => "Vijaywada",
            ],

            [
                "student_name" => "Priyanka",
                "age" => "16",
                "city" => "Jodhpur",
            ],

            [
                "student_name" => "Vinay",
                "age" => "21",
                "city" => "Madurai",
            ],

            [
                "student_name" => "Aditi",
                "age" => "22",
                "city" => "Raipur",
            ],

            [
                "student_name" => "Pooja",
                "age" => "23",
                "city" => "Kota",
            ],

            [
                "student_name" => "Praveen",
                "age" => "23",
                "city" => "Chandigarh",
            ],

            [
                "student_name" => "Manzoor",
                "age" => "24",
                "city" => "Guwahati",
            ],

            [
                "student_name" => "Rakesh",
                "age" => "21",
                "city" => "Solapur",
            ],

            [
                "student_name" => "Mukesh",
                "age" => "23",
                "city" => "Bareilly",
            ],

            [
                "student_name" => "Neetu",
                "age" => "19",
                "city" => "Mysore",
            ],

            [
                "student_name" => "Raju",
                "age" => "18",
                "city" => "Moradabad",
            ],

            [
                "student_name" => "Babu rao",
                "age" => "20",
                "city" => "Gurgaon",
            ],

            [
                "student_name" => "Shyam",
                "age" => "21",
                "city" => "Aligarh",
            ],

            [
                "student_name" => "Preeti",
                "age" => "22",
                "city" => "Jalandhar",
            ],

            [
                "student_name" => "Devendra",
                "age" => "17",
                "city" => "Tiruchirappalli",
            ],

            [
                "student_name" => "Brijesh",
                "age" => "21",
                "city" => "Bhubaneswar",
            ],

            [
                "student_name" => "Anil",
                "age" => "23",
                "city" => "Salem",
            ],

            [
                "student_name" => "Kusum",
                "age" => "17",
                "city" => "Thiruvanthapuram",
            ],

            [
                "student_name" => "Alexandria",
                "age" => "19",
                "city" => "Bhiwandi",
            ],

            [
                "student_name" => "Mamta",
                "age" => "21",
                "city" => "Saharanpur",
            ],

            [
                "student_name" => "Mansi",
                "age" => "24",
                "city" => "Gorakhpur",
            ],

            [
                "student_name" => "Kunal",
                "age" => "23",
                "city" => "Guntur",
            ],

            [
                "student_name" => "Kamini",
                "age" => "17",
                "city" => "Amravati",
            ],

            [
                "student_name" => "Shital",
                "age" => "24",
                "city" => "Bikaner",
            ],

            [
                "student_name" => "Rinku",
                "age" => "19",
                "city" => "Noida",
            ],

            [
                "student_name" => "Rekha",
                "age" => "22",
                "city" => "Jamshedpur",
            ],

            [
                "student_name" => "Raina",
                "age" => "21",
                "city" => "Bhilai",
            ],

            [
                "student_name" => "Suresh",
                "age" => "18",
                "city" => "Warangal",
            ],

            [
                "student_name" => "Sarita",
                "age" => "23",
                "city" => "Cuttack",
            ],

            [
                "student_name" => "Shilpa",
                "age" => "21",
                "city" => "Firozabad",
            ],

            [
                "student_name" => "Soni",
                "age" => "25",
                "city" => "Kochi",
            ],

            [
                "student_name" => "Anamika",
                "age" => "17",
                "city" => "Bhavnagar",
            ],

            [
                "student_name" => "Roopali",
                "age" => "24",
                "city" => "Dehradun",
            ],

            [
                "student_name" => "Seema",
                "age" => "18",
                "city" => "Durgapur",
            ],

            [
                "student_name" => "Alka",
                "age" => "23",
                "city" => "Asansol",
            ],

            [
                "student_name" => "Ritu",
                "age" => "22",
                "city" => "Nanded",
            ],

            [
                "student_name" => "Indra",
                "age" => "17",
                "city" => "Kohlapur",
            ],

            [
                "student_name" => "Jamal",
                "age" => "21",
                "city" => "Ajmer",
            ],

            [
                "student_name" => "Kanika",
                "age" => "24",
                "city" => "Ujjain",
            ],

            [
                "student_name" => "Sanjay",
                "age" => "19",
                "city" => "Silliguri",
            ],

            [
                "student_name" => "Vikas",
                "age" => "22",
                "city" => "Ulhasnagar",
            ],

            [
                "student_name" => "Sushil",
                "age" => "21",
                "city" => "Jhansi",
            ],

            [
                "student_name" => "Pooja anchal",
                "age" => "22",
                "city" => "Jammu",
            ],

            [
                "student_name" => "Sahiba",
                "age" => "21",
                "city" => "Nellore",
            ],

            [
                "student_name" => "Manisha Chaudhary",
                "age" => "23",
                "city" => "Manglore",
            ],

            [
                "student_name" => "Jyoti",
                "age" => "24",
                "city" => "Belgaum",
            ],

            [
                "student_name" => "Deepika",
                "age" => "23",
                "city" => "Jamnagar",
            ],

            [
                "student_name" => "Suman",
                "age" => "20",
                "city" => "Tirunelveli",
            ],

            [
                "student_name" => "Amit",
                "age" => "21",
                "city" => "Malegaon",
            ],

            [
                "student_name" => "Ravinder",
                "age" => "17",
                "city" => "Gaya",
            ],

            [
                "student_name" => "Kanchan",
                "age" => "24",
                "city" => "Ambattur",
            ],

            [
                "student_name" => "Arjun",
                "age" => "18",
                "city" => "Jalgaon",
            ],

            [
                "student_name" => "Naresh",
                "age" => "23",
                "city" => "Udaipur",
            ],

            [
                "student_name" => "Hukam",
                "age" => "18",
                "city" => "Maheshtala",
            ],

            [
                "student_name" => "Parshuram",
                "age" => "22",
                "city" => "Tiruppur",
            ],

            [
                "student_name" => "Hari",
                "age" => "21",
                "city" => "Davanagere",
            ],

            [
                "student_name" => "Kishan",
                "age" => "20",
                "city" => "Kozhikode",
            ],

            [
                "student_name" => "Jagdish",
                "age" => "24",
                "city" => "Kurnool",
            ],

            [
                "student_name" => "Ved",
                "age" => "17",
                "city" => "Akola",
            ],
        );

        $blink = BulkInsert::insert($arr);
    }
}

