<?php

namespace MyAnPro\RecitalApi\Api;

use Illuminate\Support\Collection;
use MyAnPro\RecitalApi\Model\ResultatResponse;
use MyAnPro\RecitalApi\Model\ValueResponse;

class FormatResponseWebhook
{
    public function format(array $response): ResultatResponse
    {
        $listeValues = new Collection();

        $values = $response['extract'][0]['result'];
        $result = new ResultatResponse(
            $values["id"],
            $values["name"],
            $values["status"],
            $values["number_of_pages"],
            $values["document_type_id"],
            $values["correction_external_link"],
            $values["custom_metadata"],
            $values["is_ocrized"],
            $values["user_correction"],
            $values["groups"],
            $values["objects"],
        );

        foreach ($response['extract'][0]['result']['values'] as $valeur) {
            $listeValues->push(
                new ValueResponse(
                    $valeur['value']['origin'],
                    $valeur['value']['confidence'],
                    $valeur['value']['status'],
                    $valeur['value']['page_nb'],
                    $valeur['value']['value'],
                    $valeur['value']['location'],
                    $valeur['value']['valid_page_nb'],
                    $valeur['value']['valid_value'],
                    $valeur['value']['valid_location'],
                    $valeur['value']['normalized_value_type'],
                    $valeur['value']['normalized_value'],
                    $valeur['value']['prevalidated'],
                    $valeur['value']['business_rule_strings'],
                )
            );
        }

        $result->setValuesResponse($listeValues);

        return $result;
    }
}
