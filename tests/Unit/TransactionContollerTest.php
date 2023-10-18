<?php

namespace Tests\Unit;

use Tests\TestCase;

class TransactionContollerTest extends TestCase
{
    public function test_fetch_transaction()
    {
        $response = $response = $this->json('GET', '/api/transaction' );

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'meta' => [
                'code',
                'status',
                'message',
            ],
            'result' => [
                '*' => [
                    '_id',
                    'transaction_id',
                    'customer_name',
                    'customer_code',
                    'transaction_amount',
                    'transaction_discount',
                    'transaction_additional_field',
                    'transaction_payment_type',
                    'transaction_state',
                    'transaction_code',
                    'transaction_order',
                    'location_id',
                    'organization_id',
                    'created_at',
                    'updated_at',
                    'transaction_payment_type_name',
                    'transaction_cash_amount',
                    'transaction_cash_change',
                    'customer_attribute',
                    'connote',
                    'connote_id',
                    'origin_data',
                    'destination_data',
                    'koli_data',
                    'custom_field',
                    'currentLocation',
                ],
            ],
        ]);

         $response->assertJson([
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => 'Transaction found',
          ],
        ]);

    }


    public function test_create_transaction()
    {
        $data = [
            "transaction_id" => "d0090c40-539f-479a-8274-899b9970bddc",
            "customer_name" => "PT. SUBUR GROUP",
            "customer_code" => "1678593",
            "transaction_amount" => "70700",
            "transaction_discount" => "0",
            "transaction_additional_field" => null,
            "transaction_payment_type" => "29",
            "transaction_state" => "PAID",
            "transaction_code" => "CGKFT20200715121",
            "transaction_order" => 121,
            "location_id" => "5cecb20b6c49615b174c3e74",
            "organization_id" => 6,
            "created_at" => "2020-07-15T04:11:12.000000Z",
            "updated_at" => "2020-07-15T04:11:22.000000Z",
            "transaction_payment_type_name" => "Invoice",
            "transaction_cash_amount" => 0,
            "transaction_cash_change" => 0,
            "customer_attribute" => [
                "Nama_Sales" => "Radit Fitrawikarsa",
                "TOP" => "14 Hari",
                "Jenis_Pelanggan" => "B2B"
            ],
            "connote" => [
                "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
                "connote_number" => 1,
                "connote_service" => "ECO",
                "connote_service_price" => 70700,
                "connote_amount" => 70700,
                "connote_code" => "AWB00100209082020",
                "connote_booking_code" => null,
                "connote_order" => 326931,
                "connote_state" => "PAID",
                "connote_state_id" => 2,
                "zone_code_from" => "CGKFT",
                "zone_code_to" => "SMG",
                "surcharge_amount" => null,
                "transaction_id" => "d0090c40-539f-479a-8274-899b9970bddc",
                "actual_weight" => 20,
                "volume_weight" => 0,
                "chargeable_weight" => 20,
                "created_at" => "2020-07-15T11:11:12+0700",
                "updated_at" => "2020-07-15T11:11:22+0700",
                "organization_id" => 6,
                "location_id" => "5cecb20b6c49615b174c3e74",
                "connote_total_package" => "3",
                "connote_surcharge_amount" => "0",
                "connote_sla_day" => "4",
                "location_name" => "Hub Jakarta Selatan",
                "location_type" => "HUB",
                "source_tariff_db" => "tariff_customers",
                "id_source_tariff" => "1576868",
                "pod" => null,
                "history" => []
            ],
            "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
            "origin_data" => [
                "customer_name" => "PT. NARA OKA PRAKARSA",
                "customer_address" => "JL. KH. AHMAD DAHLAN NO. 100, SEMARANG TENGAH 12420",
                "customer_email" => "info@naraoka.co.id",
                "customer_phone" => "024-1234567",
                "customer_address_detail" => null,
                "customer_zip_code" => "12420",
                "zone_code" => "CGKFT",
                "organization_id" => 6,
                "location_id" => "5cecb20b6c49615b174c3e74"
            ],
            "destination_data" => [
                "customer_name" => "PT AMARIS HOTEL SIMPANG LIMA",
                "customer_address" => "JL. KH. AHMAD DAHLAN NO. 01, SEMARANG TENGAH",
                "customer_email" => null,
                "customer_phone" => "0248453499",
                "customer_address_detail" => "KOTA SEMARANG SEMARANG TENGAH KARANGKIDUL",
                "customer_zip_code" => "50241",
                "zone_code" => "SMG",
                "organization_id" => 6,
                "location_id" => "5cecb20b6c49615b174c3e74"
            ],
            "koli_data" => [
                [
                    "koli_length" => 0,
                    "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.1",
                    "created_at" => "2020-07-15 11:11:13",
                    "koli_chargeable_weight" => 9,
                    "koli_width" => 0,
                    "koli_surcharge" => [],
                    "koli_height" => 0,
                    "updated_at" => "2020-07-15 11:11:13",
                    "koli_description" => "V WARP",
                    "koli_formula_id" => null,
                    "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
                    "koli_volume" => 0,
                    "koli_weight" => 9,
                    "koli_custom_field" => [
                        "awb_sicepat" => null,
                        "harga_barang" => null
                    ],
                    "koli_code" => "AWB00100209082020.1"
                ],
                [
                    "koli_length" => 0,
                    "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.2",
                    "created_at" => "2020-07-15 11:11:13",
                    "koli_chargeable_weight" => 9,
                    "koli_width" => 0,
                    "koli_surcharge" => [],
                    "koli_height" => 0,
                    "updated_at" => "2020-07-15 11:11:13",
                    "koli_description" => "V WARP",
                    "koli_formula_id" => null,
                    "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
                    "koli_volume" => 0,
                    "koli_weight" => 9,
                    "koli_custom_field" => [
                        "awb_sicepat" => null,
                        "harga_barang" => null
                    ],
                    "koli_code" => "AWB00100209082020.2"
                ],
                [
                    "koli_length" => 0,
                    "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.3",
                    "created_at" => "2020-07-15 11:11:13",
                    "koli_chargeable_weight" => 2,
                    "koli_width" => 0,
                    "koli_surcharge" => [],
                    "koli_height" => 0,
                    "updated_at" => "2020-07-15 11:11:13",
                    "koli_description" => "LID HOT CUP",
                    "koli_formula_id" => null,
                    "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
                    "koli_volume" => 0,
                    "koli_weight" => 2,
                    "koli_custom_field" => [
                        "awb_sicepat" => null,
                        "harga_barang" => null
                    ],
                    "koli_code" => "AWB00100209082020.3"
                ]
            ],
            "custom_field" => [
                "catatan_tambahan" => "JANGAN DI BANTING / DI TINDIH"
            ],
            "currentLocation" => [
                "name" => "Hub Jakarta Selatan",
                "code" => "JKTS01",
                "type" => "Agent"
            ],
            "_id" => "652fdf4cbee724018c06a302"
        ];

        $response = $this->json('POST', '/api/transaction', $data);

        $response->assertStatus(200);

        $response->assertJsonStructure([
        'meta' => [
                'code',
                'status',
                'message',
            ],
        ]);

        $response->assertJson([
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => 'Transaction created',
          ],
        ]);

    }

    public function test_fetch_transaction_by_id()
    {

        $id = "652fd800a7fe0d6ee0018f32";

        $response = $this->json('GET', '/api/transaction/' . $id);

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'meta' => [
                'code',
                'status',
                'message',
            ],
        ]);

        $response->assertJson([
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => 'Transaction Found',
        ],
        ]);
    }

    public function test_delete_transaction()
    {

        $id = "652fe1f494efa73ccd042bc2";

        $response = $this->json('DELETE', '/api/transaction/' . $id);

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'meta' => [
                'code',
                'status',
                'message',
            ],
        ]);

        $response->assertJson([
            'meta' => [
                'code' => 200,
                'status' => 'success',
                'message' => 'transaction deleted',
            ]
        ]);
    }

    public function test_update_status_transaction()
    {

        $id = "652fe25346ac7514a00b3152";

        $response = $this->json('PATCH', '/api/transaction/' . $id);

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'meta' => [
                'code',
                'status',
                'message',
            ],
        ]);

        $response->assertJson([
            'meta' => [
                'code' => 200,
                'status' => 'success',
                'message' => 'status transaction updated',
            ]
        ]);
    }

    public function test_update_transaction()
    {
        $id = "652fe25346ac7514a00b3152";

        $data = [
            "transaction_id" => "d0090c40-539f-479a-8274-899b9970bddc",
            "customer_name" => "PT. SUBUR GROUP",
            "customer_code" => "1678593",
            "transaction_amount" => "70700",
            "transaction_discount" => "0",
            "transaction_additional_field" => null,
            "transaction_payment_type" => "29",
            "transaction_state" => "PAID",
            "transaction_code" => "CGKFT20200715121",
            "transaction_order" => 121,
            "location_id" => "5cecb20b6c49615b174c3e74",
            "organization_id" => 6,
            "created_at" => "2020-07-15T04:11:12.000000Z",
            "updated_at" => "2020-07-15T04:11:22.000000Z",
            "transaction_payment_type_name" => "Invoice",
            "transaction_cash_amount" => 0,
            "transaction_cash_change" => 0,
            "customer_attribute" => [
                "Nama_Sales" => "Radit Fitrawikarsa",
                "TOP" => "14 Hari",
                "Jenis_Pelanggan" => "B2B"
            ],
            "connote" => [
                "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
                "connote_number" => 1,
                "connote_service" => "ECO",
                "connote_service_price" => 70700,
                "connote_amount" => 70700,
                "connote_code" => "AWB00100209082020",
                "connote_booking_code" => null,
                "connote_order" => 326931,
                "connote_state" => "PAID",
                "connote_state_id" => 2,
                "zone_code_from" => "CGKFT",
                "zone_code_to" => "SMG",
                "surcharge_amount" => null,
                "transaction_id" => "d0090c40-539f-479a-8274-899b9970bddc",
                "actual_weight" => 20,
                "volume_weight" => 0,
                "chargeable_weight" => 20,
                "created_at" => "2020-07-15T11:11:12+0700",
                "updated_at" => "2020-07-15T11:11:22+0700",
                "organization_id" => 6,
                "location_id" => "5cecb20b6c49615b174c3e74",
                "connote_total_package" => "3",
                "connote_surcharge_amount" => "0",
                "connote_sla_day" => "4",
                "location_name" => "Hub Jakarta Selatan",
                "location_type" => "HUB",
                "source_tariff_db" => "tariff_customers",
                "id_source_tariff" => "1576868",
                "pod" => null,
                "history" => []
            ],
            "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
            "origin_data" => [
                "customer_name" => "PT. NARA OKA PRAKARSA",
                "customer_address" => "JL. KH. AHMAD DAHLAN NO. 100, SEMARANG TENGAH 12420",
                "customer_email" => "info@naraoka.co.id",
                "customer_phone" => "024-1234567",
                "customer_address_detail" => null,
                "customer_zip_code" => "12420",
                "zone_code" => "CGKFT",
                "organization_id" => 6,
                "location_id" => "5cecb20b6c49615b174c3e74"
            ],
            "destination_data" => [
                "customer_name" => "PT AMARIS HOTEL SIMPANG LIMA",
                "customer_address" => "JL. KH. AHMAD DAHLAN NO. 01, SEMARANG TENGAH",
                "customer_email" => null,
                "customer_phone" => "0248453499",
                "customer_address_detail" => "KOTA SEMARANG SEMARANG TENGAH KARANGKIDUL",
                "customer_zip_code" => "50241",
                "zone_code" => "SMG",
                "organization_id" => 6,
                "location_id" => "5cecb20b6c49615b174c3e74"
            ],
            "koli_data" => [
                [
                    "koli_length" => 0,
                    "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.1",
                    "created_at" => "2020-07-15 11:11:13",
                    "koli_chargeable_weight" => 9,
                    "koli_width" => 0,
                    "koli_surcharge" => [],
                    "koli_height" => 0,
                    "updated_at" => "2020-07-15 11:11:13",
                    "koli_description" => "V WARP",
                    "koli_formula_id" => null,
                    "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
                    "koli_volume" => 0,
                    "koli_weight" => 9,
                    "koli_custom_field" => [
                        "awb_sicepat" => null,
                        "harga_barang" => null
                    ],
                    "koli_code" => "AWB00100209082020.1"
                ],
                [
                    "koli_length" => 0,
                    "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.2",
                    "created_at" => "2020-07-15 11:11:13",
                    "koli_chargeable_weight" => 9,
                    "koli_width" => 0,
                    "koli_surcharge" => [],
                    "koli_height" => 0,
                    "updated_at" => "2020-07-15 11:11:13",
                    "koli_description" => "V WARP",
                    "koli_formula_id" => null,
                    "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
                    "koli_volume" => 0,
                    "koli_weight" => 9,
                    "koli_custom_field" => [
                        "awb_sicepat" => null,
                        "harga_barang" => null
                    ],
                    "koli_code" => "AWB00100209082020.2"
                ],
                [
                    "koli_length" => 0,
                    "awb_url" => "https://tracking.mile.app/label/AWB00100209082020.3",
                    "created_at" => "2020-07-15 11:11:13",
                    "koli_chargeable_weight" => 2,
                    "koli_width" => 0,
                    "koli_surcharge" => [],
                    "koli_height" => 0,
                    "updated_at" => "2020-07-15 11:11:13",
                    "koli_description" => "LID HOT CUP",
                    "koli_formula_id" => null,
                    "connote_id" => "f70670b1-c3ef-4caf-bc4f-eefa702092ed",
                    "koli_volume" => 0,
                    "koli_weight" => 2,
                    "koli_custom_field" => [
                        "awb_sicepat" => null,
                        "harga_barang" => null
                    ],
                    "koli_code" => "AWB00100209082020.3"
                ]
            ],
            "custom_field" => [
                "catatan_tambahan" => "JANGAN DI BANTING / DI TINDIH"
            ],
            "currentLocation" => [
                "name" => "Hub Jakarta Selatan",
                "code" => "JKTS01",
                "type" => "Agent"
            ],
            "_id" => "652fdf4cbee724018c06a302"
        ];

       $response = $this->json('PUT', '/api/transaction/' . $id, $data);

        $response->assertStatus(200);

        $response->assertJsonStructure([
        'meta' => [
                'code',
                'status',
                'message',
            ],
        ]);

        $response->assertJson([
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => 'Transaction updated',
          ],
        ]);

    }

}
