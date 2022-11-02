<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShipmentController extends Controller
{
    
    public function show(){

        $token="sand_J/XV9tBvYcV9SQ+nqR73A9lHUyXG7U2KiFIjHmgUJds=";
    

        @include('vendor.autoload.php');


    $client = new \GuzzleHttp\Client();
    
    $response = $client->request('post', 'https://api.easyship.com/v2/shipments', [


'body' => '{
  
    "origin_address": {
        "line_1": "65 Prospect St",
        "line_2": "Unit 430",
        "state": "California",
        "city": "Los-Angeles",
        "postal_code": "900001",
        "country_alpha2": "US",
        "contact_name": "varun",
        "company_name": "Elijahs Watches",
        "contact_phone": "+434346453242",
        "contact_email": "Mason@gmail.com"
    },
    "sender_address": {
        "line_1": "65 Prospect St",
        "line_2": "Unit 430",
        "state": "California",
        "city": "Los-Angeles",
        "postal_code": "90001",
        "country_alpha2": "US",
        "contact_name": "varun",
        "company_name": "Elijahs Watches",
        "contact_phone": "+434346453242",
        "contact_email": "Elijah@gmail.com"
    },
    "return_address": {
        "line_1": "65 Prospect St",
        "line_2": "Unit 430",
        "state": "California",
        "city": "Los-Angeles",
        "postal_code": "90001",
        "country_alpha2": "US",
        "contact_name": "varun",
        "company_name": "Elijahs Watches",
        "contact_phone": "+434346453242",
        "contact_email": "Elijah@gmail.com"
    },
    "destination_address": {
        "line_1": "10 quai de Jemmapes",
        "line_2": "Porte J",
        "state": "CA",
        "city": "Paris",
        "postal_code": "75010",
        "country_alpha2": "FR",
        "contact_name": "Noah",
        "company_name": null,
        "contact_phone": "+45534754653",
        "contact_email": "noah@gmail.com"
    },
    "metadata": {},
    "set_as_residential": false,
    "consignee_tax_id": null,
    "eei_reference": null,
    "incoterms": "DDU",
    "insurance": {
        "is_insured": false,
        "insured_amount": 10,
        "insured_currency": "USD"
    },
    "order_data": {
        "platform_name": null,
        "platform_order_number": null,
        "order_tag_list": [
            "VIP"
        ],
        "seller_notes": null,
        "buyer_notes": null
    },
    "courier_selection": {
        "selected_courier_id": null,
        "allow_courier_fallback": false,
        "apply_shipping_rules": true
    },
    "shipping_settings": {
        "units": {
            "weight": "lb",
            "dimensions": "in"
        },
        "printing_options": {
            "format": "pdf",
            "label": "4x6",
            "commercial_invoice": "A4",
            "packing_slip": "none"
        },
        "buy_label": false,
        "buy_label_synchronous": false
    },
    "parcels": [
        {
            "total_actual_weight": 0.8,
            "box": {
                "slug": null,
                "length": 10,
                "width": 8,
                "height": 5
            },
            "items": [
                {
                    "description": "new feature",
                    "category": "Crafts",
                    "sku": "test01",
                    "quantity": 1,
                    "dimensions": {
                        "length": null,
                        "width": null,
                        "height": null
                    },
                    "actual_weight": 10,
                    "declared_currency": "USD",
                    "declared_customs_value": 70
                }
            ]
        }
    ]

}',
      'headers' => [
        'Authorization' => 'Bearer '.$token,
        'accept' => 'application/json',
        'content-type' => 'application/json',
      ],
    ]);

   //return $response->getBody();



   $response1 = $client->request('GET', 'https://api.easyship.com/2022-10/shipments', [
    'headers' => [
        'Authorization' => 'Bearer '.$token,
      'accept' => 'application/json',
    ],
  ]);
  
  return $response1->getBody();


}
}
